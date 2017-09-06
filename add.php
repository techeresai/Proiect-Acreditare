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
        <h2>Add a Question</h2>
        <form method="post" action="add.php">
            <p>
                <label>Question Number:</label>
                <input type="number" name="question_number"/>
            </p>
            <p>
                <label>Question Text:</label>
                <input type="text" name="question_text"/>
            </p>
            <p>
                <label>Choice #1:</label>
                <input type="text" name="choice1"/>
            </p>
            <p>
                <label>Choice #2:</label>
                <input type="text" name="choice2"/>
            </p>
            <p>
                <label>Choice #3:</label>
                <input type="text" name="choice3"/>
            </p>
            <p>
                <label>Choice #4:</label>
                <input type="text" name="choice4"/>
            </p>
            <p>
                <label>Choice #5:</label>
                <input type="text" name="choice5"/>
            </p>
            <p>
                <label>Correct Choice Number:</label>
                <input type="number" name="correct_choice"/>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit"/>
            </p>
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