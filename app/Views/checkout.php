{% extends "base.php" %}

{% block title %}Checkout{% endblock %}
{% block head %}
    {{ parent() }}
{% endblock %}

{% block content %}
    
<section id="section-checkout">
        
    <div class="container container__pad">

        <!-- start of hero section -->
       
        <div class="checkout__hero hero">
            <div class="checkout__hero--left">
                <p class="checkout__hero--text paragraph__md t--bold">It’s Time To Accelerate Your Freelance Success, Don’t You Think?</p>
                <p class="paragraph__md t--red">[Insert Name Of Your Course Here]</p>
            </div>
            <div class="checkout__hero--right">
                <picture>
                    <source media="(min-width:1440px)" srcset="pictures/hero-checkout.webp">
                    <source media="(min-width:768px)" srcset="pictures/hero-checkout.webp">
                    <source media="(min-width:568px)" srcset="pictures/hero-checkout-phone.webp">
                    <img class="checkout__hero--img" src="pictures/hero-checkout-phone.webp" alt="hero-img" loading="lazy">
                </picture>
            </div>
        </div>

        <!-- end of hero section -->

        <!-- start of checkout flex section -->

        <div class="checkout__flex">
    
            <!-- start of checkout flex left section -->
        
            <div class="checkout__flex--left">
                <h4 class="heading__checkout heading__checkout--sm heading__checkout--sm__1">Take a few moments to see what you’re getting before pulling the trigger and purchasing;</h4>
                <div class="list checkout__list">
                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">The master guide where you’ll discover the 5-steps that can transform your freelance life (it’s a detailed, comprehensive guide with all the necessary information that you need in order to implement my solid freelance success system.)</p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">Full access to premium ready-made templates, scripts, and more; you only have to fill in the blanks, and you’re good to go. </p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">Powerful strategies, methods, and tricks to land clients who are their weight on gold. Never deal with bad clients again, ever. </p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">The same blueprint that I use in my freelance business, and will enable you to charge much more for your services. </p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">How to scale and transform the way you do freelancing, plus, how to launch your own hyper-successful agency.  </p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">Round-the-clock, friendly support -- I’ll be there for you if you have questions. </p>
                    </div>

                    <div class="list__item list__item--checkout">
                        <img data-src="/svg/Subtract.svg" class="lozad list__icon list__icon--checkout list__icon--md" alt="list icon" srcset="">

                        <p class="list__content--checkout">The right to enjoy a no-quibbles, risk-removing 30-day money-back guarantee, if you’re not satisfied and excited about my exceptional roadmap, you get a refund. </p>
                    </div>
                </div>

                <div class="checkout-testimonial">
                    <h4 class="heading__checkout heading__checkout--sm t--left">And much, much more...</h4>

                    <div class="checkout-testimonial__card--container">
                        <div class="checkout-testimonial__card">
                            <div class="checkout-testimonial__card--left">
                                <img data-src="pictures/checkout-testimonial-user-2.webp" class="lozad checkout-testimonial__img" alt="user" srcset="">
                            </div>
                            <div class="checkout-testimonial__card--right">
                                
                                <div class="checkout-testimonial__card--header">
                                    <p class="paragraph__sm paragraph__sm--1 t--red">Sergio Romero</p>
                                    <object class="checkout-testimonial__card--icon" data="/svg/heart.svg" type="image/svg+xml"></object>
                                </div>

                                <div class="checkout-testimonial__card--body">
                                    <p> The system is fantastic to get clients and grow your network in a very organic way without being spammy. I know my business is going to change for the better if I do the work and step a little out of my comfort zone.</p>
                                </div>

                                <div class="checkout-testimonial__card--footer">
                                    <p>3hr</p>
                                    <p>Reply</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="checkout-testimonial__card--container">
                        <div class="checkout-testimonial__card">
                            <div class="checkout-testimonial__card--left">
                                <img data-src="pictures/checkout-testimonial-user.webp" class="lozad checkout-testimonial__img" alt="user" srcset="">
                            </div>
                            <div class="checkout-testimonial__card--right">
                                
                                <div class="checkout-testimonial__card--header">
                                    <p class="paragraph__sm paragraph__sm--1 t--red">Sergio Romero</p>
                                    <object class="checkout-testimonial__card--icon" data="/svg/heart.svg" type="image/svg+xml"></object>
                                </div>

                                <div class="checkout-testimonial__card--body">
                                    <p> The system is fantastic to get clients and grow your network in a very organic way without being spammy. I know my business is going to change for the better if I do the work and step a little out of my comfort zone.</p>
                                </div>

                                <div class="checkout-testimonial__card--footer">
                                    <p>3hr</p>
                                    <p>Reply</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card__guarantee">
                    
                    <div class="card__guarantee--container">
                        
                        <img data-src="/svg/NicePng_30-day-guarantee-png_3877949 1.svg" class="lozad card__guarantee--icon" alt="guarantee icon" >

                        <p class="card__guarantee--title">Money-Back-Guarantee</p>
                        
                        <p class="card__guarantee--body">If you don't see noticable results after completing the courses, I'll refund the cost, Just email</p>
                    </div>
                    
                    <div class="card__guarantee--container">
                        <img data-src="/svg/NicePng_30-day-guarantee-png_3877949 2.svg" class="lozad card__guarantee--icon" alt="guarantee icon" >

                        <p class="card__guarantee--title">Secure Processing</p>

                        <p class="card__guarantee--body">Each order is processed through a secure, 256-bit encrypted payment processing gateway to ensure your privacy.</p>
                    </div>
                </div>

            </div>

            <!-- end of checkout flex left section -->

            <!-- start of checkout flex right section -->

            <div class="checkout__flex--right">
                <form action="" class="form__billing">
                    <h4 class="heading__checkout heading__checkout--lg">Contact Information</h4>

                    <div class="form__row form__row--billing">
                       <div class="">
                            <div class="form__group">
                                <label class="form__billing--label" for="firstName">First Name</label>
                                <input type="firstName" id="firstName" class="form__billing--input" placeholder="John">
                            </div>
                       </div>
                       <div class="">
                            <div class="form__group">
                                <label class="form__billing--label" for="lastName">Last Name</label>
                                <input type="lastName" id="lastName" class="form__billing--input" placeholder="Doe">
                            </div>
                       </div>
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="email">Email Address</label>
                        <input type="email" id="email" class="form__billing--input__full form__billing--input" placeholder="J.Doe@example.co">
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="phone">Phone</label>
                        <input type="phone" id="phone" class="form__billing--input__full form__billing--input" placeholder="********************">
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="city">City</label>
                        <input type="city" id="city" class="form__billing--input__full form__billing--input">
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="state">State</label>
                        <input type="state" id="state" class="form__billing--input__full form__billing--input">
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="country">Country</label>
                        <input type="country" id="country" class="form__billing--input__full form__billing--input">
                    </div>

                    <div class="form__group form__group--checkout">
                        <label class="form__billing--label" for="zipCode">Zip Code</label>
                        <input type="zipCode" id="zipCode" class="form__billing--input__full form__billing--input">
                    </div>

                </form>

                <div class="payment">
                    <h4 class="heading__checkout heading__checkout--lg">Payment Option</h4>

                    <form action="" class="form__checkout">
                        <div class="card__payment">

                            <div class="card__payment--top">
                                
                                <div class="form__row">
                                    <div class="form__group--checkout__sm">
                                        <input type="radio" class="stripe" id="stripe" name="payment_method" value="stripe" checked>
                                        <label for="stripe" class="form__checkout--label form__checkout--label__sm">Credit Card(Stripe)</label>
                                    </div>

                                    <picture class="form__checkout--img">
                                        <source media="(min-width:1440px)" srcset="pictures/payment-types.webp">
                                        <source media="(min-width:768px)" srcset="pictures/payment-types.webp">
                                        <source media="(min-width:568px)" srcset="pictures/payment-types-phone.webp">
                                        <img class="form__checkout--img" src="pictures/payment-types-phone.webp" alt="payment-types" loading="lazy">
                                    </picture>
                                </div>

                            </div>

                            <div class="card__payment--middle">

                                <div class="form__group--checkout form__row">
                                    <label for="cardNo" class="form__checkout--label form__checkout--label__lg">Card Number</label>
                                    <input type="number" class="form__checkout--input" id="cardNumber" name="cardNumber" placeholder="4242 4242 4242 4242">
                                </div>

                                <div class="form__group--checkout form__row">
                                    <label for="cardNo" class="form__checkout--label form__checkout--label__lg">CVC Number</label>
                                    <input type="number" class="form__checkout--input" id="cvcNumber" name="cvcNumber" placeholder="123">
                                </div>

                                <div class="form__row">
                                    <label for="cardNo" class="form__checkout--label form__checkout--label__lg">Expires</label>
                                    <div class="form__row form__row--date">
                                        <div class="form__checkout--container">
                                            <input type="number" class="form__checkout--input form__checkout--month" id="month" name="month" placeholder="Month">
                                            <span class="form__checkout--icons">
                                                <object class="form__checkout--icon form__checkout--icons__up" data="/svg/polygon 1.svg" type="image/svg+xml"></object>
                                                <object class="form__checkout--icon form__checkout--icons__down" data="/svg/polygon 2.svg" type="image/svg+xml"></object>
                                            </span>
                                        </div>
                                        
                                        <div class="form__checkout--container">
                                            <input type="number" class="form__checkout--input form__checkout--year" id="year" name="year" placeholder="Year">
                                            <span class="form__checkout--icons">
                                                <object class="form__checkout--icon form__checkout--icons__up" data="/svg/polygon 1.svg" type="image/svg+xml"></object>
                                                <object class="form__checkout--icon form__checkout--icons__down" data="/svg/polygon 2.svg" type="image/svg+xml"></object>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card__payment--bottom">
                                <div class="form__row form__row--checkout">
                                    <div class="form__group--checkout__sm">
                                        <input type="radio" class="payPal" id="payPal" name="payment_method" value="paypal">
                                        <label for="payPal" class="form__checkout--label form__checkout--label__sm">PayPal</label>
                                    </div>

                                    <picture class="form__checkout--img">
                                        <source media="(min-width:1440px)" srcset="pictures/payment-types-paypal.webp">
                                        <source media="(min-width:768px)" srcset="pictures/payment-types-paypal.webp">
                                        <source media="(min-width:568px)" srcset="pictures/payment-types-paypal.webp">
                                        <img class="form__checkout--img" src="pictures/payment-types-paypal.webp" alt="payment-types" loading="lazy">
                                    </picture>
                                </div>
                            </div>

                            <div class="card__payment--sub">
                                <input type="submit" value="Complete Purchase" class="btn btn__md">
                                <p class="card__payment--text">
                                <object class="" data="/svg/lock.svg" type="image/svg+xml"></object>
                            100% Secure & Safe Payments 
                                </p>
                            </div>

                        </div>
    
                    </form>
                    
                </div>

            </div>

            <!-- start of checkout flex right section -->


        </div>

        <!-- end of checkout flex section -->


    </div>

</section>

        
{% endblock %}