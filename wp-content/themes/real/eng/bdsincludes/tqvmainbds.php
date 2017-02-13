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
    	<tr><td width='229' valign='top'><?php include 'bdsincludes/tqvleftbds.php'; ?></td>
    	<td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfedf' cellSpacing=0 cellPadding=0>
    		<tr><td width='523' valign='top'>
    	      <table border='0' width='523' name='tranquangvinhfedff' cellSpacing=0 cellPadding=0>
    	      <tr><td background='images/batdongsan_greenmain_14.png' width='523' height='38'></td></tr>
    	      <tr><td background='images/batdongsan_greenmain_17.png' width='523' height='111' valign='top'>
    	 <div align='center'>
    	                <form id="form1" name="form1" method="post" action="index.php?tqvbds=tqvsearch" onsubmit="return check_formsearchtranquangvinhit(this)">
<table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="485"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=1 colspan='3'></td></tr>
     <tr><td width='250' valign='top'> 
         <table id="tranquangvinhdesignfr" name="tranquangvinhdesigngr" width="250"  border="0" cellpadding="0" cellspacing="0">
     <tr><td height=5 colspan='3'></td></tr>
     <tr><td ><div align='left'> Category </div></td><td width=5></td><td><div align='left'>
        <select name="theloaibds" id="theloaibds"  class="quangvinhitdesignwebvn">
        <option selected="select"><?php echo "-- Select category BDS --" ; ?></option>
<? $a="select * from tqv_catebdseng";
$result = @mysql_query($a) or die ("loi");
while ($row = @mysql_fetch_array($result)){
?><option value='<?=$row['tqv_catebdsid']?>'><?=$row['tqv_catename']?></option>
<? }?> 
</select>
        
       </td></tr>
    <tr><td  colspan='3' height=10></td></tr>
    <tr><td ><div align='left'> ID </div></td><td width=5></td><td><div align='left'> 
    	    
      <input name="masoid" alt="Input ID" class="quangvinhitdesignwebvn" value="Input ID" onblur="if(this.value=='') this.value='Input ID';" onfocus="if(this.value=='Input ID') this.value='';" type="text">
    	   
    	   </td></tr>
    <tr><td height=17 colspan='3'></td></tr>	   	   
     <tr><td  colspan='3'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input src="images/batdongsan_greenmain_23.png" onmouseover="this.src='images/batdongsan_greenmain_23.png'" onmouseout="this.src='images/batdongsan_greenmain_23.png'" type="image" width="155" height="38">  </div></td></tr>
    <tr><td height=5 colspan='3'></td></tr>
    	</table>
           </td><td width=10></td> <td width='225' valign='top'><div align='center'>
           	 <?php include 'bdsincludes/tqvintroducegtbds.php'; ?>
           	 
           	 </td></tr> 
