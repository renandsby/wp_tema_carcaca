
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-start text-center">
          <div class="d-md-flex text-secondary align-items-center">
            <div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_footer.svg">
            </div>
            <div class="ps-4">
              <p class="mb-0">
                Copyright © 2021
              </p>
              <p class="mb-0">
                Orion pag
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 text-md-end text-center mt-md-0 mt-4">
          <div class="d-flex align-items-center justify-content-md-end justify-content-center">
            <div>
              <p class="mb-0 me-3">
                Desenvolvido por:
              </p>
            </div>
            <div>
              <a href="www.digitalarrow.com.br" target="_Blank">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow.png">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- jQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <!-- Aos -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Script -->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/script.js"></script>

  <script>
    feather.replace();
    AOS.init({
      disable: 'mobile'
    });
  </script>

  <div id="msg">
    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']); } ?>
  </div>

  <?php wp_footer(); ?>

</body>

</html>