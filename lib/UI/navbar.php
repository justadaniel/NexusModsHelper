<?php

function MenuButton() {
?>
<a href="#" class="link icon-only open-panel"><i class="material-icons">menu</i></a>
<?php
}

function DashboardButton() {
    ?>
    <a href="index.php" class="link icon-only<?php if(!IsColorLight($navBarColor)) : ?> ripple-black<?php endif; ?>"><i class="material-icons">home</i></a>
    <?php
}

?>