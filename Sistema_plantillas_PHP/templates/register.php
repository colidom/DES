<?php
$user = isset($_POST['user']) ? $_POST['user'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password2 = isset($_POST['password2']) ? $_POST['password2'] : '';

$passwords_match = $password === $password2;
$message = '';

if ($passwords_match) {
    $message = 'Las contraseñas coinciden';
} else {
    $message = 'Las contraseñas no coinciden';
}
?>

<section class="container">
    <h1 class="display-4"><?php echo $title ?></h1>
    <hr>
    <form class="col-md-6" method="POST">
        <div class="mb-3">
            <label for="user" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="user" name="user" value="<?php echo $user; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Repetir contraseña:</label>
            <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2; ?>" required>
        </div>
        <?php if ($passwords_match) : ?>
            <div class="alert alert-success" id="successMessage"><?php echo $message; ?></div>
        <?php else : ?>
            <div class="alert alert-danger" id="errorMessage"><?php echo $message; ?></div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</section>

<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('errorMessage').style.display = 'none';
    }, 1000);
</script>