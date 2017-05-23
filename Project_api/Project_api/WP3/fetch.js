function eventClick(){
    var eventId = document.getElementById('eventId').value;
    var urlReq = new Request ('http://192.168.117.129/~user/Project_api/events/' + eventId); 
    fetch(urlReq, {
        method: 'GET'
    }).then(function(a) {
        //transform data in json
        return a.json();
    }).then(function(data){
        //code for handling data from API
        console.log(data);
        populateSection(data);
        return data;
    })
    .catch(function(error){
        console.log(error)
    });
}



function populateSection(jsonObj) {
    //Putting the json into section-element on the html page
    var myArticle = document.createElement('article');
    var myH2 = document.createElement('h2');
    var myPara1 = document.createElement('p');
    var myPara2 = document.createElement('p');
    var myPara3 = document.createElement('p');
    var myPara4 = document.createElement('p');
    var myPara5 = document.createElement('p');
    myH2.textContent = 'Afspraak: ' + jsonObj.EventID;
    myPara1.textContent = 'EventID: ' + jsonObj.EventID;
    myPara2.textContent = 'PersoonID: ' + jsonObj.PersoonID;
    myPara3.textContent = 'StartDatum: ' + jsonObj.StartDatum;
    myPara4.textContent = 'Einddatum: ' + jsonObj.EindDatum;
    myPara5.textContent = 'Beschrijving: ' + jsonObj.beschrijving;
    myArticle.appendChild(myH2);
    myArticle.appendChild(myPara1);
    myArticle.appendChild(myPara2);
    myArticle.appendChild(myPara3);
    myArticle.appendChild(myPara4);
    myArticle.appendChild(myPara5);
    var section = document.querySelector('section');
    section.appendChild(myArticle);
  }


function submitClick(){
    var eventId = document.getElementById('eventId').value;
    var urlReq = new Request ('http://192.168.117.129/~user/Project_api/events/' + eventId); 
    fetch(urlReq, {
        method: 'DELETE'
    }).then(function(a) {
        //transform data in json
        return a;
    }).then(function(data){
        //code for handling data from API
        console.log(data);
        verwijderInfoSection(eventId);
        return data;
    })
    .catch(function(error){
        console.log(error)
    });
}

function verwijderInfoSection(eventId) {
    //Putting the json into section-element on the html page
    var myArticle = document.createElement('article');
    var myH2 = document.createElement('h2');
    myH2.textContent = "Afspraak met ID " + eventId + " is verwijderd uit de database.";
    myArticle.appendChild(myH2);
    var section = document.querySelector('section');
    section.appendChild(myArticle);
}