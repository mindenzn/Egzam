<header class="header">
    <nav class="header--nav">
        <ul class="header--nav-ul">
            <?php foreach ($data as $title => $link): ?>
                <li><a href="<?php print $title; ?>"><?php print $link; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
