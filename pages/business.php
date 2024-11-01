<?php 
include('../include/header2.php');
?>

      <main>
        <p class="h1 ps-5 pt-2 text-black tech fw-bold">Business and Networking Events</p>
        <p class="px-5 text-dark display-8">An art and cultural festival attracts a vibrant and eclectic mix of participants, each contributing to the rich and diverse atmosphere of the event. Artists, including painters, sculptors, photographers, and multimedia creators, are often at the forefront, showcasing their works in exhibitions, conducting live demonstrations, and engaging with attendees. Their presence allows visitors to experience a wide range of artistic expressions and gain insights into the creative process.</p>
       
        <section>
      
          <div class="first-section">
              <h4>Set the date and time of the Event </h4>

                <form id="eventForm" method="POST" action="../app/business/save_event.php">
                  <label for="eventName" class="fw-bold">Event Name:</label>
                  <input type="text" id="eventName" name="eventName" required>
                  
                  <label for="eventDate">Event Date and Time:</label>
                  <input type="datetime-local" id="eventDate" name="eventDate" required>
                  <label for="email" class="fw-bold">Email address</label>
                  <input type="email" id="email" placeholder="emailaddress@gmail.com" name="email" required>
      
                  <button type="submit">Start Countdown</button>
              </form>
          </div>
          <div class="second-section" >
            <div class="second-section-1">
              <h2 id="countdown">Name Of Event</h2>
            </div>
            <div class="second-section-2">
              <div class="count">
                <p  id="days">00</p>
                <p>Days</p>
              </div>
              <div class="count" >
                <p id="hours">00</p>
                <p>Hours</p>
              </div>
              <div class="count" >
                <P id="minutes">00</P>
                <P>Minutes</P>
              </div>
              <div class="count" >
                <p id="seconds">00</p>
                <P>Seconds</P>
              </div>
              <script src="../javascript/countdown.js"></script>
            </div>
            
          </div>
          
      </section>
      </main>
    
    <!-- <button><a href=""></a></button> -->
    <script src="../assets/js/bootstrap.bundle.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const countdownElement = document.getElementById('countdown');
    const daysElement = document.getElementById('days');
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    const secondsElement = document.getElementById('seconds');

    function updateCountdown() {
        fetch('../app/business/get_event.php')
            .then(response => response.json())
            .then(data => {
                const eventName = data.event_name;
                const eventDate = new Date(data.event_date);

                if (eventName && !isNaN(eventDate)) {
                    countdownElement.textContent = eventName;

                    const now = new Date();
                    const timeDiff = eventDate - now;

                    if (timeDiff <= 0) {
                        // Event has passed, set countdown to zero
                        daysElement.textContent = '00';
                        hoursElement.textContent = '00';
                        minutesElement.textContent = '00';
                        secondsElement.textContent = '00';
                        return;
                    }

                    const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

                    daysElement.textContent = String(days).padStart(2, '0');
                    hoursElement.textContent = String(hours).padStart(2, '0');
                    minutesElement.textContent = String(minutes).padStart(2, '0');
                    secondsElement.textContent = String(seconds).padStart(2, '0');
                } else {
                    // No event data in the database, prompt user to set an event
                    countdownElement.textContent = 'Set an event';
                    daysElement.textContent = '00';
                    hoursElement.textContent = '00';
                    minutesElement.textContent = '00';
                    secondsElement.textContent = '00';
                }
            })
            .catch(error => console.error('Error fetching event data:', error));
    }

    // Initial countdown update
    updateCountdown();

    // Update countdown every second
    setInterval(updateCountdown, 1000);
});

    </script>



    
</body>

</html>

<?php 
include('../include/footer.php');
?>
