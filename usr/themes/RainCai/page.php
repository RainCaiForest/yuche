<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<section class="g-pt-50 g-pb-100">
    <div class="container">
        <div class="row">
            <!-- Articles Content -->
            <div class="col-lg-12 g-mb-50 g-mb-0--lg">
                <article class="g-mb-60">
                    <header class="g-mb-30">
                        <h2 class="h1 g-mb-15"><?php $this->title() ?></h2>

                        <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                            <li class="list-inline-item">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">Mike Coolman</a>
                            </li>
                            <li class="list-inline-item g-mx-10">/</li>
                            <li class="list-inline-item">
                                July 20, 2017
                            </li>
                            <li class="list-inline-item g-mx-10">/</li>
                            <li class="list-inline-item g-mr-10">
                                <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i> 24
                                </a>
                            </li>
                            <li class="list-inline-item ml-auto">
                                <i class="icon-eye u-line-icon-pro align-middle mr-1"></i> Views 3821
                            </li>
                        </ul>

                        <hr class="g-brd-gray-light-v4 g-my-15">

                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item g-mr-10">
                                <strong class="align-middle g-font-size-24">423</strong>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <span class="g-color-gray-dark-v5">|</span>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                    <i class="fa fa-facebook g-mr-5--sm"></i> <span class="g-hidden-xs-down">Share on Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                    <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#!">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </header>

                    <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
                        <?php $this->content(); ?>
                        <figure class="u-shadow-v25 g-mb-30">
                            <img class="img-fluid w-100" src="assets/img-temp/900x600/img1.jpg" alt="Image Description">
                        </figure>

                        <p class="g-color-gray-dark-v2">Aliquam ante ipsum, maximus in orci ut, blandit aliquam ipsum. Phasellus sed tortor non magna lobortis faucibus. Mauris pharetra convallis urna, eu porttitor velit pretium eget. Vestibulum vehicula quis felis eget imperdiet. Sed vulputate tincidunt facilisis. Morbi eu suscipit dolor. Quisque nec turpis quis ante gravida placerat non at turpis. Phasellus tincidunt nisi eget posuere porta.</p>

                        <div class="text-center g-width-70x--md mx-auto g-my-40">
                            <h3 class="text-uppercase g-color-primary">If you can design one thing, you can design everything. Just believe it.</h3>
                        </div>

                        <p class="g-color-gray-dark-v2">Consectetur adipiscing elit. In risus neque, semper sed congue eget, ultricies et tortor. Duis lorem libero, dapibus lacinia tellus id, pulvinar rutrum diam. Cras tempor lectus quis erat facilisis, a commodo mi volutpat. Sed vitae libero libero. Vestibulum non leo lobortis, placerat est a, laoreet mauris. Aenean vitae erat interdum, dignissim tellus quis, pellentesque libero. Nullam feugiat magna non justo sodales mattis. Phasellus mattis velit justo, non hendrerit felis tincidunt vitae. In at mi finibus, finibus sem dictum, convallis libero. In condimentum euismod nunc id dapibus. Praesent sagittis posuere felis et viverra. Mauris eros dui, malesuada nec risus nec, placerat porta sem.</p>

                        <p class="g-color-gray-dark-v2">Cras sit amet mi eros. Pellentesque auctor, massa at laoreet lobortis, mi lorem commodo enim, non mollis arcu erat ac augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris maximus enim in mauris ornare bibendum. Cras bibendum, nibh non interdum lacinia, sem augue convallis nibh, sit amet eleifend lacus felis quis turpis. Suspendisse potenti.</p>

                        <figure class="text-center text-md-left float-md-left g-pr-30--sm g-py-20 mb-0">
                            <img class="u-shadow-v25 img-fluid g-width-300" src="assets/img-temp/500x650/img1.jpg" alt="Image Description">
                            <figcaption class="figure-caption g-font-size-12 g-color-gray-dark-v4 g-mt-5">
                                <em>A caption for the above image.</em>
                            </figcaption>
                        </figure>

                        <p class="g-color-gray-dark-v2">Proin laoreet massa vitae pulvinar accumsan. Aenean auctor ipsum mauris, et sodales odio tristique non. Quisque eget diam a mi condimentum ullamcorper imperdiet sed urna. Pellentesque cursus convallis blandit. Mauris lorem eros, consequat et rutrum id, vestibulum quis felis. Proin non mollis eros. Curabitur vel laoreet mauris.</p>

                        <p class="g-color-gray-dark-v2">Curabitur dolor elit, egestas eget lectus vel, pretium semper tellus. Nunc urna lectus, vulputate ut tellus aliquam, pharetra consectetur enim. Nunc scelerisque libero diam, nec tempor justo hendrerit eu. Donec sed diam mattis, ullamcorper eros eu, aliquam dui. Maecenas rutrum suscipit risus sed posuere. Vestibulum imperdiet turpis mauris, sit amet consectetur ex porttitor ut. Duis sit amet auctor nunc. Praesent ultrices, enim a varius condimentum, nunc elit rhoncus ligula, quis fringilla risus augue sit amet enim. Mauris et porttitor diam. In semper volutpat mauris, ac fermentum orci commodo vitae. Curabitur ut feugiat tellus. Quisque consequat pharetra massa ultricies auctor. Sed mollis vulputate sapien eget tincidunt. Curabitur tempus lacus a sapien rutrum, feugiat blandit nunc tincidunt. Donec nec ornare tellus nunc elit rhoncus ligula.</p>

                        <p class="g-color-gray-dark-v2">In neque ipsum, auctor eu bibendum cursus, fringilla sed magna. Vestibulum lobortis libero et lectus congue efficitur. Suspendisse varius varius finibus. Maecenas luctus convallis euismod.</p><br>

                        <h3 class="h5 g-color-gray-dark-v1 g-font-weight-600 g-mb-10">Unify Template v2</h3>

                        <p class="g-color-gray-dark-v2">Praesent ultrices, enim a varius condimentum, nunc elit rhoncus ligula, quis fringilla risus augue sit amet enim. Curabitur dolor elit, egestas eget lectus vel, pretium semper tellus. Nunc urna lectus, vulputate ut tellus aliquam, pharetra consectetur enim. Nunc scelerisque libero diam, nec tempor justo hendrerit eu. Donec sed diam mattis, ullamcorper eros eu, aliquam dui. Maecenas rutrum suscipit risus sed posuere. Vestibulum imperdiet turpis mauris, sit amet consectetur ex porttitor ut. Duis sit amet auctor nunc.</p>

                        <div class="g-width-70x--md g-my-40">
                            <blockquote class="blockquote g-brd-left g-brd-2 g-brd-gray-light-v4 g-brd-primary--hover text-uppercase g-font-size-22 g-transition-0_2 g-pl-20 g-mb-30">
                                <p class="g-color-primary">The best ideas come as jokes. Make your thinking as funny as possible and use them in your projects.</p>
                                <footer class="blockquote-footer g-font-size-12">John Doe</footer>
                            </blockquote>
                        </div>

                        <p class="g-color-gray-dark-v2">Adipiscing elit, in risus neque, semper sed congue eget, ultricies et tortor. Duis lorem libero, dapibus lacinia tellus id, pulvinar rutrum diam. Cras tempor lectus quis erat facilisis, a commodo mi volutpat. Sed vitae libero libero. Vestibulum non leo lobortis, placerat est a, laoreet mauris. Aenean vitae erat interdum, dignissim tellus quis, pellentesque libero. Nullam feugiat magna non justo sodales mattis. Phasellus mattis velit justo, non hendrerit felis tincidunt vitae. In at mi finibus, finibus sem dictum, convallis libero. In condimentum euismod nunc id dapibus. Praesent sagittis posuere felis et viverra. Mauris eros dui, malesuada nec risus nec, placerat porta sem. Suspendisse id quam in ante lobortis fringilla. Aenean euismod ante eget  auctor fringilla. Morbi consequat ut felis a scelerisque. Aliquam purus sem, rutrum sit amet ligula a, tristique porttitor mauris.</p>

                        <figure class="text-center g-my-40">
                            <img class="u-shadow-v25 img-fluid" src="assets/img-temp/430x270/img1.jpg" alt="Image Description">
                            <figcaption class="figure-caption g-font-size-12 g-color-gray-dark-v4 g-mt-5">
                                <em>A caption for the above image.</em>
                            </figcaption>
                        </figure>

                        <p class="g-color-gray-dark-v2">Curabitur dolor elit, egestas eget lectus vel, pretium semper tellus. Nunc urna lectus. Vulputate ut tellus aliquam, pharetra consectetur enim. Nunc scelerisque libero diam, nec tempor justo hendrerit eu. Donec sed diam mattis, ullamcorper eros eu, aliquam dui. Maecenas rutrum suscipit risus sed posuere. Vestibulum imperdiet turpis mauris, sit amet consectetur ex porttitor ut. Duis sit amet auctor nunc.</p><br>

                        <h3 class="h5 g-color-gray-dark-v1 g-font-weight-600 g-mb-10">Now and Future</h3>

                        <p class="g-color-gray-dark-v2">Praesent sagittis posuere felis et viverra. Mauris eros dui, malesuada nec risus nec, placerat porta sem. Suspendisse id quam in ante lobortis fringilla. Aenean euismod ante eget auctor fringilla. Morbi consequat ut felis a scelerisque. Aliquam purus sem, rutrum sit amet ligula a, tristique porttitor mauris.</p>

                        <ul class="list-unstyled g-font-size-16 g-my-30">
                            <li class="g-mb-15">
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Wrapbootstrap Marketplace egestas eget lectus vel, pretium semper tellus</span>
                                </h4>
                            </li>
                            <li class="g-mb-15">
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Google Adwords &amp; Adsense purus sem, rutrum sit amet ligula a, tristique port</span>
                                </h4>
                            </li>
                            <li class="g-mb-15">
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Web Design with UX/UI enim a varius condimentum, nunc elit rhoncus</span>
                                </h4>
                            </li>
                            <li class="g-mb-15">
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Digital Marketing scelerisque libero diam, nec tempor justo hendreri</span>
                                </h4>
                            </li>
                            <li class="g-mb-15">
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Support Forum &amp; Community rutrum suscipit risus sed posuere</span>
                                </h4>
                            </li>
                            <li>
                                <h4 class="h6 d-flex align-items-baseline">
                                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-10"></i>
                                    <span>Unify Template Pages eros duiesuada nec risus nec, placerat porta sem</span>
                                </h4>
                            </li>
                        </ul>

                        <p class="g-color-gray-dark-v2">Praesent ultrices, enim a varius condimentum, nunc elit rhoncus ligula, quis fringilla risus augue sit amet enim. Curabitur dolor elit, egestas eget lectus vel, pretium semper tellus. Nunc urna lectus, vulputate ut tellus aliquam, pharetra consectetur enim. Nunc scelerisque libero diam, nec tempor justo hendrerit eu.</p>

                        <div class="text-center g-width-70x--md mx-auto g-my-40">
                            <h3 class="text-uppercase g-color-primary">Finding ways to help tell your story through video is a powerful tool.</h3>
                        </div>

                        <p class="g-color-gray-dark-v2">Mauris et porttitor diam. In semper volutpat mauris, ac fermentum orci commodo vitae. Curabitur ut feugiat tellus. Quisque consequat pharetra massa ultricies auctor. Sed mollis vulputate sapien eget tincidunt. Curabitur tempus lacus a sapien rutrum, feugiat blandit nunc tincidunt. Donec nec ornare tellus. In neque ipsum, auctor eu bibendum cursus, fringilla sed magna. Vestibulum lobortis libero et lectus congue efficitur. Suspendisse varius varius finibus. Maecenas luctus convallis euismod. Praesent ultrices, enim a varius condimentum, nunc elit rhoncus ligula, quis fringilla risus augue sit amet enim.</p>
                    </div>

                    <!-- Sources & Tags -->
                    <div class="g-mb-30">
                        <h6 class="g-color-gray-dark-v1 g-mb-15">
                            <strong class="g-mr-5">Source:</strong> <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">The Next Web (TNW)</a>
                        </h6>
                        <h6 class="g-color-gray-dark-v1">
                            <strong class="g-mr-5">Tags:</strong>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">Business</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">SaaS</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">Web Design</a>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5" href="#!">IT</a>
                        </h6>
                    </div>
                    <!-- End Sources & Tags -->

                    <hr class="g-brd-gray-light-v4">

                    <!-- Social Shares -->
                    <div class="g-mb-30">
                        <ul class="list-inline text-uppercase mb-0">
                            <li class="list-inline-item g-mr-10">
                                <strong class="align-middle g-font-size-24">423</strong>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <span class="g-color-gray-dark-v5">|</span>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                    <i class="fa fa-facebook g-mr-5--sm"></i> <span class="g-hidden-xs-down">Share on Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item g-mr-10">
                                <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#!">
                                    <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#!">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Shares -->

                    <hr class="g-brd-gray-light-v4 g-mb-40">

                    <!-- Related Articles -->
                    <div class="g-mb-40">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Related Articles</h2>
                        </div>

                        <div class="row">
                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-30">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img2.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-blue text-uppercase rounded-0" href="#!">Spa</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Clark Valberg is a new CEO of InVision..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-30">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img3.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#!">Internet</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">How to run a ticket: Best 10 point..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-30">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img8.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="#!">Support</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Skyscrapers from blocking sunlight..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img15.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0" href="#!">Coworking</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Architects plan to from blocking out sunlight..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img12.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-indigo text-uppercase rounded-0" href="#!">Finance</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cooltex is one of the best technology company..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->

                            <!-- Article Video -->
                            <div class="col-lg-4 col-sm-6">
                                <article>
                                    <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                                        <img class="img-fluid w-100" src="assets/img-temp/400x270/img13.jpg" alt="Image Description">

                                        <figcaption class="g-pos-abs g-top-10 g-left-10">
                                            <a class="btn btn-xs u-btn-brown text-uppercase rounded-0" href="#!">Meeting</a>
                                        </figcaption>
                                    </figure>

                                    <h3 class="g-font-size-16 g-mb-10">
                                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Cameron's silence on defence is shameful..</a>
                                    </h3>
                                </article>
                            </div>
                            <!-- End Article Video -->
                        </div>
                    </div>

                    <!-- Author Block -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">About The Author</h2>
                        </div>

                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                            <img class="d-flex u-shadow-v25 g-width-80 g-height-80 rounded-circle g-mr-15" src="assets/img-temp/100x100/img8.jpg" alt="Image Description">

                            <div class="media-body">
                                <h4 class="g-color-gray-dark-v1 g-mb-15">
                                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#!">Marina Olsson</a>
                                </h4>

                                <div class="g-mb-15">
                                    <p class="g-color-gray-dark-v2">About my site amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at.</p>
                                </div>

                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item g-mr-10">
                                        <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mr-10">
                                        <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mr-10">
                                        <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle" href="#!">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Author Block -->

                    <!-- Comments -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">24 Comments</h2>
                        </div>

                        <!-- Comment 1 -->
                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                            <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="assets/img-temp/100x100/img9.jpg" alt="Image Description">

                            <div class="media-body">
                                <div class="g-mb-15">
                                    <h5 class="d-flex justify-content-between align-items-center g-font-size-16 g-color-gray-dark-v1 mb-0">
                                        <span class="d-block g-mr-10">James Coolman</span>
                                        <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15" href="#!">Author</a>
                                    </h5>
                                    <span class="g-color-gray-dark-v4 g-font-size-12">2 days ago</span>
                                </div>

                                <div class="g-mb-15">
                                    <p class="g-color-gray-dark-v2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>

                                <ul class="list-inline d-sm-flex my-0">
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 214
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 35
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Comment 1 -->

                        <!-- Comment 2 -->
                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-ml-40 g-mb-20">
                            <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="assets/img-temp/100x100/img10.jpg" alt="Image Description">

                            <div class="media-body">
                                <div class="g-mb-15">
                                    <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">Alberta Watson</h5>
                                    <span class="g-color-gray-dark-v4 g-font-size-12">3 days ago</span>
                                </div>

                                <div class="g-mb-15">
                                    <p class="g-color-gray-dark-v2">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>

                                <ul class="list-inline d-sm-flex my-0">
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 637
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 12
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Comment 2 -->

                        <!-- Comment 3 -->
                        <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                            <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15" src="assets/img-temp/100x100/img11.jpg" alt="Image Description">

                            <div class="media-body">
                                <div class="g-mb-15">
                                    <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">David Lee</h5>
                                    <span class="g-color-gray-dark-v4 g-font-size-12">4 days ago</span>
                                </div>

                                <div class="g-mb-15">
                                    <p class="g-color-gray-dark-v2">Sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                </div>

                                <ul class="list-inline d-sm-flex my-0">
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 192
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mr-20">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 87
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Comment 3 -->

                        <div class="text-center g-mt-30">
                            <a class="btn u-btn-outline-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#!">
                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Load More Comments
                            </a>
                        </div>
                    </div>
                    <!-- Comments -->

                    <!-- Add Comment -->
                    <div class="g-mb-60">
                        <div class="u-heading-v3-1 g-mb-30">
                            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Add a Comment</h2>
                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group g-mb-30">
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="text" placeholder="Your Name">
                                </div>

                                <div class="col-md-6 form-group g-mb-30">
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15" type="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="g-mb-30">
                                <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-pa-15" rows="12" placeholder="Your Message"></textarea>
                            </div>

                            <a class="btn u-btn-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#!">
                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i> Add a Comment
                            </a>
                        </form>
                    </div>
                    <!-- End Add Comment -->
                </article>

                <div id="stickyblock-end"></div>
            </div>
            <!-- End Articles Content -->

            <!-- Sidebar -->

            <!-- End Sidebar -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="g-bg-secondary">



<?php $this->need("footer.php") ?>

        