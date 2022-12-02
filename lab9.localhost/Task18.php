<?php
$questions = [
    ['В каком году началась Великая Отечественная Война?', 1945, 1941, 1946, 1939],
    ['Выберите не четные числа', 1, 2, 3, 4, 5],
    ['Какие из указанных стран входили в состав СССР на момент распада?', 'США', 'Россия', 'Белоруссия', 'Германия', 'Украина', 'Египет']
];
$trueAnswers = [
    [1941],
    [1, 3, 5],
    ['Россия', 'Украина', 'Белоруссия']
];
if (!empty($_REQUEST)) {
    $res = [];
    foreach ($questions as $key => $question) {
        $answer = implode(', ', $_REQUEST[$key]);
        $flag = true;
        foreach ($trueAnswers[$key] as $item) {
            if (array_search($item, $_REQUEST[$key]) !== false) {
                $flag = true;
            } else {
                $flag = false;
                break;
            }
        }
        if ($flag) {
            $res[] = ['green', "Ваш ответ: $answer, верно!"];
        } else {
            $trueAnswer = implode(', ', $trueAnswers[$key]);
            $res[] = ['red', "Ваш ответ: $answer, не верно! Правильный ответ: $trueAnswer."];
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
            <?php $nums = range(1, count($question) - 1); shuffle($nums); foreach ($nums as $num): ?>
                <input type="checkbox" name="<?=$key;?>[]" value="<?=$question[$num];?>"><?=$question[$num];?>
            <?php endforeach;?>
        <?php endif;?>
        <hr>
    <?php endforeach;?>
    <?php if (empty($res)): ?>
        <input type="submit">
    <?php endif;?>
</form>