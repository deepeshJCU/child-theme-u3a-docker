## U3A Child Theme – CP3402 Supplementary Assignment

[![Deploy Child Theme to Lightsail](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml/badge.svg)](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml)

## Overview
This repository contains a custom WordPress child theme for U3A Townsville, developed as part of the CP3402 Supplementary Assignment. The project is containerized using Docker and automatically deployed to AWS Lightsail using GitHub Actions.

The site modernises U3A’s online presence, improves usability for senior users, and streamlines communication. It supports both local development and continuous deployment to production.

---

## 📦 Features

- Custom child theme based on Twenty Twenty-Four
- Dockerized WordPress stack with phpMyAdmin
- GitHub Actions CI/CD to AWS Lightsail
- Accessible, senior-friendly layout and styles
- Custom pages: Activities, News, Timetable, Contact, Membership Form (no plugin)

---

## 🌱 Theme Development

### Parent Theme
- **Name:** Twenty Twenty-Four
- **Source:** [WordPress.org](https://wordpress.org/themes/twentytwentyfour/)

### Modifications
| File/Section         | Description |
|----------------------|-------------|
| `style.css`          | Updated fonts, color palette, layout spacing |
| `functions.php`      | Enqueued parent/child styles, registered menus |
| `header.php`         | Added logo support and responsive hamburger menu |
| `footer.php`         | Simplified with copyright |
| `front-page.php`     | Homepage with welcome, mission, activities |
| `page-*.php`         | Custom pages for About, Activities, Contact, etc. |
| `single.php`         | Display full news article |
| `thank-you.php`      | Redirect page after member form submission |

---

## 🌍 Pages Implemented

- Home
- About Us
- Activities & Classes
- Timetable
- Contact Us (with embedded Google Map)
- Become a Member (custom form without plugin)
- News & Updates (user posts & frontend publishing)
- Single Post

---

## 🐳 Local Development Setup (Docker)

### 1. Clone the Repo

```bash
git clone https://github.com/deepeshJCU/child-theme-u3a-docker.git
cd child-theme-u3a-docker
````

### 2. Start Containers

```bash
docker-compose up
```

* WordPress: [http://localhost:8000](http://localhost:8000)
* phpMyAdmin: [http://localhost:8080](http://localhost:8080)

### 3. Admin Access

* **URL:** [http://localhost:8000/wp-admin](http://localhost:8000/wp-admin)
* **Username:** `admin`
* **Password:** `admin` *(or see `setup.sh`)*

---

## 🌐 Deployment (AWS + GitHub Actions)

### Hosting

* Production deployed on **AWS Lightsail**
* IP: `13.239.242.11`

### GitHub Actions Workflow

* Triggered on push to `main` and child theme folder
* Secure `scp`/`ssh` using `appleboy` actions

### GitHub Secrets

| Name       | Purpose                       |
| ---------- | ----------------------------- |
| `AWS_HOST` | Static IP of Lightsail server |
| `AWS_USER` | SSH user (bitnami)            |
| `AWS_KEY`  | SSH private key (PEM content) |

---

## 📁 Project Structure

```
.
├── Dockerfile
├── docker-compose.yml
├── setup.sh
├── README.md
├── REPORT.md
├── supplementary.html
├── wp-content/
│   └── themes/
│       └── u3a-child-theme/
│           ├── style.css
│           ├── functions.php
│           ├── header.php
│           ├── footer.php
│           ├── front-page.php
│           ├── page-about-us.php
│           ├── page-activities.php
│           ├── page-contact-us.php
│           ├── page-become-a-member.php
│           ├── page-timetable.php
│           ├── page-news.php
│           ├── single.php
│           ├── thank-you.php
│           └── assets/
│               └── images/
│                   ├── gardening.jpg
│                   ├── taichi.jpg
│                   ├── walking.jpg
│                   ├── art.jpg
│                   ├── photography.jpg
│                   ├── finance.jpg
│                   ├── astronomy.jpg
│                   ├── languages.jpg
│                   ├── philosophy.jpg
│                   └── terry.jpg
├── .github/
│   └── workflows/
│       └── deploy.yml
```

---

## 🔁 Marker Instructions

Push access granted to [@lindsaymarkward](https://github.com/lindsaymarkward).

To verify deployment:

1. Clone the repo
2. Edit `style.css` or any child theme file
3. Commit and push to `main`
4. GitHub Actions will deploy to [http://13.239.242.11](http://13.239.242.11)
5. Refresh the site to see the changes live

Marker is also added on [Trello board](https://trello.com/b/nE4jaH1e/cp3402-supplementary-assignment)

---

## 🚀 Live Demo

* 🌐 [http://13.239.242.11](http://13.239.242.11)
* 🔐 Admin: [http://13.239.242.11/wp-admin](http://13.239.242.11/wp-admin)
  *(Use credentials from `supplementary.html`)*

---

## 👨‍💻 Author

**Deepesh Bijarnia**
GitHub: [@deepeshJCU](https://github.com/deepeshJCU)

---

## 📄 License

This project is licensed under the [GPL v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
Based on the official [Twenty Twenty-Four theme](https://wordpress.org/themes/twentytwentyfour/)

---

**CP3402 Supplementary Assignment – James Cook University**

```


