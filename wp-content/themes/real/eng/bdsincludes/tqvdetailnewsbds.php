<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
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
    	 
    	<?php include 'bdsincludes/tqvleftbds.php'; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		 <?php 
    	           $newsid=intval($_GET['newsid']);
    	           $cateid=intval($_GET['cateid']);
    	           $sqlcate=@mysql_query("select * from tqv_bdscategorynewseng where tqvcateng_id='$cateid'");
    	           $rowcate=@mysql_fetch_assoc($sqlcate);
    	           $name=$rowcate['tqvcateng_name'];
    	           	   ?>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> <?php echo $name; ?></font></td></tr>
    		      <?php 
    		      
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewseng where tqvnewseng_id='$newsid' and tqvcateng_id='$cateid'");
                   $rowstate=@mysql_fetch_assoc($sqlstate);
                   $tqv_qhname=$rowstate["tqvnewseng_heading"];
                   $tqvnews_anhmh=$rowstate["tqvnewseng_anhmh"];
                   $tqvnews_content=$rowstate["tqvnewseng_content"];
                   $tqvnews_source=$rowstate["tqvnewseng_source"];
                   $tqvnews_datec=$rowstate["tqvnewseng_datec"];
                    $tqvnews_tomtat=$rowstate["tqvnewseng_tomtat"];
                   $tqvnews_id=$rowstate["tqvnewseng_id"];
    		    ?>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr><td><div align='center'><font color='#366e03'><?php echo $tqv_qhname;?></font> <font color='#9a9c98' > </font></td></tr>
    		         <tr><td height=7></td></tr>
    		          <tr><td><?php echo $tqvnews_tomtat;?></td></tr>
    		          <tr><td><?php echo $tqvnews_content;?></td></tr>
    		          <tr><td><div align='right'><?php echo $tqvnews_source;?> - Posted : <?php echo $tqvnews_datec; ?></div></td></tr>
    		        
    		       <tr><td height=27></td></tr>
    		       	 <tr><td ><div align='left'><img src='images/icon_articlelist.gif' border='0' height=16 width=16> <font color='#366e03'> Related News</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>
    		         <tr><td height=10></td></tr>
    		            <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnewseng where tqvnewseng_status='1' and tqvnewseng_id != '$tqvnews_id' and tqvcateng_id='$cateid' order by tqvnewseng_id desc limit 20");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnewseng_heading"];
             $tqvnews_anhmh=$rowstate["tqvnewseng_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnewseng_tomtat"];
             $tqvnews_id=$rowstate["tqvnewseng_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='index.php?tqvbds=detailnewsbds&cateid=$cateid&newsid=$tqvnews_id' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>  
       <tr><td height=27></td></tr>   
     <tr><td ><div align='left'><img src='images/list.png' border='0' height=21 width=25> <font color='#366e03'> Find news by date</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>		           
    		          <tr><td height=10></td></tr>
    		          <form name="form1"  method="post"><tr><td height="5" valign='top' align='left'><input type="text" class='inputboxdesignwebvnit' readonly name="theDate2" onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)" onchange="display(this.value);">&nbsp;&nbsp;&nbsp;<img src='images/tranguangvinhsearchquick.gif'  onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)"></td></tr></font>
        <tr><td align='left' height="10"></td></tr>
        <tr><td  ><div id="lichps"></div></td></tr>
<div id="debug"></div>
    		         </table>
    		        </td></tr>
    		     <tr><td background='images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>