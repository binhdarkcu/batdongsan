
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
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> List of Partners and customers</font></td></tr>
    		     
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr ><td><table border='0' width='485' name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr>
    		       <?php 
    		          
    		       $vinh=1+0;
    	           $sqlstate=@mysql_query("select * from tqv_bdspartner order by tqvpartner_id desc limit 33");
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                    $tqv_qhnamefull=$rowstate["tqvpartner_name"];
                    $tqv_qhname=tranquangvinhtieude($rowstate["tqvpartner_name"]);	
                   $tqvnews_anhmh=$rowstate["tqvpartner_logo"];
                   $tqvpartner_url=$rowstate["tqvpartner_url"];
                   $tqvpartner_intro=$rowstate["tqvpartner_intro"];
                   $tqvpartner_id=$rowstate["tqvpartner_id"];
    		    ?>   
    		      <td >
    		        <table border='0'  name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr><td width='150'>
    		        <a href='<?php echo $tqvpartner_url; ?>' target='_blank'><img src='images/tqvdoitacbds/<?php echo $tqvnews_anhmh;?>' width='120' height='90' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td></tr>
    		        <tr><td height='7'></td></tr>
    		        <tr><td  width='150'><div align='left'>
    		        <a href='<?php echo $tqvpartner_url; ?>' target='_blank' class='designwfdsffeafffdfsfe' title='<?php echo $tqv_qhnamefull; ?>'><?php echo $tqv_qhname; ?></a><td></tr>
    		        </table>
          </td> 
    		         
    		        <?php 
    		 if (is_int($vinh/3) && ($vinh>=3))
                 echo "<tr  height='15'> </tr>";
   	   	         $vinh++;
    		} ?>
    	</tr></table>
    		       <tr><td height=27></td></tr>
    	
       <tr><td height=27></td></tr>   
    
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