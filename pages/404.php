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
    <?php include_once 'pages/nav.php'?>
    <h1> NO PAGE GO BACK</h1>
    <h2>file /pages/404.php</h2>
    <a href="/"> Go home </a>
</body>
</html>