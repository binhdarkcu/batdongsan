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
// Begin the first session
session_start();

//require_once("D:/Projects/BV02/batdongsan/source/wp-content/themes/real/bdssecuritypt//bdssecurity.php");

// Main action
//$DIALOOSEWEB->admin = new dialoose_admin();



//===================================================
// Admin class
//===================================================

class dialoose_admin
{
	//===================================================
	// DB Connector
	//===================================================
	
	function DB_connect()
	{
		global $DB, $info;
				
		@mysql_connect("{$info['db_host']}", "{$info['db_username']}", "{$info['db_password']}") or die ("Could not connect"); 
		@mysql_select_db("{$info['db_name']}") or die ("Could not select database");	
		
				

		
	}
	
	
	//===================================================
	// Login
	//===================================================
	
	function login()
	{
		if ( $_GET["ns"] == "login" )
		{
			$name =     addslashes($_POST['name']);
			$password = md5(md5($_POST['password']));
			
			if ( $_SESSION["request"] )
			{
				$request = $_SESSION['request'];
			}
			else
			{
				$request = $_POST['request'];
			}
			
			$_SESSION["request"] = $request;
			
			$sql = @mysql_query("SELECT * FROM tqv_bdsadmin WHERE tqvadmin_tendn='$name'");
			$result = @mysql_fetch_array( $sql );
	


			if ( @mysql_num_rows( $sql ) <= 0 )
			{
				print "<script> alert ('Username and Password chưa chính xác') </script>";
				$_SESSION["member_id"] = 0;
			}
			
			else if ( $result["tqvadmin_matkhau"] != $password ) 	
		{
				print "<script> alert ('Username and Password chưa chính xác') </script>";
				$_SESSION["member_id"] = 0;
			}
			else if ( $result["tqvgroup_id"] != 1 )
		{
				print "<script> alert ('Username and Password chưa chính xác') </script>";
				$_SESSION["member_id"] = 0;
			}
			else
			{
				$_SESSION["member_id"] = $result["tqvadmin_id"];
				
				if ( $request )
				{
					$request = urldecode($request);
					
					header("location: ". $request);
				}
				else
				{
					header("location: index.php");
				}
			}
		
		}
		
		$is_no_member = @mysql_query("SELECT * FROM tqv_bdsadmin");
		
		if ( @mysql_num_rows( $is_no_member ) > 0 )
		{
			$this->login_page();
		}
		else
		{

		}
	}
	
	//===================================================
	// Main page
	//===================================================
	
	function main()
	{		
				print '

<LINK href="http://ctnvietnam.com/images/logoctn.png" rel="shortcut icon">
<META content=http://ctnvietnam.com/images/logoctn.png name="SHORTCUT ICON">	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

		<html>

			<head>

				<title>DaNang renting - http://danangrenting.com -  Area Administrator </title>

			</head>
               
			<frameset cols="185,*" frameborder="no" border="0" framespacing="0">

				<frame name="menu" target="main" src="tqvmenubds.php">

				<frame name="body" src="tqvcontrolbds.php">

				<noframes><body><p>This page uses frames, but your browser doesnt support them.</p></body></noframes>

			</frameset>

		</html>



';
	}
	
	
	//===================================================
	// Login page
	//===================================================
	
	function login_page()
	{
		global $sec_code_md5; 

echo("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 3.2 Final//EN\">
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<link rel='stylesheet' type='text/css' media='screen, projection' href='../images/login.css'>
<title>DaNang renting - http://danangrenting.com -  Area Administrator </title>
<META http-equiv=content-type content=\"text/html; charset=utf-8\">
<NOSCRIPT><IFRAME SRC:*.html></IFRAME></NOSCRIPT>
<script type='text/javascript' src='../images/menuright.js'></script>
<script charset='utf-8' id='injection_graph_func' src='../images/injection_graph_func.js'></script></head><body>
<center>
	<div id='fw_frame' class='clearfix'>
		<div id='frame_1'>
			<h3>Khu vực dành cho người quản trị</h3>
			<div class='content'>
				<center>
				<table width='98%' border='0' cellpadding='0' cellspacing='0'>
				  <tbody><tr>
					<td align='left'><img src='../images/login.png'></td>
					<td align='left'>
						<b>Để website hoạt động tốt :</b>
						<ol>
						  <li><span class='designwebissmalldwd'>Bật cookies trình duyệt</li>
						  <li><span class='designwebissmalldwd'>Bật javascript trình duyệt</li>
						  <li><span class='designwebissmalldwd'>Duyệt tốt trên IE7 và FF2 trở lên</li>
				    	</ol>
					</td>
				  </tr>
				</tbody></table>
				</center>
			</div>
		</div>
		<div id='frame_2'>
			<h3>Đăng nhập</h3>
			<div class='content'>
				<center>
<SCRIPT language=javascript>
function verifyForm()
	{
		with(document.all.mainform)
		{	
			if(name.value == \"\")
			{
					alert('Bạn hãy nhập tên tài khoản')
					name.focus()
					return false
			}
			if(password.value == \"\")
			{
					alert('Bạn Hãy nhập Mật khẩu đăng nhập')
					password.focus()
					return false
			}
	}	
}
</SCRIPT>");



		print '
<form action="index.php?ns=login" name="mainform" onsubmit="return verifyForm();" method="post">
<input type="hidden" name="request" value="'. urlencode($_SERVER["REQUEST_URI"]) .'" >
<table width="90%" border="0" cellpadding="5" cellspacing="0">
					  <tbody><tr>
						<td width="35%" align="right"><span class="designwebissmalldwd"> Tên người dùng :</td>
						<td width="65%" align="left"><input class="inputbox" style="width: 80%;" autocomplete="off" name="name" type="text"></td>
					  </tr>
					  <tr>
						<td align="right"><span class="designwebissmalldwd"> Mật khẩu :</td>
						<td align="left"><input class="inputbox" style="width: 80%;" name="password" type="password"></td>
					  </tr>
					  <tr>
						<td></td>
						<td align="left"><input class="button" value="Đăng nhập" type="submit"></td>
					  </tr>
					  <tr>
						<td colspan="2" align="center"><span class="designwebissmallhd"> Vui lòng đăng nhập vào hệ thống !</font></td>
					  </tr>
					</tbody></table>
				</form>
				</center>
			</div>
		</div>
	</div>
	<div class="clearfix" id="copyright">
<b><span class="designwebissmall">Design by CTN IT .<a href="http://www.ctnvietnam.com"><span class="designwebissmall">Công ty cổ phần và đầu tư CTN Việt Nam</a></b><br>
<span class="designwebissmall">Địa Chỉ : 261 Hải Phòng Quận Thanh Khê - Thành Phố Đà Nẵng<br>
<span class="designwebissmall"> Website: <a href="http://www.ctnvietnam.com"><span class="designwebissmall">http://ctnvietnam.com </a> - <a href="http://www.ctnvietnam.com"> <span class="designwebissmall"> http://ctnvietnam.vn </a>
</div></center>
</body></html>


';
	}

	

	
	
	//===================================================
	// Main page
	//===================================================
	
	function load_member()
	{
		global $member;
		
		$member_id = addslashes($_SESSION['member_id']);
		$sql = @mysql_query("SELECT * FROM tqv_bdsadmin WHERE tqvadmin_id='{$member_id}'");
		$member = @mysql_fetch_array($sql);
	}
	
	
	//===================================================
	// Check user permission
	//===================================================
	
	function check_user()
	{
		if ( $_SESSION["member_id"] )
		{
			return TRUE;	
		}
		else
		{
			return FALSE;
		}	
		
		
	}
	}

    
?>