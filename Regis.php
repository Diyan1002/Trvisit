<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="style.css" />
    <!--Link Boxicons File-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="boxicons/css/boxicons.css" />
    <style>
      body {
        background-size: cover !important ;
        background-position: center !important;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-image: url(images/login.jpg);
      }
      .box {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 0 15px;
    
      }
      .box2 {
        width: 350px;
        background-color: #212529e0;
        display: flex;
        border-radius: 16px;
        flex-direction: column;
        padding: 55px 65px;
        overflow: hidden;
        box-shadow: 0 0 50px rgb(0, 204, 255);
      }
      .box2:hover{
        animation: animate 1s linear infinite;
      }
      @keyframes animate{
        100%{
          filter: hue-rotate(360deg);
        }
      }
      span {
        color: aliceblue;
        font-size: small;
        display: flex;
        justify-content: center;
        padding: 10px 0 10px 0;
      }
      header {
        color: aliceblue;
        display: flex;
        font-size: 30px;
        justify-content: center;
        padding: 10px 0 10px 10;
      }
      .input {
        height: 45px;
        width: 100%;
        border: none;
        outline: none;
        border-radius: 30px;
        color: aliceblue;
        padding: 5px 0 0 30px;
        background: rgba(255, 255, 255, 0.1);
      }
      .input-field {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .submit {
        border: none;
        border-radius: 30px;
        outline: none;
        font-size: 15px;
        height: 45px;
        width: 100%;
        background: rgba(255, 255, 255, 0, 7);
        color: aqua;
        cursor: pointer;
        transition: 0.3s;
        margin-top: 5px;
      }

      .submit:hover {
        box-shadow: 7px 5px 7px 1px rgba(0, 0, 0, 2);
        animation: animate 1s linear infinite;
      }
      @keyframes animate{
        100%{
          filter: hue-rotate(360deg);
        }
      }
      i {
        position: relative;
        top: -25px;
        left: 17px;
        color: aliceblue;
      }
      ::-webkit-input-placeholder {
        color: aliceblue;
      }
      .bottom {
        display: flex;
        flex-direction: row;
        word-spacing: 20px;
        align-items: center;
        font-size: small;
        color: #fff;
        margin-top: 10px;
      }
      .radioBox {
        display: flex;
        gap: 5px;
      }
      .left {
        display: flex;
        gap: 15px;
      }
      label a {
        color: #fff;
        text-decoration: none;
      }
      label {
        margin: 0;
      }
      .empty {
        width: 100%;
        height: 20px;
      }
    </style>
  </head>
  <body>
    <div class="box">
      <div class="box2">
        <form action="signup.php" method="post">
        <div class="top_header">
          <a href="logi.php"> <span>Back To Login</span></a>
          <header>Sign up</header>
        </div>
        
        <div class="empty"></div>
        <div class="input-field">
          <input type="text" name="first_name" class="input" placeholder="First Name" required />

          <div class="input-field">
            <input type="text" name="last_name" class="input" placeholder="Last Name" required />

            <div class="input-field">
              <input type="email" name="email"  class="input" placeholder="Email" required />

              <div class="input-field">
                <input type="password" name="password" class="input" placeholder="Password" required />

                <div class="input-field">
                  <input
                    type="password"
                    class="input"
                    name="confirm_password"
                    placeholder="comfirm password"
                    required
                  />

                  <div class="bottom">
                    <div class="left">
                      <div class="radioBox">
                        <input type="radio" id="check" name="gender" />
                        <label for="check">Male</label>
                      </div>
                      <div class="radioBox">
                        <input type="radio" id="check2" name="gender" />
                        <label for="check2">Female</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="input-field">
                <input type="submit" class="submit" value="Sign Up" />
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
