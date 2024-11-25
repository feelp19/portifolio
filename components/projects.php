<?php
$projetos = [
    [
        "titulo" => "Primeiro Projeto",
        "status" => true,
        "data" => "2024",
        "stack" => ["PHP", "HTML", "CSS", "Javascript"],
        "descricao" => "Portfolio utilizando HTML, CSS e PHP",
        "img" => "assets/prj-1.png"
    ],
    [
        "titulo" => "Segundo Projeto",
        "status" => true,
        "data" => "2025",
        "stack" => ["PHP", "HTML", "CSS", "Javascript"],
        "descricao" => "Projeto secreto",
        "img" => "assets/avatar.svg"
    ],
    [
        "titulo" => "Terceiro Projeto",
        "status" => false,
        "data" => "2024",
        "stack" => ["PHP", "HTML", "CSS", "Javascript"],
        "descricao" => "projeto secreto",
        "img" => "assets/avatar.svg"
    ],
    [
        "titulo" => "Quarto Projeto",
        "status" => false,
        "data" => "2024",
        "stack" => ["PHP", "HTML", "CSS", "Javascript"],
        "descricao" => "projeto secreto",
        "img" => "assets/avatar.svg"
    ]
];

?>

    <!-- projects -->
<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex justify-between items-center">
        <div class="w-1/5 flex items-center justify-middle">
            <img class="h-20 items-center rounded-md shadow-md shadow-black" src="<?= $projeto['img'] ?>" alt="Projeto">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl"><?= $projeto['titulo'] ?>
                    <?php if ($projeto['status']): ?>
                        <span class='text-xs text-green-400 opacity-50 italic'>( Finalizado em <?= $projeto['data'] ?>)</span>
                    <?php endif; ?>
                    <?php if (!$projeto['status']): ?>
                        <span class='text-xs text-red-400 opacity-50 italic'>( Nao Finalizado - em desenvolvimento )</span>
                    <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php
                    $colors = ["sky", "lime", "fuchsia", "rose", "ember", "teal", "purple"];
                    foreach ($projeto['stack'] as $position => $tech): ?>
                        <span class="bg-<?= $colors[$position] ?>-400 text-<?= $colors[$position] ?>-900 rounded-md font-semibold text-xs px-2 py-1"><?= $tech ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?= $projeto['descricao'] ?>
            </p>

        </div>
    </div>
<?php endforeach; ?>