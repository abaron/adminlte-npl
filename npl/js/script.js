$(".dropzone-npl").dropzone({ url: "/file/post" });

$(document).ready(function(){
    $('[rel="tooltip"]').tooltip({trigger: "hover"});
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
    $(function() {
        $('[data-tooltip="true"]').tooltip();
    });
    $('.select2').select2()
});
