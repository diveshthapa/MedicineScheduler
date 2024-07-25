<footer class="footer mt-5 <?= in_array($page, ['login', 'registration']) ? " w-100 bg-dark" : "" ?>">
    <div class="container">
        <div class=" row">
            <div class="col-12">
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="<?= base_url ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url ?>assets/js/plugins/perfect-scrollbar.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url ?>assets/DataTables/datatables.min.js"></script>
<script src="<?= base_url ?>assets/DataTables/Responsive-2.2.9/js/dataTables.responsive.min.js"></script>

<!-- Select2 -->
<script src="<?= base_url ?>assets/select2/dist/js/select2.min.js"></script>

 <!-- Summernote  -->
<script src="<?= base_url ?>assets/summernote/summernote-lite.min.js" type="text/javascript"></script>

<script>
    $(function() {
        window.uni_modal = function($title = '', $url = '', $size = "") {
            start_loader()
            $.ajax({
                url: $url,
                error: err => {
                    console.log()
                    alert("An error occured")
                },
                success: function(resp) {
                    if (resp) {
                        $('#uni_modal .modal-title').html($title)
                        $('#uni_modal .modal-body').html(resp)
                        if ($size != '') {
                            $('#uni_modal .modal-dialog').addClass($size + '  modal-dialog-centered')
                        } else {
                            $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                        }

                        $('#uni_modal').modal('show')
                        end_loader()
                    }
                }
            })
        }
        window._conf = function($msg = '', $func = '', $params = []) {
            $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
            $('#confirm_modal .modal-body').html($msg)
            $('#confirm_modal').modal('show')
        }
    })
</script>