# LearnMate Child Theme (Docker WordPress Setup)

This project contains a WordPress development environment using Docker Compose with a custom child theme built on the Astra theme.

## 🚀 Features

- WordPress 6.x running locally with Docker
- MySQL database
- Astra child theme (`learnmate-child`) for customization
- Easy local development environment
- GitHub-ready for version control

---

## 🛠️ Getting Started

### 1. Clone this Repository

```bash
git clone https://github.com/your-username/learnmate.git
cd learnmate
```

### 2. Start the Docker Containers

```bash
docker-compose up -d
```

### 3. Access WordPress

Open your browser and go to:

```
http://localhost:8000
```

Follow the setup wizard to complete the WordPress installation.

---

## 📁 File Structure

```
learnmate/
│
├── docker-compose.yml
├── wp-content/
│   └── themes/
│       └── learnmate-child/
│           ├── style.css
│           ├── functions.php
│           └── screenshot.png
├── README.md
└── .gitignore
```

---

## 🧠 Notes

- You may need to install the **Astra** theme via the WordPress dashboard before activating the child theme.
- Customize the `functions.php` and `style.css` to add your own styles and features.
- This setup is for local development and **not for production**.

---

## 🔒 License

This project is open source and available under the [MIT License](LICENSE).

---

## .gitignore

```
# Docker
*.log
docker-compose.override.yml

# WordPress
wp-config.php
wp-content/uploads/
wp-content/upgrade/
wp-content/cache/

# OS/System
.DS_Store
Thumbs.db

# Node / Composer / Others
node_modules/
vendor/

# PHPStorm or VSCode settings
.idea/
.vscode/
```
