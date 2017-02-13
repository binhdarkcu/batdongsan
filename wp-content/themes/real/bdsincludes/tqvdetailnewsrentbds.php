<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
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
</style>
<script type="text/javascript" src="<?php echo $rootbds; ?>/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $rootbds; ?>/highslide/highslide.css" />
	<script type="text/javascript">
hs.graphicsDir = '<?php echo $rootbds; ?>/highslide/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>	
<!-- EDITOR -->
		<script type="text/javascript" src="<?php echo $rootbds; ?>/jscripts/tiny_mce/tiny_mce.js"></script>
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
        var the_diachi    = the_form.diachi.value;
        var the_email    = the_form.email.value;
      if ((the_hoten=='')||(the_diachi=='')||(the_email==''))
		{
			alert("Bạn điền đầy đủ thông tin theo yêu cầu");
			the_form.diachi.focus();
			return false;
		}
	    var the_at    = the_email.indexOf("@");
		var the_dot   = the_email.indexOf(".");
		var the_space = the_email.indexOf(" ");
	
		if ( (the_at!=-1)&&(the_at!=0)&&(the_dot!=-1)&&(the_dot>the_at + 1)&&(the_dot<the_email.length-1)&&(the_space==-1) )
		return true;

		alert("Email không hợp lệ");
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
	?>
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	 
    <?php include"bdsincludes/tqvleftbds.php"; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>    <?php 
    		       $cate=intval($_GET['cateid']);
    	           $news=intval($_GET['newsid']); 
    	           $sqlupdate=@mysql_query("update tqv_bdsnewsbds set tqvnewsbds_counter=tqvnewsbds_counter+1 where tqv_catebdsid='$cate' and tqvnewsbds_id='$news'");
    		        $getact=$_GET['getact'];
    		        if($getact=="addform"){      		       
    		$name=addslashes($_POST['hoten']);
	        $address=addslashes($_POST['diachi']);
	        $email=addslashes($_POST['email']);
	        $phone=addslashes($_POST['dienthoai']);
	        $heading=addslashes($_POST['tieude']);
	        $content=addslashes($_POST['noidung']);
	        $language="Việt Nam";
		    $idad=$_SESSION['tqvadmid'];
		  	$tieude=$_REQUEST['tieude'];
	        $sqlkiemtra=@mysql_query("select * from tqv_bdscontactrenting where contact_heading='$tieude'");
		    $rowpass=@mysql_num_rows($sqlkiemtra);
       if($rowpass){
   	          echo"<script> alert ('Thông tin liên hệ giao dịch đã có trong có sở dữ liệu!')</script>"; 
   	           
   	         }
   	    else { 
   	           $sql1=@mysql_query("insert into tqv_bdscontactrenting(contact_name,contact_address,contact_email,contact_phone,contact_heading,contact_content,tqvnewsbds_id,tqv_catebdsid,tqv_language) values ('$name','$address','$email','$phone','$heading','$content','$news','$cate','$language')");
              echo"<script> alert ('Thông tin liên hệ giao dịch đã được cập nhật. Chúng tôi sẽ hồi âm trong thời gian sớm nhất. Cảm ơn bạn đã liên hệ cho chúng tôi!')</script>"; 
              
   	         }
    		}        
    		        
    		        
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsbds  where tqv_catebdsid='$cate' and tqvnewsbds_id='$news' and tqvnewsbds_tinhtrang='1'");
                  $rowstate=@mysql_fetch_assoc($sqlstate);
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];   
                   $tqv_qhname=$rowstate["tqvnewsbds_tieude"];
                   $tqvnewsbds_giathue=$rowstate["tqvnewsbds_giathue"];
                    $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
                   $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
                   $tqvnews_content=$rowstate["tqvnewsbds_noidung"];
                    $tqv_qhid=$rowstate["tqv_qhid"];
                 $sqlcatebdsgh=@mysql_query("select * from tqv_bdsquan where tqv_qhid='$tqv_qhid'"); $rowcatebdsgh=@mysql_fetch_assoc($sqlcatebdsgh); $namegh=$rowcatebdsgh['tqv_qhname']; $tqv_catebdsidgh =$rowcatebdsgh['tqv_qhid']; 
                    $tqvnewsbds_sophongngu=$rowstate["tqvnewsbds_sophongngu"];
                    $tqvnewsbds_dientichdat=$rowstate["tqvnewsbds_dientichdat"];
                      	$tqvnewsbds_dtsd=$rowstate["tqvnewsbds_dtsd"];
                      	$tqvnewsbds_dacdiemchinh=$rowstate["tqvnewsbds_dacdiemchinh"];
                      	$tqvnewsbds_maso=$rowstate["tqvnewsbds_maso"];
                      	  	$tqvnewsbds_duong=$rowstate["tqvnewsbds_duong"];
                      	  	$tqvnewsbds_counter=$rowstate["tqvnewsbds_counter"];
                      	  	$tqvnewsbds_trangthai=$rowstate["tqvnewsbds_trangthai"];
                   $tqvnews_id=$rowstate["tqvnewsbds_id"];
                   
    		    ?>   
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_14.png' width='523'  valign='center'><div align='center'><table border='0' width='465' name='tranquangvinhfedsf' cellSpacing=0 cellPadding=0><tr><td><div align='left'><img src='<?php echo $rootbds; ?>/images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'><?php  $sqlcatebds=@mysql_query("select * from tqv_catebds where tqv_catebdsid='$cate'"); $rowcatebds=@mysql_fetch_assoc($sqlcatebds); $name=$rowcatebds['tqv_catename']; $tqv_catebdsid =$rowcatebds['tqv_catebdsid']; ?> <a href='<?php echo $rootbds; ?>/trang-chu'> Trang chủ </a> - <a href='index.php?tqvbds=detailcatenewsbds&cateid=<?php echo $tqv_catebdsid; ?>'> <?php echo $name; ?></a> - <?php echo $tqv_qhname; ?>  <?php if($tqvnewsbds_maso!=null){ echo "mã số:".$tqvnewsbds_maso; } ?> - (lần xem <?php echo $tqvnewsbds_counter; ?>) </font></td></tr></table></td></tr>
    		     
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr><td height=15></td></tr>
    				  
    				  <?php 
    				  $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' limit 1");
    				  $numimagesup=@mysql_num_rows($sqlimagesup);
    				  echo " <tr><td height=27></td></tr><tr><td><div class='highslide-gallery'><table border='0' width='485' name='tranquafngvinhfedsdd' cellSpacing=0 cellPadding=0>";
    				  if($numimagesup){
    				  while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				     $tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				     $tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
    				   echo "<tr><td><div align='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'>
 <img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='450' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'></a></td></tr>";
    				    echo "<tr><td height=10></td></tr>"; 
    				    echo "<tr><td ><div align='center'> $tqvbdsimages_note </div></td></tr>"; 
    				   echo "<tr><td height=10></td></tr>"; 
    				  }
    				  }
    				  
    				  ?>
    				  </table> </div></td></tr><tr><td height=27></td></tr> 
    				  	 
         			
         			
         			 <tr><td > <?php include 'bdsincludes/tqvdetailnewsimagesbds.php' ; ?> </td></tr> 	  
         		
    				 	 <tr><td height=27></td></tr> 	  
     <tr><td height=5> </td></tr> 
     <tr><td> <div align='left'><font color='#366e03' size=3> <b><u> Chi tiết  : </u></b></font></td></tr>
     	  <tr><td height=7> </td></tr>  
     <?php 	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b>Quận  : </b></font></td><td><div align='left'> $namegh</td></tr>
     				  </table>
     				  </td></tr>";  ?>    				  	   
     	<tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_sophongngu!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Số phòng ngủ  : </b></font></td><td><div align='left'> $tqvnewsbds_sophongngu</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>	
     	<tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_giathue!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Giá thuê  : </b></font></td><td><div align='left'> $tqvnewsbds_giathue</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>			  	   	  	   
     	<tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_dientichdat!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Diện tích đất  : </b></font></td><td><div align='left'> $tqvnewsbds_dientichdat</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>
       <tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_dtsd!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Dtsd  : </b></font></td><td><div align='left'> $tqvnewsbds_dtsd</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>		     				  	   
     	 <tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_dacdiemchinh!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Đặc điểm chính  : </b></font></td><td><div align='left'> $tqvnewsbds_dacdiemchinh</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>	
     		 <tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_maso!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Mã số ID : </b></font></td><td><div align='left'> $tqvnewsbds_maso</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>				  	   
     				  	   
     				  	   
      <tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_duong!=NULL){	echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Đường  : </b></font></td><td><div align='left'> $tqvnewsbds_duong</td></tr>
     				  </table>
     				  </td></tr>";  }   ?>	
     	<tr><td height=5> </td></tr>  
     	 	 <?php if($tqvnewsbds_trangthai==1) {$vinh="Đang giao dịch"; }
     	 	  elseif($tqvnewsbds_trangthai==0) {$vinh="Đã cho thuê";}
     	 	
     	 		echo"<tr><td><div align='left'>
     				   <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
     				   	   <tr><td width='100' valign='top'><div align='left'><font color='#366e03'> <b> Trạng thái  : </b></font></td><td><div align='left'> $vinh</td></tr>
     				  </table>
     				  </td></tr>";    ?>				  	   			  	   			  	   				  	    
       <tr><td height=27></td></tr>   
    
    		       		           
    		         
    		         
        <tr><td align='left' height="10"></td></tr>
        
    		         </table>
    		         	 <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='metatranquangvinhit' height=20>
                      <tr><td><div align=left><img src='images/edit.gif' width=18 height=18 ><font color='#366e03'> Liên hệ -- <a href='index.php?tqvbds=detailcatenewsbds&cateid=<?php echo $tqv_catebdsid; ?>'> <?php echo $name; ?></a> - Nhà cho thuê :<?php echo $tqvnews_id; ?> </span></td></tr>
    		         </table> 
    		         	   <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='tranquangvinhdesign' >
    		<tr><td valign='top'></td></tr>
    		<?php 
    		$vinh=0+0;
    		$sqlmember=@mysql_query("select * from tqv_bdsnewsgt where tqvnewsgt_status='1' and tqvnewsgt_id='3'");
    	    $rowmember=@mysql_fetch_assoc($sqlmember);
    	    	$tqvnewsgt_heading=$rowmember['tqvnewsgt_heading'];
    	    	$tqvnewsgt_tomtat=$rowmember['tqvnewsgt_tomtat'];
    	    	$tqvnewsgt_content=$rowmember['tqvnewsgt_content']; 	
    	    
    	    	echo "<tr><td><span class='quangvinhdesign'><div align='center'><font color='#366e03'> $tqvnewsgt_heading </span></td></tr>";
    	    	 echo"<tr><td align='left' height=10></td></tr>";
    	    	echo "<tr><td><span class='quangvinhdesign'><div align='left'> $tqvnewsgt_tomtat </span></td></tr>";
    	    	 echo"<tr><td align='left' height=5></td></tr>";	
    	    	echo "<tr><td><span class='quangvinhdesign'><div align='left'> $tqvnewsgt_content </span></td></tr>";		
    	         echo"<tr><td align='left' height=10></td></tr>";
    		 ?>
    		</table>
    			  <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0'  height=20>
    			 <tr><td height=35></td></tr>
    			 </table>
    			 
    			  <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='metatranquangvinhit' height=20>
                      <tr><td><div align=left><img src='<?php echo $rootbds; ?>/images/addressctnvietnam.png' width=18 height=18 ><font color='#366e03'> Gửi Yêu Cầu - Hẹn đi xem nhà giao dịch-- <a href='index.php?tqvbds=detailcatenewsbds&cateid=<?php echo $tqv_catebdsid; ?>'> <?php echo $name; ?></a> - Nhà cho thuê :<?php echo $tqvnews_id; ?> </span></td></tr>
    		         </table> 
    		         	   <table border='0' width='485' name='thietkefwebsite' cellSpacing='0' cellPadding='0' class='tranquangvinhdesign' >
    		<tr><td valign='top'>
    				   <form id="form1" name="form1" method="post" action="index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $cate; ?>&newsid=<?php echo $news; ?>&getact=addform" onsubmit="return check_form(this)">
     <div align='center'> <table width="92%" border="0" align="center" cellpadding="0" cellspacing="4">
        
        
        <tr>
           <td width="10%"></td>
           <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Họ tên  </td><td width='2%'></td><td width='78%'><div align='left'> <input name='hoten' type="text" size="43"  class="button2" onmouseover="showTooltip('Liên hệ  Đà Nẵng Renting','Bạn hãy điền Họ tên','Email: admin@danangrenting.com','<?php echo $rootbds; ?>/images/email.png','<?php echo $rootbds; ?>/images/namectnvietnam.png')" onmouseout="hideTooltip()" /> </td></tr></table> </td>
        </tr>
        <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Địa chỉ </td><td width='2%'></td><td width='78%'><div align='left'> <input name="diachi" type="text" size="43" class="button2" onmouseover="showTooltip('Liên hệ  Đà Nẵng Renting','Bạn hãy điền địa chỉ','Email:  admin@danangrenting.com','<?php echo $rootbds; ?>/images/email.png','<?php echo $rootbds; ?>/images/addressctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
       <tr>
       		<td width="10%"></td>
          <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Email  </td><td width='2%'></td><td width='78%'><div align='left'><input name="email" type="text" size="43" class="button2" onmouseover="showTooltip('Liên hệ  Đà Nẵng Renting','Bạn hãy điền email','Email:  admin@danangrenting.com','<?php echo $rootbds; ?>/images/email.png','<?php echo $rootbds; ?>/images/emailctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
         <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;"><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Điện thoại </td><td width='2%'></td><td width='78%'><div align='left'><input name="dienthoai" type="text" size="43" class="button2" onmouseover="showTooltip('Liên hệ  Đà Nẵng Renting','Bạn hãy điền Số điện thoại','Email:  admin@danangrenting.com','<?php echo $rootbds; ?>/images/email.png','<?php echo $rootbds; ?>/images/phonectnvietnam.png')" onmouseout="hideTooltip()" /> </td></tr></table></td>
        </tr>
        <tr>
          <td width="10%"></td>	
         <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Tiêu đề </td><td width='2%'></td><td width='78%'><div align='left'><input name="tieude" type="text" size="43" class="button2" onmouseover="showTooltip('Liên hệ Đà Nẵng Renting','Bạn hãy điền Nội dung','Email:  admin@danangrenting.com','<?php echo $rootbds; ?>/images/email.png','<?php echo $rootbds; ?>/images/headingctnvietnam.png')" onmouseout="hideTooltip()" /></td></tr></table></td>
        </tr>
        <tr><td colspan='2' height='10'></td></tr>
        <tr>
          <td width="10%"></td>	
          <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'><span class='tomtat1'> Nội dung </td><td width='2%'></td><td width='78%'></td></tr></table></td>
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
          	  <input type="submit" name="Submit" class='tomtat1' value="Gửi" />
            <input type="reset" name="Submit2" class='tomtat1' value="Hủy bỏ" /><br>
            </td>
        </tr>
        
      </table>
        </form>
    				  
    				  
    				   </td></tr>
    		</table>
    		        </td></tr>
    		     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>