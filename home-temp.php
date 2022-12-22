<?php /* Template Name: Home Template */ ?>
<?php 
if(isset($_POST['login_users']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    wpdocs_custom_login($username,$password);
}
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<!--================================-->
      <!-- User Singin Start -->
      <!--================================-->			
      <div class="ht-100v d-flex">
         <div class="card shadow-none pd-20 mx-auto wd-300 text-center bd-1 align-self-center">
            <h4 class="card-title mt-3 text-center">Sing In</h4>
            <p class="text-center">Sing in to your account</p><!--
            <p>
               <a href="" class="btn btn-block btn-twitter tx-13 hover-white"> <i class="fa fa-twitter"></i>   Login via Twitter</a>
               <a href="" class="btn btn-block btn-facebook tx-13 hover-white"> <i class="fa fa-facebook-f"></i>   Login via facebook</a>
            </p>
            <p class="divider-text">
               <span class="bg-light">OR</span>
            </p>-->
            <form method="post" action="#">
               <div class="form-group input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text pd-x-9"> <i class="fa fa-user"></i> </span>
                  </div>
                  <input class="form-control form-control-sm" required name="username"  placeholder="Username" type="text">
               </div>
               <div class="form-group input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                  </div>
                  <input class="form-control form-control-sm" required placeholder="Password" name="password" type="password">
               </div>
               <p class="text-center"><a href="page-password.html">Forget Password?</a></p>
               <div class="form-group">
                  <button type="submit" name="login_users" class="btn btn-custom-primary btn-block tx-13 hover-white"> Login </button>
               </div>
               <p class="text-center">Don't have an account?<br/> <a href="page-singup.html">Create Account</a> </p>
            </form>
         </div>
      </div>
      <!--/ User Singin End -->
      <!--================================-->
      <!-- Footer Script -->
      <!--================================-->
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>