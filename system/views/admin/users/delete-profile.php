<?php

// get user id
$user_id = $_GET['user_id'];

$acc = new Account();
$acc->delete_account($user_id);

redirect('admin/users/all-users?show_success_message=1');
