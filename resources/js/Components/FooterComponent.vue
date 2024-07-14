<template>
  <div class="footer">
    <div class="footer-content">
      <div class="footer-left">
        <div class="footer-logo">
          <span class="footer-title">DreamMaps</span>
        </div>
        <div class="footer-links">
          <span class="footer-link">About us</span>
          <span class="footer-link">Contact us</span>
          <span class="footer-link">Help</span>
          <span class="footer-link">Privacy Policy</span>
          <span class="footer-link">Disclaimer</span>
        </div>
      </div>
      <div class="footer-right">
        <div class="address">
          <span class="address-text">345 Faulconer Drive, Suite 4 • Charlottesville, CA, 12345</span>
          <img class="address-icon" src="/assets/vectors/shape_5_x2.svg" />
        </div>
        <div class="contacts">
          <div class="phone">
            <span class="phone-text">(123) 456-7890</span>
            <img class="phone-icon" src="/assets/vectors/path_2_x2.svg" />
          </div>
          <div class="fax">
            <span class="fax-text">(123) 456-7890</span>
            <img class="fax-icon" src="/assets/vectors/shape_7_x2.svg" />
          </div>
        </div>
        <div class="social">
          <span class="social-label">Social Media</span>
          <div class="social-icons">
            <img class="social-icon" src="/assets/vectors/facebook_4_x2.svg" />
            <img class="social-icon" src="/assets/vectors/twitter_1_x2.svg" />
            <img class="social-icon" src="/assets/vectors/linked_in_2_x2.svg" />
            <img class="social-icon" src="/assets/vectors/youtube_5_x2.svg" />
            <img class="social-icon" src="/assets/vectors/instagram_8_x2.svg" />
            <img class="social-icon" src="/assets/vectors/google_plus_4_x2.svg" />
            <img class="social-icon" src="/assets/vectors/pinterest_3_x2.svg" />
            <img class="social-icon" src="/assets/vectors/rss_6_x2.svg" />
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span class="footer-copyright">Copyright © 2024• connectED.</span>
    </div>
  </div>
</template>

<script>
export default {
  name: 'FooterComponent'
};
</script>

<style scoped>
.footer {
  width: 100%;
  background-color: #FFFFFF;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 40px 20px;
  box-sizing: border-box;
}
.footer-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  width: 100%;
  max-width: 1300px;
  gap: 20px;
}
.footer-left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.footer-logo {
  margin-bottom: 20px;
}
.footer-title {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 800;
  font-size: 16px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #18181B;
}
.footer-links {
  display: flex;
  flex-direction: column;
}
.footer-link {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 500;
  font-size: 12px;
  line-height: 1.6667;
  color: #18181B;
  margin-bottom: 10px;
}
.footer-right {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.address {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}
.address-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  color: #575757;
  margin-right: 10px;
}
.address-icon {
  width: 10.7px;
  height: 11.3px;
}
.contacts {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}
.phone,
.fax {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}
.phone-text,
.fax-text {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  font-size: 12px;
  color: #575757;
  margin-right: 10px;
}
.phone-icon,
.fax-icon {
  width: 11.3px;
  height: 11.3px;
}
.social {
  display: flex;
  flex-direction: column;
}
.social-label {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 700;
  font-size: 12px;
  color: #18181B;
  margin-bottom: 10px;
}
.social-icons {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}
.social-icon {
  width: 15px;
  height: 15px;
}
.footer-bottom {
  width: 100%;
  max-width: 1300px;
  display: flex;
  justify-content: flex-end;
  padding-top: 20px;
  border-top: 1px solid #E0E0E0;
}
.footer-copyright {
  font-family: 'Plus Jakarta Sans', sans-serif;
  font-weight: 400;
  font-size: 10px;
  color: #18181B;
}
</style>
