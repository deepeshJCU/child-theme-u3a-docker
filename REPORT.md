# **CP3402 Supplementary Assignment Report**

**Project:** U3A Child Theme with Docker & CI/CD Deployment  
**Author:** Deepesh Bijarnia  
**Date:** 19th May 2025  
**James Cook University – Semester 1, 2025**

---

## 📚 Table of Contents
- [1. Project Summary](#1-project-summary)
- [2. Technologies & Tools](#2-technologies--tools)
- [3. Step-by-Step Implementation](#3-step-by-step-implementation)
- [4. Challenges & Solutions](#4-challenges--solutions)
- [5. Learning Outcomes](#5-learning-outcomes)
- [6. Employability Reflection](#6-employability-reflection)
- [7. Documentation & Screenshots](#7-documentation--screenshots)
- [8. Key Resources](#8-key-resources)

---

## 1. Project Summary

This project focused on building and deploying a custom WordPress child theme for the University of the Third Age (U3A) Townsville. The primary objective was to modernise their digital presence, improving accessibility and usability for an older demographic.

To achieve this, I implemented a full DevOps workflow using Docker for containerised development, GitHub Actions for CI/CD automation, and AWS Lightsail for production hosting. The approach reflects modern web development practices, including version control, infrastructure-as-code, and accessibility-first design.

---

## 2. Technologies & Tools

| Category        | Tool/Technology                             | Description                                                     |
| --------------- | ------------------------------------------- | --------------------------------------------------------------- |
| CMS & Theming   | WordPress, Child Theme (Twenty Twenty-Four) | Customisable CMS using a child theme for safe updates and edits |
| Version Control | Git, GitHub                                 | Source code management and remote collaboration                 |
| DevOps          | GitHub Actions                              | CI/CD pipeline for automatic deployment                         |
| Hosting         | AWS Lightsail                               | Cloud VPS hosting with Bitnami WordPress stack                  |
| Containers      | Docker, Docker Compose                      | Local containerised development environment                     |
| Database        | MariaDB                                     | Lightweight SQL database used with WordPress                    |
| Access Tooling  | SSH, phpMyAdmin                             | Server access and database management                           |
| Project Mgmt    | Trello                                      | Agile project planning with Kanban boards                       |

---

## 3. Step-by-Step Implementation

### 🔧 Development Setup

### 1. Local Environment (Docker + Docker Compose)

Docker Compose was used to containerise the WordPress stack for consistency in local development.

#### ✅ Steps Taken

1. Created a `docker-compose.yml` with services for:

   * **WordPress**
   * **MariaDB**
   * **phpMyAdmin**

2. Ran `docker-compose up` to launch services and accessed:

   * WordPress at `http://localhost:8000`
   * phpMyAdmin at `http://localhost:8080`

3. Used volumes for persistent database and theme storage.

```yaml
# docker-compose.yml (excerpt)
services:
  wordpress:
    image: wordpress:latest
    ports:
      - "8000:80"
    environment:
      WORDPRESS_DB_HOST: db
      WORDPRESS_DB_NAME: wordpress
      WORDPRESS_DB_USER: user
      WORDPRESS_DB_PASSWORD: password
    volumes:
      - ./wp-content:/var/www/html/wp-content
```

---

### 2. Child Theme Development

A child theme was developed to customise the site while preserving the parent theme's upgradability.

#### ✅ Steps Taken

* Created `wp-content/themes/u3a-child` with:

  * `style.css`
  * `functions.php`

```php
// functions.php
function u3a_enqueue_styles() {
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'u3a_enqueue_styles');
```

* Added custom templates:

  * `front-page.php`
  * `page-about-us.php`
  * `page-activities.php`

* Accessibility improvements included:

  * Larger fonts
  * High contrast
  * Streamlined UI

---

### 3. Frontend Features

Minimalist yet functional features were implemented without relying on plugins.

#### ✅ Highlights

1. **Contact Form**

```html
<form action="" method="post">
  <input type="text" name="name" required>
  <input type="email" name="email" required>
  <textarea name="message"></textarea>
  <button type="submit" name="submit">Send</button>
</form>
```

2. **Mobile Navigation**

```js
const toggle = document.querySelector('.menu-toggle');
toggle.addEventListener('click', () => {
  document.querySelector('.nav-menu').classList.toggle('active');
});
```

3. **WordPress Loop for Posts**

```php
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Read More</a>
<?php endwhile; endif; ?>
```

4. **Branding via CSS**

```css
:root {
  --u3a-blue: #003366;
  --u3a-yellow: #FFD700;
}
```

---

### 🚀 Deployment Workflow

1. **GitHub Actions CI/CD**

Configured `deploy.yml` to deploy on every push to `main`.

```yaml
- name: Upload to Lightsail
  uses: appleboy/scp-action@master
  with:
    host: ${{ secrets.HOST }}
    username: ${{ secrets.USERNAME }}
    key: ${{ secrets.SSH_KEY }}
    source: "./wp-content/themes/u3a-child/"
    target: "/opt/bitnami/wordpress/wp-content/themes/u3a-child/"
```

2. **Production Hosting**

* AWS Lightsail with Bitnami stack
* Enabled SSH, configured static IP, deployed manually and via CI

---

## 4. Challenges & Solutions

| Challenge              | Solution                                                 |
| ---------------------- | -------------------------------------------------------- |
| Theme invalid error    | Corrected directory and `style.css` header               |
| SSH `.pem` permissions | Used `chmod 400` and proper user roles                   |
| Docker startup issues  | Added setup script for WP-CLI configuration              |
| CSS not loading        | Fixed by using `wp_enqueue_style()` instead of `@import` |

---

## 5. Learning Outcomes

Through this project, I achieved:

* ✅ Building a WordPress child theme from scratch
* ✅ Using Docker Compose effectively
* ✅ Automating deployment with GitHub Actions
* ✅ Implementing secure cloud deployment
* ✅ Improving accessibility design
* ✅ Strengthening Git & project management

> 💡 **Biggest Insight:** Troubleshooting CI/CD deployment via SSH taught me valuable real-world DevOps skills.

---

## 6. Employability Reflection

| Skill Area        | Demonstrated With                                     |
| ----------------- | ----------------------------------------------------- |
| Frontend Dev      | Custom responsive UI and accessible forms             |
| Backend Dev       | PHP templating and theme logic                        |
| DevOps Automation | GitHub Actions and remote deploy to cloud             |
| Containerization  | Docker Compose setup for local WordPress stack        |
| Cloud Hosting     | AWS Lightsail deployment with SSH                     |
| Team Workflow     | GitHub, Trello for agile development practices        |
| Time Management   | Independent planning and execution within tight scope |

I am now confident applying for roles like:

* Junior Web Developer
* WordPress Developer
* DevOps Intern
* Systems Integrator

---

## 7. Documentation & Screenshots

The following screenshots provide a visual confirmation of key development and deployment milestones.

| Screenshot                                                    | Description                        |
| ------------------------------------------------------------- | ---------------------------------- |
| ![Docker Setup](docs/screenshots/docker-running.png)          | Docker containers running locally  |
| ![CI/CD Success](docs/screenshots/github-actions-success.png) | Successful GitHub Actions build    |
| ![Live Site](docs/screenshots/live-site.png)                  | U3A website running on AWS         |
| ![Theme Activated](docs/screenshots/theme-activated.png)      | Theme activated in admin dashboard |

---

## 8. Key Resources

* 📂 **GitHub Repo**: [github.com/deepeshJCU/child-theme-u3a-docker](https://github.com/deepeshJCU/child-theme-u3a-docker)
* 🌐 **Live Site**: [http://13.239.242.11](http://13.239.242.11)
* 🔐 **Admin Panel**: [http://13.239.242.11/wp-admin](http://13.239.242.11/wp-admin)
* ✅ **CI Badge**: ![CI Status](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml/badge.svg)
* 📌 **Trello Board**: [trello.com/b/nE4jaH1e](https://trello.com/b/nE4jaH1e/cp3402-supplementary-assignment)

---

📘 **Submitted for CP3402 Supplementary Assignment**  
*James Cook University – Semester 1, 2025*
