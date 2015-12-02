// This is where you can place your Javascript code

function MAccelerometer1Change(event) {
    var pos = $('#MShape1').position();
    pos.left += event.x;
    pos.top += event.y;

    $('#MShape1').animate({top: pos.top; left: pos.left});
}

function MButton1Click(event) {
    var pos = $('#MShape1').position();
    pos.left += 2;
    pos.top += 2;

    $('#MShape1').animate({top: pos.top; left: pos.left});
    return false;
}
