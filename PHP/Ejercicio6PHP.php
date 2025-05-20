<html>
<head>
</head>
<body>
    <?php
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 10; $j++) {
        
        if($i ==0 && $j ==0){
            echo "<td> X </td>";
            
        } elseif($i ==0 && $j !=0){
            echo "<td> $j </td>";
        } elseif($i != 0 && $j ==0){
            echo "<td> $i </td>";
        }
        else{
            echo "<td>" . ($i * $j) . "</td>";
        }
        
    }
    echo "</tr>";
}
echo "</table>";
    ?>
</body>
</html>
