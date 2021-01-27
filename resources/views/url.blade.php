<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>url</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/url" method="POST">
    @csrf
    <p>
        <input type="text" name="productDescription" placeholder="Mô tả của sản phẩm">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="Nhập giá">
    </p>
    <p>
        <input type="number" name="discountPercent" placeholder="Nhập giá triết khấu">
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>
