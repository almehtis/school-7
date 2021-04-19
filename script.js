$(function () {
    $(".pre-article").slice(0, 6).show();
    $("#load").on('click', function (e) {
        e.preventDefault();
        $(".pre-article:hidden").slice(0, 3).show();
    })
})