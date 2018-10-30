<!-- /Modal Entreprise -->
    <!-- line modal -->
    <div class="modal fade" id="modal_update_categories" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabelUpdate">Update Category</h3><span style="display:none" id="idUpdateCategory"></span>
                    </div>
                    <div class="modal-body">
                        
                        <!-- content goes here -->
                        <!-- <form id="updateCategory" action="#" method="post"> -->
                        <div class="form-group">
                            <label for="inputUpdateDesignation">Designation : </label>
                            <input type="text" name="inputUpdateDesignation" class="form-control" id="inputUpdateDesignation" placeholder="Designation">
                        </div>
                        <label for="inputUpdateMediaCategory">Select Image for this category : </label>
                        <div class="form-group" style="overflow:scroll; height:60vh;">
                            <select name="inputUpdateMediaCategory" id="inputUpdateMediaCategory">
                                <option value></option>
                                <!-- <option data-img-src='https://via.placeholder.com/150' value='40'>
                                <option data-img-src='https://via.placeholder.com/150' value='41'>
                                <option data-img-src='https://via.placeholder.com/150' value='42'>
                                <option data-img-src='https://via.placeholder.com/150' value='43'> -->
                                <?php echo $listAllSelectCategoryImage; ?>
                            </select>
                        </div>


                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            
                            <div class="btn-group" role="group">
                                <button type="submit" id="btn_updateCategory" class="btn btn-success btn-hover-green" data-action="save" onclick="postUpdateCategory( [$('#idUpdateCategory').text() , $('#inputUpdateDesignation').val(), jQuery('#inputUpdateMediaCategory').val()] );" role="button">Ok</button>
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