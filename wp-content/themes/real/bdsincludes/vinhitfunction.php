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


    Function  tranquangvinhtieude($tieude){
   	   $limit=46;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
	 
   Function  tranquangvinhtieudetieudiem($tieude){
   	   $limit=37;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
   Function  tranquangvinhittieude($tieude){
   	   $limit=25;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
    Function  quangvinhtieude($tieude){
   	   $limit=57;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
    Function  quangvinhtieudecauhoi($tieude){
   	   $limit=60;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
   Function  quangvinhnoidung($noidung){
   	   $limit=200;
   	    if (strlen($noidung) > $limit) {
   	    	       $noidung=substr($noidung, 0, $limit);
   	    	       return $noidung=substr($noidung,0,strrpos($noidung,' '))."...";
                  
                      }
                  else {
                    return  $noidung=$noidung;
                   }
   	    
   }
    Function  quangvinhnoidung1($noidung){
   	   $limit=185;
   	    if (strlen($noidung) > $limit) {
   	    	       $noidung=substr($noidung, 0, $limit);
   	    	       return $noidung=substr($noidung,0,strrpos($noidung,' '))."...";
                  
                      }
                  else {
                    return  $noidung=$noidung;
                   }
   	    
   }
   Function  quangvinhnoidung2($noidung){
   	   $limit=457;
   	    if (strlen($noidung) > $limit) {
   	    	       $noidung=substr($noidung, 0, $limit);
   	    	       return $noidung=substr($noidung,0,strrpos($noidung,' '))."...";
                  
                      }
                  else {
                    return  $noidung=$noidung;
                   }
   	    
   }
   Function  quangvinhnoidungbottom($noidung){
   	   $limit=155;
   	    if (strlen($noidung) > $limit) {
   	    	       $noidung=substr($noidung, 0, $limit);
   	    	       return $noidung=substr($noidung,0,strrpos($noidung,' '))."...";
                  
                      }
                  else {
                    return  $noidung=$noidung;
                   }
   	    
   }
   Function  quangvinhnoidungbottom1($noidung){
   	   $limit=215;
   	    if (strlen($noidung) > $limit) {
   	    	       $noidung=substr($noidung, 0, $limit);
   	    	       return $noidung=substr($noidung,0,strrpos($noidung,' '))."...";
                  
                      }
                  else {
                    return  $noidung=$noidung;
                   }
   	    
   }
  Function  tranquangvinhintro($tieude){
   	   $limit=1275;
   	    if (strlen($tieude) > $limit) {
   	    	       $tieude=substr($tieude, 0, $limit);
   	    	       return $tieude=substr($tieude,0,strrpos($tieude,' '))."...";
                  
                      }
                  else {
                    return  $tieude=$tieude;
                   }
   	    
   }
   Function quangvinhseo($str)
{
$coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă","ằ","ắ"
,"ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề","ế","ệ","ể","ễ","ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
,"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
,"Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ","ê","ù","à");
$khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
,"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o"
,"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A"
,"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O"
,"O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D","e","u","a");
return str_replace($coDau,$khongDau,$str);
}

	// Chuyen doi tieng viet co dau sang khong dau
      function designwebvntranquangvinh($value){
               #---------------------------------a
               $value = str_replace("á", "a", $value);
               $value = str_replace("à", "a", $value);
               $value = str_replace("ả", "a", $value);
               $value = str_replace("ã", "a", $value);
               $value = str_replace("ạ", "a", $value);
               $value = str_replace("â", "a", $value);
               $value = str_replace("ă", "a", $value);
               #---------------------------------A
               $value = str_replace("Á", "a", $value);
               $value = str_replace("À", "a", $value);
               $value = str_replace("Ả", "a", $value);
               $value = str_replace("Ã", "a", $value);
               $value = str_replace("Ạ", "a", $value);
               $value = str_replace("Â", "a", $value);
               $value = str_replace("Ă", "a", $value);
               #---------------------------------a^
               $value = str_replace("ấ", "a", $value);
               $value = str_replace("ầ", "a", $value);
               $value = str_replace("ẩ", "a", $value);
               $value = str_replace("ẫ", "a", $value);
               $value = str_replace("ậ", "a", $value);
               #---------------------------------A^
               $value = str_replace("Ấ", "a", $value);
               $value = str_replace("Ầ", "a", $value);
               $value = str_replace("Ẩ", "a", $value);
               $value = str_replace("Ẫ", "a", $value);
               $value = str_replace("Ậ", "a", $value);
               #---------------------------------a(
               $value = str_replace("ắ", "a", $value);
               $value = str_replace("ằ", "a", $value);
               $value = str_replace("ẳ", "a", $value);
               $value = str_replace("ẵ", "a", $value);
               $value = str_replace("ặ", "a", $value);
               #---------------------------------A(
               $value = str_replace("Ắ", "a", $value);
               $value = str_replace("Ằ", "a", $value);
               $value = str_replace("Ẳ", "a", $value);
               $value = str_replace("Ẵ", "a", $value);
               $value = str_replace("Ặ", "a", $value);
               #---------------------------------e
               $value = str_replace("é", "e", $value);
               $value = str_replace("è", "e", $value);
               $value = str_replace("ẻ", "e", $value);
               $value = str_replace("ẽ", "e", $value);
               $value = str_replace("ẹ", "e", $value);
               $value = str_replace("ê", "e", $value);
               #---------------------------------E
               $value = str_replace("É", "e", $value);
               $value = str_replace("È", "e", $value);
               $value = str_replace("Ẻ", "e", $value);
               $value = str_replace("Ẽ", "e", $value);
               $value = str_replace("Ẹ", "e", $value);
               $value = str_replace("Ê", "e", $value);
               #---------------------------------e^
               $value = str_replace("ế", "e", $value);
               $value = str_replace("ề", "e", $value);
               $value = str_replace("ể", "e", $value);
               $value = str_replace("ễ", "e", $value);
               $value = str_replace("ệ", "e", $value);
               #---------------------------------E^
               $value = str_replace("Ế", "e", $value);
               $value = str_replace("Ề", "e", $value);
               $value = str_replace("Ể", "e", $value);
               $value = str_replace("Ễ", "e", $value);
               $value = str_replace("Ệ", "e", $value);
               #---------------------------------i
               $value = str_replace("í", "i", $value);
               $value = str_replace("ì", "i", $value);
               $value = str_replace("ỉ", "i", $value);
               $value = str_replace("ĩ", "i", $value);
               $value = str_replace("ị", "i", $value);
               #---------------------------------I
               $value = str_replace("Í", "i", $value);
               $value = str_replace("Ì", "i", $value);
               $value = str_replace("Ỉ", "i", $value);
               $value = str_replace("Ĩ", "i", $value);
               $value = str_replace("Ị", "i", $value);
               #---------------------------------o^
               $value = str_replace("ố", "o", $value);
               $value = str_replace("ồ", "o", $value);
               $value = str_replace("ổ", "o", $value);
               $value = str_replace("ỗ", "o", $value);
               $value = str_replace("ộ", "o", $value);
               #---------------------------------O^
               $value = str_replace("Ố", "o", $value);
               $value = str_replace("Ồ", "o", $value);
               $value = str_replace("Ổ", "o", $value);
               $value = str_replace("Ô", "o", $value);
               $value = str_replace("Ộ", "o", $value);
               #---------------------------------o*
               $value = str_replace("ớ", "o", $value);
               $value = str_replace("ờ", "o", $value);
               $value = str_replace("ở", "o", $value);
               $value = str_replace("ỡ", "o", $value);
               $value = str_replace("ợ", "o", $value);
               #---------------------------------O*
               $value = str_replace("Ớ", "o", $value);
               $value = str_replace("Ờ", "o", $value);
               $value = str_replace("Ở", "o", $value);
               $value = str_replace("Ỡ", "o", $value);
               $value = str_replace("Ợ", "o", $value);
               #---------------------------------u*
               $value = str_replace("ứ", "u", $value);
               $value = str_replace("ừ", "u", $value);
               $value = str_replace("ử", "u", $value);
               $value = str_replace("ữ", "u", $value);
               $value = str_replace("ự", "u", $value);
               #---------------------------------U*
               $value = str_replace("Ứ", "u", $value);
               $value = str_replace("Ừ", "u", $value);
               $value = str_replace("Ử", "u", $value);
               $value = str_replace("Ữ", "u", $value);
               $value = str_replace("Ự", "u", $value);
               #---------------------------------y
               $value = str_replace("ý", "y", $value);
               $value = str_replace("ỳ", "y", $value);
               $value = str_replace("ỷ", "y", $value);
               $value = str_replace("ỹ", "y", $value);
               $value = str_replace("ỵ", "y", $value);
               #---------------------------------Y
               $value = str_replace("Ý", "y", $value);
               $value = str_replace("Ỳ", "y", $value);
               $value = str_replace("Ỷ", "y", $value);
               $value = str_replace("Ỹ", "y", $value);
               $value = str_replace("Ỵ", "y", $value);
               #---------------------------------DD
               $value = str_replace("Đ", "d", $value);
               $value = str_replace("Đ", "d", $value);
               $value = str_replace("đ", "d", $value);
               #---------------------------------o
               $value = str_replace("ó", "o", $value);
               $value = str_replace("ò", "o", $value);
               $value = str_replace("ỏ", "o", $value);
               $value = str_replace("õ", "o", $value);
               $value = str_replace("ọ", "o", $value);
               $value = str_replace("ô", "o", $value);
               $value = str_replace("ơ", "o", $value);
               #---------------------------------O
               $value = str_replace("Ó", "o", $value);
               $value = str_replace("Ò", "o", $value);
               $value = str_replace("Ỏ", "o", $value);
               $value = str_replace("Õ", "o", $value);
               $value = str_replace("Ọ", "o", $value);
               $value = str_replace("Ô", "o", $value);
               $value = str_replace("Ơ", "o", $value);
               #---------------------------------u
               $value = str_replace("ú", "u", $value);
               $value = str_replace("ù", "u", $value);
               $value = str_replace("ủ", "u", $value);
               $value = str_replace("ũ", "u", $value);
               $value = str_replace("ụ", "u", $value);
               $value = str_replace("ư", "u", $value);
               #---------------------------------U
               $value = str_replace("Ú", "u", $value);
               $value = str_replace("Ù", "u", $value);
               $value = str_replace("Ủ", "u", $value);
               $value = str_replace("Ũ", "u", $value);
               $value = str_replace("Ụ", "u", $value);
               $value = str_replace("Ư", "u", $value);
               #---------------------------------
               $value = str_replace("#"," ", $value);
               $value = str_replace("."," ", $value);
               $value = str_replace(","," ", $value);
               $value = str_replace("!"," ", $value);
               $value = str_replace("?"," ", $value);
               $value = str_replace(":", " ", $value);
               $value = str_replace("'", " ", $value);
               $value = str_replace("&#039;", " ", $value);
               $value = str_replace("&quot;", " ", $value);
               $value = str_replace("&amp;","va", $value);
               $value = str_replace("(", " ", $value);
               $value = str_replace(")", " ", $value);
               $value = str_replace("-", " ", $value);
               $value = str_replace("   ", " ", $value);
               $value = str_replace("  ", " ", $value);
               $value = str_replace("/", " ", $value);
               return strtolower(str_replace(" ","-",trim($value)));
      }
      
    function blogtqvdate(){
    	date_default_timezone_set('Asia/Ho_Chi_Minh');  
    	$str_search = array ("Mon","Tue","Wed","Thu","Fri","Sat","Sun","am", "pm", ":"); 
        $str_replace = array ( "Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy","Chủ nhật"," phút, am"," phút, pm"," giờ "); 
        $timenow  = gmdate("D, d/m/Y"); 
        $timenow  = str_replace( $str_search, $str_replace, $timenow);
        echo $timenow; 
  
    }
   
   ?>