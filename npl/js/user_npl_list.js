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
