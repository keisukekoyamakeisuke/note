<head>
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"  type="text/css" />
<?php wp_head(); ?>
</head>
<body>
    <section class="area">
        <div class="box">
            <h1 class="title-l"><?php bloginfo('name'); ?></h1>
            <p class="paragraph-m"><?php bloginfo('description'); ?></p> 
        </div>
        <div class="box">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="block">
                    <h2 class="title-m"><?php the_title(); ?></h2>
                    <div class="paragraph-s"><?php the_content(); ?></div> 
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php wp_footer(); ?>
</body>