</table>
</form>
    </div>	
    	
    	
    	
    	
    	</td></tr>
    	
    	      <tr><td background='images/batdongsan_greenmain_26.png' width='523' height='12'></td></tr>
    	      <tr><td background='images/batdongsan_greenmain_27.png' width='523' height='16'></td></tr>
    	      <tr><td background='images/batdongsan_greenmain_28.png' width='523' height='385'>
    	      	   <div align='center'>   <table border='0' width='485' name='ittranquangvinhfedfd' cellSpacing=0 cellPadding=0 >
    	                  <tr><td height='10'></td></tr>
    	                  <tr><td><?php include "bdsincludes/tqvcatebnewsbds.php" ?>  </td></tr>
    	             </table>   
    	      	  
    	      	  
    	      	  
    	      	  </td></tr>
    	       <tr><td background='images/batdongsan_greenmain_35.png' width='523' height='13'></td></tr>
    	          <tr><td background='images/batdongsan_greenmain_36.png' width='523' height='135' valign='top'>
    	            <div align='center'>   <table border='0' width='485' name='tranquangvinhfedfd' cellSpacing=0 cellPadding=0 >
    	                  <tr><td height='10'></td></tr>
    	                  <tr><td><?php include "bdsincludes/tqvpartnerbds.php" ?>  </td></tr>
    	             </table>  
    	          </td></tr>
    	          <tr><td background='images/batdongsan_greenmain_38.png' width='523' height='40'></td></tr>
    	          <tr><td background='images/batdongsan_greenmain_39.png' width='523' height='217'>
    	          <div align='center'>   <table border='0' width='485' name='tranquangvinhfedfd' cellSpacing=0 cellPadding=0 >
    	                <tr><td height='17'></td></tr>
    	                  <tr>
    	               <?php 
    		          
    		       $vinh=1+0;
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_tinhtrang='1' order by tqvnewsbds_id desc limit 3");
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                  $tqv_qhnamefull=$rowstate["tqvnewsbds_tieude"];
                   $tqv_qhname=tranquangvinhtieude($rowstate["tqvnewsbds_tieude"]);
                   $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
                   $tqvnews_content=$rowstate["tqvnewsbds_noidung"];
                   $tqvnews_source=$rowstate["tqvnews_source"];
                   $tqvnews_datec=$rowstate["tqvnewsbds_ngay"];
                    $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
                   $tqvnews_id=$rowstate["tqvnewsbds_id"];
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];
    		    ?>   
    	                 <td >
    		        <table border='0'  name='tranquafngvinhfe&#273;ds' cellSpacing=0 cellPadding=0><tr><td>
    		        <a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>'><img src='../images/newsbds/<?php echo $tqvnews_anhmh;?>' width='135' height='155' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td></tr>
    		        <tr><td height='7'></td></tr>
    		        <tr><td width='150'><div align='left'>
    		        <a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>' class='designwfdsffeafffdfsfe' title='<?php echo $tqv_qhnamefull; ?>'><?php echo $tqv_qhname; ?></a><td></tr>
    		        </table>
          </td> 
    		         
    		        <?php 
    		 if (is_int($vinh/3) && ($vinh>=3))
                 echo "<tr  height='15'> </tr>";
   	   	         $vinh++;
    		} ?>
    	</tr></table>
    	          
    	          
    	          </td></tr>
    	          <tr><td background='images/batdongsan_greenmain_47.png' width='523' height='25'></td></tr>
    	           <tr><td background='images/batdongsan_greenmain_50.png' width='523' height='263'>
    	              <div align='center'>   <table border='0' width='485' name='tranquangvinhfedfd' cellSpacing=0 cellPadding=0 >
    	                  <tr>
    	               <?php 
    		          
    		       $vinh=1+0;
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_tinhtrang='1' order by tqvnewsbds_id desc limit 3,3");
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                  $tqv_qhnamefull=$rowstate["tqvnewsbds_tieude"];
                   $tqv_qhname=tranquangvinhtieude($rowstate["tqvnewsbds_tieude"]);
                   $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
                   $tqvnews_content=$rowstate["tqvnewsbds_noidung"];
                   $tqvnews_source=$rowstate["tqvnews_source"];
                   $tqvnews_datec=$rowstate["tqvnewsbds_ngay"];
                    $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
                   $tqvnews_id=$rowstate["tqvnewsbds_id"];
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];
    		    ?>   
    	                 <td >
    		        <table border='0'  name='tranquafngvinhfe&#273;ds' cellSpacing=0 cellPadding=0><tr><td>
    		        <a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>'><img src='../images/newsbds/<?php echo $tqvnews_anhmh;?>' width='135' height='155' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td></tr>
    		        <tr><td height='7'></td></tr>
    		        <tr><td width='150'><div align='left'>
    		        <a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>' class='designwfdsffeafffdfsfe' title='<?php echo $tqv_qhnamefull; ?>'><?php echo $tqv_qhname; ?></a><td></tr>
    		        </table>
          </td> 
    		         
    		        <?php 
    		 if (is_int($vinh/3) && ($vinh>=3))
                 echo "<tr  height='15'> </tr>";
   	   	         $vinh++;
    		} ?>
    	</tr></table>
    	           
    	              
    	              
    	              </td></tr>
    	          <tr><td background='images/batdongsan_greenmain_59.png' width='523' height='62'></td></tr>	 	  	  	  
    	      </table>
    	   </td> 
    	    <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    	     </table>
    	</td></tr> 
    	</table>