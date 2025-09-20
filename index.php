<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>تسجيل الدخول</h2>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="اسم المستخدم" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <input type="submit" value="دخول">
        </form>
        <?php if (!empty($error)) { ?>
            <div class="error"><?php echo $error; ?></div>
        <?php } elseif (!empty($message)) { ?>
            <div class="message"><?php echo $message; ?></div>
        <?php } ?>
    </div>
</body>
</html>