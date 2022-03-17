@extends('welcome')
@section('contenido')

<div class="container-fluid" style="max-width: 940px;">
    <section class="header-especial">
        <p><img alt="Orientación para víctimas de Siniestros Viales - ORVI" class="img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/header.jpg"></p>
    </section>
    <section class="row intro">
        <div class="col-sm-5">
            <div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/WZYRgYeu42U?rel=0"></iframe></div>&nbsp;<div class="embed-responsive embed-responsive-16by9"><iframe allowfullscreen="" class="embed-responsive-item" src="https://www.youtube.com/embed/DajzSUeGgWE?rel=0"></iframe></div>
        </div>
        <div class="col-sm-7">
            <p><strong>ORVI</strong> es el <strong>Centro de Orientación para Víctimas por Siniestros Viales</strong> de <strong>Bogotá D.C</strong>, donde se informará y orientará a las víctimas por siniestros viales y sus familiares acerca de los procedimientos que pueden seguir en materia social, jurídica y psicológica tras un incidente de tránsito, con el fin de brindarles herramientas para adaptarse adecuadamente a sus nuevas condiciones en la vida.</p>
            <p>Se reconoce como víctima a toda persona que haya sufrido daño o afectación como consecuencia directa de un siniestro vial. El centro dispondrá de medios presenciales y virtuales para que las víctimas de siniestros viales y/o sus familiares puedan acceder al servicio. La persona que sea atendida contará con todas las garantías para un trato con enfoque de derecho, diferencial y de género.</p>
            <p>Su implementación y operación se enmarca en el <strong>Plan Distrital de Seguridad Vial 2017-2026 (Decreto 813 de 2017) y del Plan Distrital de Desarrollo 2020 - 2024 Un nuevo contrato social y ambiental para el siglo XXI (Acuerdo 761 de 2020).</strong></p>
        </div>
    </section>
    
    <div class="panel-group" id="accordion-orvi">
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading">
                <h4 class="panel-title"><a aria-expanded="true" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#enfoques-orientacion">ENFOQUES DE ORIENTACIÓN</a></h4>
            </div>
            <div aria-expanded="true" class="panel-collapse collapse" id="enfoques-orientacion" style="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-4"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/02-12-2020/orientacion-social.png"></div>
                        <div class="col-sm-8">
                            <h3 class="titulo">Orientación Social:</h3>
                            <p>La orientación social contará con la evaluación de las condiciones sociales de la víctima que hayan sido afectadas por consecuencia del siniestro vial, lo que permitirá brindarles información acerca de los programas sociales vigentes ofrecidos por el Distrito, en los que de manera voluntaria podrán inscribirse de acuerdo a sus intereses y necesidades propios, y condiciones de cada programa, obteniendo herramientas para adaptarse a sus nuevas condiciones de vida.</p>
                            <p><i>La orientación social tendrá un número de citas máximo por persona o por grupo familiar de: 3</i></p>
                        </div>
                    </div>
                    <div class="row pt-20">
                        <div class="col-sm-4"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/orientacion-juridica.png"></div>
                        <div class="col-sm-8">
                            <h3 class="titulo">Orientación Jurídica:</h3>
                            <p>En la orientación jurídica se brindará información y orientación en la preparación de documentos y procedimientos previos de cualquier trámite que requiera la víctima relacionado con la ocurrencia de un siniestro vial y las reclamaciones a que haya lugar, de carácter civil, penal, laboral, administrativo, reclamación de pólizas de seguro o cualquier otro tipo de instancia; ofreciendo la información necesaria para el inicio, trámite y posible consecución de los diferentes procesos a que exista lugar. Lo anterior con miras a garantizar que la víctima o sus beneficiarios cuenten con información oportuna, eficiente e idónea. Esta actividad se desarrollará a nivel de orientación y en ningún momento ejercerá una representación judicial.</p>
                            <p>La orientación jurídica tendrá un número de citas máximo por persona o por grupo familiar de: 5</p>
                            <p><strong>TÉRMINOS PARA ACCEDER A LA ORIENTACIÓN JURÍDICA:</strong><br>La orientación brindada a las víctimas debe cumplir estándares de oportunidad. Para lograr esto el orientador jurídico debe verificar que las acciones, reclamaciones y/o trámites a gestionar por la víctima sean oportunos en cuanto a sus términos legales de caducidad y prescripción. Consultas legales que estén caducadas o prescritas, no serán atendidas por los orientadores.</p>
                        </div>
                    </div>
                    <div class="row pt-20">
                        <div class="col-sm-4"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/orientacion-psicologica.png"></div>
                        <div class="col-sm-8">
                            <h3 class="titulo">Orientación Psicológica:</h3>
                            <p>Se realizará orientación psicológica primaria, con el fin de valorar el daño/afectación asociados al siniestro vial, para brindar recomendaciones con relación a las posibles afectaciones psicológicas por el siniestro vial y un posible tratamiento a seguir. Aunque el Centro no brindará un tratamiento psicológico, el/la profesional podrá recomendar al consultante realizarlo por medio de su régimen de salud o el servicio de salud especializado de su preferencia.</p>
                            <p>Se contempla también orientación enfocada en primeros auxilios psicológicos cuando haya lugar, con el fin de apoyar el restablecimiento y la funcionalidad a nivel conductual, emocional y cognitiva.</p>
                            <p><i>La orientación psicológica tendrá un número de citas máximo por persona de: 5 (también podrán plantearse otras modalidades de atención: grupal o familiar y lo recomendado por el profesional de orientación psicológica).</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#quienes-acceden">¿QUIÉNES PODRÁN ACCEDER A LOS SERVICIOS DE ORVI?</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="quienes-acceden" style="">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <p><strong>ORVI</strong> enfocará su atención en la víctima directa, su cónyuge o compañero (a) permanente, sus familiares en primer y segundo grado de consanguinidad (hijos/hijas, padres/madres, hermanos/hermanas), y primero civil (hijos/hijas adoptivos/as). Los menores de edad deberán estar acompañados de sus padres, madres o acudientes legalmente designados.</p>
                        </div>
                        <div class="col-sm-4"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/quienes.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading panel-heading-objetivos">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#alcance">ALCANCE DE ORVI</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="alcance">
                <div class="panel-body" style="background-color: #fff !important;">
                    <div class="row">
                        <!-- <div class="col-sm-4">
                           <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/123.png" class="img-center img-responsive" alt="">
                        </div> -->
                        <div class="col-sm-12">
                            <p><strong>ORVI</strong> no actúa como un ente de reacción inmediata al siniestro de tránsito, ni como un mecanismo de atención primaria en salud. En caso de emergencia, llama al 123.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading panel-heading-objetivos">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#jurisdiccion">JURISDICCIÓN Y COMPETENCIA DE LA ORIENTACIÓN</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="jurisdiccion">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <p><strong>ORVI</strong> prestará sus servicios a los residentes y víctimas de siniestros viales presentados en la ciudad de Bogotá, teniendo en cuenta el ámbito territorial de los trámites, con el fin de que estos puedan llegar a ser eficientes y efectivos.</p>
                        </div>
                        <div class="col-sm-3"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/jurisdiccion.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading panel-heading-objetivos">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#terminos">TÉRMINOS PARA ACCEDER A LAS ORIENTACIONES</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="terminos">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-3"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/terminos.png"></div>
                        <div class="col-sm-9">
                            <p>El Centro busca atender a la población más vulnerable y optimizar los recursos públicos. Por esto, la orientación podrá brindarse a víctimas de siniestros que hayan ocurrido desde el 2014 y que hayan sido registradas por medio del <strong>IPAT (Informe Policial de Accidentes de Tránsito)</strong> o cuya ocurrencia pueda ser comprobada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading panel-heading-objetivos">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#proceso">PROCESO</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="proceso">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-1.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Comunicación</h3>
                            <p>Se dispone de diferentes canales de comunicación para informar la existencia del centro a la ciudadanía.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-2.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Acogida e información</h3>
                            <p>Recibimiento a la víctima y recopilación de datos generales. Reconocer sus necesidades e informarle acerca de los servicios que presta el centro.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-3.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Orientación</h3>
                            <p>Orientación social, psicológica y/o juridica de acuerdo a las necesidades de la víctima.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-4.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Cierre</h3>
                            <p>Al culminar proceso de orientación en cada caso uno de los enfoques o ante desistimiento de la víctima.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-5.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Seguimiento</h3>
                            <p>Finalizado el proceso se consulta acerca de la satisfacción de la orientación y el resultado de los procesos.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1 col-sm-offset-1"><img alt="" class="img-center img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/canal-6.png"></div>
                        <div class="col-sm-10">
                            <h3 class="titulo" style="margin:0 !important">Archivo</h3>
                            <p>Se archiva el caso una vez se cuenta con la información de seguimiento o desistimiento de la víctima.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- collapseOfertaFormativa -->
        <div class='panel panel-primary panel-morado'>
            <div class='panel-heading panel-heading-objetivos' role='tab' id='headingOfertaFormativa'>
                <h4 class='panel-title'>
                    <a role='button' class="collapsed" data-toggle='collapse' data-parent='#accordion-orvi' href='#collapseOfertaFormativa' aria-expanded='false' aria-controls='collapseOfertaFormativa'>
                        OFERTA FORMATIVA
                    </a>
                </h4>
            </div>
            <div id='collapseOfertaFormativa' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOfertaFormativa'>
                <div class='panel-body' style="background-color: #fff !important;">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>La administración distrital hace apertura de una gran oferta formativa de charlas y talleres de sensibilización dirigidos a víctimas de siniestros viales, sus familias y a profesionales de diferentes áreas del conocimiento.</p>
                            <ul>
                                <li style="text-align: justify;"><strong>Charla:</strong> hace referencia a una modalidad de capacitación de exposición oral en la cual uno o varios especialistas imparten información sobre un tema particular. La característica principal de esta modalidad es que obedece principalmente a una explicación oral alrededor de un tema, por lo que puede comprenderse como una exposición magistral, en la que un especialista tiene el rol de capacitador y el público conoce y resuelve dudas sobre el tema tratado. </li>
                                <br>
                                <li style="text-align: justify;"><strong>Taller:</strong> Esta modalidad pretende que el público aprenda sobre un tema específico a través de recursos prácticos, aplicando los conocimientos adquiridos en la resolución de situaciones que conciernen al tema visto. La característica principal es que la explicación oral se acompaña de actividades prácticas que los participantes desarrollan.</li>
                                <br>
                            <p class="text-center"><strong>Correo: </strong> <a href="mailto:formacionorvi@movilidadbogota.gov.co">formacionorvi@movilidadbogota.gov.co</a></p>
                            <br>

                            </ul>
                        </div>
                    </div>
                    <div class='panel-group ' id='accordionOferta' role='tablist ' aria-multiselectable='true'>

                        <!-- collapseCharla -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='headingCharla'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordionOferta' href='#collapseCharla' aria-expanded='true' aria-controls='collapseCharla'>
                                        CHARLAS
                                    </a>
                                </h4>
                            </div>
                            <div id='collapseCharla' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCharla'>
                                <div class='panel-body'>

                                    <div class='panel-group ' id='accordion-charlas' role='tablist ' aria-multiselectable='true'>

                                        <!-- collapseESV -->
                                        <div class='panel panel-default'>
                                            <div class='panel-heading' role='tab' id='headingESV'>
                                                <h4 class='panel-title'>
                                                    <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseESV' aria-expanded='true' aria-controls='collapseESV'>
                                                        1. Educación para la Seguridad Vial
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id='collapseESV' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingESV'>
                                                <div class='panel-body' style="background-color: #fff !important;">

                                                    <div class="txt-formativa">
                                                        <p style="text-align: justify;">La educación para la seguridad vial consiste en la formación en conductas seguras en la vía, buscando abordar creencias, hábitos e ideas en torno a la movilidad que se constituyen en factores protectores al momento de hacer uso de las vías, ya sea como conductor de algún vehículo o como peatón. Con esto, busca fortalecer las habilidades de los actores viales en su interacción con el tránsito, a fin de que los comportamientos ciudadanos no afecten las dinámicas del tránsito, evitando siniestros en la vía.</p>
                                                        <ol>
                                                            <p><strong>Objetivos:</strong></p>
                                                            <li>Mostrar la necesidad de incorporar la educación vial en la prevención de siniestros viales.</li>
                                                            <li>Aportar información sobre la educación vial en entornos específicos.</li>
                                                            <li>Dar a conocer los supuestos de la educación vial para mejorar las interacciones de los diferentes actores viales con su entorno en el tránsito y con otros usuarios de la vía.</li>
                                                            <p>
                                                            <ul>
                                                                <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                                <li>Modalidad virtual.</li>
                                                            </ul>
                                                            </p>
                                                        </ol>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /#fin ESV -->

                                        <!-- collapseSVAL -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingSVAL'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseSVAL' aria-expanded='true' aria-controls='collapseSVAL'>
                                                        2. Siniestros viales en el ámbito laboral
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseSVAL' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSVAL'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                        
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Destinada a servir como un apoyo en la prevención de siniestros viales derivados de las actividades laborales que se desempeñan. Analiza los factores de riesgos presentes y apunta a un marco de trabajo que favorezca la seguridad vial.</p>
                                                    <ol>
                                                            <p><strong>Objetivos:</strong></p>
                                                        <li>Identificar y analizar los factores de riesgo que se presentan en actividades laborales.</li>
                                                        <li>Compartir información que permita entender los procedimientos jurídicos que se derivan de un siniestro vial que se ha dado en el contexto de una actividad laboral. </li>
                                                        <li>Aportar en las estrategias de prevención de siniestros viales en contextos laborales.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin SVAL -->
                                        <!-- collapsePAPIC -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingPAPIC'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapsePAPIC' aria-expanded='true' aria-controls='collapsePAPIC'>
                                                            3. Primeros Auxilios Psicológicos e Intervención en Crisis
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapsePAPIC' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingPAPIC'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Los primeros auxilios psicológicos hacen parte del acompañamiento psicosocial que se ofrece a una persona o grupo de personas en estado de crisis, para potenciar estrategias de afrontamiento funcionales frente a dicha crisis. Esta capacitación busca fortalecer herramientas que permitan dar un apoyo inmediato a aquellas personas que se encuentran en escenarios de crisis como resultado de un siniestro vial, necesitan recuperar el equilibrio emocional y minimizar las consecuencias psicológicas a largo plazo, debido a un hecho altamente traumático, inesperado y que genera una gran afectación a quien lo vive.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Conocer los componentes básicos de los primeros auxilios psicológicos y la intervención en crisis.</li>
                                                        <li>Describir pautas de acción enfocadas en la disminución del impacto emocional y social que provoca un evento como un siniestro vial.</li>
                                                        <li>Aportar estrategias que permitan a los usuarios contar con herramientas de contención emocional tras un siniestro vial.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin PAPIC -->
                                        <!-- collapseCCMN -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingCCMN'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseCCMN' aria-expanded='true' aria-controls='collapseCCMN'>
                                                            4. ¿Cómo comunicar la mala noticia?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseCCMN' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingCCMN'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Se orienta al fortalecimiento de estrategias y herramientas para dar una información que resulta altamente negativa sobre las expectativas que se tiene sobre una situación, estado de salud o evento que ha implicado un siniestro de tránsito. Busca hacer que la comunicación de noticias negativas se realice de forma asertiva, comprensiva y empática </p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Brindar herramientas que permitan a los respondientes o las personas que corresponda, dar una información acertada y asertiva de un hecho altamente negativo.</li>
                                                        <li>Sensibilizar sobre las reacciones emocionales que se producen por un hecho como los siniestros viales y mejorar las estrategias para responder ante este tipo de reacciones.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin CCMN -->
                                        <!-- collapseSVDDP -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingSVDDP'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseSVDDP' aria-expanded='true' aria-controls='collapseSVDDP'>
                                                        5. Los siniestros viales desde el derecho penal 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseSVDDP' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSVDDP'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Se analizan los procedimientos que en materia legal se pueden emprender tras un siniestro de tránsito. Aporta información sobre los deberes y derechos ciudadanos frente a estos hechos, así como las entidades intervinientes en las investigaciones que se realizan. </p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Aportar información sobre las clases de situaciones judiciales que se pueden tener tras un siniestro vial, describiendo conceptos básicos y trámites generales.</li>
                                                        <li>Ofrecer información sobre las acciones judiciales que pueden emprender tras un siniestro vial en los que se vean implicados.</li>
                                                        <li>Conectar el tema con los servicios de orientación en ORVI, con el fin de ampliar la información específica que se puede tener en caso de ser víctima de un siniestro vial.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin SVDDP -->
                                        <!-- collapseRCEDSV -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingRCEDSV'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseRCEDSV' aria-expanded='true' aria-controls='collapseRCEDSV'>
                                                            6. Responsabilidad civil extracontractual derivada de siniestros viales 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseRCEDSV' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingRCEDSV'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Da a conocer los procedimientos, factores y criterios considerados en las acciones que requieran una indemnización por un daño causado y un bien jurídico que se busca reparar. Esto con el propósito de aportar un conocimiento sobre el sector asegurador, los derechos de los ciudadanos y resolver dudas comunes frente a este tipo de responsabilidad a causa de un siniestro vial que permita comprender de mejor manera el cómo, cuándo y dónde adelantar reclamaciones en esta materia.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Conocer los conceptos básicos que involucran los seguros, los hechos implicados, las consecuencias, los alcances y los derechos del ciudadano. </li>
                                                        <li>Describir los procedimientos que se derivan de un siniestro vial que implica la responsabilidad civil extracontractual.</li>
                                                        <li>Resolver dudas en torno a los procedimientos judiciales que siguen de la responsabilidad civil.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>  
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin RCEDSV -->
                                        <!-- collapseIPAT -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingIPAT'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseIPAT' aria-expanded='true' aria-controls='collapseIPAT'>
                                                            7. IPAT
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseIPAT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingIPAT'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Aborda información relacionada con el contenido del Informe Policial de Accidente de Tránsito, comprendido como la recolección de datos relacionados con el siniestro vial recopilado por la autoridad de tránsito. Abarca contenidos desde su aporte en el siniestro hasta la comprensión de los aspectos que lo componen, con el fin de aportar en los usuarios la información pertinente de un recurso documental imperante en la orientación tras un siniestro vial.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Conocer los componentes del Informe Policial de Accidente de Tránsito.</li>
                                                        <li>Abordar los procedimientos que se consideran tras un siniestro vial y el papel del IPAT en ellos.</li>
                                                        <li>Reconocer el marco normativo en el que surge el IPAT. </li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div> 
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin IPAT -->
                                        <!-- collapseSOAT -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingSOAT'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseSOAT' aria-expanded='true' aria-controls='collapseSOAT'>
                                                            8. SOAT
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseSOAT' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSOAT'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Aporta información a los ciudadanos o interesados sobre el alcance, cobertura, características y tipos de riesgos que se encuentran enmarcados en el Seguro Obligatorio de Accidentes de Tránsito. Esto orientado a que el ciudadano tenga conocimiento sobre los derechos que tiene tras un siniestro vial, considerando la obligatoriedad de este documento y dando a conocer el alcance que tiene el mismo.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Dar a conocer información concerniente al alcance, importancia y necesidad del SOAT tras un siniestro vial. </li>
                                                        <li>Abordar, desde un punto de vista jurídico, las implicaciones del SOAT y los procedimientos que surgen en su uso. </li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div> 
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin SOAT -->
                                        <!-- collapseSORVI -->
                                            <div class='panel panel-default'>
                                                <div class='panel-heading' role='tab' id='headingSORVI'>
                                                    <h4 class='panel-title'>
                                                        <a role='button' data-toggle='collapse' data-parent='#accordion-charlas' href='#collapseSORVI' aria-expanded='true' aria-controls='collapseSORVI'>
                                                            9. Servicios que presta ORVI
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id='collapseSORVI' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingSORVI'>
                                                    <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Orienta e informa de manera gratuita a los usuarios en el área psicológica, social y jurídica sobre la documentación que deben aportar para soportar la ocurrencia de los hechos y cómo deben hacer el trámite para solicitar la prestación de los servicios de ORVI.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Brindar información sobre los casos en los que ORVI actúa como entidad en la atención a víctimas de siniestros viales. </li>
                                                        <li>Describir los servicios de ORVI, sus alcances y limitaciones. </li>
                                                        <li>Aportar información sobre el proceso general de atención a víctimas de siniestros viales. </li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración  de 90 minutos aproximadamente, una sesión.</li>
                                                            <li>Modalidad virtual.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /#fin SORVI -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin Charla -->

                        <!-- collapseTalleres  -->
                        <div class='panel panel-default'>
                            <div class='panel-heading' role='tab' id='headingTalleres'>
                                <h4 class='panel-title'>
                                    <a role='button' data-toggle='collapse' data-parent='#accordionOferta' href='#collapseTalleres' aria-expanded='true' aria-controls='collapseTalleres'>
                                        TALLERES
                                    </a>
                                </h4>
                            </div>
                            <div id='collapseTalleres' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingTalleres'>
                                <div class='panel-body'>

                                    <div class='panel-group ' id='accordionAV' role='tablist ' aria-multiselectable='true'>
                                        
