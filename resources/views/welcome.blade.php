<!doctype html>
<html>
<body>

<form action="https://api.telegram.org/bot{{env('TELEGRAM_BOT_TOKEN')}}/setwebhook" method="post" enctype="multipart/form-data">
    Select Certificate to upload:
    <input type="file" name="certificate" id="fileToUpload">
    URL: <input type="text" name="url"  value="{{route('bot.run')}}"><br>
    <input type="submit" value="Upload Certificate" name="submit">
</form>

</body>
</html>
