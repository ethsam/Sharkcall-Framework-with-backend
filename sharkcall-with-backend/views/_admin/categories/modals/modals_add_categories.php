<!-- /Modal Entreprise -->
    <!-- line modal -->
    <div class="modal fade" id="modal_add_categories" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabelAdd">Add Category</h3>
                </div>
                <div class="modal-body">
                    <!-- content goes here -->
                    <!-- <form id="addNewCategory" action="#" method="post"> -->
                    <div class="form-group">
                        <label for="inputDesignation">Designation : </label>
                        <input type="text" name="inputDesignation" class="form-control" id="inputDesignation" placeholder="Designation">
                    </div>
                    <label for="inputMediaCategory">Select Image for this category : </label>
                    <div class="form-group" style="overflow:scroll; height:60vh;">
                        <select name="inputMediaCategory" id="inputMediaCategory">
                            <option value></option>
                            <option value="0"></option>;
                            <?php echo $listAllSelectCategoryImage; ?>
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
                            <button type="submit" id="btn_addCategory" class="btn btn-success btn-hover-green" data-action="save" onclick="postAddCategory([jQuery('#inputDesignation').val(), jQuery('#inputMediaCategory').val() ]);" role="button">Sauvegarder</button>
                        </div>
                    </div>
                </div>
                    <!-- </form> -->
            </div>
        </div>
    </div>
<!-- /Modal Entreprise -->