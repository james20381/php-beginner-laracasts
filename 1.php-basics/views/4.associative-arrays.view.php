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
    <title>Associative Arrays | PHP Beginner - Laracasts</title>
</head>

<body class="h-full">

    <!-- ==================
            Associative arrays
        ======================= -->
    <section id='associative-arrays'>

        <h2>Associative arrays</h2>

        <!-- Data associated with an array item. For e.g; Book not only has title, it also has author, category, etc. So keys and their values are used. Associative arrays have keys and values -->

        <!-------------------------------------------
               Ex-1: Associative array with foreach loop
            --------------------------------------------->
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
            ]
        ]

            ?>

        <ul>

            <?php foreach ($books as $book): ?>

            <li>

                <a href="<?= $book['purchaseUrl'] ?>">

                    <?= $book['name'] ?> (
                    <?= $book['released'] ?>)

                </a>

                by
                <?= $book['author'] ?>

            </li>

            <?php endforeach ?>

        </ul>

    </section>

    <!-- ====================================================
            Practice (Commit to memory (Jeffrey Way says so))
        ===================================================== -->
    <section id="practice">

        <!-- ============================================
        1. Check for homework under each video of series
        2. Associative arrays
        ===============================================-->

        <h2>Practice</h2>

        <h4>Associative arrays</h4>

        <?php

        $clothes = [

            [
                "Brand" => "Country Road",

                "Color" => "Blue",

                "Size" => "Large"
            ],

            [

                "Brand" => "Icebreaker",

                "Color" => "Red",

                "Size" => "Medium"

            ],

            [

                "Brand" => "Rodd & Gunn",

                "Color" => "Navy Blue",

                "Size" => "Extra Large"

            ]

        ]

            ?>

        <h6 style="font-weight: bold; font-size: 1rem; margin-bottom: 0">Brand: </h6>

        <ul>

            <?php foreach ($clothes as $item): ?>

                <li><?= $item["Brand"] ?></li>

            <?php endforeach ?>

        </ul>

        <h6 style="font-weight: bold; font-size: 1rem; margin-bottom: 0">Color: </h6>

        <ul>

            <?php foreach ($clothes as $item): ?>

                <li>

                    <?= $item["Color"] ?>

                </li>

            <?php endforeach ?>

        </ul>
    </section>

</body>

</html>