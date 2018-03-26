<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
    <style>
        .Page ul li {
            float: left;
        }

    </style>
    <section class="g-bg-gray-light-v5 g-pt-55 g-pb-45" style="margin-top: 4.71rem;">
        <div class="container text-left">
            <div class="shortcode-html">
                <!-- Simple Colored -->
                <ul class="u-list-inline">
                    <?php $tagList = getIntTag(); foreach($tagList as $k=>$v){?>
                    <li class="list-inline-item g-mb-10"><a class="u-tags-v1 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover g-py-4 g-px-10" href="/tag/<?php echo $k; ?>" title="<?php echo $v;?>"><?php echo $v;?></a></li>
                    <?php } ?>
                   
                </ul>

                <!-- End Simple Colored -->
            </div>
        </div>
    </section>
    <div class="container g-pt-30 g-pb-30">
        <div class="d-sm-flex text-center g-mb-30">
            <div class="align-self-center mr-auto">
                <ul class="u-list-inline">
                    <li class="list-inline-item g-mr-5">
                        <a class="u-link-v5 g-color-main" href="/">Home</a>
                        <i class="fa fa-angle-right g-ml-7"></i>
                    </li>
                    <li class="list-inline-item g-mr-5">
                        <a class="u-link-v5 g-color-main" href="javascript:;"><?php $this->archiveTitle(array(
                                'category'  =>  _t('%s'),
                                'search'    =>  _t('%s'),
                                'tag'       =>  _t('%s')
                            ), '', ''); ?></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-between">
            <!-- Blog Minimal Blocks -->
            <?php if ($this->have()): ?>
                <?php while ($this->next()): ?>
                    <div class="col-6 col-md-4 col-lg-3 g-mb-30">
                        <article>
                            <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                <img class="img-fluid w-100" src="<?php $this->thumb_url(); ?>" alt="<?php $this->title();?>" title="<?php $this->title(); ?>">

                                <figcaption class="g-pos-abs g-top-10 g-left-10">
                                    <span class="btn btn-xs u-btn-black text-uppercase rounded-0" style="opacity: 0.58"> <?php $this->duration(); ?>分</span>
                                </figcaption>
                                <a href="<?php $this->permalink(); ?>" class="u-icon-v3 u-icon-size--sm g-font-size-13 g-bg-white g-bg-black--hover g-color-white--hover rounded-circle g-cursor-pointer g-absolute-centered">
                                    <i class="fa fa-play g-left-2"></i>
                                </a>
                            </figure>

                            <h3 class="g-font-size-16 g-mb-10">
                                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" title="<?php $this->title(); ?>" href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
                            </h3>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- End Blog Minimal Blocks -->
        </div>
    </div>
    <!-- Pagination -->
    <div class="container g-pb-100">
        <nav aria-label="Page Navigation" id="page" class="text-center">
            <?php $this->pageNav('Previous', 'Next', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'list-inline mb-0', 'itemTag' => 'li', 'textTag' => 'n', 'currentClass' => 'active', 'prevClass' => '2', 'nextClass' => '3')); ?>
        </nav>
    </div>
    <!-- End Pagination -->

<?php $this->need("footer.php") ?>