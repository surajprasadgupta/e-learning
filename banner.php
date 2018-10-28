<html>
<head>
<script type="text/javascript" >
function abc()
{
var arr=new Array("images/banner/b1.jpg","images/banner/b2.jpg","images/banner/b3.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==3)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
	//change image every 2 seconds



</script>
</head>
<body>

<div id="top"> <img src="images/banner/b3.jpg" alt=" suraj" width="100%" height="100%" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
</div>
<body>
</html>