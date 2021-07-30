{% extends "base.php" %}

{% block title %}Home{% endblock %}
{% block head %}
    {{ parent() }}
    <style>
        /* above the fold css */

        .hero{display:flex}.hero__badge{padding:1rem 7.2rem;background-color:#232a3f;color:#fff;border-radius:5rem;font-size:1.8rem;font-weight:600;max-width:60.8rem;text-align:center;margin-bottom:4rem}@media only screen and (max-width:768px){.hero__badge{font-size:1.6rem}}@media only screen and (max-width:568px){.hero__badge{font-size:1.8rem;padding:1rem 2.2rem}}.hero__right{position:absolute;right:0;height:54rem}@media only screen and (max-width:768px){.hero__right{position:relative;height:41.2rem}}.hero__left--index{width:42.8rem}@media only screen and (max-width:768px){.hero__left--index{width:100%;margin-bottom:6.2rem}}@media only screen and (max-width:568px){.hero__left--index{width:52rem}}.hero__text--index{font-size:3.2rem;font-weight:600;width:39.3rem;color:#121212;height:12.8rem}@media only screen and (max-width:768px){.hero__text--index{height:auto;width:100%}}@media only screen and (max-width:568px){.hero__text--index{font-size:3rem;line-height:3rem;width:50.4rem;height:auto;text-align:left}}.hero__img--index{position:absolute;width:83.4rem;height:64.2rem;right:0;top:-6rem}@media only screen and (max-width:768px){.hero__img--index{position:relative;top:0;right:0;width:56rem;height:42.7rem}}@media only screen and (max-width:568px){.hero__img--index{width:43.9rem;height:33.1rem}}@media only screen and (max-width:768px){.hero{flex-direction:column;justify-content:center;align-items:center}}


    </style>
{% endblock %}

{% block content %}
    
    <section id="hero-section-index">
        <div class="container">
            <div class="hero">
                <div class="hero__left--index">
                    <h1 class="heading heading__main heading__index"> How you can get more clients, <span class="text__red--bold">get paid better</span> and accelerate your <span class="text__red--bold">freelance success!</span> </h1>
                    <p class="hero__text--index"> The Roadmap To A Highly Rewarding, Easy-To-Run And Sustainable Freelance Business.</p>
                </div>
                <div class="hero__right">
                    <picture>
                        <source media="(min-width:1440px)" srcset="pictures/home-hero.webp">
                        <source media="(min-width:768px)" srcset="pictures/home-hero-tab.webp">
                        <source media="(min-width:568px)" srcset="pictures/home-hero-phone.webp">
                        <img class="hero__img--index" src="pictures/home-hero.webp" alt="hero-img" >
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="offer-section offer-section-index">

        <picture class="offer__img">
            <source media="(min-width:1440px)" srcset="pictures/white-map.webp">
            <source media="(min-width:768px)" srcset="pictures/white-map-tab.webp">
            <source media="(min-width:568px)" srcset="pictures/white-map-phone.webp">
            <source media="(max-width:568px)" srcset="pictures/white-map-phone.webp">
            <img src="pictures/white-map.webp" alt="white-map" >
        </picture>

        <div class="container">
            <div class="offer">
                <div class="offer__item">
                    <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                    <div class="offer__text">
                        <span class="paragraph__md paragraph__md--1"> <span class="text__white--bold">One Of The Most Pressing Problems For Freelancers Who Already </span> <span class="paragraph__md paragraph__md--1"> Have Some Sucess Is The Ability To Scale And Reach New Heights. </span></span>
                    </div>
                </div>
                <div class="offer__item">
                    <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                    <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> They Usually Are Stuck In The Same Place, Landing Projects But <span class="text__white--bold">Usually Not Getting Paid What They Want And Dealing With Annoying Clients Who Want Everything For Nothing. </span> </span>
                    </div>
                </div>

                <div class="offer__item">
                    <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                    <div class="offer__text">
                        <span class="paragraph__md paragraph__md--1"> <span class="text__white--bold">Plus, They Spend Tons Of Time Grinding Hard In Their Den -- </span> <span class="paragraph__md paragraph__md--1"> Without Time To Also Enjoy Life And Do Things That Make Them "Tick". </span></span>
                    </div>
                </div>

                <div class="offer__item">
                    <span class="text__center offer__text"> <span class="text__red">Today You’ll Discover A Simple 5-Step Process To Find Easy-To-Work-With</span> <span> high-paying clients so you can scale your freelance business and reach the top. </span>
                </div>

                <div class="offer__item">
                    <span class="text__center offer__text"> And that’s only the beginning.</span>
                </div>
                
                <div class="offer__item">
                    <div class="offer__btn"><a href="#" class="btn btn__lg ">Click Here To Get Started Now</a></div>
                </div>
                <p class="offer__text--sm">30-Day Money-Back Guarantee.</p>
            </div>
        </div>
    </section>

    
    <section class="offer-section-white offer-section offer-section-index">
        <div class="container">
            <h2 class="heading heading__offer heading__offer--md"><span class="text__red">[Insert Name Of Your Course Here]</span></h2>
            <h2 class="heading heading__offer heading__offer--sm text__center">An In-Depth, Insightful Freelancing Course That Will Accelerate <span class="text__red">Your Success In 5 Easy</span> And Simple Steps</h2>
        </div>

        <picture class="lozad offer__img--1">
            <source media="(min-width:1440px)" srcset="pictures/screens-img.webp">
            <source media="(min-width:768px)" srcset="pictures/screens-img-tab.webp">
            <source media="(min-width:568px)" srcset="pictures/screens-img-phone.webp">
            <source media="(max-width:568px)" srcset="pictures/screens-img-phone.webp">
        </picture>
        
        <div class="container">
            <!-- <p class="heading heading__offer heading__offer--md text__left">Discover how you can implement the <span class="text__red">five stages</span> of ever-lasting, profitable freelance success</p> -->

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">Discover How You Can Implement The Five Stages Of Ever-Lasting, Profitable Freelance Success:</span> Planning, Skill Acquisition, Portfolio Building, Launching, Acceleration, And Scaling. </span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">Never Worry About Not Getting As Many Clients As You Want --</span> I’ll Take You By The Hand And Reveal My Proven Secrets To Dominate Freelancing Platforms And Get Tons Of Clients Every Month. </span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">How To Charge Much More For Your Services So That You Can Increase Your Bottom Line And Make More Money</span> For The Same Effort (No More Selling Yourself Short).</span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">Build A Powerful And Results-Inducing Marketing System That Will Generate High-Quality Clients On Complete Autopilot</span> (You’ll Grow Your Freelance Business By Leaps And Bounds). </span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">My Unique Method To Writing Compelling Proposals, Cold Emails, And Any Copy --</span> Plus, You’ll Get Effective Ready-Made Templates, Case Studies, Real-Life Examples, And Much, Much More! </span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Subtract.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1"> <span class="text__black">The Fastest Way To Quickly Learn Any Valuable Skill That Will Bring Profits To Your Freelance Business -- Let Me Show You How You Can Become</span> A “skill-Machine” And Build A 5-Star Portfolio That Will WOW Your Clients. </span>
                </div>
            </div>

            <span class="t--red">I am red</span>

            <div class="offer__item">
                <div class="offer__btn"><a href="#" class="btn btn__lg ">Click Here To Get Started Now</a></div>
            </div>
            <div class="offer__item margin__bg">
                <p class="offer__text--sm text__black--bold">30-Day Money-Back Guarantee.</p>
            </div>
        </div>

        <h2 class="heading heading__offer--md text__center">Our Happy Clients</h2>
        <p class="paragraph__md paragraph__md--1 text__center"><span class="text__red--bold">What They Say About Us</span> </p>

        <div class="offer__testimonial">
            
            <div class="card__testimonial">
                    <p class="heading heading__card">“</p>
                <div class="card__testimonial--body">
                    <p class="card__text">The company explicitly states that it will remove any reviews that don’t comply with a certain set of guidelines.</p>
                    <img class="lozad card__testimonial--rating" data-src="/svg/stars.svg" data-alt="ratings">
                </div>
                <div class="card__testimonial--footer">

                    <picture class="lozad card__testimonial--img">
                        <source media="(min-width:1440px)" srcset="pictures/testimonial-3.webp">
                        <source media="(min-width:768px)" srcset="pictures/testimonial-3.webp">
                        <source media="(min-width:568px)" srcset="pictures/testimonial-3.webp">
                        <source media="(max-width:568px)" srcset="pictures/testimonial-3.webp">
                    </picture>

                    <h4 class="card__testimonial--name">Name</h4>
                    <h4 class="card__testimonial--company">Company Name</h4>
                </div>
            </div>

            <div class="card__testimonial">
                    <p class="heading heading__card">“</p>
                <div class="card__testimonial--body">
                    <p class="card__text">The company explicitly states that it will remove any reviews that don’t comply with a certain set of guidelines.</p>
                    <img class="lozad card__testimonial--rating" data-src="/svg/stars.svg" data-alt="ratings">
                </div>
                <div class="card__testimonial--footer">
                    
                    <picture class="lozad card__testimonial--img">
                        <source media="(min-width:1440px)" srcset="pictures/testimonial-2.webp">
                        <source media="(min-width:768px)" srcset="pictures/testimonial-2.webp">
                        <source media="(min-width:568px)" srcset="pictures/testimonial-2.webp">
                        <source media="(max-width:568px)" srcset="pictures/testimonial-2.webp">
                    </picture>
                    
                    <h4 class="card__testimonial--name">Name</h4>
                    <h4 class="card__testimonial--company">Company Name</h4>
                </div>
            </div>

            <div class="card__testimonial">
                    <p class="heading heading__card">“</p>
                <div class="card__testimonial--body">
                    <p class="card__text">The company explicitly states that it will remove any reviews that don’t comply with a certain set of guidelines.</p>
                    <img class="lozad card__testimonial--rating" data-src="/svg/stars.svg" data-alt="ratings">
                </div>
                <div class="card__testimonial--footer">
                    
                    <picture class="lozad card__testimonial--img">
                        <source media="(min-width:1440px)" srcset="pictures/testimonial-1.webp">
                        <source media="(min-width:768px)" srcset="pictures/testimonial-1.webp">
                        <source media="(min-width:568px)" srcset="pictures/testimonial-1.webp">
                        <source media="(max-width:568px)" srcset="pictures/testimonial-1.webp">
                    </picture>
                    
                    <h4 class="card__testimonial--name">Name</h4>
                    <h4 class="card__testimonial--company">Company Name</h4>
                </div>
                
            </div>
        </div>

    </section>

    <section class="offer-section offer-section-index">
        <div class="container">
            <h1 class="heading heading__offer heading__offer--md heading__offer--wd"> <span class="hero__phone">A Unique And</span> Never-Seen-Before Approach That’s Going To Catapult You To Where You Want To Be</h1>
            
            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Bullet.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1">There’s no need to do things the old-fashioned way and constantly struggle with low-quality clients who aren’t grateful for your work.</span>
                </div>
            </div>

            <div class="offer__item">
                <img class="lozad offer__item--icon" data-src="/svg/Bullet.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1">In the same way, there’s no point in slaving away in front of your computer for a mediocre income... (who wants that, anyway?)</span>
                </div>
            </div>

            <div class="offer__item margin__bg">
                <img class="lozad offer__item--icon" data-src="/svg/Bullet.svg" class="offer__item--icon" data-alt="list icon">
                <div class="offer__text">
                    <span class="paragraph__md paragraph__md--1">Today you have the chance to discover an effective 5-step process that will change everything for you (and for your freelance business.)</span>
                </div>
            </div>

            <h1 class="heading heading__offer heading__offer--md">More Clients, More Time, More Freedom, And The Possibility Of Finally Enjoying Financial Freedom Once And For All.</h1>

            <div class="offer__item">
                <p class="text__white--bold text__center offer__text text__bitter--md">I know this because I trust my own business with this system.</p>
            </div>

            <div class="offer__item">
                <p class="text__white--bold text__center offer__text text__bitter--md">In fact, as long as they’re determined, absolutely everyone can do this. No matter their background.</p>
            </div>

            <div class="offer__item">
                <p class="text__white--bold text__center offer__text text__bitter--md">Remember, I Made Sure That You Can Follow The Five Steps With Clear Instructions That Completely Remove The Guesswork Out Of The Equation -- You Can Put Into Action Everything Without Confusion.</p>
            </div>

            <div class="offer__item">
                <p class="offer__text offer__text--footer text__white--bold text__center text__bitter--sm"> <span class="text__red--bold">[Insert Name Of Your Course Here]</span> Is The Definitive Freelancing Success Acceleration Blueprint That Will Take You Right Where You Want To Be, At The Top Of Your Freelancing Career!</p>
            </div>

            <div class="offer__item">
                <div class="offer__btn"><a href="#" class="btn btn__lg "> Get Instant Access </a></div>
            </div>

        </div>
    </section>
        
{% endblock %}