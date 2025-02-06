<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php-Array operation</h1>
    <form action="" method="post">
        <input type="radio" name="contries" value="display" id="" onclick="enable()">Display array<br>
        <input type="radio" name="contries" id="" value="sorted" onclick="enable()">Sorted array<br>
        <input type="radio" name="contries" id="" value="duplicate" onclick="enable()">Without Duplicate<br>
        <input type="radio" name="contries" id="" value="dlast" onclick="enable()">Delete Last<br>
        <input type="radio" name="contries" id="" value="arrayrev" onclick="enable()">Array Reverse<br>
        <input type="radio" name="contries" id="" value="insert" onclick="enable()">Element insert<br>value:<input type="text" name="va" id="val" disabled>Position of array: <input type="number" name="pos" id="pos" disabled><br>
        <input type="radio" name="contries" id="" value="arrayser" onclick="enable()">Array Search<br>Find element: <input type="text" name="fin" id="fin" disabled><br>
        <button type="submit">submit</button>
    </form>
    <?php
    $inputarr=array("india","thailand","chilli","pakistan","italy","england","india","russia","italy","srilanka");
    print_r($inputarr);
    if($_POST){
        $val=$_POST['contries'];
        switch($val)
        {
            case "display":
                foreach($inputarr as $items)
                {
                    echo"<br>".$items;
                    

                }
                break;
                case "sorted":
                    sort($inputarr);
                    foreach($inputarr as $item)
                    {
                        echo "<br>".$item;
                    }
                    break;
                case "duplicate":
                    $result=array_unique($inputarr);
                    foreach($result as $item)
                    {
                        echo "<br>".$item;
                    }
                    break;
                case "dlast":
                    array_pop($inputarr);
                    foreach($inputarr as $item)
                    {
                        echo "<br>".$item;
                    }
                        break;
                case "arrayrev":
                    $rev=array_reverse($inputarr);
                    foreach($rev as $item)
                    {
                        echo "<br>".$item;
                    }
                        break;
                case "insert":
                    $pos=$_POST['pos'];
                    $pos--;
                    array_splice($inputarr,$pos,0,$_POST['va']);
                    foreach($inputarr as $item)
                    {
                        echo "<br>".$item;
                    }
                    break;
                case "arrayser":
                    if(in_array($_POST['fin'],$inputarr))
                    {
                        echo "<br>search element is ".$_POST['fin']." is in position= ".array_search($_POST['fin'],$inputarr);

                    }
                    break;
                default:
                echo"wrong input";

        }
    }
    
    ?>
</body>
<script>
    function enable()
    {
        var choice=document.getElementsByName('contries');
        var choice_value 
        for(var i=0;i<choice.length;i++)
        {
            if(choice[i].checked)
             choice_value=choice[i].value

        }
        if(choice_value=='insert'){
            document.getElementById('val').disabled=false;
            document.getElementById('pos').disabled=false;
            document.getElementById('fin').disabled=true;

        }
        else if(choice_value=='arrayser')
        {
            document.getElementById('fin').disabled=false;
            document.getElementById('val').disabled=true;
            document.getElementById('pos').disabled=true;
        }
        else{
            document.getElementById('fin').disabled=true;
            document.getElementById('val').disabled=true;
            document.getElementById('pos').disabled=true;
        }

    }
</script>
</html>