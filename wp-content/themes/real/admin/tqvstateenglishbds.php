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
require_once("../bdssecuritypt/bdssecurity.php");


        $submit = $_POST["submit"];
       $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
  if(isset($submit) && $submit == 'Update')
  {
 	//-------------------------------------------------
  	//  UPLOAD 
  	//-------------------------------------------------
	$alt = addslashes($_POST["alt"]);
    $tinhtrang=intval($_POST["tinhtrang"]);
    $q3 = "insert into tqv_bdsstate set
    tqv_qhname=\"$alt\",
    tqv_qhstatus= \"$tinhtrang\"";
	$r3 = @mysql_query($q3) or die(mysql_error());
	echo "
	<div align=\"center\">
            <meta http-equiv=\"REFRESH\" content=\"3; url=tqvstateenglishbds.php\"><br><br><br><br><br><br><br><br><br>
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
      <br>(<a href=\"tqvstateenglishbds.php\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";
	exit;
  }

 
	//===================================================
	// END UPDATE
	//===================================================
        $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
        $submit = $_POST["submit"];
  if(isset($submit) && $submit == 'Edit & Update')
  {
 	//-------------------------------------------------
  	//  RE UPLOAD
  	//-------------------------------------------------


if ( $_FILES['file_upload']['name'] )
  	{
  	
	  	$sql_select = @mysql_query("SELECT * FROM tbl_quangcaochitiet  WHERE ma_quangcao='{$id}'");
	  	$result_select = @mysql_fetch_array( $sql_select );
	  	
	  	@unlink("../images/qc/".$result_select["images"]);




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
		   $color_1 = "logo_$rand_numb"."_$images1";
		   $uploaddir = '../images/qc/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$color_1"; 
			
			@copy($_FILES['file_upload']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		}
	 }
	 
  	//-------------------------------------------------
  	//  REUPDATE 
  	//-------------------------------------------------
    $id =intval($_GET[id]); 
    $tinhtrang=intval($_POST["tinhtrang"]);
    $demuc = intval($_POST["demuc"]);
	$tenlienket=addslashes($_POST["tenlienket"]);
	$lienket =addslashes($_POST["lienket"]);
	
	$q3 = "update tqv_bdsstate set
  	tqv_qhname= \"$tenlienket\",
	";
	
	$q3 .= "
	tqv_qhstatus=\"$tinhtrang\" where tqv_qhit=\"$id\"
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
  echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"3; url=tqvstateenglishbds.php\"><br><br><br><br><br><br><br><br><br>
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
      <br>(<a href=\"tqvstateenglishbds.php\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
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
}

function index() {

	//===================================================
	// INDEX 
	//===================================================
?>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
<script src="images/date-picker.js"></script>
	<script src="him.js"></script>
<script language="javascript">
	function check_form(the_form)
	{ var the_news_tieude    = the_form.alt.value;
      if ((the_news_tieude==''))
		{
			alert("Bạn nhập thông tin quận huyện!");
			the_form.alt.focus();
			return false;
		}
}
</script>

<form method="post" name="dk" onsubmit="return check_form(this)" enctype="multipart/form-data">
<center>
<table width="90%" border="0" cellpadding="0" cellspacing="0" borderColor=#111111>
        <tr>
    <td height="19" valign="middle" background="img/topbarfolder.gif"> <center>
        <strong><font color="red"> Danh sách Quận huyện</font><br>
      </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class=dott2><table width="90%" borderColor=#111111 cellspacing="1" cellpadding="1">
   
    <tr> 
            <td valign="top"><B>Tên Quận Huyện :</B></td>
      <td><input onkeyup=initTyper(this); size=75 name="alt" type="text">
            </td>
    </tr>
   
     <tr> 
            <td valign="top"><B>Tình Trạng :</B></td>
      <td><select name="tinhtrang" id="tinhtrang">
        <option value='1'>Hiển thị</option>
        <option value='0'>Không hiển thị</option>

</select>
            </td>
    </tr>
  <TR><td></td>
      <td><br><input  name="submit" type="submit" id="submit" value="Update"></td>
    </tr>
<br>
  </form></table></td></tr></table>


<script language='javascript' type='text/javascript'>
    <!--
    
    function link_to_post(pid)
    {
    	temp = prompt( "", "'tqvstateenglishbds.php?" + pid );
    	return false;
    }
    
    function baoloi(theURL) {
       if (confirm('Bạn có chắc chắn muốn xóa không')) {
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
                                cellPadding=1 width="90%" border=0>
                                <TBODY>

                                <TR class=nenxanh5>
                                <TD class=textxanhbold1 width="5%">
                                <DIV align=center><B>Số TT</B></DIV></TD>
                                <TD class=textxanhbold12 width="60%">
                                <DIV align=center><B>Tên Quận Huyện</B></DIV></TD>
                                <TD class=textxanhbold1 width="25%">
                                <DIV align=center><B>Tình trạng</a></B></DIV></TD>
                                <TD class=textxanhbold1 width="5%">
                                <DIV align=center><B>S&#7917;a</B></DIV></TD>
                                <TD class=textxanhbold1 width="5%">
                                <DIV align=center><B>Xo&#225;</B></DIV></TD>
</TR>
<?php
$n=0;
$sql=@mysql_query("SELECT * FROM `tqv_bdsstate` ORDER BY tqv_qhit DESC") 
                                or die(mysql_error());
                                $line=0;
			                    while($row=@mysql_fetch_array($sql)) {
			                 	$line++;
			                 
			                 	$name=$row["tqv_qhname"];
			                     $id =$row["tqv_qhit"]; 
                                $status=$row["tqv_qhstatus"];	
 echo"
<TR onmouseover=\"this.bgColor='#CCCCCC'\" onmouseout=\"this.bgColor='#FFFFFF'\" bgColor=#ffffff>
<TD align=\"left\">&nbsp;&nbsp; $line
 </TD>
<TD align=\"left\">&nbsp;&nbsp; $name
 </TD></TD><TD><center><font color=#76B646>";
 	 if($status==1){ echo "Hiển thị";
 	 echo"</font></center></TD>
		  
<TD><center>
<a class='Market' href='tqvstateenglishbds.php?dialoose=Edit&id=$id' ><IMG SRC='images/edit.gif' alt='Sửa Quận Huyện'  title ='Sửa Quận Huyện' height='16' widht='16' border='0' ></a>
</center></TD>
<TD><center><IMG SRC='images/not_remove.gif' alt='Thư mục gốc' ></a></center></TD>
</TR>";}
  else{
  echo "Không hiển thị";
 	 echo"</font></center></TD>
		  
<TD><center>
<a class='Market' href='tqvstateenglishbds.php?dialoose=Edit&id=$id' ><IMG SRC='images/edit.gif' alt='Sửa Quận Huyện'  title ='Sửa Quận Huyện' height='16' widht='16' border='0' ></a>
</center></TD>
<TD><center><a href=\"javascript:baoloi('tqvstateenglishbds.php?dialoose=Delete&id=$id&file=$images')\"><IMG border=0 SRC='images/remove.gif'></a></center></TD>
</TR>";
  
  }
	
				}

echo("</table>

<TABLE height=20><TBODY><TR><TD></TD></TR></TBODY></TABLE>");
}
function Edit() {
$id = intval($_GET[id]);
$a = "select * from tqv_bdsstate where tqv_qhit = \"$id\"";
$b = @mysql_query($a) or die(mysql_error());
$c = @mysql_fetch_array($b);

	//===================================================
	// EDIT:
	//===================================================
?>
<SCRIPT language=JavaScript>
function Deletepost(){
	if(confirm('Bạn có chắc chắn muốn xóa hay không?')){
		location.href='tqvstateenglishbds.php?dialoose=Delete&id=<? echo $c['tqv_qhit']; ?>';
	}
}
</SCRIPT>
<script src="images/date-picker.js"></script>
<form method="post" name="dk" onsubmit="validate();" enctype="multipart/form-data">
<center>
<table width="550" border="0" cellpadding="0" cellspacing="0">
        <tr>
    <td height="19" valign="middle" background="img/topbarfolder.gif"> <center>
        <strong><font color="red">S&#7917;a thông tin Quận huyện</font><br>
      </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class=dott2><table width="550" border="0" cellspacing="1" cellpadding="1">
   
  <tr> 
            <td valign="top"><B>Tên Quận huyện:</B></td>
      <td><input size=61 name="tenlienket"  value="<? echo $c['tqv_qhname']; ?>" type="text">
            </td>
    </tr>

 <tr> 
            <td valign="top"><B>Tình Trạng:</B></td>
      <td>
<SELECT NAME="tinhtrang" size=0>
	
	<?php 
	$sqltd=@mysql_query("SELECT * FROM tqv_bdsstate WHERE tqv_qhit='$id'");
	while ($rowtd=@mysql_fetch_assoc($sqltd)){
		$tinhtrang=$rowtd['tqv_qhstatus'];
		         if($tinhtrang==1){ ?>
                          <option value="<?php echo $rowtd['tqv_qhstatus']; ?>">Hiển thị</option>
                          <option value="0">Không hiển thị</option>
                 <?php } else { ?>
                 		  <option value="<?php echo $rowtd['tqv_qhstatus']; ?>">Không hiển thị</option>
                          <option value="1">Hiển thị</option>
                 	<?php }
    } 
    ?>	  
				</select></td>
    </tr>




   
<TR><td></td>
      <td><input name="submit" type="submit" id="submit" value="Edit & Update">


<INPUT  onclick=JavaScript:Deletepost(); type=button value="Delete" name=btDeletepost>

</td>
    </tr>

  </form></table></td></tr></table>






<?
}
function Delete() {

	//===================================================
	// DELETE:
	//===================================================

$id =intval($_GET[id]);

		//delete the database record
		$q1 = "delete from tqv_bdsstate  where tqv_qhit= '$id' ";
		@mysql_query($q1) or die(mysql_error());
echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"1; url=tqvstateenglishbds.php\"><br><br><br><br><br><br><br><br><br>
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
      <br>(<a href=\"tqvstateenglishbds.php\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";


}
?>
