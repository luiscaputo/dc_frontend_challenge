<?php require_once('./pages/includes/home.php') ?>

<div class="container-scroller" style="margin-top: 12%">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="row w-100 m-0">
      <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
        <div class="card col-lg-4 mx-auto">
          <div class="card-body px-5 py-5">
            <h3 class="card-title text-left mb-3">DC-Challenge - Login</h3>
            <form method="POST" action="">
              <div class="form-group">
                <label>E-mail *</label>
                <input type="text" name="email" class="form-control p_input">
              </div>
              <div class="form-group">
                <label>Senha *</label>
                <input type="password" name="password" class="form-control p_input">
              </div>
              <div class="form-group d-flex align-items-center justify-content-between">
                <a href="{{ route('pages.forgotPassword') }}" class="forgot-pass">Esqueci a senha.</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block enter-btn">Entrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- row ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>

<?php require_once('./pages/includes/footer.php') ?>