<html>
<head>
<title>code point</title>
<link rel="stylesheet" type="text/css" href="fream.css"/>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
<div class="contenerbox">
<div class="tops">
<div id="logo">
 <a href="index.php"><img src="images/logo.png" height="80px" ></a>

</div>
<div  style="float:right;margin-top:100px; padding:10px;"class="fb-like" data-href="https://www.facebook.com/pages/getting_started?page_id=1672432173076965" data-width="100px" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div> 

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

        <li><a href="javapage.php">Home Page</a></li>
		    
<?php

include "includes/connect.php";

$sql = "SELECT * FROM java" ;

$result = mysql_query($sql);
 

	
while($row = mysql_fetch_array($result))
{
	
$id=$row['id'];

	echo "<li><a href='jjavapage.php?id=$id '>".$row['ptitle']."</a></li>" ;
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
  <h1 style="font-size: 80px;">JAVA</h1>
  <p style="color: #3a3a3a!important;font-size: 24px!important;">The language for  website </p>
  <a href="csspage.php"style="text-decoration: none;"><b style="font-size:30px;">LEARN JAVA</b></a>
 
  </div></br>
  
  <div style="float:right;height:420px;width:380px;margin:30px;background-color:#f1f1f1;border-radius:10px;    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important; ">
  <h2 style="color:blue;">JAVA Hello Word Example<h2>
 <div style="height:300px;width:350px;margin:10px;background-color: #ffffff;">
<span style="color:brown;">
public class helloword
<span style="color:black;">{</span><br>

<span style="color:red;">public static void main</span>
<span style="color:blue;">(</span>
<span>String[] args</span>
<span style="color:blue;">)</span><br>
<span style="color:black;">{</span><br>
 System.out.println("<span style="color:blue;">Hello, World</span>");<br>
<span style="color:black;">}</span><br>
<span style="color:black;">}</span><br>


 </div>
 <h2 style="color:blue;"> TRY YOURSELF</h2>
  
  </div>
  
  
		   
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