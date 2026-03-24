<?php
$page_title = "メニュー・料金 — 愛媛県今治市のスナック | Anela";
$page_description = "愛媛県今治市のスナック「アネラ（Anela）」のメニュー紹介。山丹政宗（日本酒）をはじめ、厳選した焼酎・ウイスキー・ワイン・シャンパンを各種取り揃えております。落ち着いた空間で、お好みの一杯を心ゆくまでお楽しみください。";
get_header();
?>

    <main>
      
      <section id="menu">
        <div class="container">
          <h2 class="section-title">MENU</h2>

          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-2">

          <div class="wrapper">

            <div class="system">
              <h3><span>System</span>システム</h3>
              <?php
              $args = array(
                'post_type'      => 'system',  // 投稿タイプ
                'posts_per_page' => -1,        // 全件表示
              );
              $wanted_query = new WP_Query($args);

              if ($wanted_query->have_posts()) :
                  while ($wanted_query->have_posts()) : $wanted_query->the_post();
              ?>
              <dl class="list">
                <div class="item">
                  <dt>・<?php the_field('charge'); ?> <span class="small"> ( <?php the_field('charge'); ?> ) </span></dt>
                  <dd>¥ <?php the_field('price'); ?> -</dd>
                </div>
              </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>

            </div>
            
            <div class="category shochu-whisky">

              <div class="shochu left">
                <h3><span>Shochu</span>焼酎</h3>
                <h4>麦</h4>

                <?php
                $args = array(
                  'post_type'      => 'shochu_mugi',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>
                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> -</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>

                <h4>芋</h4>
                <?php
                $args = array(
                  'post_type'      => 'shochu_imo',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>
                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> -</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>
              </div>
              
              <div class="whisky right">
                <h3><span>Whisky</span>ウイスキー</h3>
                <?php
                $args = array(
                  'post_type'      => 'whisky',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>
                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> -</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>

              </div>

            </div>

            <div class="category wine-champagne">

              <div class="wine left">
                <h3><span>Wine</span>ワイン</h3>
                <?php
                $args = array(
                  'post_type'      => 'wine',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>

                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> ~</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>

              </div>
              
              <div class="champagne right">
                <h3><span>Champagne</span>シャンパン</h3>
                <?php
                $args = array(
                  'post_type'      => 'champagne',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>

                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> -</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>

              </div>

            </div>

            <div class="category sake-other">

              <div class="sake left">
                <h3><span>Sake</span>日本酒</h3>
                <?php
                $args = array(
                  'post_type'      => 'sake',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>

                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> ~</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>


              </div>

              <div class="other right">
                <h3><span>Other</span>その他</h3>
                <?php
                $args = array(
                  'post_type'      => 'other',  // 投稿タイプ
                  'posts_per_page' => -1,        // 全件表示
                );
                $wanted_query = new WP_Query($args);

                if ($wanted_query->have_posts()) :
                    while ($wanted_query->have_posts()) : $wanted_query->the_post();
                ?>

                <dl class="list">
                  <div class="item">
                    <dt>・<?php the_field('alcohol'); ?></dt>
                    <dd>¥ <?php the_field('alcohol_price'); ?> -</dd>
                  </div>
                </dl>
              <?php
                  endwhile;
                  wp_reset_postdata();
              else :
                  ?>
              <p>coming soon...</p>
              <?php endif; ?>


              </div>
            </div>
            
          </div>
          
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-4">

        </div>
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