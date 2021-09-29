$(function () {
    var form = $('#ajaxform');
    var messages = $('#messages');

    form.submit(function (event) {
        event.preventDefault();
        var formData = form.serialize();
        // formData = phone_num=asdada

        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: formData
        }).done(function (response) {
            messages.append(
                '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                + response
                + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                + '</div>'
            ).find('.alert').delay(4000).fadeOut();

        }).fail(function (res) {
            console.log(res);
            messages.append(
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">'
                + res.responseText
                + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'
                + '</div>'
            ).find('.alert').delay(4000).fadeOut();
        });
    });
});