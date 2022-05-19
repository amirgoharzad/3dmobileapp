let baseUrl = "http://localhost:8888/3dapp/";
$(document).ready(function () {
    $.getJSON(baseUrl +'data/texts.json', function (jsonObj) {
        $('#coke_card_title').html('<h5 >' + jsonObj.pageTextData[0].title + '<h5>');
        $('#coke_card_description').html('<h5 >' + jsonObj.pageTextData[0].subTitle + '<h5>');
        $('#coke_bottle_title').html('<h5 >' + jsonObj.pageTextData[1].title + '<h5>');
        $('#coke_bottle_description').html('<h5 >' + jsonObj.pageTextData[1].subTitle + '<h5>');
        $('#coke_board_title').html('<h5 >' + jsonObj.pageTextData[2].title + '<h5>');
        $('#coke_board_description').html('<h5 >' + jsonObj.pageTextData[2].subTitle + '<h5>');
        $('#coke_model_title').html('<h5 >' + jsonObj.pageTextData[3].title + '<h5>');
        $('#coke_model_description').html('<h5 >' + jsonObj.pageTextData[3].description + '<h5>');
        $('#simple_coke_model_title').html('<h5 >' + jsonObj.pageTextData[4].title + '<h5>');
        $('#simple_coke_model_description').html('<h5 >' + jsonObj.pageTextData[4].description + '<h5>');
    });
});