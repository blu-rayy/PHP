<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Digit List</title>
</head>


<body>
     <div class="box">
        <h2 style="text-align: center;">Two-Digit Decimal Combinations</h2>
        <p>
            <?php
            for ($i = 0; $i < 100; $i++) {
                echo sprintf("%02d", $i);

                if ($i < 99) {
                    echo ", ";
                }
            }
            ?>
        </p>
    </div>
</body>
</html>