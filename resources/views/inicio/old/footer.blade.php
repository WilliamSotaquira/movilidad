<style type="text/css">/* .menu-ppal {
        padding-top: 200px;
        padding-left: 16px;
    } */

    .pill-tooltip {
        display: flex;
        background: #A6B517;
        border-radius: 3px;
        box-shadow: 5px 5px 50px rgba(0, 0, 0, 0.2);
        width: 130px;
       /* z-index: 1000; */
        opacity: 0;
        transition: .3s ease all;
        position: absolute;
        transform: translateY(10px);
    }

    .pill-tooltip::after {
        content: "";
        display: inline-block;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-top: 15px solid #A6B517;
        position: absolute;
        bottom: -15px;
        left: calc(50% - 15px);
    }

    .pill-tooltip.active {
        opacity: 1;
        transform: translateY(0px);
    }

    .img-tooltip img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 6px;
        padding: 2px;
        vertical-align: top;
    }
</style>
<script>
    // Lista de variables
    let elements_list = document.querySelectorAll('a.mnav-li-a');
    const mov0 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/inicio.gif";
    const mov1 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/transparencia.gif";
    const mov2 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/servicios.gif";
    const mov3 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/participa.gif";
    const mov4 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/entidad.gif";
    const mov5 = "https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/09-08-2023/normatividad.gif";

    for (let i = 0; i < elements_list.length; i++) {
        let html = `<div class="pill-tooltip tooltip-${i}"><div class="imagen img-tooltip img-tooltip-${i}"><img class="img-responsive w-100"src="" alt="" title=""></div></div>`;

        elements_list[i].insertAdjacentHTML('afterend', html);
        document.querySelector(`.img-tooltip-${i} img`).src = eval(`mov${i}`);
        elements_list[i].setAttribute('data-toggle', 'tooltip');


        elements_list[i].addEventListener('mouseover', function() {
            tooltip(i);
            position(i);
        });
        elements_list[i].addEventListener('mouseout', function() {
            tooltip(i);
        });

    }


    function tooltip(e) {
        document.querySelector(`.tooltip-${e}`).classList.toggle('active');
    }

    function position(e) {
        // variables
        let tooltip = document.querySelector(`.tooltip-${e}`);
        let label = tooltip.parentElement;

        // coordenadas del item
        var xLabel = label.offsetLeft;
        var yLabel = label.offsetHeight;

        // Calcular el tamaño del tooltip
        const widthLabel = label.clientWidth;
        const heightLabel = label.clientHeight;

        // posicionar tooltip
        let xPos = (xLabel + (widthLabel / 2)) - 65;
        let yPos = yLabel + 8;

        tooltip.style.left = `${xPos}px`;
        tooltip.style.bottom = `${yPos}px`;

        console.log('item:' + e, 'x:' + xLabel, 'y:' + yLabel, 'ancho:' + widthLabel, 'alto:' + heightLabel);
        console.log('xpos:' + xPos)

    }
