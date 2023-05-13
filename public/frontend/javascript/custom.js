// const { method } = require("lodash");

$(document).ready(function () {

    //LOAD CART COUNT
    loadcart();
    function loadcart() {
        $.ajax({
            method: 'GET',
            url: '/load-cart-data',
            success: function (response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                // alert(response.count);
            }
        });
    }

    //ADD TO CART FUNCTIONALITY
    $('.add_to_cart').click(function (e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response) {
                if (response.success) {
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Thank You!',
                    //     text: response.success,
                    //     showConfirmButton: false,
                    //     timer: 3000
                    // });
                    toastr.success(response.success);

                } else {
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops!',
                    //     text: response.error,
                    //     showConfirmButton: false,
                    //     timer: 3000
                    // });
                    toastr.error(response.error);

                }
                loadcart();
            }
        });
    });

    //QTY INCREMENT
    $('.increment-btn').click(function (e) {
        e.preventDefault();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;

        if (value < 10) {
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    //QTY DECREMENT
    $('.decrement-btn').click(function (e) {
        e.preventDefault();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;

        if (value > 1) {
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    //DELETE CART ITEM
    $('.delete-cart-item').click(function (e) {
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'prod_id': prod_id
            },
            success: function (response) {
                if (response.success) {
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Thank You!',
                    //     text: response.success,
                    //     showConfirmButton: false,
                    //     timer: 3000
                    // });
                    toastr.success(response.success);

                } else {
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops!',
                    //     text: response.error,
                    //     showConfirmButton: false,
                    //     timer: 3000
                    // });
                    toastr.error(response.error);

                }
                window.location.reload();
            }
        });
    });

    //QTY CHANGE
    $('.change_quantity').click(function (e) {
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();

        // console.log({prod_id, qty})
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "update-cart",
            data: {
                'prod_id': prod_id,
                'prod_qty': qty,
            },
            success: function (response) {
                $("#example1").load(window.location.href + " #example1");
            }
        });

    });

    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/product-list",
        success: function (response) {
            startAutoComplete(response);
        }
    });
    function startAutoComplete(availableTags) {
        $("#search_product").autocomplete({
            source: availableTags
        });
    }

    //COUPON CODE

    $('.apply_coupon_btn').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        var coupon_code = $('.coupon_code').val();
        //alert(coupon_code);
        if($.trim(coupon_code).length == 0){
            error_coupon = "Please enter valid coupon";
            $('#error_coupon').text(error_coupon);
        }else{
            error_coupon = '';
            $('#error_coupon').text(error_coupon);
        }

        if(error_coupon != ''){
            return false;
        }

        $.ajax({
            url:"/check-coupon-code",
            method:"POST",
            data:{
                'coupon_code':coupon_code
            },
            success:function(response){
                //console.log(response);
                if(response.error_status == 'error'){
                    toastr.error(response.status);
                    $('.coupon_code').val('');
                }else{
                    var discount_price = response.discount_price;
                    var grand_total_price = response.grand_total_price;
                    $('.coupon_code').prop('readonly', true);
                    $('.discount_price').text(discount_price);
                    $('.grandtotal_price').text(grand_total_price);
                }
            }
        });

    });

});