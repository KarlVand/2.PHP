<?php
$variable_name = "Karl";
$variable_age = "39";
$variable_eyes = "blue";
$variable_family = array ('pierre', 'paul', 'jacques');
$variable_hungry = true;

?>

<!DOCTYPE html>
<html>
<body>
    <p>Hi! My name is <?php echo ($variable_name); ?></p>
    <p>I am <?php echo ($variable_age); ?> years old.</p>
    <p>I have <?php echo ($variable_eyes); ?> eyes.</p>
    <p>The first person in my family is <?php echo ($variable_family[0]);?></p>
    <p>Am I hungry? <?php echo ($variable_hungry) ? "I'm damn hungry!" : "Yeah still a bit!";?></p>
</body>
</html>