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
        <h2>Welcome to Creative Coders</h2>
        <p> ACM International Collegiate Programming Contest (ACM-ICPC or ICPC) is an annual multi-tiered competitive programming competition among the universities of the world.
		   The goal is to provide platform to the programmers everywhere to meet , compete and have fun.
		   But isn't a feature on ACM ICPC ,in which users can compete within their college,see other programmer's progress
		   at a place and know whom they have to approach to learn/ask doubts after the contest.Thus this site has been made to        provide all features one need to know about other programmers of their college.</p>
    </div>
		<?php include_once "connect.php"; ?>
<div id="template_middle_subpage_index">
	<?php	include "files/select-on-page.php"; ?>
	</div>
    <div id="template_footer">
    		Copyright © 2014 Creative Coders - Designed by Team
    </div> <!-- end of footer -->     
	</div>
</body>
</html>
