<center>
<div style ="background-color:#6495ed;background-color:#b0c4de; background: #2079b0;
  background-image: -webkit-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -moz-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -ms-linear-gradient(top, #2079b0, #eb94d0);
  background-image: -o-linear-gradient(top, #2079b0, #eb94d0);
  background-image: linear-gradient(to bottom, #2079b0, #eb94d0);
  text-decoration: none; page-title"> 
<?php 
	try{
		switch ($_SESSION["security-level"]){
	   		case "0": // This code is insecure
	   		case "1": // This code is insecure

	   			break;
		    		
			case "2":
			case "3":
			case "4":
	   		case "5": // This code is fairly secure
	
	   		break;
		}//end switch
    } catch (Exception $e) {
		echo $CustomErrorHandler->FormatError($e, "Error attempting to set up page configuration");
    }// end try;
?>

<div class="page-title">Robots.txt</div>

<?php include_once (__ROOT__.'/includes/back-button.inc');?>
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>

<table style=" border: 1px solid gray;
  padding: 8px;text-align: center;
  text-transform: uppercase;
  color: #0a0a0a;">
	<tr>
		<td class="form-header">Robots.txt</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td>
			Sites use the robot.txt file in the site root to discourage web crawlers from 
			indexing site content. Robots.txt is a plain text file which can be read by
			site visitors. In some cases, the robots.txt file will point to sensitive
			pages or directories. If a sensitive file is placed in robots.txt without
			proper authorization controls protecting the file, site visitors may discover
			the contents and browse to the files. More information is available at
			<a href="http://en.wikipedia.org/wiki/Robots_exclusion_standard" target="_blank">Robots Exclusion Standard</a>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
</table>
</div>
</center>
