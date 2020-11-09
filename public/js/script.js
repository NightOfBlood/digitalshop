$(document).ready(function () {
    console.log('ready');
    $(".cart").click(function () {
        console.log('click');

        var id = $(this).attr("data-id");
        console.log(id);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*$.post("/cart/add/" + id, {}, function (data) {

            $("#cart-count").html(data);

        });
        return false;*/
        $.ajax({
            type: "POST",
            url: '/cart/add/'+id, // This is what I have updated
            data: {id:id}
        }).done(function( data ) {
            $("#cart-count").html(data);
        });
    });
});
