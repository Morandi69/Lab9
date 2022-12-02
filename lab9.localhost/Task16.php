<h4>Задание 16</h4>
<?php
$questions = [
    ['В каком году началась Великая Отечественная Война?', 1941],
    ['Год основания Санкт-Петербурга?', 1703],
    ['Сколько стран входило в состав СССР на момент распада?', 15]
];
if (!empty($_REQUEST)) {
    $answers = $_REQUEST['answer'];
    $res = [];
    foreach ($questions as $key => $question) {
        if ($question[1] == $answers[$key]) {
            $res[] = ['green', "Ваш ответ: $answers[$key], верно!"];
        } else {
            $res[] = ['red', "Ваш ответ: $answers[$key], не верно! Правильный ответ: $question[1]."];
        }
    }
}

?>

<form action="" method="post">
    <?php foreach ($questions as $key => $question): ?>
        <p><?=$question[0];?></p>
        <?php if (!empty($_REQUEST)): ?>
            <p style="color: <?=$res[$key][0];?>"><?=$res[$key][1];?></p>
        <?php else: ?>
            <input type="text" name="answer[]"><br>
        <?php endif;?>
        <hr>
    <?php endforeach;?>
    <?php if (empty($res)): ?>
        <input type="submit">
    <?php endif;?>
</form>


