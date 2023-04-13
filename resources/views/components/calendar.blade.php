
	<div class="container">

		<div class="card">
		
		<div id='calendar'></div>

		<div>


	</div>

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js"></script>
<script>

      document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });

        calendar.render();
      });

</script>

@endpush

