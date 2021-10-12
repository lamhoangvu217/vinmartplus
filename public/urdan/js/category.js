$("select.category").change(function() {
    let id = $(this).val();
    $.ajax({
        url: "http://127.0.0.1:8000/render-product",
        type: "GET",
        data: {
            id: id
        }
    }).done(function(data) {
        $("div.render-product").html(data);
    });
});
