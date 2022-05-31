<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="contact">
            <form action="confirm.php" method="post">
                 <h2>お問い合わせフォーム</h2>
                 <div class="input-area">
                     <p>名前</p>
                     <input type="text" name="name" placeholder="例）田中　太郎" required>
                </div>

                <div class="input-area">
                     <p>メール</p>
                     <input type="email" name="email" placeholder="例）abc@abc.com" required>
                 </div>

                 <div class="input-area">
                     <p>性別</p>
                     <label><input type="radio" name="sex" value="男性" checked>男性</label>
                     <label><input type="radio" name="sex" value="女性">女性</label>
                 </div>

                 <div class="input-area">
                     <p>お住まいの地域</p>
                     <select name="pref" required>
                         <option value="">-選択-</option>
                         <option value="東京都">東京都</option>
                         <option value="愛知県">愛知県</option>
                         <option value="大阪府">大阪府</option>
                     </select>
                 </div>

                <div class="input-area">
                     <p>お問い合わせ内容</p>
                     <textarea name="contact_body" rows="5" placeholder="例）具体的な内容を記載" required></textarea>
                </div>
                 <div class="input-area">
                     <input type="submit" name="submit" value="確認画面へ" class="btn-border">
                 </div>
            </form>
        </div>
    </body>
</html>