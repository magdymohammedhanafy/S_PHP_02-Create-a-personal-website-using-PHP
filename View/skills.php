<?php
require_once("../Controllers/skillsController.php");
$skills=getSkills();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>skills</title>
</head>
<body>
    <div class="header">
    <?php 
    require_once('header.php');
    ?>
    <h1>My Skills</h1>
    </div>
<div class="cont">
    <div class="skills-section">
        <?php foreach( $skills as $skill ){  

        ?>
        <ul>
            <li><?php echo $skill['skillTitle'] ?>
                <ul>
                    <li><?php echo $skill['skill1'] ?></li>
                    <li><?php echo $skill['skill2'] ?></li>
                    <li><?php echo $skill['skill3'] ?></li>
                </ul>
            </li>
        </ul>

        <?php }?>

    </div>
    </div>   
</body>
</html>
