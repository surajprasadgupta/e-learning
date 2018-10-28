<html>
<head>
<title>code point</title>
<link rel="stylesheet" type="text/css" href="fream.css"/>
</head>
<body>
<div class="contenerbox">
<div class="tops">
<div id="logo">
 <a href="index.php"><img src="images/logo.png" height="80px" ></a>

</div>
</div>
<div>

 <?php include('navigatbar.php') ;	  ?>


</div>
<div>
<div class="sidebar" >
<?php include('sidebar.php') ;	  ?>
</div>
<div class="contener">
   	  	  <!--body section --->
     
	 <div class="post_body">
           <div style="margin:20px;">
		   <?php
include 'includes/connect.php';
			   

$id=$_GET['id'];


$sql = "SELECT * FROM content WHERE id ='".$id."'  ";

$result = mysql_query($sql,$con);
 
$row = mysql_fetch_array($result)

?>
<?php echo "<h2>". $row['ptitle'] ."</h2>";?>  
<?php echo "". $row['pcontent'] ."";?>
		   
                                       </div>
                                                 </div>
<!--end body section-->
   
   
</div>
</div>
<?php mysql_close($con); ?>

      
</div>

<div class="footer" style="width:100%;
	margin:0; padding:0; text-align:center;
	border:4px solid gray;
	float:left;height:30px; ">
copyright by google
</div>

</body>

</html>