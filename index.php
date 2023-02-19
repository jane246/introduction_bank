<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
<title>BANK</title>
<style>
    body {
        --primary: 25,91,255;
        --color: 44, 62, 80;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background: #f5b8e7;
        background-image: url(https://i.insider.com/5c7fe48d262898027532ae26?width=1200&format=jpeg://img.freepik.com/premium-vector/bank-buildings-seamless-background-backdrop-financial-business-banking-website-economical-theme-ads-information-credits-savings-vector-wallpaper-web-site-background_570429-16311.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        color: rgb(var(--color));
        width: 100%;
        height: 100vh;
    }
    * {
        list-style: none;
        outline: none;
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }
    button {
        padding: 20px 50px;
        font-size: 1.5rem;
        cursor: pointer;
        border: 0px;
        background: transparent;
        position: relative;
        margin: 20px;
        transition: all .25s ease;
    }
    .btn-1:hover {
        color: #fff;
    }
    .btn-1:hover::after {
        transform: scale(1);
        opacity: 1;
    }
    .btn-1::after {
        content: '';
        width: 100%;
        height: 100%;
        border-radius: 30px;
        position: absolute;
        top: 0px;
        left: 0px;
        transform: scale(.1);
        background: #edc42f;
        z-index: -1;
        opacity: 0;
        transition: all .25s ease;
    }

    .btn-2:hover {
        color: #fff;
    }
    .btn-2:hover::after {
        transform: scale(1);
        opacity: 1;
    }
    .btn-2::after {
        content: '';
        width: 100%;
        height: 100%;
        border-radius: 30px;
        position: absolute;
        top: 0px;
        left: 0px;
        transform: scale(.1);
        background: #edc42f;
        z-index: -1;
        opacity: 0;
        transition: all .25s ease;
    }
</style>
</head>
<body>
    <form>
        <a>WELCOME TO THE BANK</a>
        <Button class="btn-1"><a href="create.php">CREATE</a></Button>
        <Button class="btn-2"><a href="login.php">LOGIN</a></Button>

    </form>
</body>
</html>