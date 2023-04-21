    <?= $this->extend('appLayout');?>
    <?= $this->section('content');?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Hello world, My Name is <?= user()->username ?? 'Login Dulu'; ?>
            </h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    <?= $this->endSection();?>