$(document).ready(function () {
    $(".card img").on("click", function () {
        var imageUrl = $(this).attr("src");
        $("#zoomedImage").attr("src", imageUrl);
        $("#imageModal").css("display", "block");
    });

    $(".close").on("click", function () {
        $("#imageModal").css("display", "none");
    });
});

// Cierra la ventana modal al presionar la tecla Escape
$(document).keyup(function (e) {
    if (e.key === "Escape") {
        // Verifica si la tecla presionada es Escape (ESC)
        $(".modal").hide();
    }
});
