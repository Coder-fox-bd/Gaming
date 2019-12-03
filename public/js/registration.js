$(document).ready(function () {
    $("#user_form").validate({
        rules: {
            confirm_password: {
                equalTo: "#password"
            },
        },
        messages: {

            confirm_password: {
                equalTo: "Please enter the same password as above"
            },

        },
    });

});
