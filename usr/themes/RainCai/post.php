<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<section class="g-pt-130 g-pb-80">
    <div class="container">
        <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-12 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h2 g-mb-15"><?php $this->title() ?></h2>
                        <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                            <li class="list-inline-item">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></a>
                            </li>
                            <li class="list-inline-item g-mx-10">/</li>
                            <li class="list-inline-item">
                                发布时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
                            </li>
                            <!-- <li class="list-inline-item g-mx-10">/</li> -->
                            <!-- <li class="list-inline-item g-mr-10">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 24
                                </a>
                            </li> -->
                            <li class="list-inline-item ml-auto">
                                <i class="icon-eye u-line-icon-pro align-middle mr-1"></i> <?php Views_Plugin::theViews("",""); ?>
                            </li>
                        </ul>

                        <hr class="g-brd-gray-light-v4 g-my-15">

<!--                        <ul class="list-inline text-uppercase mb-0">-->
<!--                            <li class="list-inline-item g-mr-10">-->
<!--                                <strong class="align-middle g-font-size-24">423</strong>-->
<!--                            </li>-->
<!--                            <li class="list-inline-item g-mr-10">-->
<!--                                <span class="g-color-gray-dark-v5">|</span>-->
<!--                            </li>-->
<!--                            <li class="list-inline-item g-mr-10">-->
<!--                                <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">-->
<!--                                    <i class="fa fa-facebook g-mr-5--sm"></i> <span class="g-hidden-xs-down">Share on Facebook</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="list-inline-item g-mr-10">-->
<!--                                <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">-->
<!--                                    <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="list-inline-item">-->
<!--                                <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#!">-->
<!--                                    <i class="fa fa-pinterest"></i>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
                    </header>

                    <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                        <iframe height=600 width=100% src='https://player.youku.com/embed/<?php $this->videoId(); ?>' frameborder=0 'allowfullscreen'></iframe>
                    </div>

                    <!-- Sources & Tags -->
                    <div class="g-mb-30">
                        <h6 class="g-color-gray-dark-v1 g-mb-15">
                            上：<?php $this->thePrev('%s','没有了'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 下：<?php $this->theNext('%s','没有了'); ?>
                        </h6>
                        <h6 class="g-color-gray-dark-v1">
                            <strong class="g-mr-5">Tags:</strong>
                            <?php $this->tags(', ', true); ?>
                        </h6>
                    </div>
                    <!-- End Sources & Tags -->



                    <hr class="g-brd-gray-light-v4 g-mb-40">

                    <!-- Related Articles -->
                    <div class="g-mb-40">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">相关文章</h2>
                        </div>

                        <div class="row">
                            <!-- Article Video -->
                            <?php $this->related(4)->to($obj);?>
                            <?php if($obj->have()){?>
                                <?php while($obj->next()):?>
                                    <div class="col-lg-3 col-sm-6 g-mb-30">
                                        <article>
                                            <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                                <img class="img-fluid w-100" src="<?php $obj->thumb_url();?>" alt="Image Description">
                                                <figcaption class="g-pos-abs g-top-10 g-left-10">
                                                    <span class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!"><?php $obj->duration(); ?></span>
                                                </figcaption>
                                            </figure>

                                            <h3 class="g-font-size-16 g-mb-10">
                                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="<?php $obj->permalink();?>"><?php $obj->title();?></a>
                                            </h3>
                                        </article>
                                    </div>
                                <?php endwhile; ?>
                            <?php }?>
                            <!-- End Article Video -->
                        </div>
                    </div>
                    <hr class="g-brd-gray-light-v4 g-my-15">
                </article>

            </div>
            <!-- End Articles Content -->
        </div>
    </div>

</section>


<?php $this->need('footer.php'); ?>
