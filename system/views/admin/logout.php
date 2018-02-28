<?php

$acc = new Account();
$user_id = get_user_id();
echo $user_id;
$acc->logout_account($user_id);
$_SESSION['message'] = "Logged out successfully";

// redirect the user to the login page
redirect("admin/login");
