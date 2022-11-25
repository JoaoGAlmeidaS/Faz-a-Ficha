<div class="container">
		<div class="main-body">
        <div class="row gutters-sm">
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-column align-items-center text-center">
              <img src="assets/img/user.png" alt="Admin" class="rounded-circle" width="150">
              <div class="mt-3">
                <h4><?php echo $usuarioLogado['login'] ?></h4>
                
                
                
              </div>
            </div>
          </div>
        </div>
				</div>
				<div class="col-lg-8">
                    <form action="" method="POST">
					<div class="card mb-3">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Usuário</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" value="<?php echo $usuarioLogado['login'] ?>" name="usuario" disabled>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" value="<?=$obUsuario->email?>" name="email" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Senha</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="password" class="form-control" value="" name="senha" required>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                    
									<input type="submit" class="btn btn-info px-4" value="Editar">
								</div>
							</div>
						</div>
					</div>
                    </form>
					
				</div>
			</div>
		</div>
	</div>