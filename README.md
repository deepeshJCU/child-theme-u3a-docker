
```` 
# CP3402 WordPress u3a Child Theme (Docker WordPress Setup) Development

This project contains a WordPress development environment using Docker Compose with a custom child theme built on the Astra theme. as part of the CP3402 assignment. Docker is used for local development, and GitHub Actions handles deployment.

---

## Prerequisites

Docker Desktop

GitHub account

Git (CLI or GUI)

---

## 🚀 Features

- WordPress 6.x running locally with Docker
- MySQL database
- Astra child theme (`u3a-child`) for customization
- 🌙 Dark mode toggle with icon (🌙 / ☀️)
- Easy local development environment
- GitHub-ready for version control and CI/CD

---

## 🛠️ Getting Started

### 1. Clone this Repository

```bash
git clone https://github.com/deepeshJCU/u3a-child-docker.git
cd u3a
````

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
u3a/
│
├── docker-compose.yml
├── wp-content/
│   └── themes/
│       └── u3a-child/
│           ├── style.css
│           ├── functions.php
│           ├── js/
│           │   └── dark-mode-toggle.js
│           ├── screenshot.png
│           └── header.php (optional override for toggle)
├── README.md
└── .gitignore
```

---

## 🌙 Dark Mode Toggle

### 🔧 How It Works

* A toggle button is injected in the header with icon-based display.
* The toggle uses `localStorage` to remember user preference.
* Applies a `.dark-mode` class to `<body>`.
* Theme responds via custom styles in `style.css`.

### 🖼️ Icons

* 🌙 Moon for dark mode
* ☀️ Sun for light mode

---

## 🧠 Notes

* The **Astra** parent theme must be installed via the WordPress dashboard before activating the child theme.
* Customize the `functions.php` and `style.css` to add more features.
* This setup is for **local development only** and is not production-ready out-of-the-box.

---

## 🏷️ Labels

| Label         | Description                             |
| ------------- | --------------------------------------- |
| `enhancement` | Feature additions like dark mode toggle |
| `bug`         | Bugs and issues                         |
| `docs`        | Documentation updates                   |
| `theme`       | Theme styling and layout                |
| `docker`      | Docker configuration and setup          |

---

## Deployment

Deployment is automated using GitHub Actions. On push to the main branch, the workflow builds and deploys your theme.

---

## 🔒 License

This project is open source and available under the licensed for educational use under CP3402 guidelines.

---

## 📄 .gitignore

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

```


