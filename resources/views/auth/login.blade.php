<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .card {
      width: 300px;
      max-width: 100%;
    }
    .container {
      display: flex;
      align-content: center;
      align-items: center;
      flex-direction: row-reverse;
      
      height: 100%;
    }
    .container > div {
        margin: auto;
        padding: auto;
    }
    .mainContainer {
        display: flex;
        flex-direction: column;
        padding: 100px;
    }
    .titulo {
        display: grid;
        place-items: center;
        margin-bottom: 20px;
    }
    .registro {
        position:
    }
    a{
        margin:15px;
        
    }
    #btn-login{
      color: white;
    }
    button{
        margin:15px;
    }
  </style>
</head>
<body>


<div class="container" >
  <div class=" mainContainer" style="border: 2px solid black">
    <form action=" {{route('login')}} " method="post">
      @csrf
        
    </form>
    <div class="titulo">
      <div class="row">
          <div class="col-12" style="border-bottom: 2px solid black"><h1>Inicio de Sesión</h1></div>   
          
      </div>
    </div>
  
  
    {{-- Login Ciudadano --}}
    <section>
        <a class="col-12" href="#collapseForm2" data-toggle="collapse" class="btn btn-link">
            <button type="button" class="btn btn-primary">Usuarios Ciudadanos</button>
        </a>
        <div class="row justify-content-center collapse" id="collapseForm2">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Inicio de sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="ciudadano-email">Nombre de usuario</label>
                                <input type="text" class="form-control" id="ciudadano-email" name="email"
                                    placeholder="Ingrese su nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="ciudadano-password">Contraseña</label>
                                <input type="password" class="form-control" id="ciudadano-password" name="password"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    {{-- Login Administrador --}}
      <section>
        <a class="col-12" href="#collapseForm" data-toggle="collapse" class="btn btn-link">
            <button type="button" class="btn btn-primary">Usuarios administradores</button>
        </a>
        <div class="row justify-content-center collapse" id="collapseForm">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Inicio de sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" name="email"
                                    placeholder="Ingrese su nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Contraseña</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    placeholder="Ingrese su contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        {{-- Regisro --}}
        <section>
          <div class="row registro">
              <a class="col-12" href="{{route('register')}}"><label for="">¿No estás registrado? Regístrate</label></a>
            </div>
        </section> 
  </div>
  </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
