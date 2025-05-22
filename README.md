## U3A Child Theme – CP3402 Supplementary Assignment

[![Deploy Child Theme to Lightsail](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml/badge.svg)](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml)

## Overview
This repository contains a custom WordPress child theme for U3A Townsville, developed as part of the CP3402 Supplementary Assignment. The project is containerized using Docker and automatically deployed to AWS Lightsail using GitHub Actions.

This project is a custom WordPress child theme developed for the U3A Townsville organisation. It was built to modernise their online presence, improve usability for senior users, and streamline communication and information access. The site was developed locally using Docker and deployed to AWS using GitHub Actions for CI/CD automation.

## 📦 Features

- Custom child theme based on Twenty Twenty-Four
- Dockerized local development with WordPress + MariaDB + phpMyAdmin
- GitHub Actions CI/CD deployment to AWS Lightsail
- Secure and production-ready workflow

---


## 🌱 Theme Development

### Parent Theme
- **Name:** Twenty Twenty-Four
- **Source:** [WordPress.org](https://wordpress.org/themes/twentytwentyfour/)
- The child theme inherits layout, accessibility, and core functionality from this parent theme.

### Modifications
| Area                | Change Made |
|---------------------|-------------|
| `style.css`         | Updated branding colors, improved font size/readability for senior users |
| `functions.php`     | Enqueued parent theme styles, added custom scripts for interactivity |
| `header.php`        | Custom navigation with larger buttons and U3A branding |
| `footer.php`        | Added social media links, simplified layout |
| `home.php`          | Custom home page template with welcome message, calls to action, and images |
| `page-about.php`    | About U3A section with mission, vision, and image |
| Custom CSS          | Enhanced visual clarity, accessibility, and responsiveness |

### Pages Implemented
- Home
- About Us
- Activities & Classes
- Timetable
- Contact
- News/Noticeboard

---

## 🐳 Local Development Setup (Docker)

### 1. Clone the Repo

```bash
git clone https://github.com/deepeshJCU/child-theme-u3a-docker.git
cd child-theme-u3a-docker
````

### 2. Start Docker Containers

```bash
docker-compose up
```

This launches:

* WordPress at: [http://localhost:8000](http://localhost:8000)
* phpMyAdmin at: [http://localhost:8080](http://localhost:8080)

### 3. WordPress Admin Access (Local)

* **URL:** `http://localhost:8000/wp-admin`
* **Username:** `admin`
* **Password:** `admin` *(or check your `setup.sh` if overridden)*

---

## 🌐 Deployment Setup (AWS + GitHub Actions)

### Hosting:

* Deployed to **AWS Lightsail** instance with static IP: `13.239.242.11`

### GitHub Actions Workflow:

* Automatically deploys on `main` branch push to:

  ```
  wp-content/themes/u3a-child-theme/
  ```

### Secrets (Configured in GitHub):

| Secret Name | Purpose                            |
| ----------- | ---------------------------------- |
| `AWS_HOST`  | Static IP of Lightsail server      |
| `AWS_USER`  | SSH username (`bitnami`)           |
| `AWS_KEY`   | Contents of `.pem` SSH private key |

### CI/CD Flow:

* Push changes to `main`
* GitHub Action runs SCP via `appleboy/scp-action`
* Theme is uploaded to:
  `/opt/bitnami/wordpress/wp-content/themes/`

---

## 📁 Project Structure

```
.
├── Dockerfile
├── docker-compose.yml
├── setup.sh
├── README.md
├── REPORT.md
├── wp-content/
│   └── themes/
│       └── u3a-child-theme/
│           ├── style.css
│           ├── functions.php
│           └── front-page.php
├── .github/
│   └── workflows/
│       └── deploy.yml
```

---

## 🧩 Child Theme Highlights

* Based on: `twentytwentyfour`
* Custom style changes in `style.css`
* Parent styles enqueued using `functions.php`
* Custom home page (`front-page.php`)
* Clean, readable design for older audiences

---

## 🚀 Live Demo

* 🌐 [http://13.239.242.11](http://13.239.242.11)
* 🔐 Admin: [http://13.239.242.11/wp-admin](http://13.239.242.11/wp-admin)

> Use credentials provided in `supplementary.html` or Lightsail application password

---

### 🔁 Marker Instructions

This repository grants push access to the subject marker [@lindsaymarkward] (https://github.com/lindsaymarkward). To test the deployment pipeline:

1. Clone the repo and make a small change to the child theme (e.g., `style.css`).
2. Commit and push to the `main` branch.
3. GitHub Actions will automatically deploy the updated theme to the production server at [http://13.239.242.11](http://13.239.242.11).
4. The updated theme will be activated and visible immediately.

and also on Trello as a member for assistance 

## 👨‍💻 Author

**Deepesh Bijarnia**
GitHub: [@deepeshJCU](https://github.com/deepeshJCU)

---

## 📄 License

This theme is licensed under the [GPL v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
Based on the official [Twenty Twenty-Four theme](https://wordpress.org/themes/twentytwentyfour/).

---

**CP3402 Supplementary Assignment – James Cook University**

```

