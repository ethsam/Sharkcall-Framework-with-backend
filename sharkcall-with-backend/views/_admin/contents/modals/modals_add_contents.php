<!-- /Modal Content -->
    <div class="modal fade" id="modal_add_contents" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabelAdd">Add Content</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputContentTitle">Title : </label>
                        <input type="text" name="inputContentTitle" class="form-control" id="inputContentTitle" placeholder="Title">
                    </div>
                    <!-- <div class="form-group">
                        <label for="inputContentImage">Image : </label>
                        <input type="text" name="inputContentImage" class="form-control" id="inputContentImage" placeholder="https://via.placeholder.com/1920x1080">
                    </div> -->
                    <label for="inputMediaContent">Select Image for this content : </label>
                    <div class="form-group" style="overflow:scroll; height:22vh;">
                        <select name="inputMediaContent" id="inputMediaContent">
                            <option value></option>
                            <option value="0"></option>;
                            <!-- <option data-img-src='https://via.placeholder.com/150' value='40'>
                            <option data-img-src='https://via.placeholder.com/150' value='41'>
                            <option data-img-src='https://via.placeholder.com/150' value='42'>
                            <option data-img-src='https://via.placeholder.com/150' value='43'> -->
                            <?php echo $listAllSelectContentImage; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="selectContentCategory">Category : </label>
                        <select class="form-control" name="selectContentCategory" id="selectContentCategory">
                            <?php echo $listAllSelectCategory; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="selectContentSubCategory">SubCategory : </label>
                        <select class="form-control" name="selectContentSubCategory" id="selectContentSubCategory">
                            <?php echo $listAllSelectSubCategory; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectContentCity">City : </label>
                        <select class="form-control" name="selectContentCity" id="selectContentCity">
                            <?php echo $listAllSelectCity; ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label for="selectContentUser">User : </label>
                        <select class="form-control" name="selectContentUser" id="selectContentUser">
                            <?php //echo $listAllSelectUser; ?>
                        </select>
                    </div> -->
                    <div class="form-group">
                        <label for="inputContentAdress">Adress : </label>
                        <input type="text" name="inputContentAdress" class="form-control" id="inputContentAdress" placeholder="Adress">
                    </div>
                    <div class="form-group">
                        <label for="inputContentPhone">Phone : </label>
                        <input type="text" name="inputContentPhone" class="form-control" id="inputContentPhone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label for="summernoteContent">Content : </label>
                        <div name="summernoteContent" id="summernoteContent"></div>
                    </div>
                    <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                </div>

                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Annuler</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" id="btn_addContent" class="btn btn-success btn-hover-green" data-action="save" onclick="postAddContent([jQuery('#inputContentTitle').val(), jQuery('#inputContentImage').val(), jQuery('#selectContentCategory').val(), jQuery('#selectContentSubCategory').val(), jQuery('#selectContentCity').val(), jQuery('#inputContentAdress').val(), jQuery('#inputContentPhone').val(), jQuery('#summernoteContent').summernote('code'), jQuery('#inputMediaContent').val()]);" role="button">Sauvegarder</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- /Modal Content -->