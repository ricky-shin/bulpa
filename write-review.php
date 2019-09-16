<?php 
    $title = 'Write a Review'; // Title of Page
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
            <h2>Write a Review</h2>
        <form action="submit-review.php" method="post">
            <div class="form-row pt-3">
                <div class="col">
                <label for="fname">Professor First Name</label>
                <input type="text" class="form-control" placeholder="e.g. John" name="fname" id="fname">
                </div> 
                <div class="col">
                <label for="fname">Professor Last Name</label>
                <input type="text" class="form-control" placeholder="e.g. Doe" name="lname" id="lname">
                </div>
            </div>
            <div class="form-row pt-3">
                <div class="col">
                <label for="course">Course Taken</label>
                <input type="text" class="form-control" placeholder="e.g. BPL 5100" name="course" id="course">
                </div> 

            </div>
            <div class="form-group pt-2">
                <label for="departmentControl">Department</label>
                <select class="form-control" id="departmentControl" name="department">
                    <?php
                    include 'config.php';
                    $sql = mysqli_query($conn, "SELECT dname FROM department ORDER BY dname ASC");
                    while ($row = $sql->fetch_assoc()){
                    echo "<option value='".$row['dname']."'>".$row['dname']."</option>";
                }
                ?>

                </select>
            </div>
            <div class="form-group pt-2">
                <label for="review">Write Your Review</label>
                <textarea class="form-control" id="review" rows="5" placeholder="Remember to read our Style Guide to ensure approval!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</body>