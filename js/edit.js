let id = null;

$(document).ready(() => {
    let url = new URL(window.location.href);
    id = url.searchParams.get('id');
    getPost(id);
})

function getPost(id) {
    jQuery.ajax({
        type: "POST",
        url: "php_funcs/entries.php",
        dataType: "json",
        data: {
            func: "getPostById",
            id: id
        },
        success: function(obj) {
            if (obj) {
                $("#title").val(obj.title)
                $("#content").val(obj.content)
            }
        }
    });
}

function editPost() {
    jQuery.ajax({
        type: "POST",
        url: "php_funcs/actions.php",
        dataType: "json",
        data: {
            func: "editPost",
            id: id,
            title: $("#title").val(),
            content: $("#content").val()
        },
        success: function(obj) {
            window.location.href = "http://localhost:3000/index.php";
        }
    });
}