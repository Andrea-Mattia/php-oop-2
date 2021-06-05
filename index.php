<?php
require_once __DIR__ . '/classes/Shop.php';
require_once __DIR__ . '/classes/Item.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/PremiumUser.php';
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

        <section class="products">
            <h2>Products</h2>
            <?php // Item instance
            $new_item = new Item(10, 'Scarpe', 'Moda', 100); ?>
            <ol>
                <li><strong>Buyer ID:</strong> <?php echo $new_item->getUserID(); ?></li>
                <li>
                    <strong>Item:</strong> <?php echo $new_item->getItem(); ?>
                    <ul>
                        <li><strong>Category:</strong> <?php echo $new_item->getCategory(); ?></li>
                        <li><strong>Price:</strong> <?php echo $new_item->getPrice(); ?>€</li>
                    </ul>
                </li>
            </ol>
        </section>

        <section class="users">
            <h2>Users</h2>
            <?php // User instance
            $new_user = new User('Franco', 'Franchi', 'hello@test.com', 56); ?>
            <h3><?php echo $new_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_user->getMail(); ?></li>
                <li><strong>Discount percentage:</strong> <?php echo $new_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Final price:</strong> 
                    <?php echo $new_item->getPrice() - $new_user->getDiscount(); ?>€
                </li>
            </ul>
        </section>

        <section class="premium-users">
            <h2>Premium Users</h2>
            <?php // User instance
            $new_premium_user = new PremiumUser('Carlo', 'Giannicoli', 'pippo@pluto.com', 33, true); ?>
            <h3><?php echo $new_premium_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_premium_user->getMail(); ?></li>
                <li><strong>Discount percentage:</strong> <?php echo $new_premium_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Final price:</strong> 
                    <?php echo $new_item->getPrice() - $new_premium_user->getDiscount(); ?>€
                </li>
            </ul>
        </section>
    </main>

</body>
</html>