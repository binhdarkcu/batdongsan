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
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> List News and law</font></td></tr>
    		     
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr ><td><table border='0' width='485' name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr>
    		           <?php 
    		          
    		       $vinh=1+0;
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewseng order by tqvnewseng_id desc limit 12");
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                    $tqv_qhnamefull=$rowstate["tqvnewseng_heading"];
                    $tqv_qhname=tranquangvinhtieude($rowstate["tqvnewseng_heading"]);	   
                    $tqvnews_anhmh=$rowstate["tqvnewseng_anhmh"];
                   $tqvnews_content=$rowstate["tqvnewseng_content"];
                   $tqvnews_source=$rowstate["tqvnewseng_source"];
                   $tqvnews_datec=$rowstate["tqvnewseng_datec"];
                    $tqvnews_tomtat=$rowstate["tqvnewseng_tomtat"];
                   $tqvnews_id=$rowstate["tqvnewseng_id"];
    		    ?>   
    		      <td >
    		        <table border='0'  name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr><td width='150'>
    		        <a href='index.php?tqvbds=detailnewsbds&newsid=<?php echo $tqvnews_id; ?>'><img src='../images/newsbds/<?php echo $tqvnews_anhmh;?>' width='120' height='90' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td></tr>
    		        <tr><td height='7'></td></tr>
    		        <tr><td width='150'><div align='left'>
    		        <a href='index.php?tqvbds=detailnewsbds&newsid=<?php echo $tqvnews_id; ?>' class='designwfdsffeafffdfsfe' title='<?php echo $tqv_qhnamefull; ?>'><?php echo $tqv_qhname; ?></a><td></tr>
    		        </table>
          </td> 
    		         
    		        <?php 
    		 if (is_int($vinh/3) && ($vinh>=3))
                 echo "<tr  height='15'> </tr>";
   	   	         $vinh++;
    		} ?>
    	</tr></table>
    		       <tr><td height=27></td></tr>
    		       	 <tr><td ><div align='left'><img src='images/icon_articlelist.gif' border='0' height=16 width=16> <font color='#366e03'>Related News</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>
    		         <tr><td height=10></td></tr>
    		            <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnewseng where tqvnewseng_status='1' and tqvnewseng_id != '$tqvnews_id' order by tqvnewseng_id desc limit 20");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnewseng_heading"];
             $tqvnews_anhmh=$rowstate["tqvnewseng_anhmh"];
             $tqvnews_tomtat=$rowstate["tqvnewseng_tomtat"];
             $tqvnews_id=$rowstate["tqvnewseng_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='index.php?tqvbds=detailnewsbds&newsid=$tqvnews_id' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>  
       <tr><td height=27></td></tr>   
     <tr><td ><div align='left'><img src='images/list.png' border='0' height=21 width=25> <font color='#366e03'> Find news by date</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>		           
    		          <tr><td height=10></td></tr>
    		          <form name="form1"  method="post"><tr><td height="5" valign='top' align='left'><input type="text" class='inputboxdesignwebvnit' readonly name="theDate2" onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)" onchange="display(this.value);">&nbsp;&nbsp;&nbsp;<img src='images/tranguangvinhsearchquick.gif'  onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)"></td></tr></font></form>
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