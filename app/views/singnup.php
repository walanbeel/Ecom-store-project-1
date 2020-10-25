<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Store</title>
    <link rel="stylesheet" href="../app/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../app/assets/css/style.css" />
    <link rel="stylesheet" href="../app/assets/css/font-awesome.min.css" />
  </head>
  <body>  
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
              <div class="signin my-5">
                <div class="signin-body" style="direction: rtl;">
                  <h5 class="signin-title text-center">التسجيل</h5>
                  <div class="error" id="div_erroe"></div>
                  <div class="success"></div>
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                  <form class="form-signin" action="singnup/add" method="post" >
                    <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="الإسم " name="full_name" required autofocus>
                        <label for="inputName" ></label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="اسم المستخدم " name="user_name" required autofocus>
                        <label for="inputName" ></label>
                      </div>
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control"placeholder="الإيميل" name="email" required autofocus>
                      <label for="inputEmail" ></label>
                    </div>
                    <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="العنوان" name="address" required autofocus>
                        <label for="inputName" ></label>
                      </div>
                      <div class="form-label-group">
                        <input type="text" id="inputName" class="form-control"placeholder="رقم الهاتف  " name="phone" required autofocus>
                        <label for="inputName" ></label>
                      </div>	
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder=" كلمة المرور" name="password" required>
                        <label for="inputPassword"> </label>	
                        <?PHP $creation_date=date("Y-m-d H:i:s"); ?>
                        <input type="hidden" checked="" class="custom-control-input" name='creation_date' value= <?PHP echo $creation_date; ?>>
                      </div>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">تسجيل </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
 
