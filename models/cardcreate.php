<?php
//
if (!iscard())
	exit(json_encode(array('response' => '0')));
else
{
include("db.php");
$link = db_connect();
$res = mysqli_query($link,"SELECT name FROM users WHERE login = '$login'");
$res = mysqli_num_rows($res);
if ($res > 0) {
	$res = mysqli_query($link, "SELECT id FROM users WHERE login = '$login'");
	$data = mysqli_fetch_array($res);
	$user_id = $data['0'];
	$res = mysqli_query($link, "INSERT INTO card (`owner_id`, `name`, `caption`) VALUES ('$user_id', '$card_name', '$card_caption') ");
	$new_data = array('response' => 1);
}
else
	$new_data = array('response' => 'not exist user');

echo json_encode($new_data);
}