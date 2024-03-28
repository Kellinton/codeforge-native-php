<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php $pagina = 'SERVIÇOS' ?>
    <title>Serviços - Code Forge</title>
    
    <?php require_once('includes/head.php'); ?>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
    <link rel="stylesheet" href="assets/css/paginas.css">
</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <?php require_once('includes/top.php'); ?>

    <main>
        <?php require_once('includes/service.php'); ?>
    </main>
    <?php require_once('includes/footer.php'); ?>
    <?php require_once('includes/script.php'); ?>

    
    <script>
        // JavaScript for accordion functionality
        document.addEventListener('DOMContentLoaded', function() {
        const accordions = document.querySelectorAll('.most-asked .accordion');

        accordions.forEach(function(accordion, index) {
            const accordionHead = accordion.querySelector('.accordion-head');
            const accordionBody = accordion.querySelector('.accordion-body');

            if (index === 0) {
                accordionHead.classList.add('is-open');
                accordionBody.style.height = accordionBody.scrollHeight + 'px';
            }

            accordionHead.addEventListener('click', function() {
                const isOpen = accordionHead.classList.contains('is-open');

                // Fecha todos os acordeões
                accordions.forEach(function(acc) {
                    acc.querySelector('.accordion-head').classList.remove('is-open');
                    acc.querySelector('.accordion-body').style.height = 0;
                });

                // Abre ou fecha o acordeão clicado
                if (!isOpen) {
                    accordionHead.classList.add('is-open');
                    accordionBody.style.height = accordionBody.scrollHeight + 'px';
                }
            });
        });
    });
    </script>

</body>
</html>
