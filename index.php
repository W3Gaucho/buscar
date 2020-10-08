<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <style>
    button{
        cursor:pointer;
    }
    </style>
</head>
<body>
    <div style="text-align:center;">
        <h1>Buscar</h1>
        <form class="" action="redirect.php" method="get">
            <select name="key" style="width:400px">
                <?php
                require 'inc/erro.php';
                $buscas=require 'inc/buscas.php';
                foreach ($buscas as $key => $value) {
                    if($key=='wikipedia (todas)'){
                        $sel=' selected';
                    }else{
                        $sel=null;
                    }
                    print '<option value="'.$key.'"'.$sel.'>';
                    print $key;
                    print '</option>';
                }
                ?>
            </select><br><br>
            <input type="text" name="q" id="q" style="width:384px"><br><br>
            <button type="submit">Buscar</button>
        </form>
    </div>
    <script>
    $(function(){
        $('input[type=text]').focus();
    });
</script>
</body>
</html>
