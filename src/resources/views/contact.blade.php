<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
    <h2 class="contact__title">
      contact
    </h2>
    <form class="form" action="contact" method="post">
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <span class="form__label--title--item">お名前</span>
            <span class="form__label--required">※</span>
          <td class="form__group--name">
            <input class="input__content" type="text" name="name" placeholder="例:山田" />
            <input class="input__content" type="text" name="name" placeholder="例:太郎" />
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">性別</p>
            <p class="form__label--required">※</p>
          <td class="form__group--radio">
            <input class="visually-hidden" type="radio" name="sex" id="man"  />
            <label for="man">男性</label>
            <input class="visually-hidden" type="radio" name="sex" id="woman" />
            <label for="woman">女性</label>
            <input class="visually-hidden" type="radio" name="sex" id="others" />
            <label for="others">その他</label>
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">メールアドレス</p>
            <p class="form__label--required">※</p>
          <td class="form__group--text--email">
            <input class="input__content" type="email" name="email" placeholder="例:test@example.com" />
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">電話番号</p>
            <p class="form__label--required">※</p>
          <td class="form__group--tel">
            <input class="input__content" type="tel" name="tel" placeholder="080" />
            <p class="form__input--text--mark">-</p>
            <input class="input__content" type="tel" name="tel" placeholder="1234" />
            <p class="form__input--text--mark">-</p>
            <input class="input__content" type="tel" name="tel" placeholder="5678" />
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">住所</p>
            <p class="form__label--required">※</p>
          <td class="form__group--address">
            <input class="input__content" type="text" name="address" placeholder="例:東京都" />
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">建物名</p>
            <p class="form__label--required">※</p>
          <td class="form__group--address">
            <input class="input__content" type="text" name="address2" placeholder="例:マンション" />
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">お問い合せの種類</p>
            <p class="form__label--required">※</p>
          <td class="form__group--selectbox">
            <select name="selectbox">
              <option value="select">選択してください</option>
              <option value="option1">商品のお届けについて</option>
              <option value="option2">商品の交換について</option>
              <option value="option3">商品トラブル</option>
              <option value="option4">ショップへのお問合せ</option>
              <option value="option5">その他</option>
            </select>
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__group">
      <table class="form__group--inner">
        <tr class="form__group--row">
          <th class="form__label--title">
            <p class="form__label--title--item">お問合せ内容</p>
            <p class="form__label--required">※</p>
          <td class="form__group--textarea">
            <textarea name="contact" placeholder="お問合せ内容をご記載ください"></textarea>
          </td>
        </tr>
        <div class="form__error">
          <!--バリデーション機能を実装したら記述します。-->
        </div>
      </table>
    </div>
    <div class="form__button">
      <input class="form__button--submit" type="submit" value="確認画面">
    </div>
    </form>
  </main>
</body>
</html>

