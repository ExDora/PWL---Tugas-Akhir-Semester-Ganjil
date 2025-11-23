## 📚 Book - Ing
<img width="781" height="312" alt="Logo" src="https://github.com/user-attachments/assets/cdb78db4-2290-4233-aa6a-badce512bd8c" />

"Book - Ing" is a web-based application designed to simplify the process of borrowing book online.
It helps **students** and **teachers** to easily borrow and return books, while also providing an **admin panel** to manage book inventory, borrow, and loan history.

---

## ✨ Features
- 🔐 **Authentication System**: Sign In / Sign Up for users  
- 📚 **Book Management**: Search, filter, and view book details  
- 🛠️ **Admin Panel**:
  - Add / edit / delete books  
  - Manage borrower data  
  - Track borrowing history

---

## 🚀 Tech Stack
- **UI/UX Designer**: Figma (autolayout, protoype)
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (Laragon), MySQL

---

## Entity
This is some of the entity that we have in our main feature:
1. User
2. Book title
3. Book category
4. Book status
5. Book url (photo)
6. User E-mail
7. User borrowed time
8. Book author
9. Book publication year
10. ISBN
11. User number

---

## 🖥️ Instalation
1. Clone the repository
   ```bash
   git clone https://github.com/ExDora/PWL---Tugas-Akhir-Semester-Ganjil.git
   cd book-ing
2. cd "project-name"
3. Database Setup
   1) Download SQL file
   2) CREATE DATABASE library_db;
   4) Import SQL File (Using phpMyAdmin)
      - Open phpMyAdmin
      - Select the library_db database
      - Go to *import*
      - Upload library_db.sql
      - Click *Import* button
4. Run the Web Apllication (Using Laragon)
   1) Start Apache & MySQL
   2) Open terminal and navigate to the correct folder
   3) type "php -S localhost:3025"
5. Users who don't have an account can create one first
   - After signing up, ssers will be redirected to sign-in page.

---

## 📖 Usage
1. Student/Teacher
   - Register an account and log in
   - Browse books and request borrowing
2. Admin
   - Log in with admin credentials
   - Manage books inventory and user requests
   - Monitor borrowing and returning activities

---
## 👦🏻 Group Member
- Hernandez Lim - Front-End Developer
- Jose Marvin - Back-End Developer
- William Tjandera - UI/UX Designer
