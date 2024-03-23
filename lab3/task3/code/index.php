<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum_scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adds</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
                <?php
                $dirs = scandir("./categories");
                for ($i = 2; $i < count($dirs); $i++) {?>
                    <option value=<?php echo $dirs[$i];?>><?php echo $dirs[$i];?></option>
                <?php }?>
            </select>
        
            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="10" name="description"></textarea>
        
            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Category</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
                <?php for ($i = 2; $i < count($dirs); $i++) {
                        $subdirs = scandir("./categories/{$dirs[$i]}");
                        for ($j = 2; $j < count($subdirs); $j++) {
                            $files = scandir("./categories/{$dirs[$i]}/{$subdirs[$j]}");
                            for ($k = 2; $k < count($files); $k++) {
                                $content = file_get_contents("./categories/{$dirs[$i]}/{$subdirs[$j]}/{$files[$k]}");?>
                                <tr>
                                <td><?php echo $dirs[$i];?></td>
                                <td><?php echo $subdirs[$j];?></td>
                                <td><?php echo substr($files[$k], 0, strlen($files[$k]) - 4);?></td>
                                <td><?php echo $content;?></td>
                                </tr>
                            <?php }?>
                        <?php }?>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>

