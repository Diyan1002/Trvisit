<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
        background-image: url(images/ba.jpg);
      }
      .box {
        display: flex;
        justify-content: center;
        padding: 0 15px;
        align-items: center;
        min-height: 90vh;
      }
      .box2 {
        width: 350px;
        background-color: #212529e0;
        display: flex;
        border-radius: 16px;
        flex-direction: column;
        padding: 50px 55px;
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
        padding: 0 0 0 45px;
        background: rgba(255, 255, 255, 0.1);
      }
      .input-field {
        display: flex;
        flex-direction: column;
        gap: 15px;
        position: relative;
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
        position: absolute;
        top: 15px;
        left: 15px;
        color: aliceblue;
      }
      ::-webkit-input-placeholder {
        color: aliceblue;
      }
      .bottom {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-inline: 5px;
        font-size: small;
        color: #fff;
        margin-top: 10px;
      }
      .left {
        display: flex;
        align-items: center;
        gap: 5px;
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
        <form action="log.php" method="post">
        <div class="top_header">
          <a href="Regis.php"> <span>Create New?</span></a>
          <header>Login</header>
        </div>
        <div class="empty"></div>
        <div class="input-field">
          <input
            type="email" name="email"
            class="input"
            placeholder="Enter Email"
            required
          />
          <i class="bx bx-user"></i>

          <div class="input-field">
            <input
              type="password"
              name="password"
              class="input"
              placeholder="Enter Your Password"
              required
            />
            <i class="bx bx-lock-alt"></i>

            <div class="input-field">
              <input type="submit" class="submit" value="Log In" />

              <div class="bottom">
                <div class="left">
                  <input type="checkbox" id="check" />
                  <label for="check">Remember Me</label>
                </div>
                <div class="right">
                  <label> <a href="#">Forget password?</a></label>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
