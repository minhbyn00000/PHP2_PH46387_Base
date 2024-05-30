<?php 
// Define routes
$router->get('/', function()
{
    echo "Trang Chủ";
}
);
$router->get('/about', function()
{
    echo "Giới Thiệu";
}
);
