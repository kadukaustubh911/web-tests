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
				$conn = new mysqli($servername, $username, $password, $dbname);
				
					switch ($_GET['build']) {
						case "101":
							$sql = "SELECT * FROM configs where parts_id='H0101'";
							break;
						case "102":
							$sql = "SELECT * FROM configs where parts_id='H0102'";
							break;
						case "103":
							$sql = "SELECT * FROM configs where parts_id='H0103'";
							break;
						case "201":
							$sql = "SELECT * FROM configs where parts_id='H0201'";
							break;
						case "202":
							$sql = "SELECT * FROM configs where parts_id='H0202'";
							break;
						case "203":
							$sql = "SELECT * FROM configs where parts_id='H0203'";
							break;
						case "301":
							$sql = "SELECT * FROM configs where parts_id='H0301'";
							break;
						case "302":
							$sql = "SELECT * FROM configs where parts_id='H0302'";
							break;
						case "303":
							$sql = "SELECT * FROM configs where parts_id='H0303'";
							break;
						case "401":
							$sql = "SELECT * FROM configs where parts_id='G0101'";
							break;
						case "402":
							$sql = "SELECT * FROM configs where parts_id='G0102'";
							break;
						case "403":
							$sql = "SELECT * FROM configs where parts_id='G0103'";
							break;
						case "501":
							$sql = "SELECT * FROM configs where parts_id='G0201'";
							break;
						case "502":
							$sql = "SELECT * FROM configs where parts_id='G0202'";
							break;
						case "503":
							$sql = "SELECT * FROM configs where parts_id='G0203'";
							break;
						case "601";
							$sql = "SELECT * FROM configs where parts_id='G0301'";
							break;
						case "602":
							$sql = "SELECT * FROM configs where parts_id='G0302'";
							break;
						case "603":
							$sql = "SELECT * FROM configs where parts_id='G0303'";
							break;
						case "701":
							$sql = "SELECT * FROM configs where parts_id='W0101'";
							break;
						case "702":
							$sql = "SELECT * FROM configs where parts_id='W0102'";
							break;
						case "703":
							$sql = "SELECT * FROM configs where parts_id='W0103'";
							break;
						case "801":
							$sql = "SELECT * FROM configs where parts_id='W0201'";
							break;
						case "802":
							$sql = "SELECT * FROM configs where parts_id='W0202'";
							break;
						case "803":
							$sql = "SELECT * FROM configs where parts_id='W0203'";
							break;
						case "901":
							$sql = "SELECT * FROM configs where parts_id='W0301'";
							break;
						case "902":
							$sql = "SELECT * FROM configs where parts_id='W0302'";
							break;
						case "903":
							$sql = "SELECT * FROM configs where parts_id='W0303'";
							break;
						default:
							echo " ";
					}
					
					$result = $conn->query($sql);
					while ($row = $result->fetch_assoc()) {
						echo "<h4>"."PC name: ".$row["pc_name"]."<br>"."Cabinet: ".$row["cabinet"]."<br>"."Processor: ".$row["cpu"]."<br>"."Motherboard: ".$row["mboard"]."<br>"."Graphics card: ".$row["gpu"]."<br>"."Power supply: ".$row["psu"]."<br>"."Storage: ".$row["storage"]."<br>"."RAM: ".$row["ram"]."<br>"."Display: ".$row["display"]."<br>"."Peripherals: ".$row["peripherals"]."<br>"."Price: ".$row["price"]."</h4>"."<br>";
					}
				?>
			</div>
        </div>
    </section>
	
	<footer>
		&copy PCBLDR 2020.
	</footer>
</body>
</html>