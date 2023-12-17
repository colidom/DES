<section class="container">
    <h1 class="display-4"><?php echo $title ?></h1>
    <hr>
    <form class="col-md-6">
        <div class="mb-3">
            <label for="user" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="user" name="user" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="text" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Repetir contraseña:</label>
            <input type="text" class="form-control" id="password2" name="password2" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</section>