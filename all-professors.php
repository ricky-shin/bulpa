<?php 
    include 'config.php'; 
    include 'head.php';
    include 'nav.php';
?>

<!-- Styles -->
<link rel="stylesheet" href="main.css">
</head>
<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
    <?php include 'left-menu.php' ?>
        <div class="col-9">
<?php
$sql = "SELECT * FROM professors";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<thead><table class=\"table table-striped table-bordered table-hover\"><tr><th scope=\"col\">Professor ID</th><th scope=\"col\">First Name</th><th scope=\"col\">Last Name</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td> ".$row["lname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
        </div>
    </div>
</div>
</body>