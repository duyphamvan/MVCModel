<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Bạn chắc chắn muốn xóa khách hàng này?</h1>
        <h3><?php echo $customer->name; ?></h3>
        <form action="./index.php?page=delete" method="post">
            <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
            <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-danger"/>
                <a class="btn btn-default" href="index.php">Cancel</a>
            </div>
        </form>
</body>
</html>