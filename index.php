<?php
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
            $new_item = new Item(10, 'Scarpe', 'Moda', 19.99); ?>
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
            $new_user = new User('Franco', 'Franchi', 'hello@test.com'); ?>
            <h3><?php echo $new_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_user->getMail(); ?></li>
                <li>
                    <strong>Age:</strong> 
                    <?php // Setting age and catching exceptions
                    try {
                        $new_user->setAge(57);
                        echo $new_user->getAge() . ' years old.';
                    } catch (Exception $e) {
                        echo 'Attenzione: ' . $e->getMessage();
                    }
                    ?>
                </li>
                <li><strong>Discount percentage:</strong> <?php echo $new_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Final price:</strong> 
                    <?php // Getting final price
                    echo 
                    number_format($new_item->getPrice() - ($new_item->getPrice() * $new_user->getDiscount() / 100), 2); 
                    ?>€
                </li>
            </ul>
        </section>

        <section class="premium-users">
            <h2>Premium Users</h2>
            <?php // User instance
            $new_premium_user = new PremiumUser('Carlo', 'Giannicoli', 'pippo@pluto.com', true); ?>
            <h3><?php echo $new_premium_user->getFullName(); ?></h3>
            <ul>
                <li><strong>Email:</strong> <?php echo $new_premium_user->getMail(); ?></li>
                <li>
                    <strong>Age:</strong> 
                    <?php // Setting age and catching exceptions
                    try {
                        $new_premium_user->setAge(33);
                        echo $new_premium_user->getAge() . ' years old.';
                    } catch (Exception $e) {
                        echo 'Attenzione: ' . $e->getMessage();
                    }
                    ?>
                </li>
                <li><strong>Discount percentage:</strong> <?php echo $new_premium_user->getDiscount(); ?>%</li>
                <li>
                    <strong>Final price:</strong> 
                    <?php // Getting final price
                    echo 
                    number_format($new_item->getPrice() - ($new_item->getPrice() * $new_premium_user->getDiscount() / 100), 2); 
                    ?>€
                </li>
            </ul>
        </section>
    </main>

</body>
</html>