<?php
    $metaDescription = "Contact Maciej Szelag - Web Developer in Plymouth. Let's discuss your project! Get a free consultation for custom websites, Laravel apps, or UX-focused solutions. Fast response guaranteed.";
    $title           = " Contact ";

include "../includes/head.php"?>
<?php include "../includes/nav.php"?>

   <?php $siteTitle = "Let's Talk";include "../includes/subheader.php"?>
    <main>
        <article>
            <section class="section-about-offer">
                <div class="offer-title animation-item">
                    <p class="primary-font contact-p">Want to learn more? Reach out via email and let’s talk
                        about your website!</p>
                </div>
                <div class="offer-content align-btn">
                    <a href="mailto:webby.maciej@gmail.com" class="contact">webby.maciej@gmail.com</a>

                </div>
            </section>
        </article>
        <?php
            $jsPath = "../";
        include $jsPath . "includes/footer.php";
        ?>