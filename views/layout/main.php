<?php $this->layout('layout::base', ['file' => 'layout/main.php']); ?>

<?php $this->insert('shared::header') ?>

<section>
    <div class="container">
        <?= $this->section('content') ?>
    </div>
</section>

<?php $this->insert('shared::footer') ?>
