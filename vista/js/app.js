$(function () {
  for (let i = 0; i < 10; i++) {
    $("#ferreterias").append(`
        <div class="tienda">
        <img class="tienda__logo" src="img/Banner.jpg" alt="tienda logo" />

        <div class="tienda__informacion">
            <div class="tienda__datos">
                <h2 class="tienda__nombre">A tu mano</h2>
                <div class="tienda__meta">
                    <img src="img/star.png" alt="Calificacion" />
                    <p>35 min</p>
                </div>
            </div>
        </div>

        <div class="tienda__entrar">Entrar</div>

        <img class="tienda__ferreteria" src="img/iconMartillo.png" alt="logo martillo" />
    </div>
              
    `);
  }
});
