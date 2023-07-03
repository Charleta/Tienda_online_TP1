<style>

    .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px; /* Espacio opcional entre la imagen y el título */
    }
    .container h1 {
        font-size: 45px;
        margin-bottom: 5px; /* Espacio opcional entre el título y el párrafo */
    }
    .container p {
        font-size: 25px;
        text-align: center;
    }
    .contenedor_boton {

        display: flex;
        align-items: center;
        justify-content: center;
    }
    button {
        width: 250px;
        height: 50px;
        font-size: 25px;
        background-color: #1e0707;
        color: white;
        border-radius: 20px;
        transition: transform 0.2s;
    }
button:hover{
    background-color: white;
}
    button:active {
        transform: translateY(2px);
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    }
    button a {
        text-decoration: none;
        color: white;
        width: 100%;
    }
    button a:hover {
        color: #1e0707;

    }

</style>


<div class="container">
            <header>
                <h1>Bienvenido a nuestra Tienda Virtual</h1>
            </header>
    <div>


            <p>Somos una tienda que estamos innovando en traer productos que nuestros jugadores gamers necesita, a continuacion te mostraremos lo que tenemos. Proximamente
            tendremos muchos mas.</p>

        <img src="img/img_home.webp" class="img-fluid" alt="imagen de portada">

                <div class="contenedor_boton">

                    <button><a href="index.php?seccion=product" class="boton">Ver Productos</button></a>

                </div>
    </div>

</div>