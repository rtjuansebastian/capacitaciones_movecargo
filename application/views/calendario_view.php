<?php $this->load->view("header");  ?>      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id='calendar'></div>
                    <br>
                    <br>
                </div>
            </div>          
        </div>
<?php $this->load->view("footer");  ?>      
    <script>
        $(document).ready(function() 
	{
            $('#calendar').fullCalendar({
                locale: 'es',
                defaultView: 'agendaWeek',
                draggable: true, 
                events: "<?php echo base_url(); ?>calendario/traer_calendario_capacitaciones", 
               eventDrop: function(event, delta) { 
                  alert(event.title + ' was moved ' + delta + ' days\n' + 
                     '(should probably update your database)'); 
               }, 
               loading: function(bool) { 
                  if (bool) $('#loading').show(); 
                  else $('#loading').hide(); 
               },
                header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
               },
               editable: true,
               droppable: true
            });     
        });
    </script>