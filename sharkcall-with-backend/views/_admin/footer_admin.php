    <!-- jQuery -->
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/jquery/jquery.min.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/raphael/raphael.min.js'?>"></script>
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/morrisjs/morris.min.js'?>"></script>
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/data/morris-data.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo constant('PATH') .'assets/admin-vendor/dist/js/sb-admin-2.js'?>"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo constant('PATH') .'assets/custom/admin-ajax.js'?>"></script>
    <script src="<?php echo constant('PATH') .'assets/custom/custom.js'?>"></script>

    <!-- SummerNote -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    
    <!-- Datatables Jquery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.10.18/b-1.5.4/b-html5-1.5.4/cr-1.5.0/r-2.2.2/sc-1.5.0/datatables.min.js"></script>

    <!-- DropzoneJS -->
    <script type="text/javascript" src="<?php echo constant('PATH') . 'assets/admin-vendor/dropzonejs/dropzone.js' ?>"></script>

    <!-- ImagePicker CSS -->
    <script type="text/javascript" src="<?php echo constant('PATH') . 'assets/admin-vendor/image-picker/image-picker.js'?>"></script>

    <script>
        $(document).ready( function () {
            $('#table_categories').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#table_subCategories').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#table_cities').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#table_users').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#table_contents').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#table_media').DataTable({
                "order": [ 0, 'desc' ]
            });
            $('#summernoteContent').summernote();
            $('#summernoteUpdateContent').summernote();
            $("#inputUpdateMediaCategory").imagepicker();
        });
    </script>

</body>

</html>


