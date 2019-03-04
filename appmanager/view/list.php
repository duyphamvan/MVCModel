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
    <h2>Danh sách khách hàng</h2>
    <a href="./index.php?page=add" class="btn btn-primary btn-info btn-sm">Thêm mới</a>
    <table class="table table-bordered mt-3">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $customer->name ?></td>
            <td><?php echo $customer->email ?></td>
            <td><?php echo $customer->address ?></td>
            <td> <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-danger btn-sm">Delete</a></td>
            <td> <a href="./index.php?page=edit&id=<?php echo $customer->id; ?>" class="btn btn-success btn-sm">Update</a></td>
        </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<?php
//var_dump($customers);