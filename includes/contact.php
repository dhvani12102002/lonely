2
      <section id="contact" class="contact section-bg">
  <div class="container">

    <!-- Section Title -->
    <div class="section-title">
      <h2>Contact</h2>
      <p>If you have any questions or want to discuss a project, feel free to reach out. I'd love to help bring your ideas to life!</p>
    </div>

    <div class="row">

      <!-- Contact Info Section -->
      <div class="col-lg-4 col-md-4">
        <div class="contact-about">
          <h3>Dhvani Deshmukh</h3>
          <p>I am a web designer and developer passionate about creating seamless and engaging online experiences. Let's collaborate on your next project!</p>
          <div class="social-links mt-3">
            <a href="https://x.com/dhvani_deshmukh" class="twitter" title="Twitter" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/dhvani.deshmukh" class="facebook" title="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/dhvani_deshmukh" class="instagram" title="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/dhvani-deshmukh-207346236/" class="linkedin" title="LinkedIn" target="_blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Info Section -->
      <div class="col-lg-3 col-md-4">
        <div class="info">
          <div class="d-flex align-items-center">
            <i class="bi bi-geo-alt"></i>
            <p>Rumla (Rani f.), Chikhli, Navsari, India, 396060</p>
          </div>

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-envelope"></i>
            <p><a href="mailto:dhvanideshmukh12@gmail.com">dhvanideshmukh12@gmail.com</a></p>
          </div>

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-phone"></i>
            <p><a href="tel:+917600153377">+91 76001 53377</a></p>
          </div>
        </div>
      </div>

      <!-- Contact Form Section -->
      <div class="col-lg-5 col-md-8">
        <form id="contact-form" action="contact-handler.php" method="post" role="form" class="php-email-form" novalidate>
          <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" aria-required="true" required>
          </div>
          <div class="form-group mt-3">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" aria-required="true" required>
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group mt-3">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="5" id="message" placeholder="Your Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading text-info" style="display: none;">Loading...</div>
            <div class="error-message" style="display: none; color: red;">Failed to send message. Please try again.</div>
            <div class="sent-message" style="display: none; color: green;">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>

    </div>

    <!-- Google Map Embed - Moved After the Contact Form -->
    <div class="mt-4">
      <iframe src="https://maps.google.com/maps?q=Rumla%20(Rani%20f.),%20Chikhli,%20Navsari&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              frameborder="0" style="border:0; width:100%; height:250px;" allowfullscreen></iframe>
    </div>

  </div>
</section>

    </div>

  </div>
</section>

<script>
document.getElementById("contact-form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent default form submission
  
  var form = this;
  var formData = new FormData(form);
  
  var responseMessage = document.querySelector(".my-3");
  responseMessage.querySelector(".loading").style.display = 'block'; // Show loading message

  fetch('contact-handler.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    responseMessage.querySelector(".loading").style.display = 'none'; // Hide loading message
    responseMessage.querySelector(".sent-message").style.display = 'block'; // Show success message
    // Redirect to index.php after 2 seconds
    setTimeout(function() {
      window.location.href = 'index.php';
    }, 2000);
  })
  .catch(error => {
    responseMessage.querySelector(".loading").style.display = 'none'; // Hide loading message
    responseMessage.querySelector(".error-message").style.display = 'block'; // Show error message
  });
});
</script>
