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

    <div class="mdl-grid mdl-grid--no-spacing mdl-layout--large-screen-only">

        <div class="mdl-cell mdl-cell--12-col">
            <!--Video Section-->
            <section class="content-section video-section">
                <div class="pattern-overlay">
                    <a id="bgndVideo" class="player"
                       data-property="{videoURL:'VfjYqHGAGwA',containment:'.video-section', showYTLogo:false, quality:'default', autoPlay:true, stopMovieOnBlur:false, loop:true, mute:true, opacity:1, startAt:10, addRaster:true}">bg</a>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>TEE</h1>
                                <div class="divider"></div>
                                <h3 id="colorize">Τμήμα Βορειοανατολικού Αιγαίου</h3>
                                <!--<div class="pattern"></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    <!-- callout -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".player").mb_YTPlayer();
        });
    </script>

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
                            background: url('https://www.androidguys.com/wp-content/uploads/2014/11/material_design_wallpaper-5.jpg') bottom right 15% no-repeat #46B6AC;
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


                    <style>
                        .ba-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('https://static1.traveltek.net/uploaded/2015/5/1432047428.jpg') center / cover;
                        }

                        .lesvos-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('https://media-cdn.tripadvisor.com/media/photo-s/01/3e/e2/60/lesbos.jpg') center / cover;
                        }

                        .limnos-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhMVFhUVGBgYGBcYGBoZGBgYGBgZFxcXFxgYHSggGRolGxkYITEhJSkrLi4uFx8zODMtNygtLy0BCgoKDg0OGxAQGy0lHyUtLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALsBDQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAEAQIDBQYABwj/xAA+EAACAQMCBAQEAwYGAgIDAQABAhEAAyESMQQiQVEFE2FxBjKBkUKh8BQjUmKx0TNygsHh8QeSFaJEg9JD/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAECAwQF/8QAKhEAAgIBAwIGAgIDAAAAAAAAAAECESEDEjFBUQQTFCJSkWGhMkJxgfD/2gAMAwEAAhEDEQA/ANOXpNdR11esedTJdVdqqKuoBJkuqlmoprhQwirZLNdqpk1wNTuNPLV4JNdJrqOummQ0S667XUU0tMErH+ZS66imumgKJfMprXD0pQtMipUkypaTSs7WaeLhplLVWiFFknmUuqoZpYpNgotkuqu11DNLRY9rJddJrqKaQtQJqibXSM9QzXTTEokuqm6qZNITRZTjWSTVSaqjmkmgmiXVSFqjJpuugZLqpNdRzSTRYOND5rpqIX1707zB3FUZ5HzSzTNY712sdxRQWPrpqPzl7inBweooHbHTSzTZpZpUPezprppJrpp0LcLNLNNmlpUCm0LNdNJXUUg3MdqrtVNmumikPzJdx2qu1U2a6ikLcx012qm0hopBvdjtVdNNmkmig3MfNJNNmup0G5izXTTZrpooVsUmkmupKKCzprppKSigsdNJNNJpNQ7iih2x00hrppJooTk2V8+v50k1Xhop63a5o+Jj/ZHVLRf9Q0XafQWseopyiZg7VqtbSfWjJ6eqv63/ALDCtJpoMg03XW8YKWUzCWtKOHGv+/wWCvTvM9artddrqvK/JHqPwWPmj+Ku84d6rtdRHi11hJliYgdME83bAP5dxRKMYq2xR1JydRVlt53rXed61ULxnMykEaYEnuRP2/saIJPas46mlKW1SyaTjqxjuccB/n+tL53rVfqNdqNaNRXLIUpviP6D/N9a7zB3qv1Usml7O5V6vxDvMHeu831oGTXSaXs7her8Q3zB3rvN9aCk0kn0p+zuG7U+Id5vr+dL5v8AN+dV+uuL1m5wXBpGGo+UkWH7R/NSftI/iqvDjtSxWb1TVaK6h/7SP4v60h4gd/yoJVPY9dhO29NY0ecx+nQXc44Duaibjz0FCQetdFPzWJaEUTNxbnrTDdJ3JplJUOVlqCXA4tXTTaQtUWXQ+a4XW7n71HqNJBNG6hOK7Ekds/2qNh609oEk57bfc1CD3/p/WuKzqZONp+3tSkEbf9/r1oeaZr/U0yNyDFbuY/t+hSa+xoUXKUXQeg/XrTprgLT5CPOIp6X5wN/Q1V8RxwRgsEkicRnMAA+pjpGaG4PhvLvKzO2m8bmNs/PEHryik9SXcqMF2LrxK6yWnYEhguPVmhVgnGqWBjrGKg8A4Y2LRNwcx+Y7wwM98ADTPt60y0UuQ4JhxqyJCkBXTc5ORv8AT05uIui6hEm0ZZQxOIw22IjPcae1ZylKSps1jFLKIfFrRTiGDE8yBg3QlFVbi7nTD5G+9H8LxYY3Fzyuwz3Visj3/wBvWiLd23cGoc0MCHjGN47iY2xOag4nw5nuNBAnfcECRgxPTrRCW2Sb6BONxaT5FfilBG5UmCZ2Okke+Rn0n0opxB6H16RTvDuFhQrEYGCsGRHUYMid6l40aQSM6d2gwR+ga3Xivf7lgwl4Z7Pa8g0+lLPpRF5GKWmVCNSEz/FDsNo3x/t0oJrjDcYyMZGDByPauyEoT4S+zhnHVh/Jv6JY9BS6fb8qH/aK7z60ejL4/sy89fL9BEe1dHtUAveppty8ScMAPUVm9DU7FrW031CY9B9v+KZ5QoYZ3bNPB9ZqNk+zNN6+SJhbFKRULMSI2/XtUQTsPrn+1S4yXKHF7nyE4pCx9YqEAjv966o3Gmxkqnvn7f0ikL+gqEg+lcCwj36GjcNwdckpb9f1pjM3ekV23xS+aRS3E7JdxpDev2H/ADTSrdzUouzS6qe5ipoG0HvSeWe9El/T+lNJ/WKNz7CyCy36NNUn+X7xQob9Zp4PrXKduAo7Zj7/AJ0wj0/P/iovMzuaVXpWNkse/wCvpSavWn8Jwty5OgExuZgfeiW4NUAe6/LjVA2Jwqz3LEDAMUWCTM5x51XlDQCpGD+JWEjfrOob96vvFTZew1pjDgSn+YDlIK5JzFEHgLTkF1BuaeUsII0jWxknY4zGATnel8V4+1atswVCVGoBYDMW5VBwZyD7R6UuS0qKLxLiBZQWtRNwKikhDui6d2hSJJHWMfRlniGvFrbXQLY7SDc2VVLRJUZ94PYEaTifB1u2xbeQQ3RhOrJcmVlsEkbYE9BWdTwzRfVyToDWdEE8qliFD9VwASRO5PQ1SaE0zU8FwYQDyzyHErkn+GT6H32oniXyIkDmkmTnG/2IzHQVnPA+Na2SrQVLKYHQMXBG0Tyn05vaiPibjVWyjK0lsbiDIGvWBgGIMwII9ajqVeC54ga2VFYhiNZ3MAHSAQP4jP2pvH3Lg0bBZdJJMkwNJIgiMEZ3n1qp8LvolsqwgqSSRGSCAWHoTjpHTeas+Mum7oE8s6xBJxHcHfP0pPkroEF2ZBbZiwltOWVwGYsVkDoWYAzPrQ7sQCrBCQQ34vxE6sg+/aKeAIOANJxI2JE79Me29KbHOQDvbUCY1YZiIG2/apbGhps22t6zC4mRJ7b99/zoC5w7BisZAnHaSJE+oq5soAoyJ08xiDjBPv0IqfMaWGodG2Ppv6zj/atdPxOpDhmWp4bSmsozBPTrSkj9H/irHifDZuNoJ3lgT+EjVKxknBxWb8Us3gATbdNLkqwhog4DqpMnCjfJJ6RXT6zUl1OX0WnHoWikdjPTP+0VFqz6e+af4YEfnUmbSE6mnIAVVXI6x75+lEX+HDa2GqYZyI6CTEdzB22qfV6vcr0enykiD6Gk1epqlbxQ6SQNJwASZltQDQI2AP3jFXfA8xQb/u2uOMQZMKqmJB5GI/zGm/F6seWSvCacuFQ1njcn867V6mijwqkZOhoDRO2oFoz2g59PpUP7O2kjOqJgDlIzBE5zjczvvT9dJ9vofoYrv9kX3pJ96bf4dgRBDLjO+egj3+u1Rlo2MentVLxc/wAfRPo9Prf2SlvX+tIW9aYr07SDkGh+KmJeEgsnFv1NNN39TSMpFNM1Pnz7leRDsP1etcW9ai8vEkYM/X9ZpoA9Pyo8+fcPJh2ES3LBQMsYE4k+k/X7VZjwN4JJAIBMANJxICyACfr/AEoT4MS64LsM6m0BlOAMvp6gy8Z7AdK0VuxpI0CIENuMbgH+57Ee3I5Zo64wxZTr4YIOZOQCTpGwOAQDOZj+s0XY4NCIKqZ5gACYGMN+I9Nuk1ZkIpU6YZpEEKe+xzj1qJogmRpBWShzBwJ3O5G8dcVOWXSKbiVbTd8ssG2YiAZYLLAKARIkAnOSaj4/x3hhaHD3BqOlHYjYGAw0sJOuc9PUyaF8et3TaZQxl2HmwB0Onywd5nOkkYHas43AoreWstc5jG2oCCqD+dhq9JgDNaKN8mbk1wan4Y8TUoDcUnQCpuYhi2qRp7FV37g7AU/xLwJDdF1rrhVAaDpK8sxBION9+5yKf/8AHpb4dxbE6vLdZgnlUsIMbf8A9Hao/GWuAagqkW7K7hiJ5tRKiARAwcgYMYqOuC+mSDjPiY2QFTcfKUdWBUDl1R8udx794FHxHxLdeSRbBMGQsEFflI7RVLeef1/eoa0UTJyZZ3vGLjadTSVn2aT+IbdSMRuaHtcYQwJYkAmQciD80A4yKDpJpisvrXjxAMoCTOZgZBBxHeD9PrRPD/FJVVUrhYAj859MmIIOfaMxSUqQ9zNm/wAUjSQqSJZuXdZjmM7SzHGP6CrixcvkW3R1CuyAzl1L5IMYAALHfpXmtXHgXiy27gNzUQSCx3B+YbCCMO+QdyMVLj2KU+5tC/l3P8V3tzB1HYmSFjb1+nrV9wviCFgpID6eZSCNQJKgjGZjpWQfxNPKB1hgbkkxJgatOrGMD8jSvxxH71gCYYa/4bYkABunzKc9j3qNppuNfa4hGzlYJ+YCDvqByNMGc78tKbKz5mpirwRsVAn8JADR1mfWdhVP8N+JedbKssNbKrhp1NiYbqRIn1ncZLvF/FV4a2zAGVbSo6FiZ3nb5iT+iVkV4sNTw8MGQgsCF1AMAZUSABHSe+SKjvcM4tlbYhpBGTOnIKQBiPQx9DNR/C3iNy7ZF27BZy0FcQEKhdyepc5PU9Nrbi7ILBlPOIJHWM6cEZ3OcdKHzQ1lWYrgfCjKI4KZA5/l2JwQTOAfei7IKsbiagrDSepE/u0ae3KOn4ifa8ugkqMadagRGx+aTtljGNh7UIF5GdQFINzSNpTV5gMDBwF6SYO0mm22JJIE4LiQz8xA6AjoACpmfcn/AFAVM1zylIPyrMEnMdyMYGfsO1I9mbltIlySW1KB1BEkYnPTffqKd4h4eoCBWOApBOeUMGgsZkYEmT6b0kq5Kb7C2kmGkMMwp5WkwJ3y2R23XEVVeGHzg9244EsVAGyhS3MuxI+Ukmf9Iq9tcQysLbjlMKMAEQPmnqJjvED2NTZ4bylJCpAuQpCwzAkCWEZgOBkgQSdjTJYxeGMFhnTpJkGVJAMH1A3pmk9SPfOKs+EUC8waAtxNB2wVkhgB1MkfRarfD9XlKGtqGtZ5h8ymQ8kGDq3B7GRTUxOHYZB9/bP5VzT2obh+LDjE4AOcyCcf7VKSKqzJ4FimMlJqrhePc/rtVWTg0vBHUpcKRrGsDGtZJMHp/XM9qsEQfhj0IAg4+bPXP5mqQ+Krw4TzI5mRIEFhPzEdgJP39avzjYADpEkGc7AYM9Kxo6Sp8S4zQVY/KGC9YY5GP9UfY9BkPg+LcszEnSTtgNjEkjckEAAH19Km4zw4u40PqIAlSZ23YqPxTA+p6VTcV8QWFkKrs0tJwAZ3/F3k9qtIluuQu6yMV2ARgRAyNaaVhiMyNQyex6CgbHh6XuJvXCSUg6Su3Pqk4AypMxHaqfivEjdcJaBGqFIJieYNEzMYHWfrWk4Rbbm1aRIgBrbJiA4UN8oABLCdX8/eh4Qlk0I4YO9tBOkOgY4kzZKk49h96zn/AJCuG2iWdtbFyN+VMIJ/1H7Vpfhu6zs+tR5isFxJIOkqY5R2OR0PvV5418Oedw5F5dQOf50/m9D1rKLpmslaPAXFE8F4XdvFRbXUWwBIBJ+pH2rQfF/gqcKlsKhJctNwkmAsQuOWTJ+x+lZ4PeGVMf8Adbp2rRz7adMI4j4SuWlLXpWOkH+p/tQfB+HW7m0xG89cf3Fe5+Ff+RbF1dLqLLxALGbc+rAY+uPWmf8AkO2Ltu1cRNbBLolOYDUE/lMzGPrVxa4aJlHqeHcV4QB8rSexiqp7ZBg19C+F+ET4ejXbdlgtpSFvBgUiNZaIZT823fast4n4Rw/FrpXh+KtWtR0XLaFzjYurKZGdlI7etJtDo8iptav4l+BOJ4RRdE3rOmWuKhQpDMOe2xLqIAbURGc7ScuRSAPTxIeUbZUTy83+UkznaZiNtzU3DeKlbL2e5BVhuueYexH5j7VNKKKCzW/BnGrbGhwCHuArnOpVIIjaCpMeuMyBU/x7xH+HazIljkHcALt1+eshw3ENbYOpyDOdvY+nSj/HvGP2lxcZdJ0BSBkSCSSPSSaVe6x7vbR6N4RbFrhLEREWvvcZS/8A9mP3FXQXUwOMR7z2OehHpQXCqugJEw2r0DK4bf8AzZHp+ctzjJ0k9SBPSZiAd8mBWTVs2TwPvJiTGJEE9ZnVsY/7qncahpUhjKss+sE9DBNtbgB3OroKteLvhREySCcxGnYyR0AP/VDWraDUxEHSoP8AlUE7xJwSO3amkJld4aU8xrkQ6fus7gMeYkdYIX6u1G8WklGk6VTI6EREgxuM49vSi7FtI1ASWwTG4JEjHT+9LxFkQAP5gV7zBg/YHoKHyCK/i7araCuocbR8snckQZUxP6ND8dZYA6FJW42pQ0gB1ZYJ6rMAdauLlnUmkHMbxjrB+8mKj4i0CqGBpAMAbyzLmYGnEyKRRWtLXBtqUwFIzygso+oK57nfFBgBmInlYjGxIAG+NwTM/wA2SABVpcGh0JjUBBJxqlwqgwN4Zen4Y60BxqJbv23aSCzhQIMKxVJhiBi4Vxn5jGwqUsjbVFKnB+Q4QlW1MysMSqj5QJ6jf6RXJeQzpZSFmSDgAZJPYR1o74g4W0yhXJLSWKr/AIgFxzzaQDIDGIjIjqBWUTgWUCCD5mgEAa48wFlk9GGkYjqDWscoxmsmgBnsZyPY7H2rtNSJa0oExyduzAEj/SYE/wC81CWppmco0Uvxff1cU4wAoRRG0aAx98k59qvU8YcWNR1C4f8ACOoTLs6hPQYDH/TnAFZG1dl0ZwWgiR1YAnH2x9AKK8cfn0h9aDKegaMMOjYAP+UU6K3dTZ37pW3aEOWDo+oH/E5oJIIwG+mCCelVtq6nG3eI/dwW0m0dIBVdpZo6wMHoTG1dx3xLo4bhyrC5cKw2rMAKFbWAZ1SF607jr9vgraKi/vLy/vdLmVIGnUpaSJ1GOmDikrKdFN8K8Gz3tamFQZJ2JaVC+pySB/LW/wCA8La21pRc1KX1kAAAAK5UZJME6ZzE1n/hfhFS1a0EhuI/i+XXaS4SBGdJImP7VIPHHa8iWQGJXmjnW3zHqvXTAxEkiaiWXguFJZNV8Jcd5XF3BrJS4SkmTB6nOYDkCT0mtLf+MLS6kZeYArIMidsiMZrAi4rsRMsF14mCvedomNqHugsxJkk82AYMkHExI5qybaKkH+I8er6gQdLTyg4g7gDePzrC+I/D8Em0Rp30uR+RzI96urvG2y+kXF1EwQSJJnYjOfamHiDI5QR7+4zBwc1UHJESyUVm/csYuqdJPzb/AJjFfQ/wDw2jw/hwRurNkRhnZwfaCDXjnGcOFtkwAIBKswiCTMk74Aiafwni9x0i45Kj5R5hK5npJ/KK03uidtHsvxQhPDMlkanxpAOSRnEVW/BfEpwnBonFMtlyx5bhCt+FdjvnrXlfEFwilQjYE5Jk9YBOO8Sdh0NLb4sohdwijO8jm3E52jb60b5VQbFZ618SeOcI/D37fm23ZrZXSDqkkQAYkV47xfgfDMJCFCf4SRH0aR9sVIviy6RnU+lT8kjVAkSemPzPcEDWfGD5aoQS+gBmAX5h+KOp27Tnuaj3cjpLBXXvhoGSl0bY1jfp8yk9fSqjivDrtswyN7gEg+xH9N61KcfdUwwfSJBZXwVaIiOkwY9O1SXOLQYAicAltW5nSQY/DI61SmyKTMYOHf8Agft8p3EyNvQ/Y1IeDuIy67bjIwVIJk7CRuavuI41irIbkzmARBkg7EiRtvJ6zinLbuuoxi0dc6YMjMlhgkEGN/TE1e4VG28G45LguKrAm02mQNzEzBMxJ0/6D0ipHtHUvUEsxPcwuke+Afoe9Z34VsG2h1Kwdn/IxzZGRsP1m7sWiqBW53zpJUEjsYk95NJmqF4sqxiSPXMAHO/UGJ+lToq4EjTBwcf7/qaCSy2o3CM6V7lcCTI6gTA2xNPbjdNyG0r+JTuIzq+sY+tJuhpFm9wLjPMYmDG2syYx9aVNLA7TnfG+0H2qj4DxXzHbRcQkicLKkDBBgkqRgjvFXnDOWGk6Sv8AEDsZmNMY2mZNIaHXEAgzvHeFn22E0juYI3iSPp09c0lsFoYZOqc5HUEYgTmPzrrto/gBlpnOQI6ScdMUqGDFQ+hQwDAi5BgTGSvqOvuJoTxfw9rolWKsACvWJUagSckjTjb70VbslmVsALII3Y6gN+22d8Gi7dw6iWB0zAPLGT7z94yKYjz/AMUfy7lrikyU0qyliflwBJnoQCPY5k1Y8b4fNsLaGz+bqJ08q+ZgGMnOxxvtNWPifhQIdkiSAW5SAx2kzj5ZAMfeKb4Bd1WGV9QnUMRKkgGfQgkj3ovAtuSKzcYOAyqoUHUZB3JGlQDzSc+1C8Tw6SdDZHzLjl2I6jGTG+1V3i97ieHjUiPbB5bugxHyw0NyzjB6jBxVvwfgmoazILhWLAkFmIzIO3/NOutkupYaMrwFs/tCao02UBM7aQsyY/zavyqjuXSSTOSZrX+N+HLZe6F8wHiOUAgGAGViVKkypAgSAayV+wykhlII3kEf1q07IarAy1lhJwTk+nU1sfiW6t7hkuoC2hiBA+VPlOo/5lUZ7r3rOeDcB5zMNUaF1wBJYBlDgeoVmbr8vrV1xdj9ltFtJHmafLIJ6LOdurFts7QKAXBpHsmxYs2xrOmBqRZImTrYDZCWUHfB+tStxR4a3Y1bs2gGcAmYO2doPciab4A9xuFi62m7LAMYmGJdW/hZIbEYxHSKg4275wZERWtqEK3LgLKXbK+UnsWOueketZVk2vBFctql174DQywVzuTBjpAGo4O8+lN8xUAKzDLmZgEbj0II6xvRPB8Yt03bYH+GzKZzMHSTg9T7n3obxrjbaui3CVA5NA1q8wphXtkgCGQ/UdRgavAsclFxCIbmqJIOdsx6qxG3rV7w3itkAKLb9iRpnbMZnt9zXeK+G3LhkrIg6GWDIXAlhktkHPUmoRwJ0g6flME7EHTJwYJHtOx7UmTwQcd40HBRLQ7amHNHsduvWouCuOuxVRjGhCPoI9KLFlG0aF1MRsoMgxsBkk7k+/TIqK1k6YY6tomSCOgEk9+tBMpMKW65XmyowCRmB2YiY+sD65APDKdUAEDfOr0Igz32o17vMyAtpHRRC8mCSvcd/c96gu2UAUgmcyfwgnI9cicH6UuDN2JdRmjYkEZ2JI6TufX1zUN/hUy+mSBMYiAJmf8Aee9EW76SQGlgMiMjJMfnP1oT9muC5qDb5BMg5UiDggjJjtk0WwtsZa4okQvIQRI9DGT6wPzqdzqVgSCyziI6Egj/AIruKtqQGaJHXYAn1HqY9hScSUQs4kambl1FionbmgHAG3anZSdIq7GoHQyPp2EyYEgyJwoGkfejU4zyBkEqRidp7t/JmAOhXpioLXiAaVCt9jv2wDv064OKuF4UquuRMiFmZiDkjEjlxM5p9QjdneGeI3CdY1kACSAdIntA+YzgbyatF8QJUEg40kho3JI5pjSZUjMHAqt4Hw0tJVFC6tSsGOkEqpBAgEn/ABMdAcHM0eOG1hgS2rQTiR1LAgnEAls7H6TQaq6DrHiyFTrRrcTvBJzDE6SdjHXrUfCeIWriq5LglZNvPKQSpWN8FSMYMffuOa3bQ7/vAFCyYgAxJPMcf096B8Jfz31oYOrSDvyqhBycMJ/oKSK/BWcLdThuNZLTgK55wVPKQCyhdEQJYe0da1/C8ZLGekyczJJUTEzsRP8AKdq8z8VZjxVw/iF1gO0q0KMewra3uNJuaVlW0JqgEwdUKMgLBOofMIznvrJcERfJfvdQAGCMAdsbxBGev50SRAJWCTO+3XEnYTVF/wDMICFeJaRkEQQMb7yCIirUXB/FvkidpOI+siszQiv8QQ+gJhhJj8RBIOkEidgftQ9m3LkkyCoAXsVZubTPzSckRgjruD4+zrc4d7Y0rNxSd4ZgDbwP4ikdsmd6I8P4jVBcgNs3aDOkgjEHv1zO0UxFtbVyUKsCIIIIk7RAMiNt/Wgr3AkPqABJ3X8JHKRON5WAelDL4uberzQoWC0gyVQMFJaIz3g77TsLAcXqyIIZZnrO6iO/9j7UmhpkF6+klBDErBDbx/C3TYnB/Kut3SuEAiB+Ij06K3bvUBSSH3BXcA7kETBAnOB/TJFQLetAQ4iMfMFBIA1GGJg7fSKVhRmeN4ovxLJbOjyNFtdCgrKnS7OIyNe04wBGarfiW/LJbO6KJ/oACckQJnux3Mki2+HbzT5ysM6nBkMQTvGNyR+dG+NMHtIyuzaWwIJhWUE6iSTjSPTJ2rXCZhygjwHigvD30AGpbV27PqQtrT7QT+VWHjXBeeLFtSCyWmd840wgOR+IkY2md6pfA3/dcSoEvdRVB9NQZxPqPzAozwu/c8662WVgqF1jUsFdBjfcDtPTFHUa4AfiPxI3HNsNNu3KL66ca8Ykx0xWi8A49+ItkOBotsoCgQNMeuS080zvmNqxPEoFZlydJMEiCQNjHSd63/w1wXki9ZJJi6YxuPKttO/SQKJ4Q4W5EqIP2nVAAGlXEAAswZgxgdNCrPYVU/FaMeL4duWHCooI1Z1kMWHWNQP/AFNHeJ8eeEhmVn8xemBgGcnYS0j/AIrI3/Frt68ruRIJCA4VNWBkZgYkneKiKfJUmuDdXrUE4OJIUHc5gKejSpA27bman0kEc5z+LSoOGn5dUEnAG55Zkg4rPh2+94PZcFbtkkZ3OCult5gx7wDRjNMcrDMhTnaCgGwMNB7ZXODSaK5I794oo5Z14kLKhTOP5SOnaAAYgUy3cO0bA5BaWMFgQ2QeYNjqfRRRl7+SDGQBtzFoxG3XOwYbQapfCeMLMykaYx22kGZnmMxj+Ix3pE8MM4UruhLa1ZSTJJ1GIBiTlDynOBtDTw4EEAnBUQQBuTKwNJbbUhkEgyO9C8RfKyrK2ojfAEwF5iPmyLZyIwcRRY8XtoqkN+KFAyVglhuZCnPt32FMMDr1gG6cQvOx5tOAxwx6AYIxmfam/svTAMgHc6OpWDnC9CN1gZmls3VYHQTEwvoAgZQZk4wZwZt7miLiRIBmPlEg/KwOBHzSo7c24pDpAr8ANGDqZo2VjpiTGDuSAIzuIzihj4fsWMjBJnaCVzJ2B0tnop+pFt7RcXji5pCTI+UFgAQI1EEjmM9PovEcQlxGgx07EDLDM4EkyP5s5mgWDuD4ZbZ04cEsTPzAr3jfViSR023NSeKjWgCgkpzaQeizLScsNyNpDHE4qv8AC+BuBxylmbYYCsTsc5gAdJkEHM0Zx7abdxxphnVDJ6M6ryRgcjBgQRGYOKfUFwWHhvD6bbqDKsZUnZgAACIx0gkRsaG8beA1xATpUaguTpadvUGTA6A43ovhDCyBK6uZQIiH0wQPYkZ2NELpZGOpgFnIiOZZXPQnaT1FLqX0A+Psm9aVdnSJnA2Izg46+2PWqXj0bhGZlCC1JKgHmUmCbaiIjUxiOm+K0FtXtx+8knSSYAGpmVI22nP0jtEXxBwaXSiXJhySIgZ9D3mcbZ9qawJ5MTwts3rjXQIMs0AjLQzkCT7n8q0niJUKjgaS6qZMsVPMRJGzQRknb1AJqL/CPw1xkKt5YdijjIA0zE5gwRvWi4VxeUlQH3GkD+UKgIHYsMz/AMXNkRQAt9r2i21ssTp0k/hWIOgASRynY96sPFrt0aH8wqo5GJUGWE6fMJypONlztRC8AiqhXlbSD+IyxHMpHUT09KNsMZCGGkQcY+xOTgdKguiqucRy6GIJY4dY0i4v7xVGTBIBztHeg/DeHNu3oWVAVGGTGhxN1O4Kvrg9isd6M42za1FAFHNadNhmVDjGAy+WD7ET1FEC4Cp5RJJgQRgovfGo467EdqYis8RVms31gHTbLk+ztG+ZhB9qO8Mug2kIOfLtkgbwFXr/AO3sZ96l4W2AwLjBUoSAdoaQAdpHT0FVvh1gpaRCZKagfWLkSAcEY36g0dB9Qx7gZRDspBABOQoxJgdlZhPQxvS8RwYeDIGPwtE4GT6+naKaCBGsjdiO8sRAxknr+ddYYZz2MxiflIE+o/OobKRlvizxfXeEAiBAJIbBYyQNtsfSgLN19IKCFUYO0TgYI/4zVfavDUC41AYjaREDPpg+vWtLwyG/bHlmTbGVCadRPzQqiD+EDtpGABWzVHPbYFwV0/IyjeAwAAJPQx1qy8IzcKkaRcgswI+dY0BpBGzE/SrPguCmwui2nmdS40kkKBk507/cGN6m4y8RxNjZkEwsgXGKoQ0gnbmJms7LUKyV3HeCC8ygsSFbn1ECVYFmAIiGkKP9ROYir+7wjOxuIYLEYk8wMmCD6BfpQNi0xNxGtsCbhcHfDsGKtkgDSe+xrQ6ltqQ2zAiOokAA+hAmKTkaJIpfEPia3Zb9nPMwGhhPKdQ+Ysflzgqw2M7ZOV4H4fS4TcDKUDfLOVGrY5nGe8jtQ/HfDdy0cc4mFIAExmSJ7A49K03g3CaUE4YKWbqTcuTqiN4CsMd4qqUVaIzJ0wngW0XHuzi44hoMc5Vbak9JJGfUe1D+OXltW0Nvm1KrEkiQgIKh5iRnrntma7xbxhUtPZSDr5WxMapAjrqMiFPaqzhOCdzrvcukT5bKIOklWVw4gwuggCR7b0V1BvoiTwnjrty7LAhQN8AmRhlB+YMR0mI9asLfCK3KWcAxBO07bCZ+Xt+E7aadbtKNIUKFAVRjPTTAjGR/9s1128wkwSSG65zLKcg51gdJBO/dDUe5FbtoOdgSMfMckxMbf9SPrVeP8GLjlrYE9QGjBwSBtmfrNWL8aGEXBA0tyiBBJPLAERIHbAGaFtpgFn7jPTBMY/r0o4JklVEFjULZXQAdsknAAB36EDO+1E8GX1KryMxgyZIAEL1PT7VHI21bdJJIzH+3t609rarBZ8mSsdYAJ3IjmIH3pEodZWWxB33bYfT5id/+8P49AoIUxgqSJ68pwIxvt2H1Z4XaLgsZJzEbnSuPWYjEHrnFJxVr51O6gkH0IEkE4jNLNj6F5wNhzdaF5VVVkkNpkrpMDIPIMZA5u9VnF2ptWuFZHc+aGZgVGVuXWukkZOCdo9COl+hZSHBki3DbmXBYkGMQC4rO8NxPm39Mg20sKrSJlmiTJyDAP1Le9Wi2aXg1ItyASY1DJ1SMkBhjfp+XWhEsAIttsqSRkaTPMEmB3AEY6UnFsU0aCNL6TjM6GVmWDnIM79qk8zlJI7OM/wALalAxtIXvj7VJRDx1hlRboE+WdcaolZkq2NhM9qXxniVHD62MGRcQjmzIyBPMJIxINc/G6gbcgXNMiRAICnKdGE5weoiqq14kLoVNC6bSpEBdBbBK7fLgb4x0jNpEtlrcvW2Uvr5cyw5hIEdRMSY2/F0O0fDBUu6AsO66yu04adMjfcdBynPWpX4EC2OYjzFCgjJVjIAOqNQgkH775qHg3lFFyUdZCtB/DIAB3jmJEdjEwRQBY8Y4Kq2YUEgzk7EEziZn7VHcvMGRgNQY7kHaRtGJ6wdo9qbxfE8pmWaQREHTELC46wT9alfiVS2z61hPmnYQCem+/rt6VDKRmOB//K1KIW/ebOyxqBIg/Lq6j1q7tsNR7NsIwJBmYxGY9DpFZfg/Gdd5xbWA9wiZgEXbiQY3UFokZ36Vo+DcglVzADMvUAKryOknO+4jqKtohMPfhgwOoaiCYjcHJIkdDq+xqC9ZAQxqJGAe0zgiMjbB7Va3L4KAyIBntnbP0FDoASSM5IyO3X2jr7VCNGVXE2lA1AENIzywMaRpxgTGSemapuBvPati22WDNqOkHeDufefrWj4rgQBqAJOZ/wAogNjpEA+/vjPcV4kbLHyl84MSSRJCxss7TETQuwm+phxWm+HLj2Lb3ympSrxt0657sg/9PSsyn+1eieE2x5dtIlWtKSDkTIM52zWsuDCCyXgtjSNM8yzsCBkAcsfftWVucG37XcvKG+XSpkkhoX66SJHuTWs8SUAkjEJrH+aWye+wwcVTeAoGWWySNUneS5Mz+t6yWFZu8uibhuIZWE51aR22SInrhfsvpRF+/LFWQESeo+2ev9x3qLi2IAI3yfrE1meKc8mT16nscflSFKW00viPEknTaI1AsAY5dUAwf4px6UIOLW2nlJpZ421KTltOorqBjUV+4jpUCrpKqJAOSJOTikvCRaBJOp2BknIUrA/XenQWL4f4ULZJuRdu6gp+YEqW1RoyJXeQMd6XhuN1yulpVpyCDyggnI6kzAnLbbwPoCqjACZPr2Gx96nscc8HIEKNlUd+wotgiwa7bBgliAVJ0kZGJwwJmQCdUbdaH4W3K6Q2TsPc6yFPaQ0H+XMHal4u2Ev3AogQuPe2jH82P3oc8ddFpiLjAgEiCRBDwDj0J+9OqJ35LO94Tca4dLJOmdzMABixEAgMJI94MRXcR4U6BNTpOpgB1aIjT0mGGP6VS2uLdblwhjOlszOdW+evrSeN32863LE6oLAmQSeUmDiYMTvTp2S2uaLb/wCLaPMDABgDBEEZO4GAJ79vSpfELAIWDoKKfm5wQZGwyp5SJG5gxk0FwtxvKtrqMQuJMZ9Ke7kpJyZ6+8f0xSsTargk4XxW2GFtV1QcEGMydRGCflIjtneKskvi6zggKGVrYUsTqlQADiIOpj/+s/Wr4dZJnvH0hT/vWh4hAGtMN9IaeszG/sAI9+5pNlxsOugJ5fPuznVGJBJOBk5Y+/Ws34TNl7lm6rC7cd3SQCHtjZZHWdR09j6gVYLdLOysSQtskd5N0KSTuTA3NM8QzwtyQD5dp2QkAlW8tTIbeZZvy7CiJT7kXEcazcObogFiTaJj5Swt229Mc07bT0o4D/8AyEjSuqNJlRGD6bj7RQPh7lg6ttbtrpG0S0nbfKjftUvGsRxFuOpRT1wSgiT6E/emFkXjfFNasi2yj5dIXUZDsDlXGw5px/CelVnhLAqOqtyIciVEqY7cx3Hf2o7/AMi/Kh9fp8pO23QVW8GY4e2e0qPQa7uP6fYdhVLgh/yNXYYm5oaNOvUqn8OlLakDsJ1n/uk8R+a2kEMeZTsCWYKynTjIjpjV9aZwF0lg05KkT/7f2oji1Bs2GIEg2CDAwSyTHapZZXeOcVw4ARxcYsCCqOUXTgDWFbAMTAGeu+c/4pfR7flIgs2wIEGdiDzE5Yf971J4naAu3QBgM0feq5LzLetkfxxkAjeNjiiKM3K2HeHeElLoCKSNY1sY1IEXUdSq0jJUgRmI99F4nbez+9RVJQgsN2NsBkYkDrBHT8PtRHA8MiFUVQFYOzdy2i5zE7zgZnoO1GcXeYbHpP3t6jHbOabZaiB8GhexnmcIqEExjRpgEfKxMmM5I9KK8P4kHlwpSARvBgAg9gCQPyoLw2yACwmW4gTk5hggxt8uKq/hW2PKLdTdck99Ny0BPfDN/wCxood5NPx1wIA7EBVO5IjJX7zke8UD8PeEoBcdkT945cDSsKpyqrIiAIEiJo61lbk5iSPQgSI7ZqLg+JfVcGowDj7sP9hSTCj/2Q==') center / cover;
                        }

                        .xios-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgtJ2gKjIUrR6FL3Kp71OvczeQxd1SizPHRzEu9fnyYGCrRk7N') center / cover;
                        }

                        .samos-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('https://www.ba-aigaio.tee.gr/wp-content/uploads/2017/05/assets_LARGE_t_183762_54059396_type13145.jpg') center / cover;
                        }

                        .icaria-card-image.mdl-card {
                            width: 256px;
                            height: 256px;
                            background: url('http://www.ba-aigaio.tee.gr/wp-content/uploads/2017/05/ikaria-location.jpg') center / cover;
                        }

                        .card-image > .mdl-card__actions {
                            height: 52px;
                            padding: 16px;
                            background: rgba(0, 0, 0, 0.2);
                        }

                        .card-image__filename {
                            color: #fff;
                            font-size: 14px;
                            font-weight: 500;
                        }
                    </style>


                    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__supporting-text">
                            <h4><b>Προκηρύξεις - Διαγωνισμοί</b></h4>
                        </div>
                        <div class="mdl-grid">

                            <div class="card-image ba-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename"
                                       href="http://www.pvaigaiou.gov.gr/web/guest/diagonismoi">ΠΕΡΙΦΕΡΕΙΑ Β.
                                        ΑΙΓΑΙΟΥ</a>
                                </div>
                            </div>

                            <div class="mdl-layout-spacer"></div>

                            <div class="card-image lesvos-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename" href="http://www.mytilene.gr/category/prokiriksis/">
                                        ΔΗΜΟΣ ΛΕΣΒΟΥ</a>
                                </div>
                            </div>
                            <div class="mdl-layout-spacer"></div>
                            <div class="card-image limnos-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename"
                                       href="http://www.limnos.gov.gr/index.php?option=com_content&task=blogcategory&id=40&Itemid=215">
                                        ΔΗΜΟΣ Λημνου</a>
                                </div>
                            </div>
                            <div class="mdl-layout-spacer"></div>
                            <div class="card-image xios-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename" href="http://www.chioscity.gr/dimotes/prokirikseis">
                                        ΔΗΜΟΣ Χίου</a>
                                </div>
                            </div>
                            <div class="mdl-layout-spacer"></div>
                            <div class="card-image samos-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename"
                                       href="http://www.islandofsamos.gr/enhmerwsh/diagwnismoi-prokhrukseis">
                                        ΔΗΜΟΣ Σάμου</a>
                                </div>
                            </div>
                            <div class="mdl-layout-spacer"></div>
                            <div class="card-image icaria-card-image mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand"></div>
                                <div class="mdl-card__actions">
                                    <a class="card-image__filename"
                                       href="http://www.islandofsamos.gr/enhmerwsh/diagwnismoi-prokhrukseis">
                                        ΔΗΜΟΣ Ικαρίας</a>
                                </div>
                            </div>
                            <div class="mdl-layout-spacer"></div>

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
                                       target="_blank">Μηχανικός</a>
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