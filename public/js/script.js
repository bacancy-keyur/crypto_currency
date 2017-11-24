(function () {
    $('#delImage').on('click', function () {
        $('[name="form-1"]').find("input[type=text]").val("");
    });
}());
function postExtraData(elem) {
    $(elem).attr('disabled', 'disabled');
    $(elem).find('.spinner').show();
    var data = $('[name="form-1"]').serialize();
    $.ajax({
        type: 'post',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: '/store-initial',
        data: data,
        success: function (data) {
            $(elem).closest('form').find("input[type=text], textarea").val("");
            $('#squarespaceModal').modal('hide');
        },
        error: function (jqXHR, json) {
            $('.error').hide();
            for (var error in jqXHR.responseJSON) {
                if ($('[name="' + error + '"]').siblings('label')) {
                    $('[name="' + error + '"]').siblings('label.error').show().html(jqXHR.responseJSON[error][0]);
                }
            }
        },
        complete: function () {
            $(elem).removeAttr('disabled');
            $(elem).find('.spinner').hide();
        }
    });
}