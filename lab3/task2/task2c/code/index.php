<?php session_start();?>
<body>
    <form method="post">
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required>
        
        <label for="name">Имя:</label>
        <input type="text" name="name" required>
        
        <label for="second">Отчество:</label>
        <input type="text" name="second" required>
        
        <label for="age">Возраст:</label>
        <input type="text" name="age" required>
        
        <label for="salary">Зарплата:</label>
        <input type="text" name="salary" required>
        
        <label for="work">Место работы:</label>
        <input type="text" name="work" required>
        
        <p><input type="submit" value="Отправить"></p>
    </form>

    <?php
    
    if (false === isset($_POST['surname'], $_POST['name'], $_POST['second'], $_POST['age'], $_POST['salary'], $_POST['work'])) {
        exit();
    } else {
        $_SESSION['items'] = array($_POST['surname'], $_POST['name'], $_POST['second'], $_POST['age'], $_POST['salary'], $_POST['work']);
    }
    ?>
    <p><a href="index1.php">Посмотреть данные</a></p>
</body>
