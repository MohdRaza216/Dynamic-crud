<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Page</title>
    <link rel="shortcut icon" href="assets/img/salesqueen_logo.jpeg" type="image/x-icon">

    <!-- jQuery (Load Before DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/de952d599f.js" crossorigin="anonymous"></script>

    <!-- DataTables CSS & JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>

    <!-- Summernote -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Moment.js & Date Range Picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/salesagentprogram.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/salesagentdashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/inventory_item.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/inventory_menu.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/recruitment.css') ?>">

    <style>
        body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(to right, #ece9e6, #ffffff);
    padding: 20px;
}

.card {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.btn {
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
}

.btn:hover {
    transform: scale(1.05);
}

.table {
    border-radius: 10px;
    overflow: hidden;
}

.table th {
    background: #007bff;
    color: white;
    text-transform: uppercase;
}

.table tr:hover {
    background: rgba(0, 123, 255, 0.1);
}

.search-box {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 8px;
    outline: none;
}

    </style>
    <script>
        $(document).ready(function () {
            if (!$.fn.DataTable.isDataTable('#pickupTable')) {
                $('#pickupTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                    paging: true,
                    searching: true,
                    ordering: true,
                    responsive: true
                });
            }
        });
    </script>
</head>

<body>
    <div class="container mt-5">
        <h2>Pickup Orders</h2>
        <button type="button" class="btn btn-primary" onclick="showComModal('<?= base_url('addModal') ?>', 'Add pickup')">ADD USER</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">...</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <table id="pickupTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Order Type Title</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GHS</td>
                    <td><input type="checkbox" checked></td>
                    <td>Anna, Besant</td>
                    <td>
                        <button class="btn btn-sm btn-info view-btn">View</button>
                        <button class="btn btn-sm btn-warning edit-btn">Edit</button>
                        <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function showComModal(url, title) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function (data) {
                    $('#exampleModal .modal-body').html(data);
                    $('#exampleModalLabel').text(title);
                    $('#exampleModal').modal('show');
                },
                error: function () {
                    alert('Error loading modal content.');
                }
            });
        }
    </script>
</body>
</html>
