<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>contactFormByPHP</title>
  </head>
  <body>
    <div id="header" class="text-center m-5">
        <h1>コンタクトフォーム</h1>
        <p class="my-3">ご連絡はこちらから</p>
    </div>
    <div id="form" class="form-group container text-center">
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="name" class="form-control my-3">
            <input type="email" name="email" placeholder="your mail" class="form-control my-3">
            <input type="text" name="subject" placeholder="件名" class="form-control my-3">
            <textarea name="text" placeholder="内容を入力してください" class="form-control"></textarea>
            <button type="submit" name="submit" class="btn btn-info my-3">send</button>
        </form>

    </div>
    <div id="footer" class="text-center my-5">
        <p>&copy Haruto Ino</p>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>