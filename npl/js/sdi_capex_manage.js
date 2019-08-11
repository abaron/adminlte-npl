$(document).on("click", ".capex-delete", function(e){
    e.preventDefault();

    $.confirm({
        title: '<i class="fa fa-warning"></i> Delete Group Capex!',
        type: 'red',
        content: '' +
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
        }
    });
});
