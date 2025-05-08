<?php
require_once 'resume_data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <title>My Resume</title>
</head>



<body>
    <div class="resume-container">
        <div class ="left-section">
            <div class="profile-image">
                <img src="profile.png" alt="Profile Photo">
            </div>
            <h1> <?php echo $name ?> </h1>
            <p><b>Email: </b> <?php echo $email ?> </p>
            <p><b>Phone: </b> <?php echo $phone ?> </p>
            <p><b>Address: </b> <?php echo $address ?> </p>

            <br>

            <h3>QUALIFICATIONS</h3>
            <p> <?php echo $qualification1 ?> </p>
            <p> <?php echo $qualification2 ?> </p>
            <p> <?php echo $qualification3 ?> </p>

            <h3>EDUCATION</h3>
            <p> <b><i> <?php echo $education["school"] ?> </i></b></p>
            <p> <?php echo $education["degree"]. "<br>". $education["years"] ?> </p>
            <p> <?php echo $education["attainments"] ?></p>
            <p> <?php echo $education["affiliations"] ?></p>

        </div>

        <div class ="right-section">
            <section>
                <h2>CAREER OBJECTIVES</h2> <hr>
                <p> <?php echo $objectives ?> </p>
            </section>
            <br>
            <section>
                <h2>TECHNICAL SKILLS</h2> <hr>
                <p> <?php echo $techskills ?></p>
            </section>
            <br>
            <section>
                <h2>PROJECTS</h2> <hr>
                <?php foreach ($projects as $project): ?>
                <h4><i><?php echo $project['title']; ?></i></h4>
                <p><?php echo $project['description']; ?></p>
                <?php endforeach; ?>
            </section>

        </div>
    </div>


</body>
</html>