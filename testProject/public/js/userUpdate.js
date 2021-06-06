$(".btn").click(function() {

    var isErrors = checkFormUpdate();

    if(isErrors !== false)
        makeUpdate();
})

function checkFormUpdate() {

    var isErrors = false;

    //check !!!
    if(!$("[name=email]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct email!"
        });
        $("[name=email]").focus();
        isErrors = true;
        return false;
    }

    if(!$("[name=phone]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct phone!"
        });
        $("[name=phone]").focus();
        isErrors = true;
        return false;
    }

    if(!$("[name=first-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct first name!"
        });
        $("[name=first-name]").focus();
        isErrors = true;
        return false;
    }

    if(!$("[name=last-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct last name!"
        });
        $("[name=last-name]").focus();
        isErrors = true;
        return false;
    }

    if(!$("[name=company-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct company name!"
        });
        $("[name=company-name]").focus();
        isErrors = true;
        return false;
    }

    return isErrors;
}

function makeUpdate() {

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
                message: "Record updated successfully"
            })

        }, error: function() {
            $(".bs-component").overhang({
                type: "error",
                message: "Something went wrong!"
            })
        }
    })
}
