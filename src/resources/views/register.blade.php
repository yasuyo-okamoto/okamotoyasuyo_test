<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
        <a class="header__button" href="/login">
          login
        </a>
      </div>
    </header>

    <main>
      <h2 class="register__title">
          register
      </h2>
      <div class="form__window">
        <div class="form__content">
        <form class="form" action="register" method="post">
          <div class="form__group--1">
            <div class="form__group--title">
              <span class="form__group--item">お名前</span>
            </div>
            <div class="form__group--content">
              <div class="form__group--text">
                <input type="text" name="name" placeholder="例：山田 太郎">
              </div>
            </div>
          </div>
          <div class="form__group--2">
            <div class="form__group--title">
              <span class="form__group--item">メールアドレス</span>
            </div>
            <div class="form__group--content">
              <div class="form__group--text">
                <input type="email" name="email" placeholder="例:test@example.com">
              </div>
            </div>
          </div>
          <div class="form__group--3">
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
            <button class="form__button--submit" type="submit">登録</button>
          </div>
        </form>
        </div>
      </div>
    </main>
</body>
</html>