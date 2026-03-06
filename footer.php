<footer>
  <div class="footer-wrappper">

    <!-- Footer Start -->
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="single-footer-caption mb-50 text-center">

              <!-- Logo -->
              <div class="footer-logo mb-25">
                <a href="/" style="color:white; font-weight:bold;">
                  <?= $site['logo_text']; ?>
                </a>
              </div>

              <!-- Footer Menu -->
              <div class="main-menu2">
                <nav>
                  <ul>
                    <?php foreach ($footer_menu as $item): ?>
                      <li>
                        <a href="<?= $item['link']; ?>">
                          <?= $item['label']; ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </nav>
              </div>

              <!-- Social Icons -->
              <div class="footer-social">
                <?php foreach ($footer_social as $social): ?>
                  <a href="<?= $social['link']; ?>">
                    <i class="<?= $social['icon']; ?>"></i>
                  </a>
                <?php endforeach; ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Footer Bottom -->
    <div class="footer-bottom-area">
      <div class="container">
        <div class="footer-border">
          <div class="row d-flex align-items-center">
            <div class="col-xl-12">
              <div class="footer-copy-right text-center">
                <p>
                  Copyright &copy;
                  <script>document.write(new Date().getFullYear());</script>
                  All rights reserved.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</footer>

      <!-- JS here -->
    <?php foreach ($js_files as $js): ?>
  <script src="assets/js/<?= $js; ?>"></script>
<?php endforeach; ?>

   </body>
</html>