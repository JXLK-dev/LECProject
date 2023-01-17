function read(input) {
    if (input.files && input.files[0]) {
        var readImg = new FileReader();

        readImg.onload = function (e) {
            $('#img').attr('src', e.target.result);
        };

        readImg.readAsDataURL(input.files[0]);
    }
}
