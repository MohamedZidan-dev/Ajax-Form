
$('.ajax-form').submit(function(ev){
    ev.preventDefault();



    $.post("functions/addUser.php",{
         name :  $('input[name="name"]').val(),
         email :  $('input[name="email"]').val(),
         phone :  $('input[name="phone"]').val(),
         password :  $('input[name="password"]').val(),
         address : $('input[name="address"]').val()
    },function(data){
        $('.success').append(data);
        $("input[name='name']").val("");
        $("input[name='email']").val("");
        $("input[name='phone']").val("");
        $("input[name='password']").val("");
        $("input[name='address']").val("");

        setTimeout(function(){
            $('.remove').remove();
        },1500)
    })
})