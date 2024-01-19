// ページが読み込まれた後に実行されるコード
document.addEventListener('DOMContentLoaded', function () {
    // 要素を取得
    var memberButton = document.getElementById('memberButton');

    // クリックイベントを追加
    memberButton.addEventListener('click', function () {
        // 遷移先のURLを指定
        var destinationUrl = '../member/member.php';

        // ページを遷移
        window.location.href = destinationUrl;
    });
});