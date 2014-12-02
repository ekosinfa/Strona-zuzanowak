<?php
$con=mysqli_connect("localhost","zuza","zuzaxsw21qaz","ekosinfa_zuza");
$query="SELECT * FROM esport";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){
  var_dump($row);
}
<table border="5">
<tr>
	<td>$row[id]</td>	<td>$row</td>
</tr>
<tr>
	<td></td>	<td></td>
</tr>
</table>


?>
