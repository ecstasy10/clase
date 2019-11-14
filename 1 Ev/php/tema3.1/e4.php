<html>
<head>
<title>As o no</title>
</head>
<body>
    
    <h1><b>As o No</b></h1>

    <?php
    
    $a = rand(1, 6);

    echo "has sacado un $a";

    if ($a == 1)
    {
        echo "<br><brEs un as!!!<br><br>";
        echo "<img src = \"dados\dado$a.jpg \"/>";
    }
    else 
    echo "<br><br><img src = \"dados\dado$a.jpg \"/>";

    ?>

</body>
</html>