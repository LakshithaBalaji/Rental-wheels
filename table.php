<!DOCTYPE html>
<html>

<head>
    <title>Vehicle Details</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $dbname = "test_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT Vehicle, Date, License FROM package WHERE Vehicle = '$_POST[vehicle]' AND Date = '$_POST[date]';";
    $result = mysqli_query($conn, $sql);
    $rowsnum = mysqli_num_rows($result);
    if ($rowsnum > 0) {
        ?>
        <table>
            <tr>
                <th>Vehicle</th>
                <th>Date</th>
                <th>License</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['Vehicle']; ?>
                    </td>
                    <td>
                        <?php echo $row['Date']; ?>
                    </td>
                    <td>
                        <?php echo $row['License']; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <p>No vehicle details found.</p>
    <?php } ?>
    <?php mysqli_close($conn); ?>
</body>

</html>