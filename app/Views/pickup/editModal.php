<form id="pickAdd">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label for="Fname">Name</label>
                <input id="Fname" class="form-control purchaseselects" name="Fname" value="<?= $edit->Fname ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label for="Fage">Age</label>
                <input id="Fage" class="form-control purchaseselects" name="Fage" value="<?= $edit->Fage ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchasegrp mb-1" for="unit">Unit</label>
                <select class="selectpicker form-control" name="unit" placeholder="Select Unit">
                    <option value="inch" <?= ($edit->unit == "inch") ? "selected" : "" ?>>inch</option>
                    <option value="cm" <?= ($edit->unit == "cm") ? "selected" : "" ?>>cm</option>
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
                        <option value="<?= $row->id ?>" <?= ($edit->tax == $row->id) ? "selected" : "" ?>>
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
                <?php if (!empty($edit->file_location)): ?>
                    <div class="file-info">

                        <span class="file-name">
                            <span class="material-icons-outlined file-icon">description</span>
                            <a id="fileLink" href="<?= site_url($edit->file_location) ?>" class="text-decoration-none"
                                style="margin-top:10px !important;font-size:12px" download
                                aria-label="Download <?= $edit->file_name ?>"><?= $edit->file_name ?></a>
                        </span>
                        <span class="file-size badge rounded-pill"></span>
                        <button type="button" class="material-icons remove-file-icon btn btn-link p-0"
                            onclick="deleteFile('<?= $edit->file_location ?>')"
                            onKeyPress="if(event.key === 'Enter') deleteFile('<?= $edit->file_location ?>')"
                            aria-label="Delete file" style="margin-bottom:-10px;">delete</button>
                        <div class="progress-bar" style="width: 0; height: 5px; bottom: 0; position: absolute;">
                        </div>
                    </div>
                <?php endif; ?>
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
                                <option value="<?= $row->id ?>" <?= in_array($row->id, explode(',', $edit->tax_new)) ? "selected" : "" ?>><?= ucfirst($row->name) ?></option>
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
                <label class="switchslider"> <input type="checkbox" name="status" <?= ($edit->status == 1) ? "checked" : "" ?>><span class="slider round"></span></label>
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
    function deleteFile(fileLocation) {


        $.ajax({
            url: '<?= base_url() ?>/removeFile',
            type: 'POST',
            data: {
                file_location: fileLocation
            },
            success: function (response) {
                toastr.success(' file deleted  Successfully!', 'Success');
                $('.file-block').remove();
                var fileIconElement = document.querySelector('.file-icon');
                var fileNameElement = document.querySelector('.file-name');
                var fileRemoveElement = document.querySelector('.remove-file-icon');
                if (fileNameElement) {
                    fileNameElement.textContent = '';
                }
                if (fileIconElement) {
                    fileIconElement.textContent = '';
                }
                if (fileRemoveElement) {
                    fileRemoveElement.textContent = '';
                }
            },
            error: function (xhr, status, error) {
                // Handle error
                console.error(error);
                alert('An error occurred while deleting the file.');
            }
        });
    }
</script>
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
                    url: '<?= base_url() ?>/updatePickup/<?= $edit->id ?>',
                    data: dataForm,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (result) {
                        toastr.success('Updated successfully', 'Success');
                        getUsers();
                        $('#modal_md').modal('hide');
                    }
                });
            });
    });
</script>