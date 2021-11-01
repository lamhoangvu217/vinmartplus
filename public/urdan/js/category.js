$("select.category").change(function() {
    let id = $(this).val();
    $.ajax({
        url: "https://vinmart-nhom12.herokuapp.com/render-product",
        type: "GET",
        data: {
            id: id
        }
    }).done(function(data) {
        $("div.render-product").html(data);
    });
});
