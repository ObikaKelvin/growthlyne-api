{% extends "base.php" %}

{% block title %}Contact Us{% endblock %}
{% block head %}
    {{ parent() }}
    
{% endblock %}

{% block content %}
    
    <section id="contact">
        <div class="container">
            <h1 class="heading__contact">Contact Us</h1>
            <p class="contact__text">Fill up the form and our Team will get back to you within 24 hours.</p>
            <div class="contact__main">
                <div class="contact__info">
                    <h4 class="contact__info--title">Contact Information</h4>
                    <p class="contact__info--sub">Fill up the form and our team will get back to you within 24 hours.</p>
                    <div class="contact__info--items">
                        <div class="contact__info--item">
                            <object class="contact__info--icon" data="/svg/telephone-icon.svg" type="image/svg+xml"></object>
                            <span class="contact__info--text"> *************** </span>
                        </div>

                        <div class="contact__info--item">
                            <object class="contact__info--icon" data="/svg/mail-icon.svg" type="image/svg+xml"></object>
                            <span class="contact__info--text">Breradigital@gmail.com</span>
                        </div>

                        <div class="contact__info--item">
                            <object class="contact__info--icon" data="/svg/location-icon.svg" type="image/svg+xml"></object>
                            <span class="contact__info--text">Zone 53, Street 784 , Building#7, Unit 1 Doha, PO.BOX: 93242 State of Qatar</span>
                        </div>
                    </div>

                    <object class="contact__info--footer" data="/svg/fax.svg" type="image/svg+xml"></object>

                </div>
                <form class="form__contact">
                    <div class="form__group">
                        <label class="form__label">Name</label>
                        <input type="text" class="form__input" placeholder="Your Name" name="name" id="name">
                    </div>

                    <div class="form__group">
                        <label class="form__label">E-Mail</label>
                        <input type="text" class="form__input" placeholder="Your Mail" name="email" id="email">
                    </div>

                    <div class="form__group">
                        <label class="form__label">Reason For Writing</label>
                        <select class="form__input form__select" placeholder="Your Subject" name="subject" id="subject">
                            <option value="option 1">Your Subject</option>
                            <option value="option 1">option 1</option>
                            <option value="option 1">option 1</option>
                        </select>
                    </div>

                    <div class="form__group">
                        <label class="form__label">Message</label>
                        <textarea name="message" class="form__input" id="message" cols="30" rows="8" placeholder="Your Message..."></textarea>
                    </div>

                    <input type="submit" value="Send Message" class="btn btn__form btn__form--contact">
                </form>
            </div>
        </div>
    </section>
        
{% endblock %}