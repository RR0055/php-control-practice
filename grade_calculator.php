<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>成績判定システム</title>
</head>
<body>
    <h1>成績判定システム</h1>
    <br>
    <h2>【個別成績】</h2>
    <br>
<?php
//学生の情報
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

//評価
foreach ($students as $student) {
    //↓現在の生徒の点数を取得
$currentScore = $student["score"];
    //↓点数に応じた評価を決定
if ($currentScore >= 90) {
    $grade = "評価A（優秀）<br>";
} elseif ($currentScore >= 80) {
    $grade =  "評価B（良好）<br>";
} elseif ($currentScore >= 70) {
    $grade =  "評価C（普通）<br>";
} elseif ($currentScore >= 60) {
    $grade =  "評価D（要努力）<br>";
} else {
    $grade =  "評価F（不合格）<br>";
}
    //↓表示される部分
    echo $student["name"] . ":" . $student["score"] . "点 - " . $grade ;
}
?>
<br>
<h2>【統計情報】</h2>
<br>

<?php
//計算
$pass_count = 0; //合格者数
$fail_count = 0; //不合格者数
foreach ($students as $student) {
    if ($student["score"] >= 60) {
        $pass_count++; //合格者数を1増やす
    } else {
        $fail_count++; //不合格者数を1増やす
    }
}
//表示する部分
echo "合格者数: {$pass_count}人<br>";
echo "不合格者数: {$fail_count}人<br>";

//平均点の計算
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);
//表示する部分
echo "平均点: {$average}点<br>"
?>
</body>
</html>