<?php

if ($_POST)
{
    $text = '';
    if (false != isset($_POST['mytextarea'])) {
    	$text = $_POST["mytextarea"];
    }
    echo 'Количество символов: ', strlen($text), "<br/>";
    echo 'Количество слов: ', str_word_count($text), "\n";}


?>
<form method="post">
    <textarea name="mytextarea"></textarea>
    <input type="submit" value="Go!" />
</form>

