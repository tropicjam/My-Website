<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devie-width, user-scalable=no initial-scale=0, minimum-scale=1.0">
    <meta htpp-equiv="X-UA-Compatitible" content="ie-edge">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/main.js">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@700&display=swap" rel="stylesheet"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Jamie Davies</title>
</head>
<body>

<header>
    <nav id="main-nav">
        <div class="logo-wrap">
            <img src="assets/img/profile.svg" alt="An illustration of a profile picture" height="50">
        </div>
        <div class="right-menu">
            <a href="#about-section">About me</a>
            <a href="#skills-section">Skills</a>
            <a href="#contact-section">Contact</a>
        </div>
    </nav>
</header>

<main>
    <section class="two-col-content-container" id="header-section">
        <div class="half-container">
            <div id="header-text-container">
                <h1>Jamie Davies</h1>
                <h2>Website Developer</h2>
            </div>
        </div>
        <div class="half-container">
            <img style="margin-left:auto;" src="assets/img/about-me.svg" alt="An illustration of a man and a large clipboard">
        </div>
    </section>
    <section class="full-width-section two-col-content-container" id="about-section">
        <section>
            <div class="one-third-col">
                <img class="hover-grow" src="assets/img/profile.svg" alt="A profile picture" height="250">
            </div>
            <div class="two-third-col">
                <div class="about-container">
                    <h2>About me</h2>
                    <h3>Hello, my name is Jamie.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porttitor vitae odio vitae eleifend. Morbi nec nibh rutrum, volutpat sem ut, convallis nulla. Phasellus hendrerit bibendum dui sit amet congue. Etiam maximus viverra erat, sit amet condimentum dui ullamcorper vitae. Praesent eu massa in ipsum faucibus aliquet vitae luctus erat. In tempor ligula at viverra placerat. In venenatis malesuada ipsum a maximus. Nam tincidunt, metus nec varius ultrices, nisi massa ultrices elit, in tempor risus lectus vitae dui.</p>
                </div> 
            </div>
        </section>
    </section>
    <section id="skills-section"> 
        <div class="one-quarter-col">
            <img class="hover-grow" src="assets/img/php-logo.png" alt="The PHP Logo">
        </div>
        <div class="one-quarter-col">
            <img class="hover-grow" src="assets/img/html5-logo.png" alt="The HTML5 Logo">
        </div>
        <div class="one-quarter-col">
            <h3 class="hover-grow">Javascript</h3>
        </div>
        <div class="one-quarter-col">
            <img class="hover-grow" src="assets/img/mysql-logo.png" alt="The MySQL Logo">
        </div>
    </section>
    <section class="full-width-section two-col-content-container" id="contact-section">
        <section>
            <div class="contact-wrapper">
                <div class="half-container">
                    <img style="" src="assets/img/contact.svg" alt="An illustration of a envelope and a person" height="200">
                    <h2 id="contact-title">Get in touch</h2>
                    <p>Happy to answer any questions you have.</p>
                </div>
                <div class="half-container">
                    <div class="form-wrapper">
                        <form action="" method="post">
                            <input placeholder="Name" type="text" name="name" id="email" required>
                            <input placeholder="Email address" type="text" name="email" id="email" required>
                            <button type="submit" name="submit">Get in touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>

<footer>
    <p>Jamie Davies 2021</p>
</footer>

</body>
</html>