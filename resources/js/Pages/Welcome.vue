<template>
  <div class="full-page">
    <!-- Navigation Bar -->
    <AuthNavigation :canLogin="canLogin" :canRegister="canRegister" />

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="overlay"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">Discover Your Dreams with DreamMaps</h1>
          <p class="hero-subtitle">Join us to explore, learn, and achieve your goals</p>
          <button class="hero-button">Get Started</button>
        </div>
        <div class="hero-image">
          <img src="https://via.placeholder.com/600x400" alt="Hero Image">
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
      <div class="about-content">
        <div class="about-image">
          <img src="https://via.placeholder.com/400x400" alt="About Us">
        </div>
        <div class="about-text">
          <h2 class="about-title">About DreamMaps</h2>
          <p class="about-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla. Vestibulum vel orci sed purus euismod tincidunt. Sed sem ex, feugiat eget pretium nec, malesuada non turpis.
          </p>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
      <h2 class="section-title">Our Features</h2>
      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 1"></div>
          <h3 class="feature-title">Feature One</h3>
          <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 2"></div>
          <h3 class="feature-title">Feature Two</h3>
          <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 3"></div>
          <h3 class="feature-title">Feature Three</h3>
          <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 4"></div>
          <h3 class="feature-title">Feature Four</h3>
          <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
      <h2 class="section-title">What Our Users Say</h2>
      <div class="testimonials-grid">
        <div class="testimonial-item">
          <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
          <p class="testimonial-author">- John Doe</p>
        </div>
        <div class="testimonial-item">
          <p class="testimonial-text">"Suspendisse imperdiet dui quis lobortis aliquet."</p>
          <p class="testimonial-author">- Jane Smith</p>
        </div>
        <div class="testimonial-item">
          <p class="testimonial-text">"Aenean nec ipsum id ligula ultricies volutpat pharetra."</p>
          <p class="testimonial-author">- Mark Johnson</p>
        </div>
        <div class="testimonial-item">
          <p class="testimonial-text">"Aliquam quis vehicula turpis. Suspendisse imperdiet."</p>
          <p class="testimonial-author">- Sarah Brown</p>
        </div>
      </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
      <div class="cta-content">
        <h2 class="cta-title">Join DreamMaps Today</h2>
        <p class="cta-subtitle">Start your journey towards success.</p>
        <button class="cta-button">Sign Up Now</button>
      </div>
    </section>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script setup>
import Footer from '@/Components/Footer.vue';
import AuthNavigation from '@/Components/AuthNavigation.vue';

defineProps({
    canLogin: {
        type: Boolean,
        required: true
    },
    canRegister: {
        type: Boolean,
        required: true
    },
});
</script>

<style scoped>
.full-page {
  background-color: #F5F7FA;
  font-family: 'Plus Jakarta Sans', sans-serif;
  overflow-x: hidden;
}

/* Hero Section */
.hero-section {
  position: relative;
  background-color: #3D5A80;
  color: #fff;
  padding: 100px 20px;
  text-align: center;
}

.hero-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.hero-title {
  font-size: 48px;
  font-weight: 800;
  margin-bottom: 20px;
}

.hero-subtitle {
  font-size: 20px;
  margin-bottom: 30px;
}

.hero-button {
  background-color: #EE6C4D;
  border: none;
  padding: 15px 30px;
  font-size: 16px;
  font-weight: 700;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.hero-button:hover {
  background-color: #E63946;
}

.hero-image img {
  max-width: 100%;
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

/* About Section */
.about-section {
  background-color: #FFFFFF;
  padding: 80px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.about-content {
  display: flex;
  align-items: center;
  justify-content: space-around;
  flex-wrap: wrap;
  max-width: 1200px;
}

.about-image img {
  border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  max-width: 100%;
}

.about-title {
  font-size: 36px;
  font-weight: 700;
  color: #3D5A80;
  margin-bottom: 20px;
}

.about-description {
  font-size: 18px;
  line-height: 1.6;
  color: #333;
}

/* Features Section */
.features-section {
  background-color: #F5F7FA;
  padding: 80px 20px;
  text-align: center;
}

.section-title {
  font-size: 36px;
  font-weight: 700;
  color: #3D5A80;
  margin-bottom: 50px;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
}

.feature-item {
  background-color: #FFFFFF;
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.feature-icon img {
  max-width: 80px;
  margin-bottom: 20px;
}

.feature-title {
  font-size: 24px;
  font-weight: 700;
  color: #3D5A80;
  margin-bottom: 15px;
}

.feature-description {
  font-size: 16px;
  color: #666;
}

/* Testimonials Section */
.testimonials-section {
  background-color: #FFFFFF;
  padding: 80px 20px;
  text-align: center;
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
}

.testimonial-item {
  background-color: #F5F7FA;
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.testimonial-text {
  font-size: 18px;
  color: #666;
  margin-bottom: 15px;
}

.testimonial-author {
  font-size: 16px;
  font-weight: 700;
  color: #3D5A80;
}

/* Call to Action Section */
.cta-section {
  background-color: #3D5A80;
  color: white;
  padding: 100px 20px;
  text-align: center;
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
}

.cta-title {
  font-size: 36px;
  font-weight: 700;
  margin-bottom: 20px;
}

.cta-subtitle {
  font-size: 18px;
  margin-bottom: 30px;
}

.cta-button {
  background-color: #EE6C4D;
  border: none;
  padding: 15px 30px;
  font-size: 16px;
  font-weight: 700;
  color: white;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #E63946;
}
</style>
