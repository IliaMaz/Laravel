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
                console.log(res);
            },
            error: function (err) {
                console.log(err);
            },
        });
    });
});
