<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
    <a href="/product/add">Add</a>
    <form method="post" action="/product/list/delete">
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">MASS DELETE</button>
    </form>
</body>
</html>