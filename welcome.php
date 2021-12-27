<!DOCTYPE html>
<html lang="en">

<head>
<title>Welcome</title>

<style>
    body{
        background: #ADD8E6;
    }

    #output {
        color:black;
        font-weight: 900;
        text-align: center;
        font-size: 40px;
        }

        h1{
    text-align: center;
    font-size: 2.5em;
    font-weight: 500;
}
fieldset {
    background-color: #87ceeb;
    width: 80%;
    height: 130px;
    margin-left: 100px;
    display: center;
    font-size: 17px;}
}
</style>

</head>

<body>

 <h1>If you want a custom greeting message, please do the following: </h1>
 <fieldset>
 <ol>
 <li>In your address bar, append a '?' symbol </li>
 <li>Then write 'firstName=' with your first name next to it</li>
 <li>Then write '&' followed by 'lastName' with your last name next to it</li>
 <li>Hit ENTER and see your customized message in the greeting below</li>
 </ol>
 </fieldset>
 
<div id=output>

     <?php
if (isset($_GET['firstName']) && !empty($_GET['firstName'])) {
    echo "GREETING, Howdy {$_GET['firstName']}!";
} elseif (isset($_GET['lastName']) && !empty($_GET['lastName'])) {
    echo "GREETING, Howdy {$_GET['lastName']}!";
 } else 
{echo "GREETING, Howdy no name";}
?>
</div>

</body>
</html>
