<section class="container">
    <h1 class="display-4"><?php echo $title ?></h1>
    <hr>
    <form action="procesar_login.php" method="POST" class="col-md-6">
        <div class="mb-3">
            <label for="user" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="user" name="user" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>
        <!-- Agregar campos y botones según sea necesario -->
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</section>