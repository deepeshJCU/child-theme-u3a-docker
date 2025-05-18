## U3A Child Theme – CP3402 Supplementary Assignment

[![Deploy Child Theme to Lightsail](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml/badge.svg)](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml)

## Overview
This project is a custom WordPress child theme developed for the U3A Townsville organisation. It was built to modernise their online presence, improve usability for senior users, and streamline communication and information access. The site was developed locally using Docker and deployed to AWS using GitHub Actions for CI/CD automation.



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

## 🐳 Local Development Environment

### Docker Setup
Docker Compose was used to run a local WordPress and MySQL stack:

```bash
docker-compose up
````

Accessible at: `http://localhost:8000`

**Files included:**

* `docker-compose.yml`: configures WordPress and MySQL services
* `wp-content/themes/u3a-child-theme/`: contains all custom theme files

---

## 🚀 Deployment

### Hosting Platform

* **Amazon Web Services (AWS)** – Lightsail instance running Ubuntu + WordPress

### Deployment Method

Deployment is automated using **GitHub Actions**:

* On push to `main` branch, the child theme is transferred to the AWS server via SSH/SFTP
* Action used: `appleboy/scp-action@v0.1.3`

#### GitHub Actions Workflow:

```yaml
name: Deploy to AWS

on:
  push:
    paths:
      - 'child-theme/**'
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout repository
        uses: actions/checkout@v3

      - name: Deploy via SCP
        uses: appleboy/scp-action@v0.1.3
        with:
          host: ${{ secrets.AWS_HOST }}
          username: ${{ secrets.AWS_USER }}
          key: ${{ secrets.AWS_KEY }}
          source: "child-theme"
          target: "/var/www/html/wp-content/themes"
```

### Deployment Instructions (for new devs)

1. Clone the repo
2. Install Docker
3. Run `docker-compose up`
4. Make and test theme changes locally
5. Push to the `main` branch
6. GitHub Actions will auto-deploy to AWS
7. View live site on production URL

---

## 🔒 Security & Version Control

* Git used for all development
* Commits follow best-practice messages
* `.gitignore` excludes uploads, plugins, core WordPress
* Deployment secrets stored in GitHub Actions secrets (SSH key, host, user)

---

## 🧪 Testing

* Tested locally using multiple screen sizes and accessibility tools
* Verified deployment reflects latest theme changes
* Responsive and cross-browser compatible

---

## 👨‍💼 Author & Marker Info

* **Author:** Deepesh Bijarnia
* **Marker GitHub Username:** 
* **Live Site URL:** 
* **GitHub Repo:** [https://github.com/deepeshJCU/child-theme-u3a-docker.git](https://github.com/deepeshJCU/child-theme-u3a-docker.git)

---

## 📄 License & Acknowledgements

* Theme based on Twenty Twenty-Four (GPL v2)
* Docker images by WordPress and MySQL (official)
* Deployment via [appleboy/scp-action](https://github.com/appleboy/scp-action)

```

