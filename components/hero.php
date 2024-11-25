<?php
$items = [
    ['href' => 'https://youtube.com/', 'src' => 'assets/youtube.png', 'alt' => 'Youtube logo'],
    ['href' => 'https://linkedin.com/in/felipe-de-pietro-0820a5195', 'src' => 'assets/linkedin.png', 'alt' => 'linkedin logo'],
    ['href' => 'https://www.facebook.com/?locale=pt_BR/"', 'src' => 'assets/facebook.png', 'alt' => 'facebook logo'],
    ['href' => 'https://x.com', 'src' => 'assets/twitter.png', 'alt' => 'twitter logo']
]

?>
<section class="flex gap-x-3">
    <!-- title and description -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome e Felipe</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, eu sou um desenvolvedor front-end, tenho 29 anos e estou cursando o curso de
            desenvolvimento web na Rocketseat.
            Especializado em PHP e HTML.
        </p>

        <!-- redes sociais -->

        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($items as $item) : ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-8 hover:animate-pulse" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>">
                    </a>

                </li>
            <?php endforeach; ?>
        </ul>

    </div>

    <!-- image -->
    <div class="w-4/4 flex justify-between">
        <div>
            <img class="h-60 -mt-6 ml-24 hover:animate-pulse" src="assets/avatar.svg" alt="Felipe de Pietro">
        </div>
    </div>
</section>