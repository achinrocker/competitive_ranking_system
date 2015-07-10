<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Creative Coders</title>
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="template_wrapper">
	<div id="template_header">
    	
      <div id="site_title"><h1><a> </a></h1></div>
        
        
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
    <div id="template_middle_subpage_ranking">
		<?php include "connect.php";
ob_start(); ?>
			
			
			<h1 style="text-align:center;">Ranking According to All Contests</h1><br />
			  
	

   </div>
<div id="template_main_top"></div>
				<div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>
			   <?php
			   	#for testing setting value=1
				if($_COOKIE['College']){
			   	$value=$_COOKIE['College'];
				}else{
					$value=0;
				}
				if($value==0)
				{
				include "files/select-on-page.php";
				}
				else if(isset($_COOKIE["College"]))
				{
				 include "files/college.php";
			  $sno=1;
			  echo '<div class=\"abc\">
			<p><img src="college/'.mysql_real_escape_string($_COOKIE["Image"]).'" width="100" height="100" align="left"/>
			<br /><h3><div style="color:#000080;">&nbsp;&nbsp;&nbsp;&nbsp;'.mysql_real_escape_string($final[$_COOKIE["College"]][1]).'</div><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<a href="select.php" >Remove</a>)</h3>
			<br /></p></div><div class=\"cleaner\"></div>
		';
			  $result = mysql_query("SELECT * FROM detail WHERE rank1>0 AND college=".$value." ORDER BY rank1");
			  echo "<table border=\"1\">
			  <tr >
			  <th> Sno. </th>
			  <th> Username </th>
			  <th> Name </th>
			  <th> Country </th>
			  <th> Global Rank </th>
			  <th> Country Rank </th>
			  <th> Change Global </th>
			  </tr>";
			$change=0;
				 $url="http://www.codechef.com/users/";

			  while($row = mysql_fetch_array($result))
				{
$star=0;
				if($row['old_rank1']==0)
{
$star=1;
				$change=0;
}
				else				
				$change= $row['old_rank1']-$row['rank1'] ;
				echo "<tr>";
				echo "<td>" . $sno++. "</td>";
				  echo "<td><a id =\"template_main_ranking\"href='".$url . $row['handle'] ."' target=_blank>".$row['handle'] . "</a></td>";     
				echo "<td id=\"colortext\">" . $row['name'] . "</td>";
				echo "<td id=\"colortext\">" . $row['country'] . "</td>";
				echo "<td id=\"colortext\">" . $row['rank1'] . "</td>";
				echo "<td id=\"colortext\">" . $row['rank2'] . "</td>";
				 if($star==1)
            echo "<td>" . $change . "</td><td><img src='img/1star.png' style='width:20px;height:20px;'/></td>";
        else if($change>0)
echo "<td id=\"colortextup\">" . $change . "</td><td><img src='img/1up.png' style='width:20px;height:20px;'/></td>";
				  else
					 echo "<td id=\"colortextdown\">" . $change*-1 . "</td><td><img src='img/2down.png' style='width:20px;height:20px;' /></td>";           
				echo "</tr>";
				}
			  echo "</table>";
			  echo "<br/><br /><h3 style=\"color:#ff0000\">Users without any submission</h3><br />";
			  $sno=1;
			  $result = mysql_query("SELECT * FROM detail WHERE rank1=0 AND college=".$value."  ORDER BY handle");
			  echo "<table border=\"1\">
			  <tr>
			  <th>Sno.</th>
			  <th>Username</th>
			  <th>Name</th>
			  <th>Country</th>
			  <th>Global Rank </th>
			  <th>Country Rank </th>
			  </tr>";
			  while($row = mysql_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>" . $sno++. "</td>";
				  echo "<td><a id =\"template_main_ranking\" href='".$url . $row['handle'] ."' target=_blank>".$row['handle'] . "</a></td>";   
				echo "<td id=\"colortext\">" . $row['name'] . "</td>";
				echo "<td id=\"colortext\">" . $row['country'] . "</td>";
				echo "<td id=\"colortext\">" . $row['rank1'] . "</td>";
				echo "<td id=\"colortext\">" . $row['rank2'] . "</td>";
				echo "</tr>";
				}
			  echo "</table>";
			  
			  }
			 ?>


  
    	
	<!--<div id="template_main_top"></div>
		<div id="template_main">
			<div class="col_w900 col_w900_last">
				<div class="col_w580 float_l"></div>
				<div class="col_w280 float_r"></div>
			</div>
		</div>-->
		</div>	 <!-- end of wrapper -->
</div>
<div id="template_footer">
    	Copyright © 2014 Creative Coders - Designed by Team
    </div>
</body>
</html>
