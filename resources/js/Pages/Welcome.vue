<template>
  <div class="full-page">
    <!-- Navigation Bar -->
    <AuthNavigation :canLogin="canLogin" :canRegister="canRegister" />
    <!-- Hero Section -->
    <div class="hero-section">
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
    </div>

    <!-- About Section -->
    <div class="about-section">
      <div class="about-content">
        <div class="about-image">
          <img src="https://via.placeholder.com/400x400" alt="About Us">
        </div>
        <div class="about-text">
          <span class="about-title">About DreamMaps</span>
          <div class="about-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla. Vestibulum vel orci sed purus euismod tincidunt. Sed sem ex, feugiat eget pretium nec, malesuada non turpis. Aliquam quis vehicula turpis. Suspendisse imperdiet dui quis lobortis aliquet. Mauris rutrum tortor gravida massa dignissim scelerisque.
          </div>
        </div>
      </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
      <div class="section-title">Our Features</div>
      <div class="features-grid">
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 1"></div>
          <div class="feature-title">Feature One</div>
          <div class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 2"></div>
          <div class="feature-title">Feature Two</div>
          <div class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 3"></div>
          <div class="feature-title">Feature Three</div>
          <div class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><img src="https://via.placeholder.com/100" alt="Feature 4"></div>
          <div class="feature-title">Feature Four</div>
          <div class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
      </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials-section">
      <div class="section-title">What Our Users Say</div>
      <div class="testimonials-grid">
        <div class="testimonial-item">
          <div class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel orci sed purus euismod tincidunt."</div>
          <div class="testimonial-author">- John Doe</div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-text">"Suspendisse imperdiet dui quis lobortis aliquet. Mauris rutrum tortor gravida massa dignissim scelerisque."</div>
          <div class="testimonial-author">- Jane Smith</div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-text">"Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla."</div>
          <div class="testimonial-author">- Mark Johnson</div>
        </div>
        <div class="testimonial-item">
          <div class="testimonial-text">"Aliquam quis vehicula turpis. Suspendisse imperdiet dui quis lobortis aliquet."</div>
          <div class="testimonial-author">- Sarah Brown</div>
        </div>
      </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta-section">
      <div class="cta-content">
        <div class="cta-text">
          <span class="cta-title">Join DreamMaps Today</span>
          <span class="cta-subtitle">Start your journey towards success.</span>
        </div>
        <button class="cta-button">Sign Up Now</button>
      </div>
    </div>

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
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #FAFAFA;
  padding: 20px;
}

/* Hero Section */
.hero-section {
  width: 100%;
  max-width: 1500px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 100px 20px;
  box-sizing: border-box;
  background-color: #D6AD60;
  border-radius: 10px;
  margin: 20px 0;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

.hero-content {
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  color: #FFFFFF;
}

.hero-text {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 600px;
}

.hero-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 48px;
  line-height: 1.2;
  color: #FFFFFF;
}

.hero-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 24px;
  color: #FFFFFF;
}

.hero-button {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #FFFFFF;
  background-color: #D6AD60;
  border: none;
  border-radius: 10px;
  padding: 12px 24px;
  cursor: pointer;
}

.hero-image img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

/* About Section */
.about-section {
  width: 100%;
  max-width: 1500px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 20px;
  box-sizing: border-box;
  background-color: #FFFFFF;
  border-radius: 10px;
  margin: 20px 0;
}

.about-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.about-image img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}

.about-text {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 600px;
}

.about-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 36px;
  color: #18181B;
}

.about-description {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
}

/* Features Section */
.features-section {
  width: 100%;
  max-width: 1500px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 50px 20px;
  box-sizing: border-box;
  background-color: #FFFFFF;
  border-radius: 10px;
  margin: 20px 0;
}

.section-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 36px;
  color: #18181B;
  margin-bottom: 30px;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  width: 100%;
}

.feature-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
  background-color: #F5F5F5;
  border-radius: 10px;
}

.feature-icon img {
  max-width: 100px;
  height: auto;
  margin-bottom: 20px;
}

.feature-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 24px;
  color: #18181B;
  margin-bottom: 10px;
}

.feature-description {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
}

/* Testimonials Section */
.testimonials-section {
  width: 100%;
  max-width: 1500px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 50px 20px;
  box-sizing: border-box;
  background-color: #FFFFFF;
  border-radius: 10px;
  margin: 20px 0;
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  width: 100%;
}

.testimonial-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 20px;
  box-sizing: border-box;
  background-color: #F5F5F5;
  border-radius: 10px;
}

.testimonial-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
  margin-bottom: 10px;
}

.testimonial-author {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #18181B;
}

/* Call to Action Section */
.cta-section {
  width: 100%;
  max-width: 1500px;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 50px 20px;
  box-sizing: border-box;
  background-color: #D6AD60;
  border-radius: 10px;
  margin: 20px 0;
}

.cta-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.cta-text {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 600px;
  color: #FFFFFF;
}

.cta-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 36px;
  color: #FFFFFF;
}

.cta-subtitle {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #FFFFFF;
}

.cta-button {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #FFFFFF;
  background-color: #18181B;
  border: none;
  border-radius: 10px;
  padding: 12px 24px;
  cursor: pointer;
}
</style>
