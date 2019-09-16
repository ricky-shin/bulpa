<?php 
    $title = 'Failed!'; // Title of Page
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
        <div class="jumbotron">
            <h1 class="display-4">Something Went Wrong!</h1>
            <p>Your review has not been submitted.</p>
            <p>Either you're a bot.. or you forgot to check the reCAPTCHA!</p>
             </div>
        </div>
    </div>
</div>
</body>