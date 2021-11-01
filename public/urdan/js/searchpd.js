$("input#search-pd").keyup(function() {
    let inputVal = $(this).val();
    $.ajax({
        url: "http://127.0.0.1:8000/render-product-search",
        type: "GET",
        data: {
            inputVal: inputVal
        }
    }).done(function(data) {
        $("div.render-product").html(data);
    });
});
