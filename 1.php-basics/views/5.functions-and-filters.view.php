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
    <link rel="stylesheet" href="../../src/output.css">
    <title>Functions & Filters | PHP Beginner - Laracasts</title>
</head>

<body class="h-full">

    <!-- ========================
            Functions & Filters
        ======================= -->
    <section id='functions-and-filters'>

        <h2>Functions & Filters</h2>

        <!-- Functions and filters info here _ _ _ _ _ _ _ _ -->

        <!----------------------------------------------------------------------
               Ex-1: Filter only books by Andy Weir (Andy Weir hardcoded into loop)
            ------------------------------------------------------------------------->
        <?php

        $books = [
            [

                "name" => "Do Androids Dream of Electric Sheep",

                "released" => 1999,

                "author" => "Philip K. Dick",

                "purchaseUrl" => "https://example.com"

            ],

            [

                "name" => "Project Hail Mary",

                "released" => 2010,

                "author" => "Andy Weir",

                "purchaseUrl" => "https://example.com"

            ],

            [

                "name" => "The Martian",

                "released" => 2011,

                "author" => "Andy Weir",

                "purchaseUrl" => "https://example.com"

            ]
        ]

            ?>

        <ul>

            <?php foreach ($books as $book): ?>

            <!-- Alternative conditional syntax -->
                <?php if ($book["author"] === "Andy Weir"): ?>

                    <li>

                        <a href="<?= $book['purchaseUrl'] ?>">

                            <?= $book['name'] ?> (<?= $book['released'] ?>) - by <?= $book['author'] ?>

                        </a>

                        <!-- by <?= $book['author'] ?> -->

                    </li>

                <?php endif ?>

            <?php endforeach ?>

        </ul>

        <!-----------------------------------------------------------------------------------------------------------
               Ex-1: Filter only books by Andy Weir using a function so it's automatic, rather than hardcoding Andy Weir
            --------------------------------------------------------------------------------------------------------------->

    </section>

</body>

</html>