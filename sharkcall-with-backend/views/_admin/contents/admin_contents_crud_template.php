<!-- CATEGORY -->
<div id="<?php echo $content['IDBLOCK']; ?>">
    <?php 

    $content = ['IDBLOCK'       => 'CONTENT',
                'Pre'           => 'Cat',
                'lowerCaseName' => 'content',
                'camelCaseName' => 'Content'
                ]
    ?>
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $content['camelCaseName']; ?>s</h1>
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

                            <div class="col-lg-4">
                                <button type="button" class="btn btn-large btn-block btn-success" onclick="showModal('modal_add_<?php echo $content['lowerCaseName'] ?>s')">Add <?php echo $content['camelCaseName']; ?></button>
                            </div>
                            <div class="col-lg-12" style="height: 20px"></div>

                            <div class="col-lg-12">
                                <table id="table_<?php echo $content['lowerCaseName']; ?>s" class="display">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th style="display:none">Img</th>
                                            <th>Category</th>
                                            <th>SubCategory</th>
                                            <th>City</th>
                                            <th>Adress</th>
                                            <th>Phone</th>
                                            <th style="display:none">Latitude</th>
                                            <th style="display:none">Longitude</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php echo $contentList; ?>
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
            <?php include_once(getcwd()."/views/_admin/".$content['lowerCaseName']."s/modals/modals_add_".$content['lowerCaseName']."s.php") ?>
            <?php include_once(getcwd()."/views/_admin/".$content['lowerCaseName']."s/modals/modals_update_".$content['lowerCaseName']."s.php") ?>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /CATEGORY -->