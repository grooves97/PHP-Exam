<?php
include("_header.php");
include("header.html");
?>

<div class="container mt-4">
    <h1>Форма поиска перевода слова Аслана</h1>
    <form action="/main-form/search.php" method="post">
        <div class="form-group">
            <label for="word">Слово: </label>
            <input type="text" class="form-control" name="word" placeholder="Слово на русском">
        </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Слово</th>
                        <th scope="col">Перевод</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>word</td>
                        <td>Otto</td>
                    </tr>
                    </tbody>
                </table>
        <button type="submit" class="btn btn-primary" name="addWord">Добавить</button>
    </form>
</div>
</body>
</html>