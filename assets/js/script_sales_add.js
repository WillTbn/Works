function selectClient(obj) {
    var id = $(obj).attr('data-id');
    var name = $(obj).html();
    $('.searchresults_sales').hide();
    $('#client_name').val(name);
    $('#client_name').attr('data-id', id);
}
$(function(){
    $('#client_name').on('keyup', function(){
        var datatype = $(this).attr('data-type');
        var q = $(this).val();
        if(datatype != ''){
            $.ajax({
                url:BASE_URL+'/ajax/'+datatype,
                type:'GET',
                data:{q:q},
                dataType:'json',
                success:function(json){
                    if($('.searchresults_sales').length == 0){
                        $('#client_name').after('<div class="searchresults_sales"></div>');
                    }
                    $('.searchresults_sales').css('left', $('#client_name').offset().left+'px');
                    $('.searchresults_sales').css('top', $('#client_name').offset().top+$('#client_name').height()+14+'px');

                    var html = '';
                    for(var i in json){
                        html += '<div class="si"><a href="javascript:;" onclick="selectClient(this)" data-id="'+json[i].id+'" >'+json[i].name+'</a></div>';
                    }

                    $('.searchresults_sales').html(html);
                    $('.searchresults_sales').show();
                }
            });
        }
    });
});