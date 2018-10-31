var designationData;
var token = jQuery('#token').val();

    /**
    * Show Modal
    */
    function showModal(modal) {
        jQuery('#' + modal).modal('show');
        console.log('Show Modal : ' + modal);
        // jQuery('#inputContentContentBlock .note-editor.note-frame .note-editing-area .note-editable').text("");
    }
    function postUpdateShow(modal) {
        jQuery('#' + modal).modal('show');
    }


    /**
     * Click on Datables
     */
    jQuery('#table_users tbody').on('click', 'tr', function () {
        var dataUser = jQuery('#table_users').DataTable().row(this).data();
        jQuery('#idUpdateUser').text(dataUser[0]);
        var id = jQuery('#idUpdateUser').text();
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'getInfoModalUser',
                data: id,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                var obj = JSON.parse(msg);
                console.log(obj);
                
                jQuery('#inputUpdateName').val(obj[0].name);
                jQuery('#inputUpdateEmail').val(obj[0].email);
                jQuery('#selectUpdateRole').val(obj[0].role_id);
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });

    jQuery('#table_subCategories tbody').on('click', 'tr', function () {
        var dataSubCategory = jQuery('#table_subCategories').DataTable().row(this).data();
        jQuery('#idUpdateSubCategory').text(dataSubCategory[0]);
        var id = jQuery('#idUpdateSubCategory').text();
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'getInfoModalSubCategory',
                data: id,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                var obj = JSON.parse(msg);
                jQuery('#inputUpdateSubDesignation').val(obj[0].designation_subcat);
                jQuery("#inputUpdateMediaSubCategory").val(obj[0].idimg);
                jQuery("#inputUpdateMediaSubCategory").data('picker').sync_picker_with_select();
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });

    jQuery('#table_categories tbody').on('click', 'tr', function () {
        var dataCategory = jQuery('#table_categories').DataTable().row(this).data();
        jQuery('#idUpdateCategory').text(dataCategory[0]);
        var id = jQuery('#idUpdateCategory').text();
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'getInfoModalCategory',
                data: id,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                var obj = JSON.parse(msg);
                jQuery('#inputUpdateDesignation').val(obj[0].designation_cat);
                jQuery("#inputUpdateMediaCategory").val(obj[0].idimg);
                jQuery("#inputUpdateMediaCategory").data('picker').sync_picker_with_select();
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });

    jQuery('#table_cities tbody').on('click', 'tr', function () {
        var dataCity = jQuery('#table_cities').DataTable().row(this).data();
        jQuery('#idUpdateCity').text(dataCity[0]);
        var id = jQuery('#idUpdateCity').text();
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'getInfoModalCity',
                data: id,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                var obj = JSON.parse(msg);
                jQuery('#inputUpdateDesignation').val(obj[0].cityName);
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });

    jQuery('#table_contents tbody').on('click', 'tr', function () {
        var dataContent = jQuery('#table_contents').DataTable().row(this).data();
        jQuery('#idUpdateContent').text(dataContent[0]);
        var id = jQuery('#idUpdateContent').text();
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'getInfoModalContent',
                data: id,
                token: token
            },
            success: function (msg) {
                // console.log(msg);
                var obj = JSON.parse(msg);
                jQuery('#idUpdateContent').val(obj[0].id_content);
                jQuery('#inputUpdateContentTitle').val(obj[0].title);
                jQuery('#inputUpdateContentImage').val(obj[0].img);
                jQuery('#selectUpdateContentCategory').val(obj[0].categorie);
                jQuery('#selectUpdateContentSubCategory').val(obj[0].sous_categorie);
                jQuery('#selectUpdateContentCity').val(obj[0].villes);
                jQuery('#inputUpdateContentAdress').val(obj[0].adresse);
                jQuery('#inputUpdateContentPhone').val(obj[0].telephone);
                jQuery("#summernoteUpdateContent").summernote('insertText', obj[0].content);
                jQuery('#inputUpdateMediaContent').val(obj[0].id_imgcover);
                jQuery("#inputUpdateMediaContent").data('picker').sync_picker_with_select();
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });

    jQuery('#table_media tbody').on('click', 'tr', function () {
        var dataMedia = jQuery('#table_media').DataTable().row(this).data();
        jQuery('#idUpdateMedia').text(dataMedia[0]);
        var id = jQuery('#idUpdateMedia').text();
        jQuery('#imageForMediaEdit').attr('src', 'http://localhost:8888/Sharkcall-Framework-with-backend/sharkcall-with-backend'+dataMedia[1]);
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'readAllImg',
                data: id,
                token: token
            },
            success: function (msg) {
                // console.log(msg);
                var obj = JSON.parse(msg);
                console.log(obj);
                // console.log(obj[0].altimg_fr);
                jQuery('#idUpdateMedia').text(dataMedia[0]);
                jQuery('#inputMediaAltFr').val(obj[0].altimg_fr);
                jQuery('#inputMediaAltEn').val(obj[0].altimg_en);
                jQuery('#inputMediaAltEs').val(obj[0].altimg_es);
                jQuery('#inputMediaAltDe').val(obj[0].altimg_de);
            },
            error: function (msg) {
                console.log(msg);
            },
            dataType: "text"
        });
    });



    /**
     * CATEGORY
     */
    function postAddCategory(designationData) {
            jQuery.ajax({
                type: "POST",
                url: "admin",
                data: { 
                    order: 'createCategory',
                    data: designationData,
                    token: token
                },
                success: function (msg) {
                    console.log(msg);
                    jQuery('#modal_add_categories').modal('hide');
                    jQuery('#alertSuccessAddCat').addClass('isDisplayed');
                    jQuery('#alertSuccessAddCat').removeClass('isNotDisplayed');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);

                        },
                error: function (msg) {
                    console.log(msg);
                    jQuery('#alertFailureCat').addClass('isDisplayed');
                    jQuery('#alertFailureCat').removeClass('isNotDisplayed');
                },
                dataType: "text"
            });
    }
    function postDeleteCategory(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'deleteCategory',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#alertSuccessDeleteCat').addClass('isDisplayed');
                jQuery('#alertSuccessDeleteCat').removeClass('isNotDisplayed'); 
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureCat').addClass('isDisplayed');
                jQuery('#alertFailureCat').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }
    function postUpdateCategory(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'updateCategory',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_add_categories').modal('hide');
                jQuery('#alertSuccessUpdateCat').addClass('isDisplayed');
                jQuery('#alertSuccessUpdateCat').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureCat').addClass('isDisplayed');
                jQuery('#alertFailureCat').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    /**
     * SUBCATEGORY
     */
    function postAddSubCategory(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'createSubCategory',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_add_subcategories').modal('hide');
                jQuery('#alertSuccessAddSubCat').addClass('isDisplayed');
                jQuery('#alertSuccessAddSubCat').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);

            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureSubCat').addClass('isDisplayed');
                jQuery('#alertFailureSubCat').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }
    function postDeleteSubCategory(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'deleteSubCategory',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#alertSuccessDeleteSubCat').addClass('isDisplayed');
                jQuery('#alertSuccessDeleteSubCat').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureSubCat').addClass('isDisplayed');
                jQuery('#alertFailureSubCat').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }
    function postUpdateSubCategory(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'updateSubCategory',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_add_subcategories').modal('hide');
                jQuery('#alertSuccessUpdateSubCat').addClass('isDisplayed');
                jQuery('#alertSuccessUpdateSubCat').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureSubCat').addClass('isDisplayed');
                jQuery('#alertFailureSubCat').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    /*
    ! USER
    */
    function postAddUser(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'createUser',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_add_users').modal('hide');
                jQuery('#alertSuccessAddUser').addClass('isDisplayed');
                jQuery('#alertSuccessAddUser').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);

            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureUser').addClass('isDisplayed');
                jQuery('#alertFailureUser').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    function postDeleteUser(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'deleteUser',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#alertSuccessDeleteUser').addClass('isDisplayed');
                jQuery('#alertSuccessDeleteUser').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureUser').addClass('isDisplayed');
                jQuery('#alertFailureUser').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    function postUpdateUser(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'updateUser',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_update_users').modal('hide');
                jQuery('#alertSuccessUpdateUser').addClass('isDisplayed');
                jQuery('#alertSuccessUpdateUser').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureUser').addClass('isDisplayed');
                jQuery('#alertFailureUser').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    /*
    ! CONTENT
    */
    function postAddContent(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'createContent',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_add_contents').modal('hide');
                jQuery('#alertSuccessAddContent').addClass('isDisplayed');
                jQuery('#alertSuccessAddContent').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);

            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureContent').addClass('isDisplayed');
                jQuery('#alertFailureContent').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    function postDeleteContent(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'deleteContent',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#alertSuccessDeleteContent').addClass('isDisplayed');
                jQuery('#alertSuccessDeleteContent').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureContent').addClass('isDisplayed');
                jQuery('#alertFailureContent').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }

    function postUpdateContent(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'updateContent',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                jQuery('#modal_update_contents').modal('hide');
                jQuery('#alertSuccessUpdateContent').addClass('isDisplayed');
                jQuery('#alertSuccessUpdateContent').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureContent').addClass('isDisplayed');
                jQuery('#alertFailureContent').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
    }


    /*
    ! Update Alt Media
    */
    function postUpdateAltMedia(designationData) {
        jQuery.ajax({
            type: "POST",
            url: "admin",
            data: {
                order: 'updateAltMedia',
                data: designationData,
                token: token
            },
            success: function (msg) {
                console.log(msg);
                console.log(designationData);
                jQuery('#modal_update_img').modal('hide');
                jQuery('#alertSuccessAddMedia').addClass('isDisplayed');
                jQuery('#alertSuccessAddMedia').removeClass('isNotDisplayed');
                setTimeout(() => {
                    window.location.reload();
                }, 1000);

            },
            error: function (msg) {
                console.log(msg);
                jQuery('#alertFailureMedia').addClass('isDisplayed');
                jQuery('#alertFailureMedia').removeClass('isNotDisplayed');
            },
            dataType: "text"
        });
        // console.log('no complete');
    }

    //file type validation
    // jQuery("#file").change(function () {
    //     var file = this.files[0];
    //     var imagefile = file.type;
    //     var match = ["image/jpeg", "image/png", "image/jpg"];
    //     if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
    //         alert('Please select a valid image file (JPEG/JPG/PNG).');
    //         jQuery("#file").val('');
    //         return false;
    //     }
    // });
