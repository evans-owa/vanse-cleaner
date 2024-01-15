
$(document).ready(function(){

    $('.addToCartBtn').click(function(e) {
        e.preventDefault();

        var nameservice_id = $(this).closest('.service_data').find('.services_id').val();
        var areaService = $(this).closest('.service_data').find('.county-input').val();

        var autoid = $(this).closest('.service_data').find('.originalid').val();
        var orgname = $(this).closest('.service_data').find('.originalname').val();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "/add-to-cart",
            data: {
                'service2_id': nameservice_id,
                'areaService': areaService,
                'auttoid': autoid,
                'orgname': orgname
            },
            success: function(response) {

                swal(response.status);
            }
        });

    });

    $('.delete-cart-item').click(function (e) {
    e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var cart_item = $(this).closest('.service_data').find('.services_id').val();

    $.ajax({
        method: "POST",
        url: "delete-cart-item",
        data: {
            services_id: cart_item,
        },
        success: function (response) {

            window.location.reload();
            swal("", response.status, "success");
        }
    });

    });

    $('.changeArea').click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        var serve_id = $(this).closest('.service_data').find('.services_id').val();
        var area = $(this).closest('.service_data').find('.county-input').val();

        data = {
            'serve_id':serve_id,
            'AreaOfService': area,
        }

        $.ajax({
            method: "POST",
            url: "update-cart",
            data: data,
            success: function (response) {

                window.location.reload();

            }
        });
    });
});
