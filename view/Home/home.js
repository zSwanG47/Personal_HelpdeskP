
function init(){

}

$(document).ready(function(){
    var usu_id = $('#user_idx').val();

    if ($('#rol_idx').val()==2){
        $.post("../../controller/usuario.php?op=total", {usu_id : usu_id}, function (data){
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        });
    
        $.post("../../controller/usuario.php?op=totalabierto", {usu_id : usu_id}, function (data){
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });
        
        $.post("../../controller/usuario.php?op=totalcerrado", {usu_id : usu_id}, function (data){
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=grafico", {usu_id : usu_id},function (data) {
            data = JSON.parse(data);
    
            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value'],
                barColors: ["#1AB244"]
            });
        });

        $('#idcalendar').fullCalendar({
            lang:'es',
            header:{
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'  
            },
            defaultView:'month',
            events:{
                url:'../../controller/ticket.php?op=usu_calendar',
                method:'POST',
                data:{usu_id:usu_id}
            }
        });

    }else{
        window.location.href = "indexUsuario.php";
    }
});

init();