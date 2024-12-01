# Event Countdown Website

## Description  
This **Event Countdown Website** allows users to input event details, select an event tribe, and view a countdown timer. The website notifies users via email when the countdown reaches zero. Developed using **PHP**, **MySQL**, and **JavaScript**, it provides a user-friendly interface that’s fully responsive on all devices.

## Features  
- **User Input Form**: Users can input the name, date, and time of the event.  
- **Event Tribes**: Choose from various event categories (e.g., Music Festivals, Weddings, Conferences, etc.).  
- **Countdown Timer**: Displays a real-time countdown to the selected event date and time.  
- **Email Notifications**: Users receive an email when the countdown hits zero.  
- **Database Storage**: Events are stored in a MySQL database.  
- **Responsive Design**: The website is optimized for all devices, ensuring a great user experience on desktops, tablets, and mobile phones.

## Installation  
To run the project locally:  
1. Clone the repository:  
   ```bash  
   git clone https://github.com/timioluwa/eventcountdown.git  
Navigate to the project folder:
bash
Copy code
cd eventcountdown  
Set up a local server (e.g., XAMPP, MAMP, or WAMP).
Import the events.sql file into your MySQL database.
Update the config.php file with your database credentials.
Start the server and open the application in your browser.
Project Structure
graphql
Copy code
eventcountdown/  
│  
├── index.php              # Main page with event input form and countdown timer  
├── submit_event.php       # PHP script for submitting event data  
├── send_email.php         # PHP script to send email notifications  
├── config.php             # Database connection settings  
├── styles/  
│   └── style.css          # CSS for styling  
├── scripts/  
│   └── script.js          # JavaScript for countdown functionality  
└── database/  
    └── events.sql         # SQL file for setting up the database  
Technologies Used
Frontend: HTML, CSS, JavaScript (for interactivity).
Backend: PHP (for handling form submissions and sending emails).
Database: MySQL (for storing event data).
Email Service: SMTP for sending email notifications.
Acknowledgments
This project was developed as part of a web application to demonstrate event countdown functionality, user input handling, and email notifications.

Author
Timilehin Babailo
GitHub: github.com/timioluwa
LinkedIn: Timilehin Babailo
