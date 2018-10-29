<!-- Modal Media -->
    <div class="modal fade" id="modal_add_img" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title" id="lineModalLabelAdd">Add Media</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group" enctype="multipart/form-data" id="fupForm">
                        <label for="file">Media : </label>
                        <input type="file" class="form-control" id="file" name="file" required />
                        <label for="inputMediaAltFr">Alt French : </label>
                        <input type="text" name="inputMediaAltFr" class="form-control" id="inputMediaAltFr">
                        <label for="inputMediaAltEn">Alt English : </label>
                        <input type="text" name="inputMediaAltEn" class="form-control" id="inputMediaAltEn">
                        <label for="inputMediaAltEs">Alt Spanish : </label>
                        <input type="text" name="inputMediaAltEs" class="form-control" id="inputMediaAltEs">
                        <label for="inputMediaAltDe">Alt Deutsh : </label>
                        <input type="text" name="inputMediaAltDe" class="form-control" id="inputMediaAltDe">
                    </div>
                <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                    
                </div>

                <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Cancel</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="submit" id="btn_addContent" class="btn btn-success btn-hover-green" data-action="save" role="button" onclick="uploadMediaSubmit();">Save</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- /Modal Media -->