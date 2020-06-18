<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style type="text/css">
  /* ---------- FONTAWESOME ---------- */
/* ---------- https://fortawesome.github.com/Font-Awesome/ ---------- */
/* ---------- http://weloveiconfonts.com/ ---------- */
@import url(http://weloveiconfonts.com/api/?family=fontawesome);
/* ---------- ERIC MEYER'S RESET CSS ---------- */
/* ---------- https://meyerweb.com/eric/tools/css/reset/ ---------- */
@import url(https://meyerweb.com/eric/tools/css/reset/reset.css);
/* ---------- FONTAWESOME ---------- */
[class*="fontawesome-"]:before {
  font-family: 'FontAwesome', sans-serif;
}
/* ---------- GENERAL ---------- */
* {
  box-sizing: inherit;
}
html {
  box-sizing: border-box;
  height: 100%;
}
body {
  background: #c0c0c0;
  color: #000;
  font-family: 'Varela Round', sans-serif;
  line-height: 1.5;
  margin: 0;
  min-height: 100%;
}
input {
  background-image: none;
  border: none;
  font: inherit;
  margin: 0;
  padding: 0;
  transition: all 0.3s;
}
/* ---------- ALIGN ---------- */
.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
/* ---------- GRID ---------- */
.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 90%;
  width: 400px;
}
/* ---------- LOGIN ---------- */
#login h2 {
  background:#59A857;
  border-radius: 20px 20px 0 0;
  color: #fff;
  font-size: 28px;
  padding: 20px 26px;
}
#login h2 span[class*="fontawesome-"] {
  margin-right: 14px;
}
#login fieldset {
  background: #fff;
  border-radius: 0 0 20px 20px;
  padding: 20px 26px;
}
#login fieldset p {
  color: #777;
  margin-bottom: 14px;
}
#login fieldset p:last-child {
  margin-bottom: 0;
}
#login fieldset input {
  border-radius: 3px;
}
#login fieldset input[type="email"], #login fieldset input[type="password"] {
  background: #eee;
  color: #777;
  padding: 4px 10px;
  width: 100%;
}
#login fieldset input[type="submit"] {
  background: #59A857;
  color: #fff;
  display: block;
  margin: 0 auto;
  padding: 4px 0;
  width: 100px;
}
#login fieldset input[type="submit"]:hover {
  background: #28ad63;
}
  </style>
</head>

<body class="align">

  <div class="grid">

    <div id="login">

      <h2><span class="fontawesome-lock"></span>Авторизация</h2>

      <form action="#" method="POST">

        <fieldset>

          <p><label for="email">Электронная почта</label></p>
          <p><input name="email" type="email" id="email" placeholder="mail@address.com"></p>

          <p><label for="password">Пароль</label></p>
          <p><input name="password" type="password" id="password" placeholder="password"></p>

          <p><input class="signin-btn" type="submit" value="Войти"></p>

        </fieldset>

      </form>

    </div> <!-- end login -->

  </div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets\js\script.js"></script>
</body>

</html>
