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

  <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		          <tr ><td><table border='0' width='485' name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr>
    		           <?php 
    		          
    		       $vinh=1+0;
    		       $hinhanh=8+0;
    		       $ext=".png";
    	           $sqlstate=@mysql_query("select * from tqv_catebdseng order by tqv_catebdsid asc limit 9");
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                   $tqv_catename=$rowstate["tqv_catename"];
                   $tqv_catestatus=$rowstate["tqv_catestatus"];
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];
    		    ?>   
    		      <td >
    		        <table border='0'  name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0><tr><td>
    		        <a href='index.php?tqvbds=detailcatenewsbds&cateid=<?php echo $tqv_catebdsid; ?>'><img src='images/tqvloaibds/<?php echo $hinhanh; echo $ext ;?>' width='140' height='110' border='0' alt='<?php echo $tqv_catename; ?>' title='<?php echo $tqv_catename; ?>' style='border:#c6c6c6 solid 3px' ></a><td></tr>
    		        <tr><td height='7'></td></tr>
    		        <tr><td><div align='left'>&nbsp;
    		        <a href='index.php?tqvbds=detailcatenewsbds&cateid=<?php echo $tqv_catebdsid; ?>' class='designwfdsffeafffdfsfebivi' ><b><?php echo $tqv_catename; ?></b></a><td></tr>
    		        </table>
          </td> 
    		         
    		        <?php 
    		 $hinhanh++;      	
    		 if (is_int($vinh/3) && ($vinh>=3))
                 echo "<tr  height='15'> </tr>";
   	   	         $vinh++;
    		} ?>
    	</tr></table>
    		  
    	</table>