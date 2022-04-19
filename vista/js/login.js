$('#login').click(function(){
    let error=[];
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var passwordregex = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    const correo = $('#correo').val();
    const password = $('#password').val();
    
    if(correo==='' || password===''){
        $("form").append("<div class='error'>Llene todos los campos</div>");
        setTimeout(function() {
            $(".error").remove();
        },3000);
    }else{

        if(!emailRegex.test(correo)){
            error.push('Ingrese un correo válido');
        }else if(!passwordregex.test(password)){
            error.push('La contraseña es incorrecta')
        }
        if(error.length>0){
            error.forEach(e =>  $("form").append("<div class='error'>"+e+"</div>"));
            setTimeout(function() {
                $(".error").remove();
            },3000);
        }else{
            BuscarCliente(correo,password);
        }
        

    }
});

function BuscarCliente(correo,password){
    const datos="correo="+correo+"&password="+password;
    $.ajax({
        data:datos,
        url:"../../controlador/accion/act_login.php",
        type:'POST',
        success: function(data){
            if(data==-1){
                Swal.fire({
                    icon: 'error',
                    title: 'Datos incorrectos',
                    text: 'Revise sus datos e intenete nuevamente',
                })
                return;
            }else{
                window.location="../registrotienda/registrarNegocio.php";
            }
        }
    });
}