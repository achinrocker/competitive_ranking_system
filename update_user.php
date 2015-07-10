<?php
	session_start();
	ob_start();
	if(isset($_SESSION["Admin"])){
		echo '
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
    
    <div id="template_middle_subpage_index">
			<h4><a href="admin.php">Back</a></h4><h4>';
			echo mysql_real_escape_string($_SESSION["Admin"]);echo '(<a href="selectadmin.php?remove=logout">Log Out</a>)</h4>
			<form method="post" action="update1.php">
	Username:<input type="text" class="inputs" name="uname" pattern="[a-zA-Z0-9]+[_a-zA-Z0-9]*"
oninvalid="setCustomValidity(\'Please enter only AlphaNumerics \')"
             onchange="try{setCustomValidity(\'\')}catch(e){}" /><br />
	New Institute:<select name="list" class="custom-dropdown">
						<option value="39">Amazon</option>
						<option value="87">Google</option>
						<option value="130">Facebook</option>
						<option value="136">Infosys</option>
						<option value="156">Microsoft</option>
				  </select>
	<input type="submit" value="Go" id="submitbutton">			  
</form>
        </div>
    <div id="template_footer">
    		Copyright © 2014 Creative Coders - Designed by Team
    </div> <!-- end of footer -->     
	</div>
</body>
</html>';
}else{
	header('Location:admin.php');
}
