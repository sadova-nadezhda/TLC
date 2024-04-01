<?php get_header(); ?>

<?php
/*
Template Name: Home
*/
?>

<main>
    <section id="trans" class="trans section_top">
      <div class="container">
        <div class="trans__container">
          <div class="trans__row">
            <h1 class="trans__title">
              <span data-aos="flip-down" data-aos-delay="100">trans logistics</span>
              <span data-aos="flip-down" data-aos-delay="200">capital group</span>
            </h1>
            <div class="trans__partner" data-aos="fade-left" data-aos-delay="300">Ваш <br> надежный партнер!</div>
          </div>
          <div class="trans__wrap">
            <div class="trans__application popup__feedback">
              <button class="popup__close">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.99992 8.17868L11.714 12.8927C12.0394 13.2182 12.567 13.2182 12.8925 12.8927C13.2179 12.5673 13.2179 12.0396 12.8925 11.7142L8.17843 7.00016L12.8925 2.28612C13.2179 1.96069 13.2179 1.43305 12.8925 1.10761C12.567 0.782176 12.0394 0.782177 11.714 1.10761L6.99992 5.82165L2.28587 1.1076C1.96043 0.782166 1.4328 0.782166 1.10736 1.1076C0.781922 1.43304 0.781922 1.96068 1.10736 2.28611L5.82141 7.00016L1.10736 11.7142C0.781922 12.0397 0.781922 12.5673 1.10736 12.8927C1.4328 13.2182 1.96043 13.2182 2.28587 12.8927L6.99992 8.17868Z"
                    fill="#222222" />
                </svg>
              </button>
              <h4 class="trans__caption">Оставить заявку</h4>
              <form action="" method="post" class="trans__form" id="formTrans" name="formTrans">
                <?php echo do_shortcode('[contact-form-7 id="58367af" title="Оставить заявку"]'); ?>
              </form>
            </div>
            <div class="trans__btn_mb popup__btn button">Оставить заявку</div>
            <div class="trans__img"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/containers.png" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <section id="services" class="services">
      <div class="container">
        <div class="services__container">
          <h2 class="services__title" data-aos="fade-left" data-aos-delay="100">Услуги</h2>
          <div class="services__cards">

          <?php
              global $post;

              $myposts = get_posts([
                'numberposts' => -1,
	              'category_name'    => 'services',
                'order' => 'ASC'
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
            ?>

            <div class="services__card" data-aos="fade-down" data-aos-offset="500" data-aos-duration="300">
              <div class="services__num"></div>
              <div class="services__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
              <h4 class="services__caption"><?php the_title(); ?></h4>
            </div>

            <?php } } wp_reset_postdata(); ?>

          </div>
        </div>
      </div>
    </section>
    <section id="partners" class="partners section">

      <div class="partners__container">
        <div class="container">
          <h2 class="partners__title" data-aos="fade-left" data-aos-delay="100">Партнеры</h2>
        </div>
        <div class="partners__marquees">
          <marquee behavior="alternate" direction="right" loop="true">
            <div class="partners__row partners__row_rg">

            <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'category_name'    => 'partners',
                  'order' => 'ASC'
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
              ?>

              <div class="partners__card">
                <div class="partners__img">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
              </div>

              <?php } } wp_reset_postdata(); ?>

            </div>
          </marquee>
          <marquee behavior="alternate" direction="left" loop="true">
            <div class="partners__row partners__row_lf">
            <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'category_name'    => 'partners'
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
              ?>

              <div class="partners__card">
                <div class="partners__img">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
              </div>

              <?php } } wp_reset_postdata(); ?>
            </div>
          </marquee>
        </div>
      </div>
    </section>
    <section id="about" class="about section" style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/back-1.png);">
      <div class="container">
        <div class="about__container">
          <h2 class="about__title" data-aos="fade-left" data-aos-delay="100"><?php the_field('about-title'); ?></h2>
          <div class="about__desc" data-aos="fade-right" data-aos-delay="100">
          <?php the_field('about-desc'); ?>
          </div>
          <ol class="about__list">

          <?php
                global $post;

                $myposts = get_posts([
                  'numberposts' => -1,
                  'category_name'    => 'advantages',
                  'order' => 'ASC'
                ]);

                if( $myposts ){
                  foreach( $myposts as $post ){
                    setup_postdata( $post );
              ?>

              <li data-aos="flip-up" data-aos-delay="100"><?php the_content(); ?></li>

              <?php } } wp_reset_postdata(); ?>

          </ol>
          <button class="about__btn button button_light" data-aos="fade-left" data-aos-delay="100">Оставить заявку</button>
        </div>
      </div>
    </section>
    <section id="projects" class="projects section">
      <div class="container">
        <div class="projects__container">
          <div class="projects__top">
            <h2 class="projects__title" data-aos="fade-left" data-aos-delay="100">Наши проекты</h2>
            <div class="projects__arrows">
              <button class="projects__arrow projects-prev">
                <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 1L2 7L8 13" stroke="#16676B" stroke-width="1.5" />
                </svg>
              </button>
              <button class="projects__arrow projects-next">
                <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 1L7 7L1 13" stroke="#16676B" stroke-width="1.5" />
                </svg>
              </button>
            </div>
          </div>
          <div class="swiper projectSwiper">
            <div class="swiper-wrapper projects__cards">

            <?php
              global $post;

              $myposts = get_posts([
                'numberposts' => -1,
                'category_name' => 'projects',
                'order' => 'ASC'
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
            ?>

            <div class="swiper-slide projects__card">
              <div class="projects__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
              <div class="projects__txt"><?php the_content(); ?></div>
            </div>

            <?php } } wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contacts" class="contacts section">
      <div class="contacts__back">
        <svg width="1030" height="1017" viewBox="0 0 1030 1017" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M666.5 269.5C666.5 339.301 601.425 396 521 396C440.575 396 375.5 339.301 375.5 269.5C375.5 199.699 440.575 143 521 143C601.425 143 666.5 199.699 666.5 269.5Z"
            stroke="#22898E" />
          <path
            d="M797.5 298.5C797.5 431.261 673.774 539 521 539C368.226 539 244.5 431.261 244.5 298.5C244.5 165.739 368.226 58 521 58C673.774 58 797.5 165.739 797.5 298.5Z"
            stroke="#22898E" />
          <path
            d="M908.5 346.5C908.5 532.28 735.079 683 521 683C306.921 683 133.5 532.28 133.5 346.5C133.5 160.72 306.921 10 521 10C735.079 10 908.5 160.72 908.5 346.5Z"
            stroke="#22898E" />
          <path
            d="M987.5 411C987.5 637.378 778.703 821 521 821C263.297 821 54.5 637.378 54.5 411C54.5 184.622 263.297 1 521 1C778.703 1 987.5 184.622 987.5 411Z"
            stroke="#22898E" />
          <path
            d="M1029.5 465.5C1029.5 721.995 801.88 930 521 930C240.12 930 12.5 721.995 12.5 465.5C12.5 209.005 240.12 1 521 1C801.88 1 1029.5 209.005 1029.5 465.5Z"
            stroke="#22898E" />
          <path
            d="M1029.5 508.5C1029.5 788.778 799.157 1016 515 1016C230.843 1016 0.5 788.778 0.5 508.5C0.5 228.222 230.843 1 515 1C799.157 1 1029.5 228.222 1029.5 508.5Z"
            stroke="#22898E" />
          <path d="M799.5 75.501C745 42.0005 432.5 200.5 171.5 895.001" stroke="#22898E" />
          <path d="M244 75.6787C298.5 42.1783 611 200.678 872 895.179" stroke="#22898E" />
          <path d="M40.5 317.5C83.1667 265.333 239.3 180 522.5 256C876.5 351 1016 568 1004 657.5" stroke="#22898E" />
          <path d="M1004.71 317.5C962.042 265.333 805.909 180 522.709 256C168.709 351 14 577.5 26 667"
            stroke="#22898E" />
        </svg>
      </div>
      <div class="container">
        <div class="contacts__container">
          <h2 class="contacts__title" data-aos="fade-left" data-aos-delay="100">остались вопросы?</h2>
          <div class="contacts__wrap">
            <div class="contacts__box">
              <a href="tel:<?php the_field('phone_link'); ?>" class="contacts__tel" data-aos="fade-right" data-aos-delay="100"><?php the_field('phone'); ?></a>
              <a href="<?php the_field('address-link'); ?>" target="_blank" class="contacts__address" data-aos="fade-right" data-aos-delay="100">
                <span><?php the_field('city'); ?></span>
                <span><?php the_field('street'); ?></span>
              </a>
              <a href="mailto:<?php the_field('email'); ?>" class="contacts__mail" data-aos="fade-right"
                data-aos-delay="100"><?php the_field('email'); ?></a>
              <div class="contacts__socials" data-aos="fade-right" data-aos-delay="100">
                <a href="<?php the_field('instagram'); ?>" target="_blank" rel="nofollow">Instagram</a>
                <a href="<?php the_field('whatsapp'); ?>" target="_blank" rel="nofollow">Whatsapp</a>
              </div>
            </div>
            <form action="" method="post" class="contacts__form feedback" id="formFeedback">
              <!-- <input type="text" name="name" id="feedback-name" placeholder="Имя*" required class="contacts__item">
              <input type="tel" name="telephone" id="feedback-telephone" placeholder="Телефон*" required
                class="contacts__item">
              <button class="contacts__btn button button_light contacts__item" id="feedback-btn">Оставить
                заявку</button> -->
                <?php echo do_shortcode('[contact-form-7 id="869bf6d" title="Контактная форма"]'); ?>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>



<?php get_footer(); ?>
