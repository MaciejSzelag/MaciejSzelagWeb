   <footer>
            <div class="footer-wrap">
                <div class="footer-box flex-center dispaly-screen">
                    <img src="<?php echo homePageBaseUrl(""); ?>images/MS - logo 500x500 no bg.PNG" alt="Maciej Szelag Web Design - Contact Information">
                </div>
                <div class="footer-box">
                    <div class="footer-box-content border-line">
                        <div class="f-box-content-section section-margin-bottom">
                            <a href="<?php echo homePageBaseUrl(""); ?>about/">About</a>
                            <a href="<?php echo homePageBaseUrl(""); ?>contact/">Contact</a>
                        </div>
                        <div class="f-box-content-section social-m">
                            <a href="https://www.instagram.com/mswebdesignuk/?hl=en">Instagram</a>
                            <a href="https://www.facebook.com/profile.php?id=61574904818271">Facebook</a>
                            <a class="a-email" href="mailto:webby.maciej@gmail.com">info@maciejszelag.co.uk</a>
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
