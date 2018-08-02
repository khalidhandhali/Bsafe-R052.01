<?php
include'PAGE4.php';

$query3 = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query3 && $query3['status'] == 'success') {
?>
<table class="tb" cellpadding="3" cellspacing="0" border="1" style="padding: 120px 80px">
<tr bgcolor="white">
<th font-color="red">Emergency Alerm !</th>
</tr>
<br><br>
<tr bgcolor="lightgrey">
<th>ID </th>
<th>Name </th>
<th>Nationality </th>
<th>Health Describtion </th>
<th> Location </th>
</tr>
<?php
if(isset($_POST['btnsend']))
{
    $sql = "select * from htable where ID like 1234";
    $result=mysql_query($sql)or die(mysql_error());
     while($row=mysql_fetch_object($result)){
?>
<tr>
<td><?php echo $row->ID;?></td>
<td><?php echo $row->Name;?></td>
<td><?php echo $row->Nationality;?></td>
<td><?php echo $row->HealthDescription;?></td>
<td><?php echo  $query3['city'] . ' '. '!';?></td>
</tr>
<?php
}
}
}
?>
</table>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HMS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}

.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
}
.header h2 {
  text-align: center;
  font-size:15px;
}
.progress-container {
  width: 100%;
  height: 8px;
  background: #ccc;
}
 div.relative {
    position: fixed;
    left: 350px;
    top: 120px;
    right: 350px;
    border: 3px solid #ddd;
    background: #eee;
   }
   .tb{
   	 position: fixed;
    left: 420px;
    top: 350px;
    right: 270px;
    border: 3px solid #ddd;
    background: #eee;
   }
</style>
</head>
<body>
<div class="header">
  <h2>Hajj Management System</h2>
  <div class="progress-container">
  </div>
  </div>
</head>
<div class="relative" style="padding: 50px 5px">
<center>
<form action="3Form.php" method="POST">
<input type="submit" value="Send Flash Message" name="btnsend">
</form>
<form action="3Form.php" method="POST">
<input type="submit" value="Send Photo" name="btnsend">
</form>
</center>
</div>
</html>