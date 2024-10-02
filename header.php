<?php

/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$viewport_content = apply_filters('hello_elementor_viewport_content', 'width=device-width, initial-scale=1');
$enable_skip_link = apply_filters('hello_elementor_enable_skip_link', true);
$skip_link_url = apply_filters('hello_elementor_skip_link_url', '#content');
$theme_path = get_stylesheet_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- confiq file -->
    <script src="<?php echo $theme_path; ?>/assets/js/tailwindlocal.js"></script>
<!--     <script src="<?php echo $theme_path; ?>/assets/js/tailwind.config.js"></script> -->
<script>
tailwind.config = {
  theme: {
    screens: {
      xsm: "420px",
      sm: "640px",
      md: "768px",
      lg: "1024px",
      xl: "1280px",
      "2xl": "1536px",
    },
    fontFamily: {
      varela: "Varela",
      lato: "Lato",
    },
    extend: {
      animation: {
        "spin-slow": "spin 10s linear infinite",
      },
      fontSize: {
        xs: "0.75rem", // 12px
        sm: "0.875rem", // 14px
        base: "1rem", // 16px
        lg: "1.125rem", // 18px
        xl: "1.25rem", // 20px
        "2xl": "1.5rem", // 24px
        "3xl": "1.875rem", // 30px
        "4xl": "2.25rem", // 36px
        "5xl": "3rem", // 48px
        "6xl": "3.75rem", // 60px
        "7xl": "4.5rem", // 72px
        "8xl": "6rem", // 96px
      },
      colors: {
        primary: "#f16159",
        secondary: "#d3e3e2",
        lightsecondary: "#dce8e8",
      },
    },
    container: {
      center: true,
      padding: "1rem",
    },
  },
};

	</script>
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

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php if ($enable_skip_link) { ?>
        <a class="skip-link screen-reader-text" href="<?php echo esc_url($skip_link_url); ?>"><?php echo esc_html__('Skip to content', 'hello-elementor'); ?></a>
    <?php } ?>

    <!-- navbar -->
    <div class="max-w-[1140px] top-0 left-[-768px] md:hidden ease-in-out duration-300 bg-primary text-white z-[999] flex items-start justify-between fixed mx-auto p-6 w-3/4 h-full"
        id="header">
        <ul id="menu-navbar" class="space-y-4">
            <li>
                <a href="#Home" class="font-varela font-medium text-base text-white/90 hover:text-white/75 duration-300">
                    Home
                </a>
            </li>
            <li>
                <a href="#About"
                    class="font-varela font-medium text-base text-white/90 hover:text-white/75 duration-300">
                    Aboutus
                </a>
            </li>
            <li>
                <a href="#Product"
                    class="font-varela font-medium text-base text-white/90 hover:text-white/75 duration-300">
                    Product
                </a>
            </li>
            <li>
                <a href="#Blog" class="font-varela font-medium text-base text-white/90 hover:text-white/75 duration-300">
                    Blog
                </a>
            </li>
            <li>
                <a href="#Contact"
                    class="font-varela font-medium text-base text-white/90 hover:text-white/75 duration-300">
                    Contact
                </a>
            </li>
        </ul>

        <button id="hide_header">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 12L7 7M12 12L17 17M12 12L17 7M12 12L7 17" stroke="white" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>

    <header class="fixed top-0 left-0 right-0 z-[99] duration-300" id="desktop_header">
        <nav>
            <div class="container z-20 relative mx-auto py-5 ease-in-out duration-300">
                <div class="flex items-center justify-between">
                    <a href="<?php echo get_home_url(); ?>" class="p-2">
                        <svg class="w-14 h-14" width="21" height="22" viewBox="0 0 21 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.09223 15C6.78223 15.682 6.07023 15.986 5.43923 16.316L1.79323 18.223C0.328229 18.99 1.05923 21 2.63023 21C6.12223 21 8.88423 19.306 12.0402 18C12.8352 17.671 13.2202 17.741 14.0002 18.091"
                                stroke="#313131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7 18.091C7.78 17.741 8.165 17.671 8.96 18C12.116 19.306 14.878 21 18.37 21C19.94 21 20.672 18.99 19.207 18.223L15.561 16.316C14.93 15.986 14.217 15.682 13.908 15M10 7C8.4087 7 6.88258 7.63214 5.75736 8.75736C4.63214 9.88258 4 11.4087 4 13C5.5913 13 7.11742 12.3679 8.24264 11.2426C9.36786 10.1174 10 8.5913 10 7ZM10 7C11.5913 7 13.1174 7.63214 14.2426 8.75736C15.3679 9.88258 16 11.4087 16 13C14.4087 13 12.8826 12.3679 11.7574 11.2426C10.6321 10.1174 10 8.5913 10 7ZM8 3C8 3.53043 8.21071 4.03914 8.58579 4.41421C8.96086 4.78929 9.46957 5 10 5C10.5304 5 11.0391 4.78929 11.4142 4.41421C11.7893 4.03914 12 3.53043 12 3C12 2.46957 11.7893 1.96086 11.4142 1.58579C11.0391 1.21071 10.5304 1 10 1C9.46957 1 8.96086 1.21071 8.58579 1.58579C8.21071 1.96086 8 2.46957 8 3Z"
                                stroke="#313131" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <ul id="menu-navbar-1" class="hidden md:flex items-center gap-x-4 lg:gap-x-16">
                        <li>
                            <a href="<?php echo get_home_url(); ?>"
                                class="font-varela font-medium text-base text-black/60 hover:text-primary duration-300">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#About"
                                class="font-varela font-medium text-base text-black/60 hover:text-primary duration-300">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#Product"
                                class="font-varela font-medium text-base text-black/60 hover:text-primary duration-300">
                                Product
                            </a>
                        </li>
                        <li>
                            <a href="#Blog"
                                class="font-varela font-medium text-base text-black/60 hover:text-primary duration-300">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#Contact"
                                class="font-varela font-medium text-base text-black/60 hover:text-primary duration-300">
                                Contact Us
                            </a>
                        </li>
                    </ul>

                    <button
                        class="font-varela font-semibold text-base text-white hover:text-primary rounded-full px-6 lg:px-8 py-3 border border-primary bg-primary hover:bg-transparent group duration-300 ease-in-out hidden md:flex items-center gap-3">
                        SIGN UP
                        <span class>
                            <svg class width="34" height="16" viewBox="0 0 34 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="group-hover:fill-primary duration-300 ease-in-out"
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM33.7071 8.70711C34.0976 8.31658 34.0976 7.68342 33.7071 7.29289L27.3431 0.928932C26.9526 0.538408 26.3195 0.538408 25.9289 0.928932C25.5384 1.31946 25.5384 1.95262 25.9289 2.34315L31.5858 8L25.9289 13.6569C25.5384 14.0474 25.5384 14.6805 25.9289 15.0711C26.3195 15.4616 26.9526 15.4616 27.3431 15.0711L33.7071 8.70711ZM1 9H33V7H1V9Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </button>

                    <button class="md:hidden" id="show_header">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 8H18M6 12H18M6 16H18" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar -->