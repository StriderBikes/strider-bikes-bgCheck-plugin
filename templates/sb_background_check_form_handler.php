<?php 

$userID = get_current_user_id();

$formValues = array(
    'sbbg_check_mName' => $_POST["bg_mName"],
    'sbbg_check_bdate' => $_POST["bg_bdate"],
    'sbbg_check_phone' => $_POST["bg_phone"],
    'sbbg_check_address' => $_POST["bg_address"],
    'sbbg_check_city' => $_POST["bg_city"],
    'sbbg_check_region' => $_POST["bg_region"],
    'sbbg_check_country' => $_POST["bg_country"],
    'sbbg_check_socialNum' => $_POST["bg_socialNum"]
);