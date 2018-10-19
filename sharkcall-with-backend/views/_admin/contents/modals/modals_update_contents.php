<!-- /Modal Update Content -->
    <div class="modal fade" id="modal_update_contents" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="lineModalLabelUpdate">Update Content</h3><span id="idUpdateContent"></span>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputUpdateContentTitle">Title : </label>
                            <input type="text" name="inputUpdateContentTitle" class="form-control" id="inputUpdateContentTitle" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="inputUpdateContentImage">Image : </label>
                            <input type="text" name="inputUpdateContentImage" class="form-control" id="inputUpdateContentImage" placeholder="https://via.placeholder.com/1920x1080">
                        </div>
                        <div class="form-group">
                            <label for="selectUpdateContentCategory">Category : </label>
                            <select class="form-control" name="selectUpdateContentCategory" id="selectUpdateContentCategory">
                                <?php echo $listAllSelectCategory; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="selectUpdateContentSubCategory">SubCategory : </label>
                            <select class="form-control" name="selectUpdateContentSubCategory" id="selectUpdateContentSubCategory">
                                <?php echo $listAllSelectSubCategory; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="selectUpdateContentCity">City : </label>
                            <select class="form-control" name="selectUpdateContentCity" id="selectUpdateContentCity">
                                <?php echo $listAllSelectCity; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputUpdateContentAdress">Adress : </label>
                            <input type="text" name="inputUpdateContentAdress" class="form-control" id="inputUpdateContentAdress" placeholder="Adress">
                        </div>
                        <div class="form-group">
                            <label for="inputUpdateContentPhone">Phone : </label>
                            <input type="text" name="inputUpdateContentPhone" class="form-control" id="inputUpdateContentPhone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="summernoteUpdateContent">Content : </label>
                            <div name="summernoteUpdateContent" id="summernoteUpdateContent"></div>
                        </div>
                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-danger" data-dismiss="modal" role="button">Cancel</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="submit" id="btn_updateContent" class="btn btn-success btn-hover-green" data-action="save" onclick="postUpdateContent([jQuery('#idUpdateContent').text(), jQuery('#inputUpdateContentTitle').val(), jQuery('#inputUpdateContentImage').val(), jQuery('#selectUpdateContentCategory').val(), jQuery('#selectUpdateContentSubCategory').val(), jQuery('#selectUpdateContentCity').val(), jQuery('#inputUpdateContentAdress').val(), jQuery('#inputUpdateContentPhone').val(), jQuery('#summernoteUpdateContent').summernote('code')]);" role="button">Ok</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
<!-- /Modal Update Content -->