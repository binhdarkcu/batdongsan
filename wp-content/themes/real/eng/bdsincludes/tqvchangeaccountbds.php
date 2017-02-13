<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->

		<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
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
		   $ctnhoten=addslashes($_POST["ctnhoten"]); 
		   $ctnemail=addslashes($_POST["ctnemail"]); 
		   $ctnphone=addslashes($_POST["ctnphone"]);
		   $ctnintroaccount=addslashes($_POST["ctnintroaccount"]);
		   $idad=$_SESSION['tqvadmid'];
		   $sqlkiemtra=@mysql_query("select * from tqv_bdsadmin where tqvadmin_id='$idad'");
		   $rowpass=@mysql_num_rows($sqlkiemtra);
       if($rowpass){
   	           $sqlupdate=@mysql_query("UPDATE tqv_bdsadmin SET tqvadmin_name='$ctnhoten',tqvadmin_email='$ctnemail',tqvadmin_mobile='$ctnphone',tqvadmin_content='$ctnintroaccount' WHERE tqvadmin_id='$idad'");
   	           $msg="Successful change information!";
   	         }
		else {
              $msg="Change the information failed !";
             } 
            }

           $idad=$_SESSION['tqvadmid'];
		   $sqlkiemtra=@mysql_query("select * from tqv_bdsadmin where tqvadmin_id='$idad'");
		   $rowse=@mysql_fetch_assoc($sqlkiemtra);
		   $tqvad_email=$rowse["tqvadmin_email"];
		   $tqvad_name=$rowse["tqvadmin_name"];
		   
		   $tqvad_mobile=$rowse["tqvadmin_mobile"];
		   $tqvad_introaccount=stripslashes($rowse["tqvadmin_content"]);
	?>
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	 
    	<table id="tranquangvinhmenuleft" width="229"  border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_13.png" width="229" height="35" alt=""></td>
		
	</tr>
<tr><td colspan="6"><?php include"bdsincludes/tqvmenufirstbds.php"; ?></td></tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_19.png" width="229" height="64" alt=""></td>
	</tr>
	<tr>
	<td colspan="6" background="images/batdongsan_green_20.gif" width="229" height="263" valign='top'>
		<div align='center'>
		<table border='0' width='200' name='tranquangvinhfe' cellSpacing=0 cellPadding=0>
         <tr><td>
          <?php 
		    include "bdsincludes/tqvstatebds.php";
		   ?>
		   </td></tr>
		   </table>
		   </td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_21.png" width="229" height="25" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_22.gif" width="229" height="38" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" background="images/batdongsan_green_23.gif" width="229" height="252" valign='top'>
	<div align='center'>
		<table border='0' width='200' name='tranquangvinhfe' cellSpacing=0 cellPadding=0>
         <tr><td>
          <?php 
		    include "bdsincludes/tqvnewsbds.php";
		   ?>
		   </td></tr>
		   </table>
			   
			   </td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_24.gif" width="229" height="26" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_25.gif" width="229" height="42" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" background='images/batdongsan_green_26.gif' width="229" height="105" valign='top'>
			   	<div align='center'>
		<table border='0' width='200' name='tranquangvinhfe' cellSpacing=0 cellPadding=0>
         <tr><td>
          <?php 
		    include "bdsincludes/tqvttcbbds.php";
		   ?>
		   </td></tr>
		   </table>
   			</td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_27.gif" width="229" height="18" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_28.gif" width="229" height="49" alt=""></td>
	</tr>
	<tr>
		<td colspan="6" background="images/batdongsan_green_29.gif" width="229" height="113" valign='top'>
			<div align='center'>
		<table border='0' width='200' name='tranquangvinhfe' cellSpacing=0 cellPadding=0>
         <tr><td>
 		  <?php 
		    include "bdsincludes/tqvsuccessloginbds.php";
		   ?>
		    </td></tr>
		   </table>
			</td>
			   
	</tr>

	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_33.gif" width="229" height="19" alt=""></td>
	</tr>
					<tr>
			<td colspan="6">
			<img src="images/batdongsan_green1_58.png" width="229" height="42" alt=""></td>
	</tr>
					<tr>
			<td colspan="6" background="images/batdongsan_green1_59.png" width="229" height="60">
			    <div align='center'>
		<table border='0' width='200' name='tranquangvinhfe' cellSpacing=0 cellPadding=0>
         <tr><td>
			    <?php 
		        include "bdsincludes/tqvvaluebds.php";
		       ?>	
			 </td></tr>
		   </table>	
		</td>
	</tr>	
		<tr>
			<td colspan="6" background="images/batdongsan_green1_62.png" width="229" height="8">
		</td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/batdongsan_green_34.gif" width="229" height="125" alt=""></td>
	</tr>
</table>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/changeacount.gif' border='0' width='25' height='20'><font color='#366e03'> Change Personal Information </font></td></tr>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		 <form id="form1" name="form1" method="post" action="" >
     <div align='center'> <table width="90%" border="0" align="center" cellpadding="0" cellspacing="4">
       
       <tr height='10'>
          <td colspan="2" align="center" >
            </td>
          </tr>
     
        <tr><td colspan='2' height='10'></td></tr>
       <tr>
           <td width="2%"></td>
           <td width="98%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'>Email  </td><td width='2%'></td><td width='78%'><div align='left'> <input name='ctnemail' type="text" size="53"  class="button2" value="<?php echo $tqvad_email; ?>" /> </td></tr></table> </td>
        </tr>
        <tr>
          <td width="2%"></td>
          <td width="98%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Full name</td><td width='2%'></td><td width='78%'><div align='left'> <input name="ctnhoten" type="text" size="53" class="button2"  value="<?php echo $tqvad_name; ?>"/></td></tr></table></td>
        </tr>
           
            <tr>
          <td width="2%"></td>
          <td width="98%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'>Phone </td><td width='2%'></td><td width='78%'><div align='left'> <input name="ctnphone" type="text"  size="53" class="button2"  value="<?php echo $tqvad_mobile; ?>"/></td></tr></table></td>
        </tr>
            <tr>
          <td width="2%"></td>
          <td width="98%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%' colspan='3'><div align='left'> About Me </td></tr></table></td>
        </tr>
           <tr>
          <td width="2%"></td>
          <td width="98%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> </td><td width='2%'></td><td width='78%'><div align='left'><textarea id="tranquangvinhit" name="ctnintroaccount" rows="5" cols="37" style="width:55%; height:350px;"><?php echo $tqvad_introaccount; ?></textarea></td></tr></table></td>
        </tr>
           
         <tr>
          <td width="2%" height='7'></td>
          <td width="98%" height='7' > </td>
        </tr>	
      <?php if(($msg != "") || ($msg != NULL)) { ?>
      	  <tr>
          
          <td width="100%" colspan='2'> <div align='center'>
           <?php echo "<font color='#366e03'>".$msg; ?>
           </td>
        </tr>
        	   <?php } ?>
        	   <tr>
          <td width="2%" height='7'></td>
          <td width="98%" height='7' > </td>
        </tr>
      <tr>
       
          <td colspan="2"><div align='center'>
          	  <input type="hidden" name="action" id="action" value="action" />
          	  <input type="submit" name="Submit" class='tomtat1' value="Update" />
           <br>
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