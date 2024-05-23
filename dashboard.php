<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, 
				initial-scale=1.0">
	<title>rental</title>
	<link rel="stylesheet" href="dash.css">
	<link rel="stylesheet" href="responsive.css">
</head>

<body>

	<!-- for header part -->
	<header>





	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img" alt="dashboard">
						<h3> Dashboard</h3>
					</div>

					<div class="option2 nav-option">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img" alt="articles">
						<a href="car.html">
							<h3>Cars</h3>
						</a>
					</div>

					<div class="nav-option option3">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
							class="nav-img" alt="report">
						<a href="bike.html">
							<h3>Bikes</h3>
						</a>
					</div>

					<div class="nav-option option4">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
							class="nav-img" alt="institution">
						<a href="table.php">
							<h3>Bikes</h3>
						</a>
					</div>

					<div class="nav-option option5">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
							class="nav-img" alt="blog">
						<h3> Profile</h3>
					</div>

					<div class="nav-option logout">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
							class="nav-img" alt="logout">
						<a href=index.html>
							<h3>Logout</h3>
						</a>
					</div>

				</div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text" name="" id="" placeholder="Search">
				<div class="searchbtn">
					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
						class="icn srchicn" alt="search-button">
				</div>
			</div>

			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">5</h2>
						<h2 class="topic">Cars Available</h2>
					</div>

					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views">
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">2</h2>
						<h2 class="topic">Cars Booked</h2>
					</div>

					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="likes">
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">5</h2>
						<h2 class="topic">Bikes Available</h2>
					</div>

					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="comments">
				</div>

				<div class="box box4">
					<div class="text">
						<h2 class="topic-heading">1</h2>
						<h2 class="topic">Bikes Booked</h2>
					</div>

					<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
				</div>
			</div>

			<div class="report-container">
				<div class="report-header">
					<h1>Recent Booking</h1>
					<button class="view">View All</button>
				</div>



				<div class="items">
					<?php

					// Connect to the database
					$conn = mysqli_connect("localhost", "root", "", "test_db");

					// Get all booking details
					$sql = "SELECT Name, Phone, Vehicle, Amount, Date FROM package";
					$result = mysqli_query($conn, $sql);

					// Display the booking details in a div
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div class='item1'>";
						echo "  <h3>Name: " . $row["Name"] . "</h3>";
						echo "  <h3>Phone: " . $row["Phone"] . "</h3>";
						echo "  <h3>Vehicle: " . $row["Vehicle"] . "</h3>";
						echo "  <h3>Amount: " . $row["Amount"] . "</h3>";
						echo "  <h3>Date: " . $row["Date"] . "</h3>";
						echo "</div>";
					}

					// Close the database connection
					mysqli_close($conn);

					?>
				</div>
			</div>
		</div>

		<style>
			.item1 {
				border: 1px solid black;
				padding: 10px;
			}
		</style>



		<script src="dash.js"></script>

</body>

</html>