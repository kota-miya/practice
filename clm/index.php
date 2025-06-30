<?php
require_once('clm.php');

$random_numbers = array_rand($rowData, 5);

foreach ($random_numbers as $index) {
    $names[] = $rowData[$index];
}
$questions = $names[array_rand($names, 1)];

//echo ('<pre>');
//var_dump($random_numbers);
//echo ("<pre>");


//echo ('<pre>');
//echo $questions["名前"];
//echo ("<pre>");


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/clm">
                player Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の背番号の選手は誰でしょう？</p>
                <p class="question__text">
                    <?php echo $questions["背番号"] ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $questions["名前"] ?>">
                <div class="quiz-form__item">
                    <?php foreach ($names as $name): ?>
                        <div class="quiz-form__group">
                            <input class="quiz-form__radio" id="<?php echo $name["名前"] ?>" type="radio" name="name" value="<?php echo $name["名前"] ?>">
                            <label class="quiz-form__label" for="<?php echo $name["名前"] ?>">
                                <?php echo $name["名前"] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        答える
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>