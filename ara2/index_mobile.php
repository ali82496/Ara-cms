<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ara</title>
    <style>

    body{
        margin: 0px;
    }

    /* Style the tab */
    
    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #fff;
      background-color: #fff;
      width: 4%;
      height: 100%;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 18px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      cursor: default;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #f0f0f0;
      color: #554fd8;
    }

    .tab button:hover::-moz-focus-inner {
      border: 0;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #e6e6e6;
      color: #554fd8;
      border-top: 5px solid #554fd8;
    }

    .tab button.active::-moz-focus-inner {
      border: 0;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 96%;
      border-left: none;
      height: 100%;
    }
    </style>
    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
</head>

<body>
    <!-- Tab links -->
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')">London</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
    </div>

    <!-- Tab content -->
    <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
</body>

</html>