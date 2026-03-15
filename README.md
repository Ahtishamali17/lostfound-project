# AI Powered Lost & Found System

An AI-powered web application that helps match lost and found items on a campus using Natural Language Processing (NLP) and image similarity.

The system allows users to report lost items and found items. The application automatically compares descriptions and images to detect possible matches.

---

## 🚀 Features

- Report Lost Item
- Report Found Item
- Image Upload Support
- NLP-based Text Similarity (TF-IDF)
- Image Similarity Detection
- Automatic Match Detection
- Similarity Percentage Display
- Progress Bar Visualization
- Admin Dashboard
- Match History Tracking

---

## 🧠 AI Components

The project uses Artificial Intelligence techniques to detect matches:

### NLP Similarity
- TF-IDF (Term Frequency–Inverse Document Frequency)
- Cosine Similarity

Used to compare descriptions of lost and found items.

### Image Similarity
- Image hashing / OpenCV
- Detects visual similarity between item images.

---

## 🛠 Tech Stack

Frontend
- HTML
- CSS
- JavaScript

Backend
- PHP

Database
- MySQL

AI / Processing
- Python
- Scikit-learn
- OpenCV

Version Control
- Git
- GitHub

---

## 📁 Project Structure
lostfound-project
│
├── index.html
├── style.css
├── script.js
│
├── db.php
├── lost.php
├── found.php
│
├── nlp.py
├── image_match.py
│
├── uploads/
│
└── admin/
├── login.php
├── dashboard.php
└── logout.php


---

## ⚙️ Installation

1. Install XAMPP

Start:
- Apache
- MySQL

2. Clone repository


git clone https://github.com/Ahtishamali17/lostfound-project.git


3. Move project to:


xampp/htdocs/


4. Import database in phpMyAdmin.

5. Install Python libraries:


pip install scikit-learn
pip install opencv-python
pip install pillow
pip install imagehash


---

## ▶️ Run Project

Open browser:


http://localhost/lostfound-project


Admin panel:


http://localhost/lostfound-project/admin/login.php


Default Admin Login


Username: admin
Password: 1234


---

## 📊 System Workflow


Lost Item Upload
↓
Saved in Database
↓
Found Item Upload
↓
NLP Text Similarity
↓
Image Similarity
↓
Match Detection
↓
Admin Dashboard Update


---

## 📷 Screenshots


## 📸 Project Screenshots

### 1. Home Page
![Home](screenshots/Screenshot%202026-03-15%20130733.png)

### 2. Login / Form Page
![Login](screenshots/Screenshot%202026-03-15%20164040.png)

### 3. Page View
![Page](screenshots/Screenshot%202026-03-15%20164055.png)

### 4. Page View
![Page](screenshots/Screenshot%202026-03-15%20164109.png)

### 5. Page View
![Page](screenshots/Screenshot%202026-03-15%20164122.png)

### 6. Page View
![Page](screenshots/Screenshot%202026-03-15%20164237.png)

### 7. Page View
![Page](screenshots/Screenshot%202026-03-15%20164312.png)

### 8. Page View
![Page](screenshots/Screenshot%202026-03-15%20164345.png)

---

## 👨‍💻 Author

**Ahtisham Ali**

GitHub:  
https://github.com/Ahtishamali17

---

## ⭐ Future Improvements

- Mobile responsive UI
- AI chatbot for lost item search
- QR code claim system
- Email notifications
- Mobile app integration
