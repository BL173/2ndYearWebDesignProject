
<!DOCTYPE html>
<!-- Written by Brian Leahy 17372896 -->
<html lang = "en">

	<head>
		<meta charset= utf-8 />
		<title>Learn Violin Today</title>
		<link rel="stylesheet"  href="project.css"/>
	</head>
	
	<body class="main-background">
	
		<div class="header" id = "headerBar">
			<a href="project_main_page.html">Home</a>
			<a href="project_page2.html" title ="What to look for when buying a violin">The Instrument</a>
			<a href="project_page3.html" title ="Basic info and helpful videos">How To Play</a>
			<a class="active" href="project_page4.html">Test</a>
		</div>
		
		<p class = "textbox-background">
		<?php
			while(list ($key, $val) = each($_GET)){
				if($key == "q1"){
					echo "</br> Q1: ";
					if($val =="A"){
						echo "Correct!</br>";
					}else{
						echo "Incorrect!</br>";
					}
				}elseif($key == "q2"){
					echo "Q2: ";
					if($val =="C"){
						echo "Correct!</br>";
					}else{
						echo "Incorrect!</br>";
					}
				}elseif($key == "q3"){
					echo "Q3: ";
					if($val =="D"){
						echo "Correct!</br>";
					}else{
						echo "Incorrect!</br>";
					}
				}elseif($key =="Satisfaction"){
					echo "</br>".$key .": ". $val ."<br>";
					if($val <50){
						echo "Please let us know by email how we could improve your experience.";
					}else{
						echo "Thanks for your input!";
					}
				}else{
					echo $key .": ". $val ."<br>";
				}
			}
		?>
		</p>
		<script type="text/javascript" src="project.js"></script>
	</body>
	
</html>
