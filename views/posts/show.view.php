<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="container mx-auto px-4 mt-10">
    <h1 class="text-2xl text-slate-300 font-semibold">
        <?= $post['title'] ?>
    </h1>
    <p class="mt-10">
        <?= $post['content'] ?>
    </p>
</main>

<?php require base_path('views/partials/footer.php') ?>