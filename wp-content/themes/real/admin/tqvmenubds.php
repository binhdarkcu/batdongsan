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
define("IN_LONGHIEN",true);
require_once("class.php");
require_once("Navigation.php");
$DIALOOSEWEB->admin->load_member();
//$DIALOOSEWEB->admin->protect_file();

$member_id = addslashes($_SESSION['member_id']);
$ma_nhom=intval($member['tqvgroup_id']);
  if($ma_nhom==1)
{
 @include("tqvmenurootbds.php");	
}
else
{
 @include("tqvmenumemberbds.php");
}
?>
<TR>
                      <TD height=20 onmouseout=mOut(this); onmouseover=mOvr(this);>&nbsp;<A 			href="members.php?ctnvietnam=change_profile" target='body' class=1>
			<STRONG class=sinco>Th&#244;ng tin c&#225; nh&#226;n</STRONG></A></TD></TR>
			<TR><TD><IMG height=2 src="images/line_4.gif" width="100%"></TD></TR>



  			<TR>
                      <TD height=20 onmouseout=mOut(this); onmouseover=mOvr(this);>&nbsp;<A href="members.php?ctnvietnam=change_pwd" target='body' class=1>
			<STRONG class=sinco>&#272;&#7893;i m&#7853;t kh&#7849;u</STRONG></A></TD></TR>
  			<TR>
                        <TD><IMG height=1 src="images/spaces.gif" width=1></TD></TR>
                          <TR>
                            <TD><IMG height=2 src="images/line_4.gif" width="100%"></TD></TR>


                    <TR>
                      <TD height=20 onmouseout=mOut(this); onmouseover=mOvr(this);>&nbsp;<A 			href="index.php?ns=logout" target='_top' class=1>
			<STRONG class=sinco>&#272;&#259;ng xu&#7845;t</STRONG></A></TD></TR>
			<TR><TD><IMG height=2 src="images/line_4.gif" width="100%"></TD></TR>


			</TBODY></TABLE></TD></TR></TBODY></TABLE>
