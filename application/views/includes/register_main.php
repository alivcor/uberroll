
    <div class="">
      
      <div id="wrapper">
        <div id="login" class=" form">
          <section class="login_content">
              <?php echo validation_errors(); ?>
            <form action="http://localhost/uberroll/registeruser" method="post">
              <h1>Register Now !</h1>
          
              <div>
                <input type="text" class="form-control" placeholder="Name" required="" name="fullname" />
              </div>
               <div>
                <input type="text" class="form-control" placeholder="Email" required=""  name="useremail"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  name="password_f"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Retype Password" required=""  name="password_s"/>
              </div>
              
              <div>
                <button class="btn btn-default submit" type="submit">Register Now</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">

                
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><img src="http://localhost/uberroll/img/uberroll.png"/></h1>

                  <p>©2016 All Rights Reserved. UberRoll is a Private Ltd Company. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  