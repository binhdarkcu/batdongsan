<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<style type="text/css">
.metatranquangvinhit { 

        width : 485px;
        color: #181818;

        background: #d3edfa;

        padding: 5px 5px 5px 5px;

        font-weight: normal;

        letter-spacing: 0;

	border-top: 1px solid #b6e4fb;

	border-left: 1px solid #b6e4fb;

	border-right: 1px solid #b6e4fb;

       }
.tranquangvinhdesign { 

                font-size: 115%;

                background: #ffffff;

                padding: 10px;

	        border: 1px solid #b6e4fb;

                } 
                DIV.viciao {
	MARGIN-TOP: 20px; MARGIN-BOTTOM: 10px
}
</style>
<script language='javascript' type='text/javascript'>
    <!--
 function baoloi(theURL) {
       if (confirm('Bạn có chắc là muốn xóa ảnh này không vậy???')) {
          window.location.href=theURL;
       }
       else {
          alert ('Chưa thực hiện tác vụ nào.');
       } 
    }
    </script>
	<?php 
#################################################
#  ----------------------------------------		#
#  VQTL (Vinh- Quynh- Trang - Luyen)            #
#  Mobile  0905246855	                        #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  ----------------------------------------	    # 
################################################# 
	if(!defined("websitebds")){
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}     
   
 
  	$designwebvn = $_GET['designwebvn'];
    switch($designwebvn) {
	default:
		index();
	break;
	case "edit":
			edit();
	break;
	case "delete":
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
	case "updateimg":
	        updateimg();
         	break;
}
       
  
    		 function index(){
     $imgid=intval($_GET['imgid']);   
     $matv=$_SESSION['tqvadmid'];
    $tqvadid=base64_encode($matv);
    $sqlle=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_id ='$imgid'");
    $rowle=@mysql_fetch_assoc($sqlle);
    $tqvnewsbds_tieude=$rowle['tqvnewsbds_tieude'];
    		 ?>
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	<?php include"bdsincludes/tqvleftbds.php"; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/edit.gif' border='0' width='18' height='18'><font color='#366e03'> Upload ảnh cho bài viết</font></td></tr>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    	
          	 <form method="post" name="dk" onsubmit="return check_form(this)" action='index.php?tqvbds=tqvuploadimg&designwebvn=addimg&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>' enctype="multipart/form-data">

     <div align='center'> <table width="92%" border="0" align="center" cellpadding="0" cellspacing="4">
       
       <tr height='10'>
          <td colspan="2" align="center" >
            </td>
          </tr>
        <tr><td height='15' colspan='2'><div align='center'><font color='#c3e572' size='2'><?php echo $tqvnewsbds_tieude; ?></font></td></tr>
        <tr><td colspan='2' height='10'></td></tr>
       <tr>
          <td bgcolor="#FFFFFF" class=dott2>
    <tr><td valign="top">&#7842;nh Upload:</td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="9150000" size='50'>
<input size='35' name="file_upload" type="file"></td></tr>
	   <tr> 
 
      <td ><font size="2">Chú thích:</font></td>
<td><input  name="chuthich" type="text" id="chuthich" size="45" >
</td>
</tr>	 
      <tr>
       
          <td colspan="2"><div align='center'>
          	  <input type="hidden" name="action" id="action" value="action" />
          	  <input type="submit" name="Submit" class='tomtat1' value="Cập nhập" />
           <br>
            </td>
        </tr>
        <tr><td colspan='2' height='15'></td></tr>
        
      </table>
        </form>
          
	<table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='metatranquangvinhit' height=20>
                          
                                <TBODY>

                                <TR class=nenxanh5>
                                <TD class=textxanhbold1 width="10%">
                                <DIV align=center>Số TT</B></DIV></TD>
                                <TD class=textxanhbold12 width="50%">
                                <DIV align=center>Hình ảnh</B></DIV></TD>
                                 <TD class=textxanhbold12 width="15%">
                                <DIV align=center>Chú thích</B></DIV></TD>
                                <TD class=textxanhbold1 width="15%">
                                <DIV align=center>Người gởi</a></B></DIV></TD>
                                <TD class=textxanhbold1 width="10%">
                                <DIV align=center>Lựa chọm</a></B></DIV></TD>	
                               
</TR></table><table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='tranquangvinhdesign' >
	<tr><td colspan='4' height'15'></td></tr>
<?php $n=0;
$sql=@mysql_query("SELECT * FROM `tqv_bdsnewsimagesengbds` where tqvnewsbds_id='$imgid' ORDER BY tqvbdsimages_id DESC limit 35") 
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
<TD align=\"left\" width='10%'>&nbsp;&nbsp; <span class='designwfdsffeaffs'> $line </TD>
<TD align=\"left\" width='50%'>&nbsp;&nbsp;<a class='designwfdsffeaffs' href='index.php?tqvbds=tqvuploadimg&designwebvn=edit&member=$matv&imgid=$imgid&id=$id' onmouseover='doTooltip(event,\"../images/newsbds/$files\",\"$chuthich\")' onmouseout='hideTip()'> $files
 </TD>
 <td width='20%'><span class='designwfdsffeaffs'> $tinhtrang </td>
 <TD width='20%'><center><span class='designwfdsffeaffs'> ";
  $sql1=@mysql_query("SELECT * FROM tqv_bdsadmin WHERE tqvadmin_id='$ma_nguoidung'");
  	  while($v=@mysql_fetch_array($sql1)){
  	  echo $v['tqvadmin_name'];	 } 
	  echo "</center></TD>
<td>"; ?>
		  <a href="index.php?tqvbds=tqvuploadimg&designwebvn=edit&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>&id=<?php echo $id; ?>"><img src='../images/icon_topicyellow.gif' width='16' height='16' border='0' alt='Chỉnh sửa ảnh | Change images' title='Chỉnh sửa ảnh | Change images'> </a> 
		  <a href="javascript:baoloi('index.php?tqvbds=tqvuploadimg&designwebvn=delete&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>&id=<?php echo $id; ?>')"><img src='../images/drop.jpg' width='16' height='16' border='0' alt='Xoá ảnh  | Delete images' title='Xoá ảnh  | Delete images'> </a>
		  </td>
</TR>
 <?php   
	echo "	<tr><td colspan='4' height'10'></td></tr><tr><td colspan='4'><div align='center'><font color='#b6e4fb'>----------------------------------------------------------------------------------------</td></tr>";
				}echo("</table>

"); ?>
    
    		
    		</td></tr>
    		     <tr><td background='images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>
    				<?php } 
     function addimg(){	
     $imgid=intval($_GET['imgid']);   
     $sqlle=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_id ='$imgid'");
     $rowle=@mysql_fetch_assoc($sqlle);
     $tqvnewsbds_tieude=$rowle['tqvnewsbds_tieude'];	
     $matv=$_SESSION['tqvadmid'];
      $tqvadid=base64_encode($matv);
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
		   $color_1 = $rand_numb."tqv"."_$images1";
		   $uploaddir = '../images/newsbds/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$color_1"; 
			
			@copy($_FILES['file_upload']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		}
	 
  	//-------------------------------------------------
  	//  UPDATE DATA
  	//-------------------------------------------------
  	$chuthich=$_POST['chuthich'];
   $member_id = addslashes($_SESSION['member_id']);
   $q3 = "insert into tqv_bdsnewsimagesengbds set tqvnewsbds_id='$imgid',
    tqvbdsimages_url1 = \"$color_1\",tqvbdsimages_note='$chuthich',tqvadmin_id='$matv'
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
	echo "
	<div align=\"center\">
            <meta http-equiv=\"REFRESH\" content=\"1; url=index.php?tqvbds=tqvuploadimg&member=$tqvadid&imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
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
      </fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  }
  function Delete(){
  	  $id=intval( $_GET["id"] );
  	 $imgid = intval( $_GET["imgid"] );
//delete the database record
$q1 = "delete from tqv_bdsnewsimagesengbds where tqvbdsimages_id='$id' ";
$d=@mysql_query($q1) or die(mysql_error());
$c=@mysql_fetch_assoc($d);

//delete the file
@unlink("../images/newsbds/".$c[tqvbdsimages_url1]);
	echo "
	<div align=\"center\">
            <meta http-equiv=\"REFRESH\" content=\"1; url=index.php?tqvbds=tqvuploadimg&member=$tqvadid&imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
            <table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>Xóa ảnh thành công</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      </fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  	  
  }
  function edit() {
  	 $idedit=intval($_GET["id"] );
  	 $imgid = intval( $_GET["imgid"] );
  	 $sqllefff=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_id ='$imgid'");
    $rowlefff=@mysql_fetch_assoc($sqllefff);
    $tqvnewsbds_tieude=$rowlefff['tqvnewsbds_tieude'];
  	 $sqlle=@mysql_query("select * from tqv_bdsnewsimagesengbds where tqvbdsimages_id ='$idedit'");
     $rowle=@mysql_fetch_assoc($sqlle); 
     $tqvbdsimages_url1=$rowle['tqvbdsimages_url1'];
     $tqvbdsimages_note	=$rowle['tqvbdsimages_note']; 
     	  ?>
     <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	<?php include"bdsincludes/tqvleftbds.php"; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/edit.gif' border='0' width='18' height='18'><font color='#366e03'> Sửa ảnh cho bài viết</font></td></tr>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>	  
      <form method="post" name="dk" onsubmit="return check_form(this)" action='index.php?tqvbds=tqvuploadimg&designwebvn=updateimg&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>&id=<?php echo $idedit; ?>' enctype="multipart/form-data">

     <div align='center'> <table width="92%" border="0" align="center" cellpadding="0" cellspacing="4">
       
       <tr height='10'>
          <td colspan="2" align="center" >
            </td>
          </tr>
        <tr><td height='15' colspan='2'><div align='center'><font color='#c3e572' size='2'><?php echo $tqvnewsbds_tieude; ?></font></td></tr>
        <tr><td colspan='2' height='10'></td></tr>
       <tr>
          <td bgcolor="#FFFFFF" class=dott2>
    <tr><td valign="top">&#7842;nh Upload:</td>
<td><input type="hidden" name="MAX_FILE_SIZE" value="9150000" size='50'>
<input size='35' name="file_upload" type="file"></td></tr>
	<tr><td colspan='2'>
<?
if($tqvbdsimages_url1!=NULL)
{
echo("<br>(<a href=\"../images/newsbds/".$tqvbdsimages_url1."\" target=\"_blank\">Click v&#224;o &#273;&#226;y &#273;&#7875; xem &#7842;nh hi&#7879;n t&#7841;i</a>)<br>");
}
?>  
</td></tr>	  
	   <tr> 
 
      <td ><font size="2">Chú thích:</font></td>
<td><input  name="chuthich" type="text" id="chuthich" size="45" value='<?php echo $tqvbdsimages_note; ?>'>
</td>
</tr>	 
      <tr>
       
          <td colspan="2"><div align='center'>
          	  <input type="hidden" name="action" id="action" value="action" />
          	  <input type="submit" name="Submit" class='tomtat1' value="Cập nhập" />
           <br>
            </td>
        </tr>
        <tr><td colspan='2' height='15'></td></tr>
        
      </table>
        </form> 
    	<table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='metatranquangvinhit' height=20>
                          
                                <TBODY>

                                <TR class=nenxanh5>
                                <TD class=textxanhbold1 width="10%">
                                <DIV align=center>Số TT</B></DIV></TD>
                                <TD class=textxanhbold12 width="50%">
                                <DIV align=center>Hình ảnh</B></DIV></TD>
                                 <TD class=textxanhbold12 width="15%">
                                <DIV align=center>Chú thích</B></DIV></TD>
                                <TD class=textxanhbold1 width="15%">
                                <DIV align=center>Người gởi</a></B></DIV></TD>
                                <TD class=textxanhbold1 width="10%">
                                <DIV align=center>Lựa chọm</a></B></DIV></TD>	
                               
</TR></table><table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='tranquangvinhdesign' >
	<tr><td colspan='4' height'15'></td></tr>
<?php $n=0;
$sql=@mysql_query("SELECT * FROM `tqv_bdsnewsimagesengbds` where tqvnewsbds_id='$imgid' ORDER BY tqvbdsimages_id DESC limit 35") 
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
<TD align=\"left\" width='10%'>&nbsp;&nbsp; <span class='designwfdsffeaffs'> $line </TD>
<TD align=\"left\" width='50%'>&nbsp;&nbsp;<a class='designwfdsffeaffs' href='index.php?tqvbds=tqvuploadimg&designwebvn=edit&member=$matv&imgid=$imgid&id=$id' onmouseover='doTooltip(event,\"../images/newsbds/$files\",\"$chuthich\")' onmouseout='hideTip()'> $files
 </TD>
 <td width='20%'><span class='designwfdsffeaffs'> $tinhtrang </td>
 <TD width='20%'><center><span class='designwfdsffeaffs'> ";
  $sql1=@mysql_query("SELECT * FROM tqv_bdsadmin WHERE tqvadmin_id='$ma_nguoidung'");
  	  while($v=@mysql_fetch_array($sql1)){
  	  echo $v['tqvadmin_name'];	 
  	  } 
	  echo "</center></TD>
<td>"; ?>
		  <a href="index.php?tqvbds=tqvuploadimg&designwebvn=edit&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>&id=<?php echo $id; ?>"><img src='../images/icon_topicyellow.gif' width='16' height='16' border='0' alt='Chỉnh sửa ảnh | Change images' title='Chỉnh sửa ảnh | Change images'> </a> 
		  <a href="javascript:baoloi('index.php?tqvbds=tqvuploadimg&designwebvn=delete&member=<?php echo $matv; ?>&imgid=<?php echo $imgid ?>&id=<?php echo $id; ?>')"><img src='../images/drop.jpg' width='16' height='16' border='0' alt='Xoá ảnh  | Delete images' title='Xoá ảnh  | Delete images'> </a>
		  </td>
</TR>
 <?php   
	echo "	<tr><td colspan='4' height'10'></td></tr><tr><td colspan='4'><div align='center'><font color='#b6e4fb'>----------------------------------------------------------------------------------------</td></tr>";
				}echo("</table>

"); ?>
          
          
          
          </td></tr>
        <tr><td background='images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>  
   <?php  
  }
    function updateimg(){
     $id=intval($_GET["id"] );	
     $imgid=intval($_GET['imgid']);   
     $sqlle=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_id ='$imgid'");
     $rowle=@mysql_fetch_assoc($sqlle);
     $tqvnewsbds_tieude=$rowle['tqvnewsbds_tieude'];	
     $matv=$_SESSION['tqvadmid'];
      $tqvadid=base64_encode($matv);
     $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
  	
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
		   $color_1 = $rand_numb."tqv"."_$images1";
		   $uploaddir = '../images/newsbds/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$color_1"; 
			
			@copy($_FILES['file_upload']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		}
	 
  	//-------------------------------------------------
  	//  UPDATE DATA
  	//-------------------------------------------------
  	$chuthich=$_POST['chuthich'];
   $member_id = addslashes($_SESSION['member_id']);
   $q3 = "update  tqv_bdsnewsimagesengbds set tqvnewsbds_id='$imgid',tqvbdsimages_url1='$color_1', tqvbdsimages_note='$chuthich',tqvadmin_id='$matv'
       where tqvbdsimages_id='$id'
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
	echo "
	<div align=\"center\">
            <meta http-equiv=\"REFRESH\" content=\"1; url=index.php?tqvbds=tqvuploadimg&member=$tqvadid&imgid=$imgid\"><br><br><br><br><br><br><br><br><br>
            <table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>Bạn đã sửa ảnh thành công</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      </fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  }
  
    			?>