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


        $submit = $_POST["submit"];
       $MAX_FILE_SIZE = $_POST["MAX_FILE_SIZE"];
 
 


	//===================================================
	// END REUPDATE
	//===================================================


$dialoose = $_GET['dialoose'];
switch($dialoose) {
	
    case "Edit":
			Edit();
	break;
	case "Delete":
			Delete();
	break;
	case "Order":
			Order();
	break;
	default:
		index();
	    break;
}

function index() {

	//===================================================
	// INDEX 
	//===================================================
		$trang=isset($_GET['trang'])?intval($_GET['trang']):1; //kiem tra $page co ton tai khong neu co lay gia tri so nguyen $trang nguoc lai thi co gia tri 1
	$rowperpage=20; //so dong tren 1 trang la 20
	$page_start=($trang-1)*$rowperpage; //tinh $page_start dua vao $trang * $rowperpage vidu: $trang=1 ->$page_start=(1-1)*20=0
	$page_end=$trang*$rowperpage;//tinh $page_end dua vao $trang * $rowperpage vidu: $trang=2 ->$page_start=(2-1)*20=20
	$sql=@mysql_query("select * from tqv_bdscontact order by contact_id desc"); //cau lenh truy van
	$totalrow=@mysql_num_rows($sql);// tinh tong so dong trong co so du lieu
    $number_page=ceil($totalrow/$rowperpage);// tinh tong so trang bang cach lay tong so dong chia cho so dong tren mot trang lay tron bang ham ceil.
   if($number_page>=1){   //neu so trang lon hon 1 thi
     	$listpage="<div align='right'><img src='images/annoicon.gif' height='20' width='20' border='0' alt='Số trang | Total page'> <font color='blue' size='2'> Trang:"; //$listpage la chuoi de in ra tu Trang
    	      for($i=1;$i<=$number_page;$i++){   //vong lap for de bien i chay tu dau den khi be hon $number_page
   	           if($i==$trang){        //neu bien $i bang so $trang hien tai
    	           $listpage.="<b><u><font color='red' size='2'>$i<b></u>";// thi ta in dam bien i
    	      }
    	      else 
    	    $listpage.="<a href='tqvcontactbds.php?dialoose=select&&trang=$i' size='2'> $i</a>" ;//nguoc lai ta cho lien ket den bien $i
    	 
    }	
    }
?>

<script language='javascript' type='text/javascript'>
    <!--
    
    function link_to_post(pid)
    {
    	temp = prompt( "", "'tqvcontactbds.php?" + pid );
    	return false;
    }
    
    function baoloi(theURL) {
       if (confirm('Ban co chac la muon xoa khong vay???')) {
          window.location.href=theURL;
       }
       else {
          alert ('Ok. Chua thuc hien tac vu nao.');
       } 
    }
    //-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK media=screen href="images/tooltip.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="images/tooltip.js" type=text/javascript></SCRIPT>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
 <div align=center>
 <table width="96%" border="0" cellspacing="0" cellpadding="2" >
  <tr>
   <td colspan=2 bgcolor="#4B9BE0"><img src="images/newsmodule.gif" width="21" height="20"  alt='Liệt kê tin tức | Select news'/><b><font color="#FFFFFF" size=2> DANH SÁCH BẠN ĐỌC GÓP Ý </td></tr>
  <tr>
    <td colspan="2" align="left"></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border='1' cellpadding="0" cellspacing="2"  >
   <tr height=20>
        <td width="5%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Mã TT </b></div></td>
        <td width="25%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Họ tên </b></div></td>
        <td width="10%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Điện thoại</b><div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Email </b></div></td>
        <td width="30%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Tiêu đề</b></div></td>	
        <td width="10%" colspan="2" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Lựa chọn</b><div></td>
      </tr>
      <?php $i=0;
            $j=0;
      while($row=@mysql_fetch_assoc($sql)){ 
      	  if ($i>=$page_start){ 
      	  
      	  $j++;
      	  ?>
      <tr onmouseover="this.bgColor='#CCCCCC'" onmouseout="this.bgColor='#FFFFFF'" bgColor=#ffffff>
        <td align="center" class=textxam12><div align=center><?php echo $j;?></td>
        <td align="center" class=textxam12><?php echo "&nbsp;".$row['contact_name'];?></td>
        <td width="22%" align="center" class=textxam12><?php echo "&nbsp;".$row['contact_phone'];?></td>
        <td align="center" class=textxam12><?php echo "&nbsp;".$row['contact_email'];?></td>
          <td align="center" class=textxam12><?php echo "&nbsp;".$row['contact_heading'];?></td>
        <td width="7%" class=textxam12><div align="center"><a href="tqvcontactbds.php?dialoose=Edit&id=<?php echo $row['contact_id'];?>"><img src='images/icon_duyetbai.gif' width='16' height='16' border='0' alt='Xem tin liên hệ | Change contact'> </a></div></td>
        <td width="6%" class=textxam12><div align="center"><a href="javascript:baoloi('tqvcontactbds.php?dialoose=Delete&id=<?php echo $row['contact_id'];?>')"><img src='images/drop.jpg' width='16' height='16' border='0' alt='Xoá tin liên hệ  | Delete contact'> </a></div></td>
      </tr>
      <?php }
      $i++;
      if($i>=$page_end){
       break;
      }
      } 
echo "<table cellspacing='0' cellpadding='0' border='0'width='100%'> ";
echo "<tr> ";
echo "<Td><div align='left'><img src='images/icon_articlelist.gif' height='20' width='17' border='0' alt='Tổng số trang | Total page'> <font color='blue' size='2'>Tổng số trang:".$number_page."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/pm.gif' height='17' width='12' border='0' alt='Tổng số tin góp ý | Total news'><font color=blue>Tổng số tin liên hệ: ".$totalrow;     
echo  "<td>".$listpage."</td>";
echo "</tr> ";
echo "</table> ";
?>
    </table></td>
  </tr>
</table>
<?php 
	}

