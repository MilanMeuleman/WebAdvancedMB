PASTEBINnew pastetrends  

Guest User
-

Untitled
 A GUEST   MAY 12TH, 2017   31   NEVER

Not a member of Pastebin yet? Sign Up, it unlocks many cool features!
rawdownloadreport HTML 5 3.12 KB
 
<!DOCTYPE html>
<html>
<head>
 <title>RestAPIJavascript</title>
 <script>
  function eventClick() {
   var eventId = document.getElementById('eventId').value;
   var myRequest = new Request('http://192.168.2.128/RestApi/index.php/events/' + eventId);
   fetch(myRequest).then(function(response){
       return response.json();
   }).then(function(data){
       console.log(data);
       populateSection(data);
   });
  }
 
  function submitClick() {
 
      var myRequest = new Request('http://192.168.2.128/RestApi/index.php/events/add');
 
 
 
      fetch(myRequest, {
          method: 'POST',
          header: new Headers({'Content-Type': 'application/json'}),
          body: JSON.stringify({
              name: document.getElementById('name').value,
              beginDate: document.getElementById('beginDate').value,
              endDate: document.getElementById('endDate').value,
              personId: document.getElementById('personId').value,
              location: document.getElementById('location').value
          })
      }).then(function(response){
          return response.text;
      }).then(function(response) {
      });
  }
 
 
  function populateSection(jsonObj) {
          var myArticle = document.createElement('article');
          var myH2 = document.createElement('h2');
          var myPara1 = document.createElement('p');
          var myPara2 = document.createElement('p');
          var myPara3 = document.createElement('p');
          var myPara4 = document.createElement('p');
 
          myH2.textContent = jsonObj.name;
          myPara1.textContent = 'Begin Date: ' + jsonObj.beginDate;
          myPara2.textContent = 'End Date: ' + jsonObj.endDate;
          myPara3.textContent = 'Person Id: ' + jsonObj.personId;
          myPara4.textContent = 'Location: ' + jsonObj.location;
 
 
          myArticle.appendChild(myH2);
          myArticle.appendChild(myPara1);
          myArticle.appendChild(myPara2);
          myArticle.appendChild(myPara3);
          myArticle.appendChild(myPara4);
          var section = document.querySelector('section');
          section.appendChild(myArticle);
 
 
  }
 
  function afterLoaded() {
   document.getElementById("eventButton").addEventListener("click", eventClick, false);
   document.getElementById("submitButton").addEventListener("click", submitClick, false );
  }
 
  window.addEventListener("load", afterLoaded, false);
 </script>
</head>
  <body>
    <h3>GET</h3>
    <input type="text" id="eventId"><br>
    <input type="button" value="Submit" id="eventButton">
    <section>
    </section>
 
 
    <h3>POST</h3>
    <form id = "formId"> Name<br> 
        <input type="text" id="name" value=""><br> beginDate<br> 
        <input type="text" id="beginDate" value=""><br> endDate<br> 
        <input type="text" id="endDate" value=""><br> personId<br> 
        <input type="text" id="personId" value=""><br> location<br> 
        <input type="text" id="location" value=""><br> 
        <input type="button" value="Submit" id="submitButton">
    </form>
    <h3>PUT</h3>
 
 
 
 
 
  </body>
</html>
RAW Paste Data














<!DOCTYPE html>
<html>
<head>
 <title>RestAPIJavascript</title>
 <script>
  function eventClick() {
   var eventId = document.getElementById('eventId').value;
   var myRequest = new Request('http://192.168.2.128/RestApi/index.php/events/' + eventId);
   fetch(myRequest).then(function(response){
       return response.json();
   }).then(function(data){
       console.log(data);
       populateSection(data);
   });
  }

  function submitClick() {

      var myRequest = new Request('http://192.168.2.128/RestApi/index.php/events/add');



      fetch(myRequest, {
          method: 'POST',
          header: new Headers({'Content-Type': 'application/json'}),
          body: JSON.stringify({
              name: document.getElementById('name').value,
              beginDate: document.getElementById('beginDate').value,
              endDate: document.getElementById('endDate').value,
              personId: document.getElementById('personId').value,
              location: document.getElementById('location').value
          })
      }).then(function(response){
          return response.text;
      }).then(function(response) {
      });
  }


  function populateSection(jsonObj) {
          var myArticle = document.createElement('article');
          var myH2 = document.createElement('h2');
          var myPara1 = document.createElement('p');
          var myPara2 = document.createElement('p');
          var myPara3 = document.createElement('p');
          var myPara4 = document.createElement('p');

          myH2.textContent = jsonObj.name;
          myPara1.textContent = 'Begin Date: ' + jsonObj.beginDate;
          myPara2.textContent = 'End Date: ' + jsonObj.endDate;
          myPara3.textContent = 'Person Id: ' + jsonObj.personId;
          myPara4.textContent = 'Location: ' + jsonObj.location;


          myArticle.appendChild(myH2);
          myArticle.appendChild(myPara1);
          myArticle.appendChild(myPara2);
          myArticle.appendChild(myPara3);
          myArticle.appendChild(myPara4);
          var section = document.querySelector('section');
          section.appendChild(myArticle);


  }

  function afterLoaded() {
   document.getElementById("eventButton").addEventListener("click", eventClick, false);
   document.getElementById("submitButton").addEventListener("click", submitClick, false );
  }

  window.addEventListener("load", afterLoaded, false);
 </script>
</head>
  <body>
    <h3>GET</h3>
    <input type="text" id="eventId"><br>
    <input type="button" value="Submit" id="eventButton">
    <section>
    </section>


    <h3>POST</h3>
    <form id = "formId"> Name<br> 
        <input type="text" id="name" value=""><br> beginDate<br> 
        <input type="text" id="beginDate" value=""><br> endDate<br> 
        <input type="text" id="endDate" value=""><br> personId<br> 
        <input type="text" id="personId" value=""><br> location<br> 
        <input type="text" id="location" value=""><br> 
        <input type="button" value="Submit" id="submitButton">
    </form>
    <h3>PUT</h3>





  </body>
</html>

Want to get better at HTML 5?
Learn to code HTML 5 in 2017
                
create new paste  /  dealsnew!  /  api  /  trends  /  syntax languages  /  faq  /  tools  /  privacy  /  cookies  /  contact  /  dmca  /  scraping  /  go  
Dedicated Server Hosting by Steadfast Top