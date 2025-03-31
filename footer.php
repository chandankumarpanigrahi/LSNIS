<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h3>About Us</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique
                            dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis
                            felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h3>Service Area</h3>
                                <a href="#">Lorem ipsum</a>
                                <a href="#">tempus posuere </a>
                                <a href="#">velit id accumsan</a>
                                <a href="#">ut porttitor</a>
                                <a href="#">Nam pretium</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h3>Useful Link</h3>
                                <a href="#">Sed pretium</a>
                                <a href="#">ultricies turpis at</a>
                                <a href="#">Mauris cursus</a>
                                <a href="#">consectetur</a>
                                <a href="#">condimentum</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h3>Get In Touch</h3>
                                <p><i class="fa fa-map-marker-alt"></i>Bhubaneswar, Odisha</p>
                                <p><i class="fa fa-phone-alt"></i>+91 12345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/plugins/uikit/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <!-- Loader JS -->
    <script type="text/javascript">
        $(window).on("load", function () {
            // $(".loader").delay(1000).fadeOut(200); // By default
            $(".loader").delay(0).fadeOut(200);
        });
    </script>

    <script>
        // Function to redirect to a given link in a new tab
        function redirectToLink(url) {
            window.open(url, '_blank'); // Open the URL in a new tab
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuItems = document.querySelectorAll(".menu li");

            menuItems.forEach(item => {
                item.addEventListener("click", function () {
                    // Remove active class from all
                    menuItems.forEach(li => li.classList.remove("active"));
                    // Add active class to the clicked one
                    this.classList.add("active");
                });
            });
        });

    </script>

    <script>
        window.onscroll = function () {
            var header = document.querySelector("header");
            if (window.pageYOffset > 0) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        };
    </script>

    <script>
        // Counts
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-countto");
            countDuration = parseInt($this.attr("data-duration"));
            $({ counter: $this.text() }).animate(
                {
                    counter: countTo
                },
                {
                    duration: countDuration,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.counter));
                    },
                    complete: function () {
                        $this.text(this.counter);
                    }
                }
            );
        });

    </script>
    <script>
        // JavaScript to make it work
        document.addEventListener('DOMContentLoaded', () => {
            const cursor = document.createElement('div');
            cursor.classList.add('custom-cursor');
            document.body.appendChild(cursor);

            document.addEventListener('mousemove', (e) => {
                cursor.style.left = `${e.clientX}px`;
                cursor.style.top = `${e.clientY}px`;
            });

            document.addEventListener('mousedown', () => {
                cursor.classList.add('click-effect');
            });

            document.addEventListener('mouseup', () => {
                cursor.classList.remove('click-effect');
            });

            // Hide cursor when it's not needed
            document.addEventListener('mouseleave', () => {
                cursor.style.opacity = '0';
            });

            document.addEventListener('mouseenter', () => {
                cursor.style.opacity = '1';
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const starReviews = document.querySelectorAll('.star_review');

            starReviews.forEach(review => {
                const starCount = parseInt(review.getAttribute('data-stars')) || 0;
                let starsHTML = '';

                for (let i = 0; i < starCount; i++) {
                    starsHTML += '<i class="fa-solid fa-star"></i>';
                }

                review.innerHTML = starsHTML;
            });
        });
    </script>

    <script>
        new WOW({
            boxClass: "wow", // default
            animateClass: "animate__animated", // default
            offset: 0, // default
            mobile: true, // default
            live: true, // default
            scrollContainer: null // optional scroll container selector
        }).init();

        function resetAnimations() {
            var elements = document.querySelectorAll(".wow");
            elements.forEach(function (el) {
                el.classList.remove("animate__animated");
                void el.offsetWidth; // Trigger reflow
                el.classList.add("animate__animated");
            });
            window.scrollTo(0, 0);
        }
        function scrollToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }

    </script>

    <script>
        $(function () {

            var wrapper = $('.wrapper');
            var windowObj = $(window);

            function decreaseWrapper() {
                wrapper.addClass('small');
            }

            function increaseWrapper() {
                wrapper.removeClass('small');
            }

            windowObj.scroll(function () {
                if ($(this).scrollTop() + $(this).height() > wrapper.outerHeight()) {
                    decreaseWrapper();
                } else {
                    increaseWrapper();
                }
            });


            $('html').on('click', '.small', function () {
                $('html, body').animate({
                    scrollTop: wrapper.outerHeight() - windowObj.height()
                }, 500);
            });

        });
    </script>
</body>

</html>