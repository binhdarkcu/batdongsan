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

	//===================================================
	// Update
	//===================================================
  	$submit = $_POST["submit"];
  if(isset($submit) && $submit == 'Add News') { 
  	$userfile1 = intval( $_POST["userfile1"] );
	$images1 = $_FILES['userfile1']['name'];
    $rand_numb1 = time();
    $images3 = "$images1";
    $uploaddir1 = '../images/newsbds/'; // remember the trailing slash! 
    $uploadfile1 = "$uploaddir1"."$images3"; 
    if($_FILES['userfile1']['name']==''){
   	//neu hinh anh  rong thi khong chen anh 
    @mysql_query("UPDATE tqv_bdsadmin SET tqvadmin_couterdb=tqvadmin_couterdb+1 WHERE tqvadmin_id='$member_id'");
	$news_tieude = htmlspecialchars($_POST['news_tieude']); 
	$news_subnoidung =$_POST['subnoidung'];
	$news_noidung =$_POST['noidung'];
	$theloai = $_POST['theloai']; 
    $tinhtrang=$_POST['duyettin']; 
    $nguontin=$_POST['nguontin'];
    $timenowS = time();
    $ngaytk=date("d/m/20y"); 
    $qv =@mysql_query("INSERT INTO tqv_bdsnews(tqvcat_id,tqvnews_heading,tqvnews_tomtat,tqvnews_content,tqvnews_source,tqvnews_datec,tqvadmin_id,tqvnews_status) VALUES('$theloai','$news_tieude','$news_subnoidung','$news_noidung','$nguontin','$ngaytk','$member_id','$tinhtrang')");
    if($qv==false){ echo"Loi".@mysql_error(); }
   echo '<br><br><br><br><br><br><div align="center">
<meta http-equiv="REFRESH" content="2; url=tqvnewbds.php">
<table width="40%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><fieldset style="padding: 2; width:312px; height:59px">
	<legend>Please stand by ...
	  </legend>
	  <p align="center">
		<b><font color=red>B&#7840;N &#272;&#7842; C&#7852;P NH&#7852;T TH&#192;NH C&#212;NG</font></b><br>
		<br>
      <img src="images/loading1.gif" width="150" height="13" border="0"> 
      <br>
      <br>(<a href="tqvnewbds.php">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br> '; 
	exit;
	       } 
    elseif($_FILES['userfile1']['name']) {   // chen anh vao co so du lieu
    	
    	    if(!getimagesize($_FILES['userfile1']['tmp_name'])){ 
		        echo '<br><br><br><br><br><center><font color=red><B>D&#7919; li&#7879;u b&#7841;n Upload kh&#244;ng ph&#7843;i &#273;&#7883;nh d&#7841;ng &#7843;nh.</B></font></center>'; 
	            
	           exit;
		       }
            else { 
    	
  if ((move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile1))) 
  { 
    @mysql_query("UPDATE tqv_bdsadmin SET tqvadmin_couterdb=tqvadmin_couterdb+1 WHERE tqvadmin_id='$member_id'");
    $news_tieude = htmlspecialchars($_POST['news_tieude']); 
	$news_subnoidung =$_POST['subnoidung'];
	$news_noidung =$_POST['noidung'];
	$theloai = $_POST['theloai']; 
    $tinhtrang=$_POST['duyettin']; 
    $tieu=$_POST['tieudiem'];
    $noibat=$_POST['noibat'];
    $nguontin=$_POST['nguontin'];
    $trailer=$_POST['trailer'];
    $download=$_POST['download'];
    $timenowS = time();
    $ngaytk=date("d/m/20y");
      $qv =@mysql_query("INSERT INTO tqv_bdsnews(tqvcat_id,tqvnews_heading,tqvnews_tomtat,tqvnews_anhmh,tqvnews_content,tqvnews_source,tqvnews_datec,tqvadmin_id,tqvnews_status) VALUES('$theloai','$news_tieude','$news_subnoidung','$images3','$news_noidung','$nguontin','$ngaytk','$member_id','$tinhtrang')");
    if($qv==false){ echo"Loi".@mysql_error(); }
   echo '<br><br><br><br><br><br><div align="center">
<meta http-equiv="REFRESH" content="2; url=tqvnewbds.php">
<table width="40%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><fieldset style="padding: 2; width:312px; height:59px">
	<legend>Please stand by ...
	  </legend>
	  <p align="center">
		<b><font color=red>B&#7840;N &#272;&#7842; C&#7852;P NH&#7852;T TH&#192;NH C&#212;NG</font></b><br>
		<br>
      <img src="images/loading1.gif" width="150" height="13" border="0"> 
      <br>
      <br>(<a href="tqvnewbds.php">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br> '; 
	exit;
            
            }
			}
   	   }
   }


	//===================================================
	// Reupdate
	//===================================================
  	$submit = $_POST["submit"];
  if(isset($submit) && $submit == 'Update')
  {
  	//-------------------------------------------------
  	//  Reupload images
  	//-------------------------------------------------
  	
	if ( $_FILES['userfile1']['name'] )
  	{
  	
	  	
	  	if($_FILES['userfile1']['name'] == ''){ 
		       echo("<br><br><br><br><br><center><font color=red><B>H&#7843;y ch&#7885;n &#7842;nh c&#7847;n Upload cho s&#7843;n ph&#7849;m tr&#432;&#7899;c khi k&#7871;t th&#250;c!</B></font></center>"); 
		
				exit;
		       } 
		else if($_FILES['userfile1']['size'] == 0) { 
		   echo '<center><font color=red><B>C&#243; l&#7895;i x&#7843;y ra trong qu&#225; tr&#236;nh Upload. Vui l&#242;ng ki&#7875;m tra l&#7841;i.</B></font></center>'; 
		
				exit;
		       } 
		else if($_FILES['userfile1']['size'] > $_POST["MAX_FILE_SIZE"]) { 
		        echo '<br><br><br><br><br><center><font color=red><B>&#7842;nh b&#7841;n Upload qu&#225; l&#7899;n. Vui l&#242;ng ch&#7885;n &#7842;nh b&#233; h&#417;n.</B></font></center>'; 
		
				exit;
		       } 
		else if(!getimagesize($_FILES['userfile1']['tmp_name'])){ 
		        echo '<br><br><br><br><br><center><font color=red><B>D&#7919; li&#7879;u b&#7841;n Upload kh&#244;ng ph&#7843;i &#273;&#7883;nh d&#7841;ng &#7843;nh.</B></font></center>'; 
	           exit;
		       } 
		else
		{

		$id = intval( $_GET["id"] );
	  	$sql_select = @mysql_query("SELECT * FROM tqv_bdsnews WHERE tqvnews_id='$id'");
	  	$result_select = @mysql_fetch_array($sql_select);
	  	@unlink("../images/newsbds/".$result_select["images"]);
	    $rand_numb =  time();
		$neu_name = "$rand_numb"."$imgfile_name";
		$final_filename = str_replace(" ", "_", $neu_name);
		$newfile = $uploaddir . "/$final_filename";
		$images1 = $_FILES['userfile1']['name'];		
        $images_small = "News_"."$images1";
           $uploaddir = '../images/newsbds/'; // remember the trailing slash! 
		   $uploadfile = "$uploaddir"."$images_small"; 
		   @copy($_FILES['userfile1']['tmp_name'], $uploadfile) or die ("Kh&#244;ng th&#7875; upload file");
		//  $images2 = $_FILES['userfile2']['name'];		
         // $images_small2 = "News_"."$images2";
         // $uploaddir2 = '../images/newsbds/'; // remember the trailing slash! 
		//  $uploadfile2 = "$uploaddir2"."$images_small2"; 
		//  @copy($_FILES['userfile2']['tmp_name'], $uploadfile2) or die ("Kh&#244;ng th&#7875; upload file");
		}
	
	}

  	//-------------------------------------------------
  	//  Reupload images
  	//-------------------------------------------------

	$id = intval( $_GET["id"] );
	$news_tieude =htmlspecialchars($_POST["news_tieude"]);
	$news_subnoidung =$_POST["subnoidung"];
	$news_noidung = $_POST["noidung"];
	$theloai = $_POST["theloai"];
    $duyettin= $_POST["duyettin"];
    $tieudi= $_POST['tieudiem'];
    $noib= $_POST['noibat'];
    $nguontin= $_POST["nguontin"];
    $ngaytk=date("d/m/20y");
	$q3 = "UPDATE tqv_bdsnews SET
	tqvcat_id ='$theloai',
	tqvnews_heading ='$news_tieude',
	tqvnews_tomtat ='$news_subnoidung',
	";
	
	if ($images_small)
	{
		$q3 .= "
		tqvnews_anhmh ='$images_small',
		";
	}
	
	$q3 .= "
	tqvnews_content ='$news_noidung',tqvnews_source='$nguontin',tqvnews_datec='$ngaytk',tqvnews_status='$duyettin' WHERE tqvnews_id ='$id'
	";
	$r3 = @mysql_query($q3) or die(mysql_error());
	echo "
	<div align=\"center\">
<meta http-equiv=\"REFRESH\" content=\"3; url=tqvnewbds.php?dialoose=selectcat&cat=$theloai\"><br><br><br><br><br><br><br><br><br>
<table width=\"40%\"  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"top\"><fieldset style=\"padding: 2; width:312px; height:59px\">
	<legend>Please stand by ...
	  </legend>
	  <p align=\"center\">
		<b><font color=red>B&#7841;n &#273;&#227; s&#7917;a th&#224;nh c&#244;ng</b></b><br>
		<br>
      <img src=\"images/loading1.gif\" width=\"150\" height=\"13\" border=\"0\"> 
      <br>
      <br>(<a href=\"tqvnewbds.php?dialoose=selectcat&cat=$theloai\">Click v&#224;o &#273;&#226;y n&#7871;u k&#244; mu&#7889;n &#273;&#7907;i l&#226;u</a>)</p>
</fieldset></td>
  </tr>
</table></div><br><br>
</td></tr></table><br>";

	exit;
  }

	
  	//-------------------------------------------------
  	//  CATEGORY
  	//-------------------------------------------------
  	$doitenkhong = $_POST["doitenkhong"];
  	$newname = $_POST["newname"];
  if($doitenkhong == 'co')
  {
 	$q3 = "update tqv_bdscategorynews set tqvcat_name = \"$_POST[newname]\" where tqvcat_id = \"$_POST[id]\"";
 	$q2 = "update tqv_bdscategorynews set tqvcat_name = \"$_POST[newid]\" where tqvcat_id= \"$_POST[id]\"";


	$r3 = @mysql_query($q3) or die("Lỗi khi đổi tên thể loại");
}

  	$xoatheloai = $_POST["xoatheloai"];
  if($xoatheloai == 'co')
  {
 	$q5 = "DELETE FROM tqv_bdscategorynews WHERE tqvcat_id= \"$_POST[id]\"";
	$r5 = @mysql_query($q5) or die("Lỗi khi xóa thể loại");

       
 
 }$newname = $_POST["newname"];
  	$themcatmoi = $_POST["themcatmoi"]; 
if ($themcatmoi == 'co')
{
	if (isset($newname)){
 	$q4 = "INSERT INTO tqv_bdscategorynews (tqvcat_name) VALUES ('$newname')";
	$r4 = @mysql_query($q4) or die("Lỗi khi ghi thêm thể loại");
                   }
    else{
      echo"<script> alert ('Bạn hãy nhập tên thể loại mới!')</script>"; 
    }
             }
if ($_REQUEST[delete_news_category]) {
// delete news_cat

// delete a record

    $sql = "DELETE FROM $_REQUEST[table] WHERE id=$_REQUEST[news_category]";	

    $result = @mysql_query($sql);

if (!$result)

{
      echo "Cannot Delete story - something screw up!";
}
else

{	
	echo "<div align=\"center\"><br><br><font color=\"red\">Deleted!</font><br><br>";     

} }
##################################################################
?>




<script language='javascript' type='text/javascript'>
    <!--
    
    function link_to_post(pid)
    {
    	temp = prompt( "", "'tqvnewbds.php?" + pid );
    	return false;
    }
    
    function baoloi(theURL) {
       if (confirm('Bạn có chắc là muốn xóa tin này không vậy???')) {
          window.location.href=theURL;
       }
       else {
          alert ('Chưa thực hiện tác vụ nào.');
       } 
    }
    //-->
</script>
<?
$dialoose = $_GET['dialoose'];
switch($dialoose) {
	default:
		index();
	break;
	case "edit":
			edit();
	break;
	case "edit2":
			edit2();
	break;
	case "remove":
			remove();
	break;
	case "remove2":
			remove2();
	break;
	case "remove3":
			remove3();
	break;
	case "deleteall":
			deleteall();
	break;
	case "select":
			select();
	break;
	case "validate":

			validate();
	break;
	case "selectcat":

			selectcat();
	break;
	case "selectcat1":
		    selectcat1();
	        break;
	case "category":
			category();
	break;
	case "category_delete":
			category_delete();
	break;
}

	//===================================================
	// FUNCTION INDEX
	//===================================================

function index() {


?>
<script type="text/javascript" src="scripts/wysiwyg.js"></script>
		<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
		<script type="text/javascript">
		    WYSIWYG.attach('subnoidung'); 
			</script>
	   <script type="text/javascript">
		    WYSIWYG.attach('noidung'); 
			</script>
		

<script type="text/javascript" src=him.js></script>
<script language="javascript">
	function check_form(the_form)
	{ var the_news_tieude    = the_form.news_tieude.value;
      if ((the_news_tieude==''))
		{
			alert("Bạn nhập thông tin cho bài viết!");
			the_form.news_tieude.focus();
			return false;
		}
}
</script>

	
<div align='center'>
<form enctype="multipart/form-data" method="POST" NAME="mainform" onsubmit="return check_form(this)"> 
<TABLE  cellSpacing=1 cellPadding=0 width="95%" border=0>
<tr> 
      <td colspan="2"> 
        <div align="center"><font face=Tahoma size="2" color="#0000FF"><b>&#272;&#259;ng tin  m&#7899;i</b></font></div></td>
    </tr>
    <tr> 
      <td><font size="2"><b>Ti&#234;u &#273;&#7873;:</b></font><br>
        <input  name="news_tieude" type="text" id="news_tieude" size="105" ></td>
    </tr>
<tr> 
<td ><font size="2"><b>Th&#7875; lo&#7841;i:</b></font><br>
<select name="theloai" id="theloai">
<? $a="select * from tqv_bdscategorynews";
$result = @mysql_query($a) or die ("loi");
while ($row = @mysql_fetch_array($result))
{?><option value='<?=$row['tqvcat_id']?>'><?=$row['tqvcat_name']?></option>
<? }?> 
</select>
</td></tr>
<tr> 
      <td ><font size="2"><b>N&#7897;i dung tóm tắt:</b></font><br>
     <textarea  name="subnoidung" style="width:70%;height:250px;" id="subnoidung">
    </textarea>
   
   </td>
<br>



</td>
    </tr>
<tr> 
      <td ><font size="2"><b>N&#7897;i dung chi ti&#7871;t:</b></font><br>
     <textarea  name="noidung" style="width:70%;height:250px;" id="noidung">
    </textarea>
    
    	</td></td>
</tr>

<tr> 
   <td valign="top"><B>Upload Ảnh :</B><font color="#FF0000">*</font> <br><input type="hidden" name="MAX_FILE_SIZE" value="1500000"> <input size=70 name="userfile1" type="file">
              <br>
              <font size="1">* The image can have maximum 1500 kb</font></td>
    </tr>
        <tr> 
      <td><font size="2"><b>Nguồn tin</b></font><br>
        <input  name="nguontin" type="text" id="nguontin" size="105" ></td>
    </tr>	
    	

      <tr> 
 
      <td ><font size="2"><b>Duy&#7879;t tin:</b></font><br>
<select name="duyettin" id="duyettin">
<option value='1'>Tin &#273;&#432;&#7907;c duy&#7879;t</option>
<option value='0'>Tin ch&#432;a &#273;&#432;&#7907;c duy&#7879;t</option>
</select>
</td>
</tr>
<tr><td height=10></td></tr>
 <tr> 
 <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  name="submit" type="submit" id="submit" value="Add News"><br><br></td>
    </tr>

  </form>
</TBODY></TABLE></center>
<?

}
	//===================================================
	// FUNCTION edit
	//===================================================

function edit() {
$id = intval( $_GET["id"] );
$a = "select * from tqv_bdsnews where tqvnews_id='$id'";
$b = @mysql_query($a) or die(mysql_error());
$c = @mysql_fetch_array($b);

?>
<SCRIPT language=JavaScript>
function Deletepost(){
	if(confirm('Bạn có chắc chắn muốn xóa bài viết này không?')){
		location.href='tqvnewbds.php?dialoose=remove3&id=<? echo $c['tqvnews_id']; ?>';
	}
}
</SCRIPT>
<script type="text/javascript" src=him.js></script>
	<script type="text/javascript" src="scripts/wysiwyg.js"></script>
		<script type="text/javascript" src="scripts/wysiwyg-settings.js"></script>
		<script type="text/javascript">
		    WYSIWYG.attach('subnoidung'); 
			</script>
	   <script type="text/javascript">
		    WYSIWYG.attach('noidung'); 
			</script>
		
<center>
<TABLE  cellSpacing=1 cellPadding=0 width="80%" border=0>
<tr> 
      <td colspan="2"> 
        <div align="center"><font face=Tahoma size="2" color="#0000FF"><b>S&#7917;a th&#244;ng tin</b></font></div></td>
    </tr>
<form method="post" NAME="mainform" enctype="multipart/form-data">
    <tr> 
      <td><font size="2"><b>Ti&#234;u &#273;&#7873;:</b></font><br>
<input onkeyup=initTyper(this); name="news_tieude" type="text" value="<? echo $c['tqvnews_heading']; ?>"  size="105"></td>
    </tr>
  
<tr> 
            <td valign="top"><B>Th&#7875; lo&#7841;i :</B><br><SELECT NAME="theloai" size=0>
		<?
	$sel_cat=@mysql_query("select * from tqv_bdscategorynews order by tqvcat_id");
	while($res=@mysql_fetch_array($sel_cat))
	{
?>
		<option value="<?php echo $res['tqvcat_id']; ?>" <?php if($c['tqvcat_id']==$res['tqvcat_id']){echo "selected";}?>><?echo $res['tqvcat_name'];?>
<?
	}
?>
				</select> </td>
    </tr>

<tr> 
      <td ><font size="2"><b>Gi&#7899;i thi&#7879;u:</b></font><br> 
    <textarea  name="subnoidung" style="width:70%;height:250px;" id="subnoidung">
    <? echo $c['tqvnews_tomtat']; ?>
     </textarea>
   
</td>
    </tr>


    

    <tr> 
            <td valign="top"><B>N&#7897;i dung :</B><br>
        <textarea  name="noidung" style="width:70%;height:250px;" id="noidung">
        <?=$c['tqvnews_content']; ?>
     </textarea>
        
</td>
    </tr>
    
  	
   <tr> 
    <tr><td valign="top"><B>Upload ảnh lớn (Ảnh chi tiết):</B> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="MAX_FILE_SIZE" value="1150000">
<input size=26 name="userfile1" type="file"> (N&#7871;u mu&#7889;n thay &#7843;nh m&#7899;i)</td></tr>
<tr><td>
<?
if($c['tqvnews_anhmh'])
{
echo("<br>(<a href=\"../images/newsbds/".$c['tqvnews_anhmh']."\" target=\"_blank\">Click v&#224;o &#273;&#226;y &#273;&#7875; xem &#7842;nh hi&#7879;n t&#7841;i</a>)<br>");
}
?>
   <tr> 
    
      <td><font size="2"><b>Nguồn tin</b></font><br>
        <input  name="nguontin" type="text" id="nguontin" size="105" value="<? echo $c['tqvnews_source']; ?>" ></td>
    </tr>
     	  
    <tr> 
      <td ><font size="2"><b>Duy&#7879;t tin:</b></font>
&nbsp;&nbsp;&nbsp;<select name="duyettin" id="duyettin" size=0>
	 <?php 
	$sqltt=@mysql_query("SELECT * FROM tqv_bdsnews WHERE tqvnews_id='$id'");
	while ($rowtt=@mysql_fetch_assoc($sqltt)){
		$vinh=$rowtt['tqvnews_status'];
		         if($vinh==1){ ?>
                          <option value="<?php echo $rowtt['tqvnews_status']; ?>">Tin &#273;&#432;&#7907;c duy&#7879;t</option>
                          <option value="0">Tin ch&#432;a &#273;&#432;&#7907;c duy&#7879;t</option>
                 <?php } else { ?>
                 		  <option value="<?php echo $rowtt['tqvnews_status']; ?>">Tin ch&#432;a &#273;&#432;&#7907;c duy&#7879;t</option>
                          <option value="1">Tin &#273;&#432;&#7907;c duy&#7879;t</option>
                 	<?php }
    } 
    ?>	  
                 			  
</select>
</td>
</tr>

		
<tr><td valign="top"><br></td></tr>




    <tr> 
      <td valign="top"><div align='center'>&nbsp;<input  name="submit" type="submit" id="submit" value="Update">
<INPUT  onclick=JavaScript:Deletepost(); type=button value="Delete" name=btDeletepost>
</td>
    </tr>
<tr><td valign="top"><br></td></tr>
  </form>

  </form>
</TBODY></TABLE></center>
<?php
}
	//===================================================
	// FUNCTION Select
	//===================================================

function select() {
	$qv=intval($_POST['ctnv']);
	if($qv==3){
	$trang=isset($_GET['trang'])?intval($_GET['trang']):1; //kiem tra $page co ton tai khong neu co lay gia tri so nguyen $trang nguoc lai thi co gia tri 1
	$rowperpage=20;//so dong tren 1 trang la 20
	$page_start=($trang-1)*$rowperpage; //tinh $page_start dua vao $trang * $rowperpage vidu: $trang=1 ->$page_start=(1-1)*20=0
	$page_end=$trang*$rowperpage;//tinh $page_end dua vao $trang * $rowperpage vidu: $trang=2 ->$page_start=(2-1)*20=20
	$sql=@mysql_query("select * from tqv_bdsnews where tqvnews_status =0 order by tqvnews_id desc"); //cau lenh truy van
	$totalrow=@mysql_num_rows($sql);// tinh tong so dong trong co so du lieu
    $number_page=ceil($totalrow/$rowperpage);// tinh tong so trang bang cach lay tong so dong chia cho so dong tren mot trang lay tron bang ham ceil.
   if($number_page>=1){   //neu so trang lon hon 1 thi
     	$listpage="<div align='right'><img src='images/annoicon.gif' height='20' width='20' border='0' alt='Số trang | Total page'> <font color='blue' size='2'> Trang:"; //$listpage la chuoi de in ra tu Trang
    	      for($i=1;$i<=$number_page;$i++){   //vong lap for de bien i chay tu dau den khi be hon $number_page
   	           if($i==$trang){        //neu bien $i bang so $trang hien tai
    	           $listpage.="<b><u><font color='red' size='2'>$i<b></u>";// thi ta in dam bien i
    	      }
    	      else 
    	    $listpage.="<a href='tqvnewbds.php?dialoose=select&&trang=$i' size='2'> $i</a>" ;//nguoc lai ta cho lien ket den bien $i
    	 
    }	
    }
   
 ?>
 <LINK media=screen href="images/tooltip.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="images/tooltip.js" type=text/javascript></SCRIPT>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
 <div align=center>
 <table width="96%" border="0" cellspacing="0" cellpadding="2" >
  <tr>
   <td colspan=2 bgcolor="#4B9BE0"><img src="images/newsmodule.gif" width="21" height="20"  alt='Liệt kê tin tức | Select news' title='Liệt kê tin tức | Select news'/><b><font color="#FFFFFF" size=2> DANH SÁCH TIN TỨC </td></tr><tr><td colspan=1 bgcolor="#4B9BE0" width=70%><div align='right'><form action="tqvnewbds.php?dialoose=selectcat1" method='POST' name=hi><select name="theloai" id="theloai">
<?php 
$a="select * from tqv_bdscategorynews";
$result = @mysql_query($a) or die ("loi");
while ($row = @mysql_fetch_array($result))
{?><option value='<?=$row['tqvcat_id']?>'><font size=1><?=$row['tqvcat_name']?></option>
<? }?>     <input  name="submit" type="submit" id="submit" value="Tìm"></form></td></select>
<td colspan=1 bgcolor="#4B9BE0" width=30%><div align='right'><form action="tqvnewbds.php?dialoose=select" method='POST' name=vi><select name=ctnv size=0><option value=1> Tất cả tin tức</option><option value=2> Các tin đã duyệt</option><option value=3> Các tin chưa duyệt</option></select><input  name="submit" type="submit" id="submit" value="Liệt kê"></form></td></tr>
  </tr>
  <tr>
    <td colspan="2" align="left"></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border='1' cellpadding="0" cellspacing="2"  >
  <tr height=20>
        <td width="5%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Mã TT </b></div></td>
        <td width="35%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Tiêu Đề </b></div></td>
        <td width="10%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Thể Loại</b><div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ngày đăng</b></div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ảnh chi tiết</b></div></td>	
        <td width="10%" colspan="2" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Lựa chọn</b><div></td>
      </tr>
      <?php $i=0;
            $j=0;
      while($row=@mysql_fetch_assoc($sql)){ 
      	  if ($i>=$page_start){ 
      	  $vinh=$row['tqvnews_status'];
      	  $j++;
      	  ?>
      <tr onmouseover="this.bgColor='#CCCCCC'" onmouseout="this.bgColor='#FFFFFF'" bgColor=#ffffff>
        <td align="center" class=textxam12><div align=center><?php echo $j;?></td>
        <td align="center" class=textxam12><A  href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>" onmouseover="showtip('<?php if($vinh==1)echo ' <b>Bài viết đã được duyệt</b><br>Bạn click vào đây để xem chi tiết'; else echo 'Bạn click vào đây để xem chi tiết<br> Sửa và duyệt bài viết'; ?>')" 
            onmouseout="hidetip()"><?php if($vinh==1) echo "<b>&nbsp;".$row['tqvnews_heading']."</b>"; else echo "&nbsp;".$row['tqvnews_heading'];?></td>
        <td width="22%" align="center" class=textxam12><?php $theloai=$row['tqvcat_id']; $sqltl=@mysql_query("SELECT * FROM tqv_bdscategorynews WHERE tqvcat_id='$theloai'"); $row5=@mysql_fetch_assoc($sqltl); echo "&nbsp;&nbsp;". $row5['tqvcat_name'];?></td>
        <td align="center" class=textxam12><a class='Market' ><?php echo $row['tqvnews_datec'];?> </a></td>
         <td align="center" class=textxam12><a class='Market' href='#' onmouseover='doTooltip(event,"../images/newsbds/<?php echo $row['tqvnews_anhmh'];?>","<div align=center> Ảnh minh họa chi tiết  cho bài viết")' onmouseout='hideTip()'><?php echo $row['tqvnews_anhmh'];?> </a></td>
          <td width="7%" class=textxam12><div align="center"><a href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>"><img src='images/icon_duyetbai.gif' width='16' height='16' border='0' alt='Chỉnh sửa tin tức | Change news' title='Chỉnh sửa tin tức | Change news'> </a></div></td>
        <td width="6%" class=textxam12><div align="center"><a href="javascript:baoloi('tqvnewbds.php?dialoose=remove3&id=<?php echo $row['tqvnews_id'];?>')"><img src='images/drop.jpg' width='16' height='16' border='0' alt='Xoá tin tức  | Delete news' title='Xoá tin tức  | Delete news'> </a></div></td>
      </tr>
      <?php }
      $i++;
      if($i>=$page_end){
       break;
      }
      } 
echo "<table cellspacing='0' cellpadding='0' border='0'width='100%'> ";
echo "<tr> ";
echo "<Td><div align='left'><img src='images/icon_articlelist.gif' height='20' width='17' border='0' alt='Tổng số trang | Total page' title='Tổng số trang | Total page'> <font color='blue' size='2'>Tổng số trang:".$number_page."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/pm.gif' height='17' width='12' border='0' alt='Tổng số tin | Total news'><font color=blue>Tổng số tin: ".$totalrow;     
echo  "<td>".$listpage."</td>";
echo "</tr> ";
echo "</table> ";
?>
    </table></td>
  </tr>
</table>
<?php 
	}
elseif($qv==2){
  	$trang=isset($_GET['trang'])?intval($_GET['trang']):1; //kiem tra $page co ton tai khong neu co lay gia tri so nguyen $trang nguoc lai thi co gia tri 1
	$rowperpage=20;//so dong tren 1 trang la 20
	$tqv=1+0;
	$page_start=($trang-1)*$rowperpage; //tinh $page_start dua vao $trang * $rowperpage vidu: $trang=1 ->$page_start=(1-1)*20=0
	$page_end=$trang*$rowperpage;//tinh $page_end dua vao $trang * $rowperpage vidu: $trang=2 ->$page_start=(2-1)*20=20
	$sql=@mysql_query("select * from tqv_bdsnews where tqvnews_status ='$tqv' order by tqvnews_id desc"); //cau lenh truy van
	$totalrow=@mysql_num_rows($sql);// tinh tong so dong trong co so du lieu
    $number_page=ceil($totalrow/$rowperpage);// tinh tong so trang bang cach lay tong so dong chia cho so dong tren mot trang lay tron bang ham ceil.
   if($number_page>=1){   //neu so trang lon hon 1 thi
     	$listpage="<div align='right'><img src='images/annoicon.gif' height='20' width='20' border='0' alt='Số trang | Total page'> <font color='blue' size='2'> Trang:"; //$listpage la chuoi de in ra tu Trang
    	      for($i=1;$i<=$number_page;$i++){   //vong lap for de bien i chay tu dau den khi be hon $number_page
   	           if($i==$trang){        //neu bien $i bang so $trang hien tai
    	           $listpage.="<b><u><font color='red' size='2'>$i<b></u>";// thi ta in dam bien i
    	      }
    	      else 
    	    $listpage.="<a href='tqvnewbds.php?dialoose=select&&trang=$i' size='2'> $i</a>" ;//nguoc lai ta cho lien ket den bien $i
    	 
    }	
    }
   
 ?>
 <LINK media=screen href="images/tooltip.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="images/tooltip.js" type=text/javascript></SCRIPT>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
 <div align=center>
 <table width="96%" border="0" cellspacing="0" cellpadding="2" >
  <tr>
   <td colspan=2 bgcolor="#4B9BE0"><img src="images/newsmodule.gif" width="21" height="20"  alt='Liệt kê tin tức | Select news' title='Liệt kê tin tức | Select news'/><b><font color="#FFFFFF" size=2> DANH SÁCH TIN TỨC </td></tr><tr><td colspan=1 bgcolor="#4B9BE0" width=70%><div align='right'><form action="tqvnewbds.php?dialoose=selectcat1" method='POST' name=hi><select name="theloai" id="theloai">
<?php 
$a="select * from tqv_bdscategorynews";
$result = @mysql_query($a) or die ("loi");
while ($row = @mysql_fetch_array($result))
{?><option value='<?=$row['tqvcat_id']?>'><font size=1><?=$row['tqvcat_name']?></option>
<? }?>     <input  name="submit" type="submit" id="submit" value="Tìm"></form></td></select>
<td colspan=1 bgcolor="#4B9BE0" width=30%><div align='right'><form action="tqvnewbds.php?dialoose=select" method='POST' name=vi><select name=ctnv size=0><option value=1> Tất cả tin tức</option><option value=2> Các tin đã duyệt</option><option value=3> Các tin chưa duyệt</option></select><input  name="submit" type="submit" id="submit" value="Liệt kê"></form></td></tr>
  </tr>
  <tr>
    <td colspan="2" align="left"></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border='1' cellpadding="0" cellspacing="2"  >
  <tr height=20>
        <td width="5%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Mã TT </b></div></td>
        <td width="35%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Tiêu Đề </b></div></td>
        <td width="10%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Thể Loại</b><div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ngày đăng</b></div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ảnh chi tiết</b></div></td>	
        <td width="10%" colspan="2" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Lựa chọn</b><div></td>
      </tr>
      <?php $i=0;
            $j=0;
      while($row=@mysql_fetch_assoc($sql)){ 
      	  if ($i>=$page_start){ 
      	  $vinh=$row['tqvnews_status'];
      	  $j++;
      	  ?>
      <tr onmouseover="this.bgColor='#CCCCCC'" onmouseout="this.bgColor='#FFFFFF'" bgColor=#ffffff>
        <td align="center" class=textxam12><div align=center><?php echo $j;?></td>
        <td align="center" class=textxam12><A  href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>" onmouseover="showtip('<?php if($vinh==1)echo ' <b>Bài viết đã được duyệt</b><br>Bạn click vào đây để xem chi tiết'; else echo 'Bạn click vào đây để xem chi tiết<br> Sửa và duyệt bài viết'; ?>')" 
            onmouseout="hidetip()"><?php if($vinh==1) echo "<b>&nbsp;".$row['tqvnews_heading']."</b>"; else echo "&nbsp;".$row['tqvnews_heading'];?></td>
        <td width="22%" align="center" class=textxam12><?php $theloai=$row['tqvcat_id']; $sqltl=@mysql_query("SELECT * FROM tqv_bdscategorynews WHERE tqvcat_id='$theloai'"); $row5=@mysql_fetch_assoc($sqltl); echo "&nbsp;&nbsp;". $row5['tqvcat_name'];?></td>
        <td align="center" class=textxam12><a class='Market' ><?php echo $row['tqvnews_datec'];?> </a></td>
         <td align="center" class=textxam12><a class='Market' href='#' onmouseover='doTooltip(event,"../images/newsbds/<?php echo $row['tqvnews_anhmh'];?>","<div align=center> Ảnh minh họa chi tiết  cho bài viết")' onmouseout='hideTip()'><?php echo $row['tqvnews_anhmh'];?> </a></td>
          <td width="7%" class=textxam12><div align="center"><a href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>"><img src='images/icon_duyetbai.gif' width='16' height='16' border='0' alt='Chỉnh sửa tin tức | Change news' title='Chỉnh sửa tin tức | Change news'> </a></div></td>
        <td width="6%" class=textxam12><div align="center"><a href="javascript:baoloi('tqvnewbds.php?dialoose=remove3&id=<?php echo $row['tqvnews_id'];?>')"><img src='images/drop.jpg' width='16' height='16' border='0' alt='Xoá tin tức  | Delete news' title='Xoá tin tức  | Delete news'> </a></div></td>
      </tr>
      <?php }
      $i++;
      if($i>=$page_end){
       break;
      }
      } 
echo "<table cellspacing='0' cellpadding='0' border='0'width='100%'> ";
echo "<tr> ";
echo "<Td><div align='left'><img src='images/icon_articlelist.gif' height='20' width='17' border='0' alt='Tổng số trang | Total page' title='Tổng số trang | Total page'> <font color='blue' size='2'>Tổng số trang:".$number_page."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/pm.gif' height='17' width='12' border='0' alt='Tổng số tin | Total news'><font color=blue>Tổng số tin: ".$totalrow;     
echo  "<td>".$listpage."</td>";
echo "</tr> ";
echo "</table> ";
?>
    </table></td>
  </tr>
</table>
<?php 
	}
else {
	$trang=isset($_GET['trang'])?intval($_GET['trang']):1; //kiem tra $page co ton tai khong neu co lay gia tri so nguyen $trang nguoc lai thi co gia tri 1
	$rowperpage=20;//so dong tren 1 trang la 20
    $page_start=($trang-1)*$rowperpage; //tinh $page_start dua vao $trang * $rowperpage vidu: $trang=1 ->$page_start=(1-1)*20=0
	$page_end=$trang*$rowperpage;//tinh $page_end dua vao $trang * $rowperpage vidu: $trang=2 ->$page_start=(2-1)*20=20
	$sql=@mysql_query("select * from tqv_bdsnews order by tqvnews_id desc"); //cau lenh truy van
	$totalrow=@mysql_num_rows($sql);// tinh tong so dong trong co so du lieu
    $number_page=ceil($totalrow/$rowperpage);// tinh tong so trang bang cach lay tong so dong chia cho so dong tren mot trang lay tron bang ham ceil.
   if($number_page>=1){   //neu so trang lon hon 1 thi
     	$listpage="<div align='right'><img src='images/annoicon.gif' height='20' width='20' border='0' alt='Số trang | Total page'> <font color='blue' size='2'> Trang:"; //$listpage la chuoi de in ra tu Trang
    	      for($i=1;$i<=$number_page;$i++){   //vong lap for de bien i chay tu dau den khi be hon $number_page
   	           if($i==$trang){        //neu bien $i bang so $trang hien tai
    	           $listpage.="<b><u><font color='red' size='2'>$i<b></u>";// thi ta in dam bien i
    	      }
    	      else 
    	    $listpage.="<a href='tqvnewbds.php?dialoose=select&&trang=$i' size='2'> $i</a>" ;//nguoc lai ta cho lien ket den bien $i
    	 
    }	
    }
   
 ?>
 <LINK media=screen href="images/tooltip.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="images/tooltip.js" type=text/javascript></SCRIPT>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
 <div align=center>
 <table width="96%" border="0" cellspacing="0" cellpadding="2" >
  <tr>
   <td colspan=2 bgcolor="#4B9BE0"><img src="images/newsmodule.gif" width="21" height="20"  alt='Liệt kê tin tức | Select news' title='Liệt kê tin tức | Select news'/><b><font color="#FFFFFF" size=2> DANH SÁCH TIN TỨC </td></tr><tr><td colspan=1 bgcolor="#4B9BE0" width=70%><div align='right'><form action="tqvnewbds.php?dialoose=selectcat1" method='POST' name=hi><select name="theloai" id="theloai">
<?php 
$a="select * from tqv_bdscategorynews";
$result = @mysql_query($a) or die ("loi");
while ($row = @mysql_fetch_array($result))
{?><option value='<?=$row['tqvcat_id']?>'><font size=1><?=$row['tqvcat_name']?></option>
<? }?>     <input  name="submit" type="submit" id="submit" value="Tìm"></form></td></select>
<td colspan=1 bgcolor="#4B9BE0" width=30%><div align='right'><form action="tqvnewbds.php?dialoose=select" method='POST' name=vi><select name=ctnv size=0><option value=1> Tất cả tin tức</option><option value=2> Các tin đã duyệt</option><option value=3> Các tin chưa duyệt</option></select><input  name="submit" type="submit" id="submit" value="Liệt kê"></form></td></tr>
  </tr>
  <tr>
    <td colspan="2" align="left"></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border='1' cellpadding="0" cellspacing="2"  >
  <tr height=20>
        <td width="5%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Mã TT </b></div></td>
        <td width="35%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Tiêu Đề </b></div></td>
        <td width="10%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Thể Loại</b><div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ngày đăng</b></div></td>
        <td width="20%" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Ảnh chi tiết</b></div></td>	
        <td width="10%" colspan="2" bgcolor="#4B9BE0"><div align="center" class="style1"><b><font color="#FFFFFF">Lựa chọn</b><div></td>
      </tr>
      <?php $i=0;
            $j=0;
      while($row=@mysql_fetch_assoc($sql)){ 
      	  if ($i>=$page_start){ 
      	  $vinh=$row['tqvnews_status'];
      	  $j++;
      	  ?>
      <tr onmouseover="this.bgColor='#CCCCCC'" onmouseout="this.bgColor='#FFFFFF'" bgColor=#ffffff>
        <td align="center" class=textxam12><div align=center><?php echo $j;?></td>
        <td align="center" class=textxam12><A  href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>" onmouseover="showtip('<?php if($vinh==1)echo ' <b>Bài viết đã được duyệt</b><br>Bạn click vào đây để xem chi tiết'; else echo 'Bạn click vào đây để xem chi tiết<br> Sửa và duyệt bài viết'; ?>')" 
            onmouseout="hidetip()"><?php if($vinh==1) echo "<b>&nbsp;".$row['tqvnews_heading']."</b>"; else echo "&nbsp;".$row['tqvnews_heading'];?></td>
        <td width="22%" align="center" class=textxam12><?php $theloai=$row['tqvcat_id']; $sqltl=@mysql_query("SELECT * FROM tqv_bdscategorynews WHERE tqvcat_id='$theloai'"); $row5=@mysql_fetch_assoc($sqltl); echo "&nbsp;&nbsp;". $row5['tqvcat_name'];?></td>
        <td align="center" class=textxam12><a class='Market' ><?php echo $row['tqvnews_datec'];?> </a></td>
         <td align="center" class=textxam12><a class='Market' href='#' onmouseover='doTooltip(event,"../images/newsbds/<?php echo $row['tqvnews_anhmh'];?>","<div align=center> Ảnh minh họa chi tiết  cho bài viết")' onmouseout='hideTip()'><?php echo $row['tqvnews_anhmh'];?> </a></td>
          <td width="7%" class=textxam12><div align="center"><a href="tqvnewbds.php?dialoose=edit&id=<?php echo $row['tqvnews_id'];?>"><img src='images/icon_duyetbai.gif' width='16' height='16' border='0' alt='Chỉnh sửa tin tức | Change news' title='Chỉnh sửa tin tức | Change news'> </a></div></td>
        <td width="6%" class=textxam12><div align="center"><a href="javascript:baoloi('tqvnewbds.php?dialoose=remove3&id=<?php echo $row['tqvnews_id'];?>')"><img src='images/drop.jpg' width='16' height='16' border='0' alt='Xoá tin tức  | Delete news' title='Xoá tin tức  | Delete news'> </a></div></td>
      </tr>
      <?php }
      $i++;
      if($i>=$page_end){
       break;
      }
      } 
echo "<table cellspacing='0' cellpadding='0' border='0'width='100%'> ";
echo "<tr> ";
echo "<Td><div align='left'><img src='images/icon_articlelist.gif' height='20' width='17' border='0' alt='Tổng số trang | Total page' title='Tổng số trang | Total page'> <font color='blue' size='2'>Tổng số trang:".$number_page."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/pm.gif' height='17' width='12' border='0' alt='Tổng số tin | Total news'><font color=blue>Tổng số tin: ".$totalrow;     
echo  "<td>".$listpage."</td>";
echo "</tr> ";
echo "</table> ";
?>
    </table></td>
  </tr>
</table>
<?php 
	}

	
	
	}
//===================================================
// FUNCTION Select by CAT
//===================================================

function selectcat() {

$cat = intval($_GET[cat]);
$page = intval($_GET[page]);

if($page=="") $page="1";

print <<<EOF
<LINK media=screen href="images/tooltip.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="images/tooltip.js" type=text/javascript></SCRIPT>
<script language="javascript" type="text/javascript" src="images/imageToolTip.js"></script>
<div id="tipDiv" style="Z-INDEX:1; VISIBILITY:hidden; POSITION:absolute"></div>
<TABLE class="Menubar" cellSpacing=2 cellPadding=1 width="100%" align=center bgColor=#4B9BE0 border=0>
		<TBODY>
		<TR align=center>
		<SCRIPT language=JavaScript>
		<!--
		var LETTERS="#ABCD!EFGHIJKLMNOPQRSTUVWXYZ";

		for (var i=0; i<LETTERS.length; i++) {
		var id=LETTERS.substr(i,1);
		var xemten=id;
		if (xemten=="!") xemten="&ETH;";
		if (id=="#") id="0-9";
		if (id=="!") id="&#272;";
		document.write('<td class="NSDivCenter" align="center"> \
		&nbsp;&nbsp;<a href="tqvnewbds.php?dialoose=selectcat&cat=$cat&request='+id+'"><b>'+xemten+'</b></a>\</td>');
								
		}
//-->
</SCRIPT>
</TR></TBODY></TABLE>  

<TABLE class=MenuTop cellSpacing=1 borderColor=#111111 bgcolor=#000000 cellPadding=1 width="100%" border=0>
                                <TBODY>
 <TR class=nenxanh5><td colspan=6 class=textxanhbold12 height=20><div align=center><font color=blue>Danh Sách Tin Tức </td></tr>
                                <TR class=nenxanh5>
                                <TD class=textxanhbold12 width="4%">&nbsp;<B>ID</B></TD>
                                <TD class=textxanhbold12 width="30%">&nbsp;<B>Ti&#234;u &#273;&#7873;</B></TD>
                                <TD class=textxanhbold1 width="15%"><DIV align=center><B>Thể Loại</B></DIV></TD>
                                <TD class=textxanhbold1 width="20%"><DIV align=center><B>Ngày đăng</B></DIV></TD>
                                <TD class=textxanhbold1 width="15%"><DIV align=center><B>Ảnh lớn</B></DIV></TD>
                                <TD class=textxanhbold1 width="3%"><DIV align=center><B>S&#7917;a</B></DIV></TD>
                                <TD class=textxanhbold1 width="3%"><DIV align=center><B>Xo&#225;</B></DIV></TD>
</TR>
EOF;



if($_POST['request']!=""){
$request=$submit_request;
} else { $request=$_GET['request']; }
$search_at="tqvnews_heading";

$page = intval($_GET[page]);
$request=$_GET['request'];
if($page==""){ $page=1;}
if($request=="0-9"){
$sql=@mysql_query("SELECT * FROM tqv_bdsnews WHERE tqvcat_id = '$cat' and  $search_at like '0%' OR $search_at like '1%' OR $search_at like '2%' OR $search_at like '3%' OR $search_at like '4%' OR $search_at like '5%' OR $search_at like '6%' OR $search_at like '7%' OR $search_at like '8%' OR $search_at like '9%'") or die(mysql_error());
} else {
$sql=@mysql_query("select * from tqv_bdsnews where tqvcat_id = '$cat' and  $search_at like '$request%'") or die(mysql_error());
}
$total=@mysql_num_rows($sql);
$limit=10;
$max_page=ceil($total/$limit);
$start=($page-1)* $limit;


if($request=="0-9"){
$sql=@mysql_query("SELECT *  FROM tqv_bdsnews WHERE tqvcat_id = '$cat' and $search_at like '0%' OR $search_at like '1%' OR $search_at like '2%' OR $search_at like '3%' OR $search_at like '4%' OR $search_at like '5%' OR $search_at like '6%' OR $search_at like '7%' OR $search_at like '8%' OR $search_at like '9%' order by tqvnews_id desc limit $start,$limit") or die(mysql_error());
} else {
$sql=@mysql_query("select *  from tqv_bdsnews where tqvcat_id = '$cat' and  $search_at like '$request%' order by tqvnews_id desc limit $start,$limit") or die(mysql_error());
}
$j=0;
while($row=@mysql_fetch_array($sql)){

                                $j++;
                                $id =$row["tqvnews_id"]; 
                                $title = $row["tqvnews_heading"];
                                $ngaydang= $row["tqvnews_datec"]; 
                                $images = $row["tqvnews_anhmh"];
                                $count = $row["tqvnews_counter"];
                                $post_date  = $row["tqvnews_datec"]; 
                                $cat = $row["tqvcat_id"]; 
                                $tinhtrang=$row["tqvnews_status"];
$sqlten=@mysql_query("select * from tqv_bdscategorynews where tqvcat_id='$cat'"); $rowten=@mysql_fetch_array($sqlten);$quvinh=$rowten['tqvcat_name'];
echo"
<TR onmouseover=\"this.bgColor='#CCCCCC'\" onmouseout=\"this.bgColor='#FFFFFF'\" bgColor=#ffffff>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;$j&nbsp;</P></TD>
<TD align=left>&nbsp;";

	if($tinhtrang==1){echo "<b>".$title;} else echo $title;
	echo"</TD>
<TD align=left>&nbsp;$quvinh</TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;$ngaydang&nbsp;</P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;$images&nbsp;</P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;<a href=\"tqvnewbds.php?dialoose=edit&id=$id\">S&#7917;a</a></P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;<a href=\"javascript:baoloi('tqvnewbds.php?dialoose=remove3&id=$id&file=$images')\">Xo&#225;</a></p</TD>
</TR>";
					}
echo("
</TBODY></TABLE>
<TABLE height=1><TBODY><TR><TD></TD></TR></TBODY></TABLE>
<TABLE align=\"center\" cellSpacing=1 cellPadding=0 border=0 >
                                <TBODY>
                                <TR align=middle>");

if($page>5){
if($page+5>$max_page){
$max=$max_page; $i=$max_page-5;
} else {
$max=$page+5;$i=$page-5;
} 
} else {
if($max_page<5){
$i=1;$max=$max_page;
} else {
$i=1;
if($page+5>$max_page){$max=$max_page;}else{
$max=$page+5;}}
}

if($page>1){
 echo "<TD class=NSDivCenter><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=1\" title=\"Trang &#273;&#7847;u\" class=song><img height=15 src=\"images/page_first.gif\" width=15 border=0></A></TD>";
 $page=$page-1;
  echo "<TD class=NSDivCenter><b><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$page\" title=\"Trang tr&#432;&#7899;c\" class=song><img height=15 src=\"images/page_first.gif\" width=15 border=0></A></b></TD>";
  }
for($i;$i<=$max; $i++) {
$page=$_GET['page']; if($page==""){$page=1;}
if ($i==$page) {
        echo "<TD class=NSDivCenter1 bgColor=#c0c0c0>&nbsp;<b>".$i."</b>&nbsp;</TD>";
    } else {
        echo "<TD class=NSDivCenter>&nbsp;<A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$i\" class=song><font size=1><b>$i</b></font></A>&nbsp;</TD>";
		}
	}
	if($page<=$max_page-1){
	$page=$page+1;
	 echo "<TD class=NSDivCenter><b><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$page\" title=\"Trang ti&#7871;p\" class=song><img height=15 src=\"images/bullet1.png\" width=15 border=0></A></b></TD>"; 
	 echo "<TD class=NSDivCenter><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$max_page\" title=\"Trang cu&#7889;i $max_page\" class=song><img height=15 src=\"images/bullet3.png\" width=15 border=0></A></TD>";

}
echo("
</TD></TR></TBODY></TABLE>");



}
//===================================================
// FUNCTION Select by CAT1
//===================================================

function selectcat1() {

$theloai =intval($_POST['theloai']);
$page = intval($_GET[page]);
if($page=="") $page="1";
print <<<EOF


<TABLE class=MenuTop cellSpacing=1 borderColor=#111111 bgcolor=#000000 cellPadding=1 width="100%" border=0>
                                <TBODY>
 <TR class=nenxanh5><td colspan=7 class=textxanhbold12 height=20><div align=center><font color=blue>Danh Sách Tin Tức </td></tr>
                                <TR class=nenxanh5>
                                <TD class=textxanhbold12 width="4%">&nbsp;<B>ID</B></TD>
                                <TD class=textxanhbold12 width="30%">&nbsp;<B>Ti&#234;u &#273;&#7873;</B></TD>
                                <TD class=textxanhbold1 width="15%"><DIV align=center><B>Thể Loại</B></DIV></TD>
                                <TD class=textxanhbold1 width="20%"><DIV align=center><B>Ảnh chi tiết</B></DIV></TD>
                                <TD class=textxanhbold1 width="15%"><DIV align=center><B>Ngày đăng</B></DIV></TD>
                                <TD class=textxanhbold1 width="3%"><DIV align=center><B>S&#7917;a</B></DIV></TD>
                                <TD class=textxanhbold1 width="3%"><DIV align=center><B>Xo&#225;</B></DIV></TD>
</TR>
EOF;



if($_POST['request']!=""){
$request=$submit_request;
} else { $request=$_GET['request']; }
$search_at="tqvnews_heading";

$page = intval($_GET[page]);
$request=$_GET['request'];
if($page==""){ $page=1;}
if($request=="0-9"){
$sql=@mysql_query("SELECT * FROM tqv_bdsnews WHERE  tqvcat_id = '$theloai' and  $search_at like '0%' OR $search_at like '1%' OR $search_at like '2%' OR $search_at like '3%' OR $search_at like '4%' OR $search_at like '5%' OR $search_at like '6%' OR $search_at like '7%' OR $search_at like '8%' OR $search_at like '9%'") or die(mysql_error());
} else {
$sql=@mysql_query("select * from tqv_bdsnews where tqvcat_id = '$theloai' and  $search_at like '$request%'") or die(mysql_error());
}
$total=@mysql_num_rows($sql);
$limit=10;
$max_page=ceil($total/$limit);
$start=($page-1)*$limit;


if($request=="0-9"){
$sql=@mysql_query("SELECT *  FROM tqv_bdsnews WHERE tqvcat_id = '$theloai' and $search_at like '0%' OR $search_at like '1%' OR $search_at like '2%' OR $search_at like '3%' OR $search_at like '4%' OR $search_at like '5%' OR $search_at like '6%' OR $search_at like '7%' OR $search_at like '8%' OR $search_at like '9%' order by tqvnews_id desc limit $start,$limit") or die(mysql_error());
} else {
$sql=@mysql_query("select *  from tqv_bdsnews where tqvcat_id = '$theloai' and  $search_at like '$request%' order by tqvnews_id desc limit $start,$limit") or die(mysql_error());
}
$j=0;
while($row=@mysql_fetch_array($sql)){

                                $j++;
                                  $id =$row["tqvnews_id"]; 
                                $title = $row["tqvnews_heading"];
                                $ngaydang= $row["tqvnews_datec"]; 
                                $images = $row["tqvnews_anhmh"];
                                $count = $row["tqvnews_counter"];
                                $post_date  = $row["tqvnews_datec"]; 
                                $cat = $row["tqvcat_id"]; 
                                $tinhtrang=$row["tqvnews_status"];
                             
$sqlten=@mysql_query("select * from tqv_bdscategorynews where tqvcat_id='$cat'"); $rowten=@mysql_fetch_array($sqlten);$quvinh=$rowten['tqvcat_name'];
echo"
<TR onmouseover=\"this.bgColor='#CCCCCC'\" onmouseout=\"this.bgColor='#FFFFFF'\" bgColor=#ffffff>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;$j&nbsp;</P></TD>
<TD align=left>&nbsp;";
if($tinhtrang==1) echo "<b>".$title; else echo $title;
	echo	"</TD>
<TD align=left>&nbsp;$quvinh</TD>
		<TD align=middle alignt=middle><P class=textdo12>&nbsp;$images&nbsp;</P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;$post_date&nbsp;</P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;<a href=\"tqvnewbds.php?dialoose=edit&id=$id\">S&#7917;a</a></P></TD>
<TD align=middle alignt=middle><P class=textdo12>&nbsp;<a href=\"javascript:baoloi('tqvnewbds.php?dialoose=remove3&id=$id&file=$images')\">Xo&#225;</a></p</TD>
</TR>";
					}
echo("
</TBODY></TABLE>
<TABLE height=1><TBODY><TR><TD></TD></TR></TBODY></TABLE>
<TABLE align=\"center\" cellSpacing=1 cellPadding=0 border=0 >
                                <TBODY>
                                <TR align=middle>");

if($page>5){
if($page+5>$max_page){
$max=$max_page; $i=$max_page-5;
} else {
$max=$page+5;$i=$page-5;
} 
} else {
if($max_page<5){
$i=1;$max=$max_page;
} else {
$i=1;
if($page+5>$max_page){$max=$max_page;}else{
$max=$page+5;}}
}

if($page>1){
 echo "<TD class=NSDivCenter><A HREF=\"tqvnewbds.php?dialoose=selectcat&request=$request&page=1\" title=\"Trang &#273;&#7847;u\" class=song><img height=15 src=\"images/page_first.gif\" width=15 border=0></A></TD>";
 $page=$page-1;
  echo "<TD class=NSDivCenter><b><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$page\" title=\"Trang tr&#432;&#7899;c\" class=song><img height=15 src=\"images/page_first.gif\" width=15 border=0></A></b></TD>";
  }
for($i;$i<=$max; $i++) {
$page=$_GET['page']; if($page==""){$page=1;}
if ($i==$page) {
        echo "<TD class=NSDivCenter1 bgColor=#c0c0c0>&nbsp;<b>".$i."</b>&nbsp;</TD>";
    } else {
        echo "<TD class=NSDivCenter>&nbsp;<A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$i\" class=song><font size=1><b>$i</b></font></A>&nbsp;</TD>";
		}
	}
	if($page<=$max_page-1){
	$page=$page+1;
	 echo "<TD class=NSDivCenter><b><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$page\" title=\"Trang ti&#7871;p\" class=song><img height=15 src=\"images/bullet1.png\" width=15 border=0></A></b></TD>"; 
	 echo "<TD class=NSDivCenter><A HREF=\"tqvnewbds.php?dialoose=selectcat&cat=$cat&request=$request&page=$max_page\" title=\"Trang cu&#7889;i $max_page\" class=song><img height=15 src=\"images/bullet3.png\" width=15 border=0></A></TD>";

}
echo("
</TD></TR></TBODY></TABLE>");



}
	//===================================================
	// FUNCTION remove
	//===================================================

function remove() {

//delete the database record
$q1 = "delete from tqv_bdsnews where tqvnews_id = '$_GET[id]' ";
@mysql_query($q1) or die(mysql_error());

//delete the file
@unlink("../images/newsbds/".$_GET[file]);

	redirect("".getenv("HTTP_REFERER")."");

}
	//===================================================
	// FUNCTION remove2
	//===================================================

function remove2() {

//delete the database record
$q1 = "delete from tqv_bdsnews where tqvnews_id = '$_GET[id]' ";
@mysql_query($q1) or die(mysql_error());

//delete the file
@unlink("../images/newsbds/".$_GET[file]);

	redirect("tqvnewbds.php?dialoose=validate");

}
	//===================================================
	// FUNCTION remove3
	//===================================================

function remove3() {
	$id = intval( $_GET["id"] );
//delete the database record
$q1 = "delete from tqv_bdsnews where tqvnews_id='$id' ";
@mysql_query($q1) or die(mysql_error());


//delete the file
@unlink("../images/newsbds/".$_GET[file]);

	redirect("tqvnewbds.php?dialoose=select");

}
	//===================================================
	// FUNCTION REMOVE
	//===================================================

function deleteall() {

//delete all the database record

$a = "SELECT * FROM tqv_bdsnews where validate = '0' order by tqvnews_id desc";
$b = @mysql_query($a) or die(mysql_error());
  while($c = @mysql_fetch_array($b))
  {
//delete the file
@unlink("../images/newsbds/".$c[news_images]);
}

$a2 = "delete from tqv_bdsnews where validate = '0'";
$b2 = @mysql_query($a2) or die(mysql_error());

	redirect("".getenv("HTTP_REFERER")."");

}

	//===================================================
	// FUNCTION remove CATEGORY
	//===================================================

function category_delete() {


 	$q5 = "DELETE FROM tqv_bdscategorynews WHERE tqvcat_id= \"$_GET[id]\"";
	$r5 = @mysql_query($q5) or die("loi DB khi doi ten the loai");
     redirect("tqvnewbds.php?dialoose=category");

}


	//===================================================
	// FUNCTION CATEGORY
	//===================================================

function category() {
$a = "SELECT * FROM tqv_bdscategorynews order by tqvcat_id";
$b = @mysql_query($a) or die("Lỗi khi truy vấn thể loại");
?>
<center>

<table border="0" cellpadding="0" cellspacing="0" width=350 align="center">
<tr>
	<td>
<?
$count_query = @mysql_query($a);
echo "<br><br><center>Hi&#7879;n c&#243; <b>".@mysql_num_rows($count_query)."</b> th&#7875; lo&#7841;i Tin t&#7913;c trong c&#417; s&#7903; d&#7919; li&#7879;u.<br><br>
<form method=post onsubmit='return check_form(this)' name=quangvinh><input onkeyup=initTyper(this);  type='text' name='newname' class='' size='45'>
					<input type=hidden name='themcatmoi' value='co'>
					<input style='FONT-WEIGHT: bold; CURSOR: hand; COLOR: #000000; ' type='submit' name='new' value='Th&#234;m m&#7899;i' class='button' style='width:100'>
					</form><br></center>";
if (sizeof($count_query) == 0)
{
?>
		<tr align="center">
			
  <td align="center"><b>Ch&#432;a c&#243; th&#7875; lo&#7841;i n&#224;o c&#7843;!</b> </td>
		</tr>
<?
}
else {
?>

	</td>
</tr>

<tr>
	<td align="center"> 
<table align="center" bgcolor=#6bAAef width="350" border="0" cellspacing="1" cellpadding="4">
  <tr bgcolor="#4B9BE0"> 
    <td width="5%" background="../images/headerbg.gif"  ><center>
            <b><font color="#FFFFFF">ID</font></b> 
          </center></td>
    <td width="65%" background="../images/headerbg.gif"  >
            <b><font color="#FFFFFF">T&#234;n c&#225;c th&#7875; lo&#7841;i :</font></b> 
          </td>
    <td width="10%" background="../images/headerbg.gif"  ><center>
            <b><font color="#FFFFFF">Ch&#7885;n l&#7921;a</font></b> 
          </center></td>
  <td width="5%" background="../images/headerbg.gif"  ><center>
            <b><font color="#FFFFFF">Xo&#225;</font></b> 
          </center></td>
  </tr>
<?
$a = "SELECT * FROM tqv_bdscategorynews order by tqvcat_id ASC ";
$b = @mysql_query($a) or die("Lỗi trong khi truy vấn table thể loại");
  while($c = @mysql_fetch_array($b))
  {
?>
<script language="javascript">
	function check_form(the_form)
	{ var the_newname    = the_form.newname.value;
	 if ((the_newname==''))
		{
			alert("Bạn nhập tên thể loại! ");
			the_form.newname.focus();
			return false;
		}
}
</script>
<SCRIPT language=JavaScript>
function Deletepost(){
	if(confirm('Bạn có chắc chắn muốn xóa thể loại này?')){
		location.href='tqvnewbds.php?dialoose=category_delete&id=<? echo $c['tqvcat_id']; ?>';
	}
}
</SCRIPT>
  <tr>
  <form method='post'>
    <td bgcolor='#ffffff'><center><B>
<?=$c[tqvcat_id]?>
</B></center></td>

    <td bgcolor='#ffffff'><input onkeyup=initTyper(this); type='text' name='newname' value='<?=$c[tqvcat_name]?>' size='40'></a></td>
    <td bgcolor='#ffffff'><center>

<input type=hidden name='doitenkhong' value='co'>
<input type=hidden name='id' value='<?=$c[tqvcat_id]?>'>
<input style='FONT-WEIGHT: bold; CURSOR: hand; COLOR: #000000;  name='submit' type='submit' value='&#272;&#7893;i t&#234;n'>  </form>
</td><td bgcolor='#ffffff'>

  <form name="form1" method='post'>
<input type=hidden name='xoatheloai' value='co'>
<input type=hidden name='id' value='<?=$c[tqvcat_id]?>'>
<input style='FONT-WEIGHT: bold; CURSOR: hand; COLOR: #000000;  name='delete_news_category' onclick=JavaScript:Deletepost(); name=btDeletepost type='button' value='Xo&#225;'> 
  </form>


</center></td>
  </form>
  </tr>
  <?
  }
  ?>
</table>
<br>
<?
	}

}
	//===================================================
	// FUNCTION validate
	//===================================================

function validate() {
$a = "SELECT * FROM tbl_chitiettin where validate='0' order by ma_tin";
$b = mysql_query($a) or die("Loi khi query trong news_category");

?>
<table border="0" cellpadding="0" cellspacing="0" width=100% align="center">
<tr>
	<td>

<?
$count_query = mysql_query($a);
echo "<br><center><B>Hi&#7879;n c&#243; <b>".mysql_num_rows($count_query)."</b> B&#7843;n Tin do th&#224;nh vi&#234;n &#273;&#243;ng g&#243;p &#273;ang c&#7847;n &#273;&#432;&#7907;c ki&#7875;m duy&#7879;t.</B></center><br><br>";
?>
	</td>
</tr>
<tr>
	<td align="center"> 
<table bgcolor="#000000" width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr bgcolor="#4B9BE0"> 
    <td background="../images/headerbg.gif" width="5%"><center>
        <b><font color="#FFFFFF">ID</font></b></center></td>
    <td background="../images/headerbg.gif" width="55%"><center>
        <b><font color="#FFFFFF">Ti&#234;u &#273;&#7873;</font></b></center></td>
  <td background="../images/headerbg.gif"width="25%"><center>
        <b><font color="#FFFFFF">Ng&#432;&#7901;i g&#7917;i</font></b></center></td>
    <td background="../images/headerbg.gif"><center>
       <b><font color="#FFFFFF">L&#7921;a ch&#7885;n</font></b></center></td>
  </tr>
<?
$a = "SELECT * FROM ctn_news where validate = '0' order by cat_id desc LIMIT 100";
$b = mysql_query($a) or die(mysql_error());
  while($c = mysql_fetch_array($b))
  {
echo "
  <tr>
    <td bgcolor='#FFFFff'>&nbsp;&nbsp;$c[cat_id]</td>
    <td bgcolor='#FFFFff'>&nbsp;&nbsp;$c[news_heading]</td>
    <td bgcolor='#FFFFff'>&nbsp;&nbsp;<a href='#' title='$c[email]'>$c[sender]</a></td>
    <td bgcolor='#FFFFff'><center>[ <a href='tqvnewbds.php?dialoose=edit2&id=$c[id]'>Xem</a> ] [ <a href=\"javascript:baoloi('tqvnewbds.php?dialoose=remove2&id=$c[id]&file=$c[images]')\">Xo&#225;</a> ]</center></td>
  </tr>";
  }
  ?>
</table>
<table bgcolor="#000000" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor='#FFFFCC'><center>[ <a href='tqvnewbds.php?dialoose=deleteall'>Xo&#225; t&#7845;t c&#7843; Danh s&#225;ch m&#7899;i n&#224;y</a> ]</center></td>
  </tr>
</table>

<br>
<?
}
?>