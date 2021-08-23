

    <!-- footer -->
    <footer style="bottom: 0; left: 0; right: 0; background-color: rgba(194, 179, 179, 0.342);">
        <p class="h6 text-center py-3 mb-0">&#169; 2021 Copyright | Sunnysky</p>
    </footer>


    <!--   JS  file area start  -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

  
    <!--   JS  file area  end-->

<script src="js/wow.min.js"></script>


<!--   JS  file area  end-->

<script>

    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };
</script>


<script>
  
    $('#owl-feature-services').owlCarousel({
        loop: true,
        margin: 10,
        // nav: true,
        dots: true,
        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
</script>
<script>
    $('#myCarousel').carousel({
        interval: 3000,
    })
</script>

</body>

</html>
