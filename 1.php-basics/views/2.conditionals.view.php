<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>Conditionals | PHP Beginner - Laracasts</title>
    <link
        rel="stylesheet"
        href="../../src/output.css"
    >
</head>

<body class="h-full">

    <main>

        <!-- ==================
            Conditionals
        ======================= -->
        <section id='conditionals'>

            <h2>Conditionals</h2>

            <!--------------------------- 
                Ex-1: If statement 
            ----------------------------->
            <?php

            # $message is undefined variable. Since $open is false, php doesn't do anything. The $message variable is not created, it is undefined.
            $takeAway = "Subway";
            $open = false;

            if ($open) {
                $decision = "Let's go to $takeAway";
            }

            ?>

            <p>
                <span class='ex'>Ex-1:</span>
                <?php echo $decision; ?>
            </p>
            <!-- 
                        Prints:
                            - Warning: Undefined variable '$decision'
                    -->

            <!--------------------------- 
                    Ex-2: If/else statement 
                ----------------------------->
            <?php

            $bookName = "'Dark Matter'";
            $read = true;

            if ($read) {
                $message = "You have read $bookName";
            } else {
                $message = "You have not read $bookName";
            }

            ?>

            <p>
                <span class='ex'>Ex-2:</span>
                <!-- If only echoing; use shorthand php tag, note omitted semi-colon -->
                <?= $message ?>
            </p>
            <!-- 
                    Prints:
                        - You have read 'Dark Matter'
                -->

            <!------------------------------- 
                Ex-3: Conditional (shorthand)
                --------------------------------->

            <?php

            $autumn = true;

            $message = ($autumn) ? "It's getting colder" : "It's not getting colder";

            ?>

            <p>

                <span class="ex">Ex-3:</span>

                <?= $message ?>

            </p>

            <!-- 

                    Prints:

                        - It's getting colder

                -->

            <!----------------------------------------------------------------
                Ex-4: Conditional (shorthand) alternative with array & filter
                ------------------------------------------------------------------->

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

                <?php if ($book["author"] === "Andy Weir"): ?>

                <a href="<?= $book["purchaseUrl"] ?>">

                    <li>

                        <?= $book["name"] ?> (
                        <?= $book["author"] ?>) - by
                        <?= $book['author'] ?>

                    </li>

                </a>

                <?php endif ?>

                <?php endforeach ?>

            </ul>

        </section>

        <!-- ====================================================
            Practice (Commit to memory (Jeffrey Way says so))
        ===================================================== -->
        <section id="practice">

            <!-- ============================================
        1. Check for homework under each video of series
        2. Conditionals:
                - Longhand
                - Shorthand
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

            <h4>Alternative conditional shorthand</h4>

            <!-- Code goes here -->

            <br><br><br><br><br>





            <!-- ------------------------------------------- -->

            <!-- 

                     Practicing PHP conditionals is essential for mastering control flow and decision-making in your code. Here are some ideas for practicing PHP conditionals:

1. **User Authentication**: Create a simple user authentication system where users need to enter a username and password. Use conditionals to check if the entered credentials match the stored ones.

2. **Grade Calculator**: Write a program that takes a student's score as input and outputs their grade (A, B, C, etc.) based on certain score ranges. Use conditionals to determine the grade.

3. **Shopping Cart Discount**: Implement a shopping cart system where users can add items to their cart. Apply discounts based on the total price of the items. Use conditionals to check if the total price qualifies for a discount and calculate the final price accordingly.

4. **Weather App**: Create a simple weather application that takes the current temperature as input and outputs a message based on the temperature range (e.g., "It's cold", "It's moderate", "It's hot"). Use conditionals to determine the message.

5. **Membership Status**: Develop a program that checks a user's membership status (e.g., Gold, Silver, Bronze) based on their purchase history or subscription level. Use conditionals to determine the membership status.

6. **Traffic Light Simulator**: Simulate a traffic light system with red, yellow, and green lights. Use conditionals to switch the lights based on a predetermined sequence or user input.

7. **BMI Calculator**: Create a BMI (Body Mass Index) calculator that takes a person's height and weight as input and outputs their BMI category (underweight, normal weight, overweight, obese). Use conditionals to determine the BMI category.

8. **Rock, Paper, Scissors Game**: Develop a simple Rock, Paper, Scissors game where users can play against the computer. Use conditionals to determine the winner based on the choices made by the player and the computer.

9. **Quiz App**: Build a quiz application where users answer multiple-choice questions. Use conditionals to check if the user's answers are correct and calculate their final score.

10. **Voting Eligibility Checker**: Write a program that checks if a person is eligible to vote based on their age. Use conditionals to determine if the person meets the minimum voting age requirement.

These are just a few ideas to get you started. Feel free to modify or combine them to create more complex scenarios for practicing PHP conditionals.

                -->
        </section>

    </main>

</body>

</html>