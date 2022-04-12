<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MasterLayout1</title>
<style>
    .header , .footer {
        background-color: black;
        height: 50px;
    }

    .main {
        height: 100px;
        color: red;
    }


</style>

</head>
<body>
    <h2>MasterLayout1</h2>
    <div class="header"></div>
    <div class="main"><?php require_once "./mvc/views/Pages/".$data['Page'].".php" ?> </div>
    <div class="footer"></div>
</body>
</html>