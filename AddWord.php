
<?
include("_header.php");
include("header.html")
?>

<div class="container mt-4">
    <h1>Форма добавления слова в словарь Аслана</h1>
    <form action="/add.php" method="post">
        <div class="form-group">
            <label for="word">Слово: </label>
            <input type="text" class="form-control" name="word" placeholder="Слово на русском">
        </div>
        <div class="form-group">
            <label for="word_en">Слово перевода: </label>
            <input type="text" class="form-control" name="word_en" placeholder="Слово на английском">
        </div>

        <button type="submit" class="btn btn-primary" name="addWord">Добавить</button>
    </form>
</div>
</body>
</html>