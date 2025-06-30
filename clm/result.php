<?php

require_once('clm.php');

$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');

if (!$name) {
    header('Location:index.php');
}

foreach ($rowData as $Data) {
    if ($Data["名前"] === $answer_code) {
        $code = $Data["名前"];
    }
}
//echo $name;
//echo $answer_code;
//echo $Data["名前"];
$result = $name === $code;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>player Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
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
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                    <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                    <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">選手名</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>

</html>