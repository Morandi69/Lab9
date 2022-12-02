<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Оставтье отзыв</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h2>Оставтье отзыв</h2>
    <form action="sender.php" method="post" style="margin-left:10px; margin-right:10px">    
        <label for="name">Username:</label>
        <input class="form-control" name="username" />
           
        <label for="email">Email:</label>
        <input class="form-control" name="email" />
    
        <label for="homepage">HomePage:</label>
        <input class="form-control" name="homepage" />
     
        <label for="message">Message:</label>
        <textarea class="form-control" name="message">text</textarea>
            
        <div style="margin-top:5px" class="g-recaptcha" data-sitekey="6LdFCU4jAAAAAIZ3j4Gc1bq_KYtQHbIHN7cED3IK"></div>

        <button style="margin-top:5px; " class="btn btn-sm btn-primary" type="submit" name="submit" >Отправить</button> 
    </form> 
    </body>
</html>