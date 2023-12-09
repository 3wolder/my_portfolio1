<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo "$firstName $lastName - Portfolio"; ?></title>
</head>
<body>
    <header>
        <h1>Welcome to My Portfolio</h1>
    </header>

    <section class="content">
        <div class="profile">
            <img src="img/profile-pic.jpg" alt="Profile Picture" class="avatar">
            <!-- Удалено изображение 1-19.jpg -->
            <h2><?php echo "$firstName $lastName"; ?></h2>
            <p><?php echo "$age years old, $city"; ?></p>
        </div>

        <div class="about-me">
            <h3>About Me</h3>
            <p>Hi, I'm <?php echo "$firstName $lastName"; ?>. I'm a passionate web developer based in <?php echo $city; ?>.</p>
        </div>

        <div class="skills">
            <h3>Skills</h3>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <!-- Добавьте свои навыки по мере необходимости -->
            </ul>
        </div>

        <div class="knowledge">
            <h3>Knowledge Showcase</h3>
            <?php
            // Примеры различных операций и вывода данных
            $number = 42;
            $string = "Hello, World!";
            $isTrue = true;

            echo "<p>Number: $number</p>";
            echo "<p>String: $string</p>";
            echo "<p>Boolean: " . ($isTrue ? 'true' : 'false') . "</p>";
            ?>
        </div>
    </section>

    <footer>
        <p>Contact me at: john.doe@example.com</p>
    </footer>
</body>
</html>
