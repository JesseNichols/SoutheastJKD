<?php $version = '1.0.5'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="_images/icon_180.png">
    <link rel="apple-touch-icon" sizes="76x76" href="_images/icon_76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="_images/icon_120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="_images/icon_152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="_images/icon_167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="_images/icon_180.png">
    <title><?php echo $page_title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="_css/styles.css?v=<?php echo $version ?>">
    <?php include_once("_includes/analyticstracking.php") ?> 
</head>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["name"].value;
        var y = document.forms["myForm"]["address"].value;
        var z = document.forms["myForm"]["message"].value;
        if (x == null || x == "" || y == null || y == "" || z == null || z == "") {
            alert("Please fill out all required fields before you submit your message.");
            return false;
        }
    }
    function validateForm2() {
        var x = document.forms["myForm2"]["name"].value;
        var y = document.forms["myForm2"]["address"].value;
        var z = document.forms["myForm2"]["message"].value;
        if (x == null || x == "" || y == null || y == "" || z == null || z == "") {
            alert("Please fill out all required fields before you submit your message.");
            return false;
        }
    }
</script>