<?php
include_once ('pages/header.php')
?>

<!-- Home Section -->
<div class="Home">
    <h1>JoyPlay</h1>
    <p>Where Learning Meets Fun!</p>
    <button  onclick="window.location.href='pages/game.php';">Play</button>
</div>

<!-- What is JoyPlay Section -->
<div class="container my-5 what">
  <h3>Welcome to JoyPlay!</h3>
  <p>
    Discover a world of fun and learning with JoyPlay, the ultimate educational puzzle game for kids. At JoyPlay, 
    we believe that learning should be an exciting adventure. Our interactive puzzle game helps children develop 
    problem-solving skills, creativity, and critical thinking—all while having fun! Win puzzles, unlock exciting 
    virtual toys, and embark on an engaging journey filled with challenges and rewards. Join us today and let the fun begin!
  </p>
</div>

<!-- Game Cards Section -->
<div class="container my-5">
  <div class="row">
    <!-- Quiz Game -->
    <div class="col-md-6">
      <div class="game-card" style="background-color: #FFDAB9;">
        <p class="age-category" style="color: #fff;">Ages 3-5</p>
        <img src="images/dog.png" alt="Quiz Game"  style="width: 300px;">
        <h5>Quiz Game</h5>
        <p class="game-description">Test your knowledge with fun quizzes!</p>
        <button  class="quiz" onclick="window.location.href='games/1st.php';">Play Quiz</button>
      </div>
    </div>

    <!-- Puzzle Game -->
    <div class="col-md-6">
      <div class="game-card" style="background-color: #87CEFA;">
        <p class="age-category" style="color: #fff;">Ages 6-8</p>
        <img src="images/puzzle.png" alt="Puzzle Game" style="width: 280px;">
        <h5>Puzzle Game</h5>
        <p class="game-description">Solve puzzles to have fun!</p>
        <button class="puzzle" onclick="window.location.href='games/puzzle1.php';">Start Puzzle</button>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials Section -->
<div class="testimonials-section">
  <h3>What Our Players Say</h3>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial-card">
          <h5>John Doe</h5>
          <p>"My kids absolutely love JoyPlay! They learn so much while having endless fun!"</p>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>

        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <h5>Jane Smith</h5>
          <p>"This game is fantastic for developing problem-solving skills. My son is hooked!"</p>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card">
          <h5>Emily White</h5>
          <p>"Such a creative way for children to learn and grow. Highly recommend it!"</p>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>
          <i class="fas fa-star yellow-star"></i>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Section -->

<?php
include_once ('pages/footer.php')
?>