<!-- collapseAV -->
    <div class='panel panel-default'>
        <div class='panel-heading' role='tab' id='headingAV'>
            <h4 class='panel-title'>
                <a role='button' data-toggle='collapse' data-parent='#accordionAV' href='#collapseAV' aria-expanded='true' aria-controls='collapseAV'>
                    1. Accidentología vial
                </a>
            </h4>
        </div>
        <div id='collapseAV' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingAV'>
            <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">Esta se ocupa de la comprensión de forma integral de los factores -humano, ambiental y del vehículo que intervienen en los índices de siniestros viales (accidentes de tránsito), la normatividad que regula el tránsito y los elementos que se incluyen en las investigaciones por siniestros.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
                                                        <li>Describir las condiciones que pueden originar en un siniestro vial. </li>
                                                        <li>Conocer estrategias de investigación de los siniestros viales desde un punto de vista investigativo.</li>
                                                        <li>Reconocer cómo interactúan los diferentes elementos que pueden ocasionar un siniestro vial y su identificación en momentos posteriores. </li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración 2 horas aproximadamente, en 2 sesiones.</li>
                                                            <li>Modalidad presencial.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
            </div>
        </div>
    </div>
    <!-- /#fin AV -->

    <!-- collapseMdD -->
        <div class='panel panel-default'>
            <div class='panel-heading' role='tab' id='headingMdD'>
                <h4 class='panel-title'>
                    <a role='button' data-toggle='collapse' data-parent='#accordionAV' href='#collapseMdD' aria-expanded='true' aria-controls='collapseMdD'>
                        2. Manejo del duelo
                    </a>
                </h4>
            </div>
            <div id='collapseMdD' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingMdD'>
                <div class='panel-body' style="background-color: #fff !important;">
                                                    <div class="txt-formativa">
                                                    <p class="text-justify">La muerte de un ser querido por un siniestro vial puede ser un evento difícil de afrontar, pues genera, en muchos casos, una experiencia traumática, resultando difícil encontrar apoyo en otras personas y una incomprensión de las propias emociones. Ante esto, desde el equipo de psicología de ORVI, se ha adelantado la iniciativa de realizar un taller grupal para el manejo del duelo, en donde los familiares de víctimas fatales pueden recibir apoyo emocional por parte de otras personas que han pasado por experiencias similares y tener un acompañamiento guiado de los profesionales a cargo.</p>
                                                    <ol>
                                                    <p><strong>Objetivos:</strong></p>
