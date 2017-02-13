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
    		  <?php 
    		          $quanhuyen=intval($_POST['quanhuyen']);
    		         $giatien=intval($_GET['tqvvalue']); 
    		          $giatienmax=intval($_GET['tqvvaluem']); 
    		          ?>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> <a href='index.php'> Home </a> - Search </font></td></tr>
    		     
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		        <div align='center'>
    		        <table border='0' width='485' name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		              <?php  $sqlcatebds=@mysql_query("select * from tqv_bdsquan where tqv_qhid='$quanhuyen'"); $vnumb=@mysql_num_rows($sqlcatebds); $rowcatebds=@mysql_fetch_assoc($sqlcatebds); $name=$rowcatebds['tqv_qhname']; $tqv_catebdsid =$rowcatebds['tqv_qhid']; ?>
    		          	  <tr><td><div align='center'><font color='#366e03'> List of rental housing <?php if($vnumb){echo "in District "  .$name;} else {} ?> price <?php if($giatien==1) {  echo "100 -&gt; 300 $"; }  elseif($giatien==301) {  echo "300 -&gt; 500 $"; }  elseif($giatien==501) {  echo "500 -&gt; 1000 $"; } elseif($giatien==1001) {  echo "1000 -&gt; 3000 $"; } elseif($giatien==3001) {  echo " > 3000 $"; }    ?></font></td></tr>
    		             <tr><td height=15></td></tr>
    		          <tr ><td><table border='0' width='485' name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0>
    		          
    		      
    		          <tr>
    		           <?php 
    		        
    		          if($quanhuyen!=NULL){
    		       $page=intval($_GET["page"]);
	               if($page=="") $page="1";
	               $sqlvinh=@mysql_query("select * from tqv_bdsnewsbdseng  where tqvnewsbds_tinhtrang='1'  and tqv_qhid='$quanhuyen' and tqvnewsbds_giathue>='$giatien' and tqvnewsbds_giathue<='$giatienmax' order by tqvnewsbds_id");
	               $totalrow=@mysql_num_rows($sqlvinh);
	               $rowperpage=15;
	               $max_page=ceil($totalrow/$rowperpage);
	               $start=($page-1)* $rowperpage;  
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsbdseng  where tqvnewsbds_tinhtrang='1' and tqv_qhid='$quanhuyen' and tqvnewsbds_giathue>='$giatien' and tqvnewsbds_giathue<='$giatienmax'  order by tqvnewsbds_id desc limit $start,$rowperpage");
                   $kiemtratin=@mysql_num_rows($sqlstate);
                   if($kiemtratin==NULL){
                   	   echo "<Tr><td> Could not find the data you need to find </td></tr></table>"; }else {
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                   $tqv_qhnamefull=$rowstate["tqvnewsbds_tieude"];
                   $tqv_qhname=tranquangvinhtieude($rowstate["tqvnewsbds_tieude"]);
                   $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];
                   $sqkcatebds=@mysql_query("select * from  tqv_catebdseng where tqv_catebdsid='$tqv_catebdsid'");
                   $rowwcatebds=@mysql_fetch_assoc($sqkcatebds);
                   $tqv_catename=$rowwcatebds['tqv_catename'];
                   $tqvnews_content=$rowstate["tqvnewsbds_noidung"];
                   $tqvnews_datec=$rowstate["tqvnewsbds_ngay"];
                   $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
                   $tqvnews_id=$rowstate["tqvnewsbds_id"];
                   $tqvnewsbds_giathue=$rowstate["tqvnewsbds_giathue"];
                    $tqv_qhid=$rowstate["tqv_qhid"];
                   $sqkqh=@mysql_query("select * from tqv_bdsquaneng where tqv_qhengid='$tqv_qhid'");
                   $rowwqh=@mysql_fetch_assoc($sqkqh);
                   $tqv_qhname=$rowwqh['tqv_qhengname'];
                   $tqvnewsbds_sophongngu=$rowstate["tqvnewsbds_sophongngu"];
                   $tqvnewsbds_dientichdat=$rowstate["tqvnewsbds_dientichdat"];
                   $tqvnewsbds_dtsd=$rowstate["tqvnewsbds_dtsd"];
                   $tqvnewsbds_dacdiemchinh=$rowstate["tqvnewsbds_dacdiemchinh"];
                   $tqvnewsbds_maso=$rowstate["tqvnewsbds_maso"];
                   $tqvnewsbds_duong=$rowstate["tqvnewsbds_duong"];
                   $tqvnewsbds_trangthai=$rowstate["tqvnewsbds_trangthai"];
                   if($tqvnewsbds_trangthai==1){
                   	   $trangthai="Online Trading";
                   }
                   elseif($tqvnewsbds_trangthai==0){
                   	   $trangthai="Leased";
                   }
                   $tqvnewsbds_tinhtrang=$rowstate["tqvnewsbds_tinhtrang"];
                   $tqvnewsbds_counter=$rowstate["tqvnewsbds_counter"];
    		    ?>   
    		     	 <tr>  <td  valign='top'>
    		    	
    		        <table border='0'  width='500'name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0>
    		         <tr><td colspan='5'><div align='left' style="padding-left: 25px;"><a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>' class='designwfdsffeafffdfsfeemye' title='<?php echo $tqv_qhnamefull; ?>'><b><?php echo $tqv_qhnamefull; ?></b></a> </td></td>
    		        <tr><td colspan='5' height=10></td></tr>
    		        <tr><td width='10' valign='top'> </td><td width='150' valign='top'><div align='center'><a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>'><img src='../images/newsbds/<?php echo $tqvnews_anhmh;?>' width='140' height='155' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td>
    		         <td width='10' valign='top'></td>
    		         <td width='330' valign='top'><div align='left'>
    		            <table border='0'  width='330'name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		            
    		            
    		             <?php if($tqvnewsbds_giathue!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr><tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Price / Month (USD)   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_giathue"." USD $ </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_counter!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Views   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_counter </td></tr>";  }   ?>	
    		            
    		             <?php if($tqv_qhname!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> District   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqv_qhname </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_maso!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr><tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> ID   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_maso </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_sophongngu!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Bedrooms   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_sophongngu </td></tr>";  }   ?>
    		          
    		            <?php if($tqvnewsbds_dtsd!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Usable Area  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_dtsd </td></tr>";  }   ?>
    		             
    		           
    		              <?php if($tqvnewsbds_duong!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Street  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_duong </td></tr>";  }   ?>
    		             <?php if($tqv_catename!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Category  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqv_catename </td></tr>";  }   ?>
    		            <?php if($tqvnewsbds_trangthai!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Status  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $trangthai </td></tr>";  }   ?>
    		            </table>
    		            <td></tr>
    		         <tr><td colspan='5' height='10'></td></tr>
    		            	<?php if($tqvnewsbds_dacdiemchinh!=NULL){	
    		            echo"<tr><td colspan=5 ><div align='left' style='padding-left: 25px;'><font color='#595959'> <b> Main Features  </b></font><font color='#595959'><b>:</b></font> $tqvnewsbds_dacdiemchinh </td></tr>";  }   ?>	
    		        </table>
          </td> </tr>
    		         <tr><td colspan='4' height=15></td></tr>
    		         <tr><td colspan='4' ><div align='center'><font color=#919090>---------------------------------------------------------------------------------------------------------</font></td></tr>
    		        <tr><td colspan='4' height=15></td></tr>
    		        <?php 
    	
    		} ?>
    	</table>
    		         <tr><td >
    <div align='center'><div class='viciao'>
				<?php 
					if($page>5){
					if($page+5>$max_page){
                         $max=$max_page; $i=$max_page-5;
                             } else {
                               $max=$page+6;$i=$page-5;
                                    } 	
						
					}
					else {
                  if($max_page<5){
                  $i=1;$max=$max_page;
                   } else {
                  $i=1;
                  if($page+5>$max_page){$max=$max_page;}else{
                  $max=$page+5;}}
                  }
        if($page>1){
 echo  "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$i\" title=\"Trang &#273;&#7847;u\">First</A>";
 $page=$page-1;
  echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$page\" title=\"Trang tr&#432;&#7899;c\" class=song>Prev</A>";
  }  
for($i;$i<=$max; $i++) {
$page=$_GET['page']; if($page==""){$page=1;}
if ($i==$page) {
        echo "<span class='current'>".$i."</span>";
    } else {
        echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$i\" class=song> $i </A>";
		}
	}
	  
	if($page<=$max_page-1){
	$page=$page+1;
	 echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$page\" title=\"Trang ti&#7871;p\" class=song>Next</A>"; 
	 echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$max_page\" title=\"Trang cu&#7889;i $max_page\" class=song>Last</A><div>";

}
					?>	
					
   
    	 </td></tr>
    		        <?php 
    	
    				  }
    				  }
    			else {
    			 $page=intval($_GET["page"]);
	               if($page=="") $page="1";
	               $sqlvinh=@mysql_query("select * from tqv_bdsnewsbdseng  where tqvnewsbds_tinhtrang='1' and tqvnewsbds_giathue>='$giatien' and tqvnewsbds_giathue<='$giatienmax' order by tqvnewsbds_id");
	               $totalrow=@mysql_num_rows($sqlvinh);
	               $rowperpage=15;
	               $max_page=ceil($totalrow/$rowperpage);
	               $start=($page-1)* $rowperpage;  
    	           $sqlstate=@mysql_query("select * from tqv_bdsnewsbdseng  where tqvnewsbds_tinhtrang='1' and tqvnewsbds_giathue>='$giatien' and tqvnewsbds_giathue<='$giatienmax'  order by tqvnewsbds_id desc limit $start,$rowperpage");
                   $kiemtratin=@mysql_num_rows($sqlstate);
                   if($kiemtratin==NULL){
                   	   echo "<Tr><td> Could not find the data you need to find </td></tr></table>"; }else {
                   while($rowstate=@mysql_fetch_assoc($sqlstate)){
                   $tqv_qhnamefull=$rowstate["tqvnewsbds_tieude"];
                   $tqv_qhname=tranquangvinhtieude($rowstate["tqvnewsbds_tieude"]);
                   $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
                   $tqv_catebdsid=$rowstate["tqv_catebdsid"];
                   $sqkcatebds=@mysql_query("select * from  tqv_catebdseng where tqv_catebdsid='$tqv_catebdsid'");
                   $rowwcatebds=@mysql_fetch_assoc($sqkcatebds);
                   $tqv_catename=$rowwcatebds['tqv_catename'];
                   $tqvnews_content=$rowstate["tqvnewsbds_noidung"];
                   $tqvnews_datec=$rowstate["tqvnewsbds_ngay"];
                   $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
                   $tqvnews_id=$rowstate["tqvnewsbds_id"];
                   $tqvnewsbds_giathue=$rowstate["tqvnewsbds_giathue"];
                    $tqv_qhid=$rowstate["tqv_qhid"];
                   $sqkqh=@mysql_query("select * from tqv_bdsquaneng where tqv_qhengid='$tqv_qhid'");
                   $rowwqh=@mysql_fetch_assoc($sqkqh);
                   $tqv_qhname=$rowwqh['tqv_qhengname'];
                   $tqvnewsbds_sophongngu=$rowstate["tqvnewsbds_sophongngu"];
                   $tqvnewsbds_dientichdat=$rowstate["tqvnewsbds_dientichdat"];
                   $tqvnewsbds_dtsd=$rowstate["tqvnewsbds_dtsd"];
                   $tqvnewsbds_dacdiemchinh=$rowstate["tqvnewsbds_dacdiemchinh"];
                   $tqvnewsbds_maso=$rowstate["tqvnewsbds_maso"];
                   $tqvnewsbds_duong=$rowstate["tqvnewsbds_duong"];
                   $tqvnewsbds_trangthai=$rowstate["tqvnewsbds_trangthai"];
                   if($tqvnewsbds_trangthai==1){
                   	   $trangthai="Online Trading";
                   }
                   elseif($tqvnewsbds_trangthai==0){
                   	   $trangthai="Leased";
                   }
                   $tqvnewsbds_tinhtrang=$rowstate["tqvnewsbds_tinhtrang"];
                   $tqvnewsbds_counter=$rowstate["tqvnewsbds_counter"];  
    				  ?>
    			 <tr>  <td  valign='top'>
    		    	
    		        <table border='0'  width='500'name='tranquafngvinhfeđds' cellSpacing=0 cellPadding=0>
    		          <tr><td colspan='5'><div align='left' style="padding-left: 25px;"><a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>' class='designwfdsffeafffdfsfeemye' title='<?php echo $tqv_qhnamefull; ?>'><b><?php echo $tqv_qhnamefull; ?></b></a> </td></td>
    		        <tr><td colspan='5' height=10></td></tr>	
    		        <tr><td width='10' valign='top'> </td><td width='150' valign='top'><div align='center'><a href='index.php?tqvbds=detailnewsrentbds&cateid=<?php echo $tqv_catebdsid; ?>&newsid=<?php echo $tqvnews_id; ?>'><img src='../images/newsbds/<?php echo $tqvnews_anhmh;?>' width='140' height='155' border='0' alt='<?php echo $tqv_qhname; ?>' title='<?php echo $tqv_qhname; ?>' style='border:#c6c6c6 solid 2px' ></a><td>
    		         <td width='10' valign='top'></td>
    		         <td width='330' valign='top'><div align='left'>
    		            <table border='0'  width='330'name='tranquafngvinhfeds' cellSpacing=0 cellPadding=0>
    		         
    		            
    		             <?php if($tqvnewsbds_giathue!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr><tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Price / Month (USD)   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_giathue"." USD $ </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_counter!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Views   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_counter </td></tr>";  }   ?>	
    		            
    		             <?php if($tqv_qhname!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> District   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqv_qhname </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_maso!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr><tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> ID   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_maso </td></tr>";  }   ?>	
    		             
    		             <?php if($tqvnewsbds_sophongngu!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Bedrooms   </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_sophongngu </td></tr>";  }   ?>
    		          
    		            <?php if($tqvnewsbds_dtsd!=NULL){	
    		            echo" <tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Usable Area  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_dtsd </td></tr>";  }   ?>
    		             
    		          
    		              <?php if($tqvnewsbds_duong!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Street  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqvnewsbds_duong </td></tr>";  }   ?>
    		             <?php if($tqv_catename!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Category  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $tqv_catename </td></tr>";  }   ?>
    		            <?php if($tqvnewsbds_trangthai!=NULL){	
    		            echo"<tr><td colspan=2 height='5'></td></tr> <tr><td width='130' valign='top'><div align='left'><font color='#595959'> <b> Status  </b></font></td><td><div align='left'><font color='#595959'><b>:</b></font> $trangthai </td></tr>";  }   ?>
    		            </table>
    		            <td></tr>
    		         <tr><td colspan='5' height='10'></td></tr>
    		            	<?php if($tqvnewsbds_dacdiemchinh!=NULL){	
    		            echo"<tr><td colspan=5 ><div align='left' style='padding-left: 25px;'><font color='#595959'> <b> Main Features  </b></font><font color='#595959'><b>:</b></font> $tqvnewsbds_dacdiemchinh </td></tr>";  }   ?>	
    		        </table>
          </td> </tr>
    		         <tr><td colspan='4' height=15></td></tr>
    		         <tr><td colspan='4' ><div align='center'><font color=#919090>---------------------------------------------------------------------------------------------------------</font></td></tr>
    		        <tr><td colspan='4' height=15></td></tr>
    		        <?php 
    	
    		} ?>
    	</table>
    		         <tr><td >
    <div align='center'><div class='viciao'>
				<?php 
					if($page>5){
					if($page+5>$max_page){
                         $max=$max_page; $i=$max_page-5;
                             } else {
                               $max=$page+6;$i=$page-5;
                                    } 	
						
					}
					else {
                  if($max_page<5){
                  $i=1;$max=$max_page;
                   } else {
                  $i=1;
                  if($page+5>$max_page){$max=$max_page;}else{
                  $max=$page+5;}}
                  }
        if($page>1){
 echo  "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$i\" title=\"Trang &#273;&#7847;u\">First</A>";
 $page=$page-1;
  echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$page\" title=\"Trang tr&#432;&#7899;c\" class=song>Prev</A>";
  }  
for($i;$i<=$max; $i++) {
$page=$_GET['page']; if($page==""){$page=1;}
if ($i==$page) {
        echo "<span class='current'>".$i."</span>";
    } else {
        echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$i\" class=song> $i </A>";
		}
	}
	  
	if($page<=$max_page-1){
	$page=$page+1;
	 echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$page\" title=\"Trang ti&#7871;p\" class=song>Next</A>"; 
	 echo "<A HREF=\"index.php?tqvbds=detailstatesbds&stateid=$cate&page=$max_page\" title=\"Trang cu&#7889;i $max_page\" class=song>Last</A><div>";

}
					?>	
					
   
    	 </td></tr>
    	 	 
    	 	    <?php 
    		
    		
    				  } 
    			}
    			?>
    		       <tr><td height=27></td></tr>
    		       	 <tr><td ><div align='left'><img src='images/icon_articlelist.gif' border='0' height=16 width=16> <font color='#366e03'> Related News</font></td></tr>
    		       	   <tr><td ><div align='left'><font color=#549c13>---------------------------------------------------------</font></td></tr>
    		         <tr><td height=10></td></tr>
    		            <?php  
      $sqlstate=@mysql_query("select * from tqv_bdsnewsbdseng where tqvnewsbds_tinhtrang='1'  order by tqvnewsbds_id desc limit 20");
      while ($rowstate=@mysql_fetch_assoc($sqlstate)){
             $tqv_qhname=$rowstate["tqvnewsbds_tieude"];
             $tqvnews_anhmh=$rowstate["tqvnewsbds_images"];
             $tqvnews_tomtat=$rowstate["tqvnewsbds_gioithieu"];
             $tqv_catebdsid=$rowstate["tqv_catebdsid"];
             $tqvnews_id=$rowstate["tqvnewsbds_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='index.php?tqvbds=detailnewsrentbds&cateid=$tqv_catebdsid&newsid=$tqvnews_id' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
            
      
      }
      ?>  
       <tr><td height=27></td></tr>   
    
    		       		           
    		         
    		         
        <tr><td align='left' height="10"></td></tr>
        
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