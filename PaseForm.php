<?php
include'PAGE4.php';

$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
?>

<style>
div.relative {
    position: fixed;
    left: 350px;
    top: 120px;
    right: 350px;
    border: 3px solid #ddd;
    background: #ccc;
   }
   .btnsend{
       top: 100px;
   }
</style>
<html>
<head>
<title>(Pase Form)</title>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var x = new Date()
document.getElementById('ct').style.fontSize='30px';
document.getElementById('ct').style.color='black';
document.getElementById('ct').innerHTML = x;
document.getElementById('cit').style.fontSize='30px';
document.getElementById('cit').style.color='black';
display_c();
 }
</script>
</head>
<?php
}
?>
<div class="relative" style="padding: 80px 80px">
<center>
<body onload=display_ct();>
<span id='ct' ></span>
<br>
<br>
<span id='cit'>
<?php
echo  $query['city'] . ' '. '!';
?>
</span>
<br><br><br><br>
<form action="SecondForm.php" method="POST">
<input type="submit" value="Emergency Alerm !" name="btnsend" style="padding: 20px 20px">
</form>
</body>
</center>
</div>
</html>