<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>

@include("viewWeb.elements.head")

<body class='employers_search_companies' data-env='production'>
    <!-- Google Tag Manager -->
    <noscript>
        <iframe height='0' src='/www.googletagmanager.com/ns.html_1151319734.jpg' style='display:none;visibility:hidden' width='0'></iframe>
    </noscript>
    <div id='container'>
        <div class='pageHeader'>
            @include("viewWeb.elements.page-header")
        </div>
        <div class='hidden-xs' id='scrolltop'>
            <div class='top-arrow'></div>
        </div>
        <div class='hidden-xs hidden-sm' id='feedback'>
            <a href='https://itviec.uservoice.com/forums/207426-general/filters/new' class='uservoice_link' target='_blank'>FEEDBACK</a>
        </div>

        <h1 class='slogan'>
        7,013 Company Reviews for You
        <span class='in-title'>
        What are people saying about your company? Find out now!
        </span>
        </h1>
        <div class='search-form-wrapper clearfix'>
            <form id="search_companies_form" class="search-form" action="/companies" accept-charset="UTF-8" method="get">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <div class='search_section_wrapper'>
                    <div class='search_text_wrapper'>
                        <div class='ion-ios-search'></div>
                        <div class='search_field_wrapper'>
                            <input type="text" name="query" id="search_companies_text" value="" class="search_text hide" />
                        </div>
                    </div>
                </div>
                <div class='search_button_wrapper'>
                    <input type="submit" name="commit" value="Search" class="search_button button-red left" data-disable-with="Search" />
                </div>
            </form>

        </div>

        <div id='company-home-page'>
            <div class='featured-companies' data-controller='popular-companies' data-popular-companies-city='' data-popular-companies-count='6' data-popular-companies-url='/api/v1/employers/most-popular'>
                <div class='title'>Companies Hiring Now</div>
                <div class='subtitle'>
                    <div class='sort-by'>
                        <span>Sort by:</span>
                        <div class='sort-by__group'>
                            <a class='sort-by__link' data-action='popular-companies#filterByCity' data-city='Ho Chi Minh' data-target='popular-companies.sortLink'>Ho Chi Minh</a>
                            <span class='sort-by__divider'>|</span>
                            <a class='sort-by__link' data-action='popular-companies#filterByCity' data-city='Ha Noi' data-target='popular-companies.sortLink'>Ha Noi</a>
                            <span class='sort-by__divider'>|</span>
                            <a class='sort-by__link' data-action='popular-companies#filterByCity' data-city='Da Nang' data-target='popular-companies.sortLink'>Da Nang</a>
                            <span class='sort-by__divider'>|</span>
                            <a class='sort-by__link active' data-action='popular-companies#filterByCity' data-city='' data-target='popular-companies.sortLink'>All</a>
                        </div>
                    </div>
                </div>
                <div class='companies' data-target='popular-companies.body'>
                    <a class="featured-company" target="_blank" href="/companies/evolable-asia">
                        <div class='company__banner'>
                            <img width="326" height="160" alt="Evolable Asia Headline Photo" src="https://cdn.itviec.com/photos/16/processed_headline_photo/evolable-asia-headline_photo.png?BmS8YwtFg8oWhgzar2vwtgv6" />
                        </div>
                        <div class='company__info'>
                            <header class='company__header'>
                                <div class='company__logo'>
                                    <img width="64" height="62" alt="Evolable Asia Vietnam Small Logo" src="https://cdn.itviec.com/employers/evolable-asia/logo/s65/bkc9yP9U8EjRwsRgnjjDebGy/evolable-asia-logo.png" />
                                </div>
                                <div class='company__name'>Evolable Asia</div>
                                <div class='company__star'>
                                    <i class='blue icon ion-ios-star small'></i>
                                    <span class='company__star-rate'>4.1</span>
                                </div>
                            </header>
                            <div class='company__desc'>EVOLABLE ASIA – To build the Top global Service for a better World.</div>
                            <footer class='company__footer'>
                                <span class='company__footer-city' data-target='popular-companies.city'>Ho Chi Minh</span>
                                <span class='company__footer-jobs'>
                                10 jobs
                                <i class="fa fa-caret-right"></i>
                                </span>
                            </footer>
                        </div>
                    </a>    
                </div>
                <div class='show-more text-right'>
                    <a data-action='popular-companies#showMore'>
                        <span data-showLessText='See less' data-showMoreText='See more' data-target='popular-companies.showMoreText'>See more</span>
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
            </div>

            <div class='main-content container-fluid jobs-by-company'>
                <div class='row'>
                    <div class='col-xs-12'>
                        <a class="job-skill-index-headline" href="/jobs-company-index">Jobs by Company</a>
                        <ul class='index-list job-by-company-index-list'>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index">#ABC</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/d-f">DEF</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/g-i">GHI</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/j-l">JKL</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/m-o">MNO</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/p-r">PQR</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/s-v">STUV</a>
                            </li>
                            <li class='index-list__item'>-</li>
                            <li class='index-list__item'>
                                <a class="link--darker" href="/jobs-company-index/w-z">WXYZ</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div class='clearfix'></div>
        <div id='logo'>
            <div class='logo-image'></div>
        </div>
        <div class='clearfix'></div>
    </div>
    @include("viewWeb.elements.modal-fade")

    <div id='footer'>
        <div class='content'>
            @include("viewWeb.elements.bottom")
        </div>
    </div>
    @include("viewWeb.elements.script")
    

</body>

</html>
