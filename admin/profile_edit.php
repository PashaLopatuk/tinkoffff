<?php
session_start();

require_once "../dbConn.php";

$message = null;
$type = "danger"; // Тип сообщения по умолчанию

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $card = $conn->real_escape_string($_POST['card']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $balance = $conn->real_escape_string($_POST['balance']);
    $send_description = $conn->real_escape_string($_POST['send_description']);

    $sql = "UPDATE tinkoff_users SET name='$name', surname='$surname', card='$card', phone='$phone', balance='$balance', send_description='$send_description' WHERE id = 1";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['message'] = "Запись успешно обновлена!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Ошибка при обновлении: " . $conn->error;
        $_SESSION['message_type'] = "danger";
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

$sql = "SELECT * FROM tinkoff_users LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $surname = $row['surname'];
    $card = $row['card'];
    $phone = $row['phone'];
    $balance = $row['balance'];
    $send_description = $row['send_description'];
} else {
    $name = $surname = $card = $phone = $balance = $send_description = "";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover, user-scalable=no">
    <title>Админка</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 5% auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['message_type']?> alert-dismissible fade show" role="alert">
            <?=$_SESSION['message']?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        // Удаляем уведомление из сессии после его отображения
        unset($_SESSION['message']); 
        unset($_SESSION['message_type']); 
        ?>
    <?php endif; ?>

    <h2 class="mb-4">Редактирование профиля <a href="my.php" class="btn btn-danger" style="float: right;">✕</a></h2>
    <form action="profile_edit.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" placeholder="Иван">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Фамилия</label>
            <input type="text" class="form-control" id="surname" name="surname" value="<?= $surname ?>" placeholder="Петров">
        </div>
        <div class="mb-3">
            <label for="card" class="form-label">Карта</label>
            <input type="text" class="form-control" id="card" name="card" value="<?= $card ?>" placeholder="2200220022002200">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $phone ?>" placeholder="9001234567">
        </div>
        <div class="mb-3">
            <label for="balance" class="form-label">Баланс</label>
            <input type="text" class="form-control" id="balance" name="balance" value="<?= $balance ?>" placeholder="10000">
        </div>
        <div class="mb-3">
            <label for="send_description" class="form-label">Имя получателя (отображается в чеке)</label>
            <input type="text" class="form-control" id="send_description" name="send_description" value="<?= $send_description ?>" placeholder="Илья А.">
        </div>
        <button type="submit" class="btn btn-primary w-100">Изменить</button>
    </form>

</div>

<script>
setTimeout(() => {
    let alert = document.querySelector(".alert");
    if (alert) alert.remove();
}, 4000);
</script>

</body>
</html>
