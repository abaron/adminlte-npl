$(document).on("click", ".user-remove", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Remove User!',
        type: 'red',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Remark</label>' +
        '<label class="label label-primary pull-right">Jown Week (User STO)</label>' +
        '<textarea class="name form-control" required>' +
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
