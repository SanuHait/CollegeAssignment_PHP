<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <h1>php-String Operation</h1><br><br>
         string operation:<br>
        <input type="radio" name="option" id="" value="upper">Lowercase to uppercase<br>
        <input type="radio" name="option" id="" value="lower">Uppercase to lowercase<br>
        <input type="radio" name="option" id="" value="fupper">First chacter Uppercase<br>
        <input type="radio" name="option" id="" value="fwordupper">First character of all the words uppercase<br>
        <input type="radio" name="option" id="" value="getthelast" onclick="enable()">Get the last <input type="number"  placeholder="getlast" name="getlast" id="getlast" disabled onclick="enable()">charcter of string<br>
        <br>
        <br>
        <input type="radio" name="option" id="" value="replace" onclick="enable()">Replace the first<input type="text" name="first" id="first"  placeholder="first" disabled onclick="enable()">
        following string with <input type="text" name="last" id="last" placeholder="last" disabled onclick="enable()"> <br>
        <input type="radio" name="option" id="" value="secondword" onclick="enable()">Second word of a sentence<br>
        <input type="radio"  name="option" id=""  onclick="enable()" value="val">value: <input type="text" name="strb" id="value" disabled placeholder="value" onclick="enable()">
        position of string: <input type="text" name="position" id="position" placeholder="position" disabled onclick="enable()"><br><br>
        <button type="submit">submit</button>
    </form>
    <?php
     $inputstring="the quick brown FOX jumps over the lazy DOG";
     echo "input string:<br>";
     print_r($inputstring);
     echo "<br>output String:";
    ?>
    <br>
    <?php 
    if($_POST)
    {
        $val=$_POST['option'];
       
        switch($val){
            case "upper":
                echo strtoupper($inputstring);
                break;
            case "lower":
                echo strtolower($inputstring);
                break;
            case "fupper":
                echo ucfirst($inputstring);
                break;
            case "fwordupper":
                echo ucwords($inputstring);
                break;    
            case "getthelast":
                echo  substr($inputstring,-($_POST['getlast']));
                break;
            case  "replace":
                $search=$_POST['first'];
                $replace=$_POST['last'];
                echo str_replace($search,$replace,$inputstring);
                break;
            case "secondword":
                echo "second word is: ";
                $dataarray=explode(" ",$inputstring);
                echo $dataarray[1];
                break;
            case "val":
                $element=$_POST['strb'];
                $position=$_POST['position'];
                echo substr_replace($inputstring,$element,$position,0);
                break;
        }

    }
    ?>
</body>
<script>
    function enable()
    {
        var choice=document.getElementsByName('option');
        var choice_value 
        for(var i=0;i<choice.length;i++)
        {
            if(choice[i].checked)
             choice_value=choice[i].value

        }
        if(choice_value=='getthelast')
        {
           document.getElementById('getlast').disabled=false
           document.getElementById('first').disabled=true
            document.getElementById('last').disabled=true
            document.getElementById('value').disabled=true
            document.getElementById('position').disabled=true
        }
        else if(choice_value=='replace')
        {
            document.getElementById('first').disabled=false
            document.getElementById('last').disabled=false
            document.getElementById('getlast').disabled=true
            document.getElementById('value').disabled=true
            document.getElementById('position').disabled=true
        }
        else if(choice_value=='val')
        {
            document.getElementById('first').disabled=true
            document.getElementById('last').disabled=true
            document.getElementById('getlast').disabled=true
            document.getElementById('value').disabled=false
            document.getElementById('position').disabled=false
        }
        else{
            document.getElementById('first').disabled=true
            document.getElementById('last').disabled=true
            document.getElementById('getlast').disabled=true
            document.getElementById('value').disabled=true
            document.getElementById('position').disabled=true
        }

    }

</script>
</html>