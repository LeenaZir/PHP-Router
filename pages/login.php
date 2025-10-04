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
    <?php
        $login = '';
        $password = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = trim($_POST['login'] ?? '');
            $password = trim($_POST['password'] ?? '');

            var_dump($login);
            var_dump($password);
        }
    ?>
    <form method="POST" action="">
        <label for = "login">
            <input
                type = "text"
                name = "login"
                id = "login"
                placeholder="login"
                required
            />
        </label>
        <label for = "password">
            <input
                type = "password"
                name = "password"
                id = "password"
                placeholder="password"
                required
            />
        </label>
        <input type="submit" value="Authorize">
    </form>
</body>
</html>