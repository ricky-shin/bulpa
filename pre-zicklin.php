<?php 
    $title = 'Pre-Zicklin Courses'; // Title of Page
    include 'config.php'; 
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
        <h2>Pre-Zicklin Courses</h2>
        <br />
        <!--
            Baruch College Pre-Zicklin Requirements:
            COM 1010 Speech Communication
            ENG 2100 Writing I
            ENG 2150 Writing II
            ACC 2101 Principles of Accounting
            CIS 2200 Introduction to Information Systems and Technologies
            ECO 1001 Microeconomics
            ECO 1002 Macroeconomics
            LAW 1101 Fundamentals of Business Law
            Calculus - MTH 2205/2207/2610 (or equivalent)
            STA 2000 Business Statistics I
         -->
         <div class="list-group">
            <a href="/course.php?id=COM%201010" class="list-group-item list-group-item-action list-group-item-primary">COM 1010 - Speech Communication</a>
            <a href="/course.php?id=ENG%202100" class="list-group-item list-group-item-action list-group-item-primary">ENG 2100 - Writing I</a>
            <a href="/course.php?id=ENG%202150" class="list-group-item list-group-item-action list-group-item-primary">ENG 2150 - Writing II</a>
            <a href="/course.php?id=ACC%202101" class="list-group-item list-group-item-action list-group-item-primary">ACC 2101 - Principles of Accounting</a>
            <a href="/course.php?id=CIS%202200" class="list-group-item list-group-item-action list-group-item-primary">CIS &nbsp; 2200 - Introduction to Information Systems and Technologies</a>
            <a href="/course.php?id=ECO%201001" class="list-group-item list-group-item-action list-group-item-primary">ECO 1001 - Microeconomics</a>
            <a href="/course.php?id=ECO%201002" class="list-group-item list-group-item-action list-group-item-primary">ECO 1002 - Macroeconmics</a>
            <a href="/course.php?id=LAW%201101" class="list-group-item list-group-item-action list-group-item-primary">LAW 1101 - Fundamentals of Business Law</a>
            <a href="/course.php?id=STA%202000" class="list-group-item list-group-item-action list-group-item-primary">STA 2000 - Business Statistics I</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">MTH 2205 or 2207 or 2610 (see below)</a>
        </div> <br />
        <div class="list-group">
            <a href="/course.php?id=MTH%202205" class="list-group-item list-group-item-action list-group-item-primary">MTH 2205 – Precalculus and Elements of Calculus 1B</a>
            <a href="/course.php?id=MTH%202207" class="list-group-item list-group-item-action list-group-item-primary">MTH 2207 – Elements of Calculus I and Matrix Algebra</a>
            <a href="/course.php?id=MTH%202610" class="list-group-item list-group-item-action list-group-item-primary">MTH 2610 – Calculus I</a>
        </div> 
        <br />
        <p><i>Source: <a href="https://zicklin.baruch.cuny.edu/academic-programs/undergraduate/admissions/">Baruch College, Zicklin School of Business Eligibility and Admission Criteria</a></i></p>
        </div>
    </div>
</div>
</div>
</body>