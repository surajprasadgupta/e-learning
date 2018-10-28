<html>
<head>
<title>code point</title>
<link rel="stylesheet" type="text/css" href="fream.css"/>
<style>
.con input[type=text],input[type=password] {
width:99.5%;
padding:10px;
margin-top:10px;
border:1px solid #ccc;
padding-left:10px;
font-size:16px;
font-family:raleway
}
.con input[type=submit] {
width:150px;
float:center;
background-color:#09F;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-top:10px;
margin-right:-20px;
margin-bottom:-5px
margin-left:20px;
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

 
	 <div class="post_body" >
           <div style="margin:40px;align:center;" class="con">
		   
		   
		 <form name="mailform" action="contact.php" method="get">
						   
					<div class="form" style="margin-left:20%; padding-left:20%">

  </div>	  
				<h2><font color="#000000"><center>For Any Inquiries,Please Fill Out The Form Below...</center></font></h2>

       <table>
			<tr>
              <td><label for="name"><strong>Name:</strong><font color="#FF0000">*</font></label></td>
		      <td><input name="uname" type="text" required placeholder="Your Name" /></td>
			</tr>
		    <tr>
	          <td><label for="email">
             <strong>Email Address:</strong><font color="#FF0000">*</font></label></td>
			  <td><input name="from" type="text" required placeholder="someone@example.com" /></td>
			</tr>
			<tr>
			  <td><label for="subject"><strong>Subject:</strong><font color="#FF0000">*</font></label></td>
			  <td><input name="subject" type="text" required placeholder="Heading" /></td>
			</tr>
            <td>&nbsp; </td>
			<tr>
			  <td><label for="message"><strong>Message:</strong><font color="#FF0000" >*</font></label></td>
            
			  <td><textarea name="msg"  cols="35" rows="5" style="border-radius:10px;"></textarea></td>
			</tr>
            <tr>
              <td><label for="contact no"><strong>Contact No.:</strong><font color="#FF0000">*</font></label></td>
              <td><input name="num" type="text" required placeholder="Ex: 9889000000"/></td>
            </tr>
	</table>
             <input type="submit" name="send" value="SEND" id="submit" />
            
      </form>
                   
                
                  

		   
		   
                                          </div>

   
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
<?php
include('includes/connect.php');
if(isset($_GET["submit"]))
{
	
extract($_GET);
    $name=$_POST['uname'];
    
    $email=$_POST['from'];
	$subject=$_POST['subject'];
	$mobile=$_POST['mobile'];
	$comments=$_POST['msg'];
	
    if (($name=="")||($subject=="")||($email=="")||($mobile=="")||($comments==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $f_name<$email>\r\n Return-path: $email";
        $subject="Message sent using your contact form";
		mail("spgupta082@gmail.com", $subject, $comments,$mobile, $from);
		echo "Email sent!";
	    }
    }  
?>