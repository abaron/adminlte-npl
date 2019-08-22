$(document).on("click", ".update-status", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Update Project Status!',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group required">' +
            '<label class="control-label">Status</label>' +
            '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
            '<select class="name form-control" required>' +
            '<option disabled>-- Pilih --</option>' +
            '<option value="1" disabled>Preparing</option>' +
            '<option value="2" disabled selected>Permit Processing</option>' +
            '<option value="3">Material Delivery</option>' +
            '<option value="4">Installation</option>' +
            '<option value="5">Finishing</option>' +
            '<option value="6">Testcom</option>' +
            '<option value="7">Completed</option>' +
            '<option value="0">Drop/Cancel Project</option>' +
            '</select>' +
        '</div>' +
        '<div class="form-group">' +
            '<label>Remark</label>' +
            '<textarea class="form-control" required placeholder="Fill your remark">' +
            '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Update',
                btnClass: 'btn-blue',
                action: function () {
                    var name = this.$content.find('.name').val();
                    if(!name){
                        $.alert('provide a valid status');
                        return false;
                    }
                    $.alert('Current status is ' + name);
                }
            },
        },
        onContentReady: function () {
            // bind to events
            var jc = this;
            this.$content.find('form').on('submit', function (e) {
                // if the user submits the form by pressing enter in the field.
                e.preventDefault();
                jc.$$formSubmit.trigger('click'); // reference the button and click it
            });
        }
    });
});

$(document).on("click", ".project-upload", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Upload Project Documents!',
        type: 'blue',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group required">' +
            '<label class="control-label">As-built BoQ</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label> ' +
            '<label class="label label-primary pull-right" style="margin-right: 5px">33 / PDE / VII / 2019</label> ' +
            '<div class="form-group required">' +
                '<input type="file" class="form-control">' +
            '</div>' +
        '</div>' +
        '<div class="form-group required">' +
            '<label class="control-label">As-built Drawing</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label> ' +
            '<div class="form-group required">' +
                '<input type="file" class="form-control">' +
            '</div>' +
        '</div>' +
        '<div class="form-group required">' +
            '<label class="control-label">Management Core</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label> ' +
            '<div class="form-group required">' +
                '<input type="file" class="form-control">' +
            '</div>' +
        '</div>' +
        '<div class="form-group required">' +
            '<label class="control-label">Documents</label>' +
            '<label class="label label-primary pull-right" data-tooltip="true" data-toggle="tooltip" data-placement="right" title="Supported files: "><i class="fa fa-info"></i></label>' +
            '<div class="input-group">' +
                '<input type="file" class="form-control">' +
                '<div class="input-group-btn">' +
                    '<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>' +
                '</div>' +
            '</div>' +
        '</div>' +
        '<div class="form-group required">' +
            '<label class="control-label">Evidence</label>' +
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
            '<textarea class="form-control" required placeholder="Fill your remark">' +
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
        },
        onOpenBefore: function() {
                $('[data-tooltip="true"]').tooltip();
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
        }
    });
});