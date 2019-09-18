<?php 
    $title = 'All Professors'; // Title of Page
    include 'head.php';
    include 'nav.php';
?>

<body>
<div id="app">
<div class="container pt-3">
    <div class="row">
    <?php include 'left-menu.php' ?>
        <div class="col-8">
        <div id="search_area">
            <input type="text" name="professor_search" id="professor_search" class="form-control input-lg" autocomplete="off" placeholder="Type Professor Name" />
        </div>
        <br />
        <div id="professor_data"></div>
        <script>
            $(document).ready(function(){
            
            load_data('');
            
            function load_data(query, typehead_search = 'yes')
            {
            $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{query:query, typehead_search:typehead_search},
            success:function(data)
            {
                $('#professor_data').html(data);
            }
            });
            }
            
            $('#professor_search').typeahead({
            source: function(query, result){
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{query:query},
                dataType:"json",
                success:function(data){
                result($.map(data, function(item){
                return item;
                }));
                load_data(query, 'yes');
                }
            });
            }
            });
            
            $(document).on('click', 'li', function(){
            var query = $(this).text();
            load_data(query);
            });
            
            });
        </script>
        </div>
    </div>
</div>
</body>