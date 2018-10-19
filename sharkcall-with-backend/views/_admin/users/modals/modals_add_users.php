<!-- /Modal Entreprise -->
    <!-- line modal -->
    <div class="modal fade" id="modal_add_users" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabelAdd">Add User</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <!-- <form id="addNewUser" action="#" method="post"> -->
                    <div class="form-group">
                        <label for="inputName">Name : </label>
                        <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email : </label>
                        <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password : </label>
                        <input type="text" name="inputPassword" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="selectRole">Role : </label>
                        <select class="form-control" name="selectRole" id="selectRole">
                            <?php echo $listAllSelectUserRole; ?>
                        </select>
                    </div>
                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Cancel</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" id="btn_addUser" class="btn btn-success btn-hover-green" data-action="save" onclick="postAddUser([jQuery('#inputName').val(), jQuery('#inputEmail').val(), jQuery('#inputPassword').val(), jQuery('#selectRole').val()] );" role="button">Save</button>
                        </div>
                    </div>
                </div>
                    <!-- </form> -->
            </div>
        </div>
    </div>
<!-- /Modal Entreprise -->