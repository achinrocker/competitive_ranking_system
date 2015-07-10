<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Creative Coders</title>
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="template_wrapper">
	<div id="template_header">
    	
        <div id="site_title"><h1><a></a></h1></div>
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
    		
	
		<?php include_once "connect.php"; ?>
<?php include "files/college.php"; ?>	
<?php
#$_GET['force'] = NULL;
$value=$_COOKIE['College'];
#echo "College".$_COOKIE['College'];
$limit =159;
?>

			 <?php
				
				if($value==0)
				{
				echo '<div id="template_middle_subpage_livescore">';
				include "files/select-on-page.php";
				echo '</div>';
				}
				else if(!isset($_GET['c']))
				{
				echo '<div id="template_main_top"></div>
				<div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>';
				echo '<p><img src="college/'.$_COOKIE["Image"].'" width="100" height="100" align="left"/></p>
			<br /><h3 style="color:#000080;">&nbsp;&nbsp;&nbsp;&nbsp;'.mysql_real_escape_string($final[$_COOKIE["College"]][1]).'<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<a href="select.php">Remove</a>)</h3><br />';
				include "files/select_contest.php";
				
				echo '</div></div>';
				}
				else
				{
				$contest=$_GET['c'];
				$contest=strtolower(preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $contest));
				echo '<div id="template_middle_subpage_add">';
				echo '
			<p><img src="college/'.$_COOKIE["Image"].'" width="100" height="100" align="left"/></p> <h4><br />&nbsp;&nbsp;&nbsp;&nbsp;'.mysql_real_escape_string($final[$_COOKIE["College"]][1]).' (<a href="select.php">Remove</a>)</h4><br />';
				echo '			<br /><h3>Live score ranking of '.strtoupper($contest).'</h3><br />			  <h4>(<a href="livescore.php">Reset</a> | <a href="livescore.php?force=1&c='.$contest.'">View College Rankings</a>)</h4><br />';
				echo '</div>';
			  $sno=1;
$college=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $_COOKIE['College']);
#$college = '57';
#echo "College ".$college;
if(isset($_GET['force']))
{
//echo $final[57][0];
echo '<div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>';
echo '<table border="1"><tr><th>College Rank</th><th>College</th><th>Avg. Score</th></tr>';
	
	$sql = 'SELECT detail.college,avg('.$contest.'.score) as av FROM detail,'.$contest.' WHERE detail.handle='.$contest.'.handle GROUP BY detail.college ORDER BY avg('.$contest.'.score) desc';
		//problem below;
		if($resultview=mysql_query($sql)){
		/*$q1="SELECT avg(college.score) from college";
			if($resultscore=mysql_query($q1)){
			$result=mysql_fetch_assoc($resultscore);
			echo '<tr><td>'.$final[$x][0].'</td><td>'.$result[0].'</td></tr>';
		}else{
			echo 'cannot be selected';
		}
		$sql1="DROP VIEW college";
			$resultsql1=mysql_query($sql1);*/
			$x=1;
		while($result=mysql_fetch_array($resultview)){
			$formattedNum = number_format($result["av"], 2);
			if($_COOKIE['Name']==$final[$result["college"]][0]){
				echo "<tr id=\"colortext\"><td>".$x."</td><td><b><i>".$final[$result["college"]][1]."</i></b></td><td><b><i>".$formattedNum."</i></b></td></tr>";
			}else{
				echo "<tr id=\"colortext\"><td>".$x."</td><td>".$final[$result["college"]][1]."</td><td>".$formattedNum."</td></tr>";
			}	
			$x++;
		}
		/*$num=count($result);
		echo $num;
		//echo 'Sum is'.$sum;
		$avg=$sum/$num;
		echo '<tr><td>'.$final[$x][0].'</td><td>'.$avg.'</td></tr>';*/
		/*else{
			echo 'wrong query.';
			break;
		}*/
		}else{
			echo 'query false';
		}
		
		echo '</table>';
		echo '</div>	
					</div>';
	}
	/*echo $final[];
	$clgscore = 'SELECT '.$contest.'.score FROM detail,'.$contest.' WHERE detail.college='.$x.' AND detail.handle='.$contest.'.handle';
	//$q = 'SELECT '. 'AVG(dscore) ;
	$resultscore = mysql_query($q);*/
	
	//echo $final[$x][0].'   '.$avg;


if(!isset($_GET['force']))
{
				$q= 'SELECT detail.name,detail.rank1,detail.rank3,detail.handle,detail.country,'.$contest.'.score,'.$contest.'.rank FROM detail,'.$contest.' WHERE detail.college='.$college.' AND detail.handle='.$contest.'.handle ORDER BY '.$contest.'.score desc';
				$result = mysql_query($q);
				echo '<div id="template_main_top"></div>
				<div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>';
			  echo "<table border=\"1\">
			  <tr>";
			  echo "<th>College Rank</th>";
			  echo "
			  <th>Username</th>
			  <th>Overall Rank</th>
			  <th>Name</th>
			  <th>Country</th>
			  <th>Score</th>

			  </tr>";
			$change=0;
				 $url="http://www.codechef.com/users/";

			  while($row = mysql_fetch_array($result))
				{
				echo "<tr>";
				$q= 'SELECT count(*)+1 FROM detail,'.$contest.' WHERE detail.handle='.$contest.'.handle AND  detail.college='.$college.' AND  score>'.$row['score'];
				$result2=mysql_query($q);
				$count = mysql_fetch_array($result2);

				echo "<td id=\"colortext\" align=\"center\">" . $count[0]. "</td>";
				echo "<td><a id=\"template_main_ranking\"href='".$url . $row['handle'] ."' target=_blank>".$row['handle'] . "</a></td>"; 
				echo "<td id=\"colortext\">".$row['rank']."</td>";
				echo "<td id=\"colortext\">" . $row['name'] . "</td>";
				echo "<td id=\"colortext\">" . $row['country'] . "</td>";
				echo "<td id=\"colortext\">" . $row['score'] . "</td>";

				echo "</tr>";
				}
			  echo "</table>";
			  echo '</div>	
					</div>';
			  }
			  }
			  
			 ?>

	
	
             
       <div id="template_footer">
    	Copyright © 2014 Creative Coders - Designed by Team
    </div>         
</body>
</html>
