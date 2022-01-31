$(document).ready(function(){
    $('.deleteForm').click(function(e){
        e.preventDefault();
        let name = $(this).data("name");
        let form = $(this).closest("form");
        swal({
            title: `คุณต้องการลบข้อมูล ${name} หรือไม่?`,
            text: `ลบแล้วไม่สามารถกู้คืนข้อมูล ${name} ได้`,
            icon: "warning",
            buttons: true,
            dangerMode: true   
        }).then((willDelete) => {
        if (willDelete) {
            form.submit()
            swal("ทำการลบข้อมูลสำเร็จ", {
            icon: "success",
            });
        } else {
            swal("ยกเลิกการลบข้อมูล");
        }
        })
    })
})