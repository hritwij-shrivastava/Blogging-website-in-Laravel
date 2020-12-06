$(document).ready(function(){
    $('.fullarea').hover(function(){
        $(this).children('.publish').addClass('show');
        $(this).children('.trash').addClass('show');
        $(this).children('.preview').addClass('show');
    },function(){
        $(this).children('.publish').removeClass('show');
        $(this).children('.trash').removeClass('show');
        $(this).children('.preview').removeClass('show');
    });
    $('.trash').on('click',function(){
        $post_id = $(this).siblings("a").attr('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "post/delete",
            type: "POST",
            data: {"post_id":$post_id},
            success: function (data) {
                location.reload(true);
                alert("Post Deleted Successfully");
            }
        });
    });     
    $('.preview').on('click',function(){
        $post_id = $(this).siblings("a").attr('id');
        window.open("../blog/blog.php?id="+$post_id,"_self");
    });
    
    
});