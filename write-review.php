<?php 
    $title = 'Write a Review'; // Title of Page
    include 'head.php';
    include 'nav.php';
?>

<!-- Styles -->
<link rel="stylesheet" href="main.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
    <?php include 'left-menu.php' ?>
        <div class="col-8">
            <h2>Write a Review</h2>
        <form action="submit-review.php" id="reviewSub" method="post">
            <div class="form-row pt-3">
                <div class="col">
                <label for="fname">Professor First Name</label>
                <input type="text" class="form-control" placeholder="e.g. John" name="fname" id="fname" required>
                </div> 
                <div class="col">
                <label for="fname">Professor Last Name</label>
                <input type="text" class="form-control" placeholder="e.g. Doe" name="lname" id="lname" required>
                </div>
            </div>
            <div class="form-row pt-3">
                <div class="col">
                <label for="course">Course Taken</label>
                <input type="text" class="form-control" placeholder="e.g. BPL 5100" name="course" id="course" required>
                </div> 
            </div>
            <div class="form-group pt-2">
                <label for="departmentControl">Department</label>
                <select class="form-control" id="departmentControl" name="department" required>
                    <?php
                    include 'config.php';
                    $sql = mysqli_query($conn, "SELECT dname FROM department ORDER BY dname ASC");
                    while ($row = $sql->fetch_assoc()){
                    echo "<option value='".$row['dname']."'>".$row['dname']."</option>";
                }
                ?>
                </select>
                <label class="pt-2">Write Your Review</label>
                <textarea class="form-control" form="reviewSub" name="review" rows="5" placeholder="Remember to read our Style Guide to ensure approval!" maxlength="3000" minlength="10" required></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
            <br />
           <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
        </div>
    </div>
</div>
</body>