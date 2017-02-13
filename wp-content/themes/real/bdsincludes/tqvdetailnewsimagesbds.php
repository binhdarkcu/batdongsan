<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
<style type="text/css">
#myController span{
color:#FFF;
background:#000;
margin-right:10px;
cursor:pointer;
}

#jFlowSlide{
border:10px solid #F00;
}

#myController span.jFlowSelected {
background:#F00;
}


.jFlowPrev, .jFlowNext{
cursor:pointer;
}

#myController2 span{
color:#FFF;
background:#FFF;// mau ne menu truoc luc cick chuot;
margin-right:10px;
cursor:pointer;
}

#jFlowSlide2{
border:0px solid #0F0; //boder o vuong ;
}

#myController2 span.jFlowSelected2 {
// mau nen menu sau khi click chuot (xanh);
}

.jFlowPrev2, .jFlowNext2{
cursor:pointer;
}


#myController3 span{
color:#FFF;
background:#000;
margin-right:10px;
cursor:pointer;
}

#jFlowSlide3{
border:3px solid #00F;
}

#myController3 span.jFlowSelected3 {
background:#00F;
}

.jFlowPrev3, .jFlowNext3{
cursor:pointer;
}

</style>
<script language="javascript" type="text/javascript" src="<?php echo $rootbds; ?>/images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $rootbds; ?>/images/jquery.flow.1.2.js"></script>

<script language="javascript">
$(document).ready(function(){
	$("#myController2").jFlow({
		slides: "#mySlides2",
		controller: ".jFlowControl2", // must be class, use . sign
		slideWrapper : "#jFlowSlide2", // must be id, use # sign
		selectedWrapper: "jFlowSelected2",  // just pure text, no sign
		easing: "swing",
		duration: 400,
		height: "120px",//chieu dai o vuong
		width: "474px",// chieu rong o vuong
		prev: ".jFlowPrev2", // must be class, use . sign
		next: ".jFlowNext2" // must be class, use . sign
	});
});
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

			<div id="myController2">
				<?php  
		  $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id");
    	  $numup=@mysql_num_rows($sqlimagesup);
    	  $v=ceil($numup/3) ;
    	 
    	  for($i=1;$i<=$v;$i++){
    	  ?>
    	 
<span class="jFlowControl2"><font color='#003366'><b></b></span>
			
	
				<?php
			}
	?>
		</div>
 <table border='0' width='475' name='quangvinhitdesign' cellSpacing=0 cellPadding=0  >
 		<tr><td width='10'><span class="jFlowPrev2"><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r100','','<?php echo $rootbds; ?>/images/lui2.png',1)" ><IMG SRC="<?php echo $rootbds; ?>/images/lui.png" id="r100" WIDTH="10" HEIGHT="54" BORDER=0  > </td>
           <td>
               <div id="mySlides2" align='center'>
                 <div>
              <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center' >     
                    <TR><TD width='150'>
         <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 1,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			  ?> 
          </td>
		          <TD width='150'>
        <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 2,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			  ?> 
      
       </td>
		          <TD width='150'>
           <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 3,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
         </td></tr></table></div>
         			<div align='center'>
          <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center'>     
                    <TR><TD width='150'>
            <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 4,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
          </td>
		          <TD width='150'>
          <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 5,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
       </td>
		          <TD width='150'>
          <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 6,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
         </td></tr></table></div>
         	<div align='center'>
          <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center'>     
                    <TR><TD width='150'>
         <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 7,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
          </td>
		          <TD width='150'>
            <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 8,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?> 
       </td>
		          <TD width='150'>
            <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 9,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
         </td></tr></table></div> 			
         	<div align='center'>
          <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center'>     
                    <TR><TD width='150'>
         <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 10,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
          </td>
		          <TD width='150'>
           <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 11,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
       </td>
		          <TD width='150'>
          <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 12,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
         </td></tr></table></div>
         				<div align='center'>
          <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center'>     
                    <TR><TD width='150'>
             <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 13,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
          </td>
		          <TD width='150'>
          <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 14,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
       </td>
		          <TD width='150'>
           <?php 
          $sqlimagesup=@mysql_query("select * from tqv_bdsnewsimagesbds where tqvnewsbds_id='$news' order by tqvnewsbds_id asc limit 15,1");
    	  $numimagesup=@mysql_num_rows($sqlimagesup);
          	  if($numimagesup){
    	      while($rowimagesup=@mysql_fetch_assoc($sqlimagesup)){
    				$tqvbdsimages_url1=$rowimagesup['tqvbdsimages_url1'];
    				$tqvbdsimages_note=$rowimagesup['tqvbdsimages_note'];
             echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><a href='$rootbds/images/newsbds/$tqvbdsimages_url1' class='highslide' onclick='return hs.expand(this)' alt='$tqvbdsimages_note' title='$tqvbdsimages_note'><img src='$rootbds/images/newsbds/$tqvbdsimages_url1' width='120' height='91' border='0' alt='$tqvbdsimages_note' title='$tqvbdsimages_note' style='border:#c6c6c6 solid 2px'> </a></td></tr></table>";
     			 }
     			}
     			?>
         </td></tr></table></div>			 			  
        </td>
        <td width='10'><span class="jFlowNext2"><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r101','','<?php echo $rootbds; ?>images/toi2.png',1)" ><IMG SRC="<?php echo $rootbds; ?>/images/toi.png" id="r101" WIDTH="10" HEIGHT="54" BORDER=0   ></span></td></tr>
    	</table>
    				  </div>