<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
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
  </header>
  <main>
    <h2 class="confirm__title">
      Confirm
    </h2>
    <div class="confirm__window">
      <table class="confirm__content">
        <tr>
            <th>お名前</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>住所</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>お問い合わせの種類</th>
            <td>テキスト</td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>テキスト</td>
        </tr>
      </table>
    </div>
    <div class="submit__button">
      <input class="submit__button--content" type="submit" value="送信">
    </div>
    <div class="correction__button">
      <input class="correction__button--contents" type="submit" value="修正">
    </div>
  </main>
</body>
</html>