<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con Logos de Empresas</title>
    <style>
 

        table {
            background-color: transparent;
         align-items: center;
            width: 100%;
            border-collapse: separate; /* Para que funcione border-spacing */
            border-spacing: 20px; /* Ajusta el espacio entre las celdas */
            margin: 20px 0;
        }

        td {
            position: relative;
            border: none; /* Elimina los bordes de las celdas */
            padding: 8px;
            text-align: center;
            justify-content: center;
            vertical-align: middle; /* Centra verticalmente el contenido de la celda */
            height: 200px; /* Ajusta la altura de las celdas según sea necesario */
            background-color: #e2001a;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para dar efecto de tarjeta */
            justify-content: center; /* Centra horizontalmente el contenido en Flexbox */
            align-items: center; /* Centra verticalmente el contenido en Flexbox */
        }
        td img{
            max-width: 100px;
            margin: 0 auto;}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            <a href="https://www.alcampo.es" target="_blank">
                <img src="/img/logos/alcampo.svg" alt="Logo Empresa 1" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://www.basf.com" target="_blank">
                <img src="/img/logos/basf.svg" alt="Logo Empresa 2" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://www.ferrovial.com" target="_blank">
                <img src="/img/logos/ferrovial.svg" alt="Logo Empresa 3" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://home.kpmg" target="_blank">
                <img src="/img/logos/kpmg.svg" alt="Logo Empresa 4" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://www.excellence.com" target="_blank">
                <img src="/img/logos/excellence.svg" alt="Logo Empresa 5" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://www.bmi.com" target="_blank">
                <img src="/img/logos/bmi.svg" alt="Logo Empresa 6" class="logoEmpresas">
            </a>
        </td>
        <td>
            <a href="https://www.brita.net" target="_blank">
                <img src="/img/logos/brita.svg" alt="Logo Empresa 7" class="logoEmpresas">
            </a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <a href="https://www.cajamar.es" target="_blank">
                <img src="/img/logos/cajamar.svg" alt="Logo Empresa 8">
            </a>
        </td>
        <td colspan="2">
            <a href="https://www.cepsa.com" target="_blank">
                <img src="/img/logos/cepsa.svg" alt="Logo Empresa 10">
            </a>
        </td>
        <td>
            <a href="https://www.schneider-electric.com" target="_blank">
                <img src="/img/logos/schneider.svg" alt="Logo Empresa 11">
            </a>
        </td>
        <td>
            <a href="https://www.hill.com" target="_blank">
                <img src="/img/logos/hill.svg" alt="Logo Empresa 12">
            </a>
        </td>
        <td>
            <a href="https://www.broseta.com" target="_blank">
                <img src="/img/logos/broseta.svg" alt="Logo Empresa 13">
            </a>
        </td>
    </tr>
</table>

    </div>

</body>
</html>
