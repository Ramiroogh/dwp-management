<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .left-container {
        background-image: url('../public/login.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
</style>
<title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left-container"></div>

            <div class="col-md-6 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h1>Digitalweb Patagonia Agency</h1>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo Electronico</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                                <div><a href="#">¿Olvidaste tu Contraseña? </a>
                                <p>Ingresa al enlace para resetear tu contraseña</p></div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>