<div class="d-flex align-items-center">
    <div class="loginImg me-auto">
        <img src="<?= base_url("assets/img/rickMorty.jpg") ?>" alt="Rick and Morty">
    </div>
    <div class="p-4 p-md-5 me-auto">
        <div class="loginBox text-center p-2">
            <div class="pt-5">
                <img src="<?= base_url('assets/img/logo_sete.svg') ?>" class="logoSete">
            </div>
            <div class="w-100 p-4">
                <h4 class="pt-4">Bem vindo</h3>
                    <h4 class="pb-2">Sua idade é</h4>
            </div>
            <div class="w-100 pb-4">
                <h1><?= (!isset($user["age"]) ? 'IDADE' : $user["age"]) ?></h1>
            </div>
            <form action="<?=base_url()?>Home" class="signin-form pt-4">
                <div class="form-group px-5">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Confirmar</button>
                </div>
            </form>
            <a data-toggle="tab" href="#" onclick="history.back()">Cancelar</a>
        </div>
    </div>
</div>