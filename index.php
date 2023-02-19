<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
<title>BANK</title>
<style>
    body {
       
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5b8e7;
      	background-image: url(https://media.istockphoto.com/id/839165784/photo/small-piggy-bank-over-blue-background-copy-space.jpg?s=170667a&w=0&k=20&c=ulcY_eI9OIZbO3RIlE0gRJN3mpS-Eiak-SZCrh5RGr4=);        
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;     
        overflow: hidden;    
        width: 100%;
        height: 100vh;    
    }
    * {
        list-style: none;
        outline: none;
        padding: 0;
        margin: 0;
        font-family:Impact;
        box-sizing: border-box;
        color:white;
        font-size: 300%
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
        background: #4682B4;
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
        background:#4682B4;
        z-index: -1;
        opacity: 0;
        transition: all .25s ease;
    }
    
</style>

</head>
<body>
    <form>
     	<Button class="btn-1"><a href="login.php">LOGIN</a></Button>
        <Button class="btn-2"><a href="create.php">CREATE</a></Button>
    </form>
</body>

</html>