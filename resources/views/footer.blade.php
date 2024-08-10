    <style>
        footer {
            background-color: #002244;
            color: white;
            padding: 40px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-column {
            flex: 1;
            margin: 0 10px;
        }

        .footer-column h3 {
            color: #e2001a;
            margin-bottom: 20px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: #e2001a;
        }

        .footer-column img {
            max-width: 40px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .social-icons {
            display: flex;
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            margin-right: 15px;
            font-size: 24px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #e2001a;
        }

        .footer-logo {
            text-align: right;
        }

        .footer-logo img {
            max-width: 150px;
        }

        .payment-methods {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

    </style>
    <footer id="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Contacto y Preguntas Frecuentes</h3>
                <ul>
                    <li>+ (34) 666 666 666</li>
                    <li><a href="#">Formulario de Contacto</a></li>
                    <li><a href="#">Preguntas Frecuentes</a></li>
                    <li><a href="#">Libro de Reclamaciones</a></li>
                    <li><a href="#">Conoce Nuestra Manera de Trabajar</a></li>
                </ul>
                <div class="payment-methods">
                    <img src="/img/logos/visa.svg" alt="Visa">
                    <img src="/img/logos/mastercard.svg" alt="Mastercard">
                    <img src="/img/logos/amex.svg" alt="Amex">
                    <img src="/img/logos/paypal.svg" alt="Paypal">
                </div>
            </div>

            <div class="footer-column">
                <h3>Nosotros</h3>
                <ul>
                    <li><a href="#">Categorías</a></li>
                    <li><a href="#">Novedades</a></li>
                    <li><a href="#">Ofertas</a></li>
                </ul>
                <h3>Servicios</h3>
            </div>

            <div class="footer-column">
                <h3>Proyectos</h3>
                <ul>
                    <li><a href="#">Calidades</a></li>
                    <li><a href="#">Revisiones</a></li>
                    <li><a href="#">Renovación</a></li>
                    <li><a href="#">Ventas</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Contacto</h3>
                <ul>
                    <li><a href="#">Formulario de Contacto</a></li>
                </ul>
                <h3>Redes</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="footer-logo">
                    <img src="impacta.png" alt="Impacta Logo">
                </div>
            </div>
        </div>
    </footer>
