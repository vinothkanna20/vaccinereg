
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
  padding: 37px;
  background-color: gray;
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
    <h1>Next Vaccine Day</h1>
    <p id="demo"></p>
    <hr>
<script>
var d = new Date();
d.setDate(d.getDate() + 50);
document.getElementById("demo").innerHTML = d;
</script>
<a href="index.php" target="self">    <button type ="submit" id ="cl" class="registerbtn">Register Sucessfully</button>
</a>
</div>
</script>
</body>
</html>
