#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
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
                       el.innerHTML='<div align=center><font color=white> CTN Viet Nam....';
               if (x.readyState == 4 && x.status == 200)
                       {
                       el.innerHTML = x.responseText;
                   }
                   }
               x.open("GET", url, true);
               x.send(null);
               }
       }
function designwebvn(x,y)       
   {
   ajaxLoad('tqvdisplaychannelbds.php?lich='+x,'lichps');
   }
</script>
<script type="text/javascript">
function bookmarksite(title, url){
if (document.all)
window.external.AddFavorite(url, title);
else if (window.sidebar)
window.sidebar.addPanel(title, url, "")
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
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/managementnews.png' border='0' width='20' height='20'><font color='#366e03'> Truyền Hình Trực Tuyến </font></td></tr>
    		      <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		<div align='center'>
    		<table border='0' width="501" height="100%" cellSpacing=0 cellPadding=0>

  <tr>
         <td background='<?php echo $rootbds; ?>/images/truyen-hinh-truc-tuyen_33.png' width="501" height="444" align='center' valign='top'> <div align='center'>
         <table border='0' width="95%"  cellSpacing=0 cellPadding=0>
         <tr><td height='15' colspan='3'></td></tr>
         <tr><td colspan='3'>
     <div id="lichps">
         <iframe src="http://vtc.com.vn/playstream.swf?id=24&tp=l" marginwidth="0" marginheight="0" vspace="0" hspace="0" scrolling="no" 
width="475" frameborder="0" height="377"></iframe>
	
	
	</div>
          </td></tr>
             <tr><td height='20' colspan='3'></td></tr>
            
             
             
             </table>
        </td>
  </tr>
  <tr>
         <td background='<?php echo $rootbds; ?>/images/truyen-hinh-truc-tuyen_44.png' width="501" height="118" valign='top'><div align='center'>
         		 <table border='0' width="450"  cellSpacing=0 cellPadding=0>
         		 <tr><td height='15' colspan='6'></td></tr>
         		 <tr><td height='29'><a href="javascript:designwebvn(1)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtv1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(2)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtv2.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(3)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtv3.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(4)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtv4.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(5)"><img src='<?php echo $rootbds; ?>/images/logotelevision/htv7.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(6)"><img src='<?php echo $rootbds; ?>/images/logotelevision/htv9.jpg' width='62' height='25' border='0'></a></td>
         		 </tr>
         		 <tr><td height='2' colspan='6'></td></tr>	  
         		<tr><td height='29'><a href="javascript:designwebvn(7)"><img src='images/logotelevision/vtc1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(8)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtc2.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(9)"><img src='<?php echo $rootbds; ?>/images/logotelevision/itv.png' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(10)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtc6.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(11)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtc8.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(12)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vtc9.jpg' width='62' height='25' border='0'></a></td>
         		 </tr>
         		 <tr><td height='2' colspan='6'></td></tr>	  
         		 	<tr><td height='29'><a href="javascript:designwebvn(13)"><img src='images/logotelevision/vtc10.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(14)"><img src='<?php echo $rootbds; ?>/images/logotelevision/hanoi1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(15)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vov1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(16)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vov2.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(17)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vov3.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(18)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vov5.jpg' width='62' height='25' border='0'></a></td>
         		 </tr>
         		 
         		 </table>
         		 
         		  </td>
  </tr>
  <tr>
         <td >
         	<div align='center'>
         		 <table border='0' width="450"  cellSpacing=0 cellPadding=0>
         		 <tr><td height='25' colspan='6'></td></tr>
         		 <tr><td height='20' colspan='6'><div align='left'><img src='<?php echo $rootbds; ?>/images/e01.gif' width='8' height='7' border='0'><span class="fstlut"><u> Các Kênh khác </u></span></td></tr>	  
         		 <tr><td height='25' colspan='6'></td></tr>
          		 <tr><td height='29'><a href="javascript:designwebvn(19)"><img src='images/logotelevision/qtv.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(20)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vnn.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(21)"><img src='<?php echo $rootbds; ?>/images/logotelevision/infotv.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(22)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vl1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(23)"><img src='<?php echo $rootbds; ?>/images/logotelevision/vl2.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(24)"><img src='<?php echo $rootbds; ?>/images/logotelevision/ftv.jpg' width='62' height='25' border='0'></a></td>
         		 </tr>
         		 <tr><td height='10' colspan='6'></td></tr>	  
         	      <tr><td height='29'><a href="javascript:designwebvn(25)"><img src='<?php echo $rootbds; ?>/images/logotelevision/yeah1.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(26)"><img src='<?php echo $rootbds; ?>/images/logotelevision/kungfu.jpg' width='62' height='25' border='0'></a></td>
         		 <td><a href="javascript:designwebvn(27)"><img src='<?php echo $rootbds; ?>/images/logotelevision/smiletv.jpg' width='62' height='25' border='0'></a></td>
         		 <td></td>
         		 <td></td>
         		 <td></td>
         		 </tr>
         		 
         		 </table>		  
         			  
   </tr>
</table>
    		</div>
    		
    		</td></tr>
    		     <tr><td background='<?php echo $rootbds; ?>/images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>