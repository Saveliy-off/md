<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    body {
        width: 400px;
        margin: 0 auto;
        font-family: system-ui;
    }
    input {
        width: 100%;
        text-align: center;
        color: #000;
        background: rgba(118, 118, 128, 0.12);
        border-radius: 10px;
        border: none;
        padding: 7px 8px;
        outline: none;
        margin: 10px 0;
    }
    form {
        text-align: center;
    }
    button {
        font-size: 2rem;
        cursor: pointer;
        background: none;
        border: none;
        color: #000;
        border: 1px solid #000;
        padding: 7px 13px;
        border-radius: 100px;
        margin: 0 auto;
        text-align: center;
    }
</style>
<body>
    <form action="./db/create.php" method="post" enctype="multipart/form-data">
        <h1>Опубликовать новость</h1>
        <input required type="text" id="title" name="title" placeholder="Тема поста">
        <input required type="text" id="title1" name="title1" placeholder="Текст поста">
        <input required type="text" id="title2" name="title2" placeholder="Ссылка на новость">
        <input required type="file" id="file" name="file">
        <button>Отправить</button>
    </form>
</body>
</html>