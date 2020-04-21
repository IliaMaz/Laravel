$(function () {
    $(".delete").click(function (e) {
        e.preventDefault();
        const id = $(this).attr("id");
        $.ajax({
            url: "/book/delete/" + id,
            type: "DELETE",
            datatype: "JSON", // ! not used
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                id: id,
                method: "DELETE",
            },
            success: function (res) {
                location.reload(res);
            },
            error: function (err) {
                $("#books").html(err);
            },
        });
    });
    $("#submit").click(function (e) {
        e.preventDefault();
        const title = $('[name="title"]').val();
        const price = $('[name="price"]').val();
        const author = $('[name="author"]').val();
        $.ajax({
            url: "/book/create",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                title: title,
                price: price,
                author: author,
            },
            success: function () {
                window.location.replace("/books");
            },
            error: function (err) {
                console.log(err);
            },
        }).done(function (e) {
            e.preventDefault();
        });
    });
});
