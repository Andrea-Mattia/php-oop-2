<?php
require_once __DIR__ . '/classes/User.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My little Shop</title>
</head>
<body>
    
    <header>
        <h1>MY SHOP</h1>
    </header>

    <main>
        <section class="users">
            <h2>Users</h2>
            <?php // User instance
            $new_user = new User('Franco', 'Franchi', 'hello@test.com', 54); ?>
            <h3><?php echo $new_user->getFullName(); ?></h3>
            <ul>
                <li>Email: <?php echo $new_user->getMail(); ?></li>
                <li>Discount percentage: <?php echo $new_user->getDiscount(); ?>%</li>
            </ul>
        </section>
    </main>

</body>
</html>