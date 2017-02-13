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
require_once("class.php");
if (    $DIALOOSEWEB->admin->check_user()    ==    FALSE    ) 
   {    exit(    $DIALOOSEWEB->admin->login_page()    );  
}
require_once("AdminNavigation.php");
require_once("../bdssecuritypt/bdsfunction.php");

$member_id = addslashes($_SESSION['member_id']);
      
       
 function addimg()
  { 
     $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
  	  $imgid=intval($_GET['imgid']);	
 	//-------------------------------------------------
  	//  UPLOAD
  	//-------------------------------------------------

if($_FILES['file_upload']['name'] ==''){  		  	

	}

if($_FILES['file_upload']['size'] == 0) { 
   echo '<br><br><br><br><br><center><font color=red><B>C&#243; l&#7895;i x&#7843;y ra trong qu&#225; tr&#236;nh Upload. Vui l&#242;ng ki&#7875;m tra l&#7841;i.</B></font></center>'; 

		exit;
       } 
elseif($_FILES['file_upload']['size'] > $MAX_FILE_SIZE) { 
        echo '<br><br><br><br><br><center><font color=red><B>&#7842;nh b&#7841;n Upload qu&#225; l&#7899;n. Vui l&#242;ng ch&#7885;n &#7842;nh b&#233; h&#417;n.</B></font></center>'; 

		exit;
       } 
elseif(!getimagesize($_FILES['file_upload']['tmp_name'])) { 
        echo ("<br><br><br><br><br><center><font color=red><B>File b&#7841;n Upload kh&#244;ng ph&#7843;i &#273;&#7883;nh d&#7841;nh &#7842;nh.</B></font></center>");
		exit;
		}
		else
		{
		
		   $images1 = $_FILES['file_upload']['name'];
		   $rand_numb = time();
		   $color_1 = $rand_numb."_$images1".$imgid;
		   $uploaddir = '../images/newsbds/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$color_1"; 
			
			@copy($_FILES['file_upload']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		}
	 
  	//-------------------------------------------------
  	//  UPDATE DATA
  	//-------------------------------------------------
  	$chuthich=$_POST['chuthich'];
   $member_id = addslashes($_SESSION['member_id']);
   $q3 = "insert into tqv_bdsnewsimagesbds set tqvnewsbds_id='$imgid',
    tqvbdsimages_url1 = \"$color_1\",tqvbdsimages_note='$chuthich',tqvadmin_id='$member_id'
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
	echo "
	<div align=\"center\">
            <meta http-equiv=\"REFRESH\" content=\"3; url=tqvuploadimgrentingbds.php?imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
            <table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>B&#7841;n &#273;&#227; c&#7853;p nh&#7853;t th&#224;nh c&#244;ng</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      <br>(<a href=\"tqvuploadimgrentingbds.php?imgid=$imgid\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  }

 
	//===================================================
	// END UPDATE
	//===================================================
        
        
  function readdimg()
  {    
  	  
  	  $id =intval($_GET[id]); 
     $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
  	 
 	//-------------------------------------------------
  	//  RE UPLOAD
  	//-------------------------------------------------


if ( $_FILES['file_upload']['name'] )
  	{
  	
	  	$sql_select = @mysql_query("SELECT * FROM tqv_bdsnewsimagesbds  WHERE tqvbdsimages_id='{$id}'");
	  	$result_select = @mysql_fetch_array( $sql_select );
	  	
	  	@unlink("../images/newsbds/".$result_select["tqvbdsimages_url1"]);




if($_FILES['file_upload']['name'] == '') { 
		       echo("<br><br><br><br><br><center><font color=red><B>H&#7843;y ch&#7885;n &#7842;nh c&#7847;n Upload cho s&#7843;n ph&#7849;m tr&#432;&#7899;c khi k&#7871;t th&#250;c!</B></font></center>"); 
		
				exit;
		       } 
		else if($_FILES['file_upload']['size'] == 0) { 
		   echo '<center><font color=red><B>C&#243; l&#7895;i x&#7843;y ra trong qu&#225; tr&#236;nh Upload. Vui l&#242;ng ki&#7875;m tra l&#7841;i.</B></font></center>'; 
		
				exit;
		       } 
		else if($_FILES['file_upload']['size'] > $_POST["MAX_FILE_SIZE"]) { 
		        echo '<br><br><br><br><br><center><font color=red><B>&#7842;nh b&#7841;n Upload qu&#225; l&#7899;n. Vui l&#242;ng ch&#7885;n &#7842;nh b&#233; h&#417;n.</B></font></center>'; 
		
				exit;
		       } 
		else if(!getimagesize($_FILES['file_upload']['tmp_name'])) { 
		        echo '<br><br><br><br><br><center><font color=red><B>D&#7919; li&#7879;u b&#7841;n Upload kh&#244;ng ph&#7843;i &#273;&#7883;nh d&#7841;ng &#7843;nh.</B></font></center>'; 
		
				exit;
		       } 


		else
		{
		
		   $images1 = $_FILES['file_upload']['name'];
		   $rand_numb = time();
		   $color_1 = $rand_numb."_$images1".$id;
		   $uploaddir = '../images/newsbds/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$color_1"; 
			
			@copy($_FILES['file_upload']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		}
	 }
	 
  	//-------------------------------------------------
  	//  REUPDATE 
  	//-------------------------------------------------
    
    
    $chuthich =$_POST["chuthich"];
    $member_id = addslashes($_SESSION['member_id']); 
	 $imgid=intval($_GET['imgid']);	
   	$q3 = "update tqv_bdsnewsimagesbds set tqvnewsbds_id='$imgid',
		
	";
	
	if ( $color_1 )
	{
		$q3 .= "
		tqvbdsimages_url1 = '$color_1',
		";
	}	


	$q3 .= "
	tqvbdsimages_note='$chuthich',tqvadmin_id='$member_id' where tqvbdsimages_id='$id'
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
  echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"3; url=tqvuploadimgrentingbds.php?imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
<table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>B&#7841;n &#273;&#227; c&#7853;p nh&#7853;t th&#224;nh c&#244;ng</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      <br>(<a href=\"tqvuploadimgrentingbds.php?imgid=$imgid\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  }

	//===================================================
	// END REUPDATE
	//===================================================


$dialoose = $_GET['dialoose'];
switch($dialoose) {
	default:
		index();
	break;
	case "Edit":
			Edit();
	break;
	case "Delete":
			Delete();
	break;
	case "Order":
			Order();
	break;
		case "addimg":
			addimg();
	break;
		case "readdimg":
			readdimg();
	break;
	
}

function index() {
$imgid=intval($_GET['imgid']);
$sqlle=@mysql_query("select * from tqv_bdsnewsbds where tqvnewsbds_id ='$imgid'");
$rowle=@mysql_fetch_assoc($sqlle);
$tqvnewsbds_tieude=$rowle['tqvnewsbds_tieude'];
	//===================================================
	// INDEX 
	//===================================================
?>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
<script src="images/date-picker.js"></script>
<script language="javascript">
	function check_form(the_form)
	{ var the_newsbds_tieude    = the_form.alt.value;
      if ((the_newsbds_tieude==''))
		{
			alert("Nhập thông tin ảnh!");
			the_form.alt.focus();
			return false;
		}
}
</script>

<form method="post" name="dk" onsubmit="return check_form(this)" action='tqvuploadimgrentingbds.php?dialoose=addimg&imgid=<?php echo $imgid ?>' enctype="multipart/form-data">
<center>
<table width="90%" border="0" cellpadding="0" cellspacing="0" borderColor=#111111>
        <tr>
    <td height="19" valign="middle" background="img/topbarfolder.gif"> <center>
        <strong><font color="red">Hình ảnh cho bài viết <a href="tqvnewbdsrenting.php?dialoose=edit&id=<?php echo $rowle['tqvnewsbds_id'];?>"><?php echo $tqvnewsbds_tieude; ?></a></font><br>
      </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class=dott2><table width="90%" borderColor=#111111 cellspacing="1" cellpadding="1">
    <tr><td valign="top"><B>&#7842;nh Upload:</B></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="9150000" size='50'>
<input size='50' name="file_upload" type="file"></td></tr>
	   <tr> 
 
      <td ><font size="2"><b>Chú thích:</b></font></td>
<td><input  name="chuthich" type="text" id="chuthich" size="95" >
</td>
</tr>	 
<TR><td></td>
      <td><br>
      	   
      	  <input  name="submit" type="submit" id="submit" value="Update"></td>
    </tr>
<br>
  </form></table></td></tr></table>


<script language='javascript' type='text/javascript'>
    <!--
    
    function link_to_post(pid)
    {
    	temp = prompt( "", "'tqvuploadimgrentingbds.php?" + pid );
    	return false;
    }
    
    function baoloi(theURL) {
       if (confirm('Bạn có chắc chắn muốn xóa không???')) {
          window.location.href=theURL;
       }
       else {
          alert ('Chưa thực hiện tác vụ nào.');
       } 
    }
    //-->
</script>

<TABLE height=20><TBODY><TR><TD></TD></TR></TBODY></TABLE>


		<Body bgcolor=#000000>
			           
                              <TABLE class=MenuTop cellSpacing=1 borderColor=#111111 bgcolor=#000000
                                cellPadding=1 width="77%" border=0>
                                <TBODY>

                                <TR class=nenxanh5>
                                <TD class=textxanhbold1 width="10%">
                                <DIV align=center><B>Số TT</B></DIV></TD>
                                <TD class=textxanhbold12 width="25%">
                                <DIV align=center><B>Hình ảnh</B></DIV></TD>
                                 <TD class=textxanhbold12 width="31%">
                                <DIV align=center><B>Chú thích</B></DIV></TD>
                                <TD class=textxanhbold1 width="20%">
                                <DIV align=center><B>Người gởi</a></B></DIV></TD>
                                <TD class=textxanhbold1 width="7%">
                                <DIV align=center><B>S&#7917;a</B></DIV></TD>
                                <TD class=textxanhbold1 width="7%">
                                <DIV align=center><B>Xo&#225;</B></DIV></TD>
</TR>
<?php $n=0;
$sql=@mysql_query("SELECT * FROM `tqv_bdsnewsimagesbds` where tqvnewsbds_id='$imgid' ORDER BY tqvbdsimages_id DESC limit 35") 
                                or die(mysql_error());
                                $line=0;
			                    while($row=@mysql_fetch_array($sql)) {
			                 	$line++;
			                 	$files=$row["tqvbdsimages_url1"];
                                $id =$row["tqvbdsimages_id"]; 
                                $ma_nguoidung=$row["tqvadmin_id"];
                                $tinhtrang=$row["tqvbdsimages_note"];	
                               
 echo"
<TR onmouseover=\"this.bgColor='#CCCCCC'\" onmouseout=\"this.bgColor='#FFFFFF'\" bgColor=#ffffff>
<TD align=\"left\">&nbsp;&nbsp; $line</TD>
<TD align=\"left\">&nbsp;&nbsp;<a class='Market' href='tqvuploadimgrentingbds.php?dialoose=Edit&id=$id&imgid=$imgid' onmouseover='doTooltip(event,\"../images/newsbds/$files\",\"$chuthich\")' onmouseout='hideTip()'> $files
 </TD>
 <td>$tinhtrang</td>
 <TD><center><font color=#76B646><B>";
  $sql1=@mysql_query("SELECT * FROM tqv_bdsadmin WHERE tqvadmin_id='$ma_nguoidung'");
  	  while($v=@mysql_fetch_array($sql1)){
  	  echo $v['tqvadmin_name'];	 } 
	  echo "</B></font></center></TD>
<TD><center>
<a class='Market' href='tqvuploadimgrentingbds.php?dialoose=Edit&id=$id&imgid=$imgid'>S&#7917;a</a>
</center></TD>
<TD><center><a href=\"javascript:baoloi('tqvuploadimgrentingbds.php?dialoose=Delete&id=$id&file=$images&imgid=$imgid')\">Xo&#225;</a></center></TD>
</TR>";
	
				}

echo("</table>

<TABLE height=20><TBODY><TR><TD></TD></TR></TBODY></TABLE>");
}
function Edit() {
$imgid=intval($_GET['imgid']);
$sqlle=@mysql_query("select * from tqv_bdsnewsbds where tqvnewsbds_id ='$imgid'");
$rowle=@mysql_fetch_assoc($sqlle);
$tqvnewsbds_tieude=$rowle['tqvnewsbds_tieude'];
	
$id = intval($_GET[id]);
$a = "select * from tqv_bdsnewsimagesbds where tqvbdsimages_id= \"$id\"";
$b = @mysql_query($a) or die(mysql_error());
$c = @mysql_fetch_array($b);

	//===================================================
	// EDIT:
	//===================================================
?>
<SCRIPT language=JavaScript>
function Deletepost(){
	if(confirm('Bạn có chắc chắn muốn xóa không ?')){
		location.href='tqvuploadimgrentingbds.php?dialoose=Delete&id=<? echo $c['tqvbdsimages_id']; ?>';
	}
}
</SCRIPT>
<script src="images/date-picker.js"></script>
<form method="POST" name="dk1"  action="tqvuploadimgrentingbds.php?dialoose=readdimg&id=<?php echo $id; ?>&imgid=<?php echo $imgid ?>" enctype="multipart/form-data">
<center>
<table width="95%" border="0" cellpadding="0" cellspacing="0">
        <tr>
    <td height="19" valign="middle" background="img/topbarfolder.gif"> <center>
        <strong><font color="red">S&#7917;a Hình Ảnh cho bài viết <a href="tqvnewbdsrenting.php?dialoose=edit&id=<?php echo $rowle['tqvnewsbds_id'];?>"><?php echo $tqvnewsbds_tieude; ?></a></font><br>
      </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class=dott2><table width="95%" border="0" cellspacing="1" cellpadding="1">
    
 <tr><td valign="top"><B>&#7842;nh Upload:</B></td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="9150000" size='50'>
<input size=70 name="file_upload" type="file"> (Nếu muốn thay ảnh mới) <br><img src="../images/newsbds/<? echo $c['tqvbdsimages_url1']; ?>" alt="<?php echo $c['Anh upload '];?>" = border='0'><br><a href="../images/newsbds/<? echo $c['tqvbdsimages_url1']; ?>" target='_blank'>(Click vào đây xem ảnh đã upload)</a>
</td></tr>
	  <tr> 
 
      <td ><font size="2"><b>Tình Trạng:</b></font></td>
<td> <input onkeyup=initTyper(this); name="chuthich" type="text" value="<?php echo $c['tqvbdsimages_note']; ?>"  size="105">
</td>
</tr>	 
   <TR><td></td>
      <td><input name="submit" type="submit" id="submit" value="Edit & Update">




</td>
    </tr>

  </form></table></td></tr></table>






<?
}
function Delete() {
$imgid=intval($_GET['imgid']);
	//===================================================
	// DELETE:
	//===================================================

$id =intval($_GET[id]);
$nv=1+0;
		//delete the database record
		$q1 = "delete from tqv_bdsnewsimagesbds where tqvbdsimages_id= '$id' ";
		@mysql_query($q1) or die(mysql_error());
		@unlink("../images/newsbds/".$q1[tqvbdsimages_url1]);
echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"1; url=tqvuploadimgrentingbds.php?imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
<table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>B&#7841;n &#273;&#227; xo&#225; th&#224;nh c&#244;ng</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      <br>(<a href=\"tqvuploadimgrentingbds.php?imgid=$imgid\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";


}
?>
