<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
      <div class="header__inner">
        <a class="header__logo" href="/">
          FashionablyLate
        </a>
      </div>
      <div class="header__right">
        <a class="header__button" href="/register">
          register
        </a>
      </div>
    </header>

    <main>
      <h2 class="login__title">
          login
      </h2>
      <div class="form__window">
        <div class="form__content">
        <form class="form" action="login" method="post">
          <div class="form__group--1">
            <div class="form__group--title">
              <span class="form__group--item">メールアドレス</span>
            </div>
            <div class="form__group--content">
              <div class="form__group--text">
                <input type="email" name="email" placeholder="例:test@example.com">
              </div>
            </div>
          </div>
          <div class="form__group--2">
            <div class="form__group--title">
              <span class="form__group--item">パスワード</span>
            </div>
            <div class="form__group--content">
              <div class="form__group--text">
                <input type="password" name="password" placeholder="例:coachtech1106">
              </div>
            </div>
          </div>
          <div class="form__button">
            <button class="form__button--login" type="submit">ログイン
            </button>
          </div>
        </form>
        </div>
      </div>
    </main>
</body>
</html>