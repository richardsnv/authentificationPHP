<?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>">
        <?php echo $_SESSION['message']; ?>
    </div>
    <?php
    unset($_SESSION['message']);
    unset($_SESSION['type']);
    ?>
<?php endif ?>