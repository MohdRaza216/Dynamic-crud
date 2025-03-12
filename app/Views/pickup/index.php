<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Orders</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <!-- jQuery (Must be loaded FIRST) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h2>Pickup Orders</h2>
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addOrderModal">Add Order</button>

        <?php include 'addModal.php'; ?>

        <table id="orderTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Type Title</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "user");
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM pickups ORDER BY created_at DESC";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['order_type_title']}</td>
                        <td>" . ($row['status'] ? "Completed" : "Pending") . "</td>
                        <td>{$row['assigned_to']}</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            // Form submission via AJAX
            $("#addOrderForm").submit(function (event) {
                event.preventDefault();
                $.ajax({
                    url: "add_order.php",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        alert(response);
                        location.reload();
                    }
                });
            });

            // DataTables initialization
            $('#orderTable').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                paging: true,
                searching: true,
                ordering: true,
                responsive: true,
                autoWidth: false
            });
        });
    </script>
</body>

</html>
