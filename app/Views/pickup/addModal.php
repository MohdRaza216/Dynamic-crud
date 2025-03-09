<form id="form" action="">

    <div class="row">
        <div class="col-md-5">
            <div class="purchasegrp">
                <label class="purchaseinfo">Order Type Title</label>
                <input type="text" class="form-control purchaseselects" id="order-type" placeholder="Enter Order Type Title">
            </div>
        </div>
        <div class="col-md-6">
            <div class="checkbox">
                <label class="para">Status</label>
                <br>
                <label class="switchslider"><input type="checkbox" checked><span
                        class="slider round"></span></label>
            </div>
        </div>
    </div>
    <div class="row" id="parent2">
        <div class="col-md-5">
            <label for="tags" class="purchaseinfo mb-0">Preffered Module</label>
            <div class="purchasegrp">
                <div class=" dropdown-with-icon dropdownalignment">
                    <select class="selectpicker form-control" name="currency" placeholder="Select Preffered Module"  data-live-search="true">
                        <option value="36" data-subtext="Purchase Request">Purchase Request</option>
                        <option value="38" data-subtext="Purchase Order">Purchase Order</option>
                        <option value="41" data-subtext="Items">Items</option>
                        <option value="41" data-subtext="Logistics">Logistics</option>
                        <option value="41" data-subtext="AMC">AMC</option>
                        <option value="41" data-subtext="Manufacturing">Manufacturing</option>
                        <option value="41" data-subtext="Tailoring">Tailoring</option>
                        <option value="41" data-subtext="Service">Service</option>
                        <option value="41" data-subtext="Projects">Projects</option>
                        <option value="41" data-subtext="Task">Task</option>
                        <option value="41" data-subtext="Attachments">Attachments</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="purchasegrpp mt-0">
                <label for="unitname" class="purchaseinfo mb-1">Module Head</label>
                <div class=" dropdown-with-icon dropdownalignment">
        
                    <select class="selectpicker form-control" name="currency" multiple
                        data-actions-box="true" data-live-search="true" title="Select Module Head">
                        <option value="36" data-subtext="GHS">GHS</option>
                        <option value="38" data-subtext="MAD">MAD</option>
                        <option value="41" data-subtext="¢">GHS</option>
                    </select>
                    
                </div>
                <div class="p">
                    <button
                        id="add_btn2"
                        name="add"
                        class="ctctgrnbtn banking-plus-btn rounded"
                        data-ticket="true"
                        type="button"
                      >
                        <i class="fa fa-plus"></i>
                      </button>
                    </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-md-12 blkftr email-can-btn">
        <div class="modal-footer taskfooter add_dept_tab_btn">
            <button type="button" class="taskclose1 mr-0" data-bs-dismiss="modal">CLOSE</button>
            <div class="button_su">
                <span class="su_button_circle">
                </span>
                <!-- <button type="submit" class=" button_su_inner tasksave1 orderclr "> -->
                <button type="submit" class=" tasksave1 ms-0 tsk-btn-mr-5">
                    <span class="button_text_container ">
                        SAVE
                    </span></button>
            </div>
        </div>
    </div>
</div>   
    
</form>

<script>
    document.getElementById('date').addEventListener('click', () =>
    {
        if ('showPicker' in HTMLInputElement.prototype)
        {
            document.getElementById('date').showPicker();
        }
    })
</script>

 <script>
        $(document).ready(function ()
        {
            $("#add_btn2").click(function ()
            {
                $("#parent2").append('<div id="coldiv" class="row"><div class="col-md-5"><label for="tags" class="purchaseinfo mb-0">Preffered Module</label><div class="purchasegrp "><div class="dropdown-with-icon dropdownalignment"><select class="selectpicker form-control" name="currency" placeholder="Select Preffered Module" data-live-search="true"><option value="36" data-subtext="Purchase Request">Purchase Request</option><option value="38" data-subtext="Purchase Order">Purchase Order</option><option value="41" data-subtext="Items">Items</option><option value="41" data-subtext="Logistics">Logistics</option><option value="41" data-subtext="AMC">AMC</option><option value="41" data-subtext="Manufacturing">Manufacturing</option><option value="41" data-subtext="Tailoring">Tailoring</option><option value="41" data-subtext="Service">Service</option><option value="41" data-subtext="Projects">Projects</option><option value="41" data-subtext="Task">Task</option><option value="41" data-subtext="Attachments">Attachments</option></select></div></div></div><div class="col-md-5"><div class="purchasegrpp mt-0"><label for="unitname" class="purchaseinfo mb-1">Module Head</label><div class="dropdown-with-icon dropdownalignment"><select class="selectpicker form-control" name="currency" multiple data-actions-box="true" data-live-search="true" title="Select Module Head"><option value="36" data-subtext="GHS">GHS</option><option value="38" data-subtext="MAD">MAD</option><option value="41" data-subtext="¢">GHS</option></select></div></div> </div><div class="col-md-2"><div class="remov remov2"><button id="remove_btn" name="add" style="background-color: #fc2d42;border-radius: 4px 4px 4px 4px;" class="ctctgrnbtn banking-min-btn remove_btn2 " data-ticket="true" type="button"><i class="fa-solid fa-minus"></i></button></div></div></div></div></div></div> ');
                $('.selectpicker').selectpicker('refresh');
            });
            $(document).on('click', '#remove_btn', function ()
            {
                $(this).closest('#coldiv').remove();
            });
        });
    </script>

