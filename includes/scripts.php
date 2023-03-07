<script data-cfasync="false"
    src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/meanmenu.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/scrollCue.min.js"></script>
<script src="/assets/js/bootstrap-datepicker.min.js"></script>
<script src="/assets/js/appear.min.js"></script>
<script src="/assets/js/odometer.min.js"></script>
<script src="/assets/js/magnific-popup.min.js"></script>
<script src="/assets/js/fancybox.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/parallax.min.js"></script>
<script src="/assets/js/ajaxchimp.min.js"></script>
<script src="/assets/js/form-validator.min.js"></script>
<script src="/assets/js/subscribe-custom.js"></script>
<script src="/assets/js/contact-form-script.js"></script>
<script src="/assets/js/main.js"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

<script>
// external js: isotope.pkgd.js

$('.grid').isotope({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    // set to the element
    columnWidth: 10,
    gutter: 30
  }
})
</script>

<script>
(function($) {
    var wa_time_out, wa_time_in;
    $(document).ready(function() {
        $(".wa__btn_popup").on("click", function() {
            if ($(".wa__popup_chat_box").hasClass("wa__active")) {
                $(".wa__popup_chat_box").removeClass("wa__active");
                $(".wa__btn_popup").removeClass("wa__active");
                clearTimeout(wa_time_in);
                if ($(".wa__popup_chat_box").hasClass("wa__lauch")) {
                    wa_time_out = setTimeout(function() {
                        $(".wa__popup_chat_box").removeClass("wa__pending");
                        $(".wa__popup_chat_box").removeClass("wa__lauch");
                    }, 400);
                }
            } else {
                $(".wa__popup_chat_box").addClass("wa__pending");
                $(".wa__popup_chat_box").addClass("wa__active");
                $(".wa__btn_popup").addClass("wa__active");
                clearTimeout(wa_time_out);
                if (!$(".wa__popup_chat_box").hasClass("wa__lauch")) {
                    wa_time_in = setTimeout(function() {
                        $(".wa__popup_chat_box").addClass("wa__lauch");
                    }, 100);
                }
            }
        });

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        $("#nta-wa-gdpr").change(function() {
            if (this.checked) {
                setCookie("nta-wa-gdpr", "accept", 30);
                if (getCookie("nta-wa-gdpr") != "") {
                    $('.nta-wa-gdpr').hide(500);
                    $('.wa__popup_content_item').each(function() {
                        $(this).removeClass('pointer-disable');
                        $('.wa__popup_content_list').off('click');
                    })
                }
            }
        });

        if (getCookie("nta-wa-gdpr") != "") {
            $('.wa__popup_content_list').off('click');
        } else {
            $('.wa__popup_content_list').click(function() {
                $('.nta-wa-gdpr').delay(500).css({
                    "background": "red",
                    "color": "#fff"
                });
            });
        }
    });
})(jQuery);
</script>

