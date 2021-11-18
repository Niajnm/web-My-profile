<DOCTYPE html>
    <html>

    <head>
        <title>My First Website</title>
        <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    </head>

    <body>
        <header>
            <h1> Thanks for registraion </h1>
         
        <P>Your information</p>
        <P>
         
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_REQUEST['fname'];
                $id = $_REQUEST['idnumber'];
                if (empty($name)) {
                  echo "Name is empty";
                } else {
                  echo "<b class='bcolor'>CN</b>".$name;
                }
                echo "<br>";
                if (empty($id)) {
                    echo "Id is empty";
                  } else {
                    echo "ID: ".$id;
                  }

                  echo "<br>";
                  echo"<p>BDT12132</p>";
                  echo "<br>";
    
                  echo  $name *13.8;

                  
              }
       



              ?>
            
        </p>
    
    </body>
    </html>