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
      <span class="title-text">Pricing</span>
    </div>

    <!-- Pricing Sections -->
    <div class="pricing-container">
      <div class="pricing-grid">
        <div class="pricing-item">
          <div class="pricing-title">Basic Plan</div>
          <div class="pricing-price">$9.99/month</div>
          <div class="pricing-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla.
          </div>
        </div>
        <div class="pricing-item">
          <div class="pricing-title">Standard Plan</div>
          <div class="pricing-price">$19.99/month</div>
          <div class="pricing-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla.
          </div>
        </div>
        <div class="pricing-item">
          <div class="pricing-title">Premium Plan</div>
          <div class="pricing-price">$29.99/month</div>
          <div class="pricing-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec ipsum id ligula ultricies volutpat pharetra a nulla.
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

/* Pricing Container */
.pricing-container {
  width: 100%;
  max-width: 1500px;
  display: flex;
  flex-direction: column;
  gap: 70px; /* Increased gap */
  margin-bottom: 100px; /* Added margin-bottom */
}

.pricing-grid {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 40px; /* Increased gap */
}

.pricing-item {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 20px;
  padding: 20px;
  background-color: #FFF;
  border: 1px solid #E0E0E0;
  border-radius: 10px;
}

.pricing-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 30px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #18181B;
}

.pricing-price {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 24px;
  color: #D6AD60;
}

.pricing-description {
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

  .pricing-container {
    gap: 50px;
  }

  .pricing-grid {
    flex-direction: column;
    gap: 20px;
  }

  .pricing-title {
    font-size: 26px;
  }

  .pricing-price {
    font-size: 20px;
  }

  .pricing-description {
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

  .pricing-title {
    font-size: 22px;
  }

  .pricing-price {
    font-size: 18px;
  }

  .pricing-description {
    font-size: 12px;
  }
}

@media (max-width: 480px) {
  .title-text {
    font-size: 28px;
  }

  .pricing-title {
    font-size: 18px;
  }

  .pricing-price {
    font-size: 16px;
  }

  .pricing-description {
    font-size: 10px;
  }
}
</style>
