<?php $this->layout('layout::main', ['file' => 'home.php']); ?>

<div class="row">
    <span class="intro">
        <p>Vapor is a simple PHP template extension that written by C. It's extremely fast, easy to use and easy to extend.</p>
        <p>It's inspired by the excellent <a href="http://platesphp.com">Plates</a> template engine.</p>
    </span>
    <span class="intro">
        <img src="imgs/p.png" />
        <p>By now, Vapor is still under development, doesn't have yet its complete features.</p>
    </span>
</div>

<?php
$this->include('shared::footer', [
    'author' => 'Anadrev',
    'email' => 'verdana.cn@gmail.com'
]);
?>
