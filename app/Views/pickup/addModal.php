<form id="pickAdd">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label for="Fname">Name</label>
                <input id="Fname" class="form-control purchaseselects" name="Fname">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label for="Fage">Age</label>
                <input id="Fage" class="form-control purchaseselects" name="Fage">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchasegrp mb-1" for="unit">Unit</label>
                <select class="selectpicker form-control" name="unit" placeholder="Select Unit">
                    <option value="inch" selected>inch</option>
                    <option value="cm">cm</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchasegrp mb-1" for="tax">tax</label>
                <select class="selectpicker form-control" name="tax" placeholder="Select tax">
                    <?php foreach ($tax as $row): ?>
                        <option value="<?= $row->id ?>">
                            <?= ucfirst($row->name) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp my-0">
                <label for="subject" class="purchaseinfo mb-1">Image
                    Upload</label>
                <input type="file" name="file" id="files" class="form-control purchaseselects upf fleinpt"
                    accept=".png, .jpg, .jpeg, .gif">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo repeat mb-1">tax_new</label>
                <div class="dropdown-with-icon dropdownalignment">
                    <select class="selectpicker form-control" name="tax_new[]" multiple data-actions-box="true"
                        data-live-search="true" title="Select Service">
                        <?php if (!empty($tax)) { ?>
                            <?php foreach ($tax as $row) { ?>
                                <option value="<?= $row->id ?>"><?= ucfirst($row->name) ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="purchasegrp">
                <label class="purchaseinfo mb-1">Status</label><br>
                <label class="switchslider">
                    <input type="checkbox" name="status" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">
                    CLOSE
                </button>
                <button type="submit" class="tasksave1">SAVE</button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('#pickAdd').formValidation({
            framework: 'bootstrap',
            fields: {
                Fname: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required'
                        },
                    }
                },
                Fage: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required'
                        },
                    }
                }
            }
        })
            .on('success.form.fv', function (e) {
                e.preventDefault();
                var form = document.querySelector('#pickAdd');
                var dataForm = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/savePickup',
                    data: dataForm,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (result) {
                        toastr.success('Added successfully', 'Success');
                        getUsers();
                        $('#modal_md').modal('hide');
                    }
                });
            });
    });
</script>