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
            <br />
        <h2>Displaying All Pending Reviews</h2>
        <?php
                include 'config.php';

                $id = $_GET['id'];
                $id = mysqli_real_escape_string($conn,$id);
                $query = "SELECT `fname`, `lname`, `course`, `review`, `id`, UNIX_TIMESTAMP(`timestamp`) AS timestamp FROM `reviews` WHERE isApproved ='0' ORDER BY Timestamp ASC";
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
                echo '<br />Review ID: ';
                echo $row['id'];
                echo '
                </p>
                <p>
                ';
                echo $row['review'];
                echo '</p>';
                echo '    
                <form method="POST" action="/mod-approve.php?id='.$row['id'].'"><input type="submit" name="nw_update" value="Approve"
                '; 
                echo '\'"/>';

                echo '</form>';
                echo '</div></div><br />';
                }
            ?>


        </div>
    </div>
</div>
</body>