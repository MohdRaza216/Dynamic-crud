
<!-- Add Order Modal -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderLabel">Add Pickup Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addOrderForm">
                    <div class="mb-3">
                        <label for="orderType" class="form-label">Order Type Title</label>
                        <input type="text" class="form-control" id="orderType" name="order_type_title" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="0">Pending</option>
                            <option value="1">Completed</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="assignedTo" class="form-label">Assigned To</label>
                        <input type="text" class="form-control" id="assignedTo" name="assigned_to" required>
                    </div>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {
        FormValidation.formValidation(
            document.getElementById('addOrderForm'),
            {
                fields: {
                    order_type_title: {
                        validators: {
                            notEmpty: {
                                message: 'The order type title is required'
                            }
                        }
                    },
                    assigned_to: {
                        validators: {
                            notEmpty: {
                                message: 'The assigned to field is required'
                            }
                        }
                    }
                },
                plugins: {
                    bootstrap: new FormValidation.plugins.Bootstrap5(), // Bootstrap 5 plugin
                }
            }
        ).on('core.form.valid', function () {
            var form = document.getElementById('addOrderForm');
            var formData = new FormData(form);

            $.ajax({
                url: '<?= base_url('/savePickup') ?>',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                    $('#addOrderModal').modal('hide');
                    alert('Adding order, please wait...');
                },
                success: function (response) {
                    toastr.success('Order added successfully!', 'success');
                    $('#addOrderModal').modal('hide');
                    location.reload();
                },
                error: function () {
                    alert('Error adding order.');
                }
            });
        });

    });

</script>
