<style>
main {
    margin-top: 100px;
}
header p {
    font-size: 20px;
}
.contacto_h1{

margin-top: 0;
    color: #3E398F;
    font-size: 50px;
}
.cuadro_contacto {
    max-width: 450px;
    margin: 0 auto;
    padding: 30px;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 3px 3px 0px;
    border-radius: 5px;
}

.cuadro_contacto div input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;

}
.cuadro_contacto textarea {
    resize: vertical;
    height: 100px;
    width: 100%;
}
.cuadro_contacto button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #08192b;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
<main>
        <header>
        <p>¿Necesitas algo especial?</p>
        <h1 class="contacto_h1">Contáctanos</h1>
        <header>

            <div class="cuadro_contacto">

            <form method="GET" action="respuesta_formulario.php">
                <div>
                    <label for="nombre">Nombre*</label>
                    <input type="text" name="nombre" id="nombre" placeholder="ej. Adrian" required>
                </div>
                <div>
                    <label for="apellido">Apellido*</label>
                    <input type="text" name="apellido" id="apellido" placeholder="ej. Álvarez" required>
                </div>
                <div>
                    <label for="email">E-mail*</label>
                    <input type="email" name="email" id="email" placeholder="mimail@dominio.com" required>
                </div>
                <div>
                    <label for="libro">Producto buscado*</label>
                    <input type="text" name="libro" id="libro" placeholder="memoria ram" required>
                </div>
                <div>
                    <label>Mensaje*</label>
                    <textarea id="cuadro_texto" placeholder="¿Que estas buscado?" required></textarea>
                </div>
                <p style="color: #999";>*Campos obligatorios</p>
                <button type="submit">Enviar</button>
            </form>

            </div>
</main>