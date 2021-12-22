<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="asset/style-login.css">
  <link rel="stylesheet" href="asset/movingbubbles.css" type="text/css" />
</head>

<body>
  <div id="login-form">
    <h1><i class="fa fa-shopping-cart" style="font-size:24px"></i> E-TPS</h1>
    <div class="titel"><i class="fas fa-user"></i> Username</div>
    <div class="input-box">
      <input type="text" class="form-control" id="username" placeholder="Masukkan Username">
    </div>
    <div class="titel"><i class="fas fa-lock"></i> Password</div>
    <div class="input-box">
      <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
    </div>

    <label>
      <input type="checkbox" name="remember"> Remember me
    </label>

    <button class="login-btn">Login</button>

  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script>
  $(document).ready(function() {

    $(".login-btn").click(function() {

      var username = $("#username").val();
      var password = $("#password").val();

      if (username.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Username Wajib Diisi !'
        });

      } else if (password.length == "") {

        Swal.fire({
          type: 'warning',
          title: 'Oops...',
          text: 'Password Wajib Diisi !'
        });

      } else {

        $.ajax({

          url: "proses/ceklogin.php",
          type: "POST",
          data: {
            "username": username,
            "password": password
          },

          success: function(response) {

            if (response == "success") {

              Swal.fire({
                  type: 'success',
                  title: 'Login Berhasil!',
                  text: 'Anda akan di arahkan dalam 3 Detik',
                  timer: 3000,
                  showCancelButton: false,
                  showConfirmButton: false
                })
                .then(function() {
                  window.location.href = "dashboard/dashboard.php";
                });

            } else {

              Swal.fire({
                type: 'error',
                title: 'Login Gagal!',
                text: 'silahkan coba lagi!'
              });

            }

            console.log(response);

          },

          error: function(response) {

            Swal.fire({
              type: 'error',
              title: 'Opps!',
              text: 'server error!'
            });

            console.log(response);

          }

        });

      }

    });

  });
</script>
<script src="js-bubble/movingbubbles.js" type="text/javascript"></script>
<script type="text/javascript">
  /**
   * A function for the settings sliders to properly update bubbleOptions
   * @this {Window}
   * @param {[object HTMLInputElement]} slider The slider element
   * @param {String} bubbleSetting The variable name of bubbleOptions that the slider modifies
   */
  function sliderUpdate(slider, bubbleSetting) {
    var value = parseFloat(slider.value);
    //Special cases
    //The bubble-pixel ratio requires changing the number of bubbles
    //And if the bubble cap is lower than the number of bubbles,
    //then the bubbles also need to be changed
    if (bubbleSetting == 'ratio' ||
      (bubbleSetting == 'maxBubbles' && bubbleOptions.bubbles.length > value)) {
      var bubbleContainer = document.getElementById('bubbleContainer');
      if (bubbleContainer) {
        document.body.removeChild(bubbleContainer);
        bubbleOptions.bubbles = [];
      }
    }
    slider.title = value + " - bubbleOptions." + bubbleSetting;
    bubbleOptions[bubbleSetting] = value;
    //Turn the ratio slider into an inverse 100-20 scale
    if (bubbleSetting == 'ratio') {
      slider.title = "Pixel to Bubble Ratio: 1:" + value + " - bubbleOptions.ratio";
      value = (120000 - value) / 1000;
    }
    document.getElementById(bubbleSetting + "Slider").innerHTML = value;
    bubbleOptions.update();
  }
</script>

</html>