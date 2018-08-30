// slider element
var slider = document.getElementById('noUiSlider');
// create the slider object
noUiSlider.create(slider, {
    start: [0, 100],
    step: 1, // avoid float values
    range: {
        'min': 0,
        'max': 100
    }
});
    
// change the value when noUiSlider values are updated
slider.noUiSlider.on('update', function( values, handle ) {
    if ( handle ) {
        $("#noUiSlider-data").data("max", values[handle]);
    } else {
        $("#noUiSlider-data").data("min", values[handle]);
    }
});

// on event 'set' send ajax request
slider.noUiSlider.on('set', function( values, handle ) {
    // get the min and max from the data attribute of #noUiSlider-data
    $data = {min: $("#noUiSlider-data").data("min"), max: $("#noUiSlider-data").data("max")};
    // ajax request
    $.ajax({
        url: $(this).data('url'), // url from the data attribute of #noUiSlider
        type: "post",
    data: $data
    }).done(function (response, textStatus, jqXHR) {
        $('#list').html(response); // write markup to #list element
    })
});