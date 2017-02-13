<!-- 
#  ----------------------------------------		#
#  Vinh IT (Tran Quang Vinh It)                 #
#  Mobile  0905246855                           #
#  Contact designwebvn@gmail.com	            #
#  Please don't edit if you use this code       #
#  Website http://designwebvn.com               #
#  ----------------------------------------	    #
 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK media=screen href="images/timkiem.css" type=text/css rel=stylesheet>
<style type="text/css">
.lienket{
	border: 2px solid #eaeaea;;
	FONT-FAMILY: Tahoma, Verdana;
	color:#333333;
	text-decoration:none;
}
</style>
<script>
function $(url,id,eval_str){
    if(document.getElementById){var x=(window.ActiveXObject)?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();}
    if(x){x.onreadystatechange=function() {
        el=document.getElementById(id);
        el.innerHTML='loading....';
        if(x.readyState==4&&x.status==200){
            el.innerHTML='';
            el=document.getElementById(id);
            el.innerHTML=x.responseText;
            eval(eval_str);
            }
        }
    x.open("GET",url,true);x.send(null);
    }
}

function change(id){
    $('bdsincludes/tqvweatherbds.php?id='+id,'noidung');
}
</script>

<table width="95%" border="0" cellspacing="0" cellpadding="0" align='right'>
  
  <tr>
    <td align='center'>
       <form name="form1"  method="post" action="">
          <img src='images/thoitiet.png' border='0' width='35' height='30'> <select name="select" class ='lienket' style="font-family: tahoma; font-size: 9.7pt" onChange="change(this.value);">
               <option value="4" ><span class='thoitiet' selected="select">Đà Nẵng</span></option> >
               <option value="1"><span class='thoitiet'>Hải Phòng</span></option>
               <option value="2"><span class='thoitiet'>Hà Nội</span></option>
               <option value="3"><span class='thoitiet'>Vinh</span></option>
               <option value="0"><span class='thoitiet'>Thành phố S&#417;n La</span></option
               <option value="5"><span class='thoitiet'>Nha Trang</span></option>
               <option value="6" ><span class='thoitiet'>Kon Tum</span></option>
      </select>
      </form>
    </td>
  </tr>
   <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td id="noidung" align='center'>  
<?php
$Link[] = 'http://vnexpress.net/ListFile/Weather/Danang.xml';
$id= 0;
$content =  file_get_contents($Link[$id]);
$p = xml_parser_create();
xml_parse_into_struct($p, $content, $xml);
xml_parser_free($p);
?>
<img src="http://vnexpress.net/Images/Weather/<?php echo $xml[1]['value']; ?>" align="center" />
<img src="http://vnexpress.net/Images/Weather/<?php echo $xml[3]['value']; ?>" align="center" />
<img src="http://vnexpress.net/Images/Weather/<?php echo $xml[5]['value']; ?>" align="center" />
<img src="http://vnexpress.net/Images/Weather/<?php echo "c.gif"; ?>" align="center" /><p>

   
   </td>
  </tr>
</table>
