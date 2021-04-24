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
        setTimeout(function(){
            $('.searchresults').hide();
        }, 500);
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
                    if($('.searchresults').length == 0){
                        $('#busca').after('<div class="searchresults"></div>');
                    }
                    $('.searchresults').css('left', $('#busca').offset().left+'px');
                    $('.searchresults').css('top', $('#busca').offset().top+$('#busca').height()+14+'px');

                    var html = '';
                    for(var i in json){
                        html += '<div class="si"><a href="'+json[i].link+'">'+json[i].name+'</a></div>';
                    }

                    $('.searchresults').html(html);
                    $('.searchresults').show();
                }
            });
        }
    });
});