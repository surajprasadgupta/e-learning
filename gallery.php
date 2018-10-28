<html>
<head>
<title>code point</title>
<link rel="stylesheet" type="text/css" href="fream.css"/>
<style>
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: 200px;
}

div.desc {
    padding: 15px;
    text-align: center;
	
}
</style>
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
</div>
<div class="contener">
<!--body section --->
     
	 <div class="post_body">
           <div style ="margin:20px;">
	  <table>
    
 <?php

	include "includes/connect.php";
 $sql="SELECT * FROM gallery ";
 $result_set=mysql_query($sql,$con);
 while($row=mysql_fetch_array($result_set))
 {
	 $id=$row['id'];
 ?>
 
 
        <tr style="float:left;border-radious:5px;">
		<td>
		<div class="img"style="border-radious:5px;">
  <a target="_blank" href="bigimg.php?id=<?php echo $id ;?>">
		<img src ="images/gallery/<?php echo $row['file'] ?> " width="110px" height="120px"> </a></div></td>
       
        
        
        
		
		   
                </td>   
        </tr>
		
        <?php
 }
 ?>
</table>   
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