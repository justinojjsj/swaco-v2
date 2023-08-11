//JAVASCRIPT COM TUDO O QUE FUNCIONA NA PÁGINA PRINCIPAL DO CALENDAR

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'pt-br',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      //initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: './php/mycalendar.php',    

      eventClick: function(info) {
        $("#apagar_evento").attr("href", "/fullcalendar/php/proc_apagar_evento.php?id=" + info.event.id);
        info.jsEvent.preventDefault(); // don't let the browser navigate            
        $('#visualizar #id').text(info.event.id);
        $('#visualizar #id').val(info.event.id);
        $('#visualizar #title').text(info.event.title);
        $('#visualizar #title').val(info.event.title);
        $('#visualizar #url').text(info.event.url);
        $('#visualizar #url').val(info.event.url);
        $('#visualizar #start').text(info.event.start.toLocaleString());
        $('#visualizar #start').val(info.event.start.toLocaleString());
        $('#visualizar #end').text(info.event.end.toLocaleString());
        $('#visualizar #end').val(info.event.end.toLocaleString());
        $('#visualizar #color').val(info.event.backgroundColor);
        $('#visualizar').modal('show');
      },
      selectable: true,
      select: function(info) {
        $('#cadastrar #start').val(info.start.toLocaleString());
        $('#cadastrar #end').val(info.start.toLocaleString());
        $('#cadastrar').modal('show');
      }

    });
    calendar.render();
  });

function formatar_mascara(src, mascara) {
  var campo = src.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(campo);
  if(texto.substring(0,1) != saida) {
  src.value += texto.substring(0,1);
  }
}