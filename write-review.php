<?php 
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
        <form>
            <div class="form-row pt-3">
                <div class="col">
                <label for="fname">Professor First Name</label>
                <input type="text" class="form-control" placeholder="e.g. John" id="fname">
                </div> 
                <div class="col">
                <label for="fname">Professor Last Name</label>
                <input type="text" class="form-control" placeholder="e.g. Doe" id="lname">
                </div>
            </div>
            <div class="form-row pt-3">
                <div class="col">
                <label for="course">Course Taken</label>
                <input type="text" class="form-control" placeholder="e.g. BPL 5100" id="course">
                </div> 

            </div>
            <div class="form-group pt-2">
                <label for="departmentControl">Department</label>
                <select class="form-control" id="departmentControl">
                    <?php
                        include 'config.php';

                    $sql = mysqli_query($conn, "SELECT dname FROM department ORDER BY dname ASC");
                    while ($row = $sql->fetch_assoc()){
                    echo "<option value=\"departmentControl1\">" . $row['dname'] . "</option>";
                }
?>
                </select>
            </div>
            <div class="form-group pt-2">
                <label for="FormReviewarea1">Write Your Review</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Remember to read our Style Guide to ensure approval!"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</body>