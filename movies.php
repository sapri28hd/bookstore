<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $jsonfile = file_get_contents("movies.json");
        $array = json_decode($jsonfile,true);
    ?>
    <select name="year_movie" id="year_movie">
        <?php
            foreach($array as $key => $value) {
                echo "<option value='{$value}'>".$value["year"].":".$value["title"]."</option>";

            }
         ?>  
    </select><br>
    <input type="text" id="year" value="" readonly/><br>
    <input type="text" id="title" value="" readonly/><br>
    <textarea name="genres" cols="50" rows="30" readonly></textarea>
        
    <script>
        var str = "";
        var jsonEx = <?php echo $jsonfile ?>;
        var data = []
    </script>
    <div id="output"></div>
</body>

</html>