<template>
    <header role="banner" class="header header_5">
        <div class="h_top_part">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="header_top mobile_menu">
                            <div class="login_block">
                                <div class="widget widget_social_icons type_2 tool_down clearfix">
                                    <ul>
                                        <li class="facebook">
                                            <span class="tooltip">Facebook</span>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <span class="tooltip">Twitter</span>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="google_plus">
                                            <span class="tooltip">Google+</span>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <span class="tooltip">Rss</span>
                                            <a href="#">
                                                <i class="fa fa-rss"></i>
                                            </a>
                                        </li>
                                        <li class="pinterest">
                                            <span class="tooltip">Pinterest</span>
                                            <a href="#">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                        <li class="instagram">
                                            <span class="tooltip">Instagram</span>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <span class="tooltip">LinkedIn</span>
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="vimeo">
                                            <span class="tooltip">Vimeo</span>
                                            <a href="#">
                                                <i class="fa fa-vimeo-square"></i>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <span class="tooltip">Youtube</span>
                                            <a href="#">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                        <li class="flickr">
                                            <span class="tooltip">Flickr</span>
                                            <a href="#">
                                                <i class="fa fa-flickr"></i>
                                            </a>
                                        </li>
                                        <li class="envelope">
                                            <span class="tooltip">Contact Us</span>
                                            <a href="#">
                                                <i class="fa fa-envelope-o"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav style="float: left;">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--main menu container-->
        <div class="menu_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <a href="index.html" class="logo">
                            <img src="images/logo.png" alt="" /></a>
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="clearfix">
                            <!--button for responsive menu-->
                            <button id="menu_button">Menu</button>
                            <!--main menu-->
                            <nav role="navigation" class="main_menu">
                                <ul>
                                    <NavItem v-for="item in navItems" :key="item.text" :item="item"></NavItem>
                                </ul>
                            </nav>
                            <div class="search-holder">
                                <div class="search_box">
                                    <button class="search_button button button_orange_hover">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                                <!--search form-->
                                <div class="searchform_wrap">
                                    <div class="vc_child h_inherit relative">
                                        <form role="search">
                                            <input type="text" name="search"
                                                placeholder="Type search text and hit enter" />
                                        </form>
                                        <button class="close_search_form">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
import NavItem from './NavItem.vue';

export default {
    computed: {
        navItems() {
            return [
                { text: 'Home', href: '#' },
                { text: 'Business', href: '#' },
                { text: 'Sport', href: '#' },
                { text: 'Health', href: '#' },
                { text: 'Health1', href: '#' },
                { text: 'Health2', href: '#' },
                { text: 'Health3', href: '#' },
                { text: 'Health4', href: '#' },
                { text: 'Health5', href: '#' },
                { text: 'Health6', href: "#" },
            ];
        },
    },
    components: { NavItem },
};
</script>

<style>
.menu_wrap:not(.sticky) > .container { width: 100%; margin: 0; }
.menu_wrap:not(.sticky) .col-lg-2 { width: 25%; transform: translateX(-75px); }
.menu_wrap:not(.sticky) .col-lg-10 { width: 75%; }
.menu_wrap:not(.sticky) .col-lg-10 > .clearfix { height: 90px; padding: 30px;}
.menu_wrap:not(.sticky) .search-holder { transform: translateX(30px); }
</style>
