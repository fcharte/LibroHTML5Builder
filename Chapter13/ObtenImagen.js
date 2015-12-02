// This is where you can place your Javascript code

function MButton1Click(event) {
    MCamera1GetPicture();
}

function MCamera1Success(event) {
    $('#MImage1').attr('src', event);
}

function MCamera1Error(event) {

}
