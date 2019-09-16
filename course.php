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

                if ($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
                } 
                $id = $_GET['id'];
                $id = mysqli_real_escape_string($conn,$id);
                $query = "SELECT `fname`, `lname`, `course`, `review`, UNIX_TIMESTAMP(`timestamp`) as timestamp FROM `reviews` where course LIKE '" . $id . "' ORDER BY Timestamp DESC";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
                echo '
                <div class="card">
                <div class="card-body">
                <p style="text-align:right; font-style: italic;">
                ';
                echo date("F j Y", $row['timestamp']);
                echo '
                </p>
                <p style="text-align:left; font-style: italic;">Professor: '; 
                echo $row['fname'];
                echo ' ';
                echo $row['lname'];
                echo '
                </p>
                <p>
                ';
                echo $row['review'];
                //echo '</p>';
                //echo '<p style="text-align:left>';
                //echo $row['course'];
                //echo '</p>';
                echo '</div></div><br />';
                
                }
            ?>
            <!--
            <div class="card">
                <div class="card-body">
                <p style="text-align:right; font-style: italic;">September 14th, 2019</p>
                <p>
                Hes nice and super passionate about literature, but his classes will drag on as he gets into tangents about biology and Greek mythology. Not a bad class if you enjoy lectures, but I zoned out most classes. Only 2 papers (5-7 pages) and 1 in-class writing assignment. Doesn't return assignments or give feedback. Good choice if you like English.
                </p>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-body">
                <p style="text-align:right; font-style: italic;">September 12th, 2019</p>
                <p>
                The syllabus is not true about grading. No matter you participate or not, you final grade is just what you get for the paper. My friend and I got the same grade for the paper but I usually participated while she didn't. It turned out we still got the same final grade. It's just sad to know that the hours for class preparation were spent in vain.
                </p>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-body">
                <p style="text-align:right; font-style: italic;">September 10th, 2019</p>
                <p>
                He talks too much. When he goes on a topic, he doesnt stop talking about it. The course schedule lol jokes. We didnt even go by that since he talks about the same thing for a whole month. Two papers only (5-7 pages each). He gives it back like a month later too. But if you can sit and just listen go for it.                </p>
                </div>
            </div>
              -->
        </div>
    </div>
</div>
</body>