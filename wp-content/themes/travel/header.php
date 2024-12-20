<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css"  />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</head>
<body>
    <header id="header" class="header">
        <a href="#" class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">
        </a>
        <nav>
            <ul class="main-nav-list">
                <li>
                    <a href="#" class="main-nav-link">Trang chủ</a>
                </li>
                <li>
                <a href="#" class="main-nav-link">Blog Du Lịch 
                <i class="angle down icon"></i>
                </a>
                </li>
                <li>
                <a href="#" class="main-nav-link">Travel Blogger
                <i class="angle down icon"></i>
                </a>
                </li>
                <li>
                <a href="#" class="main-nav-link">Kinh Nghiệm</a>
                </li>
                <li>
                <a href="#" class="main-nav-link">Du lịch BHUTAN
                    <i class="angle down icon"></i>
                </a>
                </li>
               
            </ul>
        </nav>
        <div>
        <i class="search icon"></i>
        </div>
    </header>
