    <!DOCTYPE html>

<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bautista SA1</title>
</head>
<body>
    <h1 align = "center" padding = "10px"> Multiplication Table </h1>

    <table>
        <?php 
        for($row = 0; $row <= 10; $row++ ) {
            echo "<tr>";
            for($col = 0; $col <= 10; $col++ ) {
                $value = $row * $col;

                $evenBox = ($row + $col) % 2 == 0;
                $cellClass = $evenBox ? 'cell-even' : 'cell-odd';
                echo "<td class = '$cellClass'> $value </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>