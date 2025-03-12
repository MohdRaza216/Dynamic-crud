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
                    <button type="submit" class="btn btn-primary">Add Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

