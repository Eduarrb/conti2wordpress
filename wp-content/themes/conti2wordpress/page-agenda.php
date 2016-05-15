<?php
/*
	Template Name: Agenda
*/

get_header();?>
	<section class="sectionAgenda">
		<figure class="sectionAgenda-agendaLogo">
			<img src="<?php bloginfo('stylesheet_directory') ?>/assets/imagenes/agenda.png" alt="" class="sectionAgenda-agendaLogo__img">
		</figure>
		<!-- <figure class="sectionAgenda-calendarioLogo">
			<img src="imagenes/calendario.png" alt="" class="sectionAgenda-calendarioLogo__img">
		</figure> -->
		<div class="sectionAgenda-Calendario">
			<div id="mini-clndr">
          <script id="mini-clndr-template" type="text/template">

            <div class="controls">
              <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %>  <%= year %></div><div class="clndr-next-button">&rsaquo;</div>
            </div>

            <div class="days-container">
              <div class="days">
                <div class="headers">
                  <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
                </div>
                <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
              </div>
              <div class="events">
                <div class="headers">
                  <div class="x-button">x</div>
                  <div class="event-header">EVENTOS</div>
                </div>
                <div class="events-list">
                  <% _.each(eventsThisMonth, function(event) { %>
                    <div class="event">
                      <a href="<%= event.url %>"><%= moment(event.date).format('MMMM Do') %>: <%= event.title %></a>
                      <div class="event-item-location"><%= event.location %></div>
                    </div>
                  <% }); %>
                </div>
              </div>
            </div>

          </script>
        </div>

		</div>
	</section>
<?php get_footer(); ?>