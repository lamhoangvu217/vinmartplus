$('.qty').change( function () {
    let rowId = $(this).data('row_id');
    let qty = $(this).val();
    let _token = $('input[name="_token"]').val();
    
    let url_update = $(this).data('url_update');
    $.ajax({
        url: url_update,
        type: 'POST',
        data: {
            qty: qty,
            rowId: rowId,
            _token: _token,
        }
    }).done(function (data) {
        // console.log(data);
        // product-total
        // $('span.' + rowId).html(data.cart.subtotal);
        // $('span.total').html(data.total);
        console.log(data);
    })
})