$(document).ready(function () {
    $(document).on('submit', '#loginForm', function (e) {
        e.preventDefault();
        var formdata = $(this).serialize()
        console.log(formdata)
        $.ajax({
            type: "get",
            url: "",
            data: formdata,
            success: function (response) {
                if (response.success == true) {
                    window.location.href = '/home'
                } else if (response.success == false && response.data) {
                    var error_string = ""
                    var validation_err = Object.entries(response.data)
                    console.log(validation_err)
                    for (let i = 0; i <= validation_err.length - 1; i++) {
                        console.log(validation_err[i][1][0])
                        error_string += "<li>" + validation_err[i][1][0] + "</li>";
                    }
                    $("#alertMessage").html(error_string)
                    $("#alertMessage").show()
                } else if (response.success == false) {
                    $("#alertMessage").show()
                    $("#alertMessage").html(response.message)
                    setTimeout(() => {
                        window.location.href = "https://google.com"
                    }, 1500);
                }
            }
        });
    });
});