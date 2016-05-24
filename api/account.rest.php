<?php

// load albums controller
require_once _core.'/controller/AccountController.class.php';
$accountController = new AccountController();

$app->post("/login", function () use ($accountController, $app) {
    
    $mail = $app->request->post('email');
    $pass = $app->request->post('pass');
    
    
    $loginResponse = $accountController->PostLogin($mail,$pass);
    
    echo json_encode($loginResponse);
});

$app->get("/logout", function () use ($accountController) {
    
    $logoutResponse = $accountController->GetLogout();
    
    echo json_encode($logoutResponse);
});

$app->get("/account/orders", function () use ($accountController) {
    
    $orders = $accountController->getAllOrders();
    
    echo json_encode($orders);
});


?>