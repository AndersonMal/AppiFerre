<div class="offcanvas-header">
                        <div class="offcanvas__logo">
                            <img class="logoApiFerre" src="../img/LogoColor.png" alt="logoApiferre" />
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                AppiFerre
                            </h5>
                        </div>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <hr />
                        <section class="secciones secciones-user" onclick="window.location.href='#'">

                            <img class="user" <?php if(isset($_SESSION['IMAGEN'])): ?> src="../img/user.png" <?php endif; ?> alt="user">
                            <div class="usuarios__nombre">
                                <p>Bienvenid@</p>
                                <p><?php echo($_SESSION['NOMBRE_USUARIO'])?></p>
                            </div>
                        </section>

                        <hr />

                        <section>
                            <div class="secciones-usuario" onclick="window.location.href='#'">
                                <img src="../img/home.png" alt="home">
                                <p>Home</p>
                            </div>
                            <div class="secciones-usuario" onclick="window.location.href='#'">
                                <img src="../img/notificaciones.png" alt="notificaciones">
                                <p>notificaciones</p>
                            </div>
                            <div class="secciones-usuario" onclick="window.location.href='#'">
                                <img src="../img/bolsa.png" alt="Mis compras">
                                <p>Mis compras</p>
                            </div>
                            <div class="secciones-usuario" onclick="window.location.href='#'">
                                <img src="../img/favorito.png" alt="Mis favoritos">
                                <p>Mis favoritos</p>
                            </div>
                            <div class="secciones-usuario" onclick="window.location.href='../login/logout.php'">
                                <img src="../img/logout.png" alt="home">
                                <p>Cerrar sesión</p>
                            </div>
                            <div class="secciones-usuario" onclick="window.location.href='#">
                                <img src="../img/home.png" alt="home">
                                <p>Home</p>
                            </div>
                        </section>
                        <hr />
                        <section class="secciones">
                            <h5>SECCIONES</h5>
                            <p>ferreterias</p>
                            <p>Tiendas Agro</p>
                        </section>
                        <hr />
                        <section class="secciones">
                            <h5>OTROS</h5>
                            <p onclick="window.location.href='../registrotienda/registrarNegocio.php'">
                                Registra tu negocio
                            </p>
                            <p>Acerca de</p>
                            <p>
                                <a class="juego" target="_blank" href="https://picasyfijas.netlify.app/">Diviertete con
                                    picas y fijas</a>
                            </p>
                        </section>

                        <hr />
                    </div>