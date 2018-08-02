<?php
include'PAGE4.php';

$query3 = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query3 && $query3['status'] == 'success') {
?>
<html>
<body>
<div class="relative" style="padding: 50px 5px">
<center>
<table class="tb" cellpadding="3" cellspacing="0" border="1" style="padding: 100px 80px">
<tr bgcolor="lightgrey">
<th>ID </th>
<th>Name </th>
<th>Nationality </th>
<th>Health Describtion </th>
<th>Location </th>
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
<style>
 div.relative {
    position: fixed;
    left: 350px;
    top: 120px;
    right: 350px;
    border: 3px solid #ddd;
    background: #eee;
   }
</style>
</table>
</center>
</div>
</body>
</html>