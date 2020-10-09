<?php

$name = $email = $dob = $weight = $weight =  $bmi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["dob"])) {
        $dobErr = "DOB is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }

    if (empty($_POST["weight"])) {
        $weightErr = "Weight is required";
    } else {
        $weight = test_input($_POST["weight"]);
    }

    if (empty($_POST["height"])) {
        $heightErr = "height is required";
    } else {
        $height = test_input($_POST["height"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$bmi = $weight / ($height * $height);
?>
<?php
echo ("Hi   ");
echo strtoupper($name);
echo "<br>";
echo "<br>";
echo ("Your Details are mentioned below");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo ("E-mail:  ");
echo $email;
echo "<br>";
echo "<br>";
$today = date("Y-m-d");
$diff = date_diff(date_create($dob), date_create($today));
echo 'Age: ' . $diff->format('%y');
echo " years";
echo "<br>";
echo "<br>";
// echo "Boolean value:  ";
// if (strcasecmp('name', 'email') == 0) {
//     echo '1';
//     echo "<br>";
// } else {
//     echo '0';
//     echo "<br>";
// }

echo "<br>";
echo ("Height:  ");
echo $height;
echo " (in meters)";
echo "<br>";
echo "<br>";
echo ("Weight:   ");
echo $weight;
echo " (in kgs)";
echo "<br>";
echo "<br>";
echo ("BMI:   ");
echo $bmi;
?>
<style>
    body {
        background-color: rgb(64, 235, 141);
        font-family: 'Kufam', cursive;
        max-height: 100vh;
        max-width: 100vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-x: hidden;
        margin-top: 50vh;
        border: 15px solid cornflowerblue;
        margin: 2px;
        text-align: center;
        padding-top: 20vh;
        font-weight: bolder;
        font-size: x-large;
        padding-left: 10vw;
    }

    .output {
        width: 40%;
        height: auto;
        align-items: center;
        background-color: cornflowerblue;
        border: 5px solid rgb(64, 235, 141);
    }
</style>
<script>
    const ouput = document.createElement('div')

    function createOutput() {
        body.appendChild(output)
        output.classList.add("output")
    }
    createOutput();
</script>