<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>

@include("viewWeb.elements.head")
<body class='search_companies' data-env='production'>

    <noscript>
        <iframe height='0' src='/www.googletagmanager.com/ns.html_1151319734.jpg' style='display:none;visibility:hidden' width='0'></iframe>
    </noscript>
    <div id='container'>
        <div class='pageHeader'>
            @include("viewWeb.elements.page-header")
        </div>
        <div class='hidden-xs' id='scrolltop'>
            <div class='top-arrow'>
            </div>
        </div>
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

        <div class='search main-content' id='search-results'>
            <div class='right side-content stickybar hidden-xs hidden-sm' id='right_side'>
                <h3>Company Spotlight</h3>
                <div class='inside'>
                    <!-- Last updated: "2018-10-23 10:28:35 +0700"-->
                    <div class='photos'>
                        <div class='headline-photo'>
                            <img alt="FPT Software Headline Photo" src="https://cdn.itviec.com/photos/33899/tiny_headline_photo/fpt-software-tiny_headline_photo.jpg?6rAvo1Rp6H5WJr88a3VpuJFQ" width="256" height="125" />

                        </div>
                        <div class='logo'>
                            <img src="https://cdn.itviec.com/employers/fpt-software/logo/s65/3reFYvb7XKV1a8g4aKiDDke8/fpt-software-logo.png" width="68" height="68" />
                        </div>
                        <div class='info'>
                            <span class='name'>
                            FPT Software
                            </span>
                            <span class='city'>
                            Ho Chi Minh
                            </span>
                            <p>The leading provider of software outsourcing services in Vietnam</p>
                        </div>
                        <a class="mkt-track link" rel="nofollow" data-method="PUT" href="/companies/fpt-software?track_action=Click+Branding"></a>
                    </div>
                    <div class='border-around'>
                        <div class='jobs'>
                            <div class='job'>
                                <a href="/it-jobs/10-senior-java-developer-singing-bonus-fpt-software-1948">10 Senior Java Developer – singing bonus</a>
                            </div>
                            <div class='job'>
                                <a href="/it-jobs/10-frontend-angular-reactjs-javascript-fpt-software-1849">10 Frontend (Angular,ReactJS,JavaScript)</a>
                            </div>
                            <div class='job'>
                                <a href="/it-jobs/10-infrastructure-devs-work-in-japan-fpt-software-4803">10 Infrastructure Devs - Work in Japan</a>
                            </div>
                        </div>
                        <div class='other-jobs'>
                            <a href="/companies/fpt-software#our-jobs">View 6 jobs</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class='col-xs-12' id='jobs'>
                <h1>
                2,062 IT companies in Vietnam for you
                </h1>
                <div class='first-group'>
                    <div class='company' id='company_374'>
                        <div class='logo'>
                            <div class='logo-wrapper' title='The Bosch Group is a leading global supplier of technology and services'>
                                <a target="_blank" href="/nha-tuyen-dung/robert-bosch-engineering-and-business-solutions"><img alt="Robert Bosch Engineering And Business Solutions" src="https://cdn.itviec.com/employers/robert-bosch-engineering-and-business-solutions/logo/s65/ZzW1myNnUVsoAuRfMz4yNYqx/robert-bosch-engineering-and-business-solutions-logo.jpg" width="65" height="65" />
                                </a>
                            </div>
                        </div>
                        <div class='company__description'>
                            <div class='company__body'>
                                <div class='details'>
                                    <div class='title-info'>
                                        <div class='title'>
                                            <a target="_blank" href="/nha-tuyen-dung/robert-bosch-engineering-and-business-solutions">Robert Bosch Engineering And Business Solutions</a>
                                        </div>
                                        <div class='info'>
                                            <span class='gear-icon'>
                                            Product
                                            </span>
                                            <span class='group-icon'>
                                            301-500
                                            </span>
                                            <span class='globe-icon'>
                                            Germany
                                            </span>
                                        </div>
                                    </div>
                                    <div class='city'>
                                        <div class="text">Ho Chi Minh</div>
                                        <div class="text">Tan Binh</div>
                                    </div>
                                </div>
                                <div class='tag-list'>
                                    <div class='tag'>Java</div>
                                    <div class='tag'>SAP</div>
                                    <div class='tag'>.NET</div>
                                </div>
                            </div>
                            <div class='current-jobs'>
                                <a target="_blank" href="/companies/robert-bosch-engineering-and-business-solutions#our-jobs">9 Job</a>
                                <i class='fa fa-caret-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div id='show-more-wrapper'>
                    <div id='show_more'>
                        <a class="more-jobs-link more-company" rel="next" data-remote="true" href="/companies?page=2">Show More Companies</a>
                    </div>

                </div>
                <div class='clearfix'></div>
            </div>
        </div>


        <div class='clearfix'></div>
        <div id='logo'>
            <div class='logo-image'></div>
        </div>
        <div class='clearfix'></div>
    </div>
    @include("viewWeb.elements.modal-fade")

    <div class='modal fade' id='job-mail-subscribe-modal' role='dialog' tabindex='-1'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body text-center'>
                    <button class='modal-body__close' data-dismiss='modal' type='button'>
                        <span>×</span>
                    </button>
                    <div class='modal-body__message'>
                        <div class='message'>
                            Don't miss your next <span class="keyword"></span> job!
                        </div>
                        <div class='content'>
                            <div class='left-side'>
                                <p>
                                    Get new <span><span class="keyword"></span> jobs</span> instantly by email with <span class='job-robot'>Job Robot</span>. Free.
                                </p>
                                <form class="simple_form job-mail false" id="job-mail" data-section="top" role="form" novalidate="novalidate" action="/subscribe" accept-charset="UTF-8" data-remote="true" method="post">
                                    <input name="utf8" type="hidden" value="&#x2713;" />
                                    <div class='form-blank-email'>
                                        <div class='field_for contents'>
                                            <div class="input email required job_mail_email">
                                                <input value="" class="string email required col-xs-8" data-rule-email="true" data-msg="can&#39;t be blank" data-msg-email="Please check your email" data-rule-noplus="true" data-msg-noplus="Please check your email" required="required" aria-required="true" placeholder="Your email" type="email" name="job_mail[email]" id="job_mail_email" />
                                            </div>
                                            <div class="input hidden job_mail_city">
                                                <input class="hidden" type="hidden" name="job_mail[city]" id="job_mail_city" />
                                            </div>
                                            <div class="input hidden job_mail_query">
                                                <input value="" class="hidden" type="hidden" name="job_mail[query]" id="job_mail_query" />
                                            </div>
                                            <div class="input hidden job_mail_source">
                                                <input value="search_popup" class="hidden" type="hidden" name="job_mail[source]" id="job_mail_source" />
                                            </div>
                                            <div class="input hidden job_mail_locale">
                                                <input value="en" class="hidden" type="hidden" name="job_mail[locale]" id="job_mail_locale" />
                                            </div>
                                        </div>
                                        <div class='field_for actions'>
                                            <input type="submit" name="commit" value="Email me jobs" class="button-red" data-disable-with="Email me jobs" />

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class='right-side'>
                                <div class='get-email-robot-image'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='modal fade' id='jr-limit-exceed-modal' role='dialog' tabindex='-1'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-body text-center'>
                    <button class='modal-body__close' data-dismiss='modal' type='button'>
                        <span>×</span>
                    </button>
                    <div class='modal-body__message'>
                        Oops!
                        <div class='content'>
                            <div class='line'>You have reached the limit of 5 Job Robots.</div>
                            <div class='line'>Want to create a new one? Click &#39;Unsubscribe&#39; at the bottom of your Job Robot email and try again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id='job_mail_thankyou_wrapper'></div>

    <div id='footer'>
        <div class='content'>
            @include("viewWeb.elements.tags-hidden-xs")
            @include("viewWeb.elements.bottom")
        </div>
    </div>

    @include("viewWeb.elements.script")

</body>

</html>
