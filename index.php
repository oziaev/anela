<?php get_header(); ?>

    <main id="top">

      <div class="mainvisual">
        <div class="container">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fv-1.png" alt="ロゴ" class="fv-1"/>
          <img src="<?php echo get_template_directory_uri(); ?>/img/fv-2.png" alt="ロゴ" class="fv-2"/>
          <p class="fv-name-en">ANELA</p>
          <p class="open fadein">Open  20:00  ~  02:00</p>
        </div>
        <div class="scrollbar_box">
          <div class="scrollbar-text"><span>SCROLL</span></div>
          <div class="scrollbar"></div>
        </div>
      </div>

      <section id="info">
        <div class="wrapper">
          <h2 class="info-title section-title">~ ご案内 ~</h2>

          <div class="info-block">
            <h3>営業時間</h3>
            <p>20:00~26:00</p>
          </div>

          <div class="info-block">
            <h3>定休日</h3>
            <p>日曜・祝日</p>
          </div>

          <div class="info-block">
            <h3>ご予約</h3>
            <p>
              DMまたはお電話にて<br />
              <span class="small">※営業・勧誘目的のご連絡は一切お断りしております。</span>
            </p>
            <div class="sns">
              <a class="instagram" href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム"></a>
              ・
              <a class="tel" href="tel:09051485498">TEL</a>
            </div>
          </div>
        </div>
      </section>

      <div id="page-link">
        <div class="wrapper">
          <a href="<?php echo esc_url(home_url('/menu/')); ?>">MENU</a>
          <a href="<?php echo esc_url(home_url('/castwanted/')); ?>">CAST WANTED</a>
        </div>
      </div>

      <section id="gallery">
        <ul class="list-top">
          <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-1.jpg" alt="店内画像"></li>
          <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-2.jpg" alt="店内画像"></li>
          <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-3.jpg" alt="店内画像"></li>
        </ul>
        <ul class="list-bottom">
          <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-4.jpg" alt="店内画像"></li>
          <li class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery-5.jpg" alt="店内画像"></li>
        </ul>
      </section>

      <section id="access">
        <div class="container">
          <h2 class="section-title">ACCESS</h2>
          <p class="address">〒794-0041<br>愛媛県今治市松本町1丁目7-7<br>CORE 2nd 3F</p>
            <div class="sns">
              <a class="instagram" href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム"></a>
              ・
              <a class="tel" href="tel:09051485498">TEL</a>
            </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d732.6457296417109!2d133.00050468338898!3d34.06466674982578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35503a6798965aed%3A0x5548c1adb4c89588!2z44Ki44ON44Op!5e0!3m2!1sja!2sjp!4v1765263034137!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

    </main>

<?php get_footer(); ?>