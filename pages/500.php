<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=htmlspecialchars($title ?? 'Page', ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/script.js"></script>
</head>
<body>
    <?php
        $routes = $routes ?? [];
        $currentPath = $currentPath ?? '/';
        include __DIR__ . '/nav.php';
    ?>
    <h1> 500 Internal Server Error </h1>
    <p> Page file wasn't found </p>
</body>
</html>