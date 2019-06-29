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
                <h2 class="title-m"><?php the_title(); ?></h2>
                <p class="paragraph-s"><?php the_content(); ?></p> 
            </div>
    </section>
<?php wp_footer(); ?>
</body>
