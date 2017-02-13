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
   ajaxLoad('bdsincludes/tqvsearchquickbds.php?lich='+x,'lichps');
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
    		      <?php 
    	           $newsid=intval($_GET['newsid']);
    	           $cateid=intval($_GET['cateid']);
    	           $sqlcate=@mysql_query("select * from tqv_bdscategorynews where tqvcat_id='$cateid'");
    	           $rowcate=@mysql_fetch_assoc($sqlcate);
    	           $name=$rowcate['tqvcat_name'];
    	           	   ?>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='<?php echo $rootbds; ?>/images/managementnews.png' border='0' width='20' height='20'> <font color='#366e03'> <?php echo $name; ?></font></td></tr>
    		      <?php 
    		       
    	           $sqlstate=@mysql_query("select * from tqv_bdsnews where tqvnews_id='$newsid' and tqvcat_id='$cateid'");
                   $rowstate=@mysql_fetch_assoc($sqlstate);
                   $tqv_qhname=$rowstate["tqvnews_heading"];
                   $tqvnews_anhmh=$rowstate["tqvnews_anhmh"];
                   $tqvnews_content=$rowstate["tqvnews_content"];
                   $tqvnews_source=$rowstate["tqvnews_source"];
                   $tqvnews_datec=$rowstate["tqvnews_datec"];
                    $tqvnews_tomtat=$rowstate["tqvnews_tomtat"];
                   $tqvnews_id=$rowstate["tqvnews_id"];
    		    ?>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr><td><div align='center'><font color='#366e03'><?php echo $tqv_qhname;?></font> <font color='#9a9c98' > </font></td></tr>
    		         <tr><td height=7></td></tr>
    		          <tr><td><?php echo $tqvnews_tomtat;?></td></tr>
    		          <tr><td><?php echo $tqvnews_content;?></td></tr>
    		          <tr><td><div align='right'><?php echo $tqvnews_source;?> - Ngày đăng : <?php echo $tqvnews_datec; ?></div></td></tr>
    		        
    		       <tr><td height=27></td></tr>
    		       	 <tr><td ><div align='left'><img src='<?php echo $rootbds; ?>/images/icon_articlelist.gif' border='0' height=16 width=16> <font color='#366e03'> Tin tức liên quan</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>
    		         <tr><td height=10></td></tr>
    		            <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnews where tqvnews_status='1' and tqvnews_id != '$tqvnews_id' and tqvcat_id='$cateid' order by tqvnews_id desc limit 20");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnews_heading"];
             $news_headingseo=designwebvntranquangvinh($tqv_qhname);
             $tqvnews_anhmh=$rowstate["tqvnews_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnews_tomtat"];
             $tqvnews_id=$rowstate["tqvnews_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='<?php echo $rootbds; ?>/images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='$rootbds/chi-tiet-tin/$cateid/$tqvnews_id/$news_headingseo.html' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>  
       <tr><td height=27></td></tr>   
     <tr><td ><div align='left'><img src='<?php echo $rootbds; ?>/images/list.png' border='0' height=21 width=25> <font color='#366e03'> Tìm kiếm tin tức theo ngày</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>		           
    		          <tr><td height=10></td></tr>
    		          <form name="form1"  method="post"><tr><td height="5" valign='top' align='left'><input type="text" class='inputboxdesignwebvnit' readonly name="theDate2" onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)" onchange="display(this.value);">&nbsp;&nbsp;&nbsp;<img src='<?php echo $rootbds; ?>/images/tranguangvinhsearchquick.gif'  onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)"></td></tr></font>
        <tr><td align='left' height="10"></td></tr>
        <tr><td  ><div id="lichps"></div></td></tr>
<div id="debug"></div>
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