$("select#order-status").change(function() {
    let id = $(this).data("id");
    let status = $(this).val();
    let _token = $('input[name="_token"]').val();
    console.log(id + "" + status + "" + _token);
    $.ajax({
        url: "http://127.0.0.1:8000/admin/order/changeStatus",
        type: "POST",
        data: {
            id: id,
            status: status,
            _token: _token
        }
    }).done(function(data) {
        if (data == "success") {
            swal("Thành công!", "Cập nhật trạng thái thành công!", "success");
        } else {
            swal("Thất bại!", "Cập nhật thất bại!", "error");
        }
    });
});

$("button#cancelOrder").click(function() {
    let id = $(this).data("id");
    let status = $(this).val();
    let _token = $('input[name="_token"]').val();
    swal({
        title: "Xác nhận xóa?",
        text: "Nếu xóa, bạn sẽ không thể hoàn tác",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            swal("Hủy đơn hàng thành công", {
                icon: "success"
            });
            $.ajax({
                url: "http://127.0.0.1:8000/admin/order/cancelOrder",
                type: "POST",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                }
            }).done(function(data) {
                // if (data == "success") {
                //     swal("Thành công!", "Cập nhật trạng thái thành công!", "success");
                // } else {
                //     swal("Thất bại!", "Cập nhật thất bại!", "error");
                // }
                window.location =
                    "http://127.0.0.1:8000/admin/order/detail/" + id;
                console.log(data);
            });
        } else {
            swal("Hủy thao tác thành công!");
        }
    });
});
