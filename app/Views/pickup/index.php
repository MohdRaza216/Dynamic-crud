<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Page</title>

    <!-- jQuery (Load Before DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">




    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            // Initialize DataTable with export buttons
            if (!$.fn.DataTable.isDataTable('#pickupTable')) {
                $('#pickupTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                    paging: true,
                    searching: true,
                    ordering: true,
                    responsive: true
                });
            }

            // Ensure buttons exist before adding event listeners
            $(document).on('click', '#addButton', function () {
                alert('Add button clicked!');
            });

            $(document).on('click', '.delete-btn', function () {
                alert('Delete action will be implemented here.');
            });

            $(document).on('click', '.edit-btn', function () {
                alert('Edit action will be implemented here.');
            });

            $(document).on('click', '.view-btn', function () {
                alert('View action will be implemented here.');
            });
        });
    </script>

</head>

<body>
    <div class="container mt-5">
        <h2>Pickup Orders</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary"
            onclick="showComModal('<?= base_url('addModal') ?>', 'Add pickup')">
            ADD USER
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
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
                        <button class="btn btn-sm btn-info view-btn">
                            <img src="assets/img/view.svg" height="15px" width="15px" alt="View">
                        </button>
                        <button class="btn btn-sm btn-warning edit-btn">
                            <img src="assets/img/edit.svg" height="15px" width="15px" alt="Edit">
                        </button>
                        <button class="btn btn-sm btn-danger delete-btn">
                            <img src="assets/img/delete.svg" height="15px" width="15px" alt="Delete">
                        </button>
                    </td>
                </tr>
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