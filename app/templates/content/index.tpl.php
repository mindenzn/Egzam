<h1 class="title"><?php print $data['title'] ?></h1>
<aside class="main--container">
    <section class="hero--img"></section>
    <section class="hero--container">
        <?php foreach ($data['offers'] as $offer): ?>
        <div class="hero--offers">
            <div class="hero--offers-img <?php print $offer['img'] ?>"></div>
            <h3><?php print $offer['offer'] ?></h3>
            <span><?php print $offer['offer_info'] ?></span>
        </div>
        <?php endforeach;?>
    </section>
    <section class="hero--map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9216.683049351059!2d25.3468222!3d54.7242111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010224!5e0!3m2!1slt!2slt!4v1608576293769!5m2!1slt!2slt" width="800" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
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
