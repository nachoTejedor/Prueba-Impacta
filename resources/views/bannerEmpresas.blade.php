<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Logos de Empresas</title>
    <style>
        .empresasContainer {
            background: linear-gradient(to bottom, #ffffff, #e2001a); /* Degradado de blanco a rojo */
            padding: 20px;
        }

        table {
            margin-top: 100px;
            background-color: transparent;
            width: 100%;
            border-collapse: separate; /* Para que funcione border-spacing */
            border-spacing: 20px; /* Ajusta el espacio entre las celdas */
            margin: 20px 0;
        }

        td {
            border: none; /* Elimina los bordes de las celdas */
            padding: 8px;
            text-align: center;
            vertical-align: middle; /* Centra verticalmente el contenido de la celda */
            height: 150px; /* Ajusta la altura de las celdas según sea necesario */
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para dar efecto de tarjeta */
            border-radius: 10px; /* Esquinas redondeadas */
        }

        img {
            max-width: 100%; 
            max-height: 100%;
            object-fit: contain; /* Asegura que la imagen mantenga su proporción dentro de la celda */
        }
    </style>
</head>
<body>
    <div class="empresasContainer">
        <table>
            <tr>
                <td><img src="logo1.png" alt="Logo Empresa 1"></td>
                <td><img src="logo2.png" alt="Logo Empresa 2"></td>
                <td><img src="logo3.png" alt="Logo Empresa 3"></td>
                <td><img src="logo4.png" alt="Logo Empresa 4"></td>
                <td><img src="logo5.png" alt="Logo Empresa 5"></td>
                <td><img src="logo6.png" alt="Logo Empresa 6"></td>
                <td><img src="logo7.png" alt="Logo Empresa 7"></td>
            </tr>
            <tr>
                <td colspan="2"> <!-- Fusiona las dos primeras columnas -->
                    <img src="logo8.png" alt="Logo Empresa 8">
                </td>
                <td colspan="2"><img src="logo10.png" alt="Logo Empresa 10"></td>
                <td><img src="logo11.png" alt="Logo Empresa 11"></td>
                <td><img src="logo12.png" alt="Logo Empresa 12"></td>
                <td><img src="logo13.png" alt="Logo Empresa 13"></td>
            </tr>
        </table>
    </div>

</body>
</html>
