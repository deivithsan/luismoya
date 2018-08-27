@extends('layouts.principal')
@section('contenido')

    <div class="row">
            <br>
            <div class="col-lg-8">
                <div class="col-lg-12">
                    <div class="card">
                        <section id="hv">
                        <div class="card-title text-center">
                            <h1>Hoja de vida </h1>
                        </div>
                        <div class="recent-comment text-dark">
                            <br>
                            <h2 class="text-center font-italic">PERFIL PROFESIONAL</h2>
                            <br>
                            <p class="text-dark">Abogado titulado y Contador Públicos, especializado en Derecho Administrativo y
                                docencia en educación superior, vinculado a la administración pública con más de
                                20 años de experiencia en áreas de consultoría y asesoría.</p>
                            <p class="text-dark"> La tecnología en Administración financiero y de sistemas, permitió la combinación
                                del desarrollo software orientado hacia la administración pública en temas legales y
                                financieros.</p>
                            <p class="text-dark">Su mayor empeño es liderar procesos de calidad, eficiencia y economía que
                                permitan sembrar las bases de una nueva sociedad.</p>
                            <p class="text-dark">Su incursión en el mundo de los libros parte de la necesidad de escribir sobre los
                                temas de actualidad y de dejar una propuesta para la toma de decisiones
                                administrativas tanto locales como nacionales para mejorar la calidad de vida de los
                                habitantes del territorio nacional.</p>
                            <p class="text-dark">Su estudio comenzó con la formación técnica en administración, bibliotecología y
                                Archivo y Criminalística y balística, que le abrieron el camino a las carreras
                                profesionales y especializaciones complementada con los recientes diplomados en
                                Contratación pública, gerencia pública y gestión de calidad.</p>
                            <p class="text-dark">Su experiencia y profesionalismo le ha permitido crear múltiples empresas públicas
                                y privadas y alcanzar logros de reconocimiento nacional, premiados por el
                                Departamento Nacional de Planeación.</p>
                            <p class="text-dark">Actualmente, se desempeña como independiente y abogado litigante y asesor de
                                entidades públicas y privadas.</p>
                            <br>
                            <h2 class="text-center font-italic">FORMACIÓN ACADEMICA</h2>
                            <br>
                            <h3 class="text-left">UNIVERSITARIOS</h3>
                            <br>
                            <ul>
                                <li>Universidad Libre de Colombia</li>
                                <li>Especialización en Derecho administrativo</li>
                                <li>Bogotá – 2012</li>
                                <br>
                                <li>Universidad Piloto de Colombia</li>
                                <li>Contador Público</li>
                                <li>Girardot - 2003</li>
                                <br>
                                <li>Universidad de Medellín</li>
                                <li>Contratación Estatal con énfasis en Supervisión e interventoría</li>
                                <li>Medellín -2014</li>
                                <br>
                                <li>Servicios de Nacional de Enseñanza SENA</li>
                                <li>Especialización en orientación de Procesos de Formación</li>
                                <li>Girardot - 2012</li>
                                <br>
                                <li>Universidad de Cundinamarca</li>
                                <li>Licenciatura en Matemática y Física</li>
                                <li> Fusagasugá - 1997</li>
                                <br>
                            </ul>
                            <br>
                            <h3 class="text-left">DIPLOMADOS</h3>
                            <br>
                            <ul>
                                <li>ICONTEC</li>
                                <li>Gestor Sistemas de Gestión de Calidad ISO</li>
                                <li>Medellín - 2014</li>
                                <br>
                                <li>ICONTEC</li>
                                <li>Auditor Interno en sistemas de Gestión de Calidad ISO</li>
                                <li>Medellín - 2015</li>
                                <br>
                                <li>UNIVERSIDAD ESAP</li>
                                <li>Gerencia Pública y Desarrollo Regional</li>
                                <li>Girardot - 2004</li>
                                <br>
                            </ul>
                            <br>
                            <h3 class="text-left">ESTUDIOS TECNICOS Y TECNOLOGICOS</h3>
                            <br>
                            <ul>
                                <li>Técnico en Criminalística y Balística</li>
                                <li>Unidad de Policía Técnica Judicial PTJ</li>
                                <li>Girardot 1996</li>
                                <br>
                                <li>Técnico en Bibliotecología y Archivo</li>
                                <li>COLCULTURA.</li>
                                <li>Bogotá 1992</li>
                                <br>
                                <li>Tecnólogo en Administración Financiera</li>
                                <li>INESPRO</li>
                                <li>Bogotá 1990</li>
                                <br>
                            </ul>
                            <h2 class="text-center font-italic">EXPERIENCIA LABORAL</h2>
                            <br>
                            <h4>Algunas entidades donde ha laborado</h4>
                            <br>
                            <ul>
                                <li>Asesor Gobernación de San Andrés</li>
                                <li>Asesor Gobernación Antioquia</li>
                                <li>Asesor SENA – Girardot</li>
                                <li>Asesor SENA – Fusagasugá</li>
                                <li>Asesor Alcaldía de Girardot</li>
                                <li>Asesor Alcaldía de Providencia y Santa Catalina Islas</li>
                                <li>Asesor Alcaldía de Ricaurte, Cundinamarca</li>
                                <li>Asesor Alcaldía de Viotá, Cundinamarca</li>
                                <li>Asesor Alcaldía de Anolaima, Cundinamarca</li>
                                <li>Asesor Alcaldía Municipio de Agua de Dios.</li>
                                <li>Asesor Alcaldía Municipio de Melgar, Tolima</li>
                                <li>Jefe de Presupuesto de INDEPORTES Antioquia Medellín.</li>
                                <li>Secretario de Gobierno de Agua de Dios</li>
                                <li>Inspector de Policía de Agua de Dios.</li>
                                <br>
                            </ul>
                            <h2 class="text-center font-italic">EMPLEADO EMPRESA PRIVADA</h2>
                            <br>
                            <ul>
                                <li>CIUDAD REPTILIA – Melgar</li>
                                <li>TROPICAL FAUNA LTDA – Melgar</li>
                                <li>ABOGADOS ASOCIADOS – Bogotá</li>
                                <li>Otras empresas.</li>
                                <br>
                            </ul>
                            <center><a href="{{ asset('files/hv.pdf') }}" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5">Ver La Hoja de Vida</a></center>
                        </div>
                        </section>
                        <section id="cundinamarca">
                            <hr>
                        <div class="card-title text-center">
                            <h1>Cundinamarca</h1>
                        </div>
                        <div class="recent-comment">
                            <p>Cundinamarca</p>
                        </div>
                        </section>
                        <section id="logros">
                            <hr>
                        <div class="card-title text-center">
                            <h1>Logros</h1>
                        </div>
                            <br>
                        <div class="recent-comment">
                            <h2 class="text-center font-italic">LOGROS PERSONALES</h2>
                            <br>
                            <ul>
                                <li><b>Autor del Libro</b></li>
                                <li>EL RETO DE SER ELEGIDO EN CARGOS DE ELECCIÓN POPULAR, Primer Edición privada, 156 Pág. 2015</li>
                                <li>EL NUEVO ESTADO la Confianza, Edición privada 198 pág. 2018</li>
                                <br>
                                <li><b>Autor del Software</b></li>
                                <li>GALATEA: ERP sistema financiero para la administración pública</li>
                                <li>SIAP – SISTEMA INTEGRAL PARA LA ADMINISTRACION PUBLICA</li>
                                <li>SIEX - Sistema Integral de Expedientes Virtuales ver. www.siex.com.co</li>
                                <br>
                                <li><b>Reconocimiento Institucional</b></li>
                                <li>Premio al Municipio de Nilo 2006 – Reconocimiento por obtención de dos mil millones de pesos al Municipio Mejor esfuerzo fiscal de Cundinamarca.</li>
                                <br>
                            </ul>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="text-center">
                            <div class="card-two">
                                <h2>Contacto</h2>
                                <br>
                                <div class="contacts">
                                    <a href=""><i class="fa fa-facebook"></i></a>
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-envelope"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-title">
                            <h2>Noticias</h2>
                        </div>
                        <div class="recent-comment">
                            <div class="media no-border">
                                <div class="media-left">
                                    <a href="#"><img alt="..." src="{{ asset('img/principal/1.png') }}" class="media-object"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Luis Moya</h4>
                                    <p>Visita a Agua de Dios programada. </p>
                                    <div class="comment-date">Octubre 28, 2018</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="text-center">
                            <h3>Haz parte de nuestro proyecto!</h3>
                            <button class="btn btn-primary btn-rounded m-b-10 m-l-5">Registro</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-flat btn-addon btn-lg m-b-10 m-l-5">Descargar formulario de firmas</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop