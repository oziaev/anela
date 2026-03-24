    <footer>
      <div class="footer-top">
        <div class="container">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="ロゴ">
          <nav>
            <ul>
              <li><a href="<?php echo esc_url( home_url() ); ?>">TOP</a></li>
              <li><a href="<?php echo esc_url(home_url('/menu/')); ?>">CHARGE</a></li>
              <li><a href="<?php echo esc_url(home_url('/castwanted/')); ?>">CAST WANTED</a></li>
            </ul>
          </nav>
          <div class="sns">
            <a class="instagram" href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム"></a>
            ・
            <a class="tel" href="tel:09051485498">TEL</a>
          </div>
          <ul class="attention">
            <li class="small">※当店は 未成年のご入店・お酒の提供はお断りしております。</li>
            <li class="small">※営業中は接客のため、DM の返信やお電話の対応にお時間をいただく場合がございます。</li>
            <li class="small">※営業・勧誘目的のご連絡は一切お断りしております。 何卒ご理解くださいませ。</li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <div class="container">
          <p class="small">&copy; 2026 Anela All Rights Reserved.</p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
