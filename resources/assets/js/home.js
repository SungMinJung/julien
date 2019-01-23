$(document).ready(function(){
    var left = 200;
    var top = 200;
    $('.popup').each(function(index){
        $(this).css('left',left);
        $(this).css('top',top);
        left+=100;
        top+=100;
    })

    $('.popup_delete').on("click",function(){
        $(this).parents('div.popup').fadeOut();
    })
})