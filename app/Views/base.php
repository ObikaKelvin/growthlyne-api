<!-- 
    This is the base layout for our views
 -->

<!DOCTYPE html>
<html lang="en">
    <head>
        {% block head %}
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <!-- load our custom css file asynchronously -->
            <link rel="preload" href="css/app.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <!--  preloading our fonts locally -->
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-Regular.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-SemiBold.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-Bold.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Bitter/Bitter-VariableFont_wght.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Lato/Lato-Regular.ttf" as="font" crossorigin="anonymous" />
            
            <!-- included a fallback to still load the ccs file incase the user has javascript disabled on their browser -->            
            <noscript><link rel="stylesheet" href="css/app.min.css"></noscript>
            
            <!-- setting up the title block to allow the current page to dynamically set it's title -->
            <title>{% block title %}{% endblock %} - Brera Solutions</title>

            <style>
                /* above the fold css */

                *,*::after,*::before{padding:0;margin:0;box-sizing:inherit}@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:400;src:url("/fonts/Source_Sans_Pro/SourceSansPro-Regular.ttf");font-display:swap}@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:600;src:url("/fonts/Source_Sans_Pro/SourceSansPro-SemiBold.ttf");font-display:swap}@font-face{font-family:'Source Sans Pro';font-style:normal;font-weight:700;src:url("/fonts/Source_Sans_Pro/SourceSansPro-Bold.ttf");font-display:swap}@font-face{font-family:'Lato';font-style:normal;font-weight:400;src:url("/fonts/Lato/Lato-Regular.ttf");font-display:swap}@font-face{font-family:'Bitter';font-style:normal;font-weight:700;src:url("/fonts/Bitter/Bitter-VariableFont_wght.ttf");font-display:swap}a{text-decoration:none;color:#FF0035;font-weight:700}.navbar{display:flex;justify-content:space-between;align-items:center}.navbar__logo{width:22.5rem;height:4.8rem}@media only screen and (max-width: 768px){.navbar__logo{width:17.2rem;height:3.7rem}}@media only screen and (max-width: 568px){.navbar__logo{width:12.0rem;height:2.5rem}}.navbar__menu{width:4.6rem;height:3.3rem}@media only screen and (max-width: 768px){.navbar__menu{width:3.5rem;height:2.4rem}}.navbar__list{height:100%;display:flex;align-items:center}.navbar__list>*:not(:last-child){margin-right:7.7rem}

            </style>
            
        {% endblock %}
    </head>
    <body>
        <!-- include header file -->
        {% include "partials/header.php" %}

        <!-- include the content of the current page -->

        <div id="content">{% block content %}{% endblock %}</div>
        
        <!-- include footer file -->
        
        <section id="footer__section">
            {% block footer %}
                {% include "partials/footer.php" %}
            {% endblock %}
        </section>

        <script src="js/app.min.js" defer></script>
    </body>
</html>