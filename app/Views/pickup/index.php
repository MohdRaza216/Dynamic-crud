<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= base_url('uploads/company_logo/favicon.png') ?>">

    <!-- Side bar -->
    <link href="<?= base_url() ?>/assets/css/sidebar.css" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--jquery-->
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-3.3.1.js"></script>

    <!--moment js-->
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/moment.js"></script>

    <!--Bootstrap 5 CSS--->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap.min.css">

    <!--Bootstrap Icons-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!--Bootstrap 5 JS--->
    <script type="text/javascript" src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap.bundle.min.js"></script>

    <!--datatables CSS--->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/buttons.dataTables.min.css">

    <!-- drag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script src="https://kit.fontawesome.com/de952d599f.js" crossorigin="anonymous"></script>

    <!--Datatables js-->
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/dataTables.responsive.min.js"></script>

    <!--Datatable dropdown----->
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.pdfmake.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.vfs_fonts.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.jszip.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>/assets/js/buttons.print.min.js"></script>

    <!--Dropdown select-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap-select.min.css">
    <script src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap-select.min.js"></script>

    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/toastr.min.css">
    <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>

    <!--form validation files-->
    <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>

    <!--Dropdown select-->

    <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/select2.min.css">
    <script src="<?= base_url() ?>/assets/Bootstrap5/js/select2.min.js"></script>

    <!--summernote-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- datepicker -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.standalone.min.css">
    <script src="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.min.js"></script>

    <!-- jquery confirm -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.css">
    <script src="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <!--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>-->
    <!--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />-->

    <!--main style css-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

    <!-- this is for journal entry  -->
    <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
    <!-- this is for journal entry  -->

    <!-- ctrl+v dropzone -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>

    <!--date range picker-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/daterangepicker.css">
    <script src="<?= base_url() ?>/assets/js/daterangepicker.min.js"></script>

    <!--new file upload-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/file_upload/file_upload_style.css">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />

    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <!--Sidebar-->
    <script src="<?= base_url() ?>/assets/js/nav_notification.js"></script>
    <script src="<?= base_url() ?>/assets/js/nav_script.js"></script>
    <!--image navbar-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css" />


    <!--tab/accordion-->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/activity.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/tab.css">

    <!-- CRM -->
    <link href="<?= base_url() ?>/assets/css/CRM.css" rel="stylesheet">
    <!-- Include ApexCharts library -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!--payroll-->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/employee.css">-->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/advance.css">-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/deduction.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/newpayroll.css">

    <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/payrun.css">-->
    <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/setting.css">-->



    <!-- barchart script cdn -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        .help-block {
            margin-left: 10px;
            color: red;
        }

        .acctb {
            margin-bottom: -20px !important;
        }

        .tag {
            font-size: 0.75em !important;
            border-width: 1px !important;
            border-style: solid !important;
            border-color: rgb(196, 200, 203) !important;
            border-image: initial !important;
            padding: 0.25em 0.4em !important;
            border-radius: 6px !important;
            margin: 0.2em !important;

        }
    </style>

</head>

