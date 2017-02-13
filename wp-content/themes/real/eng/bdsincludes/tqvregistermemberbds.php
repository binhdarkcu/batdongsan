<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->		<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
		
			// O2k7 skin
				tinyMCE.init({
					// General options
					mode : "exact",
					elements : "tranquangvinhit",
					theme : "advanced",
					skin : "o2k7",
					plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",
			
					// Theme options
					theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,charmap,emotions,iespell,media,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,cleanup,help,code,|,insertdate,",
					
					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_statusbar_location : "bottom",
					theme_advanced_resizing : true,
			
					// Example content CSS (should be your site CSS)
					content_css : "css/content.css",
			
					// Drop lists for link/image/media/template dialogs
					template_external_list_url : "lists/template_list.js",
					external_link_list_url : "lists/link_list.js",
					external_image_list_url : "lists/image_list.js",
					media_external_list_url : "lists/media_list.js",
			
					// Replace values for the template plugin
					template_replace_values : {
						username : "Some User",
						staffid : "991234"
					}
				});

		</script>
	<!-- EDITOR -->
	<script language="javascript">
	function check_form(the_form)
	{	var the_hoten  =     the_form.hoten.value;
        var the_tendangnhap = the_form.tendangnhap.value;
        var the_matkhau    = the_form.matkhau.value;
        var the_matkhauxn    = the_form.matkhauxn.value;
        var the_email    = the_form.email.value;
      if ((the_hoten=='')||(the_tendangnhap=='')||(the_matkhau=='') ||(the_matkhauxn=='')||(the_email=='') )
		{
			alert("You fill in the information requested");
			the_form.hoten.focus();
			return false;
		}
	if(the_matkhau!=the_matkhauxn){
	   	   	alert("Password authentication is not properly");
			the_form.matkhau.focus();
			return false;
	   	   
	   }	
	    var the_at    = the_email.indexOf("@");
		var the_dot   = the_email.indexOf(".");
		var the_space = the_email.indexOf(" ");
	
		if ( (the_at!=-1)&&(the_at!=0)&&(the_dot!=-1)&&(the_dot>the_at + 1)&&(the_dot<the_email.length-1)&&(the_space==-1) )
		return true;

		alert("Invalid email");
		the_form.email.focus();
		return false;
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
      	if(isset($_POST['action'])){
		  	$name=addslashes($_POST['hoten']);
	        $tendangnhap=addslashes($_POST['tendangnhap']);
	        $email=addslashes($_POST['email']);
	        $phone=addslashes($_POST['dienthoai']);
	        $matkhau=md5(md5($_POST['matkhau']));
	        $content=addslashes($_POST['noidung']);
	        $ngaytk=date("d/m/20y"); 
		    $idad=$_SESSION['tqvadmid'];
		  	$tieude=$_REQUEST['tendangnhap'];
	        $sqlkiemtra=@mysql_query("select * from  tqv_bdsadmin where tqvadmin_tendn='$tieude'");
		    $rowpass=@mysql_num_rows($sqlkiemtra);
       if($rowpass){
   	          
   	           echo "<script> alert('Username already exists! You choose another Username') </script>";  
   	         }
   	    else { 
   	           $sql1=@mysql_query("insert into tqv_bdsadmin(tqvadmin_tendn,tqvadmin_matkhau,tqvadmin_name,tqvadmin_email,tqvadmin_mobile,tqvadmin_content,tqvadmin_dayres) values ('$tendangnhap','$matkhau','$name','$email','$phone','$content','$ngaytk')");
               $msg="Registration Successful! We will enable members after 24h . ";
   	         }
   	         }
	

	?>
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	 
    <?php include 'bdsincludes/tqvleftbds.php'; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/changeacount.gif' border='0' width='25' height='20'><font color='#366e03'> Register Member </font></td></tr>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		 <form id="form1" name="form1" method="post" action="" onsubmit="return check_form(this)">
     <div align='center'> <table width="92%" border="0" align="center" cellpadding="0" cellspacing="4">
        
        <tr>
           <td  colspan='2'><div align='center'> <font color='#366e03'>Become a member of Da Nang to enjoy renting the best service to our</font></td>
           
        </tr>
        <tr>
           <td width="10%"></td>
           <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Full name  </td><td width='2%'></td><td width='78%'><div align='left'> <input name='hoten' type="text" size="43"  class="button2" onmouseover="showTooltip('Register Danang Renting','Enter the name','Email: admin@danangrenting.com','images/email.png','images/namectnvietnam.png')" onmouseout="hideTooltip()" /> </td></tr></table> </td>
        </tr>
        <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Username </td><td width='2%'></td><td width='78%'><div align='left'> <input name="tendangnhap" type="text" size="43" class="button2" onmouseover="showTooltip('Register Danang Renting','Enter the login name','Email:  admin@danangrenting.com','images/email.png','images/addressctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
        <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Mật khẩu </td><td width='2%'></td><td width='78%'><div align='left'> <input name="matkhau" type="password" size="43" class="keyboardInput" class="button2" onmouseover="showTooltip('Register Danang Renting','Please enter your password','Email:  admin@danangrenting.com','images/email.png','images/addressctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
        	<tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'>Password</td><td width='2%'></td><td width='78%'><div align='left'> <input name="matkhauxn" class="keyboardInput" type="password" size="43" class="button2" onmouseover="showTooltip('Register Danang Renting','Enter the password confirmation','Email:  admin@danangrenting.com','images/email.png','images/addressctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>	
       <tr>
       		<td width="10%"></td>
          <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Email  </td><td width='2%'></td><td width='78%'><div align='left'><input name="email" type="text" size="43" class="button2" onmouseover="showTooltip('Register Danang Renting','Enter the e-mail','Email:  admin@danangrenting.com','images/email.png','images/emailctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
         <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;"><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Phone </td><td width='2%'></td><td width='78%'><div align='left'><input name="dienthoai" type="text" size="43"  class="button2" onmouseover="showTooltip('Register Danang Renting','Enter the phone number','Email:  admin@danangrenting.com','images/email.png','images/phonectnvietnam.png')" onmouseout="hideTooltip()" /> </td></tr></table></td>
        </tr>
       
        <tr><td colspan='2' height='10'></td></tr>
        <tr>
          <td width="10%"></td>	
          <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td colspan='3'><div align='left'><span class='tomtat1'> Personal Information </td></tr></table></td>
        </tr>
        <tr>
           <td width="10%"></td>	
           <td width="90%" style="padding: 1px;" ><div align='left'><div align='left'><textarea id="tranquangvinhit" name="noidung" rows="5" cols="37" style="width:55%; height:350px;"></textarea></td>
        </tr>  
      <tr>
       
             <?php if(($msg != "") || ($msg != NULL)) { ?>
      	  <tr>
          
          <td width="100%" colspan='2'> <div align='center'>
           <?php echo "<font color='#366e03'>".$msg; ?>
           </td>
        </tr>
        	   <?php } ?>

          <td colspan="2"><div align='center'>
          	   <input type="hidden" name="action" id="action" value="action" />
          	  <input type="submit" name="Submit" class='tomtat1' value="Send" />
            <input type="reset" name="Submit2" class='tomtat1' value="Cancel" /><br>
            </td>
        </tr>
        
      </table>
        </form>
    		
    		
    		</td></tr>
    		     <tr><td background='images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>