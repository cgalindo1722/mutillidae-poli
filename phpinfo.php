
<style>
<!--
	table
	{
	    
	    width: 95%;
	}

	div.phpinfodisplay{
	font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  padding: 8px;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  color: black;
  background-color:#6495ed;background-color:#b0c4de; background: #2079b0;
  background-image: -webkit-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -moz-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -ms-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -o-linear-gradient(top, #2079b0, #eb94d0);
  background-image: linear-gradient(to bottom, #2079b0, #eb94d0);
}
-->
</style>

<div class="page-title">Secret PHP Server Configuration Page</div>

<?php include_once (__ROOT__.'/includes/back-button.inc');?>

<div>&nbsp;</div>

<?php
	$lShowPHPInfo = FALSE;
	if (!isset($_SESSION["security-level"])){
		$lShowPHPInfo = TRUE;
	}// end if

	switch ($_SESSION["security-level"]){
   		case "0": // This code is insecure   			
   		case "1": // This code is insecure
			$lShowPHPInfo = TRUE;
   		break;
   		case "2":
   		case "3":
   		case "4":
   		case "5": // This code is fairly secure 
   			if(isset($_SESSION['is_admin'])){
   				if($_SESSION['is_admin'] == 'TRUE'){
					$lShowPHPInfo = TRUE;
   				}// end if is_admin
   			}// end if isseet $_SESSION['is_admin']
  		break;
	}// end switch
	
	if($lShowPHPInfo){
		$lIncludedFiles = get_included_files();
		$lBaseFile = $lIncludedFiles[0];
		$lThisFile = __FILE__;
		if ($lBaseFile === $lThisFile){
			$lIncluded = FALSE;		
		}else{
			$lIncluded = TRUE;
		}// end if
		
		if ($lIncluded == TRUE){
			ob_start();
			phpinfo();
			preg_match ('%<style type="text/css">(.*?)</style>.*?<body>(.*?)</body>%s', ob_get_clean(), $matches);
			# $matches [1]; # Style information
			# $matches [2]; # Body information

			echo "<div class='phpinfodisplay'><style type='text/css'>\n",
			    join( "\n",
			        array_map(
			            create_function(
			                '$i',
			                'return ".phpinfodisplay " . preg_replace( "/,/", ",.phpinfodisplay ", $i );'
			                ),
			            preg_split( '/\n/', trim(preg_replace( "/\nbody/", "\n", $matches[1])) )
			            )
			        ),
				"td{word-wrap: break-word;}</style>\n",
			    $matches[2],
			    "\n</div>\n";
		}else{
			echo phpinfo(INFO_ALL);
		}// end if $lIncluded
	}else{
		echo '<table><tr><td class="error-message">Secure sites do not expose administrative or configuration pages to the Internet</td></tr></table>';		
	}//end if $lShowPHPInfo
?>