$(document).ready(function(){
    $(document).ajaxStart(function () {
        $('#backdrop').show();
        $("body").addClass("loading");

    });
    $(document).ajaxStop(function () {
        $('#backdrop').hide();
        $("body").removeClass("loading");

    });
})
