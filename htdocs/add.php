<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #result {
            font-size: 24px;
            color: #007BFF;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST['x']) && isset($_POST['y'])) {
        $total = $_POST['x'] + $_POST['y'];
        echo '<div id="result">Total: ' . $total . '</div>';
    } else {
        echo '<div id="result">Empty</div>';
    }

    if (isset($_GET['x']) && isset($_GET['y'])) {
        $total = $_GET['x'] + $_GET['y'];
        echo '<div id="result">Total: ' . $total . '</div>';
    }
    ?>
</body>
</html>
