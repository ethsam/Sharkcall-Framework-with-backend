<!-- CITY -->
<div id="CITY">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cities</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div id="alertSuccessAddCity" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your city has been added</div>

        <div id="alertSuccessUpdateCity" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your city has been updated</div>
        
        <div id="alertSuccessDeleteCity" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your city has been deleted</div>

        <div id="alertFailureCity" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occured</div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-large btn-block btn-success" onclick="showAddCity()">Add City</button>
                            </div>

                            <div class="col-lg-12" style="height: 20px"></div>

                            <div class="col-lg-12">
                                <table id="table_cities" class="display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>CityName</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $cityList; ?>
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
            <?php include_once(getcwd()."/views/_admin/cities/modals/modals_add_cities.php") ?>
            <?php include_once(getcwd()."/views/_admin/cities/modals/modals_update_cities.php") ?>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /CITY -->