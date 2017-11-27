@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro nuevo usuario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                <fieldset>
                    <legend align="right">Datos Personales</legend>

 <!-- Usuario -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre de Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <!-- Nombre -->
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 <!-- Apellidos -->
                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                            <label for="apellidos" class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('poblacion') ? ' has-error' : '' }}">
                            <label for="poblacion" class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">                           
                                <select name="gender" id="gender" class="form-control" value="{{ old('gender') }}" required autofocus>
                                    <option value="" selected="selected"></option>
                                    <option value="hombre">Hombre</option>
                                    <option value="mujer">Mujer</option>
                                </select>
                            </div>
                        </div>
                </fieldset>

 <!-- Teléfono -->
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <!-- Código Postal -->
                        <div class="form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                            <label for="cp" class="col-md-4 control-label">Código Postal</label>

                            <div class="col-md-6">
                                <input id="cp" type="text" class="form-control" name="cp" value="{{ old('cp') }}" required autofocus>

                                @if ($errors->has('cp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <!-- Población -->
                        <div class="form-group{{ $errors->has('poblacion') ? ' has-error' : '' }}">
                            <label for="poblacion" class="col-md-4 control-label">Población</label>

                            <div class="col-md-6">
                                <input id="poblacion" type="text" class="form-control" name="poblacion" value="{{ old('poblacion') }}" required autofocus>

                                @if ($errors->has('poblacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poblacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <!-- Provincia -->
                        <div class="form-group{{ $errors->has('poblacion') ? ' has-error' : '' }}">
                            <label for="poblacion" class="col-md-4 control-label">Provincia</label>

                            <div class="col-md-6">
                                    <select name="provincia" class="form-control">
                                        <option value="">- selecciona -</option>
                                        <option value="15">A coruña</option>
                                        <option value="1">Álava</option>
                                        <option value="2">Albacete</option>
                                        <option value="3">Alicante</option>
                                        <option value="4">Almería</option>
                                        <option value="33">Asturias</option>
                                        <option value="5">Ávila</option>
                                        <option value="6">Badajoz</option>
                                        <option value="7">Baleares</option>
                                        <option value="8">Barcelona</option>
                                        <option value="9">Burgos</option>
                                        <option value="10">Cáceres</option>
                                        <option value="11">Cádiz</option>
                                        <option value="39">Cantabria</option>
                                        <option value="12">Castellón</option>
                                        <option value="51">Ceuta</option>
                                        <option value="13">Ciudad Real</option>
                                        <option value="14">Córdoba</option>
                                        <option value="16">Cuenca</option>
                                        <option value="99">Extranjero</option>
                                        <option value="17">Girona</option>
                                        <option value="18">Granada</option>
                                        <option value="19">Guadalajara</option>
                                        <option value="20">Guipúzcoa</option>
                                        <option value="21">Huelva</option>
                                        <option value="22">Huesca</option>
                                        <option value="23">Jaén</option>
                                        <option value="26">La rioja</option>
                                        <option value="35">Las palmas</option>
                                        <option value="24">León</option>
                                        <option value="25">Lleida</option>
                                        <option value="27">Lugo</option>
                                        <option value="28">Madrid</option>
                                        <option value="29">Málaga</option>
                                        <option value="52">Melilla</option>
                                        <option value="30" selected>Murcia</option>
                                        <option value="31">Navarra</option>
                                        <option value="32">Ourense</option>
                                        <option value="34">Palencia</option>
                                        <option value="36">Pontevedra</option>
                                        <option value="37">Salamanca</option>
                                        <option value="38">Santa cruz de tenerife</option>
                                        <option value="40">Segovia</option>
                                        <option value="41">Sevilla</option>
                                        <option value="42">Soria</option>
                                        <option value="43">Tarragona</option>
                                        <option value="44">Teruel</option>
                                        <option value="45">Toledo</option>
                                        <option value="46">Valencia</option>
                                        <option value="47">Valladolid</option>
                                        <option value="48">Vizcaya</option>
                                        <option value="49">Zamora</option>
                                        <option value="50">Zaragoza</option>
                                    </select>
                            </div>
                        </div>






                        <div class="form-group">
                            <label for="club" class="col-md-4 control-label">Club / Asociación</label>

                            <div class="col-md-6">
                                <input id="club" type="text" class="form-control" name="club" value="{{ old('club') }}" autofocus>
                            </div>
                        </div>



                <fieldset>
                    <legend align="right">Acceso a la web</legend>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Dirección de E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Repite Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                </fieldset>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Realizar Registro
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection