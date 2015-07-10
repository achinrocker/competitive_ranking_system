<?php
include_once "./connect.php";
$show=1;
if(isset($_GET['c']))
{
$show=0;
}

if($show)
{
echo '
			<br /><p style="font-size:15px;">Welcome to this new section of College Rankings.<br/>Now you can view scorecard of your college on website too. To start just select a college from dropdown below :<br/></p>
			<p><br/>
			<h3 style="color:#ff0000">No Contest Selected</h3>
			<form action="'.$_SERVER['SCRIPT_NAME'].'" method="GET" style="margin:10px" id="c">
			<select name="c" class="custom-dropdown" value="options" autofocus="autofocus" autocorrect="off" autocomplete="off">
			<option value="" selected="selected">Select Contest</option>
			<option value="DEC14">DEC14</option>
			<option value="LTIME14">LTIME14</option>
			<option value="COOK48">COOK48</option>;
			</select>
			<input type="submit" value="Submit" id="submitbutton">
			</form>
			</p>
		';

}
?>
