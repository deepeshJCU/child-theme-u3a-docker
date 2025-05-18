# CP3402 Supplementary Assignment Report  
**Project: U3A Child Theme with Docker & CI/CD Deployment**  
**Author: Deepesh Bijarnia**  
**Date: 19th May 2025**  

---

## 🎯 Project Overview

This project involved developing and deploying a custom WordPress child theme for U3A Townsville using an automated DevOps pipeline. The project followed best practices in modern web development and infrastructure by incorporating version control, containerized development, and continuous deployment.

The final website aims to provide a clean, accessible, and senior-friendly interface aligned with the U3A mission to support lifelong learning for older adults.

---

## ⚙️ Technologies & Tools Used

| Category              | Tool/Technology                  |
|----------------------|----------------------------------|
| **CMS & Themeing**   | WordPress, Child Theme (Twenty Twenty-Four) |
| **Version Control**  | Git, GitHub                      |
| **DevOps**           | GitHub Actions                   |
| **Hosting**          | AWS Lightsail                    |
| **Containers**       | Docker, Docker Compose           |
| **Database**         | MariaDB                          |
| **Access Tooling**   | SSH, phpMyAdmin                  |
| **Project Mgmt**     | GitHub Projects                  |

---

## 👨‍💻 Key Features Implemented

- 🔧 **Custom Child Theme** based on Twenty Twenty-Four with:
  - Personalized styles and accessibility improvements
  - Custom homepage template
  - Structured page templates (About, Contact, Timetable)
- 🐳 **Dockerized WordPress stack** using `docker-compose.yml`
- 🔐 **Secure GitHub Actions deployment** with SSH key-based access
- 🚀 **CI/CD Workflow** to deploy theme changes to AWS on each push
- 🌐 **Static IP and public URL** for production use

---

## 🔁 Development Workflow

### Local Development:
1. Docker Compose spins up WordPress + MariaDB + phpMyAdmin.
2. Custom child theme located at: `wp-content/themes/u3a-child-theme/`
3. Styles and templates customized using best practices.
4. Changes tested on `http://localhost:8000`.

### Deployment Workflow:
1. On push to `main`, GitHub Action (`deploy.yml`) runs.
2. Uses SSH (via `scp-action`) to upload theme to AWS Lightsail.
3. Deploy target: `/opt/bitnami/wordpress/wp-content/themes/`
4. Site updates automatically live at the static IP.

---

## 🧠 Challenges & Solutions

| Challenge                          | Solution                                                   |
|-----------------------------------|------------------------------------------------------------|
| WordPress flagging wp-content as a broken theme | Ensured child theme files were in the correct directory and added valid `style.css` metadata |
| Permissions issue with `.pem`     | Applied `chmod 400` to SSH key and used correct username (`bitnami`) |
| Docker override on entrypoint     | Used `setup.sh` script to run `wp-cli` for automated setup |
| Theme style inheritance            | Replaced deprecated `@import` with `wp_enqueue_style()` in `functions.php` |

---

## 🌟 Learning Outcomes

- Developed practical skills in WordPress theme customization
- Implemented secure CI/CD pipelines using GitHub Actions
- Learned Docker-based development workflows
- Gained real-world experience deploying to a cloud platform (AWS)
- Practiced clean documentation and version control using GitHub

---

## 💼 Employability Reflection

This project demonstrates my ability to manage full-stack WordPress development with modern deployment tooling. I am confident using Docker, Git, GitHub Actions, and cloud hosting services, which are in high demand for web and DevOps roles. This practical experience improves my readiness for junior developer, site reliability, or DevOps positions.

---

## 🔗 Key Links

- **GitHub Repo:** [https://github.com/deepeshJCU/child-theme-u3a-docker](https://github.com/deepeshJCU/child-theme-u3a-docker)  
- **Live Site:** [http://13.239.242.11](http://13.239.242.11)  
- **Admin Panel:** [http://13.239.242.11/wp-admin](http://13.239.242.11/wp-admin)  
- **Status Badge:** ![Deploy](https://github.com/deepeshJCU/child-theme-u3a-docker/actions/workflows/deploy.yml/badge.svg)

---

**Submitted for CP3402 Supplementary Assignment**  
**James Cook University, 2025**
