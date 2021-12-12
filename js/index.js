$(document).ready(() => {
    getPosts();
})

function getPosts() {
    jQuery.ajax({
        type: "POST",
        url: "php_funcs/entries.php",
        dataType: "json",
        data: {
            func: "getAllPosts"
        },
        success: function(obj) {
            $("#blog-entries").html(obj);
        }
    });
}

function deletePost(id) {
    jQuery.ajax({
        type: "POST",
        url: "php_funcs/actions.php",
        dataType: "json",
        data: {
            func: "deletePost",
            id: id
        },
        success: function (obj) {
            getPosts();
        }
    })
}

function redirectToEdit(id) {
    window.location.href = "http://localhost:3000/edit.php?id=" + id;
}

function redirectToAddPost() {
    window.location.href = "http://localhost:3000/create.php";
}