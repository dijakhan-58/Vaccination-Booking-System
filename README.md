# 💉 Vaccination Management System

### A Web-Based Child Vaccination Booking & Management Platform

> **A centralized digital platform for managing children, vaccines, hospitals, appointments, vaccination records, and reports.**

---

## 📌 About The Project

The **Vaccination Management System** is a web-based application developed to digitize and simplify the management of children's vaccination activities.

Traditional vaccination management can involve manual records, appointment coordination, difficulty tracking vaccination dates, and challenges in maintaining vaccination histories. This system provides a centralized platform where **Parents, Hospitals, and Administrators** can manage their respective activities digitally.

The system allows parents to manage their children's information and vaccination appointments, while administrators manage the overall system and hospitals manage appointments and vaccination status.

---

## 🎯 Project Objectives

The main objectives of the system are to:

* 🧒 Manage children's vaccination information
* 💉 Manage vaccine information and availability
* 🏥 Manage hospitals
* 📅 Manage vaccination appointments
* 📊 Generate and view vaccination reports
* 🔔 Provide upcoming vaccination information
* 👨‍👩‍👧 Allow parents to manage their children's records
* 🏥 Allow hospitals to manage vaccination appointments and status
* 🔐 Provide secure role-based access
* ⚡ Reduce manual record keeping
* 🔎 Provide search and filtering functionality

---

# 🧩 System Modules

The system consists of three major modules:

```text
                    VACCINATION MANAGEMENT SYSTEM
                               │
              ┌────────────────┼────────────────┐
              │                │                │
              ▼                ▼                ▼
           ADMIN            PARENT           HOSPITAL
              │                │                │
        Management        Child Records     Appointments
        Reports           Booking           Vaccination
        Users             History           Status
        Vaccines          Profile           Profile
        Hospitals
```

---

## 👨‍💼 Admin Module

The Admin has complete control over the management side of the system.

### Features

* 📊 Dashboard
* 👥 User Management
* 🔐 Role & Permission Management
* 🏥 Hospital Management
* 🧒 Child Management
* 💉 Vaccine Management
* 📅 Upcoming Vaccination Management
* 📋 Appointment Request Management
* 📑 Booking Details
* 📊 Vaccination Reports
* 💉 Vaccination Status
* 👤 Profile Management
* 🔔 Notification Management

### Admin Workflow

```text
Admin Login
     ↓
Admin Dashboard
     ↓
Manage Users / Hospitals / Vaccines / Children
     ↓
Review Appointment Requests
     ↓
Approve / Reject Appointment
     ↓
Monitor Vaccination Records
     ↓
Generate / View Reports
```

---

# 👨‍👩‍👧 Parent Module

Parents use the frontend of the system to manage their children's vaccination information.

### Features

* 📝 Parent Registration
* 🔐 Login
* 👤 Profile Management
* 🧒 Add Child
* 🧒 View Child Details
* ✏️ Update Child Information
* 💉 View Vaccine Information
* 📅 View Upcoming Vaccinations
* 🏥 Search Hospitals
* 📅 Book Vaccination Appointment
* 📋 View Appointment Details
* 💉 View Vaccination History

### Parent Workflow

```text
Parent Registration/Login
          ↓
       Add Child
          ↓
    View Vaccines
          ↓
   Select Hospital
          ↓
   Book Appointment
          ↓
 Admin Reviews Request
          ↓
 Approved / Rejected
          ↓
 Hospital Receives Appointment
          ↓
    Vaccination Completed
          ↓
 Hospital Updates Status
          ↓
 Parent Views Vaccination Record
```

---

# 🏥 Hospital Module

Hospitals access a dedicated dashboard using the account credentials provided by the Admin.

### Features

* 🔐 Hospital Login
* 📊 Hospital Dashboard
* 📅 View Appointments
* 📋 View Appointment Details
* 💉 Update Vaccination Status
* 🏥 Manage Hospital Information
* 👤 Profile Management
* 📦 Vaccine Status Management

