{% extends "base.php" %}

{% block title %}Login{% endblock %}
{% block head %}
    {{ parent() }}
    
{% endblock %}

{% block content %}
    
    <section id="login">
        <div class="container">
            <h1 class="heading__contact">Welcome</h1>
            <p class="login__text">Enter your info below to login.</p>
            <div class="login__main">
                <picture>
                    <source media="(min-width:1440px)" srcset="pictures/login-img.webp">
                    <source media="(min-width:768px)" srcset="pictures/login-img-tab.webp">
                    <source media="(min-width:568px)" srcset="pictures/login-img-phone.webp">
                    <img class="login__img" src="pictures/login-img.webp" alt="login-img" loading="lazy">
                </picture>
                
                <form class="form__login">
                    
                    <div class="form__group">
                        <label class="form__label">E-Mail</label>
                        <input type="text" class="form__input" placeholder="Your Mail" name="email" id="email">
                    </div>

                    <div class="form__group">
                        <label class="form__label">Password</label>
                        <input type="text" class="form__input" placeholder="Your Password" name="password" id="password">
                    </div>

                    <div class="form__options">
                        <div class="form__row">
                            <div class="form__row">
                                <label for="remember_me">
                                    <input type="checkbox" name="remember_me" id="remember_me" class="form__checkdefault" checked>
                                    <span type="checkbox" class="form__checkbox"></span>
                                    Remember me
                                </label>

                            </div>
                            <a href="#" target="_blank" rel="noopener noreferrer">Forget password?</a>
                        </div>

                    </div>

                    <input type="submit" value="Login" class="btn btn__form btn__form--login">
                </form>
            </div>
        </div>
    </section>
        
{% endblock %}