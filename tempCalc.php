<?php $page_title = "Temperature Calculator"; include('top.html'); ?>
            <?php
           
            ?>
            <form action="" method="post">
                <p>
                    <label>Temperature: </label>
                    <input type="text" name="temperature" placeholder="Temperature"
                           value="<?php if(isset($_POST['temperature'])) {
                                echo $_POST['temperature'];
                                        }
                                        ?>"/>
                    <select name="temp">
                        <option>Fahrenheit</option>
                        <option>Celsius</option>
                        <option>Kelvin</option>
                    </select>
                    <br>
                    <input type="submit" value="Calculate" class="submit"/>
                </p>
            </form>
        <?php 
            // Variables for math and display use
            $tempRequest = $_REQUEST['temp'];
            $temp = $_REQUEST['temperature'];
            $temp = round($temp, 0);
            // Function ZONE
            function fahren(){
                $temp = $_REQUEST['temperature'];
                $farToCel = ($temp - 32) * 5/9;
                $farToKel = ($temp - 32) * 5/9 + 273.15;
                $temp = round($temp, 0);
                $farToCel = round($farToCel, 0);
                $farToKel = round($farToKel, 0);
                echo "$farToCel" . " Degrees Celsius <br>";
                echo "$farToKel" . " Degrees Kelvin";
            }
            function celsius(){
                $temp = $_REQUEST['temperature'];
                 $celToFar = ($temp * 9/5) + 32;
                 $celToKel = ($temp + 273.15);
                 $temp = round($temp, 0);
                 $celToFar = round($celToFar, 0);
                 $celToKel = round($celToKel, 0);
                 echo "$celToFar" . " Degrees Fahrenheit <br>";
                 echo "$celToKel" . " Degrees Kelvin";
            }
            function kelvin(){
                $temp = $_REQUEST['temperature'];
                $kelToCel = ($temp - 273.15);
                $kelToFar = ($temp - 273.15) * 9/5 + 32;
                 $temp = round($temp, 0);
                $kelToCel = round($kelToCel, 0);
                $kelToFar = round($kelToFar, 0);
                echo "$kelToCel" . " Degrees Celsius <br>";
                echo "$kelToFar" . " Degrees Fahrenheit";
            }
            // Ensures value is a number and not empty
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(!empty($_POST['temperature']) && is_numeric($_POST['temperature'])) {
            // Display Area
            echo $temp . " Degrees " . $tempRequest . "<br>";
            if($tempRequest == Fahrenheit){
                fahren();
            }
            if($tempRequest == Celsius){
                celsius();
            }
            if($tempRequest == Kelvin){
                kelvin();
            }
                }
                else{
                    echo "Please input a number!";
                }
            }   

            ?>
<?php include('bottom.html'); ?>
   