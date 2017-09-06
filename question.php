<?php include 'database.php'; ?>
<?php
//Set question number
$number = (int)$_GET['n'];

/*
*   Get question
*/

$query = "SELECT * FROM `questions` WHERE question_nr = $number";

//Get result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

/*
*   Get Choices
*/

$query = "SELECT * FROM `choices` WHERE question_nr = $number";

//Get result
$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML&CSS Tutorial</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <div class="container"></div>
    <h1>HTML&CSS Questions</h1>
</header>
<main>
    <div class="container">
        <div class="current">Question 1 of 5</div>
        <p class="question">
            <?php echo $question['text']?>
        </p>
        <form method="post" action="process.php">
            <ul class="choices">
                <?php while($row = $choices->fetch_assoc()): ?>
                    <li><input name="choice" type="radio" value="<?php echo $row['id']?>"/><?php echo $row['text']?></li>
                <?php endwhile; ?>
            </ul>
        <input type="submit" value="Submit">
        </form>
    </div>
</main>
<footer>
    <div class="container">
        Copyright &copy; 2017, HTML&CSS Tutorial
    </div>
</footer>

</body>
</html>