<?php 
    $title = 'Course Search'; // Title of Page
    include 'head.php';
    include 'nav.php';
?>

<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
    <?php include 'left-menu.php' ?>
        <div class="col-8">
        <h2>Course Search</h2>
        <br />
            <form method=get action="/course.php">
                <input class = "form-control" placeholder="Search a Course.. e.g. ENG 2850" type=text name=id value="" required>
                <br />
                <button type = "submit" class="btn btn-primary btn-lg btn-block" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>