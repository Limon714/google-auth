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
  background-color: #4285f4;
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
    </div>
  </body>
</html>