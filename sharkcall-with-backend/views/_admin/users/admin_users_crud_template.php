<!-- USERS -->
<div id="USERS">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div id="alertSuccessAddUser" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your user has been added</div>

        <div id="alertSuccessUpdateUser" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your user has been updated</div>
        
        <div id="alertSuccessDeleteUser" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your user has been deleted</div>

        <div id="alertFailureUser" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occured</div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-large btn-block btn-success" onclick="showModal('modal_add_users')">Add user</button>
                            </div>

                            <div class="col-lg-12" style="height: 20px"></div>

                            <div class="col-lg-12">
                                <table id="table_users" class="display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $userList; ?>
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
            <?php include_once(getcwd()."/views/_admin/users/modals/modals_add_users.php") ?>
            <?php include_once(getcwd()."/views/_admin/users/modals/modals_update_users.php") ?>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /CATEGORY -->