let path = "http://127.0.0.1/marcacion-actividad/index.php/";

$(document).ready(function(){
    cargarCategoriasActividades(1);
    horaTiempoReal();
    //hora tiempo real
    setInterval(horaTiempoReal, 60000);
});
function horaTiempoReal(){
    let hora = new Date();
    let horas = hora.getHours();
    let minutos = hora.getMinutes();

    if (minutos <= 9)
        minutos = "0" + minutos
        cargarCategoriasActividades
    $("#horaini_marcacion").val(horas +":"+ minutos);
}
cargarCategoriasActividades = (idEstado) =>{
    $.ajax({
        url: path + "CategoriaActividad/getAllCategoriaActividadXEstado",
        type: "POST",
        data: {
            idEstado: idEstado
        },
        success: function(data){
            let slctCategoria = $("#slct_categoria");
            slctCategoria.find("option").remove();
            slctCategoria.append("<option disabled selected>Seleccione una opción</option>");
            
            let datos = JSON.parse(data);
            if(datos.respuesta == "success"){
                if(datos.categoriaActividades != "vacio"){
                    let categoriaActividades = datos.categoriaActividades;
                    for(i = 0; i < categoriaActividades.length; i++){
                        let categoriaActividad = categoriaActividades[i];
                        slctCategoria.append("<option value="+categoriaActividad.id_CategoriaActividad+">"+categoriaActividad.Descripcion+"</option>");
                    }
                }
            }else{
                new $.Zebra_Dialog(
                    datos.errores,
                    {
                        type: "error",
                        title: "Error"
                    }
                );
            }
        }
    });
}