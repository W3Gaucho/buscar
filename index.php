<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Buscar</title>
    <link rel="stylesheet" href="css/select2.min.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/i18n/pt-BR.js"></script>
</head>
<body>
    <div style="text-align:center;">
        <h1>Buscar</h1>
        <form class="" action="redirect.php" method="get">
            <textarea name="q" rows="8" cols="80" id="q"></textarea><br><br>
            <select name="key" class="js-example-basic-single">
                <?php
                require 'inc/erro.php';
                $buscas=require 'inc/buscas.php';
                foreach ($buscas as $key => $value) {
                    if($key=='duck.com'){
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
            <input type="submit" value="Buscar">
        </form>
    </div>
    <script>
    $(function(){
        //enter
        $('textarea').on('keyup', function(e) {
            if (e.which == 13 && ! e.shiftKey) {
                $('textarea').val($('textarea').val().trim());
                this.form.submit();
            }
        });
        //focar no textarea
        $("textarea").focus();
        //fuzzy search
        $('.js-example-basic-single').select2({
            theme: "classic",
            language: "pt-BR"
        });

    });
</script>
</body>
</html>
