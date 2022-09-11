<template>
  <footer v-if="!isLoading" class="footer footer_5">
    <div class="footer_top_part">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <TheFooterSlider :items="responseData.latestNews"></TheFooterSlider>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="widget widget_text" data-appear-animation="fadeInDown" data-appear-animation-delay="200">
              <h3 class="widget_title">About</h3>
              <p>
                Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet,
                tincidunt ac, viverra sed, nulla. Quisque diam lorem, interdum. vitae, dapibus ac, scelerisque.
              </p>
              <br>
              <p>
                Email:
                <a href="mailto:company@company.com">company@company.com</a>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="section form_section">
                  <h3 class="section_title">Newsletter Sign Up</h3>
                  <div class="form_text">Sign up to our newsletter and get exclusive deals you will not find anywhere else straight to your inbox!</div>
                  <form id="newsletter">
                      <button type="submit" class="btn-email button button_grey" data-type="submit"><i class="fa fa-envelope-o"></i></button>
                      <div class="wrapper">
                          <input type="email" placeholder="البريد الألكتروني" name="newsletter-email">
                      </div>
                      <div class="message_container_subscribe"></div></form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!--copyright part-->
    <div class="footer_bottom_part">
      <div class="container clearfix">
        <p>
          &copy; 2022
          <span>Tshreen</span>
          . All Rights Reserved.
        </p>
        <div class="mobile_menu">
          <nav>
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Health</a>
              </li>
              <li>
                <a href="#">Business</a>
              </li>
              <li>
                <a href="#">Sport</a>
              </li>
              <li>
                <a href="#">Pages</a>
              </li>
              <li>
                <a href="#">Features</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
              <li>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <a href="#">Forums</a>
              </li>
              <li>
                <a href="#">Shop</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
import SmallSlider from '../blocks/SmallSlider.vue';
import TheFooterSlider from "../blocks/TheFooterSlider.vue";

export default {
    components: {
        TheFooterSlider,
        SmallSlider,
    },

    data() {
        return {
            isLoading: true,
            responseData: {},
        }
    },

    async beforeMount() {
        const footerData = await window.axios.get('/ar/footer');

        this.isLoading = false;
        this.responseData = footerData.data;
    },
}
</script>

<style scoped lang="scss">
@import "resources/sass/sectionTitle";

.section_title, .form_text {
    color: white;
}

#newsletter .btn-email {
    background-color: #fe690d;
    margin: 0;
}
</style>
