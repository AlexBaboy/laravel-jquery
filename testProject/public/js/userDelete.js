$(".btn-danger").click(function(e) {

    const id = $(this).attr("data-id");

    $(".bs-component").overhang({
        type: "confirm",
        message: "Are you sure?",
        overlay: true
    });

    $(".overhang-yes-option").click(function() {
        makeDelete(id)
    })
});

function makeDelete(id) {

    if(!id) {
        $(".bs-component").overhang({
            type: "error",
            message: "Something went wrong!"
        })
        return false;
    }

    const values = {};
    values._token = $("[name=_token]").val().trim();
    values.id = id

    $.ajax({
        url: `/makedelete`,
        method: 'POST',
        data: values,
        success: function () {

            $(".bs-component").overhang({
                type: "success",
                message: "Record removed successfully"
            })

        }, error: function() {
            $(".bs-component").overhang({
                type: "error",
                message: "Something went wrong!"
            })
        }
    })
}
