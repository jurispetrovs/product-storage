hideAllDivs = function () {
    $("#dvd").hide();
    $("#book").hide();
    $("#furniture").hide();
};

clearAllInputs = function () {
    $('#dvd').find(':input').val('');
    $('#book').find(':input').val('');
    $('#furniture').find(':input').val('');
}

handleNewSelection = function () {
    hideAllDivs();
    clearAllInputs();

    switch ($(this).val()) {
        case 'dvd':
            $("#dvd").show();
            break;
        case 'book':
            $("#book").show();
            break;
        case 'furniture':
            $("#furniture").show();
            break;
    }
};

$(document).ready(function () {
    $("#type").change(handleNewSelection);

    handleNewSelection.apply($("#type"));
});