<?php 
    include('read-line-var.php')
?>
<?php 
echo '<style>
        /* The progress container (grey background) */
        .progress-container 
        {
            width: 100%;
            height: '.$read_line_height.';
            background: '.$read_line_background_color.';
            position: fixed;
            top: 0px;
            left: 0px;
        }

        /* The progress bar (scroll indicator) */
        .progress-bar 
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
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
    } 
</script>
<div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
</div>
