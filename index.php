<DOCTYPE html>
    <html>

    <head>
        <title>My First Website</title>
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    </head>

    <body>
        <header>
            <h1> MY PROFILE </h1>
            <P>

                <?php
              $myfile = fopen("testfile.png", "w");
              $bdtError= "";
  
                  $t = "This is /\/ test message";
                  echo $t;
                echo "Today is " . date("Y/m/d") . "<br>";
                $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                echo $dt->format('F j, Y, g:i a'). "<br>";
                   
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  // collect value of input field
                  
                  $bdt = $_REQUEST['bdt'];

                  if (empty($bdt)) {
                    $bdtError = "Please enter the value";
                  }

                  $id = $_REQUEST['idnumber'];
                  if (empty($name)) {
                    echo "Name is empty";
                  } else {
                    echo "<b class='bcolor'>CN</b>".$bdt;
                  }
                  echo "<br>";
                  if (empty($id)) {
                      echo "Id is empty";
                    } else {
                      echo "ID: ".$id;
                    }
                  
                    echo "<br>";
                    echo"<p>BDT</p>";
                    echo "<br>";
      
                   echo  $bdt *13.8;
                    
                }

              ?>

            </p>
            <nav>
                <a class="active" href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="https://www.youtube.com/" target="_blank">Youtube</a>
                <a href="https://web.facebook.com/niaj.oooom/" target="_blank">facebook</a>
            </nav>
        </header>
        <img class="profile-image" src="images/mypic.jpg" width="400" height="379">
        <img class="partial-image" src="https://demo2.joomshaper.com/2020/esports/images/2020/07/03/layer-2.png"
            width="400" height="700">
        <section>
            <h2>Education</h2>
            <h3><?php  echo $bdtError; ?></h3>
            <p>
                <del>Lorem ipsum dolor sit amet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consectetur, adipisicing elit.<br>
                    Cupiditate consequatur qui possimus, doloremque reiciendis dolor voluptates corrupti. Sed commodi
                    eaque aliquam magni, id illum deleniti repellat delectus, aliquid labore laudantium
                    minima porro rerum modi. Rerum laboriosam in, eligendi voluptate perferendis maiores praesentium
                    inventore obcaecati nulla dicta adipisci ullam tempore nemo aliquid sint, officiis doloribus quaerat
                    sequi quis commodi consectetur saepe
                    quisquam et? At minima minus eos quibusdam iusto fugit quaerat explicabo autem doloribus quisquam
                    voluptate, non optio tenetur sed ab quasi quidem ut nulla quis vel aperiam deleniti dicta
                    asperiores? Quam explicabo inventore voluptates
                    quidem mollitia
                    <!--this is comment-->
                </del>

            </p>
            <p style="color:burlywood;"> Thanks for using </p>
            <p>
            <form method="post" action="index.php">
                CN to BDT : <input type="text" name="bdt">
                <br> Id: <input type="number" name="idnumber">
                <br> Photo: <input type="file" name="photo">
                <br>
                <input type="submit">
            </form>
            </p>
            <p>
                <!-- <?php
                    $myfile = fopen("file/testfile.txt", "r") or die("Unable to open file!");
                    echo fgets($myfile);
                    fclose($myfile);


                ?> -->
                <?php
                    $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
                    echo fgets($myfile);
                    fclose($myfile);
                                      
                   
                ?>

            </p>
           <a class="copyright">Copyright &COPY;NIAJ MAHMUD.</a> 
        </section>


    </body>


    </html>