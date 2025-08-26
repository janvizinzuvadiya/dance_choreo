# 💃 Dance Choreographer Project

Welcome! This is the Dance Choreographer website project.  
Follow the steps below to set it up on your computer.  
(No technical knowledge needed 🙂)

---

## Step 1: Get the Project
- Download the project zip file from the **Google Drive link**.
- Save it in your **Downloads** folder.

---

## Step 2: Install XAMPP
1. Download and install **XAMPP** (a free tool to run websites on your computer).  
2. After installing, open **XAMPP Control Panel**.  
3. Change MySQL port to **3307** (this is important):  
   - In XAMPP, click **Config** next to MySQL.  
   - Open the file called **my.ini**.  
   - Find the line that says:
     ```
     port=3306
     ```
     Change it to:
     ```
     port=3307
     ```
   - Save the file and close it.

---

## Step 3: Put Project in XAMPP
1. Go to your **Downloads** folder.  
2. Right-click the downloaded project zip and **Extract** it.  
3. Copy the extracted folder **dance_prj**.  
4. Paste it inside: C:\xampp\htdocs\


---

## Step 4: Start XAMPP
1. Open **XAMPP Control Panel**.  
2. Click **Start** on both **Apache** and **MySQL**.  
(Both should turn green.)

---

## Step 5: Load the Database
1. Open your web browser and go to:http://localhost:3307/phpmyadmin
2. Click **New** on the left and create a database called: dance_db
3. Click on **Import**.  
4. Choose the file from: C:\xampp\htdocs\dance_prj\database\dance_db.sql
5. Click **Go**.  
(The database will be imported.)

---

## Step 6: Open the Website
- In your browser, type: http://localhost/dance_prj/

- 🎉 Your Dance Choreographer website will open!

---

## Step 7: Open Admin Panel
- To open the admin side, type: http://localhost/dance_prj/admin/login


---

## 🎯 Done!
That’s it! You have set up the Dance Choreographer project on your computer.  

---

👉 Tips:  
- Always start **Apache** and **MySQL** in XAMPP before opening the project.  
- Make sure the folder name is exactly **dance_prj**.  




