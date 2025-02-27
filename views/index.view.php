<?php require "partials/header.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($posts as $post) : ?>
            <article class="mb-8">
                <h2 class="text-2xl font-bold mb-2">
                    POST TITLE: <?= $post['title'] ?>
                </h2>
                <p class="text-sm">
                    POST ID: <?= $post['id'] ?>
                </p>
                <p class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore praesentium a ipsum illo maxime minima harum sint cumque, architecto molestiae quo facere dolores unde, expedita veniam vel et adipisci repudiandae quibusdam magnam ex rerum sunt perspiciatis iste. Nisi sunt voluptatem at saepe modi eaque molestias, dolor ea quidem ipsa repellat!
                </p>
            </article>
        <?php endforeach; ?>
    </div>
</main>
</div>


<?php require "partials/footer.php"; ?>