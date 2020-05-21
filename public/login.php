<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp - Inicio de sesión</title>
    <link rel="stylesheet" href="css/bulma.css">
</head>

<body>
    <section class="hero is-dark is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-4-widescreen is-offset-4-widescreen is-6-tablet is-offset-3-tablet">
                        <div class="box">
                            <div class="has-text-centered">
                                <img src="images/logo-cetis108-2018.png" alt="Logo de MyApp">
                                <h3 class="is-size-4 has-text-weight-bold">
                                    Bienvenido a MyApp
                                </h3>
                            </div>
                            <hr>
                            <form action="#" method="POST">
                                <div class="field">
                                    <label class="label">Usuario</label>
                                    <input
                                        type="text"
                                        class="input"
                                        name="txtUsuario"
                                        id="txtUsuario"
                                        placeholder="Escribe tu nombre de usuario"
                                    >
                                    <p class="help">
                                        El nombre de usuario te lo propornciona el
                                        administrador del sitio.
                                    </p>
                                </div>
                                <div class="field">
                                    <label class="label">Contraseña</label>
                                    <input
                                        type="password"
                                        class="input"
                                        name="txtContrasenia"
                                        id="txtContrasenia"
                                        placeholder="Escibre la contraseña"
                                    >
                                </div>
                                <div class="field">
                                    <button class="button is-link is-fullwidth">
                                        Iniciar sesión
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>