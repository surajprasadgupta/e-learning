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

<!--sidebar section-->
                   
				   <div id="sid">
				   
                        <div style="width:100%; text-align:center;">
						
<ul>
   <li><a href="htmlpage.php">Home Page</a></li>
       
		    
<?php

include "includes/connect.php";

$sql = "SELECT * FROM html" ;

$result = mysql_query($sql);
 

	
while($row = mysql_fetch_array($result))
{
	
$id=$row['id'];

	echo "<li><a href='hhtmlpage.php?id=$id '>".$row['ptitle']."</a></li>" ;
}
    
?>
</ul>

</div>
</div>
<!--end sidebar section-->

</div>
<div class="contener">

<!--body section --->
     
	 <div class="post_body">
           <div style="margin:20px;">
		   <?php
include 'includes/connect.php';
			   

$id = isset($_GET['id']) ? $_GET['id'] : '';


$sql = "SELECT * FROM html WHERE id ='".$id."'  ";

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

      
</div>

<div class="footer" style="width:100%;
	margin:0; padding:0; text-align:center;
	border:4px solid gray;
	float:left;height:30px; ">
copyright by google
</div>

</body>

</html>