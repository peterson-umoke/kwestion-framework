<?php

// get user id
$user_id = $_GET['user_id'];

$acc = new Account();
$acc->delete_account($user);

redirect('admin/users?show_message=successfully deleted account');
