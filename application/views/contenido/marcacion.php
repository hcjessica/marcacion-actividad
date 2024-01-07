<header class="header">
    <h1 class="header__titulo">Marcación de actividades</h1>
</header>
<main class="main"><!--contenido principal-->
    <section class="main__ultimoreg section">
        <!--Bloque 1: Vista previa-->
        <h3 class="section__subtitulo">ÚLTIMO REGISTRO</h3>
        <form class="section__form form" id="formexistente">
            <div class="form__bloque1">
                <label class="form__lbl" for="nromarcacion">Nro:</label>
                <span class="form__dato form__dato--nromarcacion" id="nromarcacion" title="Nro. de marcación">#5</span>
            </div>
            <div class="form__bloque2">
                <label class="form__lbl" title="Categoría de la actividad"  for="categoria">Categoría:</label>
                <span class="form__dato form__dato--categoria" id="categoria" title="Categoría seleccionada">FREELANCE</span>
            </div>
            <div class="form__bloque3">
                <label class="form__lbl" for="diamarcacion">Día: <span class="form__spanrequired">*</span></label>
                <input class="form__dato form__dato--diamarcacion form__dato--active" id="diamarcacion" title="Día de la marcación" type="date" readonly disabled value="2023-10-10">
            </div>
            <label class="form__lbl" for="descripcion">Descripción:</label>
            <textarea class="form__dato form__dato--descripcion form__dato--active" id="descripcion" title="Descripción de la actividad">Trabajando en proyecto X</textarea>
            <div class="form__bloque7">
                <label class="form__lbl form__lbl--marcacion" for="horatermino">Marcación: <span class="form__spanrequired">*</span></label>
                <div class="form__bloque4">
                    <input class="form__dato form__dato--horainicio form__dato--active" id="horainicio" title="Hora de inicio" type="time" value="10:00">
                    <span class="form__guion"> - </span>
                    <input class="form__dato form__dato--horatermino form__dato--active" id="horatermino" title="Hora de término" type="time" value="11:12">
                </div>
            </div>
            <button class="form__btnmarcar form__btnmarcar--rojo form__btnmarcar--hover" id="btn-marcartermino" title="Marcar término" type="button" hidden>Marcar término</button>
        </form>
    </section>
    <section class="main__nuevaact section">
        <!--Bloque 2: Nuevo registro de marcación-->
        <h3 class="section__subtitulo">NUEVA ACTIVIDAD</h3>
        <form class="section__form form" id="formnuevo" method="post">
            <div class="form__bloque5">
                <label class="form__lbl" for="slct_categoria">Categoría: <span class="form__spanrequired">*</span></label>
                <select class="form__dato" title="Categorías de actividades" id="slct_categoria">
                </select>
            </div>
            <div class="form__bloque6">
                <label class="form__lbl" for="fec_marcacion">Día: <span class="form__spanrequired">*</span></label>
                <input class="form__dato form__dato--active" title="Día de la marcación" type="date" value="<?php echo date("Y-m-d"); ?>" id="fec_marcacion">
            </div>
            <label class="form__lbl" for="descrip_act">Descripción:</label>
            <textarea class="form__dato form__dato--descripcion form__dato--active" title="Descripción de la actividad" id="descrip_act"></textarea>
            <div class="form__bloque6">
                <label class="form__lbl" for="horaini_marcacion">Hora: <span class="form__spanrequired">*</span></label>
                <input class="form__dato form__dato--active" type="time" title="Hora de inicio" value="" id="horaini_marcacion">
            </div>
            <button class="form__btnmarcar form__btnmarcar--verde form__btnmarcar--hover" id="btn-marcarinicio" title="Marcar inicio" type="button">Marcar inicio</button>
        </form>
    </section>
</main>