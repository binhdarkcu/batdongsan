<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
<link type="text/css" rel="stylesheet" href="<?php echo $rootbds; ?>/images/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="<?php echo $rootbds; ?>/images/dhtmlgoodies_calendar.js?random=20060118"></script>
<script>
function ajaxLoad(url,id)
   {
       if (document.getElementById) {
           var x = (window.ActiveXObject) ? new ActiveXObject("Microsoft.XMLHTTP") : new XMLHttpRequest();
           }
           if (x){
           x.onreadystatechange = function()
                   { 
                       el = document.getElementById(id);
                       el.innerHTML='Loading....';
               if (x.readyState == 4 && x.status == 200)
                       {
                       el.innerHTML = x.responseText;
                   }
                   }
               x.open("GET", url, true);
               x.send(null);
               }
       }
function display(x,y)       
   {
   ajaxLoad('<?php echo $rootbds; ?>/bdsincludes/tqvsearchquickbds.php?lich='+x,'lichps');
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
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='<?php echo $rootbds; ?>/images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> Ký gửi đăng ký</font></td></tr>
    		      <?php 
    		       $newsid=intval($_GET['newsid']);
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsgt where tqvnewsgt_id='1'");
                   $rowstate=@mysql_fetch_assoc($sqlstate);
                   $tqv_qhname=$rowstate["tqvnewsgt_heading"];
                   $tqvnews_anhmh=$rowstate["tqvnewsgt_anhmh"];
                   $tqvnews_content=$rowstate["tqvnewsgt_content"];
                   $tqvnews_source=$rowstate["tqvnewsgt_source"];
                   $tqvnews_datec=$rowstate["tqvnewsgt_datec"];
                    $tqvnews_tomtat=$rowstate["tqvnewsgt_tomtat"];
                   $tqvnews_id=$rowstate["tqvnewsgt_id"];
    		    ?>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr><td><div align='center'><font color='#366e03'><?php echo $tqv_qhname;?></font> <font color='#9a9c98' > </font></td></tr>
    		         <tr><td height=7></td></tr>
    		          <tr><td><?php echo $tqvnews_tomtat;?></td></tr>
    		          <tr><td><?php echo $tqvnews_content;?></td></tr>
    		         
    		        
    		       <tr><td height=27></td></tr>
    		       	
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