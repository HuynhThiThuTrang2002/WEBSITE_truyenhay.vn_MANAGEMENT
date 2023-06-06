function Alert(messsage){
    $.confirm({
        title: '<i class="fas fa-rocket"></i> Thông Báo!',
        content: messsage,
        type: 'purple',
        autoClose: 'cancelAction|5000',
        buttons: {
            cancelAction:{
                text:'Đóng',
                btnClass: 'btn-blue'
            }
        }
    });
}