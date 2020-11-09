  <?php
  /**
   * @file
   * Returns the HTML for a single Drupal page.
   *
   * Complete documentation for this file is available online.
   * @see https://drupal.org/node/1728148
   */
  ?>

  <div id="page">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <header class="header" class="full-width" id="header" role="banner">
      <div id="header-page">
        <div id="top-above-menu" class="content-narrow">
          <div id="logo">
            <a class="hide-text" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><?php print $site_name; ?></a>
          </div>
  
    <?php if ($site_slogan): ?>
  
            <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
  
    <?php endif; ?>
  
          <div id="top-contact-info">
            <div class="top-social-div">
              <a class="fa fa-twitter" target="_blank" href="https://www.twitter.com"></a>
              <a class="fa fa-facebook" target="_blank" href="https://www.facebook.com"></a>
            </div>
            <div id="top-phone-div">
              <p class="font-small uppercase">Call us now</p>
              <span>888-888-8888</span>
                <!-- a href="tel:888-888-8888">888-888-8888</a -->
            </div>
          </div>
        </div>
  
    <?php if ($main_menu): ?>
  
      <nav id="main-menu" role="navigation" tabindex="-1">
  
    <?php
    // This code snippet is hard to modify. We recommend turning off the
    // "Main menu" on your sub-theme's settings form, deleting this PHP
    // code block, and, instead, using the "Menu block" module.
    // @see https://drupal.org/project/menu_block
  
    print theme('links__system_main_menu', array(
                'links' => $main_menu,
                'attributes' => array(
                'class' => array('links', 'inline', 'clearfix'),
                    ),
                'heading' => array(
                'text' => t('Main menu'),
                'level' => 'h2',
                'class' => array('element-invisible'),
                    ),
                )); ?>
      </nav>
  
      <?php endif; ?>
  
        <?php if ($page['navigation']): ?>
  
          <div id="navigation">

        <?php print render($page['navigation']); ?>

          </div>
  
        <?php endif; ?>

      </div>

    </header>

  <?php print render($page['header']); ?>

    <div id="main" class="content-wide">

      <div id="content" class="column content-narrow" role="main">
      
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['above_footer']); ?>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
