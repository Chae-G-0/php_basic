<?
$title = '채가채가';
$address = '부산시 진구 부전동';
$tel = '123-456-7890';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }

        li.on a {
            color: red;
        }
    </style>
</head>
<body>
    <div class="Wrap">
        <header class="Header">
            <nav>
                <ul>
                    <li><a href="sub01.php">menu01</a></li>
                    <li><a href="sub02.php">menu02</a></li>
                    <li><a href="sub03.php">menu03</a></li>
                    <li><a href="sub04.php">menu04</a></li>
                    <li><a href="sub05.php">menu05</a></li>
                </ul>
            </nav>
        </header>

       