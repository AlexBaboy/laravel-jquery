$("#user-update-form").submit(function(e) {

    e.preventDefault();

    let isErrors = checkFormUpdate();

    if(isErrors !== true)
        makeUpdate();
})

function checkFormUpdate() {

    let isErrors = false;

    //check !!!
    if(!$("[name=email]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct email!"
        });
        $("[name=email]").focus();
        isErrors = true;
        return isErrors;
    }

    if(!$("[name=phone]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct phone!"
        });
        isErrors = true;
        return isErrors;
    }

    if(!$("[name=first-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct first name!"
        });
        isErrors = true;
        return isErrors;
    }

    if(!$("[name=last-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct last name!"
        });
        isErrors = true;
        return isErrors;
    }

    if(!$("[name=company-name]").val()) {
        $(".bs-component").overhang({
            type: "error",
            message: "Enter the correct company name!"
        });
        isErrors = true;
        return isErrors;
    }

    return isErrors;
}

function makeUpdate() {

    const values = {};
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
