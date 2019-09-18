<?php 
    $title = 'Moderate Reviews'; // Title of Page
    include 'head.php'; 
    include 'nav.php';
?>
<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
<?php include 'left-menu.php' ?>
        <div class="col-8">
        <h2>Displaying Review</h2>
        <?php
                include 'config.php';

                $id = $_GET['id'];
                $id = mysqli_real_escape_string($conn,$id);
                $query = "SELECT `fname`, `lname`, `course`, `review`, `id`, UNIX_TIMESTAMP(`timestamp`) AS timestamp FROM `reviews` WHERE `id` = ' " . $id . " ' " ;
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
                echo '<br />Course: ';
                echo $row['course'];
                echo '
                </p>
                <p>
                ';
                echo $row['review'];
                echo '
                 <br /><a href="/review.php?id='.$row['id'].'">[Permalink]</a>
                 '; 
                echo '</p>';
                echo '</form>';
                echo '</div></div><br />';
                }
            ?>


        </div>
    </div>
</div>
</body>