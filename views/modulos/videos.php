<section id="videos" class="container_video py-5">
    <!------------------------------seccion videos--------------------------------------->

    <div class="container text-center wow animate__ animate__fadeInUp  animated" data-wow-duration="3s"
        style="visibility: visible; animation-duration: 3s; animation-name: fadeInUp;">
        <div class="row">
            <style>
                .tu{
                  color: black;
                 margin-top: 30px;
                  transition: all 2ms;
                }
                .tu:hover{
                    cursor: pointer;
                    text-decoration: none;
                    color: brown;
                }
            </style>
            <div class=" container_video col-md-6">
                <a style="font-size: 20px;" href="#" class="tu">OUTPLACEMENT EL MEJOR EMPLEO EN EL MENOR TIEMPO POSIBLE</a>
                <img src="views/images/ouplacemen.png" class="img-fluid">
                <a href="#elmejorempleo"><img src="views/images/play-icon.png" class="play-btn" data-toggle="modal"
                        data-target="#play-video-1"></a>
            </div>
            <div class="col-md-6">
                <a style="font-size: 20px;"href="#"class="tu">COACHING OPTIMIZA LA BÚSQUEDA DE EMPLEO Y DESARROLLA HABILIDADES BLANDAS
            </a>
                <img src="views/images/coaching.png" class="img-fluid">
                <a href="#coaching"><img src="views/images/play-icon.png" class="play-btn" data-toggle="modal"
                        data-target="#play-video-2"></a>
                
            </div>
        </div>
    </div>
    <div class="modal fade" id="play-video-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="" id="closeSimple">x</a>
                    <video id="videoContainer " width="100%" controls="controls"
                        src="views/src/OUTPLACEMENT.mp4"></video>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="play-video-2">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="" id="closeSimple">x</a>
                    <video id="videoContainer " src="views/src/COACHING.mp4" width="100%" controls="controls">
                    </video>
                </div>
            </div>
        </div>
    </div>

</section>
<!------------------------------fin seccion videos--------------------------------------->

