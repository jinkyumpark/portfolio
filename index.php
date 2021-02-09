<DOCTYPE html>
<head>
	<title>Mathematics at SBU</title>
	<link rel="stylesheet" href="mainpage.css">
	<h1 id="pageName"><a href="index.php">Mathematics at SBU</a></h1>
	<script src="https://ajax.googleapis.com/ajax/libs/d3js/6.5.0/d3.min.js"></script>
</head>

<body>
	<p>This place aims to store my undergraduate mathematics knowledge. It displays what courses I took over the colleage year, and list every <strong>axiom</strong>, <strong>definition</strong>, <strong>theorem</strong>, and <strong>proofs</strong>.</p>

	<div id="grid">
		<div>
	<ul>
		<h4>Computation Based</h4>
		<li><a href="index.php?id=MAT250">MAT 250: Foundation</a></li>
		<li><a href="index.php?id=CSE215">CSE 215: Discrete Math</a></li>
		<li><a href="index.php?id=MAT131">MAT 131: Calculus 1</a></li>
		<li><a href="index.php?id=MAT132">MAT 132: Calculus 2</a></li>
		<li><a href="index.php?id=MAT307">MAT 307: Calculus 3</a></li>
		<li><a href="index.php?id=MAT308">MAT 308: Calculus 4</a></li>

		<h4>Proof Based</h4>
		<li><a href="index.php?id=MAT319">MAT 319: Analysis</a></li>
		<li><a href="index.php?id=MAT310">MAT 310: Linear Algebra</a></li>
		<li><a href="index.php?id=MAT360">MAT 360: Geometry</a></li>
		<li><a href="index.php?id=MAT371">MAT 371: Logic</a></li>
		<li><a href="index.php?id=MAT322">MAT 322: Real Analysis</a></li>
		<li><a href="index.php?id=MAT342">MAT 342: Complex Analysis</a></li>
		<li><a href="index.php?id=MAT313">MAT 313: Abstract Algebra</a></li>


		<h4>Applied</h4>
		<li><a href="index.php?id=AMS102">AMS 102: Statistics</a></li>
		<li><a href="index.php?id=AMS301">AMS 301: Combinatorics</a></li>
		<li><a href="index.php?id=AMS310">AMS 310: Probability</a></li>
	</ul>
		</div>
		<div class="rightbox">

		<h3 id="subjectSelected">
			<?php
				echo $_GET['id'];
			?>
		</h3>

		<?php
		echo file_get_contents("data/".$_GET['id']);
		?>

		
		</div>

			<input id="night_day" type="button" value="D" onclick="
				var body = document.querySelector('body');
				if(this.value === 'D'){
				body.style.backgroundColor='rgb(40, 40, 40)';

				var subjects = document.querySelectorAll('a');
				var i = 0;
				while(i < links.length){
					links[i].style.color='white';
					i=i+1;
				}

				body.style.color='white';
				this.value = 'L';
				}else{
				body.style.backgroundColor='white';

				var subjects = document.querySelectorAll('a');
				var i = 0;
				while(i < links.length){
					links[i].style.color='black';
					i=i+1;
				}

				body.style.color='black';
				this.value = 'D';
				}
			">

	</div>
</body>
