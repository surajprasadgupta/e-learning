<html>
<body>
<!--sidebar section-->
                   
				   <div id="sid">
				   
                        <div style="width:100%; text-align:center;">
						
<ul>

        <li><a href="index.php">Home Page</a></li>
		    
<?php

include "includes/connect.php";

$sql = "SELECT * FROM content" ;

$result = mysql_query($sql);
 

	
while($row = mysql_fetch_array($result))
{
	
$id=$row['id'];

	echo "<li><a href='pages.php?id=$id '>".$row['ptitle']."</a></li>" ;
}
    
?>
</ul>

</div>
</div>
<!--end sidebar section-->
</body>
</html>