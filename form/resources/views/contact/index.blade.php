<form action="/contacts/confirm" id="" class="" method="post">
    <div>
        <label for="last_name">姓</label>
        <input type="text" id="last_name" name="last_name">
        <label for="fist_name">名</label>
        <input type="text" id="first_name" name="first_name">
    </div>
    <div>
        <label for="last_name_kana">セイ</label>
        <input type="text" id="last_name_kana" name="last_name_kana">
        <label for="first_name_kana">メイ</label>
        <input type="text" id="first_name_kana" name="first_name_kana">
    </div>
    <div>
        <label for="company">会社名</label>
        <input type="text" id="company" name="company">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="text" id="name" name="email">
    </div>
    <div>
        <label for="chk1">ご意見・ご要望</label>
        <input type="checkbox" name="chk1" id="chk1" value="ご意見・ご要望" checked>
        <label for="chk2">質問・お問い合わせ</label>
        <input type="checkbox" name="chk2" id="chk2" value="質問・お問い合わせ">
        <label for="chk3">その他</label>
        <input type="checkbox" name="chk3" id="chk3" value="その他">
    </div>
    <div>
        <label for="message"></label>
        <textarea id="message" name="message"></textarea>
    </div>
    <div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="submit" id="submit" name="submit" value="送信">
    </div>
</form>