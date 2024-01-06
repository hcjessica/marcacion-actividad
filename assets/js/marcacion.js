$(document).ready(function(){
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

    $("#horaini_marcacion").val(horas +":"+ minutos);
}