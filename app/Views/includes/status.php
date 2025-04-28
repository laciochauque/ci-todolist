<?php if (session()->has("status")): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('status') ?>
    </div>
<?php endif; ?>