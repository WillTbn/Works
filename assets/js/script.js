$(document).ready(function(){
    var adjustSidebar = function(){
        $(".sidebar").slimScroll({
            height: document.documentElement.clientHeight - $(".navbar").outerHeight()
        });
    };
    adjustSidebar();
    // $(window).resize(function(){
    //     adjustSidebar();
    // });
    $(".sideMenuToggler").on("click", function (){
        $(".wrapper").toggleClass("active");
    });
});
$(function(){
    $('#busca').on('focus', function(){
        $(this).animate({
            width:'350px'
        });
    });
    $('#busca').on('blur', function(){
        if($(this).val() == ''){
            $(this).animate({
                width:'100px'
            });
        }
    });
    $('#busca').on('keyup', function(){
        var datatype = $(this).attr('data-type');
        var q = $(this).val();
        if(datatype != ''){
            $.ajax({
                url:BASE_URL+'/ajax/'+datatype,
                type:'GET',
                data:{q:q},
                dataType:'json',
                success:function(json){
                    
                }
            });
        }
    });
});