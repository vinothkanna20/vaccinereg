<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: gray;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #D3D3D3;
  margin-bottom: 25px;
}
/* Set a style for the submit button */
.registerbtn {
  background-color:#D3D3D3 ;
  color: black;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

  <div class="container">
    <h1>Vaccine Registration</h1>
    <p>Please fill in the required data</p>
    <hr>

    <label for="email"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" id="name" required>

    <label for="Phone Number"><b>Phone No</b></label>
    <input type="number" placeholder="Enter Phone Number" name="number" id="number" required>

    <label for="Aadhar Number"><b>Aadhar Number</b></label>
    <input type="number" placeholder="Aadhar Number" name="Aadhar" id="Aadhar" required>
    <hr>
    
    <label for="Date of Registration"><b>Date of Registration</b></label>
    <input type="date" placeholder="dd/mm/yyyy" name="date" id="date" required>
    <hr>
    
    <p>Click for vaccine registration</p>

<a href="index1.php" target="self">    <button type ="submit" id ="cl" class="registerbtn">Register</button>
</a>  </div>
  
  <div class="container signin">
    <p>@vinothKannan</a>.</p>
  </div>

<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-database.js"></script> 
<script id="MainScript">
  var firebaseConfig = {
    apiKey: "AIzaSyCJErEz6BIxyX16iNE5iloeFCI2wsJ6rHg",
    authDomain: "vaccine-registration-ba4b9.firebaseapp.com",
    databaseURL: "https://vaccine-registration-ba4b9-default-rtdb.firebaseio.com",
    projectId: "vaccine-registration-ba4b9",
    storageBucket: "vaccine-registration-ba4b9.appspot.com",
    messagingSenderId: "364703962049",
    appId: "1:364703962049:web:4b55157d97e933e27c9540"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
var name,phone,aadhar,date;
function ready(){
name=document.getElementById('name').value;
phone=document.getElementById('number').value;
aadhar=document.getElementById('Aadhar').value;
date=document.getElementById('date').value;
}
document.getElementById('cl').onclick=function(){
ready();
firebase.database().ref('Datalist/'+name).set({
name:name,
phone:phone,
aadhar:aadhar,
date:date});
}
</script>
</body>
</html>
