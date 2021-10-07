$(".qty").change(function() {
    let rowId = $(this).data("row_id");
    let qty = $(this).val();
    let _token = $('input[name="_token"]').val();
    let index = $(this).data("index");
    let url_update = $(this).data("url_update");
    if(qty==0){
        var r = confirm("Bạn có muốn xóa sản phẩm không ???");
        if (r == true) {
            $.ajax({
                url: url_update,
                type: "POST",
                data: {
                    qty: qty,
                    rowId: rowId,
                    _token: _token
                }
            }).done(function(data) {
                let subtotal = data.subtotal + " đ";
                $("span." + rowId).html(subtotal);
                $("span.total").html(data.total + " đ");
                $("span.product-count").html(data.count);
                document.getElementById("cart-table").deleteRow(index);
                swal(data.status, data.message, "success");
            });
        } else {
         return false;
        }
    }
  
   
});

$(".add-cart").click(function() {
    let id = $(this).attr("id");
    let _token = $('input[name="_token"]').val();
    let url_addcart = $(this).data("url_addcart");
    $.ajax({
        url: url_addcart,
        type: "POST",
        data: {
            id: id,
            _token: _token
        }
    }).done(function(data) {
        if (data.status == "success") {
            $("span.product-count").html(data.count);
            swal(data.status, data.message, "success");
        } else {
            swal(data.status, data.message, "error");
        }
    });
});

$(".remove-cart").click(function() {
    let rowId = $(this).attr("id");
    let _token = $('input[name="_token"]').val();
    let url_delete = $(this).data("url_delete");
    let index = $(this).data("index");
    // console.log(rowId + ' ' + _token + ' ' + url_delete + ' ');
    $.ajax({
        url: url_delete,
        type: "POST",
        data: {
            rowId: rowId,
            _token: _token
        }
    }).done(function(data) {
        if (data.status == "success") {
            $("span.product-count").html(data.count);
            $("span.total").html(data.total + " đ");
            document.getElementById("cart-table").deleteRow(index);
            swal(data.status, data.message, "success");
        } else {
            swal(data.status, data.message, "error");
        }
    });
});
