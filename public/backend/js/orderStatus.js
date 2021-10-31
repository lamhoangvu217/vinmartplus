$("select#order-status").change(function() {
    let id = $(this).data("id");
    let status = $(this).val();
    let _token = $('input[name="_token"]').val();
    console.log(id + '' + status + '' + _token)
    $.ajax({
        url: "https://vinmart-nhom12.herokuapp.com/admin/order/changeStatus",
        type: "POST",
        data: {
            id: id,
            status: status,
            _token: _token
        }
    // })
    }).done(function(data) {
        if (data == 'success') {
            swal("Thành công!", "Cập nhật trạng thái thành công!", "success");
        } else {
            swal("Thất bại!", "Cập nhật thất bại!", "error");
        }
    });
});