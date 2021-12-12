function addPost() {
    jQuery.ajax({
        type: "POST",
        url: "php_funcs/actions.php",
        dataType: "json",
        data: {
            func: "addPost",
            title: $("#title").val(),
            content: $("#content").val()
        },
        success: function(obj) {
            returnHome()
        }
    });
}

function returnHome() {
    window.location.href = "http://localhost:3000/index.php";
}