<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2>Furniture form</h2>
    <form action="/action_page.php">
        <div class="form-group">
            <label>Name:</label>
            <input class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label>Price:</label>
            <input class="form-control" placeholder="Enter Price" name="price">
        </div>
        <div class="form-group">
            <label>Avatar:</label>
            <input class="form-control" placeholder="Enter Avatar" name="avatar">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
</body>
</html>
