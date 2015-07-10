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
			<?php
	include 'connect.php';
	include 'files/college.php';
	if(isset($_POST['username'])){
		if(!empty($_POST['username'])){
 
			$user=$_POST['username'];
                          
                        $flag=1;
                        $q2="SELECT handle FROM detail WHERE handle='$user'";
                        
                        if($qrun1=mysql_query($q2)){
                          
                              while($row1=mysql_fetch_array($qrun1)){
                               $flag=0;
                              }
                           if($flag){
                               header('Location:invalid_del.php');
                           }    
                         else 		{
			$q="DELETE FROM detail WHERE handle='$user'";
			if($run=mysql_query($q)){
                        	header('Location:delete2.php');       
                        }
			else{
				echo mysql_error();
			}
		        }
                    }
                    } else{
			header('Location:blank_update.php');
		      }
	}
?>
        </div>
    <div id="template_footer">
    		Copyright © 2014 Creative Coders - Designed by Team
    </div> <!-- end of footer -->     
	</div>
</body>
</html>
