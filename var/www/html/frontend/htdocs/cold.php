<!DOCTYPE html>
<html lang="en">
<?php include '../lib/common.php'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <title></title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="canonical" href="">
    <meta name="theme-color" content="#310f72">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    
    <!-- Global site tag (gtag.js) - AdWords: 1045328140 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1045328140"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-1045328140'); </script>
    
    
</head> 
<?php include "includes/sonance_header.php"; ?>
<body id="wrapper">
    <?php include "includes/sonance_navbar.php"; ?>
    <!-- <div id="colorPanel" class="colorPanel">
        <a id="cpToggle" href="#"></a>
        <ul></ul>
    </div> -->
    
    <header>

        <div class="banner row">
            <div class="container content">
                <h1>COLD WALLET</h1>
            </div>
        </div>
    </header>
    <div class="page-container">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group currency-select col-md-4 col-sm-4 col-xs-12">
                        <p></p><br><br>
                        
                        
                    </div>
                    <div class="info-table-outer">
                        <!-- <img src="img/trezor.png" style="margin-left: 10%;"> -->
                        <img src="img/trezor.png" height="100" width="100" style="margin-left: 18%;">

                        <p style="margin-top: 6%;">
                            Trezor is a hardware wallet used for storing bitcoins and other crypto currencies without having to trust a third party. Essentially a USB dongle, it is designed to sign bitcoin transactions with private keys generated offline within the device. It can be used to sign transactions on 'unsafe' computers and is impervious to keyloggers and other digital threats.
                        </p>

                        <center>
                        <trezor:login callback="trezorLogin"></trezor:login>
                        </center>

                        <span style="display: inline-block;margin: 0 0 1em;font-size: 14px;width: 100%;
                        color: red;background: #f7e0e0;text-align: center;padding: 10px;border-radius: 3px;" id="error"></span>
                        </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group currency-select col-md-4 col-sm-4 col-xs-12">
                        <p></p><br><br>
                        
                        
                    </div>
                    <div class="info-table-outer">
                        <!-- <img src="img/trezor.png" style="margin-left: 10%;"> -->
                        <img src="img/ledger.png" height="100" width="100" style="margin-left: 18%;">

                        <p style="margin-top: 6%;">
                            Ledger Nano S is a Bitcoin, Ethereum and Altcoins hardware wallet, based on robust safety features for storing cryptographic assets and securing digital payments. It connects to any computer (USB) and embeds a secure OLED display to double-check and confirm each transaction with a single tap on its side buttons.
                        </p>

                        <center>
                        <button class="btn btn-primary">Coming Soon</button>
                        </center>

                        </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="form-group currency-select col-md-4 col-sm-4 col-xs-12">
                       <img src="img/ledger.png" style="margin-left: 120%;">
                    </div>
                    <div class="info-table-outer">
                        
                    </div>
                </div> -->
            </div>
        </div>
    </div>
  <!--   <div class="footer-links ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <p><strong>Links:</strong></p>
                    <p class="links ">
                        <a href=" ">NEO</a>
                        <a href=" ">Bitkan</a>
                        <a href=" ">BTC123</a>
                        <a href=" ">8BTC</a>
                    </p>
                </div>
            </div>
        </div>
    </div> -->
<!--     <footer>
        <div class="container ">
            <div class="row ">
                <div class="col-md-6 col-xs-12 links ">
                    <ul>
                        <li><a href=" ">About</a></li>
                        <li><a href=" ">Terms</a></li>
                        <li><a href=" ">Privacy</a></li>
                        <li><a href=" ">Fees</a></li>
                        <li><a href=" ">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12 social ">
                    <ul>
                        <li><a href=" "><i class=" "><i class="fab fa-facebook-f "></i></a></li>
                        <li><a href=" "><i class="fab fa-twitter "></i></a></li>
                        <li><a href=" "><i class="fab fa-reddit-alien "></i></li>
                        <li><a href=" "><i class="fab fa-google-plus-g "></i></a></li>
                        <li><a href=" "><i class="fab fa-medium-m "></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row copy-bar ">
                <div class="col-md-6 col-xs-12 copy ">
                    <p>&copy; 2017-2018 Sonance.com All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-xs-12 statistics ">
                    <p><span class="gray-color ">24h Volume：</span> 1,211,621.18 <span class="gray-color ">BNB/</span> 81,420.07 <span class="gray-color ">BTC/</span> 238,606.22 <span class="gray-color ">ETH/674,419,885.28 <span class="gray-color ">USDT</span> </p>
                </div>
            </div>
        </div>
    </footer> -->
    <?php include "includes/sonance_footer.php"; ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js "></script>
    <script type="text/javascript " language="javascript " src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js ">
    </script>
    <script type="text/javascript " language="javascript " src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js ">
    </script>
    <!-- Color Switcher -->
    <script type="text/javascript" src="js/jquery.colorpanel.js"></script>
    <!-- Custom Scripts -->
    <script type="text/javascript " src="js/script.js "></script>

    <script type="text/javascript" src="js/connect.js"></script>
</body>

<script type="text/javascript ">
$(document).ready(function() {
    $('.info-data-table').DataTable();
});
</script>
<script type="text/javascript ">
jQuery(document).ready(function($) {
    $(".clickable-row ").click(function() {
        window.location = $(this).data("href ");
    });
});
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $('#colorPanel').ColorPanel({
        styleSheet: '#cpswitch',
        animateContainer: '#wrapper',
        colors: {
            '#2f3340': 'css/skins/default.css',
            '#16a085': 'css/skins/seagreen.css',
            '#000000': 'css/skins/black.css',
            '#4b77be': 'css/skins/blue.css',
            '#c0392c': 'css/skins/red.css',
        }
    });
});
</script>

<script type="text/javascript">

    function trezorLogin(response) {
        console.log(response);
        if (response.success) {
            localStorage.setItem("public_key", response.public_key);
            localStorage.setItem("signature", response.signature);
            window.location.href = "trezor";
            console.log(response);
        }else{
            $("#error").show();
            document.getElementById("error").innerHTML = response.error;
        }
    }

    $("#error").hide();

    </script>
      <script type="text/javascript" src="js/ops.js?v=20160210"></script>

</html>