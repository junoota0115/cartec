// ページが読み込まれた後に実行されるコード
document.addEventListener('DOMContentLoaded', function () {
    // 要素を取得
    var topButton = document.getElementById('topButton');

    // クリックイベントを追加
    topButton.addEventListener('click', function () {
        // 遷移先のURLを指定
        var destinationUrl = '../toppage/index.php';

        // ページを遷移
        window.location.href = destinationUrl;
    });
});