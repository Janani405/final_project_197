<footer>
  <div class="background-shape"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <ul>
          <li><a href="mailto:info@joyplay.com">info@joyplay.com</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Support</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <div class="social-links">
        <ul>
            <li><a href="#" class="fab fa-facebook-f"></a></li>
            <li><a href="#" class="fab fa-twitter"></a></li>
            <li><a href="#" class="fab fa-instagram"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <p>&copy; 2024 JoyPlay | All Rights Reserved</p>
</footer>


<!-- Scroll to Top Button -->
<button id="scrollToTopBtn">&#8593;</button>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Show Scroll to Top Button when scrolling
  window.onscroll = function() {
    const btn = document.getElementById('scrollToTopBtn');
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      btn.style.display = 'block';
    } else {
      btn.style.display = 'none';
    }
  };

  // Scroll to Top Function
  document.getElementById('scrollToTopBtn').onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
</script>

</body>
</html>