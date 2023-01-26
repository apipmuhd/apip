<!DOCTYPE html>
<html lang="en">
<head>

<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;

  justify-content: space-between;
transition: 0.6s;

z-index: 100000;
}
.topnav.sticky
{
    padding: 5px 100px;
    background: #fff;
}


/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: #ff7200;
  transition: .3s;
}
</style>
</head>
<body>



<div class="topnav">
  <a href="index.php">Home</a>
  <a href="DataformAddress.php">Data Form Address</a>
  <a href="displaydata.php">View Data</a>
   <a href="displaydataaddress.php">View Data address</a>
</div>

</body>
</html>
