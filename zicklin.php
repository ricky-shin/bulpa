<?php 
    $title = 'Zicklin Courses'; // Title of Page
    include 'config.php'; 
    include 'head.php';
    include 'nav.php';

?>
<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
    <?php include 'left-menu.php' ?>
        <div class="col-8">
        <h2>Zicklin Courses</h2>
        <br />
         <div class="list-group">
            <a href="/course.php?id=ACC%202101" class="list-group-item list-group-item-action list-group-item-primary">ACC 2101 - Principles of Accounting</a>
            <a href="/course.php?id=CIS%202200" class="list-group-item list-group-item-action list-group-item-primary">CIS &nbsp; 2200 - Introduction to Information Systems and Technologies</a>
            <a href="/course.php?id=LAW%201101" class="list-group-item list-group-item-action list-group-item-primary">LAW 1101 - Fundamentals of Business Law</a>
            <a href="/course.php?id=BPL%205100" class="list-group-item list-group-item-action list-group-item-primary">BPL 5100 - Business Policy</a>
            <a href="/course.php?id=BUS%201011" class="list-group-item list-group-item-action list-group-item-primary">BUS 1011 - Business Fundamentals: The Contemporary Business Landscape</a>
            <a href="/course.php?id=FIN%203000" class="list-group-item list-group-item-action list-group-item-primary">FIN 3000 - Principles of Finance</a>
            <a href="/course.php?id=MGT%203120" class="list-group-item list-group-item-action list-group-item-primary">MGT 3120 - Fundamentals of Management</a>
            <a href="/course.php?id=MGT%203121" class="list-group-item list-group-item-action list-group-item-primary">MGT 3121 - Service Operations Management</a>
            <a href="/course.php?id=MKT%203000" class="list-group-item list-group-item-action list-group-item-primary">MKT 3000 - Marketing Foundations</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">ACC 2203 or 3202 (see below)</a>
        </div> <br />
        <div class="list-group">
            <a href="/course.php?id=ACC%202203" class="list-group-item list-group-item-action list-group-item-primary">ACC 2203 – Principles of Managerial Accounting (for Non-accounting Majors)</a>
            <a href="/course.php?id=ACC%203202" class="list-group-item list-group-item-action list-group-item-primary">ACC 3202 – Accounting Information Systems (for Accounting Majors)</a>
        </div> 
        <br />
        <p><i>Source: <a href="https://zicklin.baruch.cuny.edu/academic-programs/undergraduate/curriculum/">Baruch College, Zicklin School of Business Curriculum</a></i></p>
        </div>
    </div>
</div>
</body>