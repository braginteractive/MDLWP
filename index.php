<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main mdl-grid" role="main">

            <div class="feature-block mdl-grid mdlwp-1000">


                <div class="mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">

                    <style>
                        .demo-card-wide.mdl-card {
                            width: 100%;
                        }

                        .demo-card-wide > .mdl-card__title {
                            color: #fff;
                        }
                    </style>

                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__supporting-text">

                            <h3><b>Λιγα λογια για το τμημα</b> . . .<br></h3>

                            <p>Το Περιφερειακό Τμήμα Βορειοανατολικού Αιγαίου του Τεχνικού Επιμελητηρίου Ελλάδος είναι
                                Νομικό
                                Πρόσωπο Δημοσίου Δικαίου (Ν.Π.Δ.Δ.) και εποπτεύεται από το Υ.ΠΕ.ΧΩ.ΔΕ. Ιδρύθηκε στις
                                15.01.1997
                                με το Π.Δ. 4/20.01.1997, με αρμοδιότητες
                                που εκτείνονται στην Περιφέρεια Βορειοανατολικού Αιγαίου και ειδικότερα στους Νομούς
                                Λέσβου,
                                Χίου και Σάμου και περιλαμβάνει τα νησιά Λέσβος, Λήμνος, Άγιος Ευστράτιος, Χίος,
                                Οινούσσες,
                                Ψαρά, Σάμο, Ικαρία - Φούρνοι. Η έδρα του
                                Περιφερειακού Τμήματος είναι η Μυτιλήνη.
                                <br>
                            </p>

                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <blockquote>Μέλη του Περιφερειακού Τμήματος γίνονται μέλη του ΤΕΕ Διπλωματούχοι Μηχανικοί
                                που έχουν
                                είτε μόνιμη κατοικία ή επαγγελματική έδρα στην περιοχή των Τμημάτων
                            </blockquote>
                        </div>
                    </div>

                    <style>
                        .demo-card-square.mdl-card {
                            width: 320px;
                            height: 320px;
                        }

                        .demo-card-square > .mdl-card__title {
                            color: #fff;
                            background: url('http://www.androidguys.com/wp-content/uploads/2014/11/material_design_wallpaper-5.jpg') bottom right 15% no-repeat #46B6AC;
                        }

                        .disquss > .mdl-card__title {
                            background: url('https://s3.amazonaws.com/data.tackk.com/mio/37514909/14280070302105/large.gif') bottom right 15% no-repeat #46B6AC;
                        }

                        .mdl-grid.center-items {
                            justify-content: center;
                        }
                    </style>

                    <div class="mdl-grid center-items">

                        <div class="mdl-cell mdl-cell--4-col demo-card-square mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text">Ανακοινώσεις</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Ανακοινώσεις και νέα απο το ΤΕΕ. Ενημερωθείτε για όλες τις εξελίξεις!
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                                   href="https://forum.ba-aigaio.tee.gr/">
                                    περισσοτερα
                                </a>
                            </div>
                        </div>

                        <div class=" mdl-cell mdl-cell--4-col demo-card-square disquss mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand">
                                <h2 class="mdl-card__title-text">Γενικές συζητήσεις</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Φορουμ ανταλλαγής απόψεων και συζητήσεων...
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                                   href="https://forum.ba-aigaio.tee.gr/">
                                    περισσοτερα
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__supporting-text">
                            <h3><b>Εκφραζουμε</b></h3>
                            <p>Το Περιφερειακό Τμήμα αποτελεί την έκφραση του ΤΕΕ στην Περιφέρεια και ασκεί τις
                                αρμοδιότητες που
                                προβλέπονται από τις κείμενες διατάξεις για τα Περιφερειακά Τμήματα και που απορρέουν
                                από τους
                                σκοπούς του ΤΕΕ για κάθε θέμα της
                                Περιφέρειας (άρθρο 5 παρ. 3 του Ν. 1486/1984) και ιδιαίτερα:</p>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <ul>
                                <li>Προωθεί την πολιτική του ΤΕΕ στην Περιφέρεια</li>
                                <li>Συμβάλει στη διαμόρφωση της γενικής πολιτικής του ΤΕΕ σε
                                    γενικά
                                    θέματα και μεταφέρει τον προβληματισμό και τις απόψεις της περιφέρειας στα κεντρικά
                                    όργανα.
                                </li>
                                <li>Ασκεί την πειθαρχική διαδικασία σε Α΄ βαθμό.</li>
                                <li>Αντιμετωπίζει επί τόπου προβλήματα που έχουν σχέση με την
                                    λειτουργία
                                    του ΤΣΜΕΔΕ και ΚΥΤ.
                                </li>
                                <li>Ασχολείται με ειδικά προβλήματα της Περιφέρειας.</li>
                                <li> Πραγματοποιεί πραγματογνωμοσύνες σε θέματα τοπικής
                                    αρμοδιότητας με
                                    Διπλωματούχους Μηχανικούς που διορίζονται από τον Πρόεδρο του Τμήματος, Π.Δ.
                                    10/16.04.1935
                                    περί καθορισμού των επί των διαιτησιών και πραγματογνωμοσυνών δικαιωμάτων
                                    του ΤΕΕ.
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">
                            ΠΡΟΚΗΡΥΞΕΙΣ - ΔΙΑΓΩΝΙΣΜΟΙ
                        </div>
                        <div class="mdl-grid">
                            <div class="mdl-layout-spacer"></div>
                            <div class="mdl-cell mdl-cell--12-col">
                                <a href="http://www.pvaigaiou.gov.gr/web/guest/diagonismoi"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΠΕΡΙΦΕΡΕΙΑ Β. ΑΙΓΑΙΟΥ
                                </a>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col">
                                <a href="http://www.mytilene.gr/category/prokiriksis/"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΔΗΜΟΣ ΛΕΣΒΟΥ
                                </a>

                                <div class="mdl-layout-spacer"></div>
                                <a href="http://www.limnos.gov.gr/index.php?option=com_content&task=blogcategory&id=40&Itemid=215"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΔΗΜΟΣ Λημνου
                                </a>
                            </div>

                            <div class="mdl-cell mdl-cell--4-col">
                                <a href="http://www.chioscity.gr/dimotes/prokirikseis"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΔΗΜΟΣ ΧΙΟΥ
                                </a>
                            </div>

                            <div class="mdl-cell mdl-cell--4-col">
                                <a href="http://www.islandofsamos.gr/enhmerwsh/diagwnismoi-prokhrukseis"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΔΗΜΟΣ σαμου
                                </a>

                                <div class="mdl-layout-spacer"></div>
                                <a href="http://ikaria.gov.gr/index.php/office-press/dimoprasies/erga.html"
                                   class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                                    ΔΗΜΟΣ ικαριας
                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">

                    <style>
                        .demo-card-event.mdl-card {
                            width: auto;
                            height: auto;
                            background: #3E4EB8;
                        }

                        .demo-card-event > .mdl-card__actions {
                            border-color: rgba(255, 255, 255, 0.2);
                        }

                        .demo-card-event > .mdl-card__title {
                            align-items: flex-start;
                        }

                        .demo-card-event > .mdl-card__title {
                            background: url('https://cdn.dribbble.com/users/25514/screenshots/2016747/flat-news-app-icon-design-ramotion.gif');
                        }

                        .demo-card-event > .mdl-card__actions {
                            display: flex;
                            box-sizing: border-box;
                            align-items: center;
                        }

                        .demo-card-event > .mdl-card__actions > .material-icons {
                            padding-right: 10px;
                            padding-left: 10px;
                        }

                        .demo-card-event > .mdl-card__title,
                        .demo-card-event > .mdl-card__actions,
                        .demo-card-event > .mdl-card__actions > .mdl-button {
                            color: #fff;
                        }
                    </style>

                    <div class="demo-card-event mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title mdl-card--expand">

                            <ul class="demo-list-item mdl-list">
                                <li class="mdl-list__item">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white"
                                       href="http://www.michanikos.gr/"
                                       target="_blank">Μιχανικός</a>
                                </li>
                                <li class="mdl-list__item"><a
                                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white"
                                            href="http://www.engoe.gr/" target="_blank">Μηχανικοί
                                        της γης</a>
                                </li>
                                <li class="mdl-list__item"><a
                                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white"
                                            href="http://www.emichanikos.gr/content.php"
                                            target="_blank">Ε-Μηχανικός</a>
                                </li>
                                <li class="mdl-list__item"><a
                                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white"
                                            href="http://www.iekemtee.gr/el/" target="_blank">ΙΕΚΕΜ
                                        ΤΕΕ</a>
                                </li>
                                <li class="mdl-list__item"><a
                                            class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-color-text--white"
                                            href="http://web.tee.gr/" target="_blank">Κεντρικό
                                        ΤΕΕ</a>
                                </li>
                            </ul>

                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Σύνδεσμοι</a>
                            <div class="mdl-layout-spacer"></div>
                        </div>
                    </div>

                    <!-- start feedwind code -->
                    <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js"
                            data-fw-param="25207/"></script>
                    <!-- end feedwind code -->

                    <!-- start feedwind code -->
                    <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js"
                            data-fw-param="26249/"></script>
                    <!-- end feedwind code -->

                </div>
                <!-- features -->

            </div>

            <div class="feature-block mdl-grid mdlwp-900">
                <?php if (have_posts()) : ?>

                    <?php do_action('mdlwp_before_content'); ?>

                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());
                        ?>

                    <?php endwhile; ?>

                    <?php do_action('mdlwp_before_pagination'); ?>

                    <?php mdlwp_posts_navigation(); ?>

                    <?php do_action('mdlwp_after_pagination'); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

                <?php do_action('mdlwp_after_content'); ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>