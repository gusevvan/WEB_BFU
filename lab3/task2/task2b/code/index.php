<?php session_start();?>
<body>
    <form method="post">
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required>
        
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        
        <label for="age">Возраст:</label>
        <input type="text" name="age" required>
        <p><input type="submit" value="Отправить"></p>
    </form>

    <?php
    if (false === isset($_POST['surname'], $_POST['name'], $_POST['age'])) {
        exit();
    } else {
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['age'] = $_POST['age'];
    }
    ?>
    <p><a href="index1.php">Посмотреть данные</a></p>
</body>
