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

        <li><a href="csspage.php">Home Page</a></li>
		    
<?php

include "includes/connect.php";

$sql = "SELECT * FROM css" ;

$result = mysql_query($sql);
 

	
while($row = mysql_fetch_array($result))
{
	
$id=$row['id'];

	echo "<li><a href='ccsspage.php?id=$id '>".$row['ptitle']."</a></li>" ;
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
		     
  <div style="float:left;height:420px;width:450px;text-align: center;margin:30px; background-color:#f1f1f1!important;">
  <h1 style="font-size: 80px;">CSS</h1>
  <p style="color: #3a3a3a!important;font-size: 24px!important;">The language for styling web pages</p>
  <a href="csspage.php"style="text-decoration: none;"><b style="font-size:30px;">LEARN CSS</b></a>
 
  </div></br>
  
  <div style="float:right;height:420px;width:380px;margin:30px;background-color:#f1f1f1;border-radius:10px;    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important; ">
  <h2 style="color:blue;"> CSS Example<h2>
 <div style="height:300px;width:350px;margin:10px;background-color: #ffffff;">
<span style="color:brown;">
body
<span style="color:black;">{</span><br>

<span style="color:red;">background-color:</span>
<span style="color:blue;">yellow</span>
<span style="color:blue;">;</span><br>
<span style="color:black;">}</span><br>

<span style="color:red;">h1</span>
<span style="color:black;">{</span><br>
<span style="color:red;">color:</span>
<span style="color:blue;">red</span>
<span style="color:black;">;</span><br>
<span style="color:red;">  text-align:</span>
<span style="color:blue;">center</span>
<span style="color:black;">;</span><br>
<span style="color:black;">}</span><br>


<span style="color:red;">p</span>
<span style="color:black;">{</span><br>
<span style="color:red;">font-family:</span>
<span style="color:blue;">verdana</span>
<span style="color:black;">;</span><br>
<span style="color:red;"> font-size:</span>
<span style="color:blue;">30px;</span>
<span style="color:black;">;</span><br>
<span style="color:black;">}</span>

 </div>
 <h2 style="color:blue;"> TRY YOURSELF</h2>
  
  </div>
		   
		   
		   
		   
		   
		   
                                       </div>
                                                 </div>
<!--end body section-->  
</div>
</div>

      
</div>
<div class="footer" style="width:100%;background-color:block;
	margin:0; padding:0; text-align:center;
	border:4px solid gray;
	float:left;height:80px; ">
this is footer
</div>


</body>

</html>