$('#registrarse').click(function(){
    let error=[];
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var passwordregex = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    const nombre = $('#nombre').val();
    const apellido = $('#apellido').val();
    const correo = $('#correo').val();
    const password1 = $('#password1').val();
    const password2 = $('#password2').val();
    
    if(nombre==='' || apellido==='' || correo==='' || password1==='' || password2===''){
        $("form").append("<div class='error'>Llene todos los campos</div>");
        setTimeout(function() {
            $(".error").remove();
        },3000);
    }else{

        if(!emailRegex.test(correo)){
            error.push('Ingrese un correo válido');
        }

        if(!passwordregex.test(password1)){
            error.push('La contraseña debe tener entre 8 y 16 caracteres, un dígito, una minúscula y una mayúscula.')
        }else if(password1!=password2){
            error.push('Las contraseñas no coinciden');
        }
        if(error.length>0){
            error.forEach(e =>  $("form").append("<div class='error'>"+e+"</div>"));
            setTimeout(function() {
                $(".error").remove();
            },5000);
        }else{
            registrarCliente(nombre,apellido,correo,password1);
        }
        

    }
});

function registrarCliente(nombre,apellido,correo,password){
    let datos= 'nombre='+nombre+'&apellido='+apellido+'&correo='+correo+'&password='+password;
    $.ajax({

        data: datos,
        type: 'POST',
        url: '../../controlador/accion/act_registrarPersona.php',
        success: function(data){
            if(data == -1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Este email ya ha sido registrado',
                })
                return;
            } 
            if(data!=0){
                Swal.fire({
                    icon: 'success',
                    title: 'Excelente...',
                    text: 'Cuenta registrada existosamente',
                })
            
            }
        }
    });

}