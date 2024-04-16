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
    <title>Arrays | PHP Beginner - Laracasts</title>
    <link
        rel="stylesheet"
        href="../../src/output.css"
    >
</head>

<body class="h-full">

    <main>

        <!-- ==================
            Arrays
        ======================= -->
        <section id='arrays'>

            <h2>Arrays</h2>

            <!------------------------------------------
               Ex-1: Array with foreach loop (longhand)
            -------------------------------------------->

            <p class='ex'>Ex-1:</p>
            <?php
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"
            ];
            ?>
            <ul>
                <?php
                foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
                ?>
            </ul>
            <!-- Prints:
                    . Do Androids Dream of Electric Sheep
                    . The Langoliers
                    . Hail Mary
             -->

            <!-----------------------------------------
               Ex-2: Array with foreach loop (shorthand)
            ------------------------------------------->
            <p class='ex'>Ex-2:</p>

            <ul>

                <?php

                foreach ($books as $book): ?>
                <li>
                    <?= $book ?>
                </li>

                <?php endforeach; ?>

            </ul>
            <!-- 
                Prints:
                    - Do Androids Dream of Electric Sheep
                    - The Langoliers
                    - Hail Mary
             -->

            <!--------------------------------------------------
               Ex-3: Get one item from array (No loop req)
            ---------------------------------------------------->
            <p class='ex'>Ex-3:</p>

            <p><?= $books[1] ?></p>
            <!-- 
                Prints:
                    - The Langoliers
             -->

            <?php

            $movies = [

                "Jaws",

                "Smokey and the Bandit",

                "Casablanca"

            ];

            echo "<h1>$movies[0]</h1>";

            echo "\n$movies[2]";

            echo "\n<h1>$movies[1]</h1>";

            ?>

            <!-- 

                Prints:
                    - Jaws (as h1)
                    - Casablanca (on new line)
                    - Smokey and the Bandit (on new line)

              -->

        </section>

        <!-- ====================================================
            Practice (Commit to memory (Jeffrey Way says so))
        ===================================================== -->
        <section id="practice">

            <!-- ============================================
        1. Check for homework under each video of series
        2. Arrays:
                - Longhand
                - Shorthand
                - Get 1 item of an array
        ===============================================-->

            <h2>Practice</h2>

            <h4>Conditional longhand</h4>

            <!-- Code goes Here  -->

            <br><br><br><br><br>



            <!-- ----------------------------------------- -->

            <h4>Conditional shorthand</h4>

            <!-- Code goes here -->

            <br><br><br><br><br>



            <!-- -------------------------------------------- -->

            <h4>Array with foreach loop (longhand)</h4>

            <!-- Code goes here -->
            <?php

            $fruit = [

                "Apples",

                "Oranges",

                "Pears"

            ]

                ?>

            <ul>

                <?php foreach ($fruit as $item) {

                    echo "<li>$item</li>";

                }

                ?>

            </ul>

            <!-- ------------------------------------- -->

            <h4>Array with foreach loop (shorthand)</h4>

            <!-- Code goes here -->

            <?php

            $cookies = [

                "Macadania",

                "Choc chip",

                "Almond"

            ]

                ?>

            <ul>

                <?php foreach ($cookies as $cookie): ?>

                    <li>

                        <?= $cookie ?>

                    </li>

                <?php endforeach ?>

            </ul>

            <!-- ------------------------------------- -->

            <h4>Get one item of an array</h4>

            <?php

            $movies = [

                "Jaws",

                "Smokey and the Bandit",

                "Casablanca"

            ];

            echo "<h1>$movies[0]</h1>";

            echo "\n$movies[2]";

            echo "\n<h1>$movies[1]</h1>";

            ?>

            <p><?= $movies[1] ?></p>

        </section>
    </main>

</body>

</html>