<!DOCTYPE html>
<html lang="en-US">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navigation bar</title>
        <style>
            nav {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                flex-direction: column; 
                align-items: center;  
            }

            @media only screen and (min-width: 768px) {
                nav { flex-direction: row; }
            }

            nav a{
                flex: 1;
                text-align: center;
                margin: 0.25em;
                padding: 0.25em;
            }
            nav a{
                flex: 1;
                text-align: center;
                margin: 0.25em;
                padding: 0.25em;
                border: 1px solid #ddd;
                text-decoration: none;
                color: #555;
            }
        
        </style>
    </head>
    <body>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Forum</a>
            <a href="#">Help Desk</a>
            <a href="#">Log Out</a>
        </nav>
    </body>
</html>