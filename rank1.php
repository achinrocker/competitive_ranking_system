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
	<h4><a href="update_rank.php">Back</a></h4>
        <?php
	include 'connect.php';
	ob_start();
	session_start();
	$q1=$_POST['ques1'];
	$q2=$_POST['ques2'];
	$q3=$_POST['ques3'];
	$q4=$_POST['ques4'];
	$q5=$_POST['ques5'];
	$q6=$_POST['ques6'];
	$q7=$_POST['ques7'];
	$q8=$_POST['ques8'];
	$q9=$_POST['ques9'];
	$q10=$_POST['ques10'];
	$q11=$_POST['ques11'];
	/*$sum=0;
	for($x=1;$x<=11;$x++){
		$sum+=$_POST['ques'.$x.''];
	}*/
	$user=$_SESSION['User'];
	$contest=$_SESSION['Contest'];
	/*$q="UPDATE ".$contest." SET score='$sum' WHERE handle='$user'";
	if($run=mysql_query($q)){
		echo '<br />'.$sum;
	}else{
		echo mysql_error();
	}*/
	$q="SELECT score FROM ".$contest." WHERE ".$contest.".handle='$user'";
	if($run=mysql_query($q)){
		while($runq=mysql_fetch_array($run)){
			$score=$runq['score'];
		}
	}else{
		echo mysql_error();
	}
	if($q1!=0){
		$query1="SELECT ques1 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run1=mysql_query($query1)){
			while($qrun=mysql_fetch_array($run1)){
				$ques1=$qrun['ques1'];
				if($ques1==0){
					$query11="UPDATE ".$contest." SET ques1='1' WHERE handle='$user'";
					if($run11=mysql_query($query11)){
						echo '<br /> Ques1 updated succesfully.';
						$score+=$q1;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q2!=0){
		$query2="SELECT ques2 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run2=mysql_query($query2)){
			while($qrun=mysql_fetch_array($run2)){
				$ques2=$qrun['ques2'];
				if($ques2==0){
					$query22="UPDATE ".$contest." SET ques2='1' WHERE handle='$user'";
					if($run22=mysql_query($query22)){
						echo '<br /> Ques2 updated succesfully.';
						$score+=$q2;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q3!=0){
		$query3="SELECT ques3 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run3=mysql_query($query3)){
			while($qrun=mysql_fetch_array($run3)){
				$ques3=$qrun['ques3'];
				if($ques3==0){
					$query33="UPDATE ".$contest." SET ques3='1' WHERE handle='$user'";
					if($run33=mysql_query($query33)){
						echo '<br /> Ques3 updated succesfully.';
						$score+=$q3;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q4!=0){
		$query4="SELECT ques4 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run4=mysql_query($query4)){
			while($qrun=mysql_fetch_array($run4)){
				$ques4=$qrun['ques4'];
				if($ques4==0){
					$query44="UPDATE ".$contest." SET ques4='1' WHERE handle='$user'";
					if($run44=mysql_query($query44)){
						echo '<br /> Ques4 updated succesfully.';
						$score+=$q4;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q5!=0){
		$query5="SELECT ques5 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run5=mysql_query($query5)){
			while($qrun=mysql_fetch_array($run5)){
				$ques5=$qrun['ques5'];
				if($ques5==0){
					$query55="UPDATE ".$contest." SET ques5='1' WHERE handle='$user'";
					if($run55=mysql_query($query55)){
						echo '<br /> Ques5 updated succesfully.';
						$score+=$q5;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q6!=0){
		$query6="SELECT ques6 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run6=mysql_query($query6)){
			while($qrun=mysql_fetch_array($run6)){
				$ques6=$qrun['ques6'];
				if($ques6==0){
					$query66="UPDATE ".$contest." SET ques6='1' WHERE handle='$user'";
					if($run66=mysql_query($query66)){
						echo '<br /> Ques6 updated succesfully.';
						$score+=$q6;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q7!=0){
		$query7="SELECT ques7 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run7=mysql_query($query7)){
			while($qrun=mysql_fetch_array($run7)){
				$ques7=$qrun['ques7'];
				if($ques7==0){
					$query77="UPDATE ".$contest." SET ques7='1' WHERE handle='$user'";
					if($run77=mysql_query($query77)){
						echo '<br /> Ques7 updated succesfully.';
						$score+=$q7;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q8!=0){
		$query8="SELECT ques8 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run8=mysql_query($query8)){
			while($qrun=mysql_fetch_array($run8)){
				$ques8=$qrun['ques8'];
				if($ques8==0){
					$query88="UPDATE ".$contest." SET ques8='1' WHERE handle='$user'";
					if($run88=mysql_query($query88)){
						echo '<br /> Ques8 updated succesfully.';
						$score+=$q8;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q9!=0){
		$query9="SELECT ques9 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run9=mysql_query($query9)){
			while($qrun=mysql_fetch_array($run9)){
				$ques9=$qrun['ques9'];
				if($ques9==0){
					$query99="UPDATE ".$contest." SET ques9='1' WHERE handle='$user'";
					if($run99=mysql_query($query99)){
						echo '<br /> Ques9 updated succesfully.';
						$score+=$q9;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q10!=0){
		$query10="SELECT ques10 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run10=mysql_query($query10)){
			while($qrun=mysql_fetch_array($run10)){
				$ques10=$qrun['ques10'];
				if($ques10==0){
					$query1010="UPDATE ".$contest." SET ques10='1' WHERE handle='$user'";
					if($run1010=mysql_query($query1010)){
						echo '<br /> Ques10 updated succesfully.';
						$score+=$q10;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	if($q11!=0){
		$query11="SELECT ques11 FROM ".$contest." WHERE ".$contest.".handle='$user'";
		if($run11=mysql_query($query11)){
			while($qrun=mysql_fetch_array($run11)){
				$ques11=$qrun['ques11'];
				if($ques11==0){
					$query1111="UPDATE ".$contest." SET ques11='1' WHERE handle='$user'";
					if($run1111=mysql_query($query1111)){
						echo '<br /> Ques11 updated succesfully.';
						$score+=$q11;
					}else{
						echo mysql_error();
					}
				}
			}
		}else{
			echo mysql_error();
		}
	}
	$qscore="UPDATE ".$contest." SET score='$score' WHERE handle='$user'";
	if($runscore=mysql_query($qscore)){
		echo '<br /> Score updated succesfully.';
	}else{
		echo mysql_error();
	}
	$qrank="SELECT rank FROM ".$contest." WHERE ".$contest.".handle='$user'";
	if($runrank=mysql_query($qrank)){
		while($row=mysql_fetch_array($runrank)){
			$rankprev=$row['rank'];
			#echo $rankprev;
		}
	}else{
		echo mysql_error();
	}
	$qr="SELECT rank FROM ".$contest." WHERE score<'$score' ORDER BY rank";
	if($run=mysql_query($qr)){
		while($r=mysql_fetch_array($run)){
			$rankupto=$r['rank'];
			break;
		}
	}else{
		echo mysql_error();
	}
	$rankfinal=$rankupto;
	#echo $rankupto;
	$qcheck="SELECT rank FROM ".$contest." WHERE rank>='$rankupto' AND rank<='$rankprev' ORDER BY rank desc";
	if($qcheckrun=mysql_query($qcheck)){
		while($qrow=mysql_fetch_array($qcheckrun)){
			$rank=$qrow['rank'];
			#echo $rank.'<br />';
			$k=$rank+1;
			$up="UPDATE ".$contest." SET rank='$k' WHERE rank='$rank'";
			if($uprun=mysql_query($up)){
			}else{
				echo mysql_error();
			}
		}
	}else{
		echo mysql_error();
	}
	$p=$rankprev+1;
	$fin="UPDATE ".$contest." SET rank='$rankfinal' WHERE rank='$p' AND handle='$user'";
	if($finrun=mysql_query($fin)){
			}else{
				echo mysql_error();
			}
?>
    </div>
		<?php include_once "connect.php"; ?>
    <div id="template_footer">
    		Copyright © 2014 Creative Coders - Designed by Team
    </div> <!-- end of footer -->     
	</div>
</body>
</html>