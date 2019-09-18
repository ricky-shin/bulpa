<?php 
    $title = 'Moderate Reviews'; // Title of Page
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
                $query = "UPDATE `reviews` SET isApproved ='1' WHERE `reviews`.`id` = '" . $id . "'";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
                }
            ?>
        <script>window.location.href = "mod.php";</script>
        </div>
    </div>
</div>
</body>