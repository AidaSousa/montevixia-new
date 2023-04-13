<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Suscripción</title>
    <!-- Agrega el script de Stripe.js en la cabecera de tu página -->
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Agrega los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Formulario de Suscripción</h1>
                <form action="{{ route('subscription.subscribe') }}" method="post" id="subscription-form">
                    <!-- Contenido del formulario -->
                    <div class="form-group">
                        <label for="card-holder-name">Nombre del titular de la tarjeta</label>
                        <input type="text" id="card-holder-name" name="card-holder-name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="card-number">Número de tarjeta</label>
                        <input type="text" id="card-number" name="card-number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="expiry-month">Mes de vencimiento</label>
                        <input type="text" id="expiry-month" name="expiry-month" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="expiry-year">Año de vencimiento</label>
                        <input type="text" id="expiry-year" name="expiry-year" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cvc">CVC</label>
                        <input type="text" id="cvc" name="cvc" class="form-control" required>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-secondary" style="background-color: #009284; border: 1px solid #009284;">Enviar</button>
                    <a href="/profile" class="btn btn-primary" style="background-color: #000000; border-color: #000000;">Volver</a>
                </form>
    <script>
    // Importa la librería de Stripe.js y configura tu clave pública
    var stripe = Stripe(pk_test_51Mtn5ZCNGUc1Amzp3fRKmWtIqppccf4KyGsPfvzyBAmftNMjuHhb1TBoUl1asEJaJvbEXm0Kt3JC2TlL2e3Rn3CH00QALXOWAH);

    // Escucha el evento de envío del formulario
    document.getElementById('subscription-form').addEventListener('submit', async function(event) {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente

        // Obtén los detalles de la tarjeta de crédito del formulario
        var cardHolderName = document.getElementById('card-holder-name').value;
        var cardNumber = document.getElementById('card-number').value;
        var expiryMonth = document.getElementById('expiry-month').value;
        var expiryYear = document.getElementById('expiry-year').value;
        var cvc = document.getElementById('cvc').value;

        // Crea un token de pago utilizando los detalles de la tarjeta de crédito
        var result = await stripe.createToken({
            card: {
                name: cardHolderName,
                number: cardNumber,
                exp_month: expiryMonth,
                exp_year: expiryYear,
                cvc: cvc
            }
        });

        // Verifica si se ha creado el token de pago correctamente
        if (result.error) {
            // Maneja el error, por ejemplo, mostrándolo en la página
            console.error(result.error);
        } else {
            // Agrega el token de pago como un campo oculto en el formulario
            var form = document.getElementById('subscription-form');
            var tokenInput = document.createElement('input');
            tokenInput.setAttribute('type', 'hidden');
            tokenInput.setAttribute('name', 'stripeToken');
            tokenInput.setAttribute('value', result.token.id);
            form.appendChild(tokenInput);

            // Envía el formulario
            form.submit();
        }
    });
</script>

</body>
</html>

