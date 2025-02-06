<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter a word: <input type="text" name="word" id="word">
        <br>
        <button type="submit">submit</button>
    </form>
    <?php 
    if($_POST){

        function countv($inputstring)
        {
            $vowel=array("a","e","i","o","u");
            $len=strlen($inputstring);
            $num=0;
            for($i=0;$i<$len;$i++)
            {
                if(in_array($inputstring[$i],$vowel))
                {
                    echo "$inputstring[$i] is in $i position<br>";
                    $num++;
                }
            }
            return $num;

        }

         $input=$_POST['word'];
         $inputstring=strtolower($input);
         if($input!=null)
         {
            echo "$input have no of string is: ".countv($inputstring);
         }
         


    }
    
    ?>
</body>
</html>