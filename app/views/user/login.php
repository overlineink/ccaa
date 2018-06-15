<?php $this->start('head'); ?>
<!-- Custom styles for this template -->
<link href="<?=PROOT?>css/floating-labels.css" rel="stylesheet">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<form class="form-signin" method="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Hi! :)</h1>
        <p>Ready to test this demo application and explore it? Let's do it. Guest password: "12345".</p>
      </div>

      <div class="form-label-group">
        <input name="passwrd" type="password" id="inputPasswrd" class="form-control" placeholder="Password" required autofocus>
        <label for="inputPasswrd">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
</form>
<?php $this->end(); ?>

<?php $this->start('scripts'); ?>
<!-- Scripts buffer works! -->
<?php $this->end(); ?>

