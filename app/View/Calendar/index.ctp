<link rel='stylesheet' type='text/css' href='http://arshaw.com/js/fullcalendar-1.5.4/fullcalendar/fullcalendar.css' />
<script type='text/javascript' src='http://arshaw.com/js/fullcalendar-1.5.4/jquery/jquery-1.8.1.min.js'></script>
<script type='text/javascript' src='http://arshaw.com/js/fullcalendar-1.5.4/jquery/jquery-ui-1.8.23.custom.min.js'></script>
<script type='text/javascript' src='http://arshaw.com/js/fullcalendar-1.5.4/fullcalendar/fullcalendar.min.js'></script>


 <script type='text/javascript'>
    $(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
        $('#calendar').fullCalendar({
           header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			events: 'events',
            eventClick: function(event) {
			   start = event.start;
			   //alert();
               $("#popup_data").html(event.title+"<br>"+"Start Time : "+start+"<br>"+"End Time : "+event.end+"<br>"+"Location : "+event.location+"<br>"+"Description : "+event.desc);
               loadPopupBox();
			   //window.location = event.url;
               return false;
            }, 
		});

    });
</script>
<div id="popup_box">
    <div id="popup_data">Loading ..</div>
    <a id="popupBoxClose">Close</a>   
</div>
<div id="content">
  <div id="eventdata"></div>
  <div id='loading' style='display:none'>loading...</div>
  <div id='calendar'></div>
</div>

<script type="text/javascript">
   

   
        // When site loaded, load the Popupbox First
       
   
        $('#popupBoxClose').click( function() {           
            unloadPopupBox();
        });
       
        $('#container').click( function() {
            unloadPopupBox();
        });

        function unloadPopupBox() {    // TO Unload the Popupbox
            $('#popup_box').fadeOut("slow");
            $("#content").css({ // this is just for style       
                "opacity": "1" 
            });
        }   
       
        function loadPopupBox() {    // To Load the Popupbox
            $('#popup_box').fadeIn("slow");
            $("#content").css({ // this is just for style
                "opacity": "0.3" 
            });        
        }       
    
</script>    
<style type="text/css"> /* popup_box DIV-Styles*/ #popup_box {      display:none; /* Hide the DIV */     position:fixed;       _position:absolute; /* hack for internet explorer 6 */       height:300px;       width:600px;       background:#FFFFFF;       left: 300px;     top: 150px;     z-index:100; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */     margin-left: 15px;            /* additional features, can be omitted */     border:2px solid #ff0000;           padding:15px;       font-size:15px;       -moz-box-shadow: 0 0 5px #ff0000;     -webkit-box-shadow: 0 0 5px #ff0000;     box-shadow: 0 0 5px #ff0000;      }  #container {     background: #d2d2d2; /*Sample*/     width:100%;     height:100%; }  a{   cursor: pointer;   text-decoration:none;   }   /* This is for the positioning of the Close Link */ #popupBoxClose {     font-size:20px;       line-height:15px;       right:5px;       top:5px;       position:absolute;       color:#6fa5e2;       font-weight:500;       } </style>    

