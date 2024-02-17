<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in with Google button</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
<style>
    *,
*:before,
*:after {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: linear-gradient(to right, #2c2937, #1b1823);
  height: 100vh;
}

.container {
  height: 100vh;
}

.g-sign-in-button {
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: 10px;
  display: inline-block;
  width: 240px;
  height: 50px;
  background-color: #010101;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .25);
  transition: background-color .218s, border-color .218s, box-shadow .218s;
}




.g-sign-in-button:hover {
  cursor: pointer;
  -webkit-box-shadow: 0 0 3px 3px rgba(66, 133, 244, .3);
  box-shadow: 0 0 3px 3px rgba(66, 133, 244, .3);
}

.g-sign-in-button:active {
  background-color: #3367D6;
  transition: background-color .2s;
}


.g-sign-in-button .content-wrapper {
  height: 100%;
  width: 100%;
  border: 1px solid transparent;
}

.g-sign-in-button img {
  width: 18px;
  height: 18px;
}

.g-sign-in-button .logo-wrapper {
  padding: 15px;
  background: #fff;
  width: 48px;
  height: 100%;
  border-radius: 5px;
  display: inline-block;
}

.g-sign-in-button .text-container {
  font-family: "Roboto", arial, sans-serif;
  font-weight: 500;
  letter-spacing: .21px;
  font-size: 16px;
  line-height: 48px;
  vertical-align: top;
  border: none;
  display: inline-block;
  text-align: center;
  width: 180px;
}
</style>
  <body>
    <div class="container">
      <a href="{{ route('login/google') }}">
        <div class="g-sign-in-button">
          <div class="content-wrapper">
            <div class="logo-wrapper">
              <img src="https://developers.google.com/identity/images/g-logo.png">
            </div>
            <span class="text-container">
              <span>Sign in with Google</span>
            </span>


          </div>
        </div>
      </a>

      
      <a href="{{ route('login/github') }}">
        <div class="g-sign-in-button">
          <div class="content-wrapper">
            <div class="logo-wrapper">
              <img src="data:image/png;base64,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">
            </div>
            <span class="text-container">
              <span>Sign in with GitHub</span>
            </span>


          </div>
        </div>
      </a>


    </div>
  </body>
</html>