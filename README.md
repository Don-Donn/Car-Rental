# Car-Rental-System
OVERVIEW
The Car Rental Management System is a web-based application designed to facilitate the management of car rentals for a rental business. It includes features such as a dashboard for an overview of ongoing and completed rentals, transaction history, advance booking, car listing, and account management.


TECHNOLOGIES USED

Frontend: HTML, CSS, JavaScript
Backend: Server-side scripting language (Php)
         Database (MySQL)
Version Control: Git for version control.

MANUAL:
Login
User Authentication
The system includes a login feature to enhance security. Only authorized users can access the admin functionalities. Follow the steps below to log in:

Open the application in your web browser.
You will be redirected to the login page.
Enter your username and password. (default login: username-admin password-admin)
Click the "Login" button.

Dashboard
The dashboard provides a quick overview of the rental business with the following sections:

Ongoing Rental/s
Displays a table with details of ongoing rentals, including customer name, car information, borrow date, return date, price, fine per day, status, and actions (e.g., input returned date, penalty, update status from ongoing to completed).

Completed Rentals
Shows a table containing transaction history for completed rentals, including customer name, car information, borrow date, return date, price, fine per day, date returned, penalty, gross income, and status.

Gross Income
Provides an overview of the total gross income generated from completed rentals.

Rentals
Advance Booking
Displays a table with details of advance bookings, including transaction number, date, customer name, car information, borrow date, return date, price, fine per day, status, and actions (e.g., edit, update status from upcoming to ongoing, cancel).

Ongoing Rental/s
Shows a table with details of ongoing rentals, including transaction number, customer name, car information, borrow date, return date, price, fine per day, status, and actions (e.g., input returned date, penalty, update status from ongoing to completed).

Transaction History
Provides a table with a search function, including transaction number, customer name, car information, borrow date, return date, price, fine per day, date returned, penalty, gross income, and status.

Car Section
Car Listing
Displays a table listing all available cars for rentals, including car name, brand, model, year model, color, and actions (e.g., delete).

Add Car
Includes a form for adding a new car to the listing with fields for car name, brand, model, year model, and color.

Accounts
Admin Account Management
Displays a table listing admin accounts with columns for username and actions (e.g., edit password).

Edit Account
Includes a form for editing an admin account, allowing changes to the username and password.

Add Account
Provides a form for adding a new admin account with fields for username and password.

Forms
New Transaction
Includes fields for date, customer name, car selection (dropdown list), borrow date, return date, price, fine per day, and status (upcoming or ongoing).

Advance Booking (Edit, Update Status, Cancel)
Edit Form: Displays details based on the table, allowing modifications.
Update Form: Includes fields for transaction number, status, and an update button.
Cancel Form: Includes fields for transaction number and a cancel button (clears data in the table and database).
Ongoing Rental (Update Status)
Includes fields for transaction number, returned date, penalty, and an update status button.

Car Section (Add Car)
Includes fields for car name, brand, model, year model, color, and an add car button.

Accounts (Edit, Add Account)
Edit Form: Includes fields for account number, username, and a new password.
Add Account Form: Includes fields for username and password.
Usage
Dashboard: Navigate to the dashboard to get an overview of ongoing rentals, completed rentals, and gross income.

Rentals: Manage advance bookings, ongoing rentals, and view transaction history.

Car Section: Add, edit, or delete cars available for rentals.

Accounts: Manage admin accounts, edit passwords, and add new admin accounts.

Forms: Use forms to add new transactions, manage advance bookings, update ongoing rentals, add cars, and manage admin accounts.


