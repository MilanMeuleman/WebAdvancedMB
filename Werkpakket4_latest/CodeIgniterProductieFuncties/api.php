<?php
// get HTTP method
error_reporting(0);
$method = $_SERVER['REQUEST_METHOD'];
// trim de url en plaats ieder element in array ($request)
$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
// decode data van de inputstream
$input = json_decode(file_get_contents('php://input'), true);
// conncect naar sql database, VERVANG dbname door database naam
$link = mysqli_connect('localhost', 'root', 'root', 'projectdb');
mysqli_set_charset($link, 'utf8');

// doe een regex op de elementen van de url voor de table name en haal deze uit de request array (zie regel 8)
$table = preg_replace('/[^a-z0-9_]+/i', '', array_shift($request));
// haal de key uit de array
$key = array_shift($request) + 0;

// kolommen uit request array halen
$columns = preg_replace('/[^a-z0-9_]+/i', '', array_keys($input));
$values = array_map(function ($value) use ($link) {
    if ($value === null) return null;
    return mysqli_real_escape_string($link, (string)$value);
}, array_values($input));

// set van sqlquery aanmaken (bij PUT of POST)
$set = '';
for ($i = 0; $i < count($columns); $i++) {
    $set .= ($i > 0 ? ',' : '') . '`' . $columns[$i] . '`=';
    $set .= ($values[$i] === null ? 'NULL' : '"' . $values[$i] . '"');
}
// create SQL
switch ($method) {
    case 'GET':
        $sql = "select * from `$table`" . ($key ? " WHERE id=$key" : '');
        break;
    case 'PUT':
        $sql = "update `$table` set $set where id=$key";
        break;
    case 'POST':
        $sql = "insert into `$table` set $set";
        break;
}

// excecute
$result = mysqli_query($link, $sql);

// print select statement bij GET. Anders print affected rows
if ($method == 'GET') {
    if (!$key) echo '[';
    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
        echo ($i > 0 ? ',' : '') . json_encode(mysqli_fetch_object($result));
    }
    if (!$key) echo ']';
} elseif ($method == 'POST') {
    echo mysqli_insert_id($link);
} else {
    echo mysqli_affected_rows($link);
}

// close mysql connection
mysqli_close($link);