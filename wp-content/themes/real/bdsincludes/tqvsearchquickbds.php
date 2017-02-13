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
$get=$_GET['lich'];
 include ("../bdssecuritypt/bdssecurity.php");
$query=@mysql_query("SELECT * FROM tqv_bdsnews WHERE tqvnews_datec='$get' order by tqvnews_id DESC limit 15");
$vinh=@mysql_num_rows($query);
if($vinh){
             $rowmn=@mysql_fetch_assoc($query);
             $ngay=$rowmn["tqvnews_datec"];
echo "<table border='0' width='450' cellSpacing='0' cellPadding='0'>";
echo "<tr><td valign='top'><div align='left'><span class ='fstieudetheloai'>Kết quả tìm kiếm tin tức ngày:  $ngay</span></td></tr>";
echo "<tr><td align='left' height='10'></td></tr>";
             while($row=@mysql_fetch_assoc($query))
                  {
             $tqv_qhname=$row["tqvnews_heading"];
             $tqvnews_anhmh=$row["tqvnews_anhmh"];
             $tqvnews_tomtat=$row["tqvnews_tomtat"];
             $tqvnews_id=$row["tqvnews_id"];
            echo "<tr><td height=39 valign='bottom'> <div align='left'><img src='images/bullet3.png' height='9' border='0' width='7' valign='bottom'><a href='index.php?tqvbds=detailnewsbds&newsid=$tqvnews_id' class='designwfdsffeafffdfsfe'> $tqv_qhname </a></td></tr>";
}
echo "</table>";
}
else {  echo "Không tìm thấy trong website!"; }
?>
