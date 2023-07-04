<style>


h1{
    text-align: center;
    font-size: 50px;
}
    .cuerpo {
        width: 800px;
        font-size:18px ;
    }

    .parrafo_centrado {
        font-weight: bold;
        margin: 0;
        text-align: center;
    }

    .contenedor_boton {

        display: flex;
        align-items: center;
        justify-content: center;
    }

    img {
        width: 800%;
        height: 100%;
        margin-top: 5%;
    }
    button {
        width: 250px;
        height: 50px;
        font-size: 25px;
        background-color: #1e0707;
        color: white;
        border-radius: 20px;
        transition: transform 0.2s;
        margin-top: 5%;
        margin-bottom: 5%;
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


    <div class="container-fluid mt-4 cuerpo">

                <h1>Bienvenido a Tec-Mundo</h1>
    </div>

        <div class="container-fluid cuerpo">
            <p>Somos una tienda que estamos innovando en traer productos que nuestros jugadores gamers necesita, a continuacion te mostraremos lo que tenemos.</p>
        </div>
         <div class="parrafo_centrado">
            <p>Proximamente tendremos muchos mas.</p>
        </div>


            <img src="img/img_home.webp" class="img-fluid" alt="imagen de portada">



                    <div class="contenedor_boton">

                        <button><a href="index.php?seccion=product" class="boton">Ver Productos</button></a>

                    </div>

