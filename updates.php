<script>
var s=$('#updates li').size();
var t;
function timer(){
if(s!=1){
t=setInterval(function(){
//console.log($('#updates .vi').next()['length']);
if($('#updates .vi').next()['length'])
$('.vi .next').trigger('click');
else
{
$('#updates .vi').slideUp().toggleClass('vi');
$('#updates li').first().toggleClass('vi').slideDown();
}
},5000);
}
}
timer();
$('#updates .next').click(function(e){clearInterval(t);
$('#updates .vi').slideUp().toggleClass('vi').promise().done(function(){
  $(this[0].nextSibling).toggleClass('vi').slideDown();
timer();
  });
});
$('#updates .pre').click(function(e){clearInterval(t);
$('#updates .vi').slideUp().toggleClass('vi').promise().done(function(){
  $(this[0].previousSibling).toggleClass('vi').slideDown();timer();
});
});

</script>
<?php
$conn = mysql_connect( 'localhost', 'synapse', 'ss1123' );
$db = mysql_select_db( 'synapse', $conn );
$tbl = "synapse2013_updates";
 $q = mysql_query("select *  from $tbl" );
echo '<ul>';
	//echo count($row);
	//var_dump($row);
	$s=mysql_num_rows($q);
	while($row = mysql_fetch_row($q)){
	if($s==1)
	echo "<li class='vi'> $row[1] : $row[2]";
	else if($row[0]==1)
	echo "<li class='vi'> $row[1] : $row[2] <label class='next'>Next</label>";
	else if($row[0]!=$s)
	echo "<li><label class='pre'>Previous</label> $row[1] : $row[2] <label class='next'>Next</label>";
	else if($s==$row[0])
	echo "<li><label class='pre'>Previous</label> $row[1] : $row[2]";
//	<li><label class="pre">Previous</label>Updates:U2.<label class="next">Next</label>
	//<li><label class="pre">Previous</label>Updates:U3.
}

echo '</ul>';
?>