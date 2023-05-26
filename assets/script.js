$(document).ready(function() {
    $("#form-validation").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            name_category: {
                required: true,
                minlength: 3
            }
        },
        messages : {
            name_category: {
                required: "Please enter your name category",
                minlength: "Name should be at least 3 characters"
            }
        }
    });
});
// $(document).ready(function() {
    //     $("#basic-form").validate();
// });