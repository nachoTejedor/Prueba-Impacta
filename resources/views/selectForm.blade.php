
    <style>
    
        .containerSelectForm {
            background-color: #e2001a;
            padding: 40px;
            border-radius: 10px;
            width: 600px;
        }

        .containerSelectForm h3 {
            margin-bottom: 20px;
            font-weight: normal;
            color: white;
        }

        .option-group {
            margin-bottom: 20px;
        }

        .option-group input[type="radio"] {
            display: none;
        }

        .option-group label {
            display: flex;
            align-items: center;
            background-color: #c30018;
            padding: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .option-group label:hover {
            background-color: #b00014;
        }

        .option-group input[type="radio"]:checked + label {
            background-color: #ffffff;
            color: #e2001a;
            border: 2px solid #e2001a;
        }

        .option-group label span {
            margin-left: 10px;
            font-size: 16px;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.5);
        }

        .checkbox-group label {
            font-size: 14px;
        }

        .submit-btn {
            background-color: #ffcc00;
            color: #e2001a;
            padding: 15px;
            width: 100%;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #ffdb4d;
        }

    </style>
    <div class="containerSelectForm">
        <h3>SELECCIONA SOLO UN RESULTADO</h3>
        <div class="option-group">
            <input type="radio" id="option1" name="result" value="feliz">
            <label for="option1">
                <span>Quiero ser feliz</span>
            </label>
        </div>
        <div class="option-group">
            <input type="radio" id="option2" name="result" value="rico">
            <label for="option2">
                <span>Quiero ser rico</span>
            </label>
        </div>
        <div class="option-group">
            <input type="radio" id="option3" name="result" value="avion">
            <label for="option3">
                <span>Quiero ser un avión</span>
            </label>
        </div>
        <div class="option-group">
            <input type="radio" id="option4" name="result" value="dormir">
            <label for="option4">
                <span>Quiero dormir todo el día</span>
            </label>
        </div>
        <div class="checkbox-group">
            <input type="checkbox" id="privacy" required>
            <label for="privacy">He leído y acepto el aviso legal y la política de privacidad</label>
            <button class="submit-btn">ENVIAR MENSAJE</button>
        </div>
        <button class="submit-btn">ENVIAR MENSAJE</button>
    </div>