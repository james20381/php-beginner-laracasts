<!DOCTYPE html>
<html
    lang="en"
    class="h-full bg-gray-100"
>

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <link
        rel="stylesheet"
        href="../../src/output.css"
    >
    <title>Separate Logic from Template | PHP Beginner - Laracasts</title>
</head>

<body class="h-full">

    <!-- =============================
            Separate logic from the template
        ================================== -->
    <section id='separate-logic-from-template'>

        <h2>Separate logic from template</h2>

        <ul>

            <li>

                The only thing within the main index.php file which displays to the user is our core HTML and then whatever data we need to Echo or Loop over. All we've done so far is echo and loop, so we need to have variables.view.php, conditionals.view.php, etc with no variables.php or conditionals.php etc

            </li>

            <li>

                From within the index.php we write at the bottom of file; require "index.view.php;

            </li>

        </ul>




    </section>

</body>

</html>