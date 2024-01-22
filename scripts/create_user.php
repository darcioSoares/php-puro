<?php 

$erro = $_SESSION['error'] ?? null;
unset($_SESSION['error']);

?>
<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-4">        
        <?php if(!empty($erro)): ?>
            <div class="alert alert-danger mt-3 p-2 text-center">
                <?= $erro ?>
            </div>
        <?php endif; ?> 

        <div class="card bg-light p-5 shadow-mt-5">
            <h3>Criando Novo Usuario</h3>
            <hr>

            <form action="?rota=create_user_submit" method="post">
                <div class="mb-3">
                    <label for="user_email" class="form-label">Usuario</label>    
                    <input type="text" name="user_email" class="form-control" >                  
                </div>

                <div class="mb-3">
                    <label for="user_name" class="form-label">Nome</label>    
                    <input type="text" name="user_name" class="form-control" >                  
                </div>

                <div class="mb-3">
                <select name="role" id="role" class="form-control">
                  <option value="1">Admin</option>
                  <option value="2">Gerente</option>
                  <option value="3">Coordenador</option>
                  <option value="4">Assistente</option>
                </select>                
                </div>

                <div class="mb-3">
                    <label for="user_password" class="form-label">Senha</label>    
                    <input type="text" name="user_password" class="form-control" >                  
                </div>

                <div class="mb-3">
                    <label for="user_password_repeat" class="form-label">Repita a senha</label>    
                    <input type="text" name="user_password_repeat" class="form-control" >                  
                </div>

                <div>
                    <input type="submit" value="Entrar" class="btn btn-secondary w-100">
                </div>
            </form>
             
        </div>        
    </div>
</div>
</div>