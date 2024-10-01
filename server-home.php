<?php

/* Template Name: Home */

$theme_path = get_stylesheet_directory_uri();

get_header();
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='max-image-preview:large' />
    <title>Yogamu | Your Journey to Inner Peace and Well-being</title>
    <!-- Sets the canonical URL to avoid duplicate content issues -->
    <link rel="canonical" href="#" />
    <meta name="description"
        content="Discover peace, strength, and balance through Yogamu's guided yoga and meditation classes for holistic well-being.">
    <meta name="keywords"
        content="Yoga, Mindfulness, Meditation, Wellness, Spiritual Growth, Yoga Classes, Fitness, Inner Peace, Holistic Health">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- confiq file -->
    <script src="<?php echo $theme_path; ?>/assets/js/tailwindlocal.js"></script>
    <script src="<?php echo $theme_path; ?>/assets/js/tailwind.config.js"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo $theme_path; ?>/assets/styles/index.css">

    <style>
        /*  "Varela"  */
        @font-face {
            font-family: "Varela";
            src: url("<?php echo $theme_path; ?>/assets/fonts/varela/Varela-Regular.ttf");
        }

        /*  "Lato"  */
        @font-face {
            font-family: "Lato";
            src: url("<?php echo $theme_path; ?>/assets/fonts/Lato/Lato-Light.ttf");
            font-weight: 300;
        }

        @font-face {
            font-family: "Lato";
            src: url("<?php echo $theme_path; ?>/assets/fonts/Lato/Lato-Regular.ttf");
            font-weight: 400;
        }

        @font-face {
            font-family: "Lato";
            src: url("<?php echo $theme_path; ?>/assets/fonts/Lato/Lato-Bold.ttf");
            font-weight: 700;
        }

        @font-face {
            font-family: "Lato";
            src: url("<?php echo $theme_path; ?>/assets/fonts/Lato/Lato-Black.ttf");
            font-weight: 900;
        }

        .slick-prev:before,
        .slick-next:before {
            display: none !important;
        }

        .slick-slide {
            margin: 0 12px !important;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .slick-prev,
        .slick-next {
            width: 52px !important;
        }

        .slick-prev {
            left: 0% !important;
        }
    </style>
</head>

<body>
    <!-- Hero section -->
    <section
        class="min-h-screen flex items-center bg-[url(<?php echo $theme_path; ?>/assets/image/png&jpg/hero-banner1.jpg)] bg-center bg-cover bg-no-repeat">
        <div class="container">
            <div class="max-w-xl lg:mx-0 lg:flex-auto space-y-6">
                <h1
                    class="font-varela font-black text-6xl tracking-sm text-black/75 before:content-['Online'] relative before:absolute before:top-0 before:text-primary before:font-light before:mb-4">
                    <br>
                    Yoga Classes
                </h1>
                <p class="font-lato font-normal text-xl text-black/60">Yoka
                    is the
                    most popular
                    online yoga classes,
                    trusted
                    by 100,000+ customers.</p>
                <div class="pt-4">
                    <a href="#Getstarted"
                        class="font-varela text-base font-bold leading-6 text-white hover:text-primary bg-primary border border-primary py-3 px-10 rounded-full hover:bg-transparent duration-300 max-md:block text-center">Get
                        started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="container">
            <div class="flex flex-wrap justify-center gap-y-4 -mx-3 items-start">
                <div class="md:w-1/2 xl:w-1/3 2xl:w-1/4 px-3">
                    <div
                        class="group h-full p-4 md:p-6 flex flex-col md:flex-row items-start gap-6 border border-secondary hover:border-primary duration-300 rounded-xl">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="49" viewBox="0 0 29 34"
                                fill="none">
                                <path d="M5.17529 22.7319C7.72686 23.9922 16.1979 25.7566 23.5463 22.7319"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M15.0306 18.0656C15.0306 18.4357 14.7306 18.7357 14.3605 18.7357C13.9904 18.7357 13.6904 18.4357 13.6904 18.0656C13.6904 17.6955 13.9904 17.3955 14.3605 17.3955C14.7306 17.3955 15.0306 17.6955 15.0306 18.0656Z"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2">
                                </path>
                                <path
                                    d="M2.67001 1.02051C4.21969 3.75776 6.82103 9.58601 6.84525 15.2163C6.85268 16.9404 6.5792 18.6459 6.00978 20.2384C4.49167 24.4842 2.21449 26.9423 1.83496 32.7523"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M26.0514 1.02051C24.5017 3.75776 21.9003 9.58601 21.8761 15.2163C21.8687 16.9404 22.1422 18.6459 22.7116 20.2384C24.2297 24.4842 26.5069 26.9423 26.8864 32.7523"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M1 11.876C1 11.876 1.83505 13.5461 1.83505 15.2162C1.83505 16.5608 1 18.5564 1 18.5564"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M27.7218 11.876C27.7218 11.876 26.8867 13.5461 26.8867 15.2162C26.8867 16.5608 27.7218 18.5564 27.7218 18.5564"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-varela font-bold text-lg text-black/75">
                                Support &amp; Motivation
                            </h4>
                            <p class="font-lato font-normal text-base text-black/60">
                                We feel greatly
                                happy
                                with what learners can do to be healthy and peaceful in mind.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 xl:w-1/3 2xl:w-1/4 px-3">
                    <div
                        class="group h-full p-4 md:p-6 flex flex-col md:flex-row items-start gap-6 border border-secondary hover:border-primary duration-300 rounded-xl">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="54" viewBox="0 0 35 39"
                                fill="none">
                                <path
                                    d="M9.95359 15.8247C11.1947 18.3523 12.5191 20.7188 12.2152 23.6299C11.7249 28.2851 6.08175 30.0365 2.47045 32.1805C0.105731 33.5863 0.990463 37.5359 3.89253 37.5359C7.40975 37.5359 10.5506 37.2555 13.7259 35.7629L19.9498 31.9326C20.8146 31.5256 21.9038 31.6992 22.8247 32.1081"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M24.6517 15.8247C23.3852 18.3523 22.0319 20.7188 22.3449 23.6299C22.8443 28.2852 28.6086 30.0366 32.2941 32.1806C34.7077 33.5864 33.8048 37.536 30.8431 37.536C27.2498 37.536 24.042 37.2556 20.8016 35.7629L14.4438 31.9327C13.702 31.5907 12.7974 31.6595 11.9688 31.9327M13.778 4.96913C13.778 5.92882 14.1593 6.84921 14.8379 7.52782C15.5165 8.20643 16.4369 8.58767 17.3966 8.58767C18.3563 8.58767 19.2766 8.20643 19.9553 7.52782C20.6339 6.84921 21.0151 5.92882 21.0151 4.96913C21.0151 4.00943 20.6339 3.08904 19.9553 2.41043C19.2766 1.73182 18.3563 1.35059 17.3966 1.35059C16.4369 1.35059 15.5165 1.73182 14.8379 2.41043C14.1593 3.08904 13.778 4.00943 13.778 4.96913Z"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M1.11328 26.6802C5.53876 26.6802 7.52533 21.7861 8.15677 18.4119C8.32322 17.5289 8.59099 16.6514 9.17539 15.9712C10.1938 14.7886 11.4557 13.84 12.8746 13.1902C14.2935 12.5404 15.8361 12.2047 17.3967 12.2061C20.6823 12.2061 23.6278 13.6661 25.618 15.9712C26.2024 16.6514 26.4702 17.5289 26.6367 18.41C27.2699 21.7861 29.2547 26.6802 33.6801 26.6802"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-varela font-bold text-lg text-black/75">
                                Experience Trainers
                            </h4>
                            <p class="font-lato font-normal text-base text-black/60">
                                We feel greatly
                                happy
                                with what learners can do to be healthy and peaceful in mind.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 xl:w-1/3 2xl:w-1/4 px-3">
                    <div
                        class="group h-full p-4 md:p-6 flex flex-col md:flex-row items-start gap-6 border border-secondary hover:border-primary duration-300 rounded-xl">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="45" viewBox="0 0 33 45"
                                fill="none">
                                <path
                                    d="M16.5 45C11.913 45 8.01625 43.3756 4.80975 40.1269C1.60325 36.8782 0 32.9301 0 28.2827C0 24.4544 1.13942 21.0422 3.41825 18.0461C5.69708 15.05 8.66983 13.0736 12.3365 12.117C11.0367 11.8533 9.878 11.3434 8.8605 10.5874C7.843 9.83142 7.00883 8.88782 6.358 7.75661C5.70717 6.62541 5.21675 5.40318 4.88675 4.08995C4.55675 2.77671 4.41375 1.41611 4.45775 0.00813616C6.01975 -0.0457307 7.5075 0.167879 8.921 0.648966C10.3345 1.13191 11.6059 1.8489 12.7352 2.79993C13.8627 3.7491 14.7849 4.8543 15.5018 6.11553C16.2204 7.37676 16.6357 8.78844 16.7475 10.3506C17.3085 8.98162 18.029 7.64238 18.909 6.33285C19.789 5.02333 20.9953 3.59214 22.528 2.03929L24.475 4.00915C22.9973 5.50628 21.8506 6.86224 21.0348 8.07703C20.2189 9.29182 19.5745 10.5419 19.1015 11.8273C23.1348 12.4495 26.4596 14.3154 29.0757 17.4248C31.6919 20.5342 33 24.1535 33 28.2827C33 32.9301 31.3967 36.8782 28.1902 40.1269C24.9837 43.3756 21.087 45 16.5 45ZM16.5 42.2138C20.3042 42.2138 23.5473 40.855 26.2295 38.1375C28.9117 35.4201 30.2518 32.1351 30.25 28.2827C30.2482 24.4303 28.9071 21.1453 26.2267 18.4278C23.5464 15.7103 20.3042 14.3516 16.5 14.3516C12.6958 14.3516 9.45358 15.7103 6.77325 18.4278C4.09292 21.1453 2.75183 24.4303 2.75 28.2827C2.74817 32.1351 4.08925 35.421 6.77325 38.1403C9.45725 40.8597 12.6995 42.2175 16.5 42.2138Z"
                                    class="fill-secondary group-hover:fill-primary duration-300"></path>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-varela font-bold text-lg text-black/75">
                                Right Nutrition
                            </h4>
                            <p class="font-lato font-normal text-base text-black/60">
                                We feel greatly
                                happy
                                with what learners can do to be healthy and peaceful in mind.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 xl:w-1/3 2xl:w-1/4 px-3">
                    <div
                        class="group h-full p-4 md:p-6 flex flex-col md:flex-row items-start gap-6 border border-secondary hover:border-primary duration-300 rounded-xl">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="52" viewBox="0 0 41 42"
                                fill="none">
                                <path
                                    d="M37.9691 30.5835C35.9055 34.3889 32.6325 37.3979 28.6674 39.1347C24.7022 40.8716 20.2713 41.2372 16.0751 40.1738C11.8789 39.1104 8.15691 36.6786 5.49755 33.263C2.83819 29.8473 1.39323 25.6427 1.39112 21.3138C1.38901 16.985 2.82987 12.7789 5.4859 9.36071C8.14193 5.94246 11.8616 3.50706 16.0567 2.43956C20.2519 1.37206 24.6832 1.73336 28.65 3.46635C32.6168 5.19934 35.8928 8.20513 37.96 12.0085"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.7296 21.3054L16.9595 14.5059V28.1049L28.7296 21.3054Z"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M37.9693 19.6485C39.0909 19.6485 40.0001 18.7393 40.0001 17.6177C40.0001 16.4961 39.0909 15.5869 37.9693 15.5869C36.8477 15.5869 35.9385 16.4961 35.9385 17.6177C35.9385 18.7393 36.8477 19.6485 37.9693 19.6485Z"
                                    class="stroke-secondary group-hover:stroke-primary duration-300" stroke="#6F948D"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <div>
                            <h4 class="font-varela font-bold text-lg text-black/75">
                                Online Courses
                            </h4>
                            <p class="font-lato font-normal text-base text-black/60">
                                We feel greatly
                                happy
                                with what learners can do to be healthy and peaceful in mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- best sellers -->
    <section class="py-12 md:py-16">
        <div class="container px-6 mx-auto">
            <div class="md:flex gap-6 justify-between md:items-center mb-12  lg:text-start">
                <h2 class="font-varela font-bold text-3xl text-black/75 capitalize">
                    best <span class="text-primary"> sellers </span>
                </h2>
                <a href="#seemore"
                    class="font-varela text-base font-bold leading-6 text-white hover:text-primary bg-primary border border-primary py-3 px-10 rounded-full hover:bg-transparent duration-300 max-md:block text-center">See
                    More</a>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 justify-center gap-6">
                <?php
                $args = array(
                    'post_type' => 'product',
                );
                $products = new WP_Query($args);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        global $product;
                ?>
                        <div class="max-w-[400px] md:max-w-full">
                            <a href="<?php echo get_permalink(); ?>" class="min-h-full">
                                <?php
                                $product_image_url = wp_get_attachment_image_url($product->get_image_id(), 'full');
                                ?>
                                <img width="100%" height="100%" loading="lazy" class="w-full rounded-xl"
                                    src="<?php echo esc_url($product_image_url); ?>"
                                    alt="<?php echo esc_attr($product->get_name()); ?>" />
                            </a>
                            <div
                                class="bg-white shadow-md rounded-xl max-w-[380px] mx-auto p-6 relative -translate-y-1/4 space-y-2">
                                <h4 class="font-varela font-bold text-lg text-black/75">
                                    <a href="<?php echo get_permalink(); ?>">
                                        <?php echo esc_html($product->get_name()); ?>
                                    </a>
                                </h4>
                                <p class="font-lato font-normal text-base text-black/60">
                                    <?php echo esc_html($product->get_description()); ?>
                                </p>
                                <!-- Product Price -->
                                <span class="font-lato font-normal text-base text-primary inline-block space-x-2">
                                    <?php
                                    $regular_price = $product->get_regular_price();
                                    $sale_price = $product->get_sale_price();

                                    if ($sale_price) {
                                        echo '<del class="opacity-60">' . wc_price($regular_price) . '</del>' . wc_price($sale_price);
                                    } else {
                                        echo wc_price($regular_price);
                                    }
                                    ?>
                                </span>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Testimonial Slider -->
    <section class="py-12 md:py-16">
        <div class="container md:flex gap-6 justify-between">
            <div class="text-start md:w-4/12 space-y-2">
                <span class="font-varela font-normal text-lg text-primary">Testimonial</span>
                <h2 class="font-varela font-bold text-3xl text-black/75 capitalize">
                    What Our Students Have to Say </h2>
                <span class="inline-block relative -top-2">
                    <svg width="89" height="15" viewBox="0 0 89 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M89 13.4962C85.066 9.45215 78.4915 6.01154 70.1079 3.60948C61.7243 1.20742 51.9081 -0.0481946 41.9007 0.0014153C31.8932 0.0510252 22.144 1.40363 13.8858 3.88819C8.57342 5.48647 4.79332 7.78013 1.15603 10.1239C-0.78075 11.372 -0.0869775 14.5662 2.1997 14.8487V14.8487C2.96799 14.9436 3.72518 14.6497 4.30509 14.1368C7.54313 11.2735 13.1578 9.17806 19.2645 7.3408C25.9688 5.32374 33.8836 4.22565 42.0081 4.18537V4.18537C57.432 4.10891 73.5437 5.66746 87.399 12.4449C88.106 12.7908 88.6558 13.1424 89 13.4962Z"
                            fill="#D3E3E2" />
                    </svg>
                </span>

                <div class="font-lato font-normal text-xl text-black/60">
                    <p>
                        A yoga testimonial highlights personal experiences of
                        individuals who have benefited from yoga,
                        sharing how it has improved their physical, mental, and
                        emotional well-being </p>
                </div>

                <!-- slider buttons -->
                <div class="relative hidden md:flex">
                    <button type="button" class="h-full block slick-prev top-3 left-0">
                        <svg class="w-12 h-12" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="23.5" y="23.5" width="23" height="23" rx="11.5" transform="rotate(-180 23.5 23.5)"
                                stroke="#D3E3E2" />
                            <path
                                d="M8.21746 11.9815C8.07821 12.119 8 12.3054 8 12.4998C8 12.6941 8.07821 12.8805 8.21746 13.0181L11.0212 15.7851C11.1607 15.9227 11.3499 16 11.5472 16C11.7444 16 11.9336 15.9227 12.0731 15.7851C12.2126 15.6475 12.291 15.4609 12.291 15.2663C12.291 15.0717 12.2126 14.8851 12.0731 14.7475L10.5384 13.2332L16.2564 13.2332C16.4536 13.2332 16.6428 13.1559 16.7822 13.0184C16.9217 12.8808 17 12.6943 17 12.4998C17 12.3052 16.9217 12.1187 16.7822 11.9811C16.6428 11.8436 16.4536 11.7663 16.2564 11.7663L10.5384 11.7663L12.0731 10.2525C12.1422 10.1843 12.197 10.1035 12.2343 10.0145C12.2717 9.92544 12.291 9.83003 12.291 9.73368C12.291 9.63733 12.2717 9.54193 12.2343 9.45291C12.197 9.3639 12.1422 9.28302 12.0731 9.21489C12.004 9.14676 11.922 9.09272 11.8318 9.05585C11.7416 9.01898 11.6448 9 11.5472 9C11.4495 9 11.3528 9.01898 11.2625 9.05585C11.1723 9.09272 11.0903 9.14676 11.0212 9.21489L8.21746 11.9815Z"
                                fill="#404040" />
                        </svg>

                    </button>
                    <button type="button" class="h-full block slick-next top-3 left-[60px]">
                        <svg class="w-12 h-12" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#D3E3E2" />
                            <path
                                d="M15.7825 12.0185C15.9218 11.881 16 11.6946 16 11.5002C16 11.3059 15.9218 11.1195 15.7825 10.9819L12.9788 8.21489C12.8393 8.0773 12.6501 8 12.4528 8C12.2556 8 12.0664 8.0773 11.9269 8.21489C11.7874 8.35248 11.709 8.5391 11.709 8.73368C11.709 8.92827 11.7874 9.11488 11.9269 9.25247L13.4616 10.7668L7.74357 10.7668C7.54636 10.7668 7.35723 10.8441 7.21779 10.9816C7.07834 11.1192 7 11.3057 7 11.5002C7 11.6948 7.07834 11.8813 7.21779 12.0189C7.35723 12.1564 7.54636 12.2337 7.74357 12.2337L13.4616 12.2337L11.9269 13.7475C11.8578 13.8157 11.803 13.8965 11.7657 13.9856C11.7283 14.0746 11.709 14.17 11.709 14.2663C11.709 14.3627 11.7283 14.4581 11.7657 14.5471C11.803 14.6361 11.8578 14.717 11.9269 14.7851C11.996 14.8532 12.078 14.9073 12.1682 14.9442C12.2584 14.981 12.3552 15 12.4528 15C12.5505 15 12.6472 14.981 12.7375 14.9442C12.8277 14.9073 12.9097 14.8532 12.9788 14.7851L15.7825 12.0185Z"
                                fill="#404040" />
                        </svg>

                    </button>
                </div>
            </div>

            <div class="testimonial_slider md:w-8/12 xl:w-7/12">
                <div
                    class="bg-secondary/40 rounded-xl my-3 shadow-md group px-3 py-8 lg:px-6 lg:py-12 text-center h-full space-y-4">
                    <div
                        class="border-4 border-secondary/0 group-hover:border-primary duration-300 inline-block rounded-full">
                        <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-24 mx-auto"
                            src="<?php echo $theme_path; ?>/assets/image/png&jpg/image1.png" alt="user" />
                    </div>
                    <p class="font-lato font-normal text-base text-black/60">
                        Practicing yoga regularly has improved my
                        flexibility and reduced my stress. </p>
                    <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-32 mx-auto"
                        src="<?php echo $theme_path; ?>/assets/image/png&jpg/Stars.png" alt="stars" />
                    <h4 class="font-varela font-bold text-lg text-black/75 mt-2"> John</h4>
                    <p class="font-lato font-normal text-sm text-black/50"> CEO </p>
                </div>
                <div
                    class="bg-secondary/40 rounded-xl my-3 shadow-md group px-3 py-8 lg:px-6 lg:py-12 text-center h-full space-y-4">
                    <div
                        class="border-4 border-secondary/0 group-hover:border-primary duration-300 inline-block rounded-full">
                        <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-24 mx-auto"
                            src="<?php echo $theme_path; ?>/assets/image/png&jpg/image-6.png" alt="user" />
                    </div>
                    <p class="font-lato font-normal text-base text-black/60">
                        Yoga has helped me manage my work-life balance
                        better. It&#039;s now an essential part of my
                        daily routine </p>
                    <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-32 mx-auto"
                        src="<?php echo $theme_path; ?>/assets/image/png&jpg/Stars.png" alt="stars" />
                    <h4 class="font-varela font-bold text-lg text-black/75 mt-2"> Lora</h4>
                    <p class="font-lato font-normal text-sm text-black/50"> Student</p>
                </div>
                <div
                    class="bg-secondary/40 rounded-xl my-3 shadow-md group px-3 py-8 lg:px-6 lg:py-12 text-center h-full space-y-4">
                    <div
                        class="border-4 border-secondary/0 group-hover:border-primary duration-300 inline-block rounded-full">
                        <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-24 mx-auto"
                            src="<?php echo $theme_path; ?>/assets/image/png&jpg/image-2.png" alt="user" />
                    </div>
                    <p class="font-lato font-normal text-base text-black/60">
                        Yoga has transformed my life by helping me find
                        balance, strength, and inner peace. </p>
                    <img width="100%" height="100%" loading="lazy" class="w-full object-contain max-w-32 mx-auto"
                        src="<?php echo $theme_path; ?>/assets/image/png&jpg/Stars.png" alt="stars" />
                    <h4 class="font-varela font-bold text-lg text-black/75 mt-2"> Jessica
                        Wilson</h4>
                    <p class="font-lato font-normal text-sm text-black/50"> Yoga Member</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="2xl:min-h-[80vh] flex items-center py-10 xl:py-20">
        <div class="mx-auto container px-4">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div
                    class="pl-3 md:pl-8 pb-2 relative max-w-[75%] m-auto before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-secondary before:rounded-full">
                    <div class="rounded-full overflow-hidden relative z-20">
                        <img src="<?php echo $theme_path; ?>/assets/image/png&jpg/trainer-07.jpg" alt="trainer-07"
                            class="w-full h-full object-contain" width="100%" height="100%" loading="lazy">
                    </div>
                    <img src="<?php echo $theme_path; ?>/assets/image/png&jpg/shape-02.png" alt="shape-02"
                        class="w-full object-contain max-w-[80px] md:max-w-[150px] absolute bottom-0 md:bottom-[-20px] left-0"
                        width="100%" height="100%" loading="lazy">
                </div>

                <div class="space-y-2">
                    <span class="font-varela font-normal text-lg text-primary capitalize">about us</span>
                    <h2 class="font-font-varela font-bold text-3xl text-black/75 capitalize">
                        Bring The Healthiest Change in Your Life by Yoga
                    </h2>
                    <div class="font-lato font-normal text-xl text-black/60">
                        <p>
                            Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu
                            lacus.
                            Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum
                            ante
                            ipsum primis in faucibus orci
                            luctus et ultrices posuere cubilia curae.</p>

                    </div>
                    <div class="pt-6">
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 36 35"
                                fill="none">
                                <path
                                    d="M34.1932 0.483383C33.8628 0.268917 33.4933 0.121655 33.1059 0.0500119C32.7186 -0.0216317 32.3209 -0.0162539 31.9356 0.065838C31.5503 0.14793 31.1849 0.305127 30.8604 0.52845C30.5359 0.751773 30.2586 1.03685 30.0442 1.36738L13.2342 27.2784L5.03623 19.6984C4.74699 19.4309 4.40791 19.2231 4.03835 19.0867C3.66878 18.9503 3.27597 18.888 2.88235 18.9035C2.08738 18.9346 1.33734 19.2802 0.797225 19.8644C0.257112 20.4485 -0.0288312 21.2233 0.00229988 22.0183C0.0334309 22.8132 0.379086 23.5633 0.963225 24.1034L11.7272 34.0554C11.7272 34.0554 12.0362 34.3214 12.1792 34.4144C12.5097 34.629 12.8792 34.7764 13.2667 34.8481C13.6542 34.9199 14.052 34.9145 14.4374 34.8324C14.8228 34.7503 15.1883 34.5931 15.5129 34.3697C15.8375 34.1462 16.1149 33.8611 16.3292 33.5304L35.0772 4.63238C35.2917 4.30194 35.439 3.93248 35.5106 3.5451C35.5822 3.15773 35.5769 2.76004 35.4948 2.37475C35.4127 1.98945 35.2555 1.62411 35.0322 1.29958C34.8088 0.975056 34.5238 0.697708 34.1932 0.483383Z"
                                    class="fill-primary" fill="#6F948D"></path>
                            </svg>
                            <p class="font-lato font-semibold text-base text-black/60">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                        <div class="flex items-center gap-4 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 36 35"
                                fill="none">
                                <path
                                    d="M34.1932 0.483383C33.8628 0.268917 33.4933 0.121655 33.1059 0.0500119C32.7186 -0.0216317 32.3209 -0.0162539 31.9356 0.065838C31.5503 0.14793 31.1849 0.305127 30.8604 0.52845C30.5359 0.751773 30.2586 1.03685 30.0442 1.36738L13.2342 27.2784L5.03623 19.6984C4.74699 19.4309 4.40791 19.2231 4.03835 19.0867C3.66878 18.9503 3.27597 18.888 2.88235 18.9035C2.08738 18.9346 1.33734 19.2802 0.797225 19.8644C0.257112 20.4485 -0.0288312 21.2233 0.00229988 22.0183C0.0334309 22.8132 0.379086 23.5633 0.963225 24.1034L11.7272 34.0554C11.7272 34.0554 12.0362 34.3214 12.1792 34.4144C12.5097 34.629 12.8792 34.7764 13.2667 34.8481C13.6542 34.9199 14.052 34.9145 14.4374 34.8324C14.8228 34.7503 15.1883 34.5931 15.5129 34.3697C15.8375 34.1462 16.1149 33.8611 16.3292 33.5304L35.0772 4.63238C35.2917 4.30194 35.439 3.93248 35.5106 3.5451C35.5822 3.15773 35.5769 2.76004 35.4948 2.37475C35.4127 1.98945 35.2555 1.62411 35.0322 1.29958C34.8088 0.975056 34.5238 0.697708 34.1932 0.483383Z"
                                    class="fill-primary" fill="#6F948D"></path>
                            </svg>
                            <p class="font-lato font-semibold text-base text-black/60">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                        <div class="flex items-center gap-4 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 36 35"
                                fill="none">
                                <path
                                    d="M34.1932 0.483383C33.8628 0.268917 33.4933 0.121655 33.1059 0.0500119C32.7186 -0.0216317 32.3209 -0.0162539 31.9356 0.065838C31.5503 0.14793 31.1849 0.305127 30.8604 0.52845C30.5359 0.751773 30.2586 1.03685 30.0442 1.36738L13.2342 27.2784L5.03623 19.6984C4.74699 19.4309 4.40791 19.2231 4.03835 19.0867C3.66878 18.9503 3.27597 18.888 2.88235 18.9035C2.08738 18.9346 1.33734 19.2802 0.797225 19.8644C0.257112 20.4485 -0.0288312 21.2233 0.00229988 22.0183C0.0334309 22.8132 0.379086 23.5633 0.963225 24.1034L11.7272 34.0554C11.7272 34.0554 12.0362 34.3214 12.1792 34.4144C12.5097 34.629 12.8792 34.7764 13.2667 34.8481C13.6542 34.9199 14.052 34.9145 14.4374 34.8324C14.8228 34.7503 15.1883 34.5931 15.5129 34.3697C15.8375 34.1462 16.1149 33.8611 16.3292 33.5304L35.0772 4.63238C35.2917 4.30194 35.439 3.93248 35.5106 3.5451C35.5822 3.15773 35.5769 2.76004 35.4948 2.37475C35.4127 1.98945 35.2555 1.62411 35.0322 1.29958C34.8088 0.975056 34.5238 0.697708 34.1932 0.483383Z"
                                    class="fill-primary" fill="#6F948D"></path>
                            </svg>
                            <p class="font-lato font-semibold text-base text-black/60">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?
    get_footer();
