# 🧾 Job Order Statement (JOS) Management System

A Laravel-based system to manage job orders, generate monthly Job Order Statements (JOS), and calculate work-based billing.

---

## 🚀 Features

- ✅ CRUD for Contractors, Conductors, Types of Work, Job Orders
- ✅ Generate JOS by grouping Job Orders per Contractor & Conductor (per month)
- ✅ Calculates amount using: `actual_work_completed × rate`
- ✅ Unique JOS Reference Number auto-generated (e.g., `JOS-202506-001`)
- ✅ Inline update for Paid Amount and Remarks
- ✅ Monthly grouped dashboard view
- ✅ (Optional) PDF Export Support (DomPDF)

---

## 🛠️ Tech Stack

- Laravel 12
- MySQL
- Bootstrap 5 (Blade Views)
- DomPDF (for export)

---

## ⚙️ Installation

```bash
# Clone the repository
git clone https://github.com/jpshaw111/joc.git
cd jos

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure DB settings in .env

# Run migrations and seeders
php artisan migrate
php artisan db:seed

Seeders include:
Contractors
Conductors
Types of Work
Job Orders (sample)

Run the Application
php artisan serve

Visit: http://127.0.0.1:8000/