<div id="modal__video__outplacement" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REQUERIMOS TUS DATOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/MailPersona.php" class="ajaxpersona" method="POST">
                    <h2 class="text-center title-follow p-4 title__contactos">CONTACTO PERSONAS</h2>
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="form-group p-1 ">
                                <input type="text" class="form-control" id="nombrespersona" name="nombrespersona"
                                    placeholder="NOMBRES" required>
                            </div>
                            <div class="form-group p-1">
                                <input type="text" class="form-control" id="apellidospersona" name="apellidospersona"
                                    placeholder="APELLIDOS" required>
                            </div>
                            <div class="form-group p-1 ">
                                <select class="form-control" id="cargopersona" name="cargopersona" required>
                                    <option selected disabled value="">CARGO</option>
                                    <option>Propietario</option>
                                    <option>Director</option>
                                    <option>Gerente</option>
                                    <option>Sub gerente</option>
                                    <option>Jefe</option>
                                    <option>Profesional</option>
                                    <option>Técnico</option>
                                    <option>Consultor</option>
                                    <option>Estudiante</option>
                                </select>
                            </div>
                            <div class="form-group p-1">
                                <input type="email" class="form-control" id="emailpersona" name="emailpersona"
                                    placeholder="EMAIL" required>
                            </div>
                            <div class="form-group p-1">
                                <input type="text" class="form-control" id="paispersona" name="paispersona"
                                    placeholder="PAÍS" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group p-1">
                                <input type="text" class="form-control" id="ciudadpersona" name="ciudadpersona"
                                    placeholder="CIUDAD" required>
                            </div>
                            <div class="form-group p-1">
                                <input type="tel" class="form-control" id="telefonopersona" name="telefonopersona"
                                    placeholder="TELÉFONO" required>
                            </div>
                            <div class="form-group p-1">
                                <select class="form-control" id="trabajo_actual_persona" name="trabajo_actual_persona"
                                    required>
                                    <option selected disabled value="">¿ACTUALMENTE ESTAS TRABAJANDO?</option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group  p-1">
                                <select class="form-control" id="servicio_requerido" name="servicio_requerido" required>
                                    <option selected disabled value="">¿QUÉ SERVICIOS REQUIERES?</option>
                                    <option>Outplacement para personas naturales - Entrenamiento Completo</option>
                                    <option>Talleres de Desarrollo de Habilidades Blandas</option>
                                    <option>Curriculum de Gran Impacto</option>
                                    <option>Mejora tu Autoconocimiento en el Campo Laboral</option>
                                    <option>Entrenamiento para tu Entrevista Laboral Exitosa</option>
                                    <option>Carta de Presentación</option>
                                    <option>Linkedin - Optimización</option>
                                    <option>Coaching para Desarrollo de Habilidades Blandas</option>
                                    <option>Coaching Ejecutivo</option>
                                    <option>Otro tipo de Coaching</option>
                                </select>
                            </div>

                            <div class="form-group p-1">
                                <select class="form-control" id="salarioPersona" name="salarioPersona"
                                    aria-invalid="false" required>
                                    <option selected disabled value="">¿CUÁL ES TU RANGO SALARIAL?</option>
                                    <option>De $. 0 - $. 1 000></option>
                                    <option>De $. 1 000 - $. 2 000</option>
                                    <option>De $. 2 000 - $. 3 000</option>
                                    <option>De $. 3 000 - $. 5 000</option>
                                    <option>De $. 5 000 - $. 8 000</option>
                                    <option>Más de $. 8 000</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group p-1">
                        <textarea type="text" class="form-control" rows="5" id="mensajePersona" name="mensajePersona"
                            minlength="10" placeholder="ESCRIBA SU CONSULTA" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" id="Contactopersona" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" id="spinnerPersona" role="status"
                                aria-hidden="true"
                                style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                            </span>
                            Enviar Consulta
                        </button>
                    </div>
                    <div class="text-center p-3">
                        <h6 style="color:grey">Al Hacer clic en enviar, Usted manifiesta su consentimiento para que
                            Corporación IBGROUP realice el tratamiento de sus datos personales,conforme
                            <a href="https://iboutplacement.com/Terminos_y_condiciones.pdf" target="blank"
                                style="color:#9a2442;">
                                Condiciones y Términos detallados en la sección Política de Tratamiento de Datos
                                Personales.</a>
                        </h6>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div id="modal__video__coaching" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REQUERIMOS TUS DATOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/MailEmpresa.php" class="ajaxempresa" method="POST">
                    <h2 class="text-center title-follow p-4 title__contactos">CONTACTO EMPRESAS</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombre_apellido_empresa"
                                    name="nombre_apellido_empresa" placeholder="NOMBRES Y APELLIDOS" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="celularempresa" name="celularempresa"
                                    placeholder="CELULAR" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nombreempresa" name="nombreempresa"
                                    placeholder="EMPRESA" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="rucempresa" name="rucempresa"
                                    placeholder="RUC" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="nivel_servicio" name="nivel_servicio">
                                    <option selected disabled value="">NIVEL DEL PERSONAL OBJETO DEL SERVICIO
                                    </option>
                                    <option>Outplacement Empresas</option>
                                    <option>Headhunting Ejecutivo</option>
                                    <option>Headhunting de Profesionales especializados</option>
                                    <option>Seleccion de Personal</option>
                                    <option>Evaluacion de Personal</option>
                                    <option>Coaching para Ejecutivos</option>
                                    <option>Coaching para Equipos</option>
                                    <option>Formacion o Capacitación</option>
                                    <option>Consultoria en Gestion del Talento</option>
                                    <option>Outsourcing o Tercerización</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="tel" class="form-control" id="telefonoempresa" name="telefonoempresa"
                                    placeholder="TELÉFONO FIJO" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="emailempresa" name="emailempresa"
                                    placeholder="EMAIL" required>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="rubroempresa" name="rubroempresa">
                                    <option selected disabled value="">RUBRO DE EMPRESA</option>
                                    <option>Bienes de consumo</option>
                                    <option>Telecomunicaciones</option>
                                    <option>Informático</option>
                                    <option>Banca y Finanzas</option>
                                    <option>Comercio y Retail</option>
                                    <option>Energía Eléctrica</option>
                                    <option>Electrónica</option>
                                    <option>Servicios de Salud</option>
                                    <option>Servicios Generales</option>
                                    <option>Esparcimiento y Entretenimiento</option>
                                    <option>Industrial y Manufactura</option>
                                    <option>Petroleo y Gas</option>
                                    <option>Petroquímica</option>
                                    <option>Agroindustria</option>
                                    <option>Pesca</option>
                                    <option>Textil Ropa y Calzado</option>
                                    <option>Turismo</option>
                                    <option>Bebidas y Licores</option>
                                    <option>Alimentos</option>
                                    <option>Avicola y Ganadería</option>
                                    <option>Ingeniería y Construcción</option>
                                    <option>Máquinas y Equipos</option>
                                    <option>Metalmecánica</option>
                                    <option>Medios</option>
                                    <option>Minería</option>
                                    <option>Sidelúrgico y Metalúrgico</option>
                                    <option>Transporte y Logística</option>
                                    <option>Educación</option>
                                    <option>Celulosa y Papel</option>
                                    <option>Cemento</option>
                                    <option>Automotriz y Autopartes</option>
                                    <option>Laboratorios, Químico, Farmacéutico</option>
                                    <option>Confecciones</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="cargoempresa" name="cargoempresa"
                                    placeholder="CARGO" required>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="nivel_personal_servicio_empresa"
                                    name="nivel_personal_servicio_empresa">
                                    <option selected disabled value="">NIVEL DEL PERSONAL OBJETO DEL SERVICIO
                                    </option>
                                    <option>Personal de base</option>
                                    <option>Mando medios</option>
                                    <option>Gerentes o Directivos</option>
                                    <option>Profesional altamente especializado</option>
                                    <option>Otros</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" rows="5" id="mensajeempresa" name="mensajeempresa"
                            minlength="10" placeholder="ESCRIBA SU CONSULTA" required></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" id="contactoempresa" class="btn btn-primary">
                            <span class="spinner-border spinner-border-sm" id="spinnerEmpresa" role="status"
                                aria-hidden="true"
                                style="width: 1.4rem;height: 1.4rem;margin-right: 8px;display: none;">
                            </span>
                            Enviar Consulta
                        </button>
                    </div>
                    <div class="text-center p-3">
                        <h6 style="color:grey">Al Hacer clic en enviar, Usted manifiesta su consentimiento para que
                            Corporación IBGROUP realice el tratamiento de sus datos personales,conforme
                            <a href="views/pdf/Terminos_y_condiciones.pdf" target="blank" style="color:#9a2442;">
                                Condiciones y Términos detallados en la sección Política de Tratamiento de Datos
                                Personales.</a>
                        </h6>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>