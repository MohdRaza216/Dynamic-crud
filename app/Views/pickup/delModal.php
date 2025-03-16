<form id="pickAdd">
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <h1>Are you sure you want to delete this record?</h1>
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
                    
                }
            })
            .on('success.form.fv', function(e) {
                e.preventDefault();
                var form = document.querySelector('#pickAdd');
                var dataForm = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/delPickup/<?= $edit->id ?>',
                    data: dataForm,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(result) {
                        toastr.success('Deleted successfully', 'Success');
                        getUsers();
                        $('#modal_md').modal('hide');
                    }
                });
            });
    });
</script>
