<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-900 text-gray-100">

<?php include('./components/header.php') ?>
<main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
    <!-- hero -->
    <?php include('./components/hero.php') ?>

    <!-- projects -->
    <section id="projetos" class="space-y-3 py-6">
        <h2 class="text-2xl font-bold">Meus Projetos</h2>
        <?php include('./components/projects.php') ?>
    </section>
</main>

<footer class="h-20 mx-auto max-w-screen-lg min-h-20 px-3">
    <!-- date -->
    <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
        &copy; <?= date('Y') ?>. Feito Por Felipe de Pietro.
    </div>

    <!-- links -->
    <div></div>
</footer>
</body>
</html>