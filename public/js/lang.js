
$(document).ready(function () {
    $("#laguageSwintcher").change(function (){
        var locale = $(this).val();
        var _token = $("input[name=_token]").val();

        $.ajax({
            url: "/language",
            type: 'POST',
            data: {locale: locale,_token: _token},
            datatype: 'json',
            success: function (data) {
                console.log('me');
            },
            error: function (data) {

            },
            beforeSend: function () {

            },
            complete: function (data) {
             // debugger;
              window.location.reload(true);
            }
        });
    });
});