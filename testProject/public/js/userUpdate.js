

$(".btn").click(function() {

    //check !!!
    // if(!$("[name=email]").val()) {
    //     aler
    // }


    console.log("window.location", window.location.href.split("/"));
    console.log("window.location", window.location.href.split("/")[4]);

    var values = {};
    values.id = window.location.href.split("/")[4];
    values.email = $("[name=email]").val().trim();
    values.phone = $("[name=phone]").val().trim();
    values.first_name = $("[name=first-name]").val().trim();
    values.last_name = $("[name=last-name]").val().trim();
    values.company_name = $("[name=company-name]").val().trim();
    values._token = $("[name=_token]").val().trim();

    $.ajax({
        url: `/makeupdate`,
        method: 'POST',
        data: values,
        success: function () {
            console.log("ok!");

            $(".bs-component").overhang({
                type: "success",
                message: "Record updated successfully",
                overlay: true
            })

        }, error: function() {
            $(".bs-component").overhang({
                type: "error",
                message: "Something went wrong!",
                overlay: true
            })
        }
    })

})
