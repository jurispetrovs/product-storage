<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Add</title>
</head>
<body>
    <form method="post" action="/product/add" name="product-add">
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <label for="price">Price</label>
        <input type="text" id="price" name="price">
        <label for="type">Product type</label>
        <select name="type" id="type">
            <option disabled selected>Select type</option>
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>

        <div id="dvd" style="display:none;">
            <label for="size">Size (MB)</label>
            <input type="text" id="size" name="size">
        </div>
        <div id="book" style="display:none;">
            <label for="weight">Weight (KG)</label>
            <input type="text" id="weight" name="weight">
        </div>
        <div id="furniture" style="display:none;">
            <label for="height">Height (CM)</label>
            <input type="text" id="height" name="height">
            <label for="width">Width (CM)</label>
            <input type="text" id="width" name="width">
            <label for="length">Length (CM)</label>
            <input type="text" id="length" name="length">
        </div>

        <button type="submit">Save</button>
        <a href="/product/list">Cancel</a>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../../resources/js/select.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="../../resources/js/form-validation.js" type="text/javascript"></script>
</body>
</html>