    <nav>
        <div class="nav-wrap">
            <div class="nav-logo">
                <a href="<?php echo homePageBaseUrl("home"); ?>" class="logo"><img src="<?php echo homePageBaseUrl("home"); ?>images/MS-bg-logo 250x250.png"
                        alt="Maciej Szelag Web Design Logo"></a>
            </div>
            <div class="nav-list">
                <div class="nav-list-img">
                    <img src="<?php echo homePageBaseUrl("home"); ?>images/MS - logo 500x500 no bg.PNG" alt="MS Web Design Logo">
                </div>
                <ul class="nav-list-ul">
                    <?php
                        $pages = [
                            ''         => 'Home',
                            'about/'   => 'About',
                            'contact/' => 'Contact',
                        ];

                        // Aktualna ścieżka (np. 'about/', 'contact/', lub '' dla strony głównej)
                        $current_path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') . '/';
                        if ($current_path === '//') {
                            $current_path = '/';
                        }
                        // Fix dla pustego URI

                        foreach ($pages as $url => $title) {
                            // Dodaj trailing slash do porównania
                            $normalized_url = trim($url, '/') . '/';

                            if ($normalized_url !== $current_path) {
                                echo '<li><a href="' . homePageBaseUrl('home') . $url . '" class="li-nav">' . $title . '</a></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="nav-burger" id="nav-burger">
            <div class="burger">menu</div>
        </div>
    </nav>
