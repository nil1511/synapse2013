<style>
td {
padding: 3px 20px;
}
</style>

<?php
define("PASSWORD","updatingsynapse2013");
$conn = mysql_connect( 'localhost', 'synapse', 'ss1123' );
$db = mysql_select_db( 'synapse', $conn );

$tbl = "synapse2013_updates";
if( $_POST['password'] == PASSWORD ) {
	echo "<form action='updater.php' method='post'>
	<input type='text' placeholder='type' name='type'>
	<textarea type='text' placeholder='content' name='content'></textarea>
	<input type='submit' value='Add' name='add'>
	</form>";	
	echo "<table><th>ID</th><th>Type</th><th>Content</th>";
	$names = mysql_query( "show columns from $tbl;");
	//while( $name = mysql_fetch_assoc($names) ) {
//		echo "<th>".$name['Field']."</th>";
	//}
 $q = mysql_query("select *  from $tbl" );
	if( mysql_num_rows($q) == 0 )
		echo "No updates added!";
	while($row = mysql_fetch_assoc($q)) {
		echo "<tr>";
		foreach( $row as $k=>$v ) {
		   echo "<td>";
			echo $v;
		   echo "</td>";
		}
		echo "<td><form action='updater.php' method='post'><input type='hidden' value=".$row['index']." name='data'><input type='submit' value='Delete' name='delete' ></form></td>";
		echo "</tr>";
	}

}
else if($_POST['add'] == 'Add'){
$type= $_POST['type'];
$content= $_POST['content'];
$s="insert into $tbl ($tbl.type,$tbl.content) values('$type','$content');";
if(mysql_query($s))
echo 'done';
else
echo $s;
}
else if($_POST['delete'] == 'Delete'){
$del= $_POST['data'];
$s="delete from $tbl where $tbl.index='$del';";
if(mysql_query($s))
echo 'done';
else
echo $s;
}
else{
echo 'You are not atthorized';
}
?>
</table>
<form action="updater.php" method="post">
<label for="password">Access Password</label>
<input type="password" name="password" />
<input type="submit" value="Submit" />
</form>
