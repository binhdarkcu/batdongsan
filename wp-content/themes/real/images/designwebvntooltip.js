	var lastTooltip =null;
    var tooltipBackColor='#EEEEF5';
    
    showTooltip = function (strTitle,strText,strHelpText,strhelpImage,strmainImage) {   
    if (lastTooltip==null){                                                               
           var newDiv = document.createElement("div");
           newDiv.style.background=tooltipBackColor;
           newDiv.style.color='#3c435f';           
           newDiv.style.position='absolute';
           newDiv.style.width='300px';
           newDiv.style.border='#cae58a 1px solid';         
           newDiv.style.visibility='hidden';
            
           var title = document.createElement("span"); 
           title.style.padding='6px 0 4px 10px';
           newDiv.style.font='bold 14px "Trebuchet MS" , "Arial"';
		   title.style.styleFloat='left';
		   title.style.cssFloat='left';
		   title.style.clear='both';
		   title.style.width='100%';           
           var titleText = document.createTextNode(strTitle);
           title.appendChild(titleText);    

           var mainParagraf = document.createElement("p");
           mainParagraf.style.font='normal 12px "Trebuchet MS" , "Arial"';
           mainParagraf.style.padding='0 2px 6px 20px';
           mainParagraf.style.margin='0';
           mainParagraf.style.styleFloat='left';
		   mainParagraf.style.cssFloat='left';           
            
           if (strmainImage) {
               var mainImg = document.createElement("img");    
               mainImg.setAttribute("src",strmainImage);
               mainImg.style.font='bold 10px "Trebuchet MS" , "Arial"';
               mainImg.style.marginRight='15px';
               mainImg.style.border='#BDBDBD 0px solid';
               mainImg.style.styleFloat='left';
		       mainImg.style.cssFloat='left';               
               mainParagraf.appendChild(mainImg);  
           }
           
           var mainText = document.createTextNode(strText);            
           mainParagraf.appendChild(mainText);             
           newDiv.appendChild(title);
           newDiv.appendChild(mainParagraf);
           
           if (strHelpText) {
               var horLine = document.createElement("hr"); 
               horLine.style.width='96%';
		       horLine.style.clear='both';    
                        
               var helpDiv = document.createElement("div");   
               helpDiv.style.styleFloat='left';
		       helpDiv.style.cssFloat='left';   
		       helpDiv.style.clear='both';
		       helpDiv.style.paddingLeft='6px';     
		       helpDiv.style.height='24px';     
               
               if (strhelpImage) {
                   var helpImg = document.createElement("img");    
                   helpImg.setAttribute("src",strhelpImage);
                   helpImg.style.marginRight='8px';
                   helpImg.style.verticalAlign='middle';
                   helpDiv.appendChild(helpImg);
               }

               var helpText = document.createTextNode(strHelpText);                           
               helpDiv.appendChild(helpText);  
               newDiv.appendChild(horLine);
               newDiv.appendChild(helpDiv);                         
           }                    
                                                                        
            lastTooltip=newDiv;    
            if (document.addEventListener) document.addEventListener("mousemove",moveTooltip, true);
            if (document.attachEvent) document.attachEvent("onmousemove",moveTooltip);  
            
            var bodyRef = document.getElementsByTagName("body").item(0);
            bodyRef.appendChild(newDiv);                    
            }                                       
        };
        
        
       moveTooltip = function (e) {
       if (lastTooltip){
               if (document.all)
                    e = event;
               if (e.target)
                    sourceEl = e.target;
               else if (e.srcElement)
                    sourceEl = e.srcElement;
                      
               var coors=findPos(sourceEl);
               var positionLeft = e.clientX;            
               var positionTop  = coors[1] + sourceEl.clientHeight + 20;
               
               lastTooltip.style.top=positionTop+'px';
               lastTooltip.style.left=positionLeft+'px';
               lastTooltip.style.visibility='visible';
           }
       }
    
       hideTooltip = function () {              
            var bodyRef = document.getElementsByTagName("body").item(0);
            if (lastTooltip) bodyRef.removeChild(lastTooltip);
            lastTooltip=null;
       };
       
       function findPos(obj) {
	        var curleft = curtop = 0;
	        if (obj.offsetParent) {
		        curleft = obj.offsetLeft
		        curtop = obj.offsetTop
		        while (obj = obj.offsetParent) {
			        curleft += obj.offsetLeft
			        curtop += obj.offsetTop
		        }
	        }
	        return [curleft,curtop];
        }