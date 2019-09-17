<?php 
    $title = 'Course'; // Title of Page
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
            <?php
                include 'config.php';

                $id = $_GET['id'];
                $id = mysqli_real_escape_string($conn,$id);
                $query = "SELECT `fname`, `lname`, `course`, `review`, UNIX_TIMESTAMP(`timestamp`) AS timestamp FROM `reviews` WHERE course LIKE '" . $id . "' AND isApproved ='1' ORDER BY Timestamp DESC";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
                echo '
                <div class="card">
                <div class="card-body">
                <p style="text-align:right; font-style: italic;">Submitted:
                ';
                echo date("F j Y", $row['timestamp']);
                echo '
                </p>
                <p style="text-align:left; font-style: italic;">Professor: '; 
                echo $row['fname'];
                echo ' ';
                echo $row['lname'];
                echo '<p style="text-align:left; font-style: italic;">Course: ';
                echo $row['course'];
                echo '
                </p></p>
                <p>
                ';
                echo $row['review'];
                echo '</p>';
                echo '</div></div><br />';
                                //echo '<p style="text-align:left>';
                //echo $row['course'];
                //echo '</p>';
                }
            ?>
        </div>
    </div>
</div>
</body>