<?php

// Create Router instance
$router = new \Bramus\Router\Router();

require_once __DIR__ . '/client.php'; // DIR là đường dẫn tuyệt đối từ ổ cứng, cuối không có dấu / nên cần thêm dấu xuyệt vào trước
require_once __DIR__ . '/admin.php';

// Run it!
$router->run();
