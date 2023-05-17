<?php 

    $cookieName1 = "number";
    $cookieVal1 = "";
    $cookieName2 = "operator";
    $cookieVal2 = "";

    if(isset($_POST['number'])) {
        $number = $_POST['input'].$_POST['number'];
    } else {
        $number = "";
    }

    if(isset($_POST['operator'])) {
        $cookieVal1 = $_POST['input'];
        setcookie($cookieName1, $cookieVal1, time() + (86400*30), "/");

        $cookieVal2 = $_POST['operator'];
        setcookie($cookieName2, $cookieVal2, time() + (86400*30), "/");
        $number = "";
    }

    if(isset($_POST['equal'])) {
        $number = $_POST['input'];
        switch($_COOKIE['operator']) {
            case "+":
                $result = $_COOKIE['number'] + $number;
                break;
                case "-":
                    $result = $_COOKIE['number'] - $number;
                    break;
                    case "x":
                        $result = $_COOKIE['number'] * $number;
                        break;
                        case "/":
                            $result = $_COOKIE['number'] / $number;
                            break;
        }
        $number = $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="calc">
        <form action="" method="POST">
            <center>
                <h3 class="logo-title">PHP Calculator Project </h3>
                <input type="text" class="maininput" name="input" value="<?php echo @$number ?>" autocomplete="off">
                <br /><br />
                <div class="buttons">
                    <input type="submit" class="numbtn" name="number" value="7">
                    <input type="submit" class="numbtn" name="number" value="8">
                    <input type="submit" class="numbtn" name="number" value="9">
                    <input type="submit" class="calculate" name="operator" value="+">
                    <br />
                    <input type="submit" class="numbtn" name="number" value="4">
                    <input type="submit" class="numbtn" name="number" value="5">
                    <input type="submit" class="numbtn" name="number" value="6">
                    <input type="submit" class="calculate" name="operator" value="-">
                    <br />
                    <input type="submit" class="numbtn" name="number" value="1">
                    <input type="submit" class="numbtn" name="number" value="2">
                    <input type="submit" class="numbtn" name="number" value="3">
                    <input type="submit" class="calculate" name="operator" value="x">
                    <br />
                    <input type="submit" class="clear" name="number" value="C" formaction="clear.php">
                    <input type="submit" class="numbtn" name="number" value="0">
                    <input type="submit" class="equal" name="equal" value="=">
                    <input type="submit" class="calculate" name="operator" value="/">
                    <br />
                </div>
            </center>
        </form>
    </div>
    
</body>
</html>