<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Ciudadano</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body, html {
          height: 100%;
        }
        /* Estilo para los mensajes de error */
        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
        
        /* Estilo para el texto del mensaje de error */
        .alert-danger ul {
            list-style-type: square;
            margin-left: 20px;
        }
        
        /* Estilo para cada ítem de la lista de errores */
        .alert-danger ul li {
            margin-bottom: 5px;
        }
        
        /* Estilo para resaltar el input con error */
        .has-error input,
        .has-error select,
        .has-error textarea {
            border-color: #f5c6cb;
            background-color: #f8d7da;
        }
        input{
            margin: 5px;
        }
        #mediosTecnologicosList{
            min-height: 100px; 
            display: none; 
        }
        div{
            margin-bottom: 5px;
        }
      </style>
</head>
<body>
    <form action="{{route('register.user')}}" method="post">
        @csrf
        
        <div class="container">
            <div class="col-7 row d-flex text-center align-items-center container-full-height d-flex justify-content-center align-items-center container-full-height">
                <h1>Registro</h1>
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height d-flex justify-content-center align-items-center container-full-height">
                {{-- Nombre --}}
                <div    class="col-7">
                    <label for="">1. Nombres completos *</label>
                </div>
                <div    class="col-7"><input type="text" id="nombreCiudadano" name="nombreCiudadano" class="form-control @error('nombreCiudadano') is-invalid @enderror" value="{{ old('nombreCiudadano') }}">
                    @error('nombreCiudadano')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>      
                {{-- Apellido --}}
                <div    class="col-7">
                    <label for="">2. Apellidos *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="apellidoCiudadano" name="apellidoCiudadano" class="form-control @error('apellidoCiudadano') is-invalid @enderror" value="{{ old('apellidoCiudadano') }}">
                    @error('apellidoCiudadano')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
            </div>

            <div class="row d-flex justify-content-center align-items-center container-full-height">
                {{-- Email --}}
                <div    class="col-7">
                    <label for="">3. Correo Electrónico *</label>
                </div>
                <div    class="col-7">
                    <input type="email" id="emailCiudadano" name="emailCiudadano" class="form-control @error('emailCiudadano') is-invalid @enderror" value="{{ old('emailCiudadano') }}">
                    @error('emailCiudadano')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Tipo de Documento --}}
                <div    class="col-7">
                    <label for="">4. Tipo de documento *</label>
                </div>
                <div    class="col-7">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tipoDocumento" value="Cédula de Ciudadanía">
                        <label class="form-check-label" for="">Cédula de Ciudadanía</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="tipoDocumento" value="Tarjeta de identidad">
                        <label class="form-check-label" for="">Tarjeta de identidad</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="tipoDocumento" value="Cédula de Extranjería">
                        <label class="form-check-label" for="">Cédula de Extranjería</label>
                    </div>
                    @error('tipoDocumento')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                {{-- Documento --}}
                <div    class="col-7">
                    <label for="">5. Documento *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="documento" name="documento" class="form-control @error('documento') is-invalid @enderror" value="{{ old('documento') }}">
                    @error('documento')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Etnia --}}
                <div    class="col-7">
                    <label for="">6. Etnia *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="etnia" name="etnia" class="form-control @error('etnia') is-invalid @enderror" value="{{ old('etnia') }}">
                    @error('etnia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                {{-- Discapacidad --}}
                <div    class="col-7">
                    <label for="">7. Condición de Discapacidad *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="discapacidad" name="discapacidad" class="form-control @error('discapacidad') is-invalid @enderror" value="{{ old('discapacidad') }}">
                    @error('discapacidad')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Estrato --}}
                <div    class="col-7">
                    <label for="">8. Estrato *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="estrato" name="estrato" class="form-control @error('estrato') is-invalid @enderror" value="{{ old('estrato') }}">
                    @error('estrato')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                {{-- Nivel Educativo --}}
                <div    class="col-7">
                    <label for="">9. Último nivel educativo alcanzado *</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="nivelEducativo" name="nivelEducativo" class="form-control @error('nivelEducativo') is-invalid @enderror" value="{{ old('nivelEducativo') }}">
                    @error('nivelEducativo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- Dispositivos Tecnológicos --}}
                <div    class="col-7">
                    <label for="">10. ¿Cuenta con acceso a dispositivos tecnológicos? *</label>
                </div>
                <div    class="col-7">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="dispositivosTecnologicos" value="1">
                        <label class="form-check-label" for="">Sí</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="dispositivosTecnologicos" value="0">
                        <label class="form-check-label" for="">No</label>
                    </div>
                    @error('dispositivosTecnologicos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-7 form-check" id="mediosTecnologicosList">
                    <div class="">
                        <label for="">Si, la respuesta 10 fue afirmativa ¿cuál? *</label>
                    </div>
                    <div class=" ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediosTecnologicos" value="T.Movil" id="">
                            <label class="form-check-label" for="">T.Movil</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediosTecnologicos" value="Computador" id="">
                            <label class="form-check-label" for="">Computador</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediosTecnologicos" value="Tablet" id="">
                            <label class="form-check-label" for="">Tablet</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mediosTecnologicos" value="other" id="radioOtro">
                            <label class="form-check-label" for="">Otro, ¿cuál?</label>
                            <input type="text" class="form-control" name="dispositivoOtro" id="dispositivoOtro" placeholder="Cuál?" style="display: none;">
                        </div>
                        @error('mediosTecnologicos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">11. Sexo</label>
                </div>
                <div    class="col-7">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="Hombre">
                        <label class="form-check-label" for="">Hombre</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sexo" value="Mujer">
                        <label class="form-check-label" for="">Mujer</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sexo" value="Intersexual">
                        <label class="form-check-label" for="">Intersexual</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sexo" value="Indefinido">
                        <label class="form-check-label" for="">Indefinido</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="sexo" value="Prefiere no decir">
                        <label class="form-check-label" for="">Prefiere no decir</label>
                    </div>
                    @error('sexo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">12. Fecha Nacimiento</label>
                </div>
                <div class="col-7">
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control @error('fechaNacimiento') is-invalid @enderror" value="{{ old('fechaNacimiento') }}">
                    @error('fechaNacimiento')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                {{-- Conectividad internet --}}
                <div    class="col-7">
                    <label for="">13. ¿Cuenta con conectividad a internet?</label>
                </div>
                <div    class="col-7">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conectividadInternet" value="1" @if(old('conectividadInternet') == '1') checked @endif>
                        <label class="form-check-label" for="">Sí</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conectividadInternet" value="0" @if(old('conectividadInternet') == '0') checked @endif>
                        <label class="form-check-label" for="">No</label>
                    </div>
                    @error('conectividadInternet')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                                
                <div class="col-7">
                    <label for="">14. Contraseña</label>
                </div>
                <div class="col-7">
                    <div class="input-group">
                        <input type="password" id="contrasenia" name="contrasenia" class="form-control @error('contrasenia') is-invalid @enderror">
                        <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('contrasenia')">Mostrar</button>
                    </div>
                    @error('contrasenia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-7">
                    <label for="">Confirmar Contraseña</label>
                </div>
                <div class="col-7">
                    <div class="input-group">
                        <input type="password" id="confirmarContrasenia" name="confirmarContrasenia" class="form-control @error('confirmarContrasenia') is-invalid @enderror">
                        <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('confirmarContrasenia')">Mostrar</button>
                    </div>
                    @error('confirmarContrasenia')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">15. Teléfono</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="telefono" name="telefono" class="form-control ">
                    
                </div>
                <div    class="col-7">
                    <label for="">16. Teléfono fijo</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="telefonoFijo" name="telefonoFijo" class="form-control">
                    
                </div>
                
                
                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">17. Municipio</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="municipio" name="municipio" class="form-control @error('municipio') is-invalid @enderror" value="{{ old('municipio') }}">
                    @error('municipio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div    class="col-7"></div>
                <div    class="col-7"></div>                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">18. Dirección</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="direccion" name="direccion" class="form-control">
                    
                </div>
                <div    class="col-7"></div>
                <div    class="col-7"></div>                
            </div>
            <div class="row d-flex justify-content-center align-items-center container-full-height">
                <div    class="col-7">
                    <label for="">19. Barrio</label>
                </div>
                <div    class="col-7">
                    <input type="text" id="barrio" name="barrio" class="form-control @error('barrio') is-invalid @enderror" value="{{ old('barrio') }}">
                    @error('barrio')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>                
                {{-- Boton registrarse --}}
                <div    class="col-7">
                    <a href=""><button id="botonRegistrar">Registrarse</button></a>
                </div>
                <div    class="col-7"></div>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
        // Manejar el cambio en todos los radio buttons
        $('input[name="mediosTecnologicos"]').on('change', function () {
            if ($(this).val() === 'other') {
                $('#dispositivoOtro').fadeIn();
            } else {
                $('#dispositivoOtro').fadeOut();
            }
        });
    });
    </script>
    <script>
        $(document).ready(function () {
        // Manejar el cambio en todos los radio buttons
        $('input[name="dispositivosTecnologicos"]').on('change', function () {
            if ($(this).val() === '1') {
                $('#mediosTecnologicosList').fadeIn();
            } else {
                $('#mediosTecnologicosList').fadeOut();
            }
        });
    });
    </script>    
    <script>
        function togglePasswordVisibility(inputId) {
            var input = document.getElementById(inputId);
            var toggleButton = input.parentElement.querySelector('button');
            
            if (input.type === "password") {
                input.type = "text";
                toggleButton.textContent = "Ocultar";
            } else {
                input.type = "password";
                toggleButton.textContent = "Mostrar";
            }
        }
    </script>
    
</body>
</html>