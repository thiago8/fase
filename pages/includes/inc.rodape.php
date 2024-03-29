        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo BASE_URL;?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo BASE_URL;?>/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo BASE_URL;?>/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo BASE_URL;?>/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo BASE_URL;?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL;?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo BASE_URL;?>/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo BASE_URL;?>/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo BASE_URL;?>/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo BASE_URL;?>/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo BASE_URL;?>/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
		<!-- DATA TABES SCRIPT -->
		<script src="<?php echo BASE_URL;?>/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo BASE_URL;?>/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>		
        <!-- AdminLTE App -->
        <script src="<?php echo BASE_URL;?>/js/app.js" type="text/javascript"></script>        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo BASE_URL;?>/js/AdminLTE/dashboard.js" type="text/javascript"></script>             
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo BASE_URL;?>/js/AdminLTE/demo.js" type="text/javascript"></script>
		
		<script src="<?php echo BASE_URL;?>/js/func.js" type="text/javascript"></script>    
		
		<script type="text/javascript">
            $(function() {
                $('#tblListagem').dataTable({                 
					"bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true
                });
				
				$('#textoEvento').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A'});
            });
			
			 $(function() {
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });
						
						

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
                
				$('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next',
                        center: 'title',
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "<span class='fa fa-caret-left'></span>",
                        next: "<span class='fa fa-caret-right'></span>",
                        today: 'Hoje',
                        month: 'Mês',
                        week: 'Semana',
                        day: 'Dia'
                    },
					monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
					monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
					dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
					dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],					
                    
                    <?php
					/*
					events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            backgroundColor: "#f56954", //red
                            borderColor: "#f56954" //red
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            backgroundColor: "#f39c12", //yellow
                            borderColor: "#f39c12" //yellow
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false,
                            backgroundColor: "#0073b7", //Blue
                            borderColor: "#0073b7" //Blue
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false,
                            backgroundColor: "#00c0ef", //Info (aqua)
                            borderColor: "#00c0ef" //Info (aqua)
                        },
                        {
                            title: 'Birthday Party',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false,
                            backgroundColor: "#00a65a", //Success (green)
                            borderColor: "#00a65a" //Success (green)
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/',
                            backgroundColor: "#3c8dbc", //Primary (light-blue)
                            borderColor: "#3c8dbc" //Primary (light-blue)
                        }
                    ],
					*/
					?>
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });
				
                /* ADDING EVENTS */
				
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("color");
                    //Add color effect to button
                    colorChooser
                            .css({"background-color": currColor, "border-color": currColor})
                            .html($(this).text()+' <span class="caret"></span>');
                });
                $("#btCriarEvento").click(function(e) {
                    e.preventDefault();
                    var val = $("#textoEvento").val();
                    if (val.length == 0) {
                        return;
                    }
                    var event = $("<div />");
                    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
                    event.html(val);
                    $('#listaEventos').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                    //Remove event from text input
                    $("#textoEvento").val("");
                });
				
            });
        </script>

		
    </body>
</html>