$(document).ready(function () {
    console.log('ready');
    $(".cart").click(function () {
        console.log('click');

        var id = $(this).attr("data-id");
        $.post("/cart/add/" + id, {}, function (data) {
            $("#cart-count").html(data);
        });
        return false;
    });
});
