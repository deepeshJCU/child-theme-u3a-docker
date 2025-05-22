<?php
// Enqueue parent and child theme styles
function u3a_enqueue_styles() {
    // Load parent style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Load child style (after parent)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'u3a_enqueue_styles');

// Register navigation menus
function u3a_register_menus() {
    register_nav_menus(array(
        'main-menu'   => __('Main Menu', 'u3a-child-theme'),
        'footer-menu' => __('Footer Menu', 'u3a-child-theme'),
    ));
}
add_action('after_setup_theme', 'u3a_register_menus');


// Handing the Form Submission
function u3a_handle_news_submission() {
    if (!is_user_logged_in()) {
      wp_die('Unauthorized');
    }
  
    if (isset($_POST['post_title'], $_POST['post_content'])) {
      $post_data = array(
        'post_title'   => sanitize_text_field($_POST['post_title']),
        'post_content' => sanitize_textarea_field($_POST['post_content']),
        'post_status'  => 'publish', // or 'pending' if you want admin-approve
        'post_author'  => get_current_user_id(),
        'post_type'    => 'post',
      );
  
      $post_id = wp_insert_post($post_data);
  
      if ($post_id) {
        wp_redirect(home_url('/news-and-updates?submitted=true'));
        exit;
      } else {
        wp_die('Post submission failed.');
      }
    }
  }
  add_action('admin_post_u3a_submit_news', 'u3a_handle_news_submission');
  add_action('admin_post_nopriv_u3a_submit_news', 'u3a_handle_news_submission'); // Optional if allowing non-logged-in users
  
// member join function
function u3a_handle_member_form() {
    if (!isset($_POST['full_name'], $_POST['email'])) {
      wp_die('Required fields missing.');
    }
  
    $full_name = sanitize_text_field($_POST['full_name']);
    $email     = sanitize_email($_POST['email']);
    $phone     = sanitize_text_field($_POST['phone']);
    $address   = sanitize_textarea_field($_POST['address']);
    $interests = sanitize_textarea_field($_POST['interests']);
  
    $admin_email = 'deepesh.bijarnia@my.jcu.edu.au';
    $subject = 'New U3A Membership Request';
    $headers = ['Content-Type: text/html; charset=UTF-8'];
    $body = "
      <strong>Full Name:</strong> $full_name<br>
      <strong>Email:</strong> $email<br>
      <strong>Phone:</strong> $phone<br>
      <strong>Address:</strong> $address<br>
      <strong>Interests:</strong> $interests
    ";
  
    wp_mail($admin_email, $subject, $body, $headers);
  
    wp_redirect(home_url('/thank-you'));
    exit;
  }
  add_action('admin_post_u3a_submit_member_form', 'u3a_handle_member_form');
  add_action('admin_post_nopriv_u3a_submit_member_form', 'u3a_handle_member_form'); // if form is public
  

// contact funtions
function u3a_handle_contact_form() {
    if (!isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        wp_die('Incomplete form submission.');
    }

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = 'deepesh.bijarnia@my.jcu.edu.au'; // preferred admin email
    $subject = "New Contact from U3A Website";
    $headers = ['Content-Type: text/html; charset=UTF-8', "Reply-To: $email"];

    $body = "<strong>Name:</strong> $name<br><strong>Email:</strong> $email<br><strong>Message:</strong><br>$message";

    wp_mail($to, $subject, $body, $headers);

    wp_redirect(home_url('/thank-you'));
    exit;
}
add_action('admin_post_nopriv_u3a_contact_form', 'u3a_handle_contact_form');
add_action('admin_post_u3a_contact_form', 'u3a_handle_contact_form');

