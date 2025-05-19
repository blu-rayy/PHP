<!DOCTYPE html>
<html>
<head>
    <title>Grade Ranking System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>Grade Ranking System</h1>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <label>Name</label>
            <input type="text" name="name" required placeholder="Enter your name">
        </div>

        <div class="form-row">
            <label>Grade</label>
            <input type="number" name="grade" required placeholder="Enter your grade" min="0" max="100">
        </div>

        <div class="form-row">
            <label>Picture</label>
            <input type="file" name="picture" accept="image/*">
        </div>

        <button type="submit" name="submit">Submit Information</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $grade = (int)$_POST['grade'];
        $rank = '';
        $imagePath = '';

        // Determine rank
        if ($grade >= 93 && $grade <= 100) {
            $rank = 'A';
        } elseif ($grade >= 90) {
            $rank = 'A-';
        } elseif ($grade >= 87) {
            $rank = 'B+';
        } elseif ($grade >= 83) {
            $rank = 'B';
        } elseif ($grade >= 80) {
            $rank = 'B-';
        } elseif ($grade >= 77) {
            $rank = 'C+';
        } elseif ($grade >= 73) {
            $rank = 'C';
        } elseif ($grade >= 70) {
            $rank = 'C-';
        } elseif ($grade >= 67) {
            $rank = 'D+';
        } elseif ($grade >= 63) {
            $rank = 'D';
        } elseif ($grade >= 60) {
            $rank = 'D-';
        } else {
            $rank = 'F';
        }

        // Handle image upload
        if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
            $imgTmp = $_FILES['picture']['tmp_name'];
            $imgName = basename($_FILES['picture']['name']);
            $uploadDir = 'uploads/';
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir);
            }
            $imagePath = $uploadDir . $imgName;
            move_uploaded_file($imgTmp, $imagePath);
        }

        echo "<div class='output-box'>
                <div class='result'>
                    <div class='info-box'>
                        <h3>$name</h3>
                        <div class='rank-box'>
                            <p>RANK</p>
                            <h2>$rank</h2>
                            <div class='grade-label'>Grade: $grade</div>
                        </div>
                    </div>
                    <div class='image-box'>";
                        if ($imagePath) {
                            echo "<img src='$imagePath' alt='Uploaded Picture'>";
                        } else {
                            echo "<div class='placeholder'>No Image Attached</div>";
                        }
        echo        "</div>
                </div>
              </div>";
    }
    ?>
</div>

</body>
</html>