<body>
    <div class="tblcontainer1 container-fluid">
        <div class="row interview_page">
            <div class="col-md-10 qarow">
                <h5>USER DATA</h5>
            </div>
            <div class="col-md-2">
                <button type="button" class="hrbtns contractbtn pull-right"
                    onclick="showComModal(`<?= base_url('addModal') ?>`,`Add pickup`)">
                    <i class="fa-solid fa-plus "></i> ADD USER</button>
            </div>
        </div>

        <div class="row interview_page">
            <div class=" card col-md-12 me-3" id="first_col">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12" id="first_col">
                            <div class="demo-html mt-0 interview_index_">

                                <table
                                    class="example display dataTable display responsive nowrap tblalign table borderless index3_page"
                                    id="example" aria-describedby="example_info">
                                    <thead class="theadrow">
                                        <tr>
                                            <th><input type="checkbox" id="all_check" onchange="checkAll()"></th>
                                            <th>
                                                Order Type Title
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Preffered Module
                                            </th>
                                            <th>
                                                Module Head
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="index3_body">
                                        <tr class="row-hover">
                                            <td class="progtble"><input type="checkbox"
                                                    onchange="toggleRowBackground(this)" class="single_check"
                                                    onclick=" singleCheck()"></td>

                                            <td class="hrtble1 index3_row1"><a href="#" class="">
                                                    <span class="viewbtn">GHS</span></a>

                                                <p class="header-effect index3_editbtn">

                                                    <a onclick="toggleViews(1)" data-bs-toggle="tooltip"
                                                        data-placement="bottom" data-bs-title="view"
                                                        data-bs-auto-close="outside">
                                                        <img src="assets/img/view.svg" height="15px" width="15px"
                                                            alt="">
                                                    </a>

                                                    <a onclick="showModal('add.html','Edit Order Status')"
                                                        data-bs-toggle="tooltip" data-bs-title="edit"
                                                        data-bs-auto-close="outside">
                                                        <img src="assets/img/edit.svg" height="15px" width="15px"
                                                            alt="">
                                                    </a>


                                                    <a href="sales_invoice_edit.html" data-bs-toggle="tooltip"
                                                        data-bs-title="delete" data-bs-auto-close="outside">
                                                        <img src="assets/img/delete.svg" height="15px" width="15px"
                                                            alt="">
                                                    </a>

                                                </p>

                                            </td>
                                            <td><label class="switchslider"> <input type="checkbox" checked><span
                                                        class="slider round"></span></label></td>
                                            <td>Purchase Request</td>
                                            <td>Anna , Besant</td>
                                        </tr>

                                        <tr class="row-hover">
                                            <td class="progtble"><input type="checkbox"
                                                    onchange="toggleRowBackground(this)" class="single_check"
                                                    onclick=" singleCheck()"></td>

                                            <td class="hrtble1 index3_row1"><a href="#" class="">
                                                    <span class="viewbtn">GHS</span></a>

                                                <p class="header-effect index3_editbtn">

                                                    <a onclick="toggleViews(1)" data-bs-toggle="tooltip"
                                                        data-placement="bottom" data-bs-title="view"
                                                        data-bs-auto-close="outside">
                                                        <img src="assets/img/view.svg" height="15px" width="15px"
                                                            alt="">
                                                    </a>

                                                    <a onclick="showModal('add.html','Edit Order Status')"
                                                        data-bs-toggle="tooltip" data-bs-title="edit"
                                                        data-bs-auto-close="outside">
                                                        <img src="assets/img/edit.svg" height="15px" width="15px"
                                                            alt="">
                                                        </a>


                                                        <a href="sales_invoice_edit.html" data-bs-toggle="tooltip"
                                                            data-bs-title="delete" data-bs-auto-close="outside">
                                                            <img src="assets/img/delete.svg" height="15px" width="15px"
                                                                alt="">
                                                        </a>

                                                </p>

                                            </td>
                                            <td><label class="switchslider"> <input type="checkbox" checked><span
                                                        class="slider round"></span></label></td>
                                            <td>Purchase Order</td>
                                            <td>Anna , Besant</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!----view toggle-->
            <div id="sec_col" class="col-md-6 exptblecol sec-column tablesideopenermt-3 p-2">
                <div id="showcontent" class="displaysblock">
                    <div class="expbodysec sec-column-body p-3">
                        <div class="fixed-buttons-right">

                            <button type="button" class="editpenbtn " data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Edit Expense" id="view_edit"><i
                                    class="fa fa-edit expicon "></i></button>
                            <button id="view_print" type="button" class="editpenbtn" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Print"><i
                                    class="bi bi-printer expicon "></i></button>
                            <button id="view_pdf" type="button" class="editpenbtn" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Pdf"><i
                                    class="bi bi-file-earmark-pdf"></i></button>
                            <button type="button" class="editpenbtn" id="view_copy" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Copy"><i
                                    class="fa fa-clone expicon "></i></i></button>
                            <button type="button" class="editpenbtn" id="delete_view" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" data-bs-title="Delete">
                                <!-- <i class="fa fa-times expicon"></i> -->
                                <img src="assets/img/delete.svg" alt="">
                            </button>
                            <button type="button" onclick="togg(1)" class="editpenbtn "
                                class="contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle" data-bs-toggle="tooltip"
                                data-bs-title="Toggle Table" data-bs-original-title="" title="" data-bs-trigger="hover">
                                <i class="fa-solid fa-angle-left isvg" aria-hidden="true"></i>
                            </button>
                            <span id="view_invoice"></span>
                        </div>
                        <!--demo-->

                        <div class="row ">
                            <div class="col-md-12 ">
                                <div class="desktop desk-mrg-top20">
                                    <div class="scroll-images custml toptea border-bott">
                                        <div class="child mb-0 ms-3 childd-tabb">
                                            <button class="tablinks tb-links childd-tabb-links active"
                                                onclick="openTab(event, 'Tab1')">PREVIEW</button>
                                        </div>

                                        <div class="child mb-0 childd-tabb">
                                            <button id="expandbtn"
                                                class="tablinks tb-links expand-button childd-tabb-links"
                                                data-toggle="tooltip" data-bs-title="Toggle full view"
                                                data-bs-custom-class="custom-tooltip" data-bs-trigger="hover"><i
                                                    class="fa fa-expand"></i></button>
                                        </div>

                                    </div>
                                </div>
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false">
                                    <div class="carousel-inner scroll-images">

                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="child childauto mb-0">
                                                    <button class="tablinks tabresact childd-tabb-links-carsl active"
                                                        onclick="openTab(event, 'Tab1')">PREVIEW</button>
                                                </div>
                                            </div>
                                        </div>


                                        <button id="prevButton" class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <i class="bi bi-chevron-left icon"></i>
                                            <span class="visually-hidden">Previous</span>
                                        </button>

                                        <button id="nextButton" class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <i class="bi bi-chevron-right icon"></i>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <hr class="fileline ">
                            </div>
                        </div>

                        <!-- For Tab 1 -->
                        <div id="Tab1" class="tabcontent ">
                            <!-- Preferred Module Section -->
                            <div class="row row-mtop10 draggable-section" id="preferredModule" draggable="true"
                                ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="col-md-12">
                                    <h4 class="general-info23 general-info-color index_sideview_head">AMC</h4>
                                </div>
                                <div class="index3_view_hr">
                                    <hr class="fileline" />
                                </div>
                                <div class="row tb-margin">
                                    <div class="col-md-12">
                                        <table class="details-table table table-striped tblebrdr">
                                            <tbody>
                                                <tr class="project-overview greyback">
                                                    <td class="viewjobft"><b>Purchase Request : </b></td>
                                                    <td class="viewjobft">01</td>
                                                </tr>
                                                <tr class="project-overview greyback">
                                                    <td class="viewjobft"><b>Purchase Request : </b></td>
                                                    <td class="viewjobft">01</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Module Head Section -->
                            <div class="row row-mtop10 draggable-section" id="moduleHead" draggable="true"
                                ondragstart="drag(event)" ondrop="drop(event)" ondragover="allowDrop(event)">
                                <div class="col-md-12">
                                    <h4 class="general-info23 general-info-color index_sideview_head">Logistics</h4>
                                </div>
                                <div class="index3_view_hr">
                                    <hr class="fileline" />
                                </div>
                                <div class="row tb-margin">
                                    <div class="col-md-12">
                                        <table class="details-table table table-striped tblebrdr">
                                            <tbody>
                                                <tr class="project-overview greyback">
                                                    <td class="viewjobft"><b>Purchase Request : </b></td>
                                                    <td class="viewjobft">01</td>
                                                </tr>
                                                <tr class="project-overview greyback">
                                                    <td class="viewjobft"><b>Purchase Request : </b></td>
                                                    <td class="viewjobft">01</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!--demo end-->
                    </div>
                </div>

            </div>
        </div>

    </div>





    <!-- modal-->
    <div class="modal fade" id="modal_md" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-width">
                <div class="modal-header hdrbg">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <!-- <h5 class="modal-title"></h5> -->
                    <h5 class="fnt_head mt-1 mb-0">

                        <b class="modal-title"></b>
                        <div class="vertical-line">

                            <span class="Bcgtop capsule"></span>
                            <span class="Bcgbttm capsule"></span>
                        </div>
                    </h5>
                </div>

                <div class="modal-body mbdclr">
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
// Function to open a specific tab
function openTab(evt, tabName) {
var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// // Show the current tab, and add an "active" class to the button that opened the tab
// document.getElementById(tabName).style.display = "block";
// if (evt) {
// evt.currentTarget.className += " active";
// }

// Show the current tab, and add an "active" class to the button that opened the tab
document.getElementById(tabName).style.display = "block";
evt.currentTarget.className += " active";
}

// Ensure that when the carousel is changed, the correct tab is opened
var carousel = document.getElementById("carouselExampleIndicators");
carousel.addEventListener("slid.bs.carousel", function (event) {
var activeSlideIndex = event.to;
if (activeSlideIndex === 0) {
openTab(null, 'Tab1');
} else if (activeSlideIndex === 1) {
openTab(null, 'Tab2');
} else if (activeSlideIndex === 2) {
openTab(null, 'custom');
}
});

// On page load, ensure the first tab is visible
window.onload = function() {
openTab(null, 'Tab1');
};
</script> -->

    <script>
        function openTab(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Automatically open the first tab when the page loads
        // document.addEventListener("DOMContentLoaded", function ()
        // {
        // document.getElementsByClassName("tab")[0].click();
        // });
        var carousel = document.getElementById("carouselExampleIndicators");

        carousel.addEventListener("slid.bs.carousel", function (event) {
            var activeSlideIndex = event.to;
            if (activeSlideIndex === 0) {

                openTab(event, 'Tab1');

            }
            else if (activeSlideIndex === 1) {

                openTab(event, 'Tab2');

            }
            else if (activeSlideIndex === 2) {

                openTab(event, 'custom');

            }
        });



    </script>

    <script>
        function allowDrop(ev) {
            ev.preventDefault(); // Allows the drop event
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id); // Store the ID of the section being dragged
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text"); // Get the ID of the dragged element
            var draggedElement = document.getElementById(data); // The dragged section

            // If the target is another section, insert the dragged section before or after it
            if (ev.target.closest('.draggable-section')) {
                let targetElement = ev.target.closest('.draggable-section');

                // Insert the dragged section after the target section
                targetElement.insertAdjacentElement('afterend', draggedElement);
            }
        }
    </script>

    <!-- modal -->
    <script>
        function showModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function () {
                $('.selectpicker').selectpicker('refresh');
            });
            $('#modal_md').modal('show', { backdrop: 'true' });
            $.ajax({
                url: url,
                success: function (response) {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>



    <!-- DATATABLE -->
    <script>
        $(document).ready(function () {
            var table = $('.example').DataTable({

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
                responsive: true,
                dom: 'Blfrtip',

                buttons: [
                    {

                    },

                    {
                        text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
                    },
                    // {
                    // text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
                    // },
                    {
                        text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
                        extend: 'collection',
                        buttons: [
                            // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
                            {},
                            {
                                text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> Excel',
                                extend: 'excel',

                            },
                            {
                                text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
                                extend: 'csv',
                            },
                            {
                                text: '<i class="fa-regular fa-file-pdf icn me-2 pdf-icon"></i> PDF',
                                extend: 'pdf'
                            },
                            {
                                text: '<i class="fa-solid fa-print me-2 icn print-icon"></i> PRINT',
                                extend: 'print'
                            },
                        ],
                        className: 'px-3'

                    }

                ],


            });

        });
        function checkAll() {
            checkbox = document.getElementById("all_check");
            if (checkbox.checked == true) {
                $('.single_check').prop("checked", true);
                $('.bulk_send').show(1000);
            } else {
                $('.single_check').prop("checked", false);
                $('.bulk_send').hide(1000);
            }
        }
        function singleCheck(id) {
            checkbox = document.getElementById("check_" + id);
            boxes = document.getElementsByClassName("single_check");


            if (checkbox.checked == true) {
                $('.bulk_send').show(1000);
            } else {
                count = 0;
                for (let i = 0; i < boxes.length; i++) {
                    if (boxes[i].checked == true) {
                        count += 1;
                    }
                }
                if (count == 0) {
                    $('.bulk_send').hide(1000);
                    $('#all_check').prop("checked", false);
                } else {
                    $('.bulk_send').show();
                }
            }
        }

        $(document).ready(function () {
            const single_checks = document.querySelectorAll('.single_check');
            const rows = document.querySelectorAll('table.dataTable tbody tr');
            single_checks.forEach((singleCheck) => {
                singleCheck.addEventListener('click', (e) => {
                    e.stopPropagation();
                    singleCheck.checked = false;
                })
                singleCheck.addEventListener('dblclick', (e) => {
                    e.stopPropagation();
                    singleCheck.checked = true;

                })
            })
            rows.forEach((row) => {

                row.addEventListener('dblclick', () => {
                    if (row.firstElementChild.children[0].checked == false) {
                        row.firstElementChild.children[0].checked = true
                    } else {
                        row.firstElementChild.children[0].checked = false

                    }
                })
            })

        })


    </script>

    <script>
        new DataTable('.example', {
            columnDefs: [
                {
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }
            ],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [[1, 'asc']]
        });
    </script>
    <script>
        function toggleRowBackground(checkbox) {
            var row = checkbox.closest('tr');
            row.classList.toggle('selected');
        }
    </script>
    <!--Multiselect-->
    <script>
        const dropdowns = document.querySelectorAll('.multiselect');

        dropdowns.forEach(dropdown => {
            const inputBox = document.createElement('input');
            inputBox.type = 'hidden';
            inputBox.classList.add('selected-values');
            name = dropdown.getAttribute('data-name');
            inputBox.setAttribute("name", name);
            dropdown.after(inputBox);

            dropdown.addEventListener('change', () => {
                const selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
                inputBox.value = selectedOptions.join(', ');
            });
        });
    </script>
    <!-- script for toggle table -->

    <script>
        $(document).ready(function () {
            $('#myMultiselect').select2({
                tags: true,
                tokenSeparators: [',', ' '], // Allows entering multiple values separated by commas or spaces
            });
        });
    </script>




    <!-- tooltip -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>











    <script>
        const ths = document.querySelectorAll('table.dataTable.display thead tr th');
        ths.forEach((th) => {

            th.addEventListener('click', () => {
                th.style.backgroundColor = "rgba(237, 236, 236, 0.995)";

            })

        })
    </script>

    <script>
        $(document).ready(function () {
            const td = document.querySelector('table.dataTable.display tbody tr td');
            const table = document.querySelector('table.dataTable.display');
            // const options = document.querySelectorAll('.dataTables_wrapper .dataTables_length select option');
            if ($('table.dataTable.display tbody tr').length < 2) {
                if (td.innerHTML == 'No data available in table') {
                    table.insertAdjacentHTML('afterend', `<div style="width:100%;display:flex;justify-content:center"> <img src="assets\img\page404.png" height="500vmin" width="500vmin"
alt="three-dots" data-bs-toggle="tooltip" data-bs-title="more"
data-bs-auto-close="outside"> </div>`)
                }
            }

            // options.forEach((option) => {
            // console.log(option);
            // option.addEventListener('click', () => {
            // alert('hi')
            // option.style.color = 'red !important';
            // })
            // })
        });
    </script>



    <script>
        let rightSidebarToggle = document.getElementById("rightSliderToggle");
        let sidebarRight = document.getElementById("sidebarRight");
        let closeBtn = document.querySelector(".close-btn");
        let hoverTimer;

        rightSidebarToggle.addEventListener("click", () => {

            sidebarRight.style.right = "0vw";
        });

        window.addEventListener('keydown', (e) => {

            if (e.key == "q") {
                if (sidebarRight.style.right == "0vw") {
                    sidebarRight.style.right = "-100vw";
                } else {
                    sidebarRight.style.right = "0vw";

                }
            }
        })


        rightSidebarToggle.addEventListener("mouseover", () => {
            // Set a timer to wait for 2 seconds before showing the sidebar
            hoverTimer = setTimeout(() => {
                sidebarRight.style.right = "0vw";
            }, 2000); // 2000 milliseconds = 2 seconds
        });

        rightSidebarToggle.addEventListener("mouseout", () => {
            // If the mouse leaves the button before 2 seconds, cancel the timer
            clearTimeout(hoverTimer);
        });
        closeBtn.addEventListener("click", () => {
            console.log("clicked close");
            sidebarRight.style.right = "-100vw";
        });

    </script>










    <!-- modal -->
    <script>
        function showModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function () {
                $('.selectpicker').selectpicker('refresh');
            });
            $('#modal_md').modal('show', { backdrop: 'true' });
            $.ajax({
                url: url,
                success: function (response) {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>
    <script>
        function showModal2(url, title) {
            $("#modal_md1").on("shown.bs.modal", function () {
                $(".selectpicker").selectpicker("refresh");
            });
            $("#modal_md1").modal("show", { backdrop: "true" });

            $("#modal_md1").on("hidden.bs.modal", function () {
                document.getElementById('hlo').style.display = 'none';
            });

            $.ajax({
                url: url,
                success: function (response) {
                    $("#modal_md1 .modal-title").html(title);
                    $("#modal_md1 .modal-body").html(response);
                },
            });
            document.getElementById('hlo').style.display = 'block'
        }
    </script>













    <!--demo-->
    <!-- script for toggle table -->



    <!-- <script>
function toggleViews(id)
{
$.ajax({
type: 'POST',
url: '<?= base_url() ?>/Crm/getUserstab/' + id,
dataType: 'json',
success: function (result)
{
$('#stripedtab').html(result);
}
});




var hidden_columns = [];
var _visible = false;
if ($("#first_col").hasClass("col-md-12"))
{
$("#first_col").removeClass("col-md-12").addClass("col-md-5 pe-0");
// $("#first_col").removeClass("col-md-12").addClass("col-md-4");
$("#sec_col").show();

} else
{
$("#first_col").removeClass("col-md-5 pe-0").addClass("col-md-12");
 
$("#sec_col").hide();
_visible = true;
}

var _table = $("#example").DataTable();
// Show hide hidden columns
_table.columns(hidden_columns).visible(_visible, true);
_table.columns.adjust();

$('#toggle_btn').on('click', function ()
{
// Assuming you have an ID to pass to the toggleView function, replace 'yourId' with the actual ID
var element = document.getElementById(ID);
if (event.target.checked)
{
element.style.display = "block";
} else
{
element.style.display = "none";
}


});

// script for expand button
$("#expandbtn").click(function ()
{
if ($("#sec_col").hasClass("col-md-7"))
{
$("#sec_col").removeClass("col-md-7").addClass("col-md-12");
$("#first_col").hide();
} else
{
$("#sec_col").removeClass("col-md-12").addClass("col-md-7");
$("#first_col").show();
}
});
}
</script> -->
    <script>
        function toggleViews(id) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Crm/getUserstab/' + id,
                dataType: 'json',
                success: function (result) {
                    $('#stripedtab').html(result);
                }
            });
            var hidden_columns = [4, 5, 6, 7];
            var _visible = true;
            if ($("#first_col").hasClass("col-md-12")) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-5");
                _visible = false;
                $("#sec_col").show();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-5").addClass("col-md-12");
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            // Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        }
    </script>
    <script>
        $("#toggle_btn").click(function () {
            var hidden_columns = [4, 5, 6, 7];
            var _visible = true;
            if ($("#first_col").hasClass("col-md-12")) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-5");
                _visible = false;
                $("#sec_col").show();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-5").addClass("col-md-12");
                $("#sec_col").hide();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-right")
                    .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
            // Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });

        // script for expand button
        $("#expandbtn").click(function () {
            if ($("#sec_col").hasClass("col-md-6")) {
                $("#sec_col").removeClass("col-md-6").addClass("col-md-12");
                $("#first_col").hide();
            } else {
                $("#sec_col").removeClass("col-md-12").addClass("col-md-6");
                $("#first_col").show();
            }
        });


        // view toggle for show contract
        $(".viewbtn").click(function () {
            var hidden_columns = [4, 5];
            var _visible = false;
            if ($("#first_col").hasClass("col-md-12")) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-5");
                $("#sec_col").show();
                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");


            }
            var _table = $("#example").DataTable();
            // Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();

            $("#showcontent").show();
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#myMultiselect').select2({
                tags: true,
                tokenSeparators: [',', ' '], // Allows entering multiple values separated by commas or spaces
            });
        });
    </script>


    <script>
        function showComModal(url, title) {
            $('#modal_md').on('shown.bs.modal', function () {
                $('.selectpicker').selectpicker('refresh');
            });
            $.ajax({
                url: url,
                success: function (response) {
                    $('#modal_md').modal('show', {
                        backdrop: 'true'
                    });
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            var table = $("#measure-table").DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                language: {
                    lengthMenu: '_MENU_',
                    search: '',
                    searchPlaceholder: " Search for order ID, customer, order status or something...",
                    className: 'px-3'
                },
                responsive: true,
                dom: 'Blfrtip',
                pageLength: 50,
                buttons: [{

                },

                // {
                //   text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
                // },

                {
                    text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
                    extend: 'collection',
                    buttons: [
                        // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
                        {},
                        {
                            text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> Excel',
                            extend: 'excel',

                        },
                        {
                            text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
                            extend: 'csv',
                        },
                        {
                            text: '<i class="fa-regular fa-file-pdf icn me-2 pdf-icon"></i> PDF',
                            extend: 'pdf'
                        },
                        {
                            text: '<i class="fa-solid fa-print me-2 icn print-icon"></i> PRINT',
                            extend: 'print'
                        },
                    ],
                    className: 'px-3'

                }
                ],
                initComplete: function () {
                    // Add the id and other attributes to the search input
                    var searchInput = $('.dataTables_filter input');
                    searchInput.attr('id', 'tablesearchinput');
                    searchInput.attr('data-bs-toggle', 'tooltip');
                    searchInput.attr('data-placement', 'bottom');
                    searchInput.attr('data-bs-title', '(CTRL+F)');
                    searchInput.attr('data-bs-auto-close', 'outside');
                    searchInput.attr('id', 'searchtooltip');

                    // Initialize tooltip
                    new bootstrap.Tooltip(searchInput[0]);


                    // Hide the tooltip on focus or click
                    searchInput.on('input', function () {
                        bootstrap.Tooltip.getInstance(this).hide();
                    });
                }
            });
        }

        );
    </script>
    <script>
        function getAmountByReferenceCode() {
            var referenceCode = document.getElementById('referred_by').value;

            fetch('tableStore' + referenceCode)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('amount').value = data.amount;
                    document.getElementById('wallet').innerText = data.amount;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    <script>
        function getUsers() {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/fetchPick',
                dataType: 'json',
                success: function (table) {
                    console.log(table);
                    $('#sales-table').html(table);
                }
            });
        }
        getUsers();
    </script>
    <script>
        function getAmountByReferenceCode() {
            var referenceCode = document.getElementById('referred_by').value;

            fetch('tableStore' + referenceCode)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('amount').value = data.amount;
                    document.getElementById('wallet').innerText = data.amount;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.earningsstatus-toggle', function () {
                var EarningTypeId = $(this).data('earningsid');
                var newStatus = $(this).is(':checked') ? 1 : 0;
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/pickupStatus',

                    data: {
                        earningTypeId: EarningTypeId,
                        newStatus: newStatus
                    },
                    dataType: 'json',
                    success: function (result) {
                        toastr.success('updated successfully', 'Success');
                        getUsers()
                    }
                });
            });
        });
    </script>
</body>
</html>
