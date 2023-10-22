<?php
function createDbConnection() {
    $servername = "localhost";
    $username = "vh11472_raif";
    $password = "RaifAdmin123";
    $dbname = "vh11472_raif";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->query("SET NAMES utf8mb4");

    return $conn;
}

$conn = createDbConnection();

$user_data = $conn->query("SELECT * FROM tinkoff_users WHERE id = 1")->fetch_assoc();

function formatBalance($balance) {
    // Преобразуем число в строку с двумя десятичными знаками
    $formatted = number_format($balance, 2, ',', ' ');

    // Удаляем незначащие нули после запятой
    if(strpos($formatted, ',') !== false) {
        $formatted = rtrim($formatted, '0');
        $formatted = rtrim($formatted, ',');
    }
    
    return $formatted;
}

function formatB($balance) {
    // Разделяем на целую и дробную часть
    $integerPart = intval($balance);
    $decimalPart = round(($balance - $integerPart) * 100);

    // Форматируем целую часть
    $integerFormatted = number_format($integerPart, 0, '', ' ');

    // Обработка дробной части
    $decimalFormatted = '';
    if ($decimalPart > 0) {
        if ($decimalPart % 10 === 0) { // Если последний знак 0, округляем
            $decimalPart = $decimalPart / 10;
        }
        $decimalFormatted = ',' . (string)$decimalPart;
    }

    return [$integerFormatted, $decimalFormatted];
}

function formatC($balance) {
    // Разделяем на целую и дробную часть
    $integerPart = intval($balance);
    $decimalPart = round(($balance - $integerPart) * 100);

    // Форматируем целую часть
    $integerFormatted = number_format($integerPart, 0, '', ' ');

    // Обработка дробной части
    $decimalFormatted = '';
    if ($decimalPart > 0) {
        if ($decimalPart % 10 === 0) { // Если последний знак 0, округляем
            $decimalPart = $decimalPart / 10;
        }
        $decimalFormatted = ',' . (string)$decimalPart;
    }

    return $integerFormatted.$decimalFormatted;
}

function formatH($balance) {
    // Разделяем на целую и дробную часть
    $integerPart = intval($balance);
    $decimalPart = round(($balance - $integerPart) * 100);

    // Форматируем целую часть
    $integerFormatted = number_format($integerPart, 0, '', ' ');

    // Добавляем лидирующий ноль к дробной части, если необходимо
    $decimalFormatted = str_pad($decimalPart, 2, '0', STR_PAD_LEFT);

    return [$integerFormatted, $decimalFormatted];
}

function formatPhoneNumber($number) {
    // Удаляем все нечисловые символы
    $cleanNumber = preg_replace('/\D/', '', $number);

    // Если длина номера 10 цифр, предполагаем, что префикс +7 отсутствует
    if (strlen($cleanNumber) == 10) {
        $cleanNumber = '7' . $cleanNumber;
    }

    // Если длина номера 11 цифр и первая цифра 8, заменяем на 7
    if (strlen($cleanNumber) == 11 && $cleanNumber[0] == '8') {
        $cleanNumber[0] = '7';
    }

    // Если номер не начинается с 7, или его длина не равна 11, возвращаем ошибку
    if ($cleanNumber[0] != '7' || strlen($cleanNumber) != 11) {
        return "Некорректный номер";
    }

    // Форматируем номер
    return '+7 (' . substr($cleanNumber, 1, 3) . ') ' . substr($cleanNumber, 4, 3) . '-' . substr($cleanNumber, 7, 2) . '-' . substr($cleanNumber, 9, 2);
}

function getMonthInPrepositionalCase($timestamp) {
    $monthNumber = date('n', $timestamp); // Получаем номер месяца от 1 до 12

    $monthsInPrepositionalCase = [
        1 => 'январе',
        2 => 'феврале',
        3 => 'марте',
        4 => 'апреле',
        5 => 'мае',
        6 => 'июне',
        7 => 'июле',
        8 => 'августе',
        9 => 'сентябре',
        10 => 'октябре',
        11 => 'ноябре',
        12 => 'декабре',
    ];

    return $monthsInPrepositionalCase[$monthNumber];
}

function getCurrentMonthSum($conn) {
    // Получаем первый и последний день текущего месяца
    $firstDayOfMonth = date('Y-m-01 00:00:00');
    $lastDayOfMonth = date('Y-m-t 23:59:59');

    // Формируем SQL-запрос
    $sql = "SELECT SUM(moneyAmount) as totalAmount FROM tinkoff_history WHERE date >= '$firstDayOfMonth' AND date <= '$lastDayOfMonth' AND status <> 'deposit'";

    // Выполняем запрос
    $result = $conn->query($sql);

    // Проверяем результат
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['totalAmount'];
    } else {
        return 0; // Возвращаем 0, если записей не найдено
    }
}

function formatDate($timestamp) {
    // Массив с названиями месяцев в родительном падеже
    $months = [
        1 => 'января',
        2 => 'февраля',
        3 => 'марта',
        4 => 'апреля',
        5 => 'мая',
        6 => 'июня',
        7 => 'июля',
        8 => 'августа',
        9 => 'сентября',
        10 => 'октября',
        11 => 'ноября',
        12 => 'декабря',
    ];

    // Форматируем день без ведущего нуля
    $day = intval(date('d', $timestamp));
    
    // Получаем название месяца из массива
    $month = $months[intval(date('n', $timestamp))];
    
    // Получаем оставшуюся часть даты
    $restOfDate = date('Y, H:i', $timestamp);
    
    // Собираем все вместе
    $formattedDate = $day . ' ' . $month . ' ' . $restOfDate;

    return $formattedDate;
}



$pay_balance = formatB($user_data['balance']);

$expenses = formatC(0 + $conn->query("SELECT SUM(moneyAmount) FROM tinkoff_history WHERE status <> 'deposit'")->fetch_array()[0]);
$deposits = formatC(0 + $conn->query("SELECT SUM(moneyAmount) FROM tinkoff_history WHERE status = 'deposit'")->fetch_array()[0]);

