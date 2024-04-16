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
    <title>My Notes | PHP Beginner - Laracasts</title>
</head>

<body class="h-full">

    <div class="min-h-full">

        <?php require ('../../views/partials/nav.php') ?>

        <header class="bg-white shadow">

            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <h1 class="text-3xl font-bold tracking-tight">My Notes</h1>

            </div>

        </header>

        <main>

            <!-- =============
                My notes
            ============== -->
            <section
                id='my-notes'
                class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8"
            >

                <h2>My Notes</h2>

                <!-----------------------
                    require & include
                ------------------------->
                <h3>Require and Include</h3>

                <ul>

                    <li>

                        <code>require</code> will produce a fatal error & stop the script.</code>

                    </li>

                    <li>

                        <code>include</code> will produce a warning & the script will continue.

                    </li>

                    <p>So better off using <code>require</code>, especially for security issues like when using a cms, ecommerce, auth, etc.</p>

                </ul>

                <!-------------------------------------
                    Display file contents in terminal
                --------------------------------------->
                <h3>Display php file contents in terminal</h3>

                <ul>

                    <li>In terminal type; 'php index.php' (or any php file name) without the quotes.</li>

                </ul>

            </section>

        </main>

</body>

</html>