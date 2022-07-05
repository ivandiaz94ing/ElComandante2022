    
<div class="container"> 
        <div class="modal fade" id="modalCRUDU">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Título del diálogo</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmHojaDeVidaU">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <img class="imglogo" src="../images/logoUpc.png">
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="tituloupc">UNIVERSIDAD POPULAR DEL CESAR</p>
                                            <p class="subtituloupc">FACULTAD DE CIENCIAS
                                                ADMINISTRATIVAS, CONTABLES Y
                                                ECONÓMICAS <br>CENTRO DE ESTUDIOS EMPRESARIALES</p>

                                            <p class="subtituloupc">ÁREA DE PRACTICAS
                                                EMPRESARIALES<br>HOJA DE VIDA
                                                PRÁCTICAS PROFESIONALES </p>
                                        </div>
                                        <div class="col-lg-2">
                                            <img class="imglogo" src="../images/logoCempre.png">
                                        </div>
                                    </div>
                                    <br><br>

                                    <input type="text" hidden="" id="cedulaX" name="cedulaX">
                                    <div class="form-group row">

                                        <label class="control-label col-md-3 ">Fecha</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="fechaX" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">Programa</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="programaX" name="programaX"
                                                required="required">
                                                <option value="">--Seleccione un programa--</option>
                                                <option value="ADMINISTRACIÓN DE EMPRESAS">ADMINISTRACIÓN DE EMPRESAS
                                                </option>
                                                <option value="CONTADURÍA PÚBLICA">CONTADURÍA PÚBLICA</option>
                                                <option value="ECONOMÍA ">ECONOMÍA</option>
                                                <option value="COMERCIO INTERNACIONAL">COMERCIO INTERNACIONAL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label for="">1-DATOS PERSONALES</label>
                                    <hr>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">PRIMER APELLIDO</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="primerapellidoX" name="primerapellidoX"
                                                type="text" placeholder="*Ingrese primer apellido"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="5"
                                                maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">SEGUNDO APELLIDO</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="segundoapellidoX" name="segundoapellidoX"
                                                type="text" placeholder="*Ingrese segundo apellido"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="5"
                                                maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">NOMBRES</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="nombresX" name="nombresX" type="text"
                                                placeholder="*Ingrese nombres" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}"
                                                required="required" minlength="3" maxlength="30"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">FECHA Y LUGAR DE NACIMIENTO</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="fechaNaciminetoX" name="fechaNaciminetoX"
                                                type="text" placeholder="*Fecha y luegar de nacimineto" minlength="15"
                                                maxlength="30" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">ESTADO CIVIL</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="estadoCivilX" name="estadoCivilX"
                                                required="required">
                                                <option value="">--Seleccione un estado civil--</option>
                                                <option value="Soltero/a">Soltero/a</option>
                                                <option value="Casado/a">Casado/a</option>
                                                <option value="Unión libre">Unión libre</option>
                                                <option value="Separado/a">Separado/a</option>
                                                <option value="Divorciado/a">Divorciado/a</option>
                                                <option value="Viudo/a">Viudo/a</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">DIRECCIÓN ACTUAL</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="direccionX" name="direccionX"
                                                placeholder="*Ingrese direccion" required="required" minlength="10"
                                                maxlength="60">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">TELÉFONO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="telefonoX" name="telefonoX"
                                                placeholder="*Ingrese teléfono" minlength="10" maxlength="10"
                                                pattern="[0-9]{1,10}" title="Solamente se admiten números"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">EPS ACTUAL - TRAER DOCUMENTO EN
                                            FISICO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="epsX" name="epsX"
                                                placeholder="*Ingrese EPS actual" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}"
                                                required="required" minlength="6" maxlength="30"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">CORREO ELECTRÓNICO</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="correoElectronicoX"
                                                name="correoElectronicoX" type="email"
                                                placeholder="*Ingrese correo electrónico" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">CIUDAD</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="ciudadX" name="ciudadX"
                                                placeholder="*Ingrese ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}"
                                                required="required" minlength="4" maxlength="20"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <label for="">2.- ESTUDIOS REALIZADOS</label>
                                    <label for="">NIVEL SECUNDARIO</label>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">INSTITUCIÓN</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="instituto_01X"
                                                name="instituto_01X" placeholder="*Ingrese institución "
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" required="required" minlength="15"
                                                maxlength="60" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">TÍTULO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="titulo_01X" name="titulo_01X"
                                                placeholder="*Ingrese titulo " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}"
                                                required="required" minlength="15" maxlength="60"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">FECHA</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="fecha_01X" name="fecha_01X" type="date"
                                                required="required">
                                        </div>
                                    </div>
                                    <label for="">NIVEL UNIVERSITARIO</label>
                                    <hr>

                                    <div class="form-group row">
                                        <label class="control-label col-md-3">INSTITUCIÓN</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="instituto_02X"
                                                name="instituto_02X" placeholder="*Ingrese institución "
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}" required="required" minlength="15"
                                                maxlength="60" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">TÍTULO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="titulo_02X" name="titulo_02X"
                                                placeholder="*Ingrese titulo " pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,60}"
                                                required="required" minlength="15" maxlength="60"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">FECHA</label>
                                        <div class="col-md-9">
                                            <input class="form-control" id="fecha_02X" name="fecha_02X" type="date"
                                                required="required">
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <br><br>
                                                <label class="control-label">INGLÉS </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Comprende al leer</label>
                                                <select class="form-control" id="ingles_01X" name="ingles_01X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label class="control-label">Comprende al escuchar</label>
                                                <select class="form-control" id="ingles_02X" name="ingles_02X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Habla</label>
                                                <select class="form-control" id="ingles_03X" name="ingles_03X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">Escribe </label>
                                                <select class="form-control" id="ingles_04X" name="ingles_04X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">ALEMÁN</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="aleman_01X" name="aleman_01X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="aleman_02X" name="aleman_02X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="aleman_03X" name="aleman_03X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="aleman_04X" name="aleman_04X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">FRANCÉS</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="frances_01X" name="frances_01X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="frances_02X" name="frances_02X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="frances_03X" name="frances_03X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="frances_04X" name="frances_04X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label class="control-label">OTROS</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="otros_01X" name="otros_01X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="otros_02X" name="otros_02X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="otros_03X" name="otros_03X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" id="otros_04X" name="otros_04X"
                                                    required="required">
                                                    <option value="">--Seleccione--</option>
                                                    <option value="E">Excelente</option>
                                                    <option value="B">Bueno</option>
                                                    <option value="R">Regular</option>
                                                    <option value="X">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="textoIdioma">(E)Excelente &nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        (B)Bueno &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                        (R)Regular &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                        (X)No</p>


                                    <label for="">3.- INVESTIGACIÓN Y/O PROYECTOS REALIZADOS </label>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea id="apartado_03X" name="apartado_03X" class="form-control" rows="4"
                                            placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" minlength="500"
                                            maxlength="1000"></textarea>
                                    </div>
                                    <br>
                                    <label for="">4.- CONOCIMIENTO Y/O PRÁCTICA DE INFORMÁTICA QUE POSEE</label>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea id="apartado_04X" name="apartado_04X" class="form-control" rows="6"
                                            placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" minlength="500"
                                            maxlength="1000"></textarea>
                                    </div>
                                    <br>
                                    <label for="">5.- SEMINARIOS Y CURSOS ASISTIDOS (TEMA - INSTITUCIÓN - FECHA)</label>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea id="apartado_05X" name="apartado_05X" class="form-control" rows="6"
                                            placeholder="Ingrese una descripción, máxima de 1000 caracteres"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" minlength="500"
                                            maxlength="1000"></textarea>

                                    </div>

                                    <br>
                                    <label for="">6.- DISTINCIONES Y HONORES RECIBIDOS (DISTINCIÓN - INSTITUCIÓN -
                                        FECHA)</label>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea id="apartado_06X" name="apartado_06X" class="form-control" rows="4"
                                            placeholder="Ingrese una descripción,máxima de 1000 caracteres"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" minlength="500"
                                            maxlength="1000"></textarea>
                                    </div>

                                    <br>
                                    <label for="">7.- EXPERIENCIA LABORAL</label>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">ENTIDAD </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="entidad_01X" name="entidad_01X"
                                                placeholder="Ingrese entidad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}"
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">CARGO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="cargo_01X" name="cargo_01X"
                                                placeholder="Ingrese cargo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}"
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">FUNCIONES DESEMPEÑADAS</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="funcion_01X" name="funcion_01X"
                                                placeholder="Ingrese funciones desempeñadas"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,50}" minlength="10" maxlength="50"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">DURACIÓN - FECHA</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="duracion_01X"
                                                name="duracion_01X" placeholder="Ingrese duración y fecha"
                                                minlength="15" maxlength="30">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">ENTIDAD </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="entidad_02X" name="entidad_02X"
                                                placeholder="Ingrese entidad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}"
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">CARGO</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="cargo_02X" name="cargo_02X"
                                                placeholder="Ingrese cargo" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,30}"
                                                minlength="10" maxlength="30" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">FUNCIONES DESEMPEÑADAS</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="funcion_02X" name="funcion_02X"
                                                placeholder="Ingrese funciones desempeñadas"
                                                pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ]{1,50}" minlength="10" maxlength="50"
                                                title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-3">DURACIÓN - FECHA</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" id="duracion_02X"
                                                name="duracion_02X" placeholder="Ingrese duración y fecha"
                                                minlength="15" maxlength="30">
                                        </div>
                                    </div>

                                    <br>

                                    <label for="">8.- ÁREAS DE INTERÉS PARA EL DESARROLLO DE LA PRÁCTICA EN ORDEN DE
                                        PREFERENCIAS</label>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea id="apartado_08X" name="apartado_08X" class="form-control" rows="4"
                                            placeholder="Ingrese una descripción,máxima de 1000 caracteres"
                                            pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,1000}" minlength="500"
                                            maxlength="1000"></textarea>
                                    </div>
                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <button type="button" id="btnActualizar" class="btn btn-success"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

