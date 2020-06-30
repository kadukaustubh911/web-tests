<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"/>
    <title>PCBLDR</title>
</head>
<body>
    <script src="js/gsap.min.js"></script>
    <script src="js/app.js"></script>
	
    <header>
        <nav>
            <h1 id="logo"><a href="../index.html">PCBLDR</a></h1>
        </nav>
	</header>
	
    <section>
        <div class="hero">
            <div class="php">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "ubxchbk823#@!";
				$dbname = "pcbldr";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				if ($_GET['config']=='config1') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 0,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config2') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 3,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config3') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 6,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config4') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 9,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config5') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 12,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config6') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 15,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config7') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 18,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config8') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 21,3";
					$result = $conn->query($sql);
				}elseif ($_GET['config']=='config9') {
					$sql = "SELECT parts_id, pc_name, price FROM configs limit 24,3";
					$result = $conn->query($sql);
				}
				if ($result->num_rows > 0) {
				  // output data of each row
				  if ($_GET['config']=='config1'){
					  $a=101;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config2'){
					  $a=201;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config3'){
					  $a=301;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config4'){
					  $a=401;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config5'){
					  $a=501;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config6'){
					  $a=601;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config7'){
					  $a=701;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config8'){
					  $a=801;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;
						}
				  }elseif ($_GET['config']=='config9'){
					  $a=901;
					  while($row = $result->fetch_assoc()) {
						  echo "<h4>"."<a href='yourBuild.php?build=". $a ."'>"."PC name: ".$row["pc_name"]."<br>"."Price: ".$row["price"]."</a>"."</h4>"."<br>";
						  $a++;  
					  }
				  }
				} else {
					echo "0 results";
				}
				$conn->close();
				?>
			</div>
        </div>
    </section>
	
	<footer>
		&copy PCBLDR 2020.
	</footer>
</body>
</html>