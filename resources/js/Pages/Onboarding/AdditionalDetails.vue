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
      <span class="title-text">Sign Up</span>
    </div>

    <!-- Form Section -->
    <div class="form-section">
      <div class="form-group">
        <label for="school" class="form-label">Your School</label>
        <div class="select-container">
          <select id="school" class="custom-select">
            <option value="" disabled selected>School High School</option>
            <option value="high-school">High School</option>
            <option value="college">College</option>
            <option value="university">University</option>
          </select>
          <img class="input-icon" src="/assets/vectors/vector_23_x2.svg" alt="Dropdown Icon">
        </div>
      </div>
      <div class="form-group">
        <label for="courses" class="form-label">How good can you say you are at following courses</label>
        <div class="select-container">
          <select id="courses" class="custom-select">
            <option value="" disabled selected>Not so good</option>
            <option value="excellent">Excellent</option>
            <option value="good">Good</option>
            <option value="average">Average</option>
            <option value="poor">Poor</option>
          </select>
          <img class="input-icon" src="/assets/vectors/vector_23_x2.svg" alt="Dropdown Icon">
        </div>
      </div>
      <div class="form-group">
        <label for="department" class="form-label">Your Department</label>
        <div class="select-container">
          <select id="department" class="custom-select">
            <option value="" disabled selected>Art</option>
            <option value="science">Science</option>
            <option value="commerce">Commerce</option>
            <option value="humanities">Humanities</option>
          </select>
          <img class="input-icon" src="/assets/vectors/vector_30_x2.svg" alt="Dropdown Icon">
        </div>
      </div>
      <div class="form-submit">
        <button class="form-submit-button">Continue</button>
      </div>
    </div>
    </div>
<Footer />
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

/* Form Section */
.form-section {
  width: 100%;
  max-width: 1000px;
  margin-bottom: 100px; /* Added margin-bottom */
}

.form-group {
  margin-bottom: 30px;
}

.form-label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  font-size: 16px;
  color: #18181B;
}

.select-container {
  position: relative;
  border-radius: 6px;
  border: 1px solid #8692A6;
  display: flex;
  align-items: center;
  padding: 23.2px 16.8px;
  margin-bottom: 19px;
  width: 988px;
  height: 64px;
  box-sizing: border-box;
}

.custom-select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border: none;
  outline: none;
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: #18181B;
  width: 100%;
  background-color: transparent;
  padding-right: 50px; /* Adjust padding to make room for icon */
}

.input-icon {
  position: absolute;
  right: 16.8px;
  width: 31px;
  height: 19.1px;
  pointer-events: none;
}

.form-submit {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%; /* Full width */
}

.form-submit-button {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: #FFFFFF;
  background: linear-gradient(270deg, #D6AD60, #D6AD60);
  border: none;
  border-radius: 10px;
  padding: 15px;
  width: 100%; /* Full width */
  cursor: pointer;
  text-align: center; /* Center the text */
}
</style>
