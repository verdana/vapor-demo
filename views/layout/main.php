<?php $this->layout('layout::base', ['file' => 'layout/main.php']); ?>

<?= $this->include('shared::header') ?>

<section>
    <div class="container">
        <?= $this->section('content') ?>
    </div>
</section>

<?= $this->include('shared::footer') ?>
