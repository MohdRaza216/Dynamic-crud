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
    $(document).ready(function() {
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
            .on('success.form.fv', function(e) {
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
                    success: function(result) {
                        toastr.success('Updated successfully', 'Success');
                        getUsers();
                        $('#modal_md').modal('hide');
                    }
                });
            });
    });
</script>
