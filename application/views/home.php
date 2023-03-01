<div class="container m-5 p-5">
    <div class="row g-5 justify-content-center">
        <?php foreach ($characters as $character) : 
        $character = iterator_to_array($character);
            ?>
            <div class="card" style="width: 24%;">
                <img src="<?= $character['image'] ?>" class="card-img-top" alt="characterImg">
                <div class="card-body">
                    <h5 class="card-title"><?= $character['name'] ?></h5>
                    <p class="card-text"><?= $character['species'] ?></p>
                    <p class="card-text"><?= $character['type'] .' '. $character['status'] ?></p>
                    <p class="card-text"> Você já ouviu falar?</p>
                    <a><img width="20px" height="20px" src="<?= base_url('assets/img/like.png') ?>"></a>
                    0
                    <a><img style="transform: rotate(180deg);" width="20px" height="20px" src="<?= base_url('assets/img/like.png') ?>"></a>
                    0
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>