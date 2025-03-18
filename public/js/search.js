$(document).ready(function () {
    $("#search").on("input", function () {
        let searchText = $(this).val().toLowerCase();
        $(".card").each(function () {
            let productName = $(this).find("h5").text().toLowerCase();
            $(this).toggleClass("d-none", !productName.includes(searchText));
        });
    });
});
