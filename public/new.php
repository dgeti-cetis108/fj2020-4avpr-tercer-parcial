<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp - Registro de usuario!</title>
    <link rel="stylesheet" href="css/bulma.css">
</head>

<body>
    <section class="hero is-dark is-fullheight">
        <div class="hero-head">
            <div class="container">
                <h2 class="title">Registrate</h2>
            </div>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="box column is-5">
                    <h3 class="subtitle has-text-black has-text-centered has-text-weight-bold">
                        Registrate para utilizar la aplicación
                    </h3>
                    <div style="padding:20px;">
                        <!-- Inicio: Formulario -->
                        <form action="#" class="form">
                            <!-- Inicio: Campos nombres y apellidos -->
                            <div class="field is-grouped">
                                <p class="control is-expanded">
                                    <label class="label">Nombre(s)</label>
                                    <input
                                        type="text"
                                        name="nombres"
                                        id="nombres"
                                        class="input"
                                        required
                                        maxlength="25"
                                    >
                                </p>
                                <p class="control is-expanded">
                                    <label class="label">Apellido(s)</label>
                                    <input
                                        type="text"
                                        name="apellidos"
                                        id="apellidos"
                                        class="input"
                                        required
                                        maxlength="25"
                                    >
                                </p>
                            </div>
                            <!-- Fin: Campos nombres y apellidos -->
                            <!-- Inicio: Correo electrónico -->
                            <div class="field">
                                <label class="label">Correo electrónico</label>
                                <input type="email" name="correo" id="correo" class="input" required>
                            </div>
                            <!-- Fin: Correo electrónico -->
                            <!-- Inicio: Nombre de usuario -->
                            <div class="field">
                                <label class="label">Nombre de usuario</label>
                                <input type="text" name="nombre_usuario" id="nombre_usuario" class="input" required>
                                <p class="help is-info">
                                    El nombre de usuario debe contener al menos 8 caracteres y solo puede
                                    tener letras, números y/o _
                                </p>
                            </div>
                            <!-- Fin: Nombre de usuario -->
                            <!-- Inicio: Contraseñas -->
                            <div class="field is-grouped">
                                <p class="control is-expanded">
                                    <label class="label">Contraseña</label>
                                    <input type="password" name="contrasenia1" id="contrasenia1" class="input" required>
                                </p>
                                <p class="control is-expanded">
                                    <label class="label">Reescribe la contraseña</label>
                                    <input type="password" name="contrasenia2" id="contrasenia2" class="input" required>
                                </p>
                            </div>
                            <!-- Fin: Contraseñas -->
                            <!-- Inicio: Boton de registrar -->
                            <div class="field">
                                <button type="submit" class="button is-fullwidth is-success">
                                    Registrarse
                                </button>
                            </div>
                            <!-- Fin: Boton de registrar -->
                        </form>
                        <!-- Fin: Formulario -->
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-foot">
            <div class="container">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum consectetur, sint quidem alias magni, omnis, recusandae maxime autem minus ad cum dignissimos quod quaerat dolores perspiciatis accusantium in placeat accusamus!
                </p>
            </div>
        </div>
    </section>
</body>

</html>