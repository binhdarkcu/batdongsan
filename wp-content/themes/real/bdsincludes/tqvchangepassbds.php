<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #  -->
<script language="javascript">
	function check_form(the_form)
	{	
        var the_matkhauc    = the_form.matkhauc.value;
        var the_matkhaum    = the_form.matkhaum.value;
        var the_matkhaumd    = the_form.matkhaumd.value;
      if ((the_matkhauc=='' )||(the_matkhaum=='') ||(the_matkhaumd=='') )
		{
			alert("Nhập thông tin thay đổi mật khẩu");
			the_form.matkhauc.focus();
			return false;
		}
		if(the_matkhaum.lenght<=6)
		{
		    alert("Mật khẩu phải có ít nhất 6 ký tự");
			the_form.matkhauc.focus();
			return false;
		}
	   if(the_matkhaum!=the_matkhaumd){
	   	   	alert("Mật khẩu xác thực không đúng");
			the_form.matkhauc.focus();
			return false;
	   	   
	   }
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
  	if(isset($_POST['action'])){
		   $matkhaucu=md5(md5($_POST["matkhauc"])); 
		   $matkhaum=md5(md5($_POST["matkhaum"])); 
		   $matkhaumd=md5(md5($_POST["matkhaumd"]));
		   $idad=$_SESSION['tqvadmid'];
		   $sqlkiemtra=@mysql_query("select * from tqv_bdsadmin where tqvadmin_matkhau='$matkhaucu' and tqvadmin_id='$idad'");
		   $rowpass=@mysql_num_rows($sqlkiemtra);
       if($rowpass){
   	           $sqlupdate=@mysql_query("UPDATE tqv_bdsadmin SET tqvadmin_matkhau='$matkhaum' WHERE tqvadmin_id='$idad'");
   	           $msg="Thay đổi mật khẩu thành công !";
   	         }
		else {
              $msg="Mật khẩu cũ bạn nhập sai !";
             } 
       
		   }

       
	?>
 <table border='0' width='980' name='quangvinhit' cellSpacing=0 cellPadding=0>
    	<tr><td width='229' valign='top'>
    	<?php include"bdsincludes/tqvleftbds.php"; ?>
    	
    	</td><td width='751' valign='top'>
    		<table border='0' width='751' name='tranquangvinhfed' cellSpacing=0 cellPadding=0>
    		<tr><td width='523'>
    			<table border='0' width='523' name='tranquangvinhfeds' cellSpacing=0 cellPadding=0>
    		      <tr><td background='images/batdongsan_greenmember_14.png' width='523' height='50' valign='center'><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/edit.gif' border='0' width='18' height='18'><font color='#366e03'> Thay đổi mật khẩu</font></td></tr>
    		      <tr><td background='images/batdongsan_greenmember_17.png' width='523' height='1243' valign='top'>
    		  <form id="form1" name="form1" method="post" action="" onsubmit="return check_form(this)">
     <div align='center'> <table width="97%" border="0" align="center" cellpadding="0" cellspacing="4">
       
       <tr height='10'>
          <td colspan="2" align="center" >
            </td>
          </tr>
        <tr><td height='15' colspan='2'><div align='center'><font color='#c3e572' size='2'>Thay đổi mật khẩu</font></td></tr>
        <tr><td colspan='2' height='10'></td></tr>
       <tr>
           <td width="10%"></td>
           <td width="90%" style="padding: 1px;" ><div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Mật khẩu cũ  </td><td width='2%'></td><td width='78%'><div align='left'> <input name='matkhauc' type="password" size="43" class="keyboardInput" class="button2" /> 
                                                                   
			</td></tr></table> </td>
        </tr>
        <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'> Mật khẩu mới</td><td width='2%'></td><td width='78%'><div align='left'> <input name="matkhaum" type="password" class="keyboardInput" size="43" class="button2"  /></td></tr></table></td>
        </tr>
            <tr>
          <td width="10%"></td>
          <td width="90%" style="padding: 1px;" > <div align='left'><table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodsfx"><tr><td width='20%'> <span class='tomtat1'>Nhập lại mật khẩu mới</td><td width='2%'></td><td width='78%'><div align='left'> <input name="matkhaumd" type="password" class="keyboardInput" size="43" class="button2"  /></td></tr></table></td>
        </tr>
         <tr>
          <td width="10%" height='7'></td>
          <td width="90%" height='7' > </td>
        </tr>	
      <?php if(($msg != "") || ($msg != NULL)) { ?>
      	  <tr>
          
          <td width="100%" colspan='2'> <div align='center'>
           <?php echo "<font color='red'>".$msg; ?>
           </td>
        </tr>
        	   <?php } ?>
        	   <tr>
          <td width="10%" height='7'></td>
          <td width="90%" height='7' > </td>
        </tr>
      <tr>
       
          <td colspan="2"><div align='center'>
          	  <input type="hidden" name="action" id="action" value="action" />
          	  <input type="submit" name="Submit" class='tomtat1' value="Cập nhập" />
           <br>
            </td>
        </tr>
        
        
      </table>
        </form>
    		
    		
    		</td></tr>
    		     <tr><td background='images/batdongsan_greenmember_47.png' width='523' height='62'></td></tr>
    		      </table>
    		</td>  <td width='228' valign='top'>
    		<?php include "bdsincludes/tqvrightbds.php";?>
    		</td></tr>
    		
    		
    		
    		</table>
    		</td></tr> 
    	</table>