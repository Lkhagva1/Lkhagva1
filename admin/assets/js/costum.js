$(document).ready(function() {
    $(document).on('click','delete_product_btn',function(e){
        e.preventDefault();
        var id=$(this).val();
        swal({
            title: "Энэ барааг устгахад итгэлтэй байна уу?",
            text: "Устгасны дараа та энэ файлыг сэргээх боломжгүй болно!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
            $.ajax({
                type: "POST",
                url: "code.php",
                dataType: "json",
                data:{
                    'product_id':id,
                    'delete_product_btn':true
                },
                success:function(response){
                    if(response==200){
                        swal("Амжилттай устгалаа!", "бүтээгдэхүүн амжилттай устгалаа", "success");
                        $("#product_table").load(location.href+"#product_table")
                    }else if(response==404){
                        swal("Амжилттгүй!", "Ямар нэг алдаа гарлаа", "error");
                    }
                }
            })
            } 
          });
    })
    $(document).on('click','delete_category_btn',function(e){
        e.preventDefault();
        var id=$(this).val();
        swal({
            title: "Энэ категориг устгахад итгэлтэй байна уу?",
            text: "Устгасны дараа та энэ файлыг сэргээх боломжгүй болно!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
            $.ajax({
                type: "POST",
                url: "code.php",
                dataType: "json",
                data:{
                    'category_id':id,
                    'delete_category_btn':true
                },
                success:function(response){
                    if(response==200){
                        swal("Амжилттай устгалаа!", "Категори амжилттай устгалаа", "success");
                        $("#category_table").load(location.href+"#category_table")
                    }else if(response==404){
                        swal("Амжилттгүй!", "Ямар нэг алдаа гарлаа", "error");
                    }
                }
            })
            } 
          });
    })
})