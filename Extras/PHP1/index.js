

function getState(val) {
    $.ajax({
        type: "POST",
        url: "getState.php",
        data: 'country_id=' +val,  
        success: function (data) {
            $("#state-list").html(data);        
            getCity();
        }
    });
}

function getCity(val) {
    $.ajax({
        type: "POST",
        url: "getCity.php",
        data: 'state_id=' +val,
        success: function (data) {
            $("#city-list").html(data);
        }
    });
}
