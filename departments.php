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
        <div class="col-8">
        <h2>Departments</h2>
        <br />
<?php
// $query = "SELECT * FROM department ORDER BY dname ASC";

$query = "SELECT s.dname,COUNT(*) AS num_prof 
FROM professors p 
inner Join department s on s.ID = p.department 
GROUP BY s.dname ORDER BY num_prof ASC;";


$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<thead><table class=\"table table-striped table-bordered table-hover\"><tr><th scope=\"col\">Departments</th><th scope=\"col\"># of Professors Reviewed</th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["dname"]."</td><td>".$row["num_prof"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No Results! (for some reason.. please contact me 😬)";
}
$conn->close();
?>
        </div>
    </div>
</div>
</body>