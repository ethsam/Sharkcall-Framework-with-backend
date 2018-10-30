<!-- CATEGORY -->
<div id="CATEGORY">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Categories</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div id="alertSuccessAddCat" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your category has been added</div>

        <div id="alertSuccessUpdateCat" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your category has been updated</div>
        
        <div id="alertSuccessDeleteCat" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your category has been deleted</div>

        <div id="alertFailureCat" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occured</div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-large btn-block btn-success" onclick="showModal('modal_add_categories')">Add Category</button>
                            </div>

                            <div class="col-lg-12" style="height: 20px"></div>

                            <div class="col-lg-12">
                                <table id="table_categories" class="display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $categoryList; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <?php include_once(getcwd()."/views/_admin/categories/modals/modals_add_categories.php") ?>
            <?php include_once(getcwd()."/views/_admin/categories/modals/modals_update_categories.php") ?>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /CATEGORY -->