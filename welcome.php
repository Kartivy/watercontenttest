<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Water Content Test</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Water Content Test</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>


<h3 class="Welcome"><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>


<style>

  .Welcome{
    text-align: center;
    margin-top: 30px;
    border-style: solid;
    border-radius: 90px;
    
  }
        .container {
            text-align: center;
            padding: 50px;
            border-style: solid;
            margin-top: 100px;
            background-image: url("https://drive.google.com/file/d/1qscJdCJDUz0RVrINNy2FJ36Bw7OSlbNw/view?usp=sharing");
            background-color: black;
            
        }

        #Trail1 {
            text-align: center;
            border-style: groove;
            border-color: white;
            border-radius: 90px;
            margin-bottom: 10px;
            width: 700px;
            font-family: "Lucida Console", "Courier New", monospace;
            text-decoration-color: rgb(78, 73, 52);

        }

        #Trail2 {
            text-align: center;
            border-style: groove;
            border-color: white;
            border-radius: 90px;
            margin-bottom: 50px;
            width: 700px;
            font-family: "Lucida Console", "Courier New", monospace;
        }

        #Trail3 {
            text-align: center;
            border-style: groove;
            border-color: white;
            border-radius: 90px;
            margin-bottom: 50px;
            width: 700px;
            font-family: "Lucida Console", "Courier New", monospace;
        }

        .box {
            border-style: solid;
            border-radius: 10px;

        }

        .input {
            color: white;
        }

        .Heading {
            color: darkorange;
            border-style: solid;
            border-radius: 9px;
            border-color: seashell;
            font-family: 'Times New Roman', Times, serif;
            background-color: black;
        }

        .button {
            border-style: solid;
            border-color: rgb(80, 70, 70);
            border-width: 10px;
            box-shadow: darkgray;
        }

        .Result {
            color: white;
            border-style: solid;
            border-radius: 9px;
            border-color: white;
            background-color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .chatbot{
            
            
            padding: 50px;
        }

        .chatbotheading{
            align-items: center;
            border-style: solid;
            border-radius: 9px;
            text-emphasis-color: green;
            margin-top: 50px;
            background-color: white;
        }
    </style>


    <title>Experiment</title>
</head>

<body>

    <script>

        function MyFunc1() {

            var M11 = document.getElementById('M11').value;
            var M12 = document.getElementById('M12').value;
            var M13 = document.getElementById('M13').value;
            document.getElementById('EmptyCont1').innerHTML = (M11);
            document.getElementById('ContWithSoil1').innerHTML = (M12);
            document.getElementById('ContWithDrySoil1').innerHTML = (M13);
            document.getElementById('MassWater1').innerHTML = (M12 - M13);
            document.getElementById('MassSolid1').innerHTML = (M13 - M11);
            document.getElementById('WaterCont1').innerHTML = (((M12 - M13) / (M13 - M11)) * 100);

            var M21 = document.getElementById('M21').value;
            var M22 = document.getElementById('M22').value;
            var M23 = document.getElementById('M23').value;
            document.getElementById('EmptyCont2').innerHTML = (M21);
            document.getElementById('ContWithSoil2').innerHTML = (M22);
            document.getElementById('ContWithDrySoil2').innerHTML = (M23);
            document.getElementById('MassWater2').innerHTML = (M22 - M23);
            document.getElementById('MassSolid2').innerHTML = (M23 - M21);
            document.getElementById('WaterCont2').innerHTML = (((M22 - M23) / (M23 - M21)) * 100);

            var M31 = document.getElementById('M31').value;
            var M32 = document.getElementById('M32').value;
            var M33 = document.getElementById('M33').value;
            document.getElementById('EmptyCont3').innerHTML = (M31);
            document.getElementById('ContWithSoil3').innerHTML = (M32);
            document.getElementById('ContWithDrySoil3').innerHTML = (M33);
            document.getElementById('MassWater3').innerHTML = (M32 - M33);
            document.getElementById('MassSolid3').innerHTML = (M33 - M31);
            document.getElementById('WaterCont3').innerHTML = (((M32 - M33) / (M33 - M31)) * 100);
            document.getElementById('Average').innerHTML = ((((M32 - M33) / (M33 - M31) + (M22 - M23) / (M23 - M21) + (M12 - M13) / (M13 - M11)) / 3) * 100);


        }


    </script>

    

      
    <div class="container">

        <h2 class="Heading">Determination of Water Content Of Soil</h2>

        <div class="container" id="Trail1">

            <!--Trail1-->

            <h4 class="input">Mass of Container (M1) :</h4>
            <input type="number" class="box" value="" id="M11"><br><br>
            <h4 class="input">Mass of Container + Soil (M2) :</h4>
            <input type="number" class="box" value="" id="M12"><br><br>
            <h4 class="input">Mass of Container + dry Soil (M3) :</h4>
            <input type="number" class="box" value="" id="M13"><br><br>

        </div>

        <div class="container" id="Trail2">

            <!--Trail2-->

            <h4 class="input">Mass of Container (M1) :</h4>
            <input type="number" class="box" value="" id="M21"><br><br>
            <h4 class="input">Mass of Container + Soil (M2) :</h4>
            <input type="number" class="box" value="" id="M22"><br><br>
            <h4 class="input">Mass of Container + dry Soil (M3) :</h4>
            <input type="number" class="box" value="" id="M23"><br><br>

        </div>

        <!--Trail3-->

        <div class="container" id="Trail3">

            <h4 class="input">Mass of Container (M1) :</h4>
            <input type="number" class="box" value="" id="M31"><br><br>
            <h4 class="input">Mass of Container + Soil (M2) :</h4>
            <input type="number" class="box" value="" id="M32"><br><br>
            <h4 class="input">Mass of Container + dry Soil (M3) :</h4>
            <input type="number" class="box" value="" id="M33"><br><br>

        </div>

        <input type="submit" class="button" value="Submit" onclick="return MyFunc1()"><br><br>
        <button type="button" onclick="return MyFunc1()"></button><br><br>

        <b>The result is : </b><br><br>




        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">S. No.</th>
                    <th scope="col">Observation and Calculation</th>
                    <th scope="col">Determination no. 1</th>
                    <th scope="col">Determination no. 2</th>
                    <th scope="col">Determination no. 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> </th>
                    <th scope="col">
                        <p class="text-primary">Observation</p>
                    </th>
                    <th scope="col">
                        </td>
                    <th scope="col">
                        </td>
                    <th scope="col"></th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Container No.</td>
                    <th scope="col">1</td>
                    <th scope="col">2</td>
                    <th scope="col">3</th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mass of empty container(M1)</td>
                    <td><span id="EmptyCont1"></span></td>
                    <td><span id="EmptyCont2"></span></td>
                    <td><span id="EmptyCont3"></span></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Mass of container + soil(M2)</td>
                    <td><span id="ContWithSoil1"></span></td>
                    <td><span id="ContWithSoil2"></span></td>
                    <td><span id="ContWithSoil3"></span></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Mass of container + Dry soil(M3)</td>
                    <td><span id="ContWithDrySoil1"></span></td>
                    <th><span id="ContWithDrySoil2"></span></th>
                    <td><span id="ContWithDrySoil3"></span></td>
                </tr>
                <tr>
                    <th scope="row"> </th>
                    <th scope="col">
                        <p class="text-primary">Calculations</p>
                    </th>
                    <th scope="col">
                        </td>
                    <th scope="col">
                        </td>
                    <th scope="col"></th>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mass of Water(M2-M3), Mw</td>
                    <th scope="col"><span id="MassWater1"></span></td>
                    <th scope="col"><span id="MassWater2"></span></td>
                    <td><span id="MassWater3"></span></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Mass of solids(M3-M1), Ms</p>
                    </td>
                    <th scope="col"><span id="MassSolid1"></span></td>
                    <th scope="col"><span id="MassSolid2"></span></td>
                    <td><span id="MassSolid3"></span></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <th scope="col">Water Content(Mw/Ms), w</th>
                    <th scope="col"><span id="WaterCont1"></span></td>
                    <th scope="col"><span id="WaterCont2"></span></td>
                    <td><span id="WaterCont3"></span></td>
                </tr>
            </tbody>
        </table>

        <div class="Result">Average Water Content, W :
            <span id="Average"></span>
        </div>

        <div class = "chatbotheading">
            <h2>ASK ANYTHING ABOUT SOIL MECHANICS</h2>
        </div>

        <div class="chatbot">

            <iframe
                src='https://webchat.botframework.com/embed/waterbot-8c55-bot?s=VXjwba8HImo.WQbgbmxVnwhwM_NJI_bjkSE18CqTVEOLV5Bk9nHBpJs'
                style='min-width: 400px; width: 100%; min-height: 500px;'></iframe>
                
    
        </div>
    </div>



<hr>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
