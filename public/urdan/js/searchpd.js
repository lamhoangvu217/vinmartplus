$("input#search-pd").keyup(function() {
    let inputVal = $(this).val();
    $.ajax({
        url: "https://vinmart-nhom12.herokuapp.com/render-product-search",
        type: "GET",
        data: {
            inputVal: inputVal
        }
    }).done(function(data) {
        $("div.render-product").html(data);
    });
    
});
