<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>陽信銀行外部資料查詢引擎</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container login-container">
        <div>
            <div style="margin:30px">
                <img src="https://www.internships.com.tw/upload/company/77/logo%E7%B5%84%E5%90%88_563ac7d.png" alt="陽信銀行" height="auto" width="250"> 
            </div>
            <div class="text-center">
                <form>
                    <label for="account">帳號</label>
                    <input type="text" name="gender" id="male" value="account"><br>
                    <label for="password">密碼</label>
                    <input type="text" name="gender" id="male" value="password"><br>
                    <input class="login-button" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>