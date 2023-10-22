<?php

require_once __DIR__ . '/../dbConn.php';


$new_balance = $user_data['balance'] - $_REQUEST['moneyAmount'];
$conn->query("UPDATE tinkoff_users SET balance = $new_balance WHERE id = 1");

/*//phone
echo $_REQUEST['phone'] . "<br>";
echo $_REQUEST['bankMemberId'] . "<br>";
echo $_REQUEST['msgToUser'] . "<br>";
echo $_REQUEST['moneyAmount'] . "<br>";

//card
echo $_REQUEST['cardNumber'] . "<br>";
echo $_REQUEST['moneyAmount'] . "<br>";

//bik
echo $_REQUEST['bikNumber'] . "<br>";
echo $_REQUEST['ibanNumber'] . "<br>";
echo $_REQUEST['fio'] . "<br>";*/



if (isset($_REQUEST['phone'])) {

	$conn->query("INSERT INTO tinkoff_history (moneyAmount, phone, bankMemberId, msgToUser, status, description) VALUES ('$_REQUEST[moneyAmount]', '$_REQUEST[phone]', '$_REQUEST[bankMemberId]', '$_REQUEST[msgToUser]', 'sbp', '$user_data[send_description]')");

	header('Location: /payments/provider-p2p-anybank/success');
} else if (isset($_REQUEST['cardNumber'])) {

	$conn->query("INSERT INTO tinkoff_history (moneyAmount, cardNumber, status, description) VALUES ('$_REQUEST[moneyAmount]', '$_REQUEST[cardNumber]', 'card', '$user_data[send_description]')");

	header('Location: /payments/provider-transfer-inner-third-party/success');
} else if (isset($_REQUEST['bikNumber'])) {

	$conn->query("INSERT INTO tinkoff_history (moneyAmount, bikNumber, ibanNumber, fio, details, status, description) VALUES ('$_REQUEST[moneyAmount]', '$_REQUEST[bikNumber]', '$_REQUEST[ibanNumber]', '$_REQUEST[fio]', '$_REQUEST[details]', 'bik', '$user_data[send_description]')");

	header('Location: /payments/provider-transfer-third-party/success');
}