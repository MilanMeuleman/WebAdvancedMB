function eventClick(){
    var eventId = document.getElementById('eventId').value;
    var urlReq = new Request ('https://192.168.117.129/~user/oefeningen/Project_api3/api.php/events/' + eventId); 
    fetch(urlReq)
    .then((resp) => resp.json) //transform data in json
    .then(function(data){
    //code for handling data from API
        console.log(data);
    })
    .catch(function(error){
        console.log(error)
    });
}


function submitClick(){
    var urlReq = new Request('https://192.168.117.129/~user/oefeningen/Project_api3/api.php/events/add');
    fetch(urlReq, {
        method: 'POST',
        header: new Headers({'Content-Type':'Application/json'}), //aanpassen
        body: JSON.stringify({ //javascript waarde naar object
            EventID: document.getElementById('eventId').value,
            PersoonID: document.getElementById('personId').value,
            StartDatum: document.getElementById('startDatum').value,
            EindDatum: document.getElementById('eindDatum').value,
            Beschrijving: document.getElementById('beschrijving')
        })
    })
.then((resp) => resp.text)
.catch(function(error){
    console.log(error);
    });
}

function retrieveAllEventsClick(){
    var eventArray =[];
    var urlReq = new Request('https://192.168.117.129/~user/oefeningen/Project_api3/api.php/events/retrieve');
    fetch(urlReq,{
        method: 'GET',
        header: new Headers({'Content-type':'Application/json'}),
        body: JSON.stringify({
            eventArray:array.forEach(function(eventId) {
                var eventId = eventId.getElementById('eventId');
                console.log(eventId);
            })
        })
    })
    .then((resp) => resp.text)
    .catch(function(error){
        console.log(error);
    })
}