### Hospital Workflow

```text
Hospital Login
      ↓
Hospital Dashboard
      ↓
View Assigned Appointments
      ↓
View Child / Appointment Details
      ↓
Vaccination Takes Place
      ↓
Update Vaccination Status
      ↓
Vaccination Record Updated
```

---

# 🔐 Authentication & Authorization

The system uses authentication and role-based authorization to control access to different areas of the application.

### Roles

```text
Admin
Parent
Hospital
```

Each role has its own permitted functionality.

### Role-Based Access

```text
Admin
 ├── Users
 ├── Hospitals
 ├── Children
 ├── Vaccines
 ├── Appointments
 ├── Reports
 └── Permissions

Parent
 ├── Profile
 ├── Children
 ├── Vaccines
 ├── Appointments
 └── Vaccination History

Hospital
 ├── Dashboard
 ├── Appointments
 ├── Vaccination Status
 └── Profile
```

The project uses **Spatie Laravel Permission** for role and permission management.

---

# 🗄️ Database

The system uses **MySQL** for storing and managing application data.

### Main Database Entities

```text
Users
  │
  ├── Parents
  │      │
  │      └── Children
  │
  ├── Admins
  │
  └── Hospitals
          │
          └── Appointments

Children
   │
   ├── Appointments
   │
   └── Vaccination Records

Vaccines
   │
   ├── Appointments
   └── Vaccination Records

Notifications
Roles
Permissions
```

### Main Tables

* `users`
* `children`
* `hospitals`
* `vaccines`
* `bookings`
* `vaccination_records`
* `notifications`
* `roles`
* `permissions`

---

# 🛠️ Technology Stack

## Backend

| Technology                    | Purpose                 |
| ----------------------------- | ----------------------- |
| **Laravel**                   | Backend Framework       |
| **PHP**                       | Server-Side Programming |
| **MySQL**                     | Database                |
| **Laravel Breeze**            | Authentication          |
| **Spatie Laravel Permission** | Roles & Permissions     |

## Frontend

| Technology          | Purpose                 |
| ------------------- | ----------------------- |
| **HTML5**           | Page Structure          |
| **CSS3**            | Styling                 |
| **Bootstrap 5.3**   | Responsive UI           |
| **JavaScript**      | Client-Side Interaction |
| **Blade**           | Laravel Template Engine |
| **Bootstrap Icons** | Interface Icons         |

## Development Tools

* Git
* GitHub
* XAMPP
* MySQL / phpMyAdmin
* VS Code

---

# 🏗️ Project Architecture

The application follows the Laravel MVC architecture.

```text
                 USER
                  │
                  ▼
              ROUTES
                  │
                  ▼
            CONTROLLERS
                  │
          ┌───────┴───────┐
          ▼               ▼
       MODELS           VIEWS
          │               │
          ▼               ▼
       MYSQL          BLADE UI
```

### MVC Components

**Models**

Handle database interaction and relationships.

**Views**

Blade templates provide the frontend interface.

**Controllers**

Handle application logic, validation, CRUD operations, authentication, appointments, reports, and other processes.

---

# 📅 Appointment Management

The appointment system follows this process:

```text
Parent
  ↓
Select Child
  ↓
Select Vaccine
  ↓
Select Hospital
  ↓
Submit Booking
  ↓
Pending Request
  ↓
Admin Reviews
  ↓
┌───────────────┐
│               │
▼               ▼
Approved      Rejected
│
▼
Hospital Receives Appointment
│
▼
Vaccination
│
▼
Hospital Updates Status
│
▼
Vaccination Record
```

---

# 📊 Vaccination Reports

The system provides vaccination reports based on stored vaccination records.

Reports can help the Admin monitor:

* Child vaccination information
* Vaccine information
* Vaccination dates
* Vaccination status
* Completed vaccinations
* Appointment-related information

