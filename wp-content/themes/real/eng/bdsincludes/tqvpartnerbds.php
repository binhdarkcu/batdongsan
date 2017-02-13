<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
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
<script language="javascript" type="text/javascript" src="images/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="images/jquery.flow.1.2.js"></script>

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
		width: "479px",// chieu rong o vuong
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
<span class="jFlowControl2"><font color='#003366'><b></b></span>
<span class="jFlowControl2"><font color='#003366'><b></b> </span>
</div>
 <table border='0' width='480' name='quangvinhitdesign' cellSpacing=0 cellPadding=0  >
 		<tr><td width='10'><span class="jFlowPrev2"><a  onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r100','','images/lui2.png',1)" ><IMG SRC="images/lui.png" id="r100" WIDTH="10" HEIGHT="54" BORDER=0   ALT="Quay lai "> </td>
           <td>
               <div id="mySlides2">
                 <div>
              <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center' >     
                    <TR><TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
          </td>
		          <TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 1,1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
      
       </td>
		          <TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 2,1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
         </td></tr></table></div>
          <table width='450' height='116' cellSpacing=0  cellPadding=0 border="0" align='center'>     
                    <TR><TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<div align='center'><table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
          </td>
		          <TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 1,1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
      
       </td>
		          <TD>
         <?php 
          $sqlpartner=@mysql_query("select * from tqv_bdspartner where tqvpartner_status =1 order by tqvpartner_id desc limit 2,1"); 
           while($rowpartner=@mysql_fetch_assoc($sqlpartner)){
             $tqvpartner_name=$rowpartner['tqvpartner_name']; 
             $tqvpartner_logo=$rowpartner['tqvpartner_logo'];
             $tqvpartner_url=$rowpartner['tqvpartner_url'];  
             $tqvpartner_intro=$rowpartner['tqvpartner_intro'];  ?>
     <?php echo  "<table border='0' width='150' height='100' cellSpacing=0  cellPadding=0><tr><td valign='center'><img src='images/tqvdoitacbds/$tqvpartner_logo' style='border:#c6c6c6 solid 2px' border='0' width='120' height='91' title='$tqvpartner_name' alt'$tqvpartner_name'></td></tr></table>";
     			 }
     			  ?> 
         </td></tr></table></div> 			  
        </td>
        <td width='10'><span class="jFlowNext2"><a onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('r101','','images/toi2.png',1)" ><IMG SRC="images/toi.png" id="r101" WIDTH="10" HEIGHT="54" BORDER=0   ALT="Toi"></span></td></tr>
    	</table>
    				  </div>