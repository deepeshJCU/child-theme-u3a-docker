<?php 
/* Template Name: Contact Us */
get_header(); ?>

<main class="u3a-contact container">
  <h1>Contact Us</h1>
  <p>We’d love to hear from you. Use the form below or visit our office during open hours.</p>

  <section class="contact-location">
    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3538.262823113731!2d146.7829680153848!3d-19.288469398311572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bd6c9efdf55c7fb%3A0x14ea58c3a4fbb12f!2sAitkenvale%20Community%20Centre!5e0!3m2!1sen!2sau!4v1620455181189!5m2!1sen!2sau" 
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <div>
      <h2>Office Location</h2>
      <p>Aitkenvale Community Centre, 25-27 Ross River Road, Townsville</p>
      <p> <a href="mailto:deepesh.bijarnia@my.jcu.edu.au">Email: deepesh.bijarnia@my.jcu.edu.au</a> </p>
      <p> <a href="tel:+61418658918">Phone: +61 418 658 918</a> </p>
    </div>
  </section>

  <section class="contact-form-section">
    <h2>Contact Form</h2>
    <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
      <input type="hidden" name="action" value="u3a_contact_form">

      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="6" required></textarea>

      <button type="submit" class="button">Send Message</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
