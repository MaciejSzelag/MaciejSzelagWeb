   <footer>
            <div class="footer-wrap">
                <div class="footer-box flex-center dispaly-screen">
                    <img src="<?php echo homePageBaseUrl(""); ?>images/MS - logo 500x500 no bg.PNG" alt="Maciej Szelag Web Design - Contact Information">
                </div>
                <div class="footer-box">
                    <div class="footer-box-content border-line">
                        <div class="f-box-content-section section-margin-bottom">
<?php
    $pages = [
        ''         => 'Home',
        'about/'   => 'About Me',
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
            echo '<a href="' . homePageBaseUrl('') . $url . '">' . $title . '</a>';
        }
    }
?>


                        </div>
                        <div class="f-box-content-section social-m">
                            <a href="https://www.instagram.com/mswebdesignuk/?hl=en">Instagram</a>
                            <a href="https://www.facebook.com/profile.php?id=61574904818271">Facebook</a>
                            <a class="a-email" href="mailto:webby.maciej@gmail.com">webby.maciej@gmail.com</a>
                        </div>
                    </div>
                    <div class="footer-copyrights">
                        <p>©<?php
                                 $currentYear = date("Y");

                                 if ($currentYear == 2025) {
                                     echo $currentYear;
                                 } else {
                                     echo "2025 - " . $currentYear;
                             }
                             ?> Maciej Szelag - Web Design & Development Plymouth</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
     <!-- main  -->


        <script src="<?php $jsPath;
                         if (isset($jsPath)) {
                             echo $jsPath;
                         } else {
                         "";
                     }?>js/main.js"></script>
</body>

</html>
