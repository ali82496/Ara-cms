<?php 
    include('read_line_var.php')
?>
<?php 
echo '<style>
        /* The progress container (grey background) */
        .progress_container 
        {
            width: 100%;
            height: '.$read_line_height.';
            background: '.$read_line_background_color.';
            position: fixed;
            top: 0px;
            left: 0px;
        }

        /* The progress bar (scroll indicator) */
        .progress_bar 
        {
            height: '.$read_line_height.';
            background: '.$read_line_color.';
            width: 0%;
            position: fixed;
            top: 0px;
            left: 0px;
        }
    </style>';
?>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight _ document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
    } 
</script>
<div class="progress_container">
    <div class="progress_bar" id="myBar"></div>
</div>
