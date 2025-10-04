<?php
    $routes = [
        "/"  => ["title" => "HOMEPAGE",   "file" => "home.php"],
        "/login"  => ["title" => "SIGN IN",   "file" => "login.php"],
        "/register"  => ["title" => "SIGN UP",   "file" => "register.php"],
    ];

    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

    if($path === null || $path === false) {
        $path = '/';
    }

    $path = rtrim($path, '/');
    if ($path === ''){
        $path = '/';
    }

    if (array_key_exists($path, $routes)){
        $title = $routes[$path]['title'] ?? 'Page';
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . $routes[$path]['file'];

        if (is_file($file)) {
            $currentPath = $path;
            include $file;
            exit;
        } else{
            http_response_code(500);
            include __DIR__ . '/pages/500.php';
            exit;
        }
    }

    http_response_code(404);
    $title = "Page was not found.";
    $file404 = __DIR__ . '/pages/404.php';
    if (is_file($file404)){
        include $file404;
    }else{
        echo "<h1>404</h1> <p>Page wasn't found</p>";
    }