</script><!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
<div class="sf2">
	<div class="footer-bg1">
		<div class="container" id="footer" style="padding:0px;">
			<div class="container arriba">
				<div class="col-md-3 footer_siganos">
					<div class="footer-h3">SÍGANOS
						<div class="footer-hr">&nbsp;</div>
					</div>

					<center>
						<div class="footer-h5">Síguenos en nuestras Redes Sociales</div>

						<div class="redes">
							<div class="row">
								<div class="col-xs-3"><a href="https://www.facebook.com/secretariamovilidadbogota"><img alt="icono facebook" aria-label="Visita la cuenta oficial de Facebook de la SDM" class="footer-facebook footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_fb.png"></a></div>

								<div class="col-xs-3"><a href="https://twitter.com/SectorMovilidad"><img alt="icono twitter" aria-label="Visita la cuenta oficial de Twitter de la SDM" class="footer-twiter footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_tw.png"></a></div>

								<div class="col-xs-3"><a href="https://www.youtube.com/user/secretariamovilidad?feature=guide"><img alt="icono youtube" aria-label="Visita la cuenta oficial de YouTube de la SDM" class="footer-youtube footer-redes-ico-sp footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_you.png"></a></div>

								<div class="col-xs-3"><a href="https://www.instagram.com/sectormovilidad/"><img alt="icono instagram" aria-label="Visita la cuenta oficial de Instagram de la SDM" class="footer-instagram footer-redes-ico" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/20-10-2021/botones_redes_sociales_-_pie_de_pagina_entidad_inst.png"></a></div>
							</div>
						</div>
					</center>
					<style type="text/css">.footer-redes-ico {
                            width: none;
                            height: none;
                            padding: 0px;
                        }

                        .sf2 {
                            background-color: #4c531e;
                            word-wrap: break-word;
                        }
					</style>
				</div>

				<div class="col-md-3">
					<div class="footer-h3">INFORMACIÓN SDM
						<div class="footer-hr">&nbsp;</div>
					</div>

					<div class="footer-h5"><a class="nw-link" href="http://www.movilidadbogota.gov.co/web/mision" rel="noopener noreferrer" target="_blank">Acerca de nosotros</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/POLITICAS_DE_SEGURIDAD_Y_PROTECCION_DE_DATOS_PERSONALES" rel="noopener noreferrer" target="_blank">Política de privacidad</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/mapa_de_sitio" rel="noopener noreferrer" target="_blank">Mapa del sitio</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/servicios/nuestra_entidad" rel="noopener noreferrer" target="_blank">Aplicativos de la SDM</a></div>
					<style type="text/css">.footer-h5>a {
                            text-decoration: none !important;
                            color: rgba(255, 255, 255, 1) !important;

                        }
                        .footer-h5:hover>a {
                            color: #A6B517 !important;

                        }

                        .footer-h7:hover a {
                            color: #A6B517 !important;

                        }
					</style>
				</div>

				<div class="col-md-3 contacto">
					<div class="footer-h3">SERVICIOS
						<div class="footer-hr">&nbsp;</div>
					</div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/tramites_y_servicios" rel="noopener noreferrer" target="_blank">Trámites y Servicios</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/sdqs" rel="noopener noreferrer" target="_blank">PQRSD</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/consulta_de_comparendos" rel="noopener noreferrer" target="_blank">Consulta de Comparendos</a></div>

					<div class="footer-h5"><a class="nw-link" href="https://www.movilidadbogota.gov.co/web/servicios/liquidacion_de_servicios_de_parqueadero_y_gruas" rel="noopener noreferrer" target="_blank">Pago Seguro</a></div>
				</div>

				<div class="col-md-3">
					<div class="footer-h3">TABLERO
						<div class="footer-hr">&nbsp;</div>
					</div>

					<div class="footer-h5">&nbsp;</div>

					<div align="center" class="footer-h5">
						<p>&nbsp;</p>
						<a class="hvr-float" href="https://tablerocontrolciudadano.veeduriadistrital.gov.co:445/"><img alt="Logo Tablero Control Ciudadano" class="img-rounded img-responsive" src="/web/sites/default/files/Paginas/09-08-2019/boton-tablero-de-control.jpg"></a></div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bg2">
		<div class="container" id="footer" style="padding:0px;">
			<div class="container medio">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12 text-center footer-sec-1 contacto">
						<style type="text/css">.footer-h4 {
                                margin-bottom: 10px;
                            }

                            .footer-h7 {
                                margin-bottom: 5px;
                            }

                            .contacto a {
                                overflow: hidden;
                                text-overflow: clip;
                                flex-shrink: 0;
                            }
						</style>
						<div class="footer-h4 text-left">Secretaría Distrital de Movilidad</div>

						<div class="footer-h7 text-left"><strong>NIT</strong> 899.999.061-9</div>

						<div class="footer-h7 text-left"><strong>Correo Institucional: <a href="https://bogota.gov.co/sdqs/">Bogotá te escucha</a></strong></div>

						<div class="footer-h7 text-left"><strong>Radicación ciudadanía: </strong> <strong><a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php">Formulario radicación de correspondencia </a></strong></div>

						<div class="footer-h7 text-left"><strong>Radicación exclusiva para entes de control y entidades públicas: <a href="mailto:radicacionentidades@movilidadbogota.gov.co">radicacionentidades@movilidadbogota.gov.co</a></strong></div>

						<div class="footer-h7 text-left"><strong>E-mail exclusivo para notificaciones judiciales: </strong><strong><a href="mailto:judicial@movilidadbogota.gov.co">judicial@movilidadbogota.gov.co</a></strong></div>

						<div class="footer-h7 text-left"><strong>Centro de Contacto de Movilidad:</strong><a href="tel:+6013649400">+57 (601) 364 9400 opción 2</a></div>

						<div class="footer-h7 text-left"><strong>Línea Nacional:</strong> <a href="tel:018000127425">018000 127425</a></div>

						<div class="footer-h7 text-left"><strong><a href="https://www.movilidadbogota.gov.co/web/canal_anticorrupcion">Denuncias por actos de corrupción</a></strong></div>
					</div>

					<div class="col-md-4  col-sm-12 col-xs-12 ">
						<div class="text-center footer_direccion footer-h2">
							<div class="row">
								<div class="col-xs-12"><a href="http://www.bogota.gov.co/sdqs"><img alt="icono carta abierta" class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2024/iconos_g12570_icono_footer.png"> </a></div>

								<div class="col-xs-12"><a href="https://supercade.bogota.gov.co/"><img alt="icono RSS" class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2024/iconos_g12567_icono_footer.png"> </a></div>

								<div class="col-xs-12"><a href="https://maps.app.goo.gl/MBgSecG5DjFny6497"><img alt="icono coordenada" class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2024/iconos_g12576_icono_footer.png"></a></div>

								<div class="col-xs-12"><a href="tel:195"><img alt="icono coordenada" class="footer-tel img-responsive" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/03-07-2024/iconos_g12577_icono_footer.png"></a></div>
							</div>
							<style type="text/css">.footer-tel {
                                    height: 30px;
                                }
							</style>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="box-co">
				<div class="ico-co"><a href="https://www.gov.co/" target="blank"><img alt="icono marca CO" class="img-responsive img-footer-2" height="65" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2021/co-colombia.png"> </a></div>

				<div class="ico-co"><a href="https://www.gov.co/" target="blank"><img alt="icono .GOV" class="img-responsive img-footer-2" src="https://www.movilidadbogota.gov.co/web/sites/default/files/Paginas/14-05-2021/geadergov.png"> </a></div>
			</div>
			<style type="text/css">.box-co {
                    display: flex;
                    justify-content: space-evenly;
                    padding: 1vw;
                }
			</style>
		</div>
		<style type="text/css">.img-footer-2 {
                max-height: 40px;
                text-align: center;
            }
		</style>
	</div>

	<div class="footer-bg3 text-center footer-copy">© 2017 Secretaría de Movilidad. Todos los Derechos Reservados.</div>
</div>
<style type="text/css">:focus-visible {
        outline: 2px solid red !important;
    }


.sdm_menu ul li a {
  height: auto !important;
}

.sdm_menu ul ul li a {
  line-height: 1 !important;
}

div.container:nth-child(11) > div:nth-child(5) {
  padding-top: 5px;
  color: #4c531e;
}
</style>
<!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
