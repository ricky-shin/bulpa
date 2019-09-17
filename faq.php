<?php 
    $title = 'FAQ'; // Title of Page
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
            <p class="lead"><i>Frequently Asked Questions</i></p>
            <hr class="my-4">
            <h4>Who is this for?</h4>
            <p><a href="/index.php">bulpa</a> was created for students attending <a href="http://baruch.cuny.edu/">Baruch College</a>, in an effort to consolidate course and professor reviews found on multiple platforms.</p>    
            <h4>What kinda name is <i>bulpa</i> !?</h4>
            <p>I actually ripped it off from CULPA, which is Columbia Universtiy's professor review site.</p>
            <h4>Can I trust the reviews on this site?</h4>
            <p>You may have noticied reviews do not have contain any personally identifiable information by the submitter. Like anything you read on the Internet (unless properly sourced), take everything with a <i>grain of salt</i>.</p>
            <h4>Do you censor reviews? </h4>
            <p>I have no reason to censor any reviews. However, in an effort to display legitimate (or, seemingly legitimate) reviews, newly submitted reviews are subject to moderation. </p>
            <h4>How are you monetizing this site?</h4>
            <p>I'm not. This website was created as a side project, in fact you can find the source code on <a href="https://github.com/ricky-shin/bulpa">Github</a>.</p> 
            <h4>I am a Professor and some of the things about me are not true</h4>
            <p>Please e-mail me with the full text of the review and your name. I try my best to moderate all submissions but it's a one man show. <br />
            Fair Warning: the views expressed in the reviews on this site are those of submitters themselves, NOT of me. </p>
            <h4>Who are you?</h4>
            <p>I am currently a CIS student at Baruch College. You can read more about me <a href="https://www.rickyshin.com/about-me/">here</a>.</p>
            
        </div>
        </div>
    </div>
</div>
</body>