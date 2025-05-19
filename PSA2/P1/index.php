<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Converter</title>
</head>

<?php 
$units = [
    'Millimetre' => 0.001,
    'Centimetre' => 0.01,
    'Decimetre'  => 0.1,
    'Metre'      => 1,
    'Kilometre'  => 1000,
    'Inch'       => 0.0254,
    'Foot'       => 0.3048,
    'Yard'       => 0.9144,
    'Chain'      => 20.1168,
    'Furlong'    => 201.168,
    'Mile'       => 1609.344
];

$fromValue = 0;
$toValue = 0;
$fromUnit = 'Millimetre';
$toUnit = 'Inch';
$formula = '';

if (isset($_POST['convert'])) {
    $fromValue = $_POST['fromValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];

    if ($fromUnit == $toUnit) {
        $toValue = $fromValue;
        $formula = "no conversion needed";
    } else {
        $toValue = $fromValue * $units[$fromUnit] / $units[$toUnit];
        $factor = $units[$fromUnit] / $units[$toUnit];
        $formula = $factor < 1
            ? "divide the length value by " . number_format(1 / $factor, 2)
            : "multiply the length value by " . number_format($factor, 2);
    }
}
?>

<body>
    <div class="converter">
        <h2>Length Converter</h2>

        <form method="post" action="">
            <div class="conversion-row">
                <div class="input-unit">
                    <input type="number" step="any" name="fromValue" value="<?php echo $fromValue; ?>" required>
                    <select name="fromUnit">
                        <?php foreach ($units as $unit => $value): ?>
                            <option value="<?php echo $unit; ?>" <?php if($fromUnit == $unit) echo "selected"; ?>>
                                <?php echo $unit; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <span class="equals">=</span>

                <div class="input-unit">
                    <input type="text" value="<?php echo number_format($toValue, 5); ?>" readonly>
                    <select name="toUnit">
                        <?php foreach ($units as $unit => $value): ?>
                            <option value="<?php echo $unit; ?>" <?php if($toUnit == $unit) echo "selected"; ?>>
                                <?php echo $unit; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <?php if (!empty($formula)): ?>
                <div class="formula">Formula: <?php echo $formula; ?></div>
            <?php endif; ?>

            <button type="submit" name="convert">Convert</button>
        </form>
    </div>
</body>
</html>
