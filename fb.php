<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

    <header>

        <h1>FEEDBACKS</h1> 



    </header>
    <div class="report-container">
        <div class="report-header">
            <h1>Feedbacks</h1>
        </div>



        <div class="items">
            <?php

            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "test_db");

            // Get all feedback details
            $sql = "SELECT Feedback FROM feedback";
            $result = mysqli_query($conn, $sql);

            // Display the feedback details in a div
            while ($row = mysqli_fetch_assoc($result)) {
                if (isset($row["Feedback"])) {
                    echo "<div class='item1'>";
                    echo "  <h3>Feedback: " . $row["Feedback"] . "</h3>";
                    echo "</div>";
                }
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