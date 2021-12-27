<!DOCTYPE html>
<html lang="en">
<head>
<title>Currency Converter</title>

<style>
fieldset {
    background-color: #87ceeb;
    width: 80%;
    height: 200px;
    margin-left: 100px;
    display: center;
    font-size: 17px;}

#convert_from {
    list-style-type: none;
    margin: 0;
    padding: 5px 50px 50px 5px;
    display: inline-flex;}

  #convert_to {
  list-style: none;
  margin: 0;
  padding: 5px 50px 50px 5px;
  display: inline-flex;}

  input[type="submit"] {
  position: absolute;
  top: 300px;
  left: 120px;
  width: 100px;
  height: 30px;
  border: 2px solid black;
  border-radius: 6px;
  background: 	#6B8E23;
} 

p{
    text-align: center;
    font-size: 2.5em;
    font-weight: 500;
}
</style>

<p>Welcome to currency converter</p>
<form action="currency.php" method="post">
<fieldset>   
<div id=input>
<label for = "amount">Amount</label>
<input type="text" name="amount" type="number" placeholder="provide the amount" required>   
</div>

<br>
    <div id=convert_from>   
        <legend>Convert from</legend>      
        <input type="checkbox" name="input_currency" onclick="onlyOne(this)" value="CAD">CAD<img src="flags/Canada.png" alt="canada flag" width="20" height="10"><br>      
        <input type="checkbox" name="input_currency" onclick="onlyOne(this)" value="USD">USD<img src="flags/USA.png" alt="usa flag" width="20" height="10"><br>      
        <input type="checkbox" name="input_currency" onclick="onlyOne(this)" value="EUR">EUR<img src="flags/EU.png" alt="EU flag" width="20" height="10"><br>      
        <input type="checkbox" name="input_currency" onclick="onlyOne(this)" value="GBP">GBP<img src="flags/UK.png" alt="british flag" width="20" height="10"><br> 
        <input type="checkbox" name="input_currency" onclick="onlyOne(this)" value="CNY">CNY<img src="flags/China.png" alt="china flag" width="20" height="10"><br> 
</div>
        <br>  
<div id=convert_to>   
<legend>Convert to &nbsp &nbsp</legend>      
        <input type="checkbox" name="output_currency" onclick="onlyOne2(this)" value="CAD">CAD<img src="flags/Canada.png" alt="canada flag" width="20" height="10"><br>      
        <input type="checkbox" name="output_currency" onclick="onlyOne2(this)" value="USD">USD<img src="flags/USA.png" alt="usa flag" width="20" height="10"><br>      
        <input type="checkbox" name="output_currency" onclick="onlyOne2(this)" value="EUR">EUR<img src="flags/EU.png" alt="EU flag" width="20" height="10"><br>      
        <input type="checkbox" name="output_currency" onclick="onlyOne2(this)" value="GBP">GBP<img src="flags/UK.png" alt="british flag" width="20" height="10"><br> 
        <input type="checkbox" name="output_currency" onclick="onlyOne2(this)" value="CNY">CNY<img src="flags/China.png" alt="china flag" width="20" height="10"><br>  
</div>   
        <input type="submit" name="convert" value="Convert" />      
</fieldset> 
</form>    
    
