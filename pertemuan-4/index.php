<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dokumen</title>
</head>
<body id="target">
    <div class="container">
    <h1 style="margin-bottom: 2rem;">Rajin Sedekah</h1>
    <form action="./backend/login.php" method="POST">
        <input type="email" name="email" id="email" placeholder="email"/>
        <input type="password" name="password" id="password" placeholder="password"/>
        <button type="submit">Login</button>
    </form>
    </div>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}


body{
    background: -webkit-linear-gradient(top, #009970 0%, #19a37e 100%);
    display: flex;
    justify-content: center; 
    align-items: center;    
    height: 100vh;          
}

.container{
    width: 100%;
    max-width: 400px;  
    background: rgb(233, 239, 236);
    padding: 40px;
    box-shadow: 0 35px 55px #4cb79a;
    border-radius: 10px;
    text-align: center; 
}

input[type="email"],
input[type="password"]{
    padding: 15px;
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 15px;
    width: 100%;
    background-color: #009970;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #7fccb7;
}

    </style>
</body>
</html>