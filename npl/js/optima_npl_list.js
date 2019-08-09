$(document).on("click", ".npl-approve", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Approve NPL!',
        type: 'green',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Remark</label>' +
        '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
        '<textarea class="name form-control" required placeholder="Masukan alasan anda">' +
        '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Approve',
                btnClass: 'btn-green'
            }
        }
    });
});

$(document).on("click", ".npl-hold", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Hold NPL!',
        type: 'orange',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Remark</label>' +
        '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
        '<textarea class="name form-control" required placeholder="Masukan alasan anda">' +
        '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Hold',
                btnClass: 'btn-orange'
            }
        }
    });
});

$(document).on("click", ".npl-reject", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Reject NPL!',
        type: 'red',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Remark</label>' +
        '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
        '<textarea class="name form-control" required placeholder="Masukan alasan anda">' +
        '</textarea>' +
        '</div>' +
        '</form>',
        buttons: {
            cancel: function () {
                //close
            },
            formSubmit: {
                text: 'Reject',
                btnClass: 'btn-red'
            }
        }
    });
});
