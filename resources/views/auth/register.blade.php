<form method="POST" action="/register">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" required>

    <label for="surname">Apellido</label>
    <input type="text" name="surname">

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <label for="password_confirmation">Confirmar contraseña</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Registrarse</button>
</form>