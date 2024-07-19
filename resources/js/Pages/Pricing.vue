<template>
  <div class="full-page">
    <!-- Navigation Bar -->
    <AuthNavigation />

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
import AuthNavigation from '@/Components/AuthNavigation.vue'
</script>

<style scoped>
.full-page {
  display: flex;
  flex-direction: column;
  align-items: center;
  background-color: #FAFAFA;
  padding: 20px;
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
