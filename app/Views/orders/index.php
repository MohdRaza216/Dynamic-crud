<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Order List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order['id'] ?></td>
                        <td><?= $order['customer_name'] ?></td>
                        <td><?= $order['product_name'] ?></td>
                        <td><?= $order['quantity'] ?></td>
                        <td><?= $order['total_price'] ?></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
