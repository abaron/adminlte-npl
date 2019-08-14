$(document).on("click", ".survey-upload", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Upload Survey Documents!',
        type: 'blue',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
            '<label>Evidence Survey</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label>' +
            '<div class="input-group">' +
                '<input type="file" class="form-control">' +
                '<div class="input-group-btn">' +
                    '<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>' +
        '<div class="form-group">' +
            '<label>File Survey</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label>' +
            '<div class="input-group">' +
                '<input type="file" class="form-control">' +
                '<div class="input-group-btn">' +
                    '<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>' +
        '<div class="form-group">' +
            '<label>Remark</label>' +
            '<textarea class="form-control" required>' +
            '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Upload',
                btnClass: 'btn-blue'
            },
        }
    });
});

$(document).on("click", ".survey-delete", function(e){
    e.preventDefault();

    $.confirm({
        title: '<i class="fa fa-trash"></i> Cancel Order!',
        type: 'red',
        content: '' +
        '<div class="form-group">' +
            '<label>Remark</label>' +
            '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
            '<textarea class="form-control" required>' +
            '</textarea>' +
        '</div>' +
        '<div class="form-group">' +
            '<label>Evidence Survey</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label>' +
            '<div class="input-group">' +
                '<input type="file" class="form-control">' +
                '<div class="input-group-btn">' +
                    '<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>' +
        '<p>This will remove all group information such as document and associated projects</p>' +
        '<p>Are you sure?</p>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Delete',
                btnClass: 'btn-red'
            }
        },
        onOpen: function() {
            $('[data-tooltip="true"]').tooltip();
        }
    });
});

