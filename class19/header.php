<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page templating</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php
        function is_active($check) {
            $requested_uri = $_SERVER['REQUEST_URI'];

            $search = strpos($requested_uri, $check);

            if($search !== false) {
                return 'active';
            }
        }

        $menus = [
            'index' => 'হোম',
            'about' => 'সকল কোর্স',
            'subject' => 'সাবজেক্ট',
            'team' => 'টিম',
            'contact' => 'যোগাযোগ'
        ];
    ?>


    <!-- menu start -->
     <section class="menu_area">
        <div class="container">
            <div class="menu_wrapper">
                <div class="logo">
                    <a href="#">
                        <div class="logo_img">
                            <img src="assets/images/logo2.png" alt="">
                        </div>
                        <div class="logo_text">
                            <h3>প্র্যাক্টিস</h3>
                            <p>Let's code with us</p>
                        </div>
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        <?php foreach($menus as $key => $value) : ?>
                            <li><a class="<?php echo is_active($key); ?>" href="<?php echo $key; ?>.php"><?php echo $value; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
     </section>
    <!-- menu end -->





            
        