Event Countdown Website 
Description
This project is a dynamic Event Countdown Website that allows users to create personalized countdown timers for upcoming events. The website enables users to:

Input the name, date, and time of an event.
Categorize events by selecting from various event tribes.
Receive email notifications when the countdown ends.
View responsive countdown timers on the website.
The project combines a modern frontend design with a functional backend to provide a seamless user experience.

Features
Responsive design built with Bootstrap for optimal viewing on all devices.
Integration of event tribes for categorizing events (e.g., Music Festivals, Weddings, Conferences).
Real-time countdown updates using JavaScript.
Email notifications sent via SMTP when a countdown hits zero.
Uses Local Storage to persist data for countdowns.
Demo
You can view the live version of the website here (Replace # with the actual hosting link once deployed).

Installation
To run the project locally:

Clone the repository:
bash
Copy code
git clone https://github.com/timioluwa/event-countdown-website.git  
Navigate to the project folder:
bash
Copy code
cd event-countdown-website  
Set up a local server (e.g., XAMPP).
Import the database using the provided .sql file.
Update the SMTP settings in the backend PHP files.
Launch the website in your browser.
Project Structure
graphql
Copy code
event-countdown-website/  
│  
├── index.html              # Main HTML file  
├── styles/  
│   └── style.css           # CSS for styling  
├── scripts/  
│   └── script.js           # JavaScript for countdown and local storage  
├── backend/  
│   ├── get_event.php       # PHP for fetching event details  
│   ├── notify.php          # PHP for sending email notifications  
│   └── db_connection.php   # Database connection using PDO  
├── database/  
│   └── event_tribes.sql    # SQL file for database setup  
└── assets/  
    ├── images/            # Folder for images  
    ├── gifs/              # Folder for animations  
    └── fonts/             # Folder for fonts  
Technologies Used
Frontend: HTML, CSS (Bootstrap), JavaScript (animations and real-time updates).
Backend: PHP with PDO for database interaction.
Database: MySQL for storing event details and tribes.
Email: SMTP integration for sending notifications.
Acknowledgments
This project was developed as part of a study on event countdown systems. Special thanks to open-source tools and libraries used during development.

Author
Timilehin Babailo
GitHub: github.com/timioluwa
LinkedIn: Timilehin Babailo
