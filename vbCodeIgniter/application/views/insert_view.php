<html>
<head>
    <title>Insert Data Into Database Using CodeIgniter Form</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="http://192.168.117.129/~user/oefeningen/vbCodeIgniter/styles/insertstyle.css" />
</head>
<body>

<div id="container">
    <?php echo form_open('Insert'); ?>
    <h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
    <?php if (isset($message)) { ?>
        <h3>Data inserted successfully</h3><br>
    <?php } ?>
    <?php echo form_label('Student Name :'); ?> <?php echo form_error('dname'); ?><br />
    <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

    <?php echo form_label('Student First Name :'); ?> <?php echo form_error('dfname'); ?><br />
    <?php echo form_input(array('id' => 'dfname', 'name' => 'dfname')); ?><br />

    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?><br/>

    <div id="fugo">

    </div>
</div>
</body>
</html>