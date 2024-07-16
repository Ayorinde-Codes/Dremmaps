<template>
  <div class="full-page">
    <!-- Navigation Bar -->
    <div class="navigation">
      <div class="logo">
        <span class="dream-maps">DreamMaps</span>
      </div>
      <div class="menu-items">
        <span class="menu-item">Features</span>
        <span class="menu-item">Pricing</span>
        <span class="menu-item">About Us</span>
      </div>
      <div class="auth-buttons">
        <span class="login">Login</span>
        <button class="sign-up-button">Sign Up</button>
      </div>
    </div>

    <!-- Title Section -->
    <div class="title-section">
      <span class="title-text">About Us</span>
    </div>

    <!-- About Us Sections -->
    <div class="about-container">
      <div class="about-grid">
        <div class="about-item">
          <div class="about-title">Our Mission</div>
          <div class="about-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla. Vestibulum vel orci sed purus euismod tincidunt. Sed sem ex, feugiat eget pretium nec, malesuada non turpis. Aliquam quis vehicula turpis. Suspendisse imperdiet dui quis lobortis aliquet. Mauris rutrum tortor gravida massa dignissim scelerisque. Donec laoreet, turpis nec vehicula mattis, orci ante condimentum diam, auctor bibendum mauris diam nec nulla.
          </div>
        </div>
        <div class="about-item">
          <div class="about-title">Our Team</div>
          <div class="about-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla. Vestibulum vel orci sed purus euismod tincidunt. Sed sem ex, feugiat eget pretium nec, malesuada non turpis. Aliquam quis vehicula turpis. Suspendisse imperdiet dui quis lobortis aliquet. Mauris rutrum tortor gravida massa dignissim scelerisque. Donec laoreet, turpis nec vehicula mattis, orci ante condimentum diam, auctor bibendum mauris diam nec nulla.
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script setup>
import Footer from '@/Components/Footer.vue';
</script>

<style scoped>
.full-page {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #FAFAFA;
  padding: 20px;
}

/* Navigation */
.navigation {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 50px;
  box-sizing: border-box;
}

.logo {
  display: flex;
  align-items: center;
}

.dream-maps {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 16px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #18181B;
}

.menu-items {
  display: flex;
  align-items: center;
  gap: 20px;
}

.menu-item {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
}

.auth-buttons {
  display: flex;
  align-items: center;
  gap: 20px;
}

.login {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
}

.sign-up-button {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #FFFFFF;
  background: linear-gradient(270deg, #D6AD60, #D6AD60);
  border: none;
  border-radius: 10px;
  padding: 8.5px 20px;
  cursor: pointer;
}

/* Title Section */
.title-section {
  margin: 150px 0 20px 0; /* Added margin-top */
}

.title-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 52px;
  background: linear-gradient(91.19deg, #D6AD60 33.5%, #705B32 64.3%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  white-space: nowrap; /* Prevent text from breaking */
}

/* About Container */
.about-container {
  width: 100%;
  max-width: 1500px;
  display: flex;
  flex-direction: column;
  gap: 70px; /* Increased gap */
  margin-bottom: 100px; /* Added margin-bottom */
}

.about-grid {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 40px; /* Increased gap */
}

.about-item {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 20px;
}

.about-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 30px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #18181B;
}

.about-description {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #000000;
  text-align: left;
}

/* Responsive Design */
@media (max-width: 1200px) {
  .navigation {
    flex-direction: column;
    padding: 10px 20px;
  }

  .menu-items {
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 10px;
  }

  .auth-buttons {
    margin-top: 10px;
  }

  .title-text {
    font-size: 40px;
  }

  .about-container {
    gap: 50px;
  }

  .about-grid {
    flex-direction: column;
    gap: 20px;
  }

  .about-title {
    font-size: 26px;
  }

  .about-description {
    font-size: 14px;
  }
}

@media (max-width: 768px) {
  .navigation {
    padding: 10px 10px;
  }

  .dream-maps {
    font-size: 14px;
  }

  .menu-item {
    font-size: 14px;
  }

  .login, .sign-up-button {
    font-size: 14px;
  }

  .title-text {
    font-size: 36px;
  }

  .about-title {
    font-size: 22px;
  }

  .about-description {
    font-size: 12px;
  }
}

@media (max-width: 480px) {
  .title-text {
    font-size: 28px;
  }

  .about-title {
    font-size: 18px;
  }

  .about-description {
    font-size: 10px;
  }
}
</style>
