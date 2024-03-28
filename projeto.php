<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Projetos - Code Forge</title>
    <?php $pagina = 'PROJETOS' ?>

    <?php require_once('includes/head.php'); ?>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
    <link rel="stylesheet" href="assets/css/paginas.css"> 
</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <?php require_once('includes/top.php'); ?>

    <main>
        <?php require_once('includes/project.php'); ?>
    </main>
    <?php require_once('includes/footer.php'); ?>
    <?php require_once('includes/script.php'); ?>

    <script>
        function ativarFiltro(element){

            var buttons = document.querySelectorAll('.btn-filter a');
            buttons.forEach(function(btn) {
                btn.classList.remove('is-checked');
            });

            element.classList.add('is-checked');
        }
    </script>
</body>
</html>
