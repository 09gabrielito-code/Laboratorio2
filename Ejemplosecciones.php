<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Estructura con Secciones Semánticas</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f0f2f5;
            color: #333;
        }

        header, nav, main, section, article, aside, footer {
            padding: 1.5em;
            margin: 0.8em;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border: none;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #fff;
            text-align: center;
        }

        header h1 {
            margin: 0 0 0.3em 0;
            font-size: 2.2em;
        }

        header p {
            margin: 0;
            font-size: 1.1em;
            opacity: 0.9;
        }

        nav {
            background-color: #ffffff;
            border-left: 6px solid #764ba2;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 1.5em;
            flex-wrap: wrap;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-weight: 600;
            padding: 0.5em 1em;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #764ba2;
            color: #fff;
        }

        main {
            background-color: transparent;
            box-shadow: none;
            padding: 0;
            margin: 0;
        }

        section {
            background-color: #ffffff;
            border-top: 5px solid #667eea;
        }

        section h2 {
            color: #667eea;
            margin-top: 0;
        }

        article {
            background-color: #f8faff;
            border-left: 4px solid #667eea;
            margin: 1em 0;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        article:hover {
            transform: translateX(5px);
            box-shadow: 0 6px 16px rgba(102, 126, 234, 0.2);
        }

        article h3 {
            color: #764ba2;
            margin-top: 0;
        }

        aside {
            background-color: #fff8dc;
            border-left: 6px solid #f0ad4e;
            border-radius: 12px;
        }

        aside h4 {
            color: #b8860b;
            margin-top: 0;
        }

        footer {
            background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);
            color: #ecf0f1;
            text-align: center;
            font-size: 0.95em;
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Diseño Web con HTML5 y CSS3</h1>
        <p>Aprendiendo HTML5 y CSS paso a paso</p>
    </header>

    <nav>
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#cursos">Cursos</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <main>

        <section id="cursos">
            <h2>Nuestros Cursos Disponibles</h2>
            <p>Aquí agrupamos información relacionada con la oferta académica de programación.</p>

            <article>
                <h3>Curso de Backend con PHP</h3>
                <p>Aprende a manejar bases de datos, lógica de servidores y frameworks modernos.</p>
            </article>

            <article>
                <h3>Curso de CSS Avanzado</h3>
                <p>Domina la cascada, especificidad, selectores y diseños responsivos.</p>
            </article>
        </section>

        <aside>
            <h4>Aviso Importante</h4>
            <p>HTML5 es la quinta y última versión del Lenguaje de Marcado de Hipertexto.</p>
        </aside>

    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Universidad Tecnológica de Panamá. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
