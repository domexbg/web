<html>
<head>
    <style>
        .bomb_button {
display: block;
color: #FFF;
font-size: 26px;
font-weight: 700;
text-align: center;

            font-size: 26px;
            height:50px;
            width: 150px;
            background: 
            url("http://www.clker.com/cliparts/6/0/8/8/1194984778367806500pill-button-seagreen_ben_01.svg") 
            no-repeat scroll center center / 100% auto transparent;
        }
    </style>
</head>
<body>

<form action="index.php" method="GET">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Country: 
    <select name="country">
        <option value="UK"> United Kingdom</option>
        <option value="BG">Bulgaria</option>
        <option value="US"> United States</option>
    </select><br/>
    <input class="bomb_button" type="submit" value="Send">
</form>

<?php
    echo "<pre>";
    echo print_r($_GET);
    echo "</pre>";
    echo "<p>You are " . $_GET["name"] . " from " . 
    $_GET["country"] . " and your e-mail is " . $_GET["email"]
    . "</p>";
?>

</body>
</html> 
