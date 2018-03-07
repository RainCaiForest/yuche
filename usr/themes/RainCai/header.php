<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('./favicon.ico'); ?>">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/css.css'); ?>">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/bootstrap.min.css'); ?>">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/simple-line-icons.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/style1.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/hs.megamenu.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/hamburgers.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/slick.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/jquery.fancybox.css'); ?>">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/pe-icon-7-stroke.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/settings.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/style.css'); ?>">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/styles.bm-classic.css'); ?>">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./css/custom.css'); ?>">

    <?php $this->header(); ?>
  </head>
  <body>
  <main>
    <header id="js-header" class="u-header u-header--sticky-top u-header--toggle-section u-header--change-appearance" data-header-fix-moment="300">
      <div class="u-header__section u-header__section--dark g-transition-0_3 g-bg-black-opacity-0_4" data-header-fix-moment-exclude="g-bg-black-opacity-0_4" data-header-fix-moment-classes="g-bg-black-opacity-0_7 g-py-0">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="<?php $this->options->siteUrl(); ?>" class="navbar-brand">
              <img src="https://www.raincai.com/usr/themes/pinghsu/yuchewang.png" style="height: 48px;" alt="Image Description">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
              <ul class="navbar-nav text-uppercase g-font-weight-400">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
                <li class="nav-item g-mx-20--lg <?php if($this->is('index')){echo "active";}?>"><a href="<?php $this->options->siteUrl(); ?>" class="nav-link px-0">首页</a></li>
                <li class="nav-item g-mx-20--lg "><a class="nav-link px-0" href="<?php $this->options->siteUrl(); ?>index.php/tag/38cheping/" title="38车评中心">38车评中心</a>
                <li class="nav-item g-mx-20--lg"><a class="nav-link px-0" href="<?php $this->options->siteUrl(); ?>index.php/tag/1364/" title="大家车言论">大家车言论</a>
                <li class="nav-item g-mx-20--lg"><a class="nav-link px-0" href="<?php $this->options->siteUrl(); ?>index.php/tag/1439/" title="美女">美女</a>
                <li class="nav-item g-mx-20--lg"><a class="nav-link px-0" href="<?php $this->options->siteUrl(); ?>index.php/tag/1369/" title="美女">新车评</a>
              
              </ul>

            </div>
            <!-- End Navigation -->
            <div class="d-inline-block g-pos-rel g-valign-middle g-ml-30 g-ml-0--lg fr">
              <a href="#!" class="g-font-size-18 g-color-white" aria-haspopup="true" aria-expanded="false" aria-controls="searchform-1" data-dropdown-target="#searchform-1" data-dropdown-type="css-animation" data-dropdown-duration="300" data-dropdown-animation-in="fadeInUp" data-dropdown-animation-out="fadeOutDown">
                <i class="fa fa-search"></i>
              </a>

              <!-- Search Form -->
              <form id="searchform-1" method="post" action="./" role="search" class="u-searchform-v1 u-dropdown--css-animation g-bg-white g-pa-10 g-mt-25--lg g-mt-20--lg--scrolling fadeInUp" style="animation-duration: 300ms; right: -15px;">
                <div class="input-group g-brd-primary--focus">
                  <input class="form-control rounded-0 u-form-control" type="search" name="s" placeholder="站内搜索">

                  <div class="input-group-addon p-0">
                    <button class="btn rounded-0 btn-primary btn-md g-font-size-14 g-px-18" type="submit">Go</button>
                  </div>
                </div>
              </form>
              <!-- End Search Form -->
            </div>

          </div>
        </nav>
      </div>
    </header>