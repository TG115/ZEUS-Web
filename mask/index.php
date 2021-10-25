<html>

    <!-- <input id="title" type="text" placeholder="제목을 입력해주세요">
    <input id="content" type="text" placeholder="내용을 입력해주세요"> -->
    <button onclick="fAjax()">카페 목록 보기</button>

    <script src="/asset/vendor/jquery/jquery.min.js"></script>
    <script>
        
        function fAjax() {

            $.ajax({
                url: 'test.php',
                type: 'post',
                // data: {'title': $('#title').val(), 'content':$('#content').val()},
                dataType: 'json',
                success: function (r) {
                    console.log(r);
                },
                error: function (request, status, error) {
                    console.warn(request, status, error);
                },
                complete: function () {
                    document.xhr = false;
                }
            });
        }
    </script>
</html>