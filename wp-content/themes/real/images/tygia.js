
if (location.host !=='vnexpress.net')
{
	document.write('<table border="0" cellpadding="0" cellspacing="0" width="85" align="right">');
	try
	{
		for(i in vForexs){
			if (typeof vForexs[i] != "undefined")
		    	document.write('<tr><td class="source">' + vForexs[i] + '</td><td>&nbsp;' + vCosts[i] + '</td></tr>');
	    }
	}
	catch (error)
	{
	    document.write('<tr><td colspan="2" class="source"><a href="http://ctnvietnam.com">Ctnvietnam.com</a></td></tr>');
	}
	document.write('</table>');
}
else
	document.write('<a href="http://ctnvietnam.com">Ctnvietnam.com</a>');