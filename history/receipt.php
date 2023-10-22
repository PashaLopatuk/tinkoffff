<?php
require_once __DIR__ . '/../dbConn.php';

function imagettftextright1($image, $size, $angle, $x, $y, $color, $fontfile, $text, $maxWidth) {
    $words = explode(' ', $text);
    $lines = [];
    $currentLine = '';

    // Разбить текст на строки, учитывая maxWidth
    foreach ($words as $word) {
        $testLine = $currentLine . ' ' . $word;
        $textBox = imagettfbbox($size, $angle, $fontfile, $testLine);
        $textWidth = $textBox[2] - $textBox[0];

        if ($textWidth <= $maxWidth) {
            $currentLine = $testLine;
        } else {
            $lines[] = trim($currentLine);
            $currentLine = $word;
        }
    }
    $lines[] = trim($currentLine);

    // Рисовать каждую строку с выравниванием по правому краю
    $startingY = $y;
    foreach ($lines as $line) {
        $textBox = imagettfbbox($size, $angle, $fontfile, $line);
        $textWidth = $textBox[2] - $textBox[0];
        $startingX = $x - $textWidth;
        imagettftext($image, $size, $angle, $startingX, $startingY, $color, $fontfile, $line);
        $startingY += abs($textBox[5] - $textBox[1]); // увеличить Y на высоту строки
    }
}


function imagettftextright($image, $size, $angle, $x, $y, $color, $fontfile, $text) {
    // Получите размеры текста
    $textBox = imagettfbbox($size, $angle, $fontfile, $text);
    $textWidth = $textBox[2] - $textBox[0];

    // Вычислите координату X для начала текста, чтобы он был выровнен по правому краю
    $startingX = $x - $textWidth;

    return imagettftext($image, $size, $angle, $startingX, $y, $color, $fontfile, $text);
}


$pay_data = $conn->query("SELECT * FROM tinkoff_history WHERE id = {$_GET['id']}")->fetch_assoc();
$user_data = $conn->query("SELECT * FROM tinkoff_users WHERE id = 1")->fetch_assoc();
$date = new DateTime($pay_data["date"]);
$dmY = $date->format('d.m.Y H:i:s');

header("Content-type: image/jpeg");

$font = 'DroidSans.ttf'; // Путь к вашему TTF или OTF файлу шрифта
$imagePath = $pay_data['status'].'.jpg'; // Путь к вашему изображению

// Загружаем изображение
$image = imagecreatefromjpeg($imagePath);

// Цвет текста
$color = imagecolorallocate($image, 143, 143, 143); // Белый цвет. Вы можете изменить RGB значения по своему усмотрению


// Рисуем текст на изображении
imagettftext($image, 16, 0, 56, 239, $color, __DIR__ . '/arial.ttf', $dmY);

$color = imagecolorallocate($image, 52, 51, 50);
imagettftextright($image, 30, 0, 648, 296, $color, __DIR__ . '/arial_bold.ttf', formatC($pay_data['moneyAmount']));



if ($pay_data['status'] == 'deposit') {
    imagettftextright($image, 18, 0, 693, 539, $color, __DIR__ . '/arial.ttf', formatPhoneNumber($user_data['phone']));
}

if ($pay_data['status'] == 'bik') {
    imagettftextright($image, 18, 0, 669, 512, $color, __DIR__ . '/arial.ttf', formatC($pay_data['moneyAmount']));
	imagettftextright($image, 18, 0, 693, 568, $color, __DIR__ . '/arial.ttf', $pay_data['ibanNumber']);
	imagettftextright($image, 18, 0, 693, 624, $color, __DIR__ . '/arial.ttf', $pay_data['fio']);
	imagettftextright1($image, 18, 0, 693, 682, $color, __DIR__ . '/arial.ttf', $pay_data['details'], 300);
}

if ($pay_data['status'] == 'sbp') {
    imagettftextright($image, 18, 0, 669, 512, $color, __DIR__ . '/arial.ttf', formatC($pay_data['moneyAmount']));
	imagettftextright($image, 18, 0, 693, 567, $color, __DIR__ . '/arial.ttf', $user_data['name'] . ' ' . $user_data['surname']);
	imagettftextright($image, 18, 0, 693, 623, $color, __DIR__ . '/arial.ttf', formatPhoneNumber($pay_data['phone']));
	imagettftextright($image, 18, 0, 693, 678, $color, __DIR__ . '/arial.ttf', $pay_data['description']);
	imagettftextright($image, 18, 0, 693, 733, $color, __DIR__ . '/arial.ttf', 'Рубль');
	imagettftextright($image, 18, 0, 693, 788, $color, __DIR__ . '/arial.ttf', $pay_data['msgToUser']);
}

if ($pay_data['status'] == 'card') {
    imagettftextright($image, 18, 0, 669, 512, $color, __DIR__ . '/arial.ttf', formatC($pay_data['moneyAmount']));
	imagettftextright($image, 18, 0, 693, 567, $color, __DIR__ . '/arial.ttf', $user_data['name'] . ' ' . $user_data['surname']);
	imagettftextright($image, 18, 0, 693, 623, $color, __DIR__ . '/arial.ttf', '*'.substr($pay_data['cardNumber'], -4));
	imagettftextright($image, 18, 0, 693, 678, $color, __DIR__ . '/arial.ttf', $pay_data['description']);
}


// Выводим изображение
imagejpeg($image);

// Очищаем память
imagedestroy($image);
?>
