<?php
session_start();
?>
<h1>
    <marquee behavior="" direction="">
        Bienvenue <span style="color: red;"><?= $_SESSION['name']; ?></span> sur notre dashboard
    </marquee>

</h1>