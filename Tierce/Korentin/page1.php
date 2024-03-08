

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>Document</title>
    
    <style>
        body {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #107010;
        }

        div {
            background-image: linear-gradient(to top, #fff0 0%, #fff 100%);
            padding: 100px;
            display: inline-block;
            text-align: center;
        }

        
    </style>   
   
</head>
<html> 
    <body  style="background-color:rgb(47,79,79);">
        <div >
            <header>
                <?php include './header.php'; ?>
            </header>

            <body>
                <img src="hugo.jpg" style="width: 100px; height: 100px; border-radius: 50%;">
                <p>groupe:Theo Gandon, Hugo Hochart</p>
                <p>note: 12/20 facilement modifiable mais le css est pas dans une page distincte</p>
                <button class="btn btn-primary" onclick="window.location.href='page2.php'"><p style="text-align:center;">Upload de fichier</button>
            </body>

            <footer>
                <?php include './footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
