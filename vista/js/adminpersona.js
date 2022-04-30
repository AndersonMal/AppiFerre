$(document).ready(function() { 
    actVerpersona();
})

function actVerpersona(){
    $.ajax({
        url: "../controlador/accion/act_verPersona.php",
        success: function(result){ 
           insertarPersonaEnTabla(JSON.parse(result))
        },
    error: function(xhr){
        alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
      }});
}

function act_registrarPersona(nombre,apellido, correo){
    $.ajax({
        data: { 
                   "nombre" : nombre,
                   "apellido" : apellido,
                   "correo" : correo,
            },
            type: "POST",
            dataType: "json",
            url: "../controlador/accion/act_registrarPersona.php",
    success: function(result){
        $('#modalCrearPersona').modal('hide');
        insertarPersonaEnTabla(nombre,apellido, correo);
    }})
}

function insertarPersonaEnTabla(result){
    let persona = ''

    $.each(result, function(i) {
     
        persona +='<tr id='+result[i].id+'>'
        +'<td width="100"  style=" border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].nombre+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].correo+'</td>'
        +'<td width="20" style="border: 1px solid #dddddd; text-align: left;padding: 8px;">'+result[i].apellido+'</td>'
       +'<td width="150" style="border: 1px solid #dddddd; text-align: left;padding: 8px;"><a href="#" class="editar mr-3 btn btn-info btn-md" role="button" aria-pressed="true">Editar</a>'
        +'<a href="../controlador/accion/act_eliminarPersona.php?idpersonas='+result[i].id+'" class="btn btn-danger btn-md" role="button" aria-pressed="true">Eliminar</a></td>'
        +'</tr>'

    })

    $("#personasRegistradas tbody").append(persona)
    insertarDatosPersonaEnModal()

}

function insertarDatosPersonaEnModal(){
    $(".editar").on("click",function(){
        let idpersonas = $(this).closest("tr").attr("id")
      
        $.ajax({
            type: "POST",
            data: {idpersonas: parseInt(idpersonas, 10)},
            url: "../controlador/accion/ajax_verUsuarioPorId.php",
            success: function(data){
                let persona = JSON.parse(data)
             
                $("#modalEditarPersona").modal('show');

                $("#modalEditarPersona input[name='idpersonas']").val(persona.id)
                $("#modalEditarPersona input[name='nombre']").val(persona.nombre)
                $("#modalEditarPersona input[name='apellido']").val(persona.apellido)
                $("#modalEditarPersona input[name='correo']").val(persona.correo)

          }})

    })
}
