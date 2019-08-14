$(document).on("click", ".edit-npl", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Hapus NPL!',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Remark</label>' +
        '<label class="label label-primary pull-right">23 / HPI / III / 2019</label>' +
        '<textarea class="name form-control" required placeholder="Masukan alasan anda">' +
        '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Hapus',
                btnClass: 'btn-red',
                action: function () {
                    var name = this.$content.find('.name').val();
                    if(!name){
                        $.alert('provide a valid reason');
                        return false;
                    }
                    $.alert('alasan anda adalah ' + name);
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

$(document).on("click", ".npl-delete", function(e){
    e.preventDefault();

    $.confirm({
        title: '<i class="fa fa-warning"></i> Delete NPL!',
        type: 'red',
        content: '' +
        '<p>This will remove drafted NPL</p>' +
        '<p>Are you sure?</p>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Delete',
                btnClass: 'btn-red'
            }
        }
    });
});

$(document).on("click", ".npl-publish", function(e){
    e.preventDefault();

    $.confirm({
        title: '<i class="fa fa-warning"></i> Publish NPL!',
        type: 'blue',
        content: '' +
        '<form class="form-horizontal">\
            <div class="box-body">\
            <div class="form-group">\
                <label for="" class="col-sm-4 control-label">Kancatel</label>\
                <div class="col-sm-8">\
                <input type="text" class="form-control" id="" value="Harapan Indah" readonly>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="" class="col-sm-4 control-label">STO</label>\
                <div class="col-sm-8">\
                <input type="text" class="form-control" id="" value="HPI" readonly>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="" class="col-sm-4 control-label">Nomor</label>\
                <div class="col-sm-8">\
                <input type="text" class="form-control" id="" value="23 / HPI / III / 2019	" readonly>\
                </div>\
            </div>\
            </div>\
        </form>' +
        '<p>The NPL will be published and sent to Optima for review before further construction and available for other to view</p>' +
        '<p>Are you sure?</p>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Publish',
                btnClass: 'btn-blue'
            }
        }
    });
});

