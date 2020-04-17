$(function () {
    $(".delete").click(function (e) {
        e.preventDefault();
        const id = $(this).attr("id");
        $.ajax({
            url: "/book/delete/" + id,
            type: "DELETE",
            datatype: "JSON",
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
});
