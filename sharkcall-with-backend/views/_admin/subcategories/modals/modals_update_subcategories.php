<!-- /Modal Entreprise -->
    <!-- line modal -->
    <div class="modal fade" id="modal_update_subcategories" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabelUpdate">Update Subcategory</h3><span id="idUpdateSubCategory"></span>
                    </div>
                    <div class="modal-body">
                        
                        <!-- content goes here -->
                        <!-- <form id="updateCategory" action="#" method="post"> -->
                        <div class="form-group">
                            <label for="inputUpdateSubDesignation">Designation : </label>
                            <input type="text" name="inputUpdateSubDesignation" class="form-control" id="inputUpdateSubDesignation" placeholder="Designation">
                        </div>
                        <label for="inputUpdateMediaSubCategory">Select Image for this subcategory : </label>
                        <div class="form-group" style="overflow:scroll; height:60vh;">
                            <select name="inputUpdateMediaSubCategory" id="inputUpdateMediaSubCategory">
                                <option value></option>
                                <option value="0"></option>;
                                <?php echo $listAllSelectSubCategoryImage; ?>
                            </select>
                        </div>
                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            
                            <div class="btn-group" role="group">
                                <button type="submit" id="btn_updateSubCategory" class="btn btn-success btn-hover-green" data-action="save" onclick="postUpdateSubCategory( [$('#idUpdateSubCategory').text() , $('#inputUpdateSubDesignation').val(), $('#inputUpdateMediaSubCategory').val()] );" role="button">Ok</button>
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