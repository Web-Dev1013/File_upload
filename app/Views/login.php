<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Riyadh Login</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Riyadh/assets/css/style.scss">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

</head>

<body>
  <div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  Successfully Login.
  </div>
  <div class="alert alert-warning alert-dismissible fade in">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> Failed Login
  </div>
  <div class="container mt-5">
    <div class="card offset-md-4 col-md-4">
      <div class="card-body">
        <h3 class="text-center"> Login </h3>
        <form role="form" data-toggle="validator">
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label>Password</label>
            <div class="form-group">
              <input type="password" data-minlength="4" class="form-control" id="password" name="password" data-error="Have atleast 4 characters" placeholder="Password" required />
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" id="login" class="btn btn-primary btn-block">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url() ?>/Riyadh/assets/js/script.js"></script>
</body>

</html>
<script>
  $(function() {

    $("#login").click(function(e) {
      e.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();
      $.ajax({
        url: "<?php echo base_url("Riyadh/public/index.php/home/login") ?>",
        type: "post",
        data: {
          email: email,
          password: password
        },
        // async: false,
        success: function(res) {
          if (res == "success") {
              $(".alert-success").removeClass("in");
              $(".alert-success").addClass("show");
            setTimeout(function() {
              $('.alert-success').removeClass('show');
              location.href = "<?php echo base_url("Riyadh/public/index.php") ?>";
            }, 1000);
          } else {
              $(".alert-warning").removeClass("in");
              $(".alert-warning").addClass("show");
            setTimeout(function() {
              $(".alert-warning").removeClass("show")
            }, 1500);
          }
        }
      });
    });
  });
</script>