<?php
if (isset($_POST['convert'])) { 
    if (!isset($_POST['amount']) || !is_numeric($_POST['amount'])) {
        echo "Invalid input";
        return;
    }
    if (!isset($_POST['input_currency'])){
        echo "select input currency";
        return;
    }
    if (!isset($_POST['output_currency'])) {
        echo "select output currency";
        return;
    }
    $amount=$_POST['amount'];   
    $convert_from=$_POST['input_currency'];
    $convert_to=$_POST['output_currency'];
    if ($convert_from=="CAD" AND $convert_to=="USD") {
        echo '<br><center><img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo " CAD ". $amount . ' = ';
        echo'<img src = "flags/USA.png" alt="american flag"width="20" height="10">';
        echo ' USD '. $amount*0.79. "</br></center>"; 
    }   
    elseif  ($convert_from=="CAD" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo " CAD ". $amount . ' = ';
        echo'<img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo ' CAD '. $amount. "</br></center>"; 
    }   
    elseif  ($convert_from=="CAD" AND $convert_to=="EUR") {
        echo '<br><center><img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo " CAD ". $amount . ' = ';
        echo'<img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo ' EUR '. $amount*0.69. "</br></center>"; 
    }   
    elseif  ($convert_from=="CAD" AND $convert_to=="GBP") {
        echo '<br><center><img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo " CAD ". $amount . ' = ';
        echo'<img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo ' GBP '. $amount*0.5941. "</br></center>"; 
    }   
    elseif  ($convert_from=="CAD" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo " CAD ". $amount . ' = ';
        echo'<img src = "flags/China.png" alt="chinese flag" width="20" height="10">';
        echo ' CNY '. $amount*5.077. "</br></center>"; 
    }   
    elseif  ($convert_from=="USD" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo " USD ". $amount . ' = ';
        echo'<img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo ' CAD '. $amount*1.25. "</br></center>"; 
    }   
    elseif  ($convert_from=="USD" AND $convert_to=="USD") {
        echo '<br><center><img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo " USD ". $amount . ' = ';
        echo'<img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo ' USD '. $amount. "</br></center>"; 
    }  
    elseif  ($convert_from=="USD" AND $convert_to=="EUR") {
        echo '<br><center><img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo " USD ". $amount . ' = ';
        echo'<img src = "flags/EUR.png" alt="EU flag" width="20" height="10">';
        echo ' EUR '. $amount*0.87. "</br></center>"; 
    }  
    elseif  ($convert_from=="USD" AND $convert_to=="GBP") {
        echo '<br><center><img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo " USD ". $amount . ' = ';
        echo'<img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo ' GBP '. $amount*0.74. "</br></center>"; 
    }  
    elseif  ($convert_from=="USD" AND $convert_to=="CNY") {
        echo '<br><center><img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo " USD ". $amount . ' = ';
        echo'<img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo ' CNY '. $amount*6.39. "</br></center>"; 
    }  
    elseif  ($convert_from=="EUR" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo " EUR ". $amount . ' = ';
        echo'<img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo ' CAD '. $amount*1.44. "</br></center>"; 
    }  
    elseif  ($convert_from=="EUR" AND $convert_to=="USD") {
        echo '<br><center><img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo " EUR ". $amount . ' = ';
        echo'<img src = "flags/USA.png" alt="USA flag" width="20" height="10">';
        echo ' USD '. $amount*1.14. "</br></center>"; 
    }  
    elseif  ($convert_from=="EUR" AND $convert_to=="EUR") {
        echo '<br><center><img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo " EUR ". $amount . ' = ';
        echo'<img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo ' EUR '. $amount. "</br></center>"; 
    }  
    elseif  ($convert_from=="EUR" AND $convert_to=="GBP") {
        echo '<br><center><img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo " EUR ". $amount . ' = ';
        echo'<img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo ' GBP '. $amount*0.85. "</br></center>"; 
    } 
    elseif  ($convert_from=="EUR" AND $convert_to=="CNY") {
        echo '<br><center><img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo " EUR ". $amount . ' = ';
        echo'<img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo ' CNY '. $amount*7.31. "</br></center>"; 
    } 
    elseif  ($convert_from=="GBP" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo " GBP ". $amount . ' = ';
        echo'<img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo ' CAD '. $amount*1.68. "</br></center>"; 
    } 
    elseif  ($convert_from=="GBP" AND $convert_to=="USD") {
        echo '<br><center><img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo " GBP ". $amount . ' = ';
        echo'<img src = "flags/USD.png" alt="american flag" width="20" height="10">';
        echo ' USD '. $amount*1.336. "</br></center>"; 
    } 
    elseif  ($convert_from=="GBP" AND $convert_to=="GBP") {
        echo '<br><center><img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo " GBP ". $amount . ' = ';
        echo'<img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo ' GBP '. $amount. "</br></center>"; 
    } 
    elseif  ($convert_from=="GBP" AND $convert_to=="EUR") {
        echo '<br><center><img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo " GBP ". $amount . ' = ';
        echo'<img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo ' EUR '. $amount*1.1679. "</br></center>"; 
    } 
    elseif  ($convert_from=="GBP" AND $convert_to=="CNY") {
        echo '<br><center><img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo " GBP ". $amount . ' = ';
        echo'<img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo ' CNY '. $amount*8.54. "</br></center>"; 
    } 
    elseif  ($convert_from=="CNY" AND $convert_to=="CNY") {
        echo '<br><center><img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo " CNY ". $amount . ' = ';
        echo'<img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo ' CNY '. $amount. "</br></center>"; 
    } 
    elseif  ($convert_from=="CNY" AND $convert_to=="CAD") {
        echo '<br><center><img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo " CNY ". $amount . ' = ';
        echo'<img src = "flags/Canada.png" alt="canada flag" width="20" height="10">';
        echo ' CAD '. $amount*0.19. "</br></center>"; 
    } 
    elseif  ($convert_from=="CNY" AND $convert_to=="USD") {
        echo '<br><center><img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo " CNY ". $amount . ' = ';
        echo'<img src = "flags/USA.png" alt="american flag" width="20" height="10">';
        echo ' USD '. $amount*0.15. "</br></center>"; 
    } 
    elseif  ($convert_from=="CNY" AND $convert_to=="EUR") {
        echo '<br><center><img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo " CNY ". $amount . ' = ';
        echo'<img src = "flags/EU.png" alt="EU flag" width="20" height="10">';
        echo ' EUR '. $amount*0.1366. "</br></center>"; 
    } 
    elseif  ($convert_from=="CNY" AND $convert_to=="GBP") {
        echo '<br><center><img src = "flags/China.png" alt="china flag" width="20" height="10">';
        echo " CNY ". $amount . ' = ';
        echo'<img src = "flags/UK.png" alt="british flag" width="20" height="10">';
        echo ' GBP '. $amount*0.1170. "</br></center>"; 
    } 
  }
?>

</head>
<body>

</body>
</html>


<script>
function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('input_currency')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
function onlyOne2(checkbox) {
    var checkboxes = document.getElementsByName('output_currency')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>