<li>Facilitar la aceptación de la pérdida.</li>
<li>Desarrollar herramientas que permitan afrontar algunas de las dificultades del evento traumático.</li>
<li>Establecer un entorno que permita la comprensión de las propias emociones.</li>
<li>Apoyar los procesos de adaptación a las nuevas situaciones y circunstancias.</li>
<li>Disponer de un espacio que fortalezca la comprensión, el consuelo y el apoyo.</li>
                                                        <p>
                                                        <ul>
                                                            <li>Duración de 90 a 120 minutos aproximadamente.</li>
                                                            <li>Modalidad virtual. Se definen 5 sesiones que componen un ciclo.</li>
                                                        </ul>
                                                        </p>
                                                    </ol>
                                                </div>
                                                
                                                <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                                                            <div class="boton-inscripcion">
                                                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSdCyK7MgcQrtytYoTrj-Yxbj490g1qhn0mnYRtScMb_-uTSEA/viewform" target="_blank" rel="noopener noreferrer">Inscríbete aquí</a>
                                                            </div>
                                                        </div>
                                                    </div>
                </div>
            </div>
        </div>
    <!-- /#fin MdD -->
</div>
                                </div>
                            </div>
                        </div>
                        <!-- /#fin Talleres  -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /#fin OfertaFormativa -->
        <div class="panel panel-primary panel-morado">
            <div class="panel-heading panel-heading-objetivos">
                <h4 class="panel-title"><a aria-expanded="false" class="collapsed" data-parent="#accordion-orvi" data-toggle="collapse" href="#canales">CANALES DE COMUNICACIÓN</a></h4>
            </div>
            <div aria-expanded="false" class="panel-collapse collapse" id="canales">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12"><a class="btn btn-solicitar-cita" href="https://docs.google.com/forms/d/e/1FAIpQLSc8B8JF8rKSgLddeq9w61IaY_3hwXHbkcoD_LVad_A5ytk6xg/viewform" target="_blank">SOLICITE SU CITA PARA MAYOR INFORMACIÓN EN ESTE BOTÓN</a></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <hr>
                            <p class="text-center"><strong>Dirección: </strong>Calle 42 No. 15 - 61</p>
                            <p class="text-center"><strong>Teléfono: </strong>(601) 647-7311</p>
                            <p class="text-center"><strong>Correo 1: </strong> <a href="mailto:orvi@movilidadbogota.gov.co">orvi@movilidadbogota.gov.co</a></p>
                            <p class="text-center"><strong>Correo 2: </strong> <a href="mailto:formacionorvi@movilidadbogota.gov.co">formacionorvi@movilidadbogota.gov.co</a></p>
                            <p class="text-center"><strong>Celular y whatsapp de orientación: </strong> 305 870 3458 - 300 586 3576</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer container-fluid" style="max-width: 940px;">
    <div class="row">
        <div class="col-sm-12"><a href="#"><img alt="" class="img-center" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/31-10-2020/logo-footer.png"></a></div>
    </div>
</footer>


<style type="text/css">
    .h2,
    h2 {
        display: none;
    }

    body {
        background-color: #fff !important;
        color: #6B6B6B;
    }

    .img-center {
        display: block;
        margin: 0 auto;
    }

    .video-intro {
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .region-content {
        background-color: transparent;
    }

    .intro {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .intro p,
    .intro ul,
    .intro ol {
        font-size: 18px;
        padding-bottom: 20px;
    }

    .intro .fotos {
        padding-bottom: 20px;
    }

    .panel-verde {
        border-color: #32CC3A !important;
        background-color: #32CC3A !important;
        color: #1C2046 !important;
        border-radius: 0 !important;
    }

    .panel-verde .panel-heading {
        border-color: #32CC3A !important;
        background-color: #32CC3A !important;
        background-image: none !important;
    }

    .panel-morado {
        border-color: #AF115B !important;
        background-color: #AF115B !important;
        border-radius: 0 !important;
    }

    .panel-morado .panel-heading {
        border-color: #AF115B !important;
        background-color: #AF115B !important;
        background-image: none !important;
    }

    .panel-morado .panel-heading .panel-title a {
        text-decoration: none;
        color: #FFB238 !important;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 2px;
    }

    .panel-morado .panel-heading .panel-title a:after {
        font-family: 'Glyphicons Halflings';
        content: "\e080";
        float: right;
        color: #FFB238;
        font-size: 22px;
    }

    .panel-morado .panel-heading .panel-title a.collapsed:after {
        content: "\e114";
    }

    .panel-morado .panel-body {
        background-color: #FFB238 !important;
        padding: 30px;
        color: #343833;
    }

    .panel-morado .panel-body .titulo {
        color: #AF115B;
        font-size: 30px;
        font-weight: 700;
        margin: 0 0 30px 0;
    }

    .panel-morado .panel-body a {
        color: #AF115B;
        text-decoration: underline;
        transition: ease all .5s;
    }

    .panel-morado .panel-body a:hover {
        color: #1D2046;
    }

    .panel-body p,
    .panel-body ul,
    .panel-body ol,
    .panel-body li {
        font-size: 18px;
    }

    .panel {
        border: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important;
    }

    .panel-heading {
        border-radius: 0 !important;
    }

    .footer {
        background: #fff;
        padding: 25px;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .btn-solicitar-cita {
        background-color: #AF115B;
        color: #FFB238 !important;
        text-decoration: none !important;
        font-size: 20px;
        text-align: center;
        padding: 10px 20px;
        width: 100%;
        border: 6px solid #fff;
        font-weight: 600;
        letter-spacing: 2px;
        margin-bottom: 30px;
        transition: ease all .5s;
    }

    .btn-solicitar-cita:hover {
        background-color: #FFB238;
        color: #AF115B !important;
        border: 6px solid #AF115B;
    }

    .py-50 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .py-30 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .px-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .pr-0 {
        padding-right: 0px;
    }

    .pl-0 {
        padding-left: 0px;
    }

    .pl-30 {
        padding-left: 30px;
    }

    .pl-50 {
        padding-left: 50px;
    }

    .pt-20 {
        padding-top: 30px;
    }

    .pt-30 {
        padding-top: 30px;
    }

    .pt-50 {
        padding-top: 50px;
    }

    .pb-30 {
        padding-bottom: 30px;
    }

    .pb-50 {
        padding-bottom: 50px;
    }

    .txt-formativa ol {
        list-style: none;
        list-style-position: outside !important;
    }

    .txt-formativa ol>li {
        position: relative;
        padding-left: 1.5em;
    }
    .txt-formativa ol>li:before {
        content: '';
  position: absolute;
  left: 0;
  width: 1em;
  height: 1em;
  background: url("data:image/svg+xml;utf8,<?xml version='1.0' encoding='utf-8'?><svg width='15' height='15' viewBox='0 0 1792 1792' xmlns='http://www.w3.org/2000/svg'><path d='M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z'/></svg>") no-repeat;
    }

    .boton-inscripcion {
        background-color: #FFB238;
        padding: 10px 10px;
        text-align: center;
        border-radius: 6px;
        border: solid 3px #AF115B;
        font-size: 1.6rem;
        font-weight: 700;
        margin: 15px;
        text-transform: uppercase;
    }
    .boton-inscripcion:hover {
        background-color: #AF115B;
    }
    .boton-inscripcion>a {
        text-decoration: none !important;
    }
    .boton-inscripcion:hover>a {
        color: #FFB238 !important;
    }


    @media (max-width: 543px) {
        body {
            background-color: #fff !important;
            background-image: none;
        }

        .intro {
            padding-top: 0;
        }
    }

    /*# sourceMappingURL=style-orvi.css.map */
</style>