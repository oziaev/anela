<?php
$page_title = "求人｜アネラ — 愛媛県今治市のスナック | Anela";
$page_description = "愛媛県今治市のスナック「アネラ（Anela）」の求人情報です。落ち着いた店内で、一緒に楽しく働きませんか？未経験者も大歓迎です。ご質問・ご応募はSNS DMまたはお電話でお気軽にお問い合わせください。";
get_header();
?>

    <main>
      
      <section class="cast-wanted">
        <div class="container">
          <h2 class="section-title">CAST WANTED</h2>

          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-2">


          <div class="wrapper">
            <?php 
            // 投稿タイプを post に指定
            $args = array(
              'post_type'      => 'post',   // ← 通常の投稿
              'posts_per_page' => -1,       // 全件表示
            );
            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) :
              while ($news_query->have_posts()) : $news_query->the_post();
            ?>
            <dl class="wanted">

              <dt>募集職種：</dt>
              <dd><?php the_field('recruit_job_type'); ?></dd>

              <dt>給与：</dt>
              <dd>
                <?php the_field('recruit_salary'); ?><br>
                <span class="small">※試用期間あり</span>
                <span class="small">※経験や能力を考慮し、期間・金額を決定いたします。</span>
              </dd>

              <dt>勤務時間：</dt>
              <dd>
                <?php the_field('recruit_hours'); ?><br>
                <span class="small">※週1回からOK</span>
              </dd>

              <dt>待遇：</dt>
              <dd>
                <p><?php the_field('recruit_benefits'); ?></p>
              </dd>
              
            </dl>
        <?php
        endwhile;
      else:
        ?>

        <p>coming soon...</p>
      <?php endif; ?>
      
          </div>
          
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-3">
          <img src="<?php echo get_template_directory_uri(); ?>/img/frame.png" alt="フレーム" class="frame-4">

        </div>
      </section>

      <section id="contact" class="contact">
        <div class="wrapper">  
          <h2 class="section-title">Contact</h2>
          <p>質問や見学のご相談も、受け付けております。<br>まずは一度、お店の雰囲気を覗きに来てみませんか？</p>
          <div class="sns">
            <a class="instagram" href="https://www.instagram.com/anela_0304?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="インスタグラム"></a>
            ・
            <a class="tel" href="tel:09051485498">TEL</a>
          </div>
        </div>
      </section>

      <section id="access">
        <div class="container">
          <h2 class="section-title">ACCESS</h2>
          <p class="address">〒794-0041<br>愛媛県今治市松本町1丁目7-7<br>CORE 2nd 3F</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d732.6457296417109!2d133.00050468338898!3d34.06466674982578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35503a6798965aed%3A0x5548c1adb4c89588!2z44Ki44ON44Op!5e0!3m2!1sja!2sjp!4v1765263034137!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

    </main>

<?php get_footer(); ?>