function Edit() {
$id = intval($_GET[id]);
$a = "select * from tqv_bdscontact where contact_id='$id'";
$b = @mysql_query($a) or die(mysql_error());
$c = @mysql_fetch_array($b);

	//===================================================
	// EDIT:
	//===================================================
?>
<script type="text/javascript" src=him.js></script>
	<script type="text/javascript" src="scripts/wysiwyg.js"></script>
		<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
		<script type="text/javascript">
		    WYSIWYG.attach('noidung'); 
			</script>
<SCRIPT language=JavaScript>
function Deletepost(){
	if(confirm('Ban co chac chan muon xoa hay khong?')){
		location.href='tqvcontactbds.php?dialoose=Delete&id=<? echo $c['ma']; ?>';
	}
}
</SCRIPT>
<form method="post" name="dk" onsubmit="validate();" enctype="multipart/form-data">
<center>
<table width="96%" border="0" cellpadding="0" cellspacing="0">
        <tr>
    <td height="19" valign="middle" background="img/topbarfolder.gif"> <center>
        <strong><font color="red">Xem thông tin liên hệ</font><br>
      </center></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class=dott2><table width="96%" border="0" cellspacing="1" cellpadding="1">
    <tr> 
            <td valign="top"><B>Họ tên:</B></td>
      <td><input onkeyup=initTyper(this); size=61 name="alt" value="<? echo $c['contact_name']; ?>" type="text" readonly=true>
            </td>
    </tr>
  <tr> 
            <td valign="top"><B>Địa chỉ:</B></td>
      <td><input size=61 name="website"  value="<? echo $c['contact_address']; ?>" type="text" readonly=true>
            </td>
    </tr>

<tr> 
            <td valign="top"><B>Điện thoại:</B></td>
      <td><input size=61 name=""  value="<? echo $c['contact_phone']; ?>" type="text" readonly=true>
            </td>
    </tr>
<tr> 
            <td valign="top"><B>Email:</B></td>
      <td><input size=61 name=""  value="<? echo $c['contact_email']; ?>" type="text" readonly=true>
            </td>
    </tr>
<tr> 
            <td valign="top"><B>Tiêu đề :</B></td>
      <td><input size=61 name=""  value="<? echo $c['contact_heading']; ?>" type="text" readonly=true>
            </td>
    </tr>
      <tr> 
            <td valign="top"><B>N&#7897;i dung :</B></td>
<td><textarea  name="noidung" style="width:70%;height:250px;" id="noidung"><?=$c['contact_content']; ?>
     </textarea>
</td>
    </tr>  
    
    
</table></td></tr></table>






<?
}
function Delete() {

	//===================================================
	// DELETE:
	//===================================================

$id =intval($_GET[id]);

		//delete the database record
		$q1 = "delete from tqv_bdscontact where contact_id='$id'";
		@mysql_query($q1) or die(mysql_error());
echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"1; url=tqvcontactbds.php\"><br><br><br><br><br><br><br><br><br>
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
      <br>(<a href=\"tqvcontactbds.php\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";


}
?>
