$(function () {
    var $avatarImage, $avatarInput, $avatarForm;

    $avatarImage = $('#avatarImage');
    $avatarInput = $('#avatarInput');
    $avatarForm = $('#avatarForm');

    $avatarImage.on('click', function () {
        $avatarInput.click();
    });

    $avatarInput.on('change', function () {
        alert('change');
    });
});

$avatarInput.on('change', function () {
    var formData = new FormData();
    formData.append('photo', $avatarInput[0].files[0]);

    $.ajax({
        url: $avatarForm.attr('action') + '?' + $avatarForm.serialize(),
        method: $avatarForm.attr('method'),
        data: formData,
        processData: false,
        contentType: false
    }).done(function (data) {
        if (data.success)
            $avatarImage.attr('src', data.path);
    }).fail(function () {
        alert('La imagen subida no tiene un formato correcto');
    });
});

