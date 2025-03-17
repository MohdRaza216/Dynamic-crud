<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/salesqueen_logo.jpeg" type="image/x-icon">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- Stylesheets -->
    <link href="<?= base_url() ?>/assets/css/sidebar.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/datatables/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/select2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.standalone.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/file_upload/file_upload_style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/CRM.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/payroll/deduction.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/payroll/newpayroll.css">
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css">
    <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <!-- JavaScript Libraries -->
    <script src="<?= base_url() ?>/assets/js/jquery-3.3.1.js"></script>
    <script src="<?= base_url() ?>/assets/js/moment.js"></script>
    <script src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/datatables.jszip.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>
    <script src="<?= base_url() ?>/assets/Bootstrap5/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <script src="<?= base_url() ?>/assets/js/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="<?= base_url() ?>/assets/js/nav_notification.js"></script>
    <script src="<?= base_url() ?>/assets/js/nav_script.js"></script>

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
        <h3>PREVIEW</h3>
        <table>
            <tr>
                <td>
                    Name
                </td>
                <td><?= $edit->Fname ?></td>
            </tr>
            <tr>
                <td>
                    Age
                </td>
                <td><?= $edit->Fage ?></td>
            </tr>
            <tr>
                <td>
                    unit
                </td>
                <td><?= $edit->unit ?></td>
            </tr>
            <tr>
                <td>
                    tax
                </td>
                <td>
                    <?php
                    $this->db = \Config\Database::connect();
                    $taxs = $this->db->table('tax')->where('id', $edit->tax)->get()->getRow();
                    $tax = '';
                    if ($taxs) {
                        $tax = $taxs->name;
                    }

                    $tax_newdata = '';
                    if (!empty($edit->tax_new)) {
                        $taxes = explode(',', $edit->tax_new);
                        foreach ($taxes as $tax_data) {
                            $tax_name = $this->db->table('tax')->where('id', $tax_data)->get()->getRow();
                            $tax_newdata .= '<span class="tag">' . trim($tax_name?->name) . '</span> ';
                        }
                    }
                    $checked = $edit->status == 1 ? 'checked' : '';
                    ?>
                    <?= $tax ?>
                </td>
            </tr>
            <tr>
                <td>
                    tax new
                </td>
                <td><?= $tax_newdata ?></td>
            </tr>
            <tr>
                <td>
                    status
                </td>
                <td>
                    <label class="switchslider">
                        <input type="checkbox" class="myButton earningsstatus-toggle" <?= $checked ?> readonly />
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
        </table>
    </div>
</body>