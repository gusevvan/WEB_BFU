<?php
session_start();
if (false === isset($_SESSION['items'])) {    
    echo "Произошла какая-то ошибка.";
} else {
    ?>
    <ul>
        <?php foreach ($_SESSION['items'] as $item) {?>
            <li><?php echo $item;?></li>
        <?php }?>
    </ul>
<?php }?>

