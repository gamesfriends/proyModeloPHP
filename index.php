<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/main.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- Titles -->
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">

    <!-- Tables -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet"></head>

    <!-- Footer -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
<body>

    <header>
        <?php
            include('partials/navigation.html');
        ?>
    </header>
    
    <article class="about">
        <h1 class="titleHome">¿Quienes Somos?</h1>
        <p class="about-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci doloremque dolore perspiciatis temporibus repellendus mollitia dolorum facilis, cumque ad eius saepe, suscipit sunt fuga eligendi sapiente ducimus? Illo, provident minima.
        Sit perferendis amet, esse est ipsum totam repudiandae accusantium nemo exercitationem et iure voluptatum quo impedit neque iusto modi aut. Laboriosam magnam expedita earum unde blanditiis commodi, aliquid laudantium enim!
        Hic dolores saepe aliquid maiores adipisci minima harum possimus at sequi, nobis deserunt numquam fugit necessitatibus optio! Corporis dolorem voluptate eius culpa iure saepe, inventore officia assumenda vero alias quis.</p>
        <p class="about-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci doloremque dolore perspiciatis temporibus repellendus mollitia dolorum facilis, cumque ad eius saepe, suscipit sunt fuga eligendi sapiente ducimus? Illo, provident minima.
        Sit perferendis amet, esse est ipsum totam repudiandae accusantium nemo exercitationem et iure voluptatum quo impedit neque iusto modi aut. Laboriosam magnam expedita earum unde blanditiis commodi, aliquid laudantium enim!
        Hic dolores saepe aliquid maiores adipisci minima harum possimus at sequi, nobis deserunt numquam fugit necessitatibus optio! Corporis dolorem voluptate eius culpa iure saepe, inventore officia assumenda vero alias quis.</p>
    </article>

    <article class="clients">
        <h1 class="titleHome">Nuestros clientes</h1>
        <?php
            include('partials/tableHome.php');
        ?>
    </article>

    <footer>
        <?php
            include('partials/footer.html');
        ?>
    </footer>


</body>
</html>