<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asignar cita | Sistema de Gestión Odontológica</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 32px 16px;
            background: #f3f4f6;
            color: #1f2937;
            font-family: Arial, sans-serif;
        }

        main {
            width: min(100%, 720px);
            margin: 0 auto;
            padding: 32px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgb(15 23 42 / 10%);
        }

        h1 {
            margin: 0 0 8px;
            color: #1d4ed8;
        }

        .intro {
            margin: 0 0 24px;
            color: #4b5563;
        }

        .campos {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .campo {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .campo-completo {
            grid-column: 1 / -1;
        }

        label {
            font-weight: 600;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font: inherit;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #2563eb;
            outline: 2px solid #bfdbfe;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .acciones {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-top: 24px;
        }

        button {
            padding: 11px 18px;
            border: 0;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            cursor: pointer;
            font: inherit;
            font-weight: 600;
        }

        button:hover {
            background: #1d4ed8;
        }

        .volver {
            color: #1d4ed8;
        }

        .nota {
            margin: 18px 0 0;
            color: #6b7280;
            font-size: 0.9rem;
        }

        @media (max-width: 560px) {
            main {
                padding: 24px 18px;
            }

            .campos {
                grid-template-columns: 1fr;
            }

            .campo-completo {
                grid-column: auto;
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>Asignar una cita</h1>
        <p class="intro">Completa los datos del paciente y selecciona la fecha y hora de la cita.</p>

        <form method="post" onsubmit="event.preventDefault()">
            <div class="campos">
                <div class="campo campo-completo">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" name="nombre" autocomplete="name" required>
                </div>

                <div class="campo">
                    <label for="documento">Documento de identidad</label>
                    <input type="text" id="documento" name="documento" required>
                </div>

                <div class="campo">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" autocomplete="tel" required>
                </div>

                <div class="campo campo-completo">
                    <label for="correo">Correo electrónico (opcional)</label>
                    <input type="email" id="correo" name="correo" autocomplete="email">
                </div>

                <div class="campo">
                    <label for="fecha">Fecha de la cita</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>

                <div class="campo">
                    <label for="hora">Hora de la cita</label>
                    <input type="time" id="hora" name="hora" required>
                </div>

                <div class="campo campo-completo">
                    <label for="motivo">Motivo de la cita</label>
                    <select id="motivo" name="motivo" required>
                        <option value="">Selecciona una opción</option>
                        <option value="revision">Revisión</option>
                        <option value="limpieza">Limpieza dental</option>
                        <option value="dolor">Dolor o urgencia</option>
                        <option value="tratamiento">Continuar un tratamiento</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>

                <div class="campo campo-completo">
                    <label for="observaciones">Observaciones (opcional)</label>
                    <textarea id="observaciones" name="observaciones"></textarea>
                </div>
            </div>

            <div class="acciones">
                <button type="submit">Solicitar cita</button>
                <a class="volver" href="{{ url('/') }}">Volver al inicio</a>
            </div>
            <p class="nota">Formulario visual: todavía no envía ni guarda los datos.</p>
        </form>
    </main>
</body>
</html>
