<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form action="action1.php" method="post">
    <div >
        <p>Напиши своё имя:</p>
        <input type="text" name="text"/>
    </div>
    <div>
        <p>Сейчас холодно?</p>
        <input type="checkbox" name="checkbox[]" value="студент "/>
        <p>Вы из России?</p>
        <input type="checkbox" name="checkbox[]" value="из России"/>
    </div>
    <div>
        <p>Что изучаете?</p>
        <input type="radio" name="radio" value="учите PHP"/>PHP<br>
        <input type="radio" name="radio" value="учите JS"/>JS<br>
        <input type="radio" name="radio" value="учите C++"/>C++<br>
    </div>
    <div>
        <p>Вы сейчас дома?</p>
        <select name="select">
            <option value="сидите дома">Да</option>
            <option value="сидите не дома">Нет</option>
        </select>
    </div><br>

    <input type="submit" value="Отправить форму"/>
</form>
</body>
</html>