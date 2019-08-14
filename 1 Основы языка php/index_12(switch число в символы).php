<div>
    <form action="" name="form">
        <input type="text" name="subject" placeholder="Введите число" value="">
        <input type="submit" value="Submit">
    
    </form>
</div>
<?php
    $chyslo = $_GET['subject']?? false;
    switch ($chyslo) {
        case 1:
            echo 'один';
            break;
        case 2:
            echo 'два';
            break;
        case 3:
            echo 'три';
            break;
        default:
            echo 'нет такого';
    }
?>
