<?php
/* Template Name: Activities */
get_header(); ?>

<main class="u3a-activities container">
  <h1>Weekly Activities</h1>

  <h2>Announcement</h2>
  <p><i><strong>We are pleased to announce that under normal circumstances we should have the office open five days a week from 9.30 – 12 noon. I say normal because some of us need to have a break every now and then. Hence, we are looking for a few more volunteers to back up the regular office people when they are not able to make it. If you can help please contact Christine at cjdouglas11@bigpond.com.</strong></i></p>

  <h3>Wanted - Volunteers</h3>
  <p><i>We would like a few hours of your time to ‘man’ a stall and spread the good news about U3A. This is part of our marketing activity, not a ‘sales’ activity. It is about raising our profile in the community. Can you help? We also are looking for someone to coordinate the marketing activities for the year. Would you like to give this a go? No experience required — you will learn on the job.</i></p>

  <h3>Explore our broad range of weekly programs from arts and fitness to academic talks and social events.</h3>
  <p>Enjoyable activities and programmes are the reason that members join our organisation. We now have 30 programmes a week, up from 16 a year ago. Some other U3A’s conduct over 100 programmes a week. How can we increase the number of activities? We need Facilitators and Tutors. If you have a skill or an interest you would like to share with others, please get in touch with the committee and we will do our best to establish a group.</p>
  <p>Don’t be a stranger, join an activity and bring a friend. Keep learning — it is one of the ingredients for a happy and healthy life.</p>
  <picture>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/terry.jpg" alt="Terry Lambrose" class="activity-image">
    <figcaption><strong>Terry Lambrose</strong>, President U3A Townsville (2018)</figcaption>
  </picture>

  <section class="activity-categories">
    <h2>Categories</h2>
    <ul>
      <li>🎨 Creative</li>
      <li>💡 Humanities</li>
      <li>🧪 STEM</li>
      <li>🏃 Health & Leisure</li>
      <li>📚 Friday Talks (Townsville)</li>
      <li>🌴 Monday Talks (Magnetic Island)</li>
    </ul>
  </section>

  <section class="activity-grid">
    <h2>Featured Programs</h2>

```
<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gardening.jpg" alt="Gardening Group" class="activity-image">
  <h3>What a start to the year!</h3>
  <p>A successful AGM with 90 people attending, new courses, and four new people on the committee. Plus, we now have a Grants Co-ordinator with Mary taking up that challenge. Christine, our newsletter editor, has also agreed to coordinate the office volunteers.</p>
  <p>Our membership is growing. In 2016 we had around 450 members. By the AGM in March 2017, 350. During 2017 it grew to 470, and by March 2018 it was 400. Currently, it’s 430. Clearly as a club we are doing something right.</p>
  <p>But why do we not have 2000+ members like Toowoomba, Bribie Island, or Redcliff? The answer likely lies in our marketing, programming, and financial base.</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/taichi.jpg" alt="Tai Chi" class="activity-image">
  <h3>Tai Chi</h3>
  <strong>Geoff Ward – 0417 170 745<br>Peter Duckworth (Magnetic Island) – 4758 1981</strong>
  <p>Tai Chi is one of the most effective exercises for health of mind and body. Easy to learn, it quickly delivers benefits. Join the Tai Chi group in Townsville (Wednesdays 9–10) or on Magnetic Island (Tuesdays 7–8pm).</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/walking.jpg" alt="Walking" class="activity-image">
  <h3>Walking Group</h3>
  <p>Margaret Cuthbert – 4779 1882</p>
  <p>Join us for fresh air and exercise while exploring Townsville. We walk at a comfortable pace with breaks to observe nature. Many of our group members also stop for coffee afterwards.</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/art.jpg" alt="Art Group" class="activity-image">
  <h3>Creative Arts</h3>
  <p>Heather – 0408 737 021<br>Jan Fels – 0473 015 613<br>Kathleen – 4779 1252</p>
  <p><strong>Art at Thuringowa:</strong> Paint, draw, sculpt — with occasional professional workshops.</p>
  <p><strong>Art at Pimlico:</strong> Painters in any medium meet and share experiences.</p>
  <p><strong>Art Class:</strong> With Irene and Heather, learn to create an art journal, mix colors, and compose scenes while developing drawing techniques.</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/photography.jpg" alt="Photography" class="activity-image">
  <h3>Photography</h3>
  <p>Roland Lange – 0406 471 721</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/finance.jpg" alt="Finance" class="activity-image">
  <h3>Finance</h3>
  <p>John Weil – 4723 8615</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/astronomy.jpg" alt="Astronomy" class="activity-image">
  <h3>STEM</h3>
  <p>Terry Lambrose – 0434 634 822</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/languages.jpg" alt="Languages" class="activity-image">
  <h3>Languages</h3>
  <p>French – Georgina Valdeter, Gisela Edwards<br>Russian – Lucy Figg<br>Spanish – Graham Collins, Tania Thoreau</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/philosophy.jpg" alt="Philosophy" class="activity-image">
  <h3>Philosophy</h3>
  <p>Lyam Morris – 0439 281 883</p>
</div>
```

  </section>

  <section>
    <h2>Programs</h2>
    <ul>
      <li><strong>Creative Writing</strong> – Weekly, Room 4, Fridays 10–12pm</li>
      <li><strong>Tai Chi</strong> – Aitkenvale Hall, Mondays 8–9am</li>
      <li><strong>STEM for Seniors</strong> – JCU Room B2.12, Thursdays 1–3pm</li>
    </ul>
  </section>
</main>

<?php get_footer(); ?>
