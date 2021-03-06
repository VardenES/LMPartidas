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

 <!-- Fecha Nacimiento -->
                        <div class="form-group">
                          <label for="birthday" class="col-md-4 control-label">Fecha de nacimiento:</label>
                          <div class="col-md-6">
                            <input name="birthday" value="date.struct" type="hidden">
                                <select name="birthday_day" id="birthday_day" class="form-control-birthday" required autofocus>
                                    <option value="" selected="selected"></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="birthday_month" id="birthday_month" class="form-control-birthday" required autofocus>
                                    <option value="" selected="selected"></option>
                                    <option value="01">enero</option>
                                    <option value="02">febrero</option>
                                    <option value="03">marzo</option>
                                    <option value="04">abril</option>
                                    <option value="05">mayo</option>
                                    <option value="06">junio</option>
                                    <option value="07">julio</option>
                                    <option value="08">agosto</option>
                                    <option value="09">septiembre</option>
                                    <option value="10">octubre</option>
                                    <option value="11">noviembre</option>
                                    <option value="12">diciembre</option>
                                </select>
                                <select name="birthday_year" id="birthday_year" class="form-control-birthday" required autofocus>
                                    <option value="" selected="selected"></option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
                                </select>
                          </div>
                        </div>

 <!-- Género -->
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