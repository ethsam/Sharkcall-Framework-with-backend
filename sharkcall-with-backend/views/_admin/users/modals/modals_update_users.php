<!-- /Modal Entreprise -->
    <!-- line modal -->
    <div class="modal fade" id="modal_update_users" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabelUpdate">Update User</h3><span id="idUpdateUser"></span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputUpdateName">Name : </label>
                        <input type="text" name="inputUpdateName" class="form-control" id="inputUpdateName" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="inputUpdateEmail">Email : </label>
                        <input type="email" name="inputUpdateEmail" class="form-control" id="inputUpdateEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputUpdatePassword">Password (facultatif) : </label>
                        <input type="text" name="inputUpdatePassword" class="form-control" id="inputUpdatePassword" placeholder="A renseigné si vous voulez changez le mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label for="selectUpdateRole">Role : </label>
                        <select class="form-control" name="selectUpdateRole" id="selectUpdateRole">
                            <?php echo $listAllSelectUserRole; ?>
                        </select>
                    </div>
                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            
                            <div class="btn-group" role="group">
                                <button type="submit" id="btn_updateUser" class="btn btn-success btn-hover-green" data-action="save" onclick="postUpdateUser( [jQuery('#idUpdateUser').text(), jQuery('#inputUpdateName').val(), jQuery('#inputUpdateEmail').val(), jQuery('#selectUpdateRole').val(), jQuery('#inputUpdatePassword').val()] );" role="button">Ok</button>
                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"  role="button">Cancel</button>
                            </div>
                        </div>
                    </div>
                        <!-- </form> -->
            </div>
        </div>
    </div>
<!-- /Modal Entreprise -->