$(function () {
    $("#keyword").autocomplete({
        serviceUrl:'/search-product',
        paramName: "keyword",
        onSelect: function(suggestion) {
            $("#keyword").val(suggestion.value);
        },
        transformResult: function(response) {
            return {
                suggestions: $.map($.parseJSON(response), function(item) {
                    return {
                        value: item.name,
                    };
                })
            };
        },
    });
    $('#keyword').keyup(function (e) {
        if (e.keyCode === 13) {
            $('#search-form').submit();
        }
    })
})