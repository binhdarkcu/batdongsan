<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<?php
$iduser=$_REQUEST['id'];
function online($user){
$f=file("http://opi.yahoo.com/online?u=$user&m=t");
if (strpos($f[0],"NOT ONLINE")!=0) return false;
return true;
}
function check($user)
{
header('Content-type: image/gif');

if (online($user))
{
	readfile("http://localhost/photre1/images/onlineyahoo.png");
}
else{
readfile('http://localhost/photre1/images/offlineyahoo.png');
}
}
if (trim($iduser)!==""){
check($iduser);}
?>