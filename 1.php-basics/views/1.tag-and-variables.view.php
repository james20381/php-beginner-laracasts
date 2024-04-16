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
    <title>Tag & Variables | PHP Beginner - Laracasts</title>
    <link
        rel="stylesheet"
        href="../../src/output.css"
    >
</head>

<body class="h-full">

    <div class="min-h-full">

        <?php require ('../../views/partials/nav.php') ?>

        <header class="bg-white shadow">

            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <h1 class="text-3xl font-bold tracking-tight text-gray-900">PHP Tag & Variables</h1>

            </div>

        </header>

        <main>

            <section
                id='php-tag-and-variables'
                class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8"
            >

            <!------------------------------
                Ex-1: Echo data to webpage 
            -------------------------------->
                <p>

                    <span class="ex">Ex-1:</span>

                    <?php

                    echo "Hello world";

                    echo "\nline 2"; # ?/n not working? codecademy
                    
                    echo "<br>line 2";

                    echo "<br><h1>line 3</h1>";

                    /*

                        Prints:

                            - Hello world

                            - line 2 (\n does'nt work but)

                            - line 2

                            - line 3 (as an h1)

                    */

                    ?>

                </p>

                <br />

                <!----------------------------------------------------------- 
                Ex-2: Echo data to webpage using variable & concatenation 
            -------------------------------------------------------------->
                <p>

                    <span class="ex">Ex-2:</span>

                    <?php

                    $greeting = "Hi";

                    echo $greeting . " " . "world";

                    /*

                        Prints:

                            - Hi world

                    */

                    ?>

                </p>

                <br />

                <!------------------------------------------------------------------- 
                Ex-3: Echo data to webpage using double quotes, no concatenation 
            ---------------------------------------------------------------------->
                <p>

                    <span class="ex">Ex-3:</span>

                    <?php

                    echo "$greeting world"; # To evaluate a variable within a string you need double quotes, not single.
                    
                    /*

                        Prints:

                            - Hi world

                    */

                    ?>

                </p>

                <br />

                <!------------------------------------------------------------------- 
                Ex-4: Echo data to webpage by inserting variable into a html tag 
            --------------------------------------------------------------------->
                <p>

                    <span class="ex">Ex-4:</span>

                    <?php

                    $verb = "jumped"

                        ?>

                    The quick brown fox
                    <?php echo $verb; ?> over the lazy brown dog.

                    <!-- 

                    Prints:

                        - The quick brown fox jumped over the lazy brown dog.

                 -->

                </p>

                <br />

                <!---------------------------------------------------------------
                Ex-1: Echo data to webpage using html tags inside the string 
            ----------------------------------------------------------------->
                <p class='ex'>Ex-5:</p>

                <?php echo "<h1>This is a one line heading echoed with h1 tags inside the quotes.</h1>"; ?>

                <!--

                Prints:

                    - This is a one line heading echoed with h1 tags inside the quotes (as an h1)

             -->

            </section>

        </main>

    </div>

</body>

</html>