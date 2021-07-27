<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>simpleRecaptcha</title>
</head>

<body>
<main>
    <!-- show security image -->
    <img src="reCAPTCHA-builder.php" alt="recaptcha"><br>
    <!-- get security code -->
    <input type="text" title="code" onkeyup="send();" id="code" maxlength="6"/>
    <!-- show result -->
    <div id="result"></div>
</main>
</body>

<script src="vendor/jquery/jquery.js"></script>
<script>
    // ajax
    function send() {
        $.post('codeController.php', {
                code: $("#code").val(),
            },
            function (data) {
                $('#result').html(data);
            });
    }
</script>
</html>