<h1 class="title"><?php print $data['title'] ?></h1>
<aside class="main--container">
    <section class="hero--img"></section>
    <section class="hero--container"></section>
</aside>


<?php if (isset($data['forms']['create'])): ?>
    <div class="create-form-wrapper">
        <?php print $data['forms']['create']; ?>
    </div>
<?php endif; ?>

<?php if (isset($data['forms']['update'])): ?>
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $data['forms']['update']; ?>
        </div>
    </div>
<?php endif; ?>
