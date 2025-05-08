<?php
$name = "Kristian Bautista";
$email = "kristiandavidbautista@gmail.com";
$phone = "+63 9494282770";
$address = "Eight North House, Rizal";

$education1 = [
    "school"=> "Child Jesus of Prague School",
    "degree"=> "STEM Graduate",
    "years" => "2020 - 2023",
];

$education2 = [
    "school"=> "FEU Institute of Technology",
    "degree"=> "BS Computer Science in Software Eng.",
    "years" => "2023 - 2027",
];

$objectives = "Motivated and detail-oriented Computer Science student seeking an entry-level software development role where I can apply my programming skills,
problem-solving abilities, and passion for contributing on real-world projects. I aim to grow professionally in a collaborative environment, and personally,
honing my soft skills to be a better, well-rounded person.
"

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
            <h1> <?php echo $name ?> </h1>
            <p>Email: <?php echo $email ?> </p>
            <p>Phone: <?php echo $phone ?> </p>
            <p>Address: <?php echo $address ?> </p>

            <br><br>

            <h3>QUALIFICATIONS</h3>
            <p>Excellent leadership skills in group settings. Always producing high quality performance</p>
            <p>Knowledge in technical skills such as efficiently solving Algorithms, knowledge in programming languages such as PHP, C++, Java, Python, JavaScript, and SQL</p>
            <p>Developed Soft Skills such necessary in any work environment. Ability to efficiently and work collaborately in any setting.</p>

            <br><br>
            <h3>EDUCATION</h3>
            <p> <?php echo $education2["school"] ?></p>
            <p> <?php echo $education2["degree"]. "<br>". $education2["years"] ?></p> <br><br>

            <p> <?php echo $education1["school"] ?></p>
            <p> <?php echo $education1["degree"]. "<br>". $education1["years"] ?></p> <br><br>
        </div>

        <div class ="right-section">
            <section>
                <h2>Career Objectives</h2>
                <p> <?php echo $objectives ?> </p>
            </section>
        </div>
    </div>


</body>
</html>