<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
	<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
      <!---/. page-wrap-->

      <!-- Footer-->

      <footer class="footer-wrap">
        <div class="top-footer">
         
          <!---/.---->
        </div>
        <!----/.top-footer---->

        <div class="lower-footer">
          <div class="container">
            <ul>
              <li>
                <p>Following are the links</p>
              </li>
              <li><h3>Links:</h3></li>
              <li><a href="">Home</a></li>
              <li><a href="">About us</a></li>
              <li><a href="">Contact us</a></li>
              <li><a href="">Login</a></li>
            </ul>
          </div>
          <!---/.---->
        </div>
        <!--/.lowerfooter---->
      </footer>
      <!---/.footer wrap ----->
    </div>
    <!--/.site wrap -->
  </body>
</html>
