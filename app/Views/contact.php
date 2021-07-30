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
                        <label class="form__label" for="subject1">Reason For Writing</label>
                        <div class="form__select" id="">
                            <input type="text" name="" class="form__select--input" id="subject1" placeholder="Your Subject" readonly>
                            <object class="list__icon list__icon--checkout list__icon--md" data="/svg/Expand_down.svg" type="image/svg+xml">
                            </object>

                            <div class="form__options">
                                <ul class="form__options--list">
                                    <li data-key="0" class="form__options--item form__options--item__active" data-value="none">Your Subject</li>
                                    <li data-key="1" class="form__options--item" data-value="option 1">option 1</li>
                                    <li data-key="2" class="form__options--item" data-value="option 2">option 2</li>
                                    <li data-key="3" class="form__options--item" data-value="option 3">option 3</li>
                                </ul>
                            </div>
                        </div>
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