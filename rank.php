<?php
	ob_start();
	include 'connect.php';
session_start();
$user=$_POST['username'];
$contest=$_POST['contest'];
$user=mysql_real_escape_string($user);
$contest=mysql_real_escape_string($contest);
$k=0;
	if(!empty($user)){
		if($run=mysql_query("SELECT handle FROM ".$contest." WHERE ".$contest.".handle='$user'")){
		 #echo '<br />'.$user;
			while($runq=mysql_fetch_array($run)){
				session_regenerate_id();
				$_SESSION['User']=$user;
				$_SESSION['Contest']=$contest;
				$k=1;
				session_write_close();
			}
			if(!$runq&&!$k){
				header('Location:invaliduser.php');
			}
		}else{
			echo mysql_error();
		}
	}else{
		header('Location:blank_update.php');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Creative Coders </title>
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="template_wrapper">
	<div id="template_header">
        
        <div id="site_title" ><h1><a></a></h1></div>
        
        <div class="cleaner"></div>
    </div>
    
        <ul>
            <li><a href="index.php" class="round yellow">Home<span class="round" >Welcome!</span></a></li>
            <li><a href="ranking.php" class="round yellow">Ranking<span class="round">Overall Rank</span></a></li>
            <li><a href="livescore.php" class="round yellow">Live Score<span class="round">Click Here To View Livescore</span></a></li>
            <li><a href="add_user.php" class="round yellow">Add User<span class="round">Click Here To Add User</span></a></li>
            <li><a href="admin.php" class="round yellow">Admin<span class="round">Admin Login</span></a></li>
			<li class="last"><a href="contact.html" class="round yellow">Contact Us<span class="round">Connect &nbsp;&nbsp;With&nbsp;&nbsp; Us!</span></a></li>
		</ul>    	
        
        <div class="cleaner"></div> <!-- end of template_menu -->
    
    <div id="template_main_top"></div><div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>
			<h4><a href="update_rank.php">Back</a></h4>
			<?php echo '<h4>'.mysql_real_escape_string($_SESSION["Admin"]).'(<a href="selectadmin.php?remove=logout">Remove</a>)</h4>';?>
			<form method="post" action="rank1.php">
			<h3 style="color:#ff0000">Selected contest is <?php echo strtoupper($contest);?></h3>
			Q1:<input type="text" name="ques1" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q2:<input type="text" name="ques2" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q3:<input type="text" name="ques3" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q4:<input type="text" name="ques4" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q5:<input type="text" name="ques5" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q6:<input type="text" name="ques6" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q7:<input type="text" name="ques7" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q8:<input type="text" name="ques8" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q9:<input type="text" name="ques9" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q10:<input type="text" name="ques10" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			Q11:<input type="text" name="ques11" value="0" class="inputs" pattern="[0-9][0-9]?|100" oninvalid="setCustomValidity('Please enter only numbers upto 100 ')" onchange="try{setCustomValidity('')}catch(e){}" /><br />
			<input type="submit" value="Go" id="submitbutton">			  
			</form>
        </div></div>
    <div id="template_footer">
    		Copyright © 2014 Creative Coders - Designed by Team
    </div> <!-- end of footer -->     
	</div>
</body>
</html>