Search and filtering functionality can be used to find required records efficiently.

---

# 🔔 Notifications

The notification functionality helps users receive important vaccination-related information.

Examples include:

* Upcoming vaccination notifications
* Appointment-related notifications
* Vaccination completion notifications

This helps parents remain informed about their children's vaccination activities.

---

# 🎨 User Interface

The system uses a modern healthcare-oriented interface with:

* Responsive Bootstrap layouts
* Clean dashboard cards
* Structured navigation
* Consistent buttons and forms
* User-friendly tables
* Search and filtering
* Responsive layouts for different screen sizes

The interface is designed to provide separate experiences for Admin, Parent, and Hospital users.

---

# 🧪 Testing

The application was tested across multiple areas:

### Functional Testing

Testing of:

* CRUD operations
* Appointment booking
* Vaccine management
* Child management
* Hospital management
* Vaccination status

### Authentication Testing

Testing of:

* Registration
* Login
* Logout
* Invalid credentials
* Authentication restrictions

### Authorization Testing

Testing of:

* Admin access
* Parent access
* Hospital access
* Role-based permissions
* Unauthorized page access

### Form Validation Testing

Testing of:

* Required fields
* Email validation
* Password validation
* Duplicate records
* Invalid input

### Database Testing

Testing of:

* Record insertion
* Record updates
* Record deletion
* Relationships
* Data retrieval

### Integration Testing

Testing communication between:

```text
Parent → Admin → Hospital
```

and the complete:

```text
Booking → Approval → Vaccination → Record
```

workflow.

---

# 📁 Project Structure

```text
Vaccination-Management-System/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   │
│   ├── Models/
│   └── Notifications/
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── resources/
│   └── views/
│       ├── front_theme/
│       └── dashboard/
│
├── routes/
│   └── web.php
│
├── public/
│
├── config/
│
├── storage/
│
├── tests/
│
├── .env.example
├── composer.json
└── README.md
```

---



# 🔑 Main Access Areas

| User     | Access                   |
| -------- | ------------------------ |
| Admin    | Admin Dashboard          |
| Parent   | Frontend Parent Services |
| Hospital | Hospital Dashboard       |

> Login credentials should be configured according to the project's database/seeder setup.

---



### Team Lead / Lead Developer

**Khadija Asim**

Responsible for:

* System architecture
* Backend development
* Database design
* ERD
* Spatie role-based authentication
* Authentication & authorization
* Core CRUD operations
* Appointment and booking logic
* Vaccination logic
* Reports
* Backend integration
* Notifications
* Bug fixing
* Project integration
* Team management
* Documentation
* Presentation / Demo Video



# 🚀 Future Enhancements

Possible future improvements include:

* 📱 Mobile application
* 📧 Email notifications
* 📲 SMS vaccination reminders
* 🔔 Push notifications
* 📍 Hospital map integration
* 📊 Advanced analytics dashboard
* 📄 Downloadable vaccination certificates
* 🔗 API integration
* ☁️ Cloud deployment
* 🔐 Two-factor authentication
* 📈 Advanced vaccination statistics

---

# 📌 Project Status

```text
████████████████████████████████  Completed
```

**Status:** Completed / Academic eProject

The system demonstrates a complete web-based vaccination management workflow involving **Admin, Parent, and Hospital** users.

---

# 🎓 Academic Project

This project was developed as part of an **Aptech eProject** to demonstrate practical implementation of:

* Laravel
* PHP
* MySQL
* Bootstrap
* JavaScript
* Authentication
* Role-Based Authorization
* CRUD Operations
* Database Relationships
* Web Application Development

---

# 📄 License

This project was developed for **educational and academic purposes**.

---

##  Vaccination Management System

> **Making vaccination management organized, accessible, and digital.**

**Built with Laravel, PHP, MySQL, Bootstrap & JavaScript.**
