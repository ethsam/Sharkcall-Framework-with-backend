<!-- CATEGORY -->
<div id="<?php echo $content['IDBLOCK']; ?>">
    <?php 

    $content = ['IDBLOCK'       => 'MEDIA',
                'Pre'           => 'Media',
                'lowerCaseName' => 'media',
                'camelCaseName' => 'Media'
                ]
    ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $content['camelCaseName']; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div id="alertSuccessAdd<?php echo $content['Pre']; ?>" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your <?php echo $content['lowerCaseName']; ?> has been added</div>

        <div id="alertSuccessUpdate<?php echo $content['Pre']; ?>" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your <?php echo $content['lowerCaseName']; ?> has been updated</div>
        
        <div id="alertSuccessDelete<?php echo $content['Pre']; ?>" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your <?php echo $content['lowerCaseName']; ?> has been deleted</div>

        <div id="alertFailure<?php echo $content['Pre']; ?>" class="alert alert-success alert-dismissible isNotDisplayed" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occured</div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">

                            <div class="col-lg-12" style="margin-bottom:5%;">
                            <!-- UPLOAD FILE FORM -->
                                <div class="file_upload">
                                    <form action="admin" class="dropzone">
                                        <div class="dz-message needsclick">
                                            <strong>Drop files here or click to upload.</strong><br />
                                            <span class="note needsclick">(This is just a demo. The selected files are <strong>not</strong> actually uploaded.)</span>
                                        </div>
                                        <input type="hidden" id="token" name="token" value="<?php echo $_SESSION['token']; ?>">
                                        <input type="hidden" id="order" name="order" value="uploadMedia">
                                    </form>			
                                </div>
                            <!-- /UPLOAD FILE FORM -->
                            </div>

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-large btn-block btn-success" onclick="showModal('modal_add_img')">Add <?php echo $content['camelCaseName']; ?></button>
                            </div>

                            <div class="col-lg-12" style="height: 20px"></div>

                            <div class="col-lg-12">
                                <table id="table_<?php echo $content['lowerCaseName']; ?>" class="display">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>URL</th>
                                            <th>MEDIA</th>
                                            <th style="display:none;">Alt FR</th>
                                            <th style="display:none;">Alt EN</th>
                                            <th style="display:none;">Alt ES</th>
                                            <th style="display:none;">Alt DE</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $imgList; ?>
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
            <?php include_once(getcwd()."/views/_admin/img/modals/modal_add_img.php") ?>
            <?php include_once(getcwd()."/views/_admin/img/modals/modal_update_img.php") ?>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /CATEGORY -->