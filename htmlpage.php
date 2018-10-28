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
<?php include('social.php');   ?>
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
           
		   
		     <div>
  <div style="float:left;height:440px;width:450px;text-align: center;margin:30px; box-shadow: 5px 5px 5px #888888;">
  <h1 style="font-size: 80px;">HTML</h1>
  <p style="color: #3a3a3a!important;font-size: 24px!important;">The language for building web pages</p>
  <a href="htmlpage.php"style="text-decoration: none;"><b style="font-size:30px;">LEARN HTML</b></a>
 
  </div></br>
  
  <div style="float:right;height:420px;width:380px;margin:30px;background-color:#f1f1f1;border-radius:10px;    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important; ">
  <h2 style="color:blue;"> HTML Example<h2>
 <div style="height:300px;width:350px;margin:10px;background-color: #ffffff;">
<span style="color:brown;">
<span style="color:midiumblue;"><</span>
"!DOCTYPE"
<span style="color:red;">html</span>
<span style="color:midiumblue;">></span><br

<span style="color:midiumblue;"><</span>
<span style="color:red;">html</span>
<span style="color:midiumblue;">></span><br>

<span style="color:midiumblue;"><</span>
<span style="color:red;">title</span>
<span style="color:midiumblue;">></span><br>
HTML Tutorial<br>
<span style="color:midiumblue;"><</span>
<span style="color:red;">/title</span>
<span style="color:midiumblue;">></span><br>

<span style="color:midiumblue;"><</span>
<span style="color:red;">body</span>
<span style="color:midiumblue;">></span><br>

<span style="color:midiumblue;"><</span>
<span style="color:red;">h1</span>
<span style="color:midiumblue;">></span>
This is heading
<span style="color:midiumblue;"><</span>
<span style="color:red;">/h1</span>
<span style="color:midiumblue;">></span><br>


<span style="color:midiumblue;"><</span>
<span style="color:red;">/body</span>
<span style="color:midiumblue;">></span><br>
<span style="color:midiumblue;"><</span>
<span style="color:red;">/html</span>
<span style="color:midiumblue;">></span><br>

 </div>
 <h2 style="color:blue;"> TRY YOURSELF</h2>
  
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