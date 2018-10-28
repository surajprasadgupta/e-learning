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

        <li><a href="index.php">Home Page</a></li>
		    

</ul>

</div>
</div>
<!--end sidebar section-->







</div>
<div class="contener">
  
   
  <!--body section --->
     
	 <div class="post_body">
           <div>
 <?php 
           include "includes/connect.php";
		   
		   if(isset($_GET['submit']))
		   {
			 $search=$_GET['search']  ;
            $sql = "SELECT * FROM content WHERE ptitle LIKE '%$search%'" ;
            $result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
{
	
 echo "<h2>". $row['ptitle'] ."</h2>";  
 echo "". $row['pcontent'] ."";
}
    
			   
			   		   }
		   		   ?>
  
  
		   
                                       </div>
                                                 </div>
<!--end body section-->  
   
   
</div>
</div>

      
</div>

<div class="footer" style="width:100%;background-color:#00bfff;
	margin:0; padding:0; text-align:center;
	border:4px solid blue;
	float:left;height:50px; ">
this is footer
</div>

</body>

</html>