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
	<LINK media=screen href="images/tinnoibat.css" type=text/css rel=stylesheet>
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
                       el.innerHTML='Loading....';
               if (x.readyState == 4 && x.status == 200)
                       {
                       el.innerHTML = x.responseText;
                   }
                   }
               x.open("GET", url, true);
               x.send(null);
               }
       }
function display(x,y)       
   {
   ajaxLoad('tqvsearchquickbds.php?lich='+x,'lichps');
   }
   
</script>
	
<link type="text/css" rel="stylesheet" href="images/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="images/dhtmlgoodies_calendar.js?random=20060118"></script>
<table border='0' width='485'  name='da' cellSpacing='0' cellPadding='0' valign='top'>
       <tr><td height=10></td></tr>
    		          <form name="form1"  method="post"><tr><td height="5" valign='top' align='left'><input type="text" class='inputboxdesignwebvnit' readonly name="theDate2" onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)" onchange="display(this.value);">&nbsp;&nbsp;&nbsp;<img src='images/tranguangvinhsearchquick.gif'  onclick="displayCalendar(document.form1.theDate2,'dd/mm/yyyy',this)"></td></tr></font>
        <tr><td align='left' height="10"></td></tr>
        <tr><td  ><div id="lichps"></div></td></tr>
<div id="debug"></div>

</table> 