<?php use Epoque\Chameleon\Daemon; ?>

<div class="row mainRow">
    <section class="col-md-8 col-md-offset-1 col-lg-offset-2">
        <header>
            <h1>Jason's HUD</h1>
        </header>
        
        <br>
        
        <ul class="nav nav-pills nav-stacked">
            <?php Daemon::contents(PHP_DIR.'mainMenu.php'); ?>
        </ul>
    </section>
</div>
