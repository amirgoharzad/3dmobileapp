let counter = 0;


$(document).ready(function () {
    selectModel();

    function selectModel() {
        $('#coke').show();
        $('#ziro').hide();
        $('#simpleCoke').hide();
        $('#sprite').hide();
        $('#pepper').hide();

        $('#pepperButton').click(function () {
            $('#coke').hide();
            $('#ziro').hide();
            $('#simpleCoke').hide();
            $('#sprite').hide();
            $('#pepper').show();
        });

        $('#spriteButton').click(function () {
            $('#coke').hide();
            $('#ziro').hide();
            $('#simpleCoke').hide();
            $('#sprite').show();
            $('#pepper').hide();

        });

        $('#cokeButton').click(function () {
            $('#coke').show();
            $('#ziro').hide();
            $('#simpleCoke').hide();
            $('#sprite').hide();
            $('#pepper').hide();
        });

        $('#ziroButton').click(function () {
            $('#coke').hide();
            $('#ziro').show();
            $('#simpleCoke').hide();
            $('#sprite').hide();
            $('#pepper').hide();
        });

        $('#simpleCokeButton').click(function () {
            $('#coke').hide();
            $('#ziro').hide();
            $('#simpleCoke').show();
            $('#sprite').hide();
            $('#pepper').hide();
        });
    }

});

function changeLook() {
    counter += 1;
    switch (counter) {
        case 1:
            document.getElementById('bodyColor').style.backgroundColor = '#541690';
            document.getElementById('footerColor').style.backgroundColor = '#FF4949';
            break;
        case 2:
            document.getElementById('bodyColor').style.backgroundColor = '#FF6600';
            document.getElementById('footerColor').style.backgroundColor = '#996699';
            break;
        case 3:
            document.getElementById('bodyColor').style.backgroundColor = '#FF8D29';
            document.getElementById('footerColor').style.backgroundColor = '#FFCD38';
            break;
        case 4:
            counter = 0;
            document.getElementById('bodyColor').style.backgroundColor = 'lightgrey';
            document.getElementById('footerColor').style.backgroundColor = 'dimgrey';
            break;
    }
}


function changeBack() {
    document.getElementById('bodyColor').style.backgroundColor = '#FFFFFF';
    document.getElementById('footerColor').style.backgroundColor = 'rgba(175,0,0,1)';
}