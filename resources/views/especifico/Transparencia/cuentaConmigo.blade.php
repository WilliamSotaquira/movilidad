@extends ('welcome')
@section ('contenido')


<div class="container-fluid seccion">
    <div class="row">
        <div class="col-xs-12">
            <div class="encabezado">
                <div>
                    <h3>Portal Integridad, Antisoborno y Anticorrupción</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="botones">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="btn-dinamico">
                    <a href="https://www.movilidadbogota.gov.co/web/canal_anticorrupcion">
                        <figure>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-07-2021/canal_anticorrupcion.png" alt="Escudo de canal de denuncia de hechos de corrupción" class="img-responsive">
                            <div class="transparencia">
                                <div class="enc-title">
                                    <h3>Canal de denuncias de corrupción</h3>
                                </div>
                                <div class="enc-description">
                                    <p>La Secretaría de Movilidad está comprometida con la transparencia, la ética y la probidad, por eso ponemos a tu disposición este canal para denunciar los posibles hechos de corrupción que conozcas.</p>
                                </div>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="btn-dinamico">
                    <a href="https://www.movilidadbogota.gov.co/web/canal-denuncias-antisoborno">
                        <figure>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-07-2021/canal_antisoborno.png" alt="Escudo de canal Antisoborno" class="img-responsive">
                            <div class="transparencia">
                                <div class="title">
                                    <h3>Campaña Antisoborno</h3>
                                </div>
                                <div class="enc-drescription">
                                    <p>Adoptamos el Sistema de Gestión Antisoborno como herramienta de lucha contra la corrupción y el soborno.</p>
                                </div>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="btn-dinamico">
                    <a href="https://www.movilidadbogota.gov.co/web/procesos_contractuales_estrategicos">
                        <figure>
                            <img src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/15-07-2021/canal_transparencia.png" alt="Escudo de canal de transparencia" class="img-responsive">
                            <div class="transparencia">
                                <div class="enc-title">
                                    <h3>Procesos Contractuales Estratégicos de la SDM</h3>
                                </div>
                                <div class="enc-description">
                                    <p>La honestidad y transparencia nos representan, consulta la información sobre los proyectos de inversión de la Secretaría de Movilidad y haz seguimiento y control a la ejecución de estos proyectos.</p>
                                </div>
                            </div>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .field-item.even h2 {
        visibility: hidden;
        margin-top: -50px;
    }

    .region-content {
        padding: 0px;
        overflow: hidden;
    }


    .container-fluid {
        max-width: 940px;
    }

    .w-100 {
        width: 100%;
    }


    .btn-dinamico {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
    }

    .btn-dinamico figure {
        position: relative;
        max-height: 280px;
        max-width: 280px;
        overflow: hidden;
        border-radius: 6px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.50);
        cursor: pointer;
    }

    .btn-dinamico figure img {
        padding: 30px;
        transition: all 500ms ease-out;
    }

    .btn-dinamico figure .transparencia {
        position: absolute;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(22, 16, 64, 0.9);
        transition: all 500ms ease-out;
        opacity: 0;
        visibility: hidden;
        text-align: center;
    }

    .btn-dinamico figure:hover>.transparencia {
        opacity: 1;
        visibility: visible;
    }

    .btn-dinamico figure .transparencia h3 {
        color: #66e026;
        font-weight: 600;
        margin-bottom: 120px;
        transition: all 500ms ease-out;
        margin-top: 20px;
        font-size: calc(1rem + 0.4vw);
    }

    .btn-dinamico figure:hover>img {
        transform: scale(1.3);
        transition: all 700ms ease-out;
    }

    .btn-dinamico figure:hover>.transparencia h3 {
        margin-top: 25px;
        margin-bottom: 15px;
    }


    .btn-dinamico figure .transparencia p {
        color: #fff;
        line-height: 1.2;
        width: 90%;
        margin: auto;
        font-size: calc(0.7em + 0.1vw);
        text-align: center;
    }

    .seccion .encabezado {
        background: #ed0a0a;
        height: 120px;
        border-bottom: solid 12px #191C3A;
        border-top: solid 3px #191C3A;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
    }

    .seccion .encabezado h3 {
        font-size: calc(1em + 1.2vw);
        font-weight: 700;
        color: #fff;
        padding: 15px auto;
    }

    .botones {
        margin-right: 0px;
        margin-left: 0px;
    }

    .transparencia {
        display: flex;
        flex-direction: column;
        justify-content: center;
        justify-items: center;
        padding-bottom: 10px;
    }
</style>
<style>
    @media(max-width:767px) {}

    @media(min-width:768px) {}

    @media(min-width:992px) {

        .botones {
            padding: 20px;
        }

        .btn-dinamico figure .transparencia p {
            font-size: 1em;
        }

        .btn-dinamico figure .transparencia h3 {
            font-size: calc(1rem + 0.5vw);
            padding: 5px;
        }

    }

    @media(min-width:1200px) {}
</style>