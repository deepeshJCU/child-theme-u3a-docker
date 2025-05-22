<?php
/* Template Name: Timetable */
get_header(); ?>

<main class="u3a-timetable container">
  <h1>Weekly Timetable</h1>
  <p>View our up-to-date class schedule for the week.</p>

  <section class="grid-timetable">
    <h2>Townsville Mainland</h2>
    <div class="timetable-grid">
      <div><strong>Day</strong></div>
      <div><strong>Time</strong></div>
      <div><strong>Class</strong></div>
      <div><strong>Contact</strong></div>
      <div><strong>Venue</strong></div>

  <div>Monday</div><div>9.00–10.00</div><div>Book Club</div><div>Jenny Marks</div><div>Aitkenvale Library foyer</div>
  <div>Monday</div><div>9.00–10.00</div><div>Exercise Class</div><div>Thea Eastwood</div><div>Hyde Park Centre</div>
  <div>Monday</div><div>9.00–12.00</div><div>Mah Jong</div><div>Gwen Wilson</div><div>Thuringowa Library</div>
  <div>Monday</div><div>12.30–6.00</div><div>Social Art</div><div>Patricia Jones, Judy Osborne</div><div>Dan Gleeson Gardens</div>
  <div>Monday</div><div>1.00–2.00</div><div>Indonesian</div><div>Eric Campbell</div><div>Aitkenvale Library</div>
  <div>Monday</div><div>1.30–3.00</div><div>Folk Dancing</div><div>Jacqueline Spry, Barbara Romacker</div><div>Heatley Community Centre</div>

  <div>Tuesday</div><div>9.00–12.00</div><div>Craft & Cardmaking</div><div>June Lorrimer</div><div>Upper Ross Centre</div>
  <div>Tuesday</div><div>10.00–12.00</div><div>Creative Writing</div><div>Valda Spencer, Ann K</div><div>Vale Hotel</div>
  <div>Tuesday</div><div>9.00–10.20</div><div>Self-help Spanish</div><div>Graham Collins</div><div>U3A Vincent</div>
  <div>Tuesday</div><div>2.00–3.30</div><div>History</div><div>Nanette Grace</div><div>U3A Vincent</div>

  <div>Wednesday</div><div>9.00–10.00</div><div>Exercise Class</div><div>Viv Watkins</div><div>Hyde Park Centre</div>
  <div>Wednesday</div><div>9.00–10.00</div><div>Tai Chi</div><div>Geoff Ward</div><div>Church of Christ Hall</div>
  <div>Wednesday</div><div>9.00–12.00</div><div>Pottery</div><div>Nick Dimitriou</div><div>Rosslea</div>
  <div>Wednesday</div><div>9.30–12.30</div><div>Canasta</div><div>Bev Ponder</div><div>German-Australian Club</div>

  <div>Thursday</div><div>9.00–12.00</div><div>Painting</div><div>Jan Fels, Kathleen</div><div>CWA Hall, Pimlico</div>
  <div>Thursday</div><div>9.30–11.30</div><div>Photography</div><div>Roland Lange</div><div>U3A Vincent</div>
  <div>Thursday</div><div>9.30–12.00</div><div>Successful Investor</div><div>John Weil</div><div>Heatley Community Centre</div>

  <div>Friday</div><div>7.30–8.45</div><div>Walking</div><div>Margaret Cuthbert</div><div>Phone Margaret</div>
  <div>Friday</div><div>9.00–10.00</div><div>Exercise Class</div><div>Val Grogan</div><div>Hyde Park Centre</div>
  <div>Friday</div><div>10.00–12.00</div><div>Scrabble</div><div>Kate Eagling</div><div>U3A Vincent</div>
</div>


  </section>

  <section class="accordion-section">
    <h2>Magnetic Island</h2>
    <button class="accordion">Monday</button>
    <div class="panel">
      <p>10.00–12.00 – Monday Talk / Short Course – Michael Keating – RSL, Arcadia</p>
    </div>
    <button class="accordion">Tuesday</button>
    <div class="panel">
      <p>7.00–8.00 – Tai Chi – Chi Kung – Peter Duckworth, Tania Thoreau – Phone for venue</p>
      <p>1.30–3.30 – Recorder Ensemble – Ros Burry, Kelly Marlin-Zwa – Phone for venue</p>
    </div>
    <button class="accordion">Wednesday</button>
    <div class="panel">
      <p>9.30–11.00 – French Conversation – Gisela Edwards – Phone for venue</p>
      <p>7.30 pm – U3A Singers – Barbara White, Tania Thoreau – RSL, Arcadia</p>
    </div>
    <button class="accordion">Thursday</button>
    <div class="panel">
      <p>9.30–11.00 – Spanish Conversation – Tania Thoreau – Phone for venue</p>
    </div>
    <button class="accordion">Friday</button>
    <div class="panel">
      <p>7.00–8.00 – Tai Chi – Yang 85 – Peter Duckworth – Phone for venue</p>
    </div>
  </section>

  <section>
    <h2>Venues</h2>
    <ul>
      <li>Aitkenvale Community Centre</li>
      <li>Magnetic Island Locations</li>
      <li>JCU Education Rooms</li>
      <li>U3A Vincent</li>
      <li>Thuringowa Library</li>
      <li>Heatley Community Centre</li>
      <li>CWA Hall, Pimlico</li>
      <li>German-Australian Club</li>
    </ul>
  </section>
</main>

<script>
  const acc = document.querySelectorAll(".accordion");
  acc.forEach(button => {
    button.addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  });
</script>

<?php get_footer(); ?>
