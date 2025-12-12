# CaptoneProject1
Ecotour - Tour Booking Website with Personalized Recommendations
🌍 Overview
Ecotour is a user-friendly tour booking platform designed to make travel planning effortless. With an integrated personalized recommender system, it helps users find the perfect tours based on their preferences and activities. The platform also includes robust administrative tools for managing tours, users, and analytics.

✨ Features
🔹 User Features:
Search Tours: Filter tours by keywords, destination, duration, and more.
Personalized Recommendations: Receive tour suggestions tailored to your interests and history.
Tour Booking: Simplified booking process with support for adults and children.
Account Management:
Update profile details
View and manage booking history
Change password or delete account
Chat Support: Connect with admins for inquiries or assistance.
Secure Login:
Options to log in via Google or Facebook
Email activation for secure account registration
🔸 Admin Features:
Tour Management:
Add, edit, or delete tours
Manage availability, itineraries, and reviews
Analyze tour statistics
User Management:
View and edit user information
Monitor user booking history
Ban or delete user accounts
Promotions & Discounts: Create and manage promotional campaigns for tours.
Reports & Analytics:
Generate revenue reports
View statistics on tour bookings
🔧 Technologies Used
Frontend:
HTML, CSS, JavaScript, Bootstrap
AJAX for dynamic tour filtering
Datetimepicker for date selection (date-only)
Backend:
PHP with Laravel Framework
MySQL for database management
Secure authentication with Google Login and email activation
Other Tools:
jQuery for interactive elements
Blade templates for dynamic content rendering
🚀 Installation & Setup
Prerequisites:
PHP 8.x or higher
Composer
MySQL
Node.js and npm (for frontend asset compilation)
Steps to Install:
Clone the Repository:

git clone https://github.com/sinhphan127/CP1.git
cd travel
Install Backend Dependencies:

composer install
Install Frontend Dependencies:

npm install
npm run dev
Set Up Environment Variables:

cp .env.example .env
Update .env with your database credentials and mail server configuration.

Run Database Migrations and Seeders:

php artisan migrate --seed
Start the Development Server:

php artisan serve
Open your browser and navigate to http://localhost:8000.

📊 Database Tables
Key Tables:
User: Stores user details
Tour: Stores tour information
Booking: Manages user bookings
Review: Tracks tour reviews
History: Logs user activity
Invoice: Handles payment records
🔮 Future Enhancements
Integration of a payment gateway (e.g., Stripe, PayPal).
Advanced machine learning for personalized recommendations.
Real-time chat support using WebSockets.
Multi-language support for a global audience.
📃 License
This project is licensed under the MIT License. See the LICENSE file for details.
