<section class="feedback--container">
    <h2 class="feedback--title"><?php print $data['title'] ?></h2>

    <?php print $data['table']; ?>

    <!-- Create form can be pre-rendered -->
    <?php if (isset($data['forms']['create'])): ?>

        <div class="form--comment">
            <?php print $data['forms']['create']; ?>
        </div>

    <?php endif; ?>

    <?php if ($data['message']): ?>

        <p class="message"><?php print $data['message']; ?></p>

    <?php endif; ?>

    <?php foreach ($data['links'] as $link): ?>

        <?php print $link; ?>

    <?php endforeach; ?>

</section>