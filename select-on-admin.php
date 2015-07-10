<?php
		session_start();
		if(!isset($_SESSION['Admin'])){
			echo '<div id="template_middle_subpage_index">
			<form action="selectadmin.php" method="POST" style="margin:10px" id="select_college">
			&nbsp;ADMIN:&nbsp;&nbsp;<input type="text" class="inputs" name="admin" pattern="[a-zA-Z0-9]+" oninvalid="setCustomValidity("Please enter only AlphaNumerics ")" onchange="try{setCustomValidity("")}catch(e){}" "/>
			<br /><br />Password:<input type="password" name="pword" class="inputs"><br /><br />
			<input type="submit" value="log in" id="submitbutton">
			</form>
			</div>
		';
		}else{
			echo '<div id="template_main_top"></div><div id="template_main">
					<div class="col_w900 col_w900_last">
						<div class="col_w580 float_l"></div>
						<div class="col_w280 float_r"></div>
			<h4>'.mysql_real_escape_string($_SESSION["Admin"]).'(<a href="selectadmin.php?remove=logout">Logout</a>)</h4>
			<h3 style="color:#ff0000">To Update the Organization of a User</h3><a href="update_user.php"><img src="img/update_user.png"></a><br />
			<h3 style="color:#ff0000">To Update the Ranking Of a User</h3><a href="update_rank.php"><img src="img/update_rank.png"></a><br />
			<h3 style="color:#ff0000">To Delete a User</h3><a href="delete.php"><img src="img/users_delete.png"></a><br />
			</div></div>
		';
		}
?>