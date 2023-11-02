<link rel="stylesheet" href="{{asset('cv-templates/css/preview_modern_cv.css')}}" defer/>
<style>
    :root {
        --primary1: {{$cv->template_color ?? "#496267"}} !important;
    }
</style>
<div class="Home">
    <div class="row">
        <div class="col-personal">
            <img class="personal-image" src="{{asset('cv-templates/images/NoImage.avif')}}" width="168" height="168" loading="lazy"/>
            <div class="space-49"></div>
            <div class="personal-info-section">
                <div class="personal-info-title">CONTACT</div>
                <div class="personal-info-description mt-10">
                    <ul class="contact-list">
                        <li><p class="strong">Address: 46 Roman Rd, Leeds, LS2 3ZR</p></li>
                        <li><p class="strong">Phone: 07912 345 678</p></li>
                        <li><p class="strong">Email: dom.webster@example.co.uk</p></li>
                    </ul>
                </div>
            </div>
            <div class="space-41"></div>
            <div class="personal-info-section">
                <div class="personal-info-title">SKILLS</div>
                <div class="personal-info-description mt-10">
                    <ul class="skills-list">
                        <li>Executive team leadership</li>
                        <li>Multimillion pound P&L management expertise for South East region</li>
                        <li>Client/Vendor relations</li>
                        <li>Marketing/product line development</li>
                        <li>Staff/training policy development</li>
                        <li>Process improvement</li>
                    </ul>
                </div>
            </div>
            <div class="space-41"></div>
            <div class="personal-info-section">
                <div class="personal-info-title">LANGUAGES</div>
                <div class="personal-info-description">
                    <div class="singlecolumn infobarpara mt-10">
                        <div class="field">
                            <span class="txt-bold" id="FIELD_FRFM1">English</span><span class="colon"><span
                                    class="beforecolonspace"> </span><span dependency="FRFM">: </span></span>
                            <span class="flt-right" id="FIELD_RATG1"></span>
                        </div>
                        <div class="rating-bar" dependency="RATV">
                            <div class="inner-rating" id="FIELD_RATV1" type="width" style="width: 80%;"></div>
                        </div>
                        <div class="field field-ratt">
                            <span id="FIELD_RATT1">Upper Intermediate</span>
                        </div>
                    </div>
                    <div class="singlecolumn infobarpara mt-10">
                        <div class="field">
                            <span class="txt-bold" id="FIELD_FRFM">Arabic</span><span class="colon"><span
                                    class="beforecolonspace"> </span><span dependency="FRFM">: </span></span>
                            <span class="flt-right" id="FIELD_RATG"></span>
                        </div>
                        <div class="rating-bar" dependency="RATV">
                            <div class="inner-rating" id="FIELD_RATV" type="width" style="width: 80%;"></div>
                        </div>
                        <div class="field field-ratt">
                            <span id="FIELD_RATT">Upper Intermediate</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-main">
            <div class="main-title">DOM WEBSTER</div>
            <svg xmlns="http://www.w3.org/2000/svg" width="458" height="8" viewBox="0 0 458 8" fill="none" style="border: 2px solid #333;
    background: #333;">
                <path d="M0.732506 3.87695H457.931" stroke="black" stroke-width="6.66665" stroke-miterlimit="10"/>
            </svg>
            <div class="space-45"></div>
            <div class="summery-section section">
                <h3 class="section-title text-left">PROFESSIONAL SUMMARY</h3>
                <div class="section-description mt-15">
                    <p>Accomplished Operations executive with a successful track record
                        overseeing regional Marketing, IT, HR/training and property in
                        company and franchise operations for a large chain of restaurants.
                    </p>
                </div>
            </div>
            <div class="space-45"></div>
            <div class="experience-section section">
                <h3 class="section-title text-left">EXPERIENCE</h3>
                <div class="section-description mt-15 experience-item">
                    <p class="strong" style="max-width:285px">Executive Vice President 09/2015 to 02/2019</p>
                    <p class="strong">Pizza Hut UK & Ireland - St Albans, Herts</p>
                    <ul class="work-duties mt-16 main-list">
                        <li>Led operations involved in running the brand including Marketing,
                            IT, HR/training, development/construction, property and P&L for 200
                            store locations.
                        </li>
                        <li>Oversaw operations for all regional company and franchise locations.</li>
                        <li>
                            Assessed profitability of existing company processes to determine
                            optimum organisational structure for maximum revenue growth.
                        </li>
                    </ul>
                </div>
                <div class="section-description mt-15 experience-item">
                    <p class="strong" style="max-width:285px">Senior Vice President 08/2007 to 09/2015</p>
                    <p class="strong">Café Rouge - London</p>
                    <ul class="work-duties mt-16 main-list">
                        <li>Led operations involved in running the brand including Marketing,
                            IT, HR/training, development/construction, property and P&L for 200
                            store locations.
                        </li>
                        <li>Oversaw operations for all regional company and franchise locations.</li>
                        <li>
                            Assessed profitability of existing company processes to determine
                            optimum organisational structure for maximum revenue growth.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="space-45"></div>
            <div class="education-section section">
                <h3 class="section-title text-left">EDUCATION</h3>
                <div class="section-description mt-15 education-item">
                    <p class="strong">BA (Hons) : Business Management, 2006</p>
                    <p class="strong">University Of Westminster - Greater London</p>
                </div>
            </div>
            <div class="space-45"></div>
            <div class="education-section section">
                <h3 class="section-title text-left">QUALIFICATIONS</h3>
                <div class="section-description mt-15 education-item">
                    <p>CGMA (Chartered Global Management Accountant) conferred by
                        the Chartered Institute of Management Accountants (CIMA), 2010 </p>
                </div>
            </div>
        </div>
    </div>
</div>
