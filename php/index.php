<DOCTYPE html>
    <html>

    <head>
        <title>My First Website</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    </head>

    <body>
        <header>
            <h1> MY PROFILE </h1>
            <nav>
                <a class="active" href="index.php">Home</a>
                <a href="../about.php">About</a>
                <a href="https://www.youtube.com/" target="_blank">Youtube</a>
                <a href="https://web.facebook.com/niaj.oooom/" target="_blank">facebook</a>
            </nav>
        </header>
        <P>Hello World</p>
        <P>
            <?php 
                echo "<h1>This php learning tutorial</h1>"; 
                echo "<h1>This php learning tutorial</h1>"; 
                echo 1+2;
                echo "<br>";
                $a = 10;
                $b = 20;
                echo $a + $b;

                for($i = 0; $i< 10; $i++) {
                    echo "<br>";
                    echo "<h1>".$i."</h1>";
                }
                
                    $cars = array("Volvo", "BMW", "Toyota");
                    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                        

            ?>
        </p>
    
    </body>
    </html>