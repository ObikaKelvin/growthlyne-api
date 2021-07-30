<!DOCTYPE html>
<html lang="en">
    <head>
        {% block head %}
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- <link rel="stylesheet" href="css/app.min.css" /> -->
            <link rel="preload" href="css/app.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-Regular.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-SemiBold.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Source_Sans_Pro/SourceSansPro-Bold.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Bitter/Bitter-VariableFont_wght.ttf" as="font" crossorigin="anonymous" />
            <link rel="preload" href="/fonts/Lato/Lato-Regular.ttf" as="font" crossorigin="anonymous" />
            
            <noscript><link rel="stylesheet" href="css/app.min.css"></noscript>
            <title>{% block title %}{% endblock %} - Brera Solutions</title>
            
        {% endblock %}
    </head>
    <body>
        {% include "partials/header.php" %}

        <div id="content">{% block content %}{% endblock %}</div>
        <section id="footer__section">
            {% block footer %}
                {% include "partials/footer.php" %}
            {% endblock %}
        </section>

        <script src="js/app.js"></script>

    </body>
</html>