$(document).on("click", ".publish-npl", function(e){
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
                <input type="text" class="form-control" id="" value="'+ $("#kancatel-input").val() +'" readonly>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="" class="col-sm-4 control-label">STO</label>\
                <div class="col-sm-8">\
                <input type="text" class="form-control" id="" value="'+ $("#STO-input").val() +'" readonly>\
                </div>\
            </div>\
            <div class="form-group">\
                <label for="" class="col-sm-4 control-label">Nomor</label>\
                <div class="col-sm-8">\
                <input type="text" class="form-control" id="" value="'+ $("#nomor-input").val() +'" readonly>\
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
