<?php
/* Template Name: Become a Member */
get_header(); ?>

<main class="u3a-join container">
  <h1>Become a Member</h1>
  <p>Join a friendly, stimulating environment that promotes learning and connection for seniors in our community.</p>

  <section>
    <h2>Membership Information</h2>
    <ul>
      <li>Annual Fee: $30</li>
      <li>Includes unlimited program access</li>
      <li>Access to newsletters and Friday talks</li>
    </ul>
  </section>

  <section>
    <h2>How to Join</h2>
    <p>1. Fill out the form below or download a PDF version.</p>
    <p>2. Submit it to our office or email it to deepesh.bijarnia@my.jcu.edu.au.</p>
  </section>

  <section>
  <h2>Membership Form</h2>
  <form class="member-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
    <input type="hidden" name="action" value="u3a_submit_member_form">

    <label for="full_name">Full Name</label>
    <input type="text" name="full_name" id="full_name" required>

    <label for="email">Email Address</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone Number</label>
    <input type="text" name="phone" id="phone">

    <label for="address">Residential Address</label>
    <textarea name="address" id="address" rows="3"></textarea>

    <label for="interests">What activities are you interested in?</label>
    <textarea name="interests" id="interests" rows="4"></textarea>

    <button type="submit" class="button">Submit Membership Request</button>
  </form>
</section>

</main>

<?php get_footer(); ?>
