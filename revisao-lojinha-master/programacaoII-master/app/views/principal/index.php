<html>
<head>
<meta charset="UTF-8">
    <script src="assets/jquery"></script>

    <link rel="stylesheet" href="assets/css/principal.css">

    <script>
        $(document).ready(function () {
            $("#abas ul li").click(function () {
                $(this).addClass("selecionado");
                //guardo o id dfe quem eu cliquei
                var id = $(this).id();
                $("."+id).show();
            });
        };
        </script>
</head>

    <body>

    <section id="central">
        <div id="abas">
            <ul>
               <?php foreach($categorias as $categoria):?>
                <li id="aba<?= $categoria->getId()?>"> <?= utf8_encode($categoria->getNome())?> </li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="conteudo aba<?= utf8_encode($produtos->getIdCategoria())?>">
      
    

        </div>
    </section>


</body>

</html>