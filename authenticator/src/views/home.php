<?php
session_start();
?>
<h1>
    <marquee behavior="" direction="">
        Bienvenue <span style="color: red;"><?= $_SESSION['name']." ". $_SESSION['lastname'] ;?></span> sur notre dashboard
    </marquee>

</h1>
<button>
    <a href="?page=loyout" class="btn btn-danger btn-sm">Se déconnecter</a>
</button>