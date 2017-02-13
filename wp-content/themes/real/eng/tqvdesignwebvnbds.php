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


if (!defined("websitebds")) {
    die ("<div align='center'><font color='blue' size='5'> Access Denied ! Contact Designwebvn@gmail.com");
}   
    
	$actctn=addslashes($_GET['tqvbds']);
     switch($actctn){
        	 	 	  case "logout":
        	 	 	    include "bdsincludes/tqvlogoutbds.php";
        	 	 	    break;
        	 	 	   case "checklogin":
        	 	 	   include "bdsincludes/tqvmaincheckbds.php";
        	 	 	   break;
        	 	 	   case "success":
        	 	 	    include "bdsincludes/tqvmainsuccessbds.php";
        	 	 	    break;
        	 	 	    case "managementnews":
        	 	 	    include "bdsincludes/tqvmanagementnewsbds.php";
        	 	 	    break; 
        	 	 	    case "publichednews":
        	 	 	    include "bdsincludes/tqvpublichednewsbds.php";
        	 	 	    break;
        	 	 	    case "changeaccount":
        	 	 	    include "bdsincludes/tqvchangeaccountbds.php";
        	 	 	    break;  
        	 	 	     case "changepass":
        	 	 	    include "bdsincludes/tqvchangepassbds.php";
        	 	 	    break; 
        	 	 	     case "detailnewsbds":
        	 	 	    include "bdsincludes/tqvdetailnewsbds.php";
        	 	 	    break; 
        	 	 	    case "tqvcontact":
        	 	 	    include "bdsincludes/tqvcontactbds.php";
        	 	 	    break;
        	 	 	    case "tqvmember":
        	 	 	    include "bdsincludes/tqvmemberbds.php";
        	 	 	    break;
        	 	 	    case "tqvregistermember":
        	 	 	    include "bdsincludes/tqvregistermemberbds.php";
        	 	 	    break; 
        	 	 	    case "tqvkygui":
        	 	 	    include "bdsincludes/tqvkyguibds.php";
        	 	 	    break;       
        	 	 	    case "tqvlistnews":
        	 	 	    include "bdsincludes/tqvlistnewsbds.php";
        	 	 	    break;
        	 	 	     case "tqvadvertise":
        	 	 	    include "bdsincludes/tqvadvertisebds.php";
        	 	 	    break;
        	 	 	    case "detailcatenewsbds":
        	 	 	    include "bdsincludes/tqvdetailcatenewsbds.php";
        	 	 	    break;     
        	 	 	     case "detailstatesbds":
        	 	 	    include "bdsincludes/tqvdetailstatesbds.php";
        	 	 	    break; 
        	 	 	    case "detailnewsrentbds":
        	 	 	    include "bdsincludes/tqvdetailnewsrentbds.php";
        	 	 	    break; 
        	 	 	     case "tqvrenthouse":
        	 	 	    include "bdsincludes/tqvrenthousebds.php";
        	 	 	    break;   
        	 	 	         case "tqvsearch":
        	 	 	    include "bdsincludes/tqvsearchbds.php";
        	 	 	    break; 
        	 	 	        case "tqvonline":
        	 	 	    include "bdsincludes/tqvonlinebds.php";
        	 	 	    break; 
        	 	 	    case "tqvtablevalue":
        	 	 	    include "bdsincludes/tqvtablevaluebds.php";
        	 	 	    break;  
        	 	 	     case "tqvintroduce":
        	 	 	    include "bdsincludes/tqvintroducebds.php";
        	 	 	    break;   
        	 	 	     case "tqvuploadimg":
        	 	 	    include "bdsincludes/tqvuploadimgbds.php";
        	 	 	    break;                 	
                     	 default:
        	 	 include 'bdsincludes/tqvmainbds.php' ; 
        	 	 break;
        	 } 

					 ?>