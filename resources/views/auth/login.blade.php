<form method="POST" action="/login">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">ContrasINAL</label>
    <input type="password" name="password" required>

    
    @error('message')
        <p class="text-danger">{{ $message }}</p>
    @enderror

    <button type="submit">Iniciar sesión</button>
</form>