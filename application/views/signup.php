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
                <h4 class="pb-5 pt-3">Bem vindo</h3>
            </div>
            <form action="<?=base_url()?>Signup/confirm" method="post" class="signin-form">
                <div class="form-group pb-3 px-5">
                    <input type="text" class="form-control" name="name" placeholder="Seu nome aqui" required>
                </div>
                <div class="form-group pb-3 px-5">
                    <input type="text" class="form-control" name="age" placeholder="Sua idade aqui" required>
                </div>
                <div class="form-group px-5">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
                </div>
            </form>
            <p>Já possui cadastro? <a data-toggle="tab" href="<?= base_url() ?>">Fazer login</a></p>
        </div>
    </div>
</div>