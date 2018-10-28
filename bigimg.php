<html>
<head><title>
code point img</title>

</head>
<body>
<?php
include "includes/connect.php";
			   
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM gallery WHERE id ='".$id."'  ";
 $result =mysql_query($sql, $con);
 $row = mysql_fetch_array($result)
 ?>
	
 <img src ="images/gallery/<?php echo $row['file']; ?> " width="550px" height="450px" style="border:2px solid gray;margin:50px;border-radius:10px; box-shadow: 0 8px 10px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;">

      
        </body>
</html>