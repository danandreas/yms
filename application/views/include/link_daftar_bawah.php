<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>

<!-- bootstrap progress js -->
<script src="<?php echo base_url() ?>bootstrap/js/progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/nicescroll/jquery.nicescroll.min.js"></script>
<!-- icheck -->
<script src="<?php echo base_url() ?>bootstrap/js/icheck/icheck.min.js"></script>

<script src="<?php echo base_url() ?>bootstrap/js/custom.js"></script>


<!-- Datatables -->
<!-- <script src="bootstrap/js/datatables/js/jquery.dataTables.js"></script>
<script src="bootstrap/js/datatables/tools/js/dataTables.tableTools.js"></script> -->

<!-- Datatables-->
<script src="<?php echo base_url() ?>bootstrap/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/jszip.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/js/datatables/dataTables.scroller.min.js"></script>


<!-- pace -->
<script src="<?php echo base_url() ?>bootstrap/js/pace/pace.min.js"></script>
<script>
  var handleDataTableButtons = function() {
      "use strict";
      0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
        dom: "Bfrtip",
        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
        responsive: !0
      })
    },
    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons()
        }
      }
    }();
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#datatable').dataTable({
                "language":
                {
                    "decimal":        "Desimal",
                    "emptyTable":     "Data masih kosong",
                    "info":           "Menampilkan _START_ sampai _END_ pada _TOTAL_ data",
                    "infoEmpty":      "Menampilkan 0 sampai 0 pada 0 data",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Menampilkan _MENU_ data",
                    "loadingRecords": "Menunggu...",
                    "processing":     "Sedang proses...",
                    "search":         "Cari",
                    "zeroRecords":    "Data tidak ditemukan",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Selanjutnya",
                        "previous":   "Sebelumnya"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
    $('#datatable-keytable').DataTable({
      keys: true
    });
    $('#datatable-responsive').DataTable();
    $('#datatable-scroller').DataTable({
      ajax: "js/datatables/json/scroller-demo.json",
      deferRender: true,
      scrollY: 380,
      scrollCollapse: true,
      scroller: true
    });
    var table = $('#datatable-fixed-header').DataTable({
      fixedHeader: true
    });
  });
  TableManageButtons.init();
</script>
