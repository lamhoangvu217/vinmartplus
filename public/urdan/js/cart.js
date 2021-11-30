
$(".qty").change(function() {
    let rowId = $(this).data("row_id");
    let qty = $(this).val();
    let _token = $('input[name="_token"]').val();
    let index = $(this).data("index");
    let url_update = $(this).data("url_update");
    if (qty == 0) {
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
                $("a.checkout").addClass("disabled");
                swal(data.status, data.message, "success");
            });
        } else {
            return false;
        }
    } else {
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
        });
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
        } else if (data.status == "error") {
            swal(data.status, data.message, "error");
        } else {
            swal(data.message, {
                buttons: {
                    cancel: "Không mua nữa :)",
                    catch: {
                        text: "Đăng nhập",
                        value: "catch"
                    }
                }
            }).then(value => {
                switch (value) {
                    case "catch":
                        window.location = "/login";
                        break;
                    default:
                        swal("Hoàn tác thành công");
                }
            });
        }
    });
});

$(".remove-cart").click(function() {
    let rowId = $(this).attr("id");
    let _token = $('input[name="_token"]').val();
    let url_delete = $(this).data("url_delete");
    var i =this.parentNode.parentNode.rowIndex;
    
    
 
            swal({
                title: "Bạn có chắc chắn muốn xóa không?",
                text: "Một khi đã khóa bạn sẽ không thể hoàn tác",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url_delete,
                        type: "POST",
                        data: {
                            rowId: rowId,
                            _token: _token
                        }
                    }).done(function(data) {
                    
                        if (data.status == "success") {
                            if(data.total ==0){
                                $("a.checkout").addClass("disabled");
                            }
                            $("span.product-count").html(data.count);
                            $("span.total").html(data.total + " đ");
                            swal(data.status, data.message, "success");
                           
                            document.getElementById("cart-table").deleteRow(i);
                            swal("Xóa thành công !!!", {
                             icon: "success",
                              }
                            
                  );
                } else {
                  swal("Your imaginary file is safe!");
                }
              });
        } 
    });
});
function checkout(a) {
    if (a == 0) {
        swal("Bạn chưa có sản phẩm nào trong giỏ hàng?", {
            buttons: ["Okee!", "Cancel!"]
        });
    } else {
        window.location = "/checkout";
    }
}


