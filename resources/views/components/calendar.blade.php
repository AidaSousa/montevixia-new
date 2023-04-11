extends layouts/_layout.pug

block variables
	- var activePage = 'calendar-page';
	- var activeGroup = 'pages';

block title
	title Calendar - Vali Admin

block content
	.app-title
		div
			h1
				i.fa.fa-calendar
				|  Calendar
			p Full Calander page for managing events

		ul.app-breadcrumb.breadcrumb
			li.breadcrumb-item
				i.fa.fa-home.fa-lg
			li.breadcrumb-item
				a(href='#') Calendar

	.row
		.col-md-12
			.tile.row
				.col-md-3
					#external-events
						h4.mb-4 Draggable Events
						.fc-event My Event 1
						.fc-event My Event 2
						.fc-event My Event 3
						.fc-event My Event 4
						.fc-event My Event 5
						p.animated-checkbox.mt-20
							label
								input#drop-remove(type="checkbox")
								span.label-text Remove after drop
							
				.col-md-9
					#calendar

block specific-js
	script(type='text/javascript', src="js/plugins/moment.min.js")
	script(type='text/javascript', src="js/plugins/jquery-ui.custom.min.js")
	script(type='text/javascript', src="js/plugins/fullcalendar.min.js")
	script(type="text/javascript").
		$(document).ready(function() {

			$('#external-events .fc-event').each(function() {

				// store data so the calendar knows to render an event upon drop
				$(this).data('event', {
					title: $.trim($(this).text()), // use the element's text as the event title
					stick: true // maintain when user navigates (see docs on the renderEvent method)
				});

				// make the event draggable using jQuery UI
				$(this).draggable({
					zIndex: 999,
					revert: true,      // will cause the event to go back to its
					revertDuration: 0  //  original position after the drag
				});

			});

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				editable: true,
				droppable: true, // this allows things to be dropped onto the calendar
				drop: function() {
					// is the "remove after drop" checkbox checked?
					if ($('#drop-remove').is(':checked')) {
						// if so, remove the element from the "Draggable Events" list
						$(this).remove();
					}
				}
			});


		});
