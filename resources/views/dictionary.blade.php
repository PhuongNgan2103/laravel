<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>url</title>
</head>
<body>
<h1>Dictionary</h1>
<form action="/dictionary" method="POST">
    @csrf
    <p>
        <input type="text" name="textBox" placeholder="Nhập từ khóa">
    </p>
    <p>
        <button type="submit">Check</button>
    </p>
</form>
</body>
</html>
