$(document).on("click", ".update-status", function(e){
    e.preventDefault();

    $.confirm({
        title: 'Update Status Project!',
        content: '' +
        '<form action="" class="">' +
        '<div class="form-group">' +
        '<label>Status</label>' +
        '<label class="label label-primary pull-right">33 / PDE / VII / 2019</label>' +
        '<select class="name form-control" required>' +
        '<option disabled>-- Pilih --</option>' +
        '<option selected>Step 1</option>' +
        '<option value="2">Step 2</option>' +
        '<option value="3">Step 3</option>' +
        '<option value="0">Reject</option>' +
        '</select>' +
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
