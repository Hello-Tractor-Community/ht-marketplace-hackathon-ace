[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/xoeTal9p)

# **Hello Tractor E-commerce Hackathon 🚜**

Welcome to the Hello Tractor E-commerce Hackathon! This repository is your central workspace for the challenge. Follow the structure below to organize and present your deliverables. Let’s innovate for Africa’s agricultural future!

---

## **Hackathon Overview 🌍**

### **Objective**

Design and develop a secondary marketplace e-commerce platform for buying and selling second-hand tractors, agri-implements, and connecting with certified tractor operators.

### **Key Features to Implement**

-   **Homepage**: User-friendly showcase of featured listings with filters (price, location, brand).
-   **User Registration**: Secure registration with email, phone, and social media verification.
-   **Tractor Listings**: Create detailed listings with photos, specifications, history, and price.
-   **Search & Filters**: Enable filtering by make, model, price, and location.
-   **Messaging System**: Facilitate direct communication between buyers and sellers.
-   **Seller Dashboard**: Track listing performance, inquiries, and sales.
-   **Admin Panel**: Manage listings, approve content, and ensure platform quality.

### **Add-On Features**

-   **Dealer Listings**: Highlight parts and equipment suppliers.
-   **Certified Tractor Operators**: Connect tractor owners with trained operators.

---

## **Deliverables Checklist ✅**

Please organize and complete the following deliverables within this repository:

### 1. **Codebase**

-   ## Setup Instructions

    ### Step 1: Clone the Repository

        bash
        Copy code
        git clone <repository_url>
        cd <project_folder>

    ### Step 2: Install Dependencies

        bash
        Copy code
        composer install
        npm install

    ### Step 3: Configure the Environment

        Copy the .env.example file to .env:
        bash
        Copy code
        cp .env.example .env
        Update the .env file with your database credentials:
        env
        Copy code
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_database_name
        DB_USERNAME=your_username
        DB_PASSWORD=your_password

    ### Step 4: Generate the Application Key

        bash
        Copy code
        php artisan key:generate

    ### Step 5: Run Database Migrations

        bash
        Copy code
        php artisan migrate

    ### Step 6: Seed the Database

        To populate the database with sample data:

            bash
            Copy code
            php artisan db:seed
            Creating and Using Seeders
            1. Create a Seeder
            bash
            Copy code
            php artisan make:seeder <SeederName>
            2. Update the Seeder
            Edit the generated file in database/seeders/MakesModelSeeder.php:


            3. Register the Seeder
            In DatabaseSeeder.php, add:

            php
            Copy code
            public function run()
            {
                $this->call([
                    ExampleSeeder::class,
                ]);
            }
            4. Run a Specific Seeder
            bash
            Copy code
            php artisan db:seed --class=ExampleSeeder
            Running the Application
            Start the development server:

            bash
            Copy code
            php artisan serve
            Access the app at http://127.0.0.1:8000.

            Optional Commands
            Clear Caches
            bash
            Copy code
            php artisan config:cache
            php artisan route:cache
            php artisan view:cache
            Rollback Migrations
            bash
            Copy code
            php artisan migrate:rollback
            Notes
            Manage sensitive data using the .env file.
            Use migrations and seeders to ensure consistent setups across environments.
            Use version control (e.g., Git) to track changes in the project.

### 2. **Demo Video**

-   Upload your video to YouTube, Vimeo, or as an mp4 file.
-   **Link to Demo Video**: https://youtu.be/haI_csUa9E4

### 3. **Live Application URL**

-   Deploy your application to a platform like Vercel, Netlify, or AWS.
-   **Link to Live App**: https://tractor.afyanova.africa/.
-   Credentials
    Email:elvisogunga@gmail.com
    Password:123456

### 4. **Technical Documentation**

-   Include setup instructions for running the project locally.
-   Provide any architecture diagrams or flowcharts explaining the design.
-   **Documentation**: Add details in a `docs/` folder or link to relevant markdown files.

### 5. **Project Report**

Complete this section in a separate ReadMe file `report.md`:

-   **Project Name**: Ace Variant
-   **Team Members**: Elvis Ogunga
-   **Tech Stack**: Lamp (Laravel),Node js and Flutter(Not Uploaded)
-   **Key Features**: Register/Login,Listing posting, Seller/User Dashboard,Messaging & Filtering
-   **Challenges**: Duration and Finding team members, Admin Dashboard was not built
-   **Lessons Learned**: Efficiently Doing chats With firebase real time Database

---

## **Submission Process 📥**

1. Complete your project and ensure all deliverables are present in this repository.
2. **Submission Deadline**: All submissions must be finalized by **Tuesday, Nov 26th, 11:59 EAT**.
3. Submit your repository by ensuring all deliverables are present in this repository and locked by the deadline.

---

## **Important Links 🔗**

-   [Hackathon Website](https://tractor.afyanova.africa/)
-   [Hello Tractor Main Site](https://hellotractor.com)

---

## **Contacts📞**

Phone: +254723165900
Email : elvisogunga@gmail.com
For any questions, reach out via Discord. Mentors will host office hours to assist with challenges and technical support.

---

**Good luck and happy hacking!** 🚀
