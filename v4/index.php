<!DOCTYPE html>
<html lang="en">

<head>

    <title>Powered By Solar Energy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- meta content for search -->
    <link rel="icon" type="image/png" href="/assets/images/Logo3.png">
    <meta name="facebook-domain-verification" content="vpu4sozxe6l3bzb24q13q7937p2myf" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="preload" as="style" href="/assets/css/bootstrap.min.css">
    <link rel="preload" as="style" href="assets/css/style.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <script>
        window.ADDRESS_VALIDATION_SKIP = true;
        window.s1 = '';
        window.s2 = '';
        window.s3 = '';
        window.s4 = '';
        window.s5 = '';
        window.uid = '10f5040a07ade20ba37e0743740983c5f99907860780113b1251b27ef19adef1';
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js? id=AW-11110630683"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-11110630683');
    </script>


    <script>
        // This sample uses the Autocomplete widget to help the user select a
        // place, then it retrieves the address components associated with that
        // place, and then it populates the form fields with those details.
        // This sample requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script
        // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var transaction = urlParams.get("sub2");
        var affiliate = urlParams.get("sub1");

        let placeSearch;
        let autocomplete;
        const nonce = window.nonce = '1131593b4af57bc8bbb90be0b76d652d';
        const componentForm = {
            street_number: "short_name",
            route: "long_name",
            locality: "long_name",
            administrative_area_level_1: "short_name",
            country: "long_name",
            postal_code: "short_name",
        };

        function initAutocomplete() {
            if (!window.ADDRESS_VALIDATION_SKIP) {
                // Create the autocomplete object, restricting the search predictions to
                // geographical location types.
                autocomplete = new google.maps.places.Autocomplete(
                    document.getElementById("full_address"), {
                        types: ["address"],
                        componentRestrictions: {
                            country: 'us'
                        }
                    }
                );
                // Avoid paying for data that you don't need by restricting the set of
                // place fields that are returned to just the address components.
                autocomplete.setFields(["address_component"]);
                // When the user selects an address from the drop-down, populate the
                // address fields in the form.
                autocomplete.addListener("place_changed", fillInAddress);
            }
        }

        function phoneFormat(input) {
            // Strip all characters from the input except digits
            input = input.replace(/\D/g, '');

            // Trim the remaining input to ten characters, to preserve phone number format
            input = input.substring(0, 10);

            // Based upon the length of the string, we add formatting as necessary
            var size = input.length;
            if (size == 0) {
                input = input;
            } else if (size < 4) {
                input = '(' + input;
            } else if (size < 7) {
                input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6);
            } else {
                input = '(' + input.substring(0, 3) + ') ' + input.substring(3, 6) + ' - ' + input.substring(6, 10);
            }
            return input;
        }

        function fillInAddress() {
            $("#street-address-verify").hide();
            try {
                // Get the place details from the autocomplete object.
                const place = autocomplete.getPlace();

                for (const component in componentForm) {
                    document.getElementById(component).value = "";
                }

                // Get each component of the address from the place details,
                // and then fill-in the corresponding field on the form.
                for (const component of place.address_components) {
                    const addressType = component.types[0];

                    if (componentForm[addressType]) {
                        const val = component[componentForm[addressType]];
                        document.getElementById(addressType).value = val;
                    }
                }
            } catch (e) {
                // do nothing
            }
            $(".btn-next, .quick-next").removeAttr('disabled');
        }

        function getState(zipString) {
            /* Ensure param is a string to prevent unpredictable parsing results */
            if (typeof zipString !== 'string') {
                // console.log('Must pass the zipcode as a string.');
                return;
            }

            /* Ensure we have exactly 5 characters to parse */
            if (zipString.length !== 5) {
                // console.log('Must pass a 5-digit zipcode.');
                return;
            }

            /* Ensure we don't parse strings starting with 0 as octal values */
            const zipcode = parseInt(zipString, 10);

            let st;
            let state;

            /* Code cases alphabetized by state */
            if (zipcode >= 35000 && zipcode <= 36999) {
                st = 'AL';
                state = 'Alabama';
            } else if (zipcode >= 99500 && zipcode <= 99999) {
                st = 'AK';
                state = 'Alaska';
            } else if (zipcode >= 85000 && zipcode <= 86999) {
                st = 'AZ';
                state = 'Arizona';
            } else if (zipcode >= 71600 && zipcode <= 72999) {
                st = 'AR';
                state = 'Arkansas';
            } else if (zipcode >= 90000 && zipcode <= 96699) {
                st = 'CA';
                state = 'California';
            } else if (zipcode >= 80000 && zipcode <= 81999) {
                st = 'CO';
                state = 'Colorado';
            } else if (zipcode >= 6000 && zipcode <= 6999) {
                st = 'CT';
                state = 'Connecticut';
            } else if (zipcode >= 19700 && zipcode <= 19999) {
                st = 'DE';
                state = 'Delaware';
            } else if (zipcode >= 32000 && zipcode <= 34999) {
                st = 'FL';
                state = 'Florida';
            } else if (zipcode >= 30000 && zipcode <= 31999) {
                st = 'GA';
                state = 'Georgia';
            } else if (zipcode >= 96700 && zipcode <= 96999) {
                st = 'HI';
                state = 'Hawaii';
            } else if (zipcode >= 83200 && zipcode <= 83999) {
                st = 'ID';
                state = 'Idaho';
            } else if (zipcode >= 60000 && zipcode <= 62999) {
                st = 'IL';
                state = 'Illinois';
            } else if (zipcode >= 46000 && zipcode <= 47999) {
                st = 'IN';
                state = 'Indiana';
            } else if (zipcode >= 50000 && zipcode <= 52999) {
                st = 'IA';
                state = 'Iowa';
            } else if (zipcode >= 66000 && zipcode <= 67999) {
                st = 'KS';
                state = 'Kansas';
            } else if (zipcode >= 40000 && zipcode <= 42999) {
                st = 'KY';
                state = 'Kentucky';
            } else if (zipcode >= 70000 && zipcode <= 71599) {
                st = 'LA';
                state = 'Louisiana';
            } else if (zipcode >= 3900 && zipcode <= 4999) {
                st = 'ME';
                state = 'Maine';
            } else if (zipcode >= 20600 && zipcode <= 21999) {
                st = 'MD';
                state = 'Maryland';
            } else if (zipcode >= 1000 && zipcode <= 2799) {
                st = 'MA';
                state = 'Massachusetts';
            } else if (zipcode >= 48000 && zipcode <= 49999) {
                st = 'MI';
                state = 'Michigan';
            } else if (zipcode >= 55000 && zipcode <= 56999) {
                st = 'MN';
                state = 'Minnesota';
            } else if (zipcode >= 38600 && zipcode <= 39999) {
                st = 'MS';
                state = 'Mississippi';
            } else if (zipcode >= 63000 && zipcode <= 65999) {
                st = 'MO';
                state = 'Missouri';
            } else if (zipcode >= 59000 && zipcode <= 59999) {
                st = 'MT';
                state = 'Montana';
            } else if (zipcode >= 27000 && zipcode <= 28999) {
                st = 'NC';
                state = 'North Carolina';
            } else if (zipcode >= 58000 && zipcode <= 58999) {
                st = 'ND';
                state = 'North Dakota';
            } else if (zipcode >= 68000 && zipcode <= 69999) {
                st = 'NE';
                state = 'Nebraska';
            } else if (zipcode >= 88900 && zipcode <= 89999) {
                st = 'NV';
                state = 'Nevada';
            } else if (zipcode >= 3000 && zipcode <= 3899) {
                st = 'NH';
                state = 'New Hampshire';
            } else if (zipcode >= 7000 && zipcode <= 8999) {
                st = 'NJ';
                state = 'New Jersey';
            } else if (zipcode >= 87000 && zipcode <= 88499) {
                st = 'NM';
                state = 'New Mexico';
            } else if (zipcode >= 10000 && zipcode <= 14999) {
                st = 'NY';
                state = 'New York';
            } else if (zipcode >= 43000 && zipcode <= 45999) {
                st = 'OH';
                state = 'Ohio';
            } else if (zipcode >= 73000 && zipcode <= 74999) {
                st = 'OK';
                state = 'Oklahoma';
            } else if (zipcode >= 97000 && zipcode <= 97999) {
                st = 'OR';
                state = 'Oregon';
            } else if (zipcode >= 15000 && zipcode <= 19699) {
                st = 'PA';
                state = 'Pennsylvania';
            } else if (zipcode >= 300 && zipcode <= 999) {
                st = 'PR';
                state = 'Puerto Rico';
            } else if (zipcode >= 2800 && zipcode <= 2999) {
                st = 'RI';
                state = 'Rhode Island';
            } else if (zipcode >= 29000 && zipcode <= 29999) {
                st = 'SC';
                state = 'South Carolina';
            } else if (zipcode >= 57000 && zipcode <= 57999) {
                st = 'SD';
                state = 'South Dakota';
            } else if (zipcode >= 37000 && zipcode <= 38599) {
                st = 'TN';
                state = 'Tennessee';
            } else if ((zipcode >= 75000 && zipcode <= 79999) || (zipcode >= 88500 && zipcode <= 88599)) {
                st = 'TX';
                state = 'Texas';
            } else if (zipcode >= 84000 && zipcode <= 84999) {
                st = 'UT';
                state = 'Utah';
            } else if (zipcode >= 5000 && zipcode <= 5999) {
                st = 'VT';
                state = 'Vermont';
            } else if (zipcode >= 22000 && zipcode <= 24699) {
                st = 'VA';
                state = 'Virgina';
            } else if (zipcode >= 20000 && zipcode <= 20599) {
                st = 'DC';
                state = 'Washington DC';
            } else if (zipcode >= 98000 && zipcode <= 99499) {
                st = 'WA';
                state = 'Washington';
            } else if (zipcode >= 24700 && zipcode <= 26999) {
                st = 'WV';
                state = 'West Virginia';
            } else if (zipcode >= 53000 && zipcode <= 54999) {
                st = 'WI';
                state = 'Wisconsin';
            } else if (zipcode >= 82000 && zipcode <= 83199) {
                st = 'WY';
                state = 'Wyoming';
            } else {
                st = 'none';
                state = 'none';
            }
            $('#state').val(st)
            return st;
        }

        /**
         * Set referral cookies
         */
        (function() {
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                var expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            setCookie("aid", '29928', 30);
        })();
    </script>


    <script>
        const _echo_get = window._echo_get = {
            "a": "29928",
            "c": "47901",
            "lp_campid": "630e19bd3561d",
            "lp_campkey": "tN8H9FGRrChgp3M7Jw46"
        };
        const _echo_post = window._echo_post = [];
    </script>

    <script>
        var ipadr;

        fetch("https://pro.ip-api.com/json/?key=OhSlXoSuuSkHptR").then(x => x.json()).then(x => {

            ipadr = x.query;
            console.log(ipadr);

        }).catch(function(err) {
            console.log(err)
        })
    </script>
</head>

<body class="v2-page en">
    <div id="work-in-progress">
        <div class="progress-materializecss">
            <div class="indeterminate"></div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="header-wrap">
                        <div class="row align-items-center">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="logo text-center">
                                    <div class="heading-survey">
                                        <div class="logo">
                                            <h1>
                                                <img src="/assets/images/Logo3.png" alt="Powered By Solar Energy" title="Powered By Solar Energy">
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner-form">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2">
                    <div id="form-header" class="heading-survey">
                        <h3>Get a Free Solar Quote</h3>
                        <h4>Take this 60 second survey to see if you qualify!</h4>
                    </div>
                    <div class="banner-form-wrap">
                        <div class="progress_box">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div id="loader" class="form_box">
                            <h2><em>Please wait while we save your information.</em></h2>
                            <h2><em>Do not close this window while we verify your eligibility.</em></h2>
                            <p class="in-progress" data-timeout="1500">
                                Finding your home <span>..</span> <span class="status">done</span>
                            </p>
                            <p class="in-progress" data-timeout="1500">
                                Checking homeowner status <span>..</span> <span class="status">done</span>
                            </p>
                            <p class="in-progress" data-timeout="1500">
                                Analyzing your utility bill <span>..</span> <span class="status">done</span>
                            </p>
                            <p class="in-progress" data-timeout="1500">
                                Check sun coverage on your roof <span>..</span> <span class="status">done</span>
                            </p>
                            <p class="in-progress">
                                Locating solar providers in your area <span>..</span>
                            </p>
                            <div class="lds-ellipsis">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div id="form_box" class="form_box">
                            <!-- <div class="form_nav">Question <span id="slidenum">1</span></div> -->
                            <div id="loader">
                                <div class="lds-ellipsis">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <p><em>Please wait while we save your information.</em></p>
                            </div>
                            <form id="msform" class="form" action="thank-you.php?" novalidate method="post">
                                <input type="hidden" id="token" name="token" value="9741a0c84c1112244e3cce9df3fb31a17217692194c4cd5ffef12c033d5eb9f6">
                                <input id="leadid_token" name="jornaya_lead_id" type="hidden" value="" />
                                <input type="hidden" id="tcpa_text" name="tcpa_text" value="By clicking Next, I agree to Terms, Privacy, and consent to solar/home servicers to send marketing prerecorded messages and autodialed calls/texts to my phone number above even if it's on any do not call list. Consent is not a condition of purchase. You can opt-out at any time (see Terms). Message/data rates may apply.">
                                <input type="hidden" id="tcpa_consent" name="tcpa_consent" value="Yes">
                                <input type="hidden" id="interested_in_solar_electric" name="interested_in_solar_electric" value="yes">
                                <input type="hidden" id="interested_in_solar_hot_water" name="interested_in_solar_hot_water" value="no">
                                <input type="hidden" id="interested_in_solar_pool_heating" name="interested_in_solar_pool_heating" value="no">
                                <input type="hidden" id="state" name="state" value="">
                                <input type="hidden" id="street_number" name="street_number" value="">

                                <input type="hidden" id="route" name="street" value="">
                                <input type="hidden" id="locality" name="city" value="">
                                <input type="hidden" id="administrative_area_level_1" name="state" value="">
                                <input type="hidden" id="country" name="country" value="">
                                <input type="hidden" id="postal_code" name="postal_code" value="">
                                <input type="hidden" id="request_id" name="request_id" value="">
                                <input type="hidden" id="click_id" name="click_id" value="">
                                <input type="hidden" id="recaptcha_token" name="recaptcha_token" value="">
                                <input type="hidden" id="recaptcha_err" name="recaptcha_err" value="">
                                <input type="hidden" id="clickid" name="clickid" value="{clickid}">
                                <input type="hidden" id="local_storage" name="local_storage" value="">
                                <input type="hidden" id="session_storage" name="session_storage" value="">
                                <input type="hidden" name="xxTrustedFormCertUrl" id="xxTrustedFormCertUrl_0" value="https://cert.trustedform.com/454a35b802f3e7b63ffabb4efedb7c6ebe67886c">
                                <input type="hidden" name="xxTrustedFormPingUrl" id="xxTrustedFormPingUrl_0" value="https://ping.trustedform.com/0.HJDqajg8vVF20hwiDBJ92kct5idepgBM4vHylmh43kShfWSZKwm8HI37KqPToi0y3dhTIQ3N.uOjUbzs7aKNUWivkGh7I9Q.50hgmcLFsDabNx1wtZZPdQ">
                                <fieldset id="form-step1" class="form-steps fieldset-0" data-step="1" style="display: block;" data-tag="homeowner">
                                    <legend hidden="true">homeowner</legend>
                                    <h3 class="form_box-question">Are you a homeowner?</h3>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="radio-btn radio-next">
                                                    <input id="pc01" class="form-control" type="radio" name="property_ownership" value="Own" required checked="" data-tf-value="false">
                                                    <label for="pc01"><span>Yes</span></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6">
                                                <div class="radio-btn">
                                                    <input id="pc02" class="form-control" type="radio" name="property_ownership" value="Rent" required data-tf-value="true">
                                                    <label for="pc02"><span>No</span></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-btns ml-auto text-right">
                                        <button id="q1-next" class="btn form-btn btn-next" type="button">Next</button>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step2" class="form-steps fieldset-1" data-step="2" style="display: none;" data-tag="zip">
                                    <legend hidden="true">zipcode</legend>
                                    <h3 class="form_box-question">What is your zip code?</h3>
                                    <div class="form-group">
                                        <label style="visibility: hidden; position: absolute;" for="zip">Zip Code</label>
                                        <input id="zip" class="form-control zipcode" type="tel" name="zip_code" pattern="[0-9]{5}" title="Enter Your ZIP Code" maxlength="5" minlength="5" placeholder="Enter Your ZIP Code" value="" required>
                                        <div id="zip_code_error" class="form-error-message">Please enter a valid US Zip Code.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-xs-6 colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q2-next" class="btn form-btn btn-next" id="btnzip" type="button"><span class="btn-text">Next</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step3" class="form-steps fieldset-2" data-step="3" style="display: none;" data-tag="utilityprovider">
                                    <legend hidden="true">utility</legend>
                                    <h3 class="form_box-question">Who's your electric utility provider?</h3>
                                    <div class="form-group">
                                        <label for="provider-select" class="label" style="visibility: hidden; position: absolute;">
                                            Who's your utility provider? </label>
                                        <select name="utility_provider" type="text" id="provider-select" class="form-control custom-select" data-tf-value="">
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col col-xs-6 colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q3-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step4" class="form-steps fieldset-3" data-step="4" style="display: none;" data-tag="utilitybill">
                                    <legend hidden="true">electric bill</legend>
                                    <h3 class="form_box-question">How much is your average monthly electric bill?</h3>
                                    <div class="form-group">
                                        <div class="bill_bar">
                                            <div class="box_range">
                                                <output name="billOutputName" id="billOutputName">101</output>
                                                <span class="intcont">
                                                    <input type="range" name="electric_bill" min="30" max="900" value="101" class="slider" id="electric_bill" oninput="billOutputName.value = electric_bill.value">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-xs-6 colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q4-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step5" class="form-steps fieldset-4" data-step="5" style="display: none;" data-tag="roofshade">
                                    <legend hidden="true">roof's sun exposure</legend>
                                    <h3 class="form_box-question">How sunny is your roof area?</h3>
                                    <div class="form-group radio-next">
                                        <div class="radio-btn">
                                            <input id="rf1" type="radio" name="roof_shade" value="No Shade" required checked="" data-tf-value="true">
                                            <label for="rf1"><span>Full Sun</span></label>
                                        </div>
                                        <div class="radio-btn">
                                            <input id="rf2" type="radio" name="roof_shade" value="A Little Shade" required data-tf-value="false">
                                            <label for="rf2"><span>Partial Sun</span></label>
                                        </div>
                                        <div class="radio-btn">
                                            <input id="rf3" type="radio" name="roof_shade" value="A Lot of Shade" data-tf-value="false">
                                            <label for="rf3"><span>A Lot of Shade</span></label>
                                        </div>
                                        <div class="radio-btn">
                                            <input id="rf4" type="radio" name="roof_shade" value="Uncertain" data-tf-value="false">
                                            <label for="rf4"><span>Uncertain</span></label>
                                        </div>
                                        <div class="form-error-message">Pros need this information to generate a quote. </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-xs-6 colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col col-xs-6">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q5-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step6" class="form-steps fieldset-5" data-step="6" style="display: none;" data-tag="email">
                                    <legend hidden="true">Email</legend>
                                    <h3 class="form_box-question">What email address should your results be sent to?</h3>
                                    <div class="form-group">
                                        <label for="email" class="label" style="visibility: hidden; position: absolute;">
                                            Email Address </label>
                                        <input id="email" class="form-control" type="email" name="email_address" placeholder="Email Address" value="" required data-tf-fingerprint="email_email_address_1603174554500.781" data-tf-value="email@domain.com">
                                        <div id="email_error" class="form-error-message">Please enter a real email address.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q6-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step7" class="form-steps fieldset-6" data-step="7" style="display: none;" data-tag="first">
                                    <legend hidden="true">First Name</legend>
                                    <h3 class="form_box-question">What's your first name?</h3>
                                    <div class="form-group">
                                        <input id="first" minlength="2" class="form-control" type="text" name="first_name" placeholder="First Name" value="" required data-tf-fingerprint="first_name_first_name_1603174554500.9617" data-tf-value="Rohit">
                                        <div id="first_error" class="form-error-message">Please enter your first name.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q7-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step8" class="form-steps fieldset-7" data-step="8" style="display: none;" data-tag="last">
                                    <legend hidden="true">Last Name</legend>
                                    <h3 class="form_box-question">What's your last name?</h3>
                                    <div class="form-group">
                                        <input id="last" minlength="2" class="form-control" type="text" name="last_name" placeholder="Last Name" value="" required data-tf-fingerprint="last_name_last_name_1603174554500.8398" data-tf-value="Bhatia">
                                        <div id="last_error" class="form-error-message">Please enter your last name.</div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q8-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step9" class="form-steps fieldset-8" data-step="9" style="display: none;" data-tag="address">
                                    <legend hidden="true">Address Name</legend>
                                    <h3 class="form_box-question">Where do you want the solar panels installed (street address)?</h3>
                                    <div class="form-group" id="street_address">
                                        <input id="address" class="form-control" type="text" name="full_address" placeholder="Address" value="" required>
                                        <div id="address_error" class="form-error-message">Please provide where you'd like the panels installed.</div>
                                    </div>
                                    <div class="form-group" id="street-address-verify" style="display: none;">
                                        <label>Did you mean to type? (Tap or click the answer that matches best)</label>
                                        <div id="street_address_predictions">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col colback"><a class="btn btn-link btn-back">Back</a></div>
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right">
                                                <button id="q9-next" class="btn form-btn btn-next" type="button"><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="form-step10" class="form-steps fieldset-9" data-step="10" style="display: none;" data-tag="phone">
                                    <legend hidden="true">Phone</legend>
                                    <p class="form_box-desc">What phone number can we reach you at?</p>
                                    <div class="form-group">
                                        <input id="phone" class="form-control" type="tel" name="phone_home" placeholder="(000) 000-0000" value="" required minlength="10" maxlength="16" data-tf-fingerprint="phone_phone_home_1603174554501.6533" data-tf-value="(702) 555-1212">
                                        <div id="phone_error" class="form-error-message phone-valid-error">Please enter a valid US phone number.</div>
                                    </div>
                                    <span class="terms_txt">
                                        <label id="tcpa_label">
                                            <input type="hidden" id="leadid_tcpa_disclosure" />
                                            By clicking Next, I agree to
                                            <a href="terms.php" target="_new">Terms</a>,
                                            <a href="privacy.php" target="_new">Privacy</a>,
                                            and consent to
                                            <a href="companylist.php" target="_blank">solar/home servicers</a>
                                            to send marketing prerecorded messages and autodialed calls/texts
                                            to my phone number above even if it's on any do not call list.
                                            Consent is not a condition of purchase. You can opt-out at any
                                            time (see
                                            <a href="terms.php" target="_new" data-scroll-to="collection-of-information">Terms</a>).
                                            Message/data rates may apply. </label>
                                    </span>
                                    <div class="row">
                                        <!-- <div class="col colback col-last"><button type="button" class="btn btn-link btn-back just-text">Back</button></div> -->
                                        <!-- <div class="col colback"><a class="btn btn-link btn-back">Back</a></div> -->
                                        <div class="col">
                                            <div class="form-btns ml-auto text-right btn-last-submit">
                                                <button id="q10-next" class="btn form-btn btn-next btn-final" type="button"><span class="btn-text">Next</span>
                                                </button>
                                                <button id="q10-next-loading" class="btn form-btn btn-next-loading btn-final hide" type="button" disabled><span class="btn-text">Next</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 offset-lg-2">
                <div>
                    <img src="/assets/images/tscert.png" alt="TrustedSite" />
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="solar-footer-content">

                <div class="row">
                    <div class="footer-menu">
                        <div class="form-group tcpa"> <label id="tcpa" class="pageid-tcpa"><input type="hidden" id="leadid_tcpa_disclosure"> By submitting your info, you authorize us and up to 4 of our <a href="https://homeimprovement.name/installer-list" target="_blank" rel="nofollow">Partner Solar Companies</a> to call you and send sms messages or text messages at your number. Your consent here is not based on a condition of purchase. </label> </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <!-- TCPA Modal -->
    <div id="tcpa-modal">
        <div class="modal-content">
            <span class="tcpa-close">&times;</span>
            <div class="tcpa-content-container">
                <div id="terms-php" class="hidden">
                    <h2 id="terms-php-top">Terms of Use</h2>

                    <p>Effective July 10th, 2022</p>
                    <p>Last Updated October 3rd, 2022</p>
                    <p>
                        Thanks for visiting our Site www.solar-money-saver.com! We appreciate your business and ask that you please read our terms and conditions carefully before using our Website (“Website”, “Site” or “App”). This site is owned and operated by Lead Flux, Inc. (“Lead Flux,” “we,” “us” or “our”). All terms and conditions mentioned on this page (I.E. “the Terms”) govern how you use and access our site and all services that we provide to you via our site (I.E. “Smart Services”). Our terms outline a legal contract between you and Lead Flux. When you use our Site and any of our Smart Services, you hereby agree to be bound by these Terms and warrant that you are above the age of 18. If you do not agree to our terms and conditions don’t use our Site or Smart Services; it’s that simple.</p>
                    <p>
                        Our terms and conditions policy is effective as of the date that we specify above. We reserve the right to change or modify the terms and conditions at any time. Your use of our site or Smart Services constitutes your acceptance of such changes or modified terms, so please check this page periodically.</p>
                    <p>
                        All Smart Services include the incorporation of a variety of third party solar products, brokers, carriers via advertisement of solar quotes, online purchases, emails, phone calls, text messages or any other marketing medium. This hereby serves as your notice that you may have third parties contact you on our behalf.</p>
                    <p>
                        Entering your information on our web forms with your consent does not constitute a condition of purchase as solar products and services vary by state as well as information you provide regarding your home and property.</p>
                    <p>
                        Third-party solar products that are purchased by you via our Website are subject to contracts you’ve made with the applicable solar company. In the event of a conflict between our terms and the terms you’ve accepted with a solar company, the terms you’ve accepted with the solar company precede ours.</p>
                    <h3>USER CONDUCT</h3>
                    <p>
                        You hereby agree to NOT use this Website for the following purposes or activities: conducting any illegal activity at any time whatsoever; such as transmitting or storing worms, viruses, code of a destructive nature, threatening, harassing, abusing, impersonating, injuring, intimidating others or any interference with others’ use of this Website (unless such interference is intended to purposefully comply with another section of the terms listed on this page). This includes delivering spam, collecting information to deliver spam, sending unsolicited email advertisements, decompiling, disassembling, reverse engineering, attempting to discover source code contained in the Website, disguising the origin of content sent through this Website (or your presence on the Website); and/or causing launch of any sort of automated system accessing this Website in a manner to send more request messages to servers of the site than a person could reasonably produce via the use of a conventional web browser in the same period.</p>
                    <h3>INTELLECTUAL PROPERTY ('IP')</h3>
                    <p>
                        www.solar-money-saver.com contains text, graphics, images, photographs and a variety of other materials provided on behalf of us and your use of our Smart Services. All materials and information we collect is collectively referred to as “content” and that content is owned by us/our licensors. This content is protected under both US and foreign copyright laws/treaties. Content includes (but is not limited to) trademarks, service marks, logos used and displayed on our sites which are registered and non-registered trademarks/service marks of our licensors. The organization and design of our Websites are the sole property of Lead Flux and are protected worldwide by various copyright laws and treaty provisions.</p>
                    <p>
                        You shall not (without our express written permission in each use or instance) use our trademarks, service marks, logos, or site code/content or copy the use of the content for any purpose. Removal of any copyright or proprietary notices contained in the original content on a copy made of the source content (as well as any selling, transferring, assignment, licensing, sublicening or modification of the content) or use of the content for any public or commercial purpose, including use or publishment of content is strictly prohibited.</p>
                    <p>
                        Nothing in our Terms or Conditions of Use shall be construed as conferring license, rights of trademarks or intellectual property rights of Lead Flux or any other party. Any and all trademarks, trade names, service marks, logos or other images displayed throughout the Website are the sole property of Lead Flux, licensed by Lead Flux, or owned by third parties. Therefore, you shall not display, use links, meta tags, or any other use of trademarks, service marks, logos or images displayed throughout the Website without prior express written consent of the owner of the trademark, service mark, trade name, or logo.</p>
                    <h3>UNSOLICITED INFORMATION</h3>
                    <p>
                        All Smart Services are provided for inquiries and peer-to-peer interactions, and you alone are responsible for your use of these Smart Services. When you submit any unsolicited information and materials on our page (including any comments, ideas, questions or similar communication to our site - AKA “unsolicited information”) you agree to adhere to and be bound by our terms and conditions. Any and all unsolicited information you provide to us is considered NON-CONFIDENTIAL, NON-PROPRIETARY, and will become Lead Flux’s property upon submission. We are therefore entitled to use this communication and materials for any purpose whatsoever that we choose; including commercial or otherwise. This can include but is not limited to the reproduction, transmission, disclosure, broadcast, further publication/posting without compensation to said provider of the Unsolicited Information.</p>
                    <p>

                        Furthermore, we reserve the right to use ideas, concepts, techniques or know-how in any/all communications/material sent to our site for any purpose whatsoever. This could include (but is not limited to) commercial uses or otherwise, such as developing, manufacturing or marketing products. With any submittal of unsolicited information, you grant us permission to the perpetual use, reproduction, modification, adaptation, publication, translation, distribution, transmission, public display, public performance, sublicense, derivative works creation, transfer or sale of such Unsolicited Information. Notwithstanding anything mentioned herein, your personal information (submitted to Lead Flux) through the pages located on the Website is held in confidence by us as set forth in our <a href="privacy.php" title="Privacy Policy">Privacy Policy</a>.

                    </p>
                    <h3 id="collection-of-information">COLLECTION AND USE OF INFORMATION</h3>
                    <p>
                        We at Lead Flux respect and protect the privacy of our users. Your use of our Smart Services may transmit information, including possibly personally identifiable information. The collection and use of this personal information collected by smartsolarsavings.com is governed by our <a href="privacy.php" title="Privacy Policy">Privacy Policy</a>, hereby incorporated by reference in its entirety. It’s important that you read and comprehend the terms of our <a href="privacy.php" title="Privacy Policy">Privacy Policy</a>. Lead Flux, Inc. may cooperate and disclose various information (including your account information) to authorities, government officials or third parties without notice to you in connection to investigations, proceedings, or claims that arise from asserted illegal actions/infringements related or unrelated to your use/misuse of the Website.</p>
                    <h3>DISCLAIMER AND LIMITATION OF LIABILITY</h3>
                    <p>
                        YOU HEREBY ACKNOWLEDGE AND AGREE THAT THE SITE, SMART SERVICES AND CONTENT IS PROVIDED TO YOU “AS IS,” “AS AVAILABLE” WITHOUT ANY WARRANTY OF ANY KIND EITHER EXPRESSED OR IMPLIED. THIS INCLUDES (WITHOUT LIMITATION) WARRANTIES OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY, OR FITNESS FOR ANY PURPOSE. WE WILL NOT BE HELD LIABLE FOR DAMAGES, VIRUSES (OF ANY KIND), YOUR COMPUTER, EQUIPMENT, OR OTHER PROPERTY THAT ACCESSES THE WEBSITE, SMART SERVICES OR CONTENT.</p>
                    <p>
                        ALL SOLAR PRODUCT QUOTES OR PRODUCTS SOLD THROUGH THE SITE ARE ASSOCIATED WITH THIRD PARTIES' PRODUCTS AND ARE NOT OUR PRODUCTS. THEREFORE, WE MAKE NO REPRESENTATIONS OR WARRANTIES RELATED TO THE PRODUCTS WITH RESPECT TO SUCH PRODUCTS, AND ACCEPT NO LIABILITY IN CONNECTION WITH THEM. ALL SUCH PRODUCTS ARE PROVIDED TO YOU PURSUANT TO THE TERMS AND CONDITIONS OF THE SOLAR COMPANY PROVIDING SUCH PRODUCTS.</p>
                    <p>
                        IN NO EVENT SHALL WE BE LIABLE FOR DIRECT, SPECIAL, INDIRECT, PUNITIVE, EXEMPLARY, OR OTHER CONSEQUENTIAL DAMAGES. THIS CAN INCLUDE BUT IS NOT LIMITED TO LOST PROFITS, REVENUES OR SAVINGS EVEN IF WE HAVE BEEN ADVISED OF SUCH POSSIBILITY IN ADVANCE. DUE TO THE LACK OF JURISDICTION IN SOME JURISPRUDENCES REGARDING LIMITATION OF LIABILITY, IN SUCH JURISDICTIONS OUR LIABILITY IS LIMITED TO THE FURTHEST EXTENT GRANTED BY APPLICABLE LAW. YOUR SOLE REMEDY FOR DISSATISFACTION WITH OUR SITE, SERVICE, OR CONTENT IS TO NOT USE THE SITE.</p>
                    <h3>EXTERNAL SITES</h3>
                    <p>
                        Our site may contain links to third party Websites that provide third party products and services that are made available to you through our Smart Services (“External Sites”). Our control of these External Sites is limited to our Smart Services sending the data and we do not endorse or control; nor are responsible for for the content of any linked External Sites. We are not to be held responsible or liable for any of the products/services/content of the External Sites as they are provided at your convenience to be accessed entirely at your own risk. We do, however, seek to protect the viability of our Website and welcome feedback regarding external links. This can include but is not limited to information regarding broken or defunct links.</p>
                    <h3>INDEMNIFICATION</h3>
                    <p>
                        You shall indemnify, defend and hold us, our officers, employees, directors, successors, licensees and assigns harmless from and against any claims, actions or demands. This includes but is not limited to limitations and reasonable legal or accounting fees arising or resulting from the use of (i) your breach of our Terms (ii) your access or use of our site (iii) misuse of Smart Services (iv) our content.</p>
                    <h3>TERMINATION</h3>
                    <p>
                        We reserve the right to terminate the Terms and/or your access to any/parts of the Website or the Smart Services we use at any time for any reason without any notice or liability. We also reserve the right to change, suspend, discontinue or otherwise hold any part of the Website or Smart Services from any user of the Website at any time without prior notice or liability.</p>
                    <h3>MISCELLANEOUS</h3>
                    <p>
                        We respect applicable laws and regulations and seek to perform in accordance with them. Therefore, in the event that any portion of the Terms and Conditions listed here is held to be invalid or unenforceable, applicable law shall be used to reflect the original intentions of the parties in question. The remaining provisions listed in these Terms shall remain in full force and effect. This section, and the sections entitled Disclaimer, Limitation of Liability, Indemnification and Intellectual Property shall survive the termination of these terms. These Terms shall not be assigned or waived unless done so in writing. Neither the course of conduct between the parties in question nor trade practices shall act in modification or provisions of these Terms. You (the user) are solely responsible for compliance with applicable laws and regulations governing your use of this Website. These Terms contain our entire agreement with respect to our customers and the subject matter in these Terms and Conditions supersede all prior agreements whether they be oral, written or otherwise between all parties regarding the subject matter.</p>
                    <p>
                        All questions, comments, or requests for information about our Terms should be directed to <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="335a5d555c18405c5f52411e5e5c5d564a1e40524556411d505c5e73405e524147405c5f52414052455a5d54401d505c5e1d">[email&#160;protected]</a> You may also write to us at Lead Flux, Inc., 1740 H. Dell Range Blvd #281, Cheyenne, WY 82009.</p>

                    <style>
                        strong {
                            font-weight: bold;
                        }
                    </style>
                </div>
                <div id="privacy-php" class="hidden">
                    <h2 id="privacy-php-top">Privacy Policy</h2>
                    <p>Effective July 10th, 2022</p>
                    <p>Last Updated October 3rd, 2022</p>
                    <p>Lead Flux, Inc. and its affiliated entities (“Lead Flux”) are committed to respecting your privacy and protecting
                        your personal information. This Privacy Policy explains the types of personal information we may collect from
                        visitors to our websites, including www.smartsolarsavings.com and all related websites, mobile apps, and web-based
                        services (our “Sites”). This Policy also describes how we use personal information, the purpose for sharing and
                        recipients of personal information, and your available rights and choices associated with that information.</p>
                    <p>This Privacy Policy is provided in a layered format. You can jump to a specific section by clicking on the section
                        below:</p>
                    <ol>
                        <li><a href="#section1">Collection of Personal Information</a></li>
                        <li><a href="#section2">Use of Personal Information</a></li>
                        <li><a href="#section3">Sharing of Personal Information</a></li>
                        <li><a href="#section4">Your Rights and Choices</a></li>
                        <li><a href="#section5">Data Security</a></li>
                        <li><a href="#section6">International Data Transfers</a></li>
                        <li><a href="#section7">Cookie Policy</a></li>
                        <li><a href="#section8">Children’s Privacy</a></li>
                        <li><a href="#section9">Links to Other Websites</a></li>
                        <li><a href="#section10">Changes to This Privacy Policy</a></li>
                        <li><a href="#section11">Contact Us</a></li>
                    </ol>
                    <p>This Privacy Policy does not apply to third-party websites, products or services, even if they link to our Sites. We
                        recommend you review the privacy practices of those third parties before connecting accessing third party websites
                        and sharing any personal information.</p>
                    <p>We also encourage you to review our <a href="terms.php">Terms of Use</a> and <a href="ccpa.php">California Privacy Notice</a>, to understand how your
                        personal information will be treated as you make full use of our Sites. Unless otherwise defined in this Privacy
                        Policy, capitalized terms used in this Privacy Policy have the same meanings as in our Terms of Use.</p>

                    <h3 id="section1">1. Collection of Personal Information</h3>
                    <p>For purposes of this Privacy Policy, “personal information” means any information that relates to an identified or
                        identifiable individual. The personal information we collect through our Sites will be apparent by the context of
                        the page, and may include but is not limited to the following types of information.</p>
                    <h4><strong>a. Personal information you provide to us</strong></h4>
                    <p>We may collect the following personal information about you that you choose to provide us when you use our Sites:</p>
                    <ul>
                        <li><strong>Contact information.</strong> When you fill out an online webform with Lead Flux, you may be asked to
                            provide your first and last name, email address, residential address, zip code, and phone number.
                        </li>
                        <li><strong>Commercial information.</strong> You may also be asked to provide various information related to your
                            home and home energy usage, such as your utility provider, utility and average monthly electric bill, and the
                            amount of solar exposure on your place of residence.
                        </li>
                    </ul>
                    <h4><strong>b. Information that we automatically collect</strong></h4>
                    <p>Our Sites use cookies and other tracking technologies such as web beacons, embedded scripts, and tags (“Cookies”),
                        which collect information from you automatically as your use our Sites, including:</p>
                    <ul>
                        <li>
                            <strong>Browser and device data</strong>, such as IP address, device identifier, device type, operating system
                            and Internet browser type, screen resolution, operating system name and version, device manufacturer and model,
                            language, plug-ins, add-ons, and the language version of the Sites you are visiting; and
                        </li>
                        <li>
                            <strong>Usage data</strong>, such as geolocation data, browsing history, time spent on the Sites, pages visited,
                            links clicked, language preferences, patterns of use, and the pages that led or referred you to our Site.
                        </li>
                    </ul>
                    <p>We also collect information about your online activities on websites and connected devices over time and across
                        third-party websites, devices, apps, and other online features and services. For example, some of our community
                        websites may use Google Analytics on our Sites to help us analyze your use of our Sites and diagnose technical
                        issues. As another example, we may utilize cookies and other third party trackers that collect basic tracking
                        information about users that click on links to our Promotions Providers’ websites from our Site.</p>
                    <p>
                        You are specifically advised that, consistent with your agreed-upon
                        <a href="terms.php">Terms of Use</a>,
                        Our website utilizes tracking technologies to collect and record your activities
                        and movements across our websites throughout your browsing session, including to
                        track button clicks, mouse movements, scrolling, resizing, touches, keystrokes, data
                        entered, device information and orientation, browser visual elements, and screen size
                        (“Session Data”), for purposes of our own internal analytics and improving our
                        products, services, and user experience. Such tracking may include recorded
                        sessions, which we may play back for these purposes. We may share Session Data
                        with, or Session Data may be created by, our third party analytics or service
                        providers, which may change from time-to-time, for these exclusive purposes, who
                        will use the Session Data solely on our behalf and for our benefit. Please review how
                        your consent to the collection, use, and limited sharing of Session Data in our
                        <a href="terms.php">Terms of Use</a>.
                    </p>
                    <p>Please review our Cookie Policy below for more information about our use of these technologies.</p>
                    <h3 id="section2">2. Use of Personal Information</h3>
                    <h4><strong>a. Our products and services</strong></h4>
                    <p>We use the personal information we collect to provide, maintain and improve our Sites and the services that Lead Flux
                        offers through them (our “Services”). This includes:</p>
                    <ul>
                        <li>To provide you with requested Services, which may include evaluations for home improvement products and
                            services, including energy-related solutions.
                        </li>
                        <li>To provide you with customer service and support, and to facilitate other communications that you request or
                            that are required to render Services to you.
                        </li>
                        <li>To provide you with information about new Services and other opportunities that we believe may be of interest to
                            you, whether offered by us, Third-Parties, or Promotions Providers, and to personalize, measure, and improve
                            such offers.
                        </li>
                        <li>To perform analytics for new and existing Services, such as our user accounts and related features</li>
                        <li>To maintain and improve the quality of our Sites and Services</li>
                        <li>To grow our business, including to perform research and development, understand our user trends, and understand
                            the effectiveness of our marketing
                        </li>
                        <li>To protect ourselves, you, and others; prevent fraud; and create and maintain a trusted, secure, and reliable
                            online environment
                        </li>
                        <li>To comply with our legal obligations; respond to subpoenas, court orders, or legal process; or to establish or
                            exercise our legal rights or defense against legal claims
                        </li>
                    </ul>
                    <h4><strong>b. Digital marketing communications from us</strong></h4>
                    <p>We may send you promotional email communications about Lead Flux, invite you to participate in events or promotions,
                        or otherwise communicate with you for marketing purposes, as allowed by applicable law. For example, when we collect
                        your contact information through your interaction with our Sites, we may use that information to follow up with you
                        regarding an event or send you information that you have requested about Lead Flux. You may opt out of receiving
                        any, or all, of these communications from us via the unsubscribe link provided in such emails or by following
                        further instructions provided in <a href="#section4">Your Rights and Choices</a>.</p>
                    <h3 id="section3">3. Sharing of Personal Information</h3>
                    <p>We may share your personal information with the following categories of third parties:</p>

                    <ol class="letters">
                        <li><strong>Our affiliates.</strong> We may share personal information with our affiliates to provide our Sites and
                            Services and for internal administrative purposes.
                        </li>
                        <li><strong>Product/Service providers.</strong> We share personal information with our product/service providers,
                            such as analytics, advertising, marketing, customer and technical support, and other services. These third
                            parties have access to your personal information only to perform these tasks and are obligated not to disclose
                            or use the information for any other purpose.
                        </li>
                        <li><strong>Third-Parties.</strong> We share personal information, either directly or through intermediary agents
                            and/or entities (including, lead aggregators and vendors to such businesses), with one or more third-party
                            entities, such as solar and/or home improvement product/service providers, marketers of such products/services,
                            and/or affiliate companies (collectively, including intermediaries, “Third-Parties”). For example, we may share
                            personal information with Third-Parties for their direct marketing purposes. We may also share personal
                            information with Third-Parties at a point in time after it is initially collected.
                        </li>
                        <li><strong>Promotions Providers.</strong> In addition to Third-Parties, our Sites may also present offers for
                            promotions for other products and services that may be of interest to you (“Promotions Providers”). We only
                            share limited web tracking data with Promotions Providers if you choose to click on the hyperlinks we provide
                            for their offers, which will take you to the Promotions Provider’s website.
                        </li>
                        <li><strong>Third-party platform advertising.</strong> We may share your information with third-party platform
                            providers who assist us in serving advertising regarding the Sites and Services to others who may be interested.
                            We also partner with third parties (such as Facebook and Google) who use Cookies to serve interest-based
                            advertising and content on their respective third-party platforms that may be based on your preferences,
                            location and/or interests.
                        </li>
                        <li><strong>Affiliate and business transfer.</strong> If Lead Flux is involved in a merger, acquisition or asset
                            sale, your personal information may be transferred. We will provide notice before your personal information is
                            transferred and becomes subject to a different privacy policy.
                        </li>
                        <li><strong>Compliance and harm prevention.</strong> We may share personal information as we believe necessary (i)
                            to comply with applicable law, rules and regulations; (ii) to enforce our contractual rights; (iii) to
                            investigate possible wrongdoing in connection with the Site and Services; (iv) to protect and defend the rights,
                            privacy, safety and property of Lead Flux, you or others; and (v) to respond to requests from courts, law
                            enforcement agencies, regulatory agencies, and other public and government authorities.
                        </li>
                    </ol>
                    <p>The selection of a Third-Party to acquire your personal information may be determined by a comparison with available
                        products/services, including solar and/or home improvement-related products/services. The position of each potential
                        purchaser may also be determined primarily by the price the purchaser is willing to pay for the information (e.g.,
                        the higher the price, the better the purchaser's position).</p>
                    <p>We may create aggregated, anonymous or de-identified data from personal information by removing data components that
                        make the data personally identifiable to you or through obfuscation or other means. Our use of aggregated,
                        anonymized and de-identified data is not subject to this Privacy Policy.</p>
                    <h3 id="section4">4. Your Rights and Choices</h3>
                    <p>You may have rights and choices regarding our use and disclosure of your personal information. Unless instructed
                        otherwise, you can exercise these rights and choices using the information in the <a href="#section11">Contact Us</a> section at the end of
                        this Policy.</p>
                    <ol>
                        <li>Opting out of receiving electronic communications from us. If you no longer wish to receive promotional email
                            communications from us, you may opt out via the unsubscribe link included in such emails or by emailing us at
                            <strong><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5930373f36722a3635382b743436373c20742a382f3c2b773a3634192a34382b2d2a3635382b2a382f30373e2a773a3634">[email&#160;protected]</a></strong>. We will comply with your request as soon as reasonably practicable. Please note that if you opt out of
                            receiving promotional emails from us, we may still send you important administrative messages that are required
                            in order to provide you with our Services or for other reasons disclosed in this Policy.
                        </li>
                        <li>Your California privacy rights. <a href="ccpa.php">If you are a California resident, you may visit our Notice for California</a>
                            Residents to learn more about the personal information we collect, use and disclose, as well as your privacy
                            rights related to your personal information under the California Consumer Privacy Act (CCPA) and other state
                            laws.
                        </li>
                        <li>Your Nevada privacy rights. Nevada residents have the right to request to opt out of any “sale” of their
                            personal information under Nevada SB 220. You may request to opt out of the future sale of your personal
                            information. If you are a Nevada resident and would like to make such a request, please email us at <strong><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7aea9a1a8ecb4a8aba6b5eaaaa8a9a2beeab4a6b1a2b5e9a4a8aa87b4aaa6b5b3b4a8aba6b5b4a6b1aea9a0b4e9a4a8aa">[email&#160;protected]</a></strong> and
                            provide “Nevada Privacy Rights” in the subject line. You must include your full name, email address and postal
                            address in your request so that we can verify your Nevada residence and respond. In the event we sell your
                            personal information after the receipt of your request, we will make reasonable efforts to comply with such
                            request.
                        </li>
                    </ol>
                    <h3 id="section5">5. Data Security</h3>
                    <p>The security of your personal information is important to us, but remember that no method of transmission over the
                        Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to
                        protect your personal information, we cannot guarantee its absolute security. We maintain appropriate technical,
                        administrative and physical safeguards to help protect the security of your personal information against
                        unauthorized access, destruction, loss, alteration, disclosure or misuse.</p>
                    <h3 id="section6">6. International Data Transfers</h3>
                    <p>Our Sites are operated exclusively in the United States and intended for users located in the United States. We may
                        transfer, store and use information we collect and maintain about you, including personal information outside of
                        your state, province, country or other governmental jurisdiction. The data protection laws in the jurisdiction in
                        which we process personal information may differ from those of your jurisdiction, and in certain circumstances, your
                        personal information may be subject to access requests from governments, courts, law enforcement agencies or
                        regulatory agencies in those other jurisdictions. By using the Sites or providing us with any information, you
                        consent to the transfer and processing of your information, including personal information, in the United States as
                        set forth in this Privacy Policy.</p>
                    <h3 id="section7">7. Cookie Policy</h3>
                    <p>When you visit our Sites, we may collect information from you automatically through Cookies. We also rely on
                        partners to provide many features of our Sites using data about your use of the Sites. We use Cookies for
                        the following purposes:</p>
                    <ul>
                        <li><strong>Necessity.</strong> To enable features that are necessary for providing you the services on our Sites, such as keeping
                            you signed in, improving security, and preventing and detecting fraud.</li>
                        <li><strong>Preference.</strong> To allow us to remember your preferences and identify you when you return to our Sites.
                        <li><strong>Analytics.</strong> To allow us to understand how our Sites are being used, track site performance and content views, and
                            make improvements to the content, products or services.</li>
                        <li><strong>Advertising.</strong> To deliver targeted advertising based on your preferences, location, and/or interests across
                            different services and devices and measuring effectiveness of ads.</li>
                        <li><strong>Social Media.</strong> To enable the sharing of content from our Sites through social networking and other sites.</li>
                    </ul>
                    <p>You can modify your browser settings to decline or accept Cookies. However, in a few cases, some of our Sites’
                        features may not function as designed.</p>
                    <p>If you wish to opt out of our sharing of the data that is gathered when you visit our Site for purposes of
                        targeted digital advertising, we encourage you to visit the <a href="https://optout.networkadvertising.org/?c=1" target="_blank">Network Advertising Initiative</a> or
                        <a href="https://optout.aboutads.info/?c=2&lang=EN" target="_blank">the Digital Advertising Alliance’s Self-Regulatory Program for Online Behavioral Advertising</a> for more information about
                        opting out of seeing targeted digital advertisements. Similarly, you can learn about your options to opt out of
                        mobile app tracking by certain advertising networks through your device settings. You may also visit these
                        websites for more information on how you can opt back in to the sharing of data. Please note that Lead Flux does
                        not maintain this web tracking data in an identifiable manner.
                    </p>
                    <p>Opting out of advertising networks does not necessarily mean that you will not receive advertisements while
                        using our Sites or on other websites.</p>
                    <p>We do not support Do Not Track functionality. Do Not Track is a preference you can set in your web browser to
                        inform websites that you do not want to be tracked. You can enable or disable Do Not Track by visiting the
                        Preferences or Settings page of your web browser.</p>
                    <h3 id="section8">8. Children’s Privacy</h3>
                    <p>The Sites are intended for a general audience and we do not knowingly collect personal information from children
                        under age 18 through the Sites.</p>
                    <p>If you are a parent or guardian and you are aware that a child under age 13 has provided us with personal
                        information without parental consent, please contact us using the information in the <a href="#section11">Contact Us</a> section. If we
                        become aware that we have collected personal information from children under age 13 without verification of
                        parental consent, we will take steps to remove that information from our servers.</p>
                    <h3 id="section9">9. Links to Other Websites</h3>
                    <p>Our Sites may contain links to other websites that are not operated by Lead Flux. We strongly suggest you review
                        their privacy policies. If any linked website is not owned or controlled by us, we are not responsible for its
                        content or privacy policies, or the practices of the operator of the website or services.</p>
                    <h3 id="section10">10. Changes to This Privacy Policy</h3>
                    <p>We may change this Privacy Policy from time to time to reflect new services or changes in our data practices or
                        relevant laws. The “effective date” legend at the top of this Privacy Policy indicates when this Privacy Policy
                        was last revised. Any changes are effective when we post the revised Privacy Policy on the Sites. If we make any
                        material changes to this Privacy Policy, we will take reasonable measures to notify you via email and/or a
                        prominent notice on our Platform prior to the change becoming effective, and will update the effective date at
                        the top of this Privacy Policy. You are advised to review this Privacy Policy periodically for any changes.</p>
                    <h3 id="section11">11. Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy or wish to exercise one of your privacy rights, please
                        contact us by emailing <strong><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a13141c15510915161b08571715141f0357091b0c1f08541915173a09171b080e0915161b08091b0c13141d0954191517">[email&#160;protected]</a></strong> or sending a letter to:</p>
                    <p>
                        Lead Flux, Inc.<br>
                        1740 H. Dell Range Blvd., #281<br>
                        Cheyenne, WY 82009
                    </p>

                    <style>
                        strong {
                            font-weight: bold;
                        }
                    </style>
                </div>
                <div id="companylist-php" class="hidden">
                    <h2 id="companylist-php-top">Company List</h2>
                    <p>
                        If you signed up on our website you may be contacted by one or more of these companies: </p>
                    <p>
                        ADT<br>ADT Solar<br>100 Insure<br>12-Gauge Electric<br>1800 Remodel<br>1st Light Energy<br>1st Light Energy-WS<br>1st US Energy<br>21 Solar Tech.<br>21st Century Power Solutions<br>2Four6 Solar<br>2K Solar<br>2the Max Media (Solar NY)<br>2the Max Media (Solar)<br>3 Guys Solar<br>310 Solar<br>31Solar<br>320 Solar<br>3D Solar<br>A & R Solar<br>A Division of Mechanical Energy Systems<br>A National Electric Service<br>A-1 Electric<br>A. Zamler<br>A.D.D. Solar Connect<br>A.I. Solar<br>A&G Electric Company<br>A&M Energy Solutions<br>A&R Solar<br>A1 Energy<br>A1 Solar Power<br>A1A Solar<br>A1A Solar Contracting<br>AA Solar Services<br>AAA Going Green Insulation<br>AAE Solar<br>Aapco<br>Aapco Solar<br>Abakus Solar USA<br>Abbott Electric<br>ABC Energy Solutions<br>ABC Plumbing<br>ABC Solarorporated<br>Abco Design / Schrader Construction<br>ABCO Energy AZ<br>ABCO Solar<br>abcSAGE<br>ABEC Electric Company<br>Abender Corporation<br>ABest Energy Power<br>Able Electric<br>Able Electrical Services<br>Able Energy Co.<br>ABM Industries<br>Above All Roofing Solutions<br>ABP Electrical<br>ABS Alaskan<br>ABS Specialists<br>Absolute Air<br>Absolute Best Plumbing<br>Absolute Comfort<br>Absolute Environmental Solutions<br>Absolute Power<br>Absolute Renewable Energy<br>Absolute Solar<br>Absolute Solar and Energy Solutions<br>Absolute Sustainability<br>Absolutely Solar<br>ABT Electric<br>Abundant Energy<br>Abundant Solar<br>Ac Air Certified Heating & Air Conditioning<br>AC General Contracting<br>AC Power<br>AC Solar<br>AC&R Service Heating & Cooling<br>ACA Solar<br>Academy Roofing<br>Acadiana Solar<br>Accelerate Solar<br>Access Geothermal<br>Accessdrive<br>Accord Power<br>Accura Electrical Contractor<br>Accuracy Electric<br>Accurate Electric Technologies<br>Accurate Electrical Services<br>Accutek Solar<br>AccuTrack Solar Systems<br>ACDC Solar<br>ACDC Solar-order 2<br>ACE Electrical & Controls<br>ACE Roofing & Construction<br>ACE Solar<br>ACE Solar and Roofing<br>Ace Solves It All<br>Acecon Solar<br>Achieve Renewable Energy<br>Achievers<br>ACK Smart Energy<br>Acme Electric Company<br>Acme Energy<br>ACME Environmental<br>ACME International Services<br>ACME Solar Solution<br>ACOS Energy<br>Acquire Results Marketing<br>ACR Solar<br>ACR Solar International Corp<br>Acro Energy<br>ACS Air Conditioning Systems<br>ACS Electrical Contractors<br>Act on Solar<br>Acterra Group<br>Action Air Conditioning Heating and Solar<br>Action Electric<br>Action Solar<br>Action Solar & Electric<br>Active Energies<br>Active Solar<br>Active Solar Development<br>Acushnet Alternative Heating<br>Ad Energy<br>Adam T<br>Adams A+ Electric<br>Adams Electric<br>Adams Group Architects<br>Adaptive Solar Design<br>Add On Electric<br>ADD Solar<br>Addison Homes<br>Address Group<br>Addy Electric<br>ADE Electric<br>AdenBecks Electrical<br>ADim-UP Solar<br>Adirondack Battery and Solar<br>Adkisson Electric<br>Adlaw Power Services<br>Adman Electric<br>Admiral Solar<br>Adobe REO<br>Adobe Solar<br>Adolfson & Peterson Construction<br>AdoptAContractor<br>Adorno Consulting<br>Adroit Energy<br>ADT Protect Your Home<br>Advance Electric<br>Advance Power<br>Advance Solar & Spa<br>Advance Solar Construction<br>Advanced Alternative Energy Solutions<br>Advanced Commercial Enterprises<br>Advanced Custom Electric<br>Advanced Distributed Generation<br>Advanced Electric & Air Conditioning<br>Advanced Electric and Solar<br>Advanced Electric of Skagit County<br>Advanced Electric Services<br>Advanced Electrical<br>Advanced Electrical Construction<br>Advanced Electrical Securities<br>Advanced Electrical Systems<br>Advanced Energy Resources<br>Advanced Energy Services<br>Advanced Energy Solutions<br>Advanced Energy Systems<br>Advanced Energy Systems Development<br>Advanced Green Technologies<br>Advanced Improvements<br>Advanced Innovative Systems<br>Advanced Mechanical Systems<br>Advanced Performance Solar<br>Advanced Roofing<br>Advanced Solar (SU Tucson)<br>Advanced Solar & Electric<br>Advanced Solar & Energy Solutions<br>Advanced Solar and Electric<br>Advanced Solar Construction<br>Advanced Solar Distributor<br>Advanced Solar Electric<br>Advanced Solar Energy<br>Advanced Solar Heating & Cooling Specialists<br>Advanced Solar Power<br>Advanced Solar Products<br>Advanced Solar Technologies<br>Advanced Solarone Products<br>Advancing Solar<br>Advantage Electric<br>Advantage Solar<br>Adventum<br>Advertising Results<br>AEC Corp<br>AEC Solar<br>AECOM<br>Aegis Electrical System<br>Aegis Renewable Energy<br>Aegis Solar Energy<br>Aeon Renewable Energy<br>AeonSolar<br>AEOS Energy<br>AEPS Electric.<br>Aerobine<br>Aeronox Solutions<br>Aerosun Electric<br>AES Distributed Energy<br>AES Group<br>AES Northeast<br>AES Solar Pro<br>AET Solar<br>Aeterna Energy<br>AEW<br>AFC Comfort Company<br>AFC Electric<br>AFC Plumbing & Solar<br>AFC Solar<br>Affiliate Media Network<br>Affiliate Solar<br>Affinity Energy<br>Affinity Solar<br>Affordable Air Conditioning & Heating<br>Affordable Alternative Energy<br>Affordable Electricians<br>Affordable Energy Center<br>Affordable Energy Concepts<br>Affordable Energy Solutions<br>Affordable Heating Cooling & Electrical Services<br>Affordable Home Solar<br>Affordable One Home Services<br>Affordable Plus Remodeling<br>Affordable RV Service and Repair<br>Affordable Solar<br>Affordable Solar Contracting<br>Affordable Solar Distribution<br>Affordable Solar Group<br>Affordable Solar Hot Water and Power<br>Affordable Solar Works<br>AffordaSolar<br>AG & B Construction<br>AG Contractors & Roofing<br>AG Electrical Contractors<br>AG Electrical Services<br>AG National<br>Agape Development & Design<br>AGB Services<br>AGILE Remodelers<br>Agri Electric<br>AgSun Corporation<br>AgWell Solar<br>Ahana Renewables<br>AI Solar<br>AICA Energy<br>Aid Electric Co.<br>AID Home Remodeling<br>Aikyum Solar<br>Ailey Solar<br>Air Novations<br>Air Sun<br>Air Tech HVAC<br>Air Wind & Solar<br>Air-Tro<br>Aireko<br>Airforce Mechanical & Solar<br>Airhart Electric<br>Aiteo7<br>AJ Engineers<br>AJ's Electric<br>AJB Engineering Consultants<br>AK Electrical<br>Akamai Sustainable Technologies<br>Akari Energy<br>Akasi Group<br>Al's Electric & Plumbing<br>Al's Electrical Services<br>Al's RV Service & Supply<br>Alabama Energy Doctors<br>Alairus - National Credit Card Relief<br>Alan Bonistall Electrical Contracting<br>Alan's Electric & Solar Service<br>Alares Engineering<br>Alarm Services<br>Alaska Efficient Energy Solutions<br>Alba Electric And Remodel<br>Albany Solar Energy<br>Albion Power Company<br>Alder Energy<br>Alderson Tile<br>Alevel Marketing<br>Alien Fuel<br>All Around HVAC Solar<br>All Bay Solar<br>All Bright Custom Solar<br>All Cal Energy<br>All Electric<br>All Electrical & Telecom<br>All Energy<br>All Energy Solar<br>All Green It<br>All In One Exteriors<br>All Pro Solar Svcs<br>All Solar<br>All Solar Electric<br>All Solar Reviews<br>All Valley Solar<br>Alladin Solar<br>Allegiance Construction Group<br>Alliance BioConversions Company<br>Alliance Energy and Mechanical<br>Allied Technical Services<br>AllSeason Solar<br>Allsolar Service Company<br>Allstate Jersey Central Electric & Solar<br>Allterra Solar<br>Allura Solar<br>Alpenglow Solar<br>Alpha Marketing Group<br>Alpine Digital Group<br>Alpine Solar<br>Alt Marketing NYC<br>Alt MarketingC<br>Alta Sol<br>Altadena Energy & Solar<br>Altech Electric<br>Alter Systems<br>Alternate Energy Solutions<br>Alternatech<br>AlternateEnergy<br>Alternatex Solutions<br>Alternative Carbon Energy Systems<br>Alternative Electric Power<br>Alternative Energy Concepts<br>Alternative Energy Finance Corporation<br>Alternative Energy Resources<br>Alternative Energy Southeast<br>Alternative Energy Systems<br>Alternative Power Solutions Corp.<br>Alternative Power Systems<br>Altitude Marketing<br>Altitude Marketing-AC Solar<br>AM Solar<br>Am Sun Solar<br>Amalgamated Power & Energy<br>Amazing Construction<br>Amazing Solar Solutions<br>Ambassador Energy of North Texas<br>Amber Bow<br>Ambition Electric<br>AMECO Solar<br>Amenergy<br>Amercan Solar Energy<br>America Green Builders<br>American Array Solar<br>American Classified Services<br>American Classifieds<br>American Clean Energy Solar<br>American Design & Build<br>American Electric<br>American Energy Care<br>American Financial Network<br>American Legacy Solar<br>American Pacific Solar<br>American Patriot Solar<br>American Patriot Solar Community<br>American Renewable Energy<br>American Select Partners<br>American Sentry Solar<br>American Solar<br>American Solar & Alternative Energies<br>American Solar and Alt Energy Solutions<br>American Solar Direct<br>American Solar Electric<br>American Solar Energy<br>American Solar Power<br>American Solar Solution<br>American Solar Specialists<br>American Solargy<br>American Solargy & American Solargy Electric<br>American Vision solar<br>Americas Choice Contractor<br>Amerisave Mortgage<br>Amerisave Solar<br>Ameryk<br>AmmEn Design<br>Amped On Solar<br>Amplify Solar Marketing<br>Ampray<br>Ancelet Advising<br>Andersen Windows<br>Anderson Electric<br>Anderson Solar Controls<br>Angel Wind Energy<br>Angle Solar Solutions<br>Anubis Power and Electric<br>AnyTime Remodeling<br>Apex Solar<br>Apollo Solar<br>Appalachian Energy Solutions<br>Appalachian Renewable Power Systems LTD.<br>Appalachian Renewable Power Systems, Ltd.<br>Applied Energy Innovations<br>Applied High Voltage<br>Applied Solar Energy<br>Apricot Solar<br>APS Solar<br>Aquilla Solar<br>Aram Solar<br>Arcadia Power Inc<br>Arcadia Solar<br>Arctic Sun<br>Are Sun Solar<br>Argand Energy<br>Argand Energy Solutions<br>Argent Solar Electric<br>ARiES Energy<br>Arise Energy Solutions<br>Arise Solar<br>Arise Solar PTY LTD<br>Arizona Custom Solar<br>Arizona Energy Pros<br>Arizona Energy Services<br>Arizona Solar Concepts<br>Arizona Solar Wave<br>Arizona Solar Wave & Energy<br>Arizona Solar Wave #2<br>Arizona Wholesale Solar<br>Ark Solar<br>Arlo.ai<br>Armando’s Construction Services<br>Array of Solar<br>Arroyo Electric<br>Art Construction<br>Art Electric & HVAC<br>ArtGreen Solar<br>Artisan Electric<br>ASC Solar Solutions<br>ASI Heating Air & Solar<br>ASI Heating, Air & Solar<br>Asidaco<br>Assured Solar Energy<br>Aston Solar<br>Astoria<br>Astoria Company<br>Astralux Solar<br>Astrum Solar<br>Aten Concepts<br>Aten Solar<br>Atlantic Solar Solutions<br>Atlas Solar Power<br>Atlasta Solar Center<br>Attorneys Tax Relief<br>Aubrey Digital Home<br>Auric Solar<br>Aurora Energy<br>Australian Slimline Trestles<br>Automation Solar<br>AWS Solar<br>AWSES<br>Axion Building Products<br>Axium Solar<br>Ay Solar<br>AZ Solar Wave<br>AZ Solar Wave-Brad<br>AZ Sun Services<br>Aztec Solar<br>Aztec Solar Power<br>B & B Solar<br>B.E. Solar<br>B&B Solar<br>B1 Marketing<br>Bad Ass Insurance Leads<br>Baker Electric Solar<br>Baker Power<br>Baker Renewable Energy<br>Baker Roofing & Construction<br>Baker Solar and Electric<br>Baldwin risk partners<br>Bank On Solar<br>Banner Home Solutions<br>Barrus Solar<br>Basin Industries<br>Bay Solar Group<br>Bayman Electric<br>Bayou Solar<br>Baystate Solar Power<br>BDS Solar<br>Beacon Travel<br>Beam<br>Bear Country Solar<br>Beautifi Solar<br>Beaver Solar<br>Beehive Technical Services<br>BeFree Solar<br>Bell Solar Electric LP<br>Bell Solar Electric, LP<br>Bella Energy<br>Bella Power and Light<br>Bella Solar<br>Bellwether Construction<br>Belmont Solar<br>Benefits Team<br>Bentley Global Associates<br>Berkeley Solar Electric Systems<br>Berkowatts Electric<br>Best Solar Solutions Hawaii<br>Better Earth Solar<br>Better Green Building Company<br>Beyond Energies<br>Bi-Coastal Media<br>Big D Electric<br>Big Dog Renewable Energy<br>Big Sky Renewable Energy<br>Big Sky Solar<br>Bills Solar<br>Billy.com<br>Biolead Resources<br>Black Diamond Solar<br>Black Platinum Solar & Electric<br>Blair General Contracting<br>Blake Electric<br>Blue Ink<br>Blue Ink - Tier 1 Traffic Only<br>Blue Ink - Tier 2<br>Blue Ink Digital<br>Blue Marble Solar<br>Blue Mountain Construction<br>Blue Pacific Solar<br>Blue Raven<br>Blue Raven Solar<br>Blue Ridge Sun<br>Blue Selenium Solar<br>Blue Sky Solar and Roofing<br>Blue Sky Solar Energy<br>Blue Tax Consulting Corp.<br>Bluechip Energy<br>Blueprint Solar<br>BlueStar Solar Energy<br>BMC Solar<br>BME Satellite and Solar<br>Bold Alternatives<br>Bombard Electric<br>Bombard Renewable Energy<br>Bonterra Solar<br>Border Solar<br>Bosch Floating Solar PV System & Solutions Co. Lt<br>Boss Leads<br>Boston Settlement Solutions<br>Boston Solar<br>Boundless, Inc<br>Boykin & Boykin Construction<br>Bozeman Green Build<br>Branding Iron Management<br>Briggs Electric<br>Bright Eye Solar<br>Bright Home Energy<br>Bright Sky Solar<br>Bright Solar Marketing<br>Brighter Ideas Solar Solutions<br>Brightergy<br>Brightergy – St. Louis<br>Brightest Solar<br>Brightside Solar<br>Brightstar Solar<br>Brite Idea Energy<br>Bronco Renewable Energy Solutions<br>Brothers Electric and Solar<br>Brower Mechanical<br>Brown Electric<br>Brownell Electric Corp.<br>Bruce Media Corp<br>Bruce Media Corp.<br>Buehler Brothers Electric & Solar<br>Buena Vista Technologies<br>Buffalo Solar Solutions<br>Building Doctors<br>Built Well Solar<br>Builtgreen California<br>Burlington Solar<br>BVI Solar<br>BYO Solar<br>C & J Solar Solutions<br>C-Tec Solar<br>C.A.M. Solar<br>C&J Solar Solutions<br>C2C<br>CA Home Solar<br>CA Sunrise Construction Solutions<br>Cal Paso Solar<br>Cal-Power<br>Cali Contractors<br>Cali Energy<br>Cali Solar<br>Caliber Solar<br>California Green Designs<br>California Home Solar<br>California Preferred Solar<br>California Solar<br>California Solar Energy<br>California Solar Engineering<br>California Solar Solutions<br>California Solar Systems<br>California Solar Wave<br>California Sun Systems<br>Call Box Sales & Marketing Solutions<br>CalState Solar<br>CalSun Electric & Solar<br>CAM Solar<br>Candelaria Solar Electric<br>Canto Solar & Energy<br>Canto Solar Energy<br>Cantsink Manufacturing<br>Cape Fear Solar Systems<br>Capella Solar<br>Capital City Solar (previously Solarecity Electric)<br>Capital Home Mortgage<br>Capital Sun Group<br>Carbon Vision<br>Care Free Homes<br>Carlson Electric<br>Carlson Solar Technologies<br>Carolina Solar Energy<br>Carr Creek Electric Service<br>Cascade Renewable Energy<br>Cascade Sun Works<br>Cast Salon<br>Castle Energy<br>Catalyst Solar, LLC<br>Catalyst Solar, LLC<br>CathchinRays Solar<br>CCI Energy Solutions<br>CE Team<br>Cedar Creek Energy<br>CEE<br>CEGA Clean Energy Group Alliance<br>CEGE<br>Centah<br>Central California Solar<br>Central Mortgage Funding<br>Certified Safe Electric<br>Certified Solar Solutions<br>Certys Financial<br>Cheetah Solar<br>Chicago Windy City Solar Corp.<br>Chimney Specialists<br>Chippewa Valley Alternative Energy<br>Choice Right LLC<br>Cienaga Solar<br>Cinci Home Solar<br>Cincinnati Door & Opener<br>CIR Electrical Construction Corp.<br>Circle L Industries<br>Circle L Solar<br>Circuit Electric<br>Circular Energy<br>Circular Energy of Dallas<br>City Power and Gas<br>Citycom Solar<br>Clackamas Electric<br>Clarke & Rush<br>Clean & Green Alternatives<br>Clean Choice Energy Services LLC<br>Clean Energy Authority<br>Clean Energy Collective<br>Clean Energy Concepts<br>Clean Energy Design<br>Clean Energy Experts<br>Clean Energy Professionals<br>Clean Energy Savings USA<br>Clean Energy Solutions<br>Clean Initiative<br>Clean Power Finance<br>Clean Solar<br>Clean Tech Solar<br>Cleaner NRG<br>Cleantech Energy Solutions<br>Clear Horizon<br>Clear Solar<br>Clear Vision Solar<br>Clearlink<br>Clearway Community Solar<br>Cleveland Solar & Wind<br>Clever Energy<br>Client Consent<br>Client Consent Deregulated Energy LLC<br>Client Consent Solar<br>Client Consent Travel, LLC<br>Climax Solar<br>CMI Solar & Electric<br>CMI Solar Electric<br>CMP Solar<br>CNE Services<br>CNY Solar<br>Coast 2 Coast<br>Coast One Financial Group<br>Coastal Home Improvement<br>Coastal ICF Sunfarm Energy<br>Coastal Solar<br>Coastal Solar Power Company<br>Code Green Solar<br>Comerford Solar<br>Comfort Engineered Systems<br>Comfort First Heating and Cooling<br>Comfort King<br>Common Energy<br>Common Practice Building<br>Community West Mortgage<br>Complete Resources Building and Repair<br>Complete Solar<br>Complete Solar Solution<br>Complete Solar Solutions<br>Completely Solar<br>Concept Solar Co.<br>Conley Sheet Metal Works<br>Connected Power Systems<br>Connecticut Sun and Power<br>Connecting the Dots<br>Connector Electric<br>Conservation Solutions<br>Consolidated Solar Technologies<br>Constant Energy Source<br>Consumer Ai<br>Contactability<br>Contractors Electrical Service<br>Contractors Referral Services<br>Control Solar<br>Convergence Energy<br>Cool Blew<br>Cooler Planet<br>Cooling Control<br>Coronado Solar Installations<br>Corr Energy<br>Cosmic Solar<br>Cost Less Energy<br>CPSI Solar<br>Craftmasters General Contractors<br>Cre8tive Marketing<br>Creative Energies<br>Creative Solar USA<br>Crediquest<br>Crediquest – SDS<br>Credit Shield<br>Crius Energy<br>Crius Solar<br>Cross River Solar<br>Crown Solar Electric<br>CSI Electrical Contractors<br>CSI Sun<br>CSI&E<br>CSS Construction<br>CT Solar Services<br>CTec Solar<br>Current Electric Co.<br>Current Home<br>Current Installation<br>Custom Home Services<br>Custom Solar<br>Custom Solar and Leisure<br>Custom Solar Builds<br>Custom Works Energy Solutions<br>Customer Service Center<br>Cypress Creek Renewables<br>D & M Alternative Energy<br>D & R Energy Services<br>D&M Alternative Energy<br>D&M Energy Alternative<br>D&R Energy Services<br>D&W Technologies<br>Dale’s Remodeling<br>Dallas Cross Country Movers<br>David Jensen (Verengo)<br>Day and Night Solar<br>Day Break Solar Power<br>Daybreak Solar<br>Daylight Power Company<br>DBR Electric<br>DCS Energy<br>De Freitas Construction<br>Debt.com<br>DEC Solar Electric<br>Defender Direct<br>Del Sol Energy<br>Delicate Moving<br>Dennis Hillard<br>Dependable Solar Products<br>Desert Solar Designs<br>Design 1 Group<br>Design Technics<br>Detaxify<br>Detorres Group<br>DFW Solar Electric<br>DHII Enterprises<br>Dia Group<br>Diamond Solar<br>DigitalGreenMedia, LLC DBA Clean Energy Authority<br>Direct Connect Solar & Electric<br>Direct Home Advisors<br>Direct Sales Solutions<br>Direct Solar<br>Directsun Solar Energy & Technology<br>Discount Miami Movers<br>Discount Solar Water Heaters<br>Diversified Solar Solutions<br>Divine Energy Solutions<br>Dixie Home Crafters<br>DKD Electric<br>Donley Service Center<br>Dovetail Solar<br>Dovetail Solar and Wind<br>Down to Earth Solar<br>DPI Solar<br>DPS – ePath Media<br>DPS – LeadPoint<br>Driven Solar<br>Dubco Solar<br>Duke Energy<br>Durango Solar<br>Dusty Bateman<br>Dwell Solar<br>Dwell Tek<br>DX Tech Energy Systems<br>Dyna Tech Power instead of Planetary Systems<br>E & E Electric<br>E Light Wind and Solar<br>E.E. Solar<br>E.Z. Energy Solutions<br>E2 Solar<br>Earth and Air Technologies<br>Earth Electric<br>Earth Energy Innovations<br>Earth Energy Unlimited<br>Earth First Solar<br>Earth Wind And Solar Energy<br>Earthcrib<br>Eastern Energy Services<br>Eastern Massachusetts Solar Store<br>Eastern Plains Solar & Wind<br>EastWest Solar<br>EBR Energy Corporation<br>Eburg Solar<br>EC Power Solar Energy<br>Eco Depot<br>Eco Planet Builders<br>Eco Solar & Electric<br>Eco Solar Solutions<br>Eco-Friendly Contracting<br>Ecobilt Energy Systems<br>Ecofour<br>Ecogen America Solar<br>Ecohouse<br>Ecolibrium<br>Ecological Energy Systems<br>Ecolution Energy<br>EcoMark Solar<br>Ecomen Solar<br>Economic Moving Group<br>Econstruction<br>EcoSmart Home Services<br>Ecotech Energy Systems<br>EcoVantage Energy<br>Ecovision Electric<br>ECS<br>Ed Rike Plumbing Heating & Air<br>Edge Energy<br>Edison Power and Lighting<br>Edlab LTD<br>Educa Products<br>EEE Consulting<br>Efficient Home Construction<br>EHome by Design<br>El Paso Green Energies<br>Electric Distribution & Design Systems<br>Electricare & Inland Solar Center division of Electricare and Sun Is Money Marketing<br>Elektron Solar<br>Element Power Systems<br>Element Power, LLC<br>Elemental Energy<br>Elevation Solar<br>Elite Electric<br>Elite Solar Systems<br>Emerald Energy<br>Emerald Enterprise Corp<br>Empire Solutions<br>EmPower Solar<br>Empowered Improvements<br>EMT Solar<br>Enchanted Solar<br>Encompass Leads<br>Encon<br>Endless Mountain Solar<br>Endless Mtn Solar Services<br>Endlessmountainsolar<br>Energize With Sunrise<br>Energy 1<br>Energy 4 Less<br>Energy Attic<br>Energy By Choice<br>Energy Concepts<br>Energy Concepts Solar<br>Energy Conservation Solutions<br>Energy Conservation Solutions - ECS Solar<br>Energy Consultants Group<br>Energy Defenders<br>Energy Design<br>Energy Efficiencies<br>Energy Efficient Services<br>Energy Environmental Corporation<br>Energy Independent Solutions<br>Energy Management<br>Energy Master<br>Energy Monster<br>Energy One Corp<br>Energy Pro Solar<br>Energy Savings Pros<br>Energy Savings USA<br>Energy Shop<br>Energy Solutions By Total<br>Energy Solutions Direct<br>Energy Solutions Group<br>Energy Sun Solutions<br>Energy Unlimited<br>Energy Wise New York<br>Energy Wise Solutions<br>Energy Wize<br>Energywise Solar<br>Energywize<br>Enertech<br>Engineered Solar &P Systems<br>Enlightened Solar Integrations<br>Enrich Solar<br>enTech Electronics<br>Envinity<br>Enviroedge<br>Envirohome<br>Environmental Heating Solutions<br>Environome Solar<br>Erus Energy<br>ES Electrical Construction<br>ES Solar<br>Escape 2 Renewables<br>ESI<br>ETH Inspections & Construction<br>EV Solar Products<br>Evan Esposito Solar Consulting<br>Everguard Roofing & Solar<br>Everlast Home Energy Solutions<br>Everlast Solar<br>Everon Green Energy Solutions<br>Everyday Energy<br>Everything Solar<br>Evolve Solar<br>EWB Alternative Energy Systems<br>Exact Solar<br>Excel Electric<br>Excel energy<br>Exceptional Solar<br>Executive Electric<br>Expert Solar Systems<br>Express Solar<br>Extreme Solar<br>Extreme Solar and Alternative Energy Solutions<br>EZ Energy Solutions<br>EZ Solar<br>EZ Solar Electric<br>Ezee Moving<br>EZnergy<br>F.P.S. The Solar Specialist<br>Facilitylogic<br>Fafco Solar Energy<br>Fan Man nc<br>Far Hills Solar<br>Fast Track Marketing<br>Fenestra Solar<br>Ferrara Electric<br>Ferrin’s Air Force<br>Fidelity Home Energy<br>Fields of Leads<br>Finest Movers<br>First National Solar<br>First Source Solar Systems<br>First Texas Solar<br>Fisher Electric and Solar<br>Fisher Renewables<br>Five Strata<br>Flare Solar Power<br>Flatiron Solar<br>Florida Energy Water & Air<br>Florida Home Improvement Associates<br>Florida Pool Heating<br>Florida Power Services<br>Flow Home Energy<br>Flow Media<br>Fluent Solar<br>Foothills Energy Solutions<br>Forever Green Marketing<br>Forrest Anderson Plumbing<br>Foundation Insurance of Florida<br>Fountain Valley Electrical<br>Fourth Coast<br>Frase Electric<br>Frederickson Electric<br>Freedom Forever<br>Freedom Power<br>Freedom Solar<br>Freedom Solar Power<br>Friends Solar<br>Frontpoint<br>Frost Financial<br>Full Spectrum Solar<br>Fusion Power<br>Fusion Solar Energy<br>G Crew Solar<br>G2Power Technologies<br>Gardner Engineering<br>Gazzale<br>Gazzale.<br>Gehrlicher Solar America Corp<br>Gem Solar Properties<br>General Necessity Services<br>Generated Power Systems<br>Generation Solar<br>Genesis Power Systems<br>Geneva<br>Genie energy<br>GenRenew<br>Geonomic Developments<br>Geopeak Energy<br>George Sowers Solar<br>George Sparks<br>Georgia Building Analysis<br>Georgia Solar Power Company<br>Geoscape Solar<br>Geostellar<br>Gertler Law Firm<br>Get Engaged<br>Get Natural Energy Wind & Solar<br>Gettysburg Solar<br>GGE Solar<br>Global Connections<br>Global Energy<br>Global Green Energy<br>Go Data Services – DMB<br>Go Data Services – LCN<br>Go Green 4 Power<br>Go Green Electric<br>GO Simple Solar<br>Go Solar<br>Go Solar Now<br>Go Solar Power<br>Going Green Solar<br>Gold Rush Energy<br>Golden Gate Power<br>Golden Solar<br>Golden State Solar<br>Golden Valley Energy<br>Golden West Energy<br>Goldin Solar Miami<br>Gone Green Technologies<br>Good Electric<br>Good Faith Energy<br>Got Electric<br>Got Leads<br>Got Sun Energy<br>Grand Solar Oasis<br>Granite Bay Energy<br>Grassfield Plumbing<br>Great Brook Solar NRG<br>Great Lakes Renewable Energy<br>Green & Solar Works<br>Green Air<br>Green Brilliance<br>Green Circuit<br>Green Conception<br>Green Construction Service<br>Green Dragon Solar<br>Green Energy<br>Green Energy Authority<br>Green Energy Experts<br>Green Energy Products<br>Green Energy Systems<br>Green Essex Solar<br>Green Field Energy Solutions<br>Green Fuel Technologies<br>Green Guy Solutions<br>Green Home Advantage<br>Green Horizons Wind<br>Green House Solar<br>Green Integrations and Management<br>Green Life Technologies<br>Green Light Solar<br>Green Marbles<br>Green Power of North Carolina<br>Green Power Systems<br>Green Power Works<br>Green Roots Electric<br>Green Spring Energy<br>Green State Energy<br>Green State Power<br>Green Store<br>Green Street Solar Power<br>Green Sun Pro<br>Green Wolf Energy<br>Greenbelt Solar<br>Greenday<br>Greene Tech Renewable Energy<br>Greener Dawn<br>GreenForm<br>GreenFuel Technologies<br>Greeniverse<br>Greenleaf Solar Energy<br>Greenlife Technologies<br>Greenline Energy<br>Greenlogic Energy<br>Greenmodeling<br>Greenspire Energy<br>Greenspring Energy<br>Greenstar Solar Group Inc.<br>Greenstone Solar<br>Greentech Solar<br>Greentech Solar USA<br>GreenWatt Consulting LLC<br>Greenwire Systems<br>Greenworks Energy<br>Grid Alternatives<br>Grid Freedom<br>Group Solar USA<br>Guardian Services<br>Guerrera & Sons Electric<br>Guided insurance Solutions<br>Gulf South Electric & Solar<br>Gulf South Solar<br>GV Energy<br>GWA International<br>H&H Solar Energy Services<br>H2Sunlight<br>Haleakala Solar<br>Halo Energy<br>Hamilton Solar<br>Hammerhead Energy Consulting<br>Hannah Solar<br>Harmon Electric<br>Harmon Solar<br>Harmony Solar<br>Harrimans-Solar Energy Systems<br>Harrison Electric<br>Harsh<br>Harvest Energy Solutions<br>Harvest Solar and Wind Power<br>Havasu Solar<br>Hawaii Energy Connection<br>Hawaii Energy Smart<br>Hawaiian Island Solar<br>HD Energy Solutions<br>Healthy Homes America<br>HelioTek USA<br>Heliotropic Technologies<br>Helix Electric<br>Herca Solar<br>Heritus Marketing Group<br>HES<br>Hesolar<br>Hi Desert Industrial Electric<br>Hickory Ridge Solar<br>High Definition Solar<br>High Watt Solar<br>Highland Health Care<br>Highlight Solar<br>Hire Electric Solar Division<br>HiTech Solar Solutions<br>HK Flavors Limited<br>HMP Constructors<br>Home Advisor<br>Home Energy<br>Home Energy Conservation<br>Home Improvement Leads<br>Home Pros AI<br>HomeAdvisor<br>HomeLynk<br>HomeStar Solar Solutions-Exclusive<br>Honey Electric Solar<br>Honeycomb Solar<br>Horizon Property Developments<br>Horizon Solar<br>Horizon Solar Power<br>Hoskins International<br>Hosted Offer Unsubscribes<br>Hot Purple Energy<br>Hotwire Electric Corp.<br>HSC Solar<br>Hudson Solar<br>Hummingbird Electric<br>Humphrey & Associates<br>Hybrid Energy<br>Hydrox Technologies<br>I am Solar<br>I-Group Renewableorporated<br>I.N.O. Electrical Service<br>Icon Power<br>Icon Solar<br>IDT energy<br>IET Solar<br>iGroup Renewables<br>Illiana Power Corporation<br>Ilum<br>Imacutech<br>Impact Energy<br>Imperium Energy<br>Independence Renewable Energy<br>Independent Energy Solutions<br>Independent Green Technologies of Texas<br>Independent Power Corporation<br>Independent Power Systems<br>Independent Solar<br>Indicom Electric Company<br>Individual Power Solutions<br>Inerex<br>Infinergy Wind & Solar of<br>Infinergy Wind & Solar of Central Texas<br>Infinergy Wind and Solar of Colorado<br>Infinity Energy<br>Infinity Solar<br><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="167f7870795624272465797a77643875797b">[email&#160;protected]</a><br>Initiate Solar<br>Inland Electric<br>Inn Seasons Resorts<br>Innovation Direct Group<br>Innovative Energy<br>Innovative Power Systems<br>Innovative Solar Systems<br>Insurance Protection Solutions<br>Integrated Energy Concepts<br>Integrated Solar & Power<br>Integrity Heating AC & Solar<br>Integrity Solar<br>Intelhouse Marketing<br>Intelisolar Constructions<br>Intermountain Wind & Solar<br>Intersolar<br>Invertis Solar Systems<br>Ion Energy<br>Ion Solar<br>IQ Power<br>Island Solar<br>Island Wide Solar<br>Iwamoto Electric<br>Izun Energy<br>J. Ranck Electric<br>J.D. Stratton Electric<br>J&m Phillips Electrical<br>Jamar Power Systems<br>James Taylor Construction<br>JB Solar Energy<br>JBC Solar<br>JBS Solar and Wind<br>JC Mechanical<br>JC Solar<br>JE Solar<br>Jetion Solar<br>JG Solar Solutions<br>JMS Developers<br>Jones Solar and Roofing<br>Joule Energy<br>June Company Renewable Energy<br>Just Do It Builders<br>Kahn Solar<br>Kaitanna Solar<br>Kaizen Ecom Group<br>Kaleo Marketing<br>Kapa Construction Company<br>Kawa Media<br>Kayo Energy<br>KC Larson<br>KDH Solar<br>Kenergy Solar<br>Kevin Farrell<br>Key Energy Solutions<br>Key Heating & Air Conditioning<br>Keystone Alternative Energy and Technology<br>Keystone Renewable Energy Solutions<br>Kinetic Solar<br>Kopp Electric<br>Kopp Solar<br>Kosmos Solar<br>Kurios Energy<br>Kurt Johnsen Energy Systems<br>Kuubix Energy<br>Kuubix Global<br>Kuykendall Solar<br>KV Solar Supply<br>KW Management<br>KW Solar Solutions<br>LA Solar Energy<br>LA Solar Group<br>LA Solar Group AND BAY SOLAR GROUP<br>Las Vegas Vacations<br>Lawrence Wind and Solar<br>Lawrence Wind Energy<br>Lead Flux<br>Lead Genesis<br>Lead Genesis Partners<br>Lead Vision<br>Leadility<br>Leadmatic<br>Leadrilla<br>Leads Barter<br>Leads Warehouse<br>Leaf Solar Power<br>Leamy Electric<br>Legend Builders<br>Lenape Solar<br>Lender411.com<br>Levi Builders<br>LG TEST<br>LHF Marketing Corp Libertas Solar and Electric<br>Liberty Bay Solar<br>Lifestyle Solar<br>Lift Local<br>Lightfire Partners<br>Lighthouse Energy Partners<br>Lighthouse Solar<br>Lighthouse Solar Systems<br>Lightspace Solar Electric<br>LightWave Solar<br>Linked Solar - Solar Panels Melbourne<br>LL Media<br>Llumetec<br>Lodi Services Heat<br>Long Island Solar Solutions<br>Longhorn Solar<br>Longo Electric<br>Los Angeles Solar Installer<br>Los Angeles Solar Installers<br>Los Angeles Solar Panel<br>Los Angeles Solar Panels<br>Lucerne Pacific<br>Lumina Solar<br>Luminalt<br>Luminalt Solar<br>Lumino Consulting<br>Lumio<br>LVD Concepts<br>M. T Ruhl Electrical Contracting<br>M.I.T Electrical<br>Mac Solar<br>Madan Contact Centers Corporation<br>Made Renovations<br>Madison Ave Media<br>Magic Sun<br>Maine Guide Wind Power<br>Majestic Son & Sons<br>Make Great Again<br>Manchel New Jersey Bankruptcy Law<br>Mannino Electric<br>Marc Jones Construction<br>Marc Jones Construction.<br>Mark Solar Solution<br>Martifer Solar USA<br>Martin Companies<br>Martin Electric and Solar<br>Maryland Solar Solutions<br>Mass Power & Energy<br>Mass Renewables<br>Maui Pacific Solar<br>Maximus Solar<br>MaxPowur<br>Maxsunpower<br>Mc Solar<br>MCCG Solar Energy<br>McDonald Solar and Wind<br>McWire Electric<br>Meadows Solar Agency<br>MediaMix 365<br>Meraki Installers<br>Meraki Solutions<br>Mercury Mo-Dyne<br>Mercury Solar<br>Mercury Solar Systems<br>Metro Renewables<br>Metruk’s Electrical Contracting<br>Mewcury Solar Systems<br>Michael W. Fink Electrical<br>Michigan Solar & Wind Power Solutions<br>Microgrid Energy<br>Mid Peninsula Roofing<br>Mid-State Solar<br>Mid10 Marketing<br>Midamerica Solar<br>Midstate Renewable Energy Services<br>Midwest Solar and Electric<br>Midwest Solar Power<br>Midwest Wind and Solar<br>Milectra<br>Milestone Solar<br>Milholland Electric<br>Millennium 3 Energy<br>Miracle Solar<br>Mission valley Roofing<br>Mississippi Solar<br>Missouri Solar Solutions<br>Missouri Sun Solar<br>Missouri Valley Renewable Energy<br>Mitt Group<br>Modern Brokers of America<br>Modern City Solar<br>Modern Day Pros<br>Modernize<br>Mohr Power<br>Momentum<br>Momentum Solar<br>Momentum solar dba Pro Custom Solar<br>Monolith Solar Associates<br>Montes Electric<br>Moore Energy<br>Morgan and Morgan Solar<br>Mortgage Pros, LLC<br>Mortgage Right<br>Mother Nature Solar<br>Mountain View Solar & Wind<br>Mountaintop Greene Clean Energy<br>Moxie Solar<br>Moxie Solar - ENC<br>Mr Electric of Sonora<br>Mr. Build Solar<br>Mr. Central Home Services<br>Mr. Solar<br>Mr. Sun Solar<br>MRK Electrical Contractors<br>Msconco<br>MTP Enterprises<br>Muth & Sons Pluming 5th Generation Plumbers<br>My Free Powers<br>My Homes Services<br>My Noble Solar<br>MyMedsFree.com<br>Namaste Solar<br>Narenco<br>Nation One Capital<br>National Clean Energy<br>National Renewable Energy Corporation (NARENCO)<br>National Solar Experts<br>National Sun Energy<br>NationalHomeProject<br>Nationwize Solar<br>Native<br>NATiVE Solar<br>Natural energy USA<br>NC Solar Now<br>NC Sustainable Energy Association<br>Neo Solar Store<br>NESL-USA<br>Net Electric & Solar<br>Net Zero Solar<br>New Century Electric & Solar<br>New Day Energy<br>New Day Solar<br>New Energy Consulting<br>New England Clean Energy<br>New Gen Solar<br>New Ideas & Innovations<br>New Power<br>New Solar<br>New Strata<br>New Sun Energies<br>New Wave Solar<br>New Wave Solar Energy<br>New York Power Solutions<br>New York State Solar<br>Newkirk Electric Associates<br>Newport Solar<br>NewStrata<br>NexGen Construction<br>Next Generation Alternative Energy<br>Next Solar<br>Next Step Energy<br>Next Step Living<br>Nexus Solar<br>Nippon Energy<br>NJ Solar Now<br>NJ Solar Power<br>NJE Residential Solar<br>NM Solar Group<br>NOA<br>Noble Contractors<br>Noble Solar<br>North Shore Solar & Wind Power<br>North Texas Solar<br>Northeast Solar & Wind Power<br>Northern Electric<br>Northshore Solar<br>Northtek Services<br>Northwest Electric & Solar<br>Northwest Mechanical<br>Nova West Solar<br>NOVOS Energy<br>NRG Clean Power<br>NRG Cleanpower<br>NRG Energy<br>NRG Heating and Air Conditioning<br>NRG Home Solar<br>Number83672618464<br>Number84753762181<br>Number89733514837<br>Nuvision Energy Solutions<br>NXT LEVEL Solar<br>NY State Solar<br>O&M Solar Services<br>O3 Energy Solutions<br>Oak Electric Service<br>Oasis Montana<br>Obasun Corp.<br>Obsidian Solar LLC<br>Occidental Power<br>Occidental Power Solar Company<br>OFFERWEB<br>Offset Solar<br>Ohio Solar Electric<br>Okefenokee Solar<br>Olympus Solar<br>On Point<br>On Point Solar<br>One Roof Energy<br>One Way Solar<br>Oneworld Sustainable<br>Onforce Solar<br>Ontility<br>Onyx Solar<br>Open Sky Energy<br>Opportunity Debt Management<br>Optical Energy Technologies<br>OPTIMIRS PTE. LTD<br>Optimize Solar Solutions<br>Optimum Solar USA<br>Option One Solar<br>Options 4 Solar<br>Orbit Energy and Power<br>Our World Energy<br>P.A. Michael Solar Electrical Systems<br>P&A Marketing Enterprises<br>P3 Integration<br>Pacific Blue Solar<br>Pacific Electrical Contractors<br>Pacific Energy Company<br>Pacific Green Homes<br>Pacific Northwest Electric<br>Pacific Pro Solar<br>Pacific Sky Solar<br>Pacific Solar & Rain<br>Pacific West Solar<br>PacificSky Solar<br>Palmco Administration<br>Palmer Electric Technology Energy Services(P.E.T.E.S.)<br>Palmetto Solar<br>PaperLeaf Media<br>Paradise Energy Solutions<br>Paramount Equity Solar<br>Paramount Integrated Marketing<br>Park Avenue Construction<br>Patriot Roofing and Solar<br>Patriotic Power Solutions<br>Pay Less Energy<br>Peace and Solar<br>Peak Power Solutions<br>Peak Power USA<br>Peak Solar<br>Pearl Distributed Energy<br>Pearltronix<br>Peninsula Clean Energy<br>Penn Solar Systems<br>Penobscot Solar Design<br>PEP Solar<br>Performance Solar<br>Perkett Solar<br>PermaCity<br>Permacity Construction Corporation<br>PermaCity Solar<br>PetersenDean Roofing & Solar<br>Petrick Electric<br>Phase Logic<br>Phat Energy<br>Phillips Electrical Systems<br>Phoenix Clean Energy<br>Phoenix Energy<br>Phoenix Energy ProductsŒÈ DBA PEP Solar<br>Phoenix Environmental<br>Phoenix Green Team<br>Phoenix Home Performance<br>Phoenix Solar Power<br>Phoenix Solar Specialists<br>Phoenix Sun Energy<br>Phoenixlink<br>Photon Solar<br>PhotonWorks Engineering<br>Pick my Solar - Provider shareasale<br>Pickett Solar<br>Picture City Solar Power<br>Pinnacle Energy Solutions<br>Pinnacle Energy Systems<br>Pioneer Solar<br>Pipkin Electric<br>Pittsburgh Solar Works<br>Planet Solar<br>Planet Solar Solutions<br>Planetary Systems<br>Plasmid Media<br>Plymouth Area Renewable Energy Initiative<br>Poco Solar<br>Polar Wire & Renewable Energy Systems<br>Poly Energy<br>Poncho’s Solar Service<br>Pontchartrain Mechanical<br>Posigen<br>Positive Energy<br>Positive Energy Solar<br>Powell Energy & Solar<br>Power Factor<br>Power Financial Group<br>Power Home Solar<br>Power Production Management<br>Power Trip Energy Corp<br>Power Up Solar<br>Powered by Sunlight<br>Powerhome Solar<br>POWERHOME Solar & Roofing<br>Powerhouse Systems<br>PowerLutions<br>Powershift Solar<br>Powersource Energy Management<br>Powrpartners<br>Powur<br>PPC Solar<br>PPC Solar / Paradise Power Company<br>Prairie Solar Power and Light<br>Praxis Solar<br>Precis Solar<br>Precision Remodeling<br>Precision Tech<br>Precision Tech Electric<br>Premier Power<br>Premier Renewables<br>Premier Solar Solutions<br>Presidio Interactive Corporation<br>Prime Solar Power<br>Primitive Power<br>Pristine Media Group<br>Pro Custom Solar<br>Pro Electric<br>Pro Leads Marketing<br>Professional Broker Solar<br>Progress Solar Solutions<br>Progressive Energy Solutions<br>Progressive Power Group<br>Progressive Power Solutions<br>Progressive Solar<br>Prometheus Solar<br>ProSolarHawaii<br>Prospect Agents.<br>Prostruct Solar<br>Providence Marketing Group<br>ProVision Solar<br>Puget Sound Solar<br>PURE Energies<br>Pure Energy<br>Pure Energy Solar<br>Pure Energy Systems<br>Pure Point Energy<br>Pure Solar<br>Purified Leads<br>PV Squared<br>PX<br>Pyrus Energy<br>Qatalyst<br>Quality Home Services<br>Quality Solar and Wentworth Construction<br>Quality Solar Solutions<br>Qualsight<br>Quantum Assurance International<br>Quick Home Fix Service<br>Quinstreet<br>R & B Quality Electric<br>Ra Solar<br>RA Tech Solar<br>Radiance Heating and Plumbing<br>Radiance Solar<br>Raf Solar Power<br>Rainshadow Solar<br>Ranchero Power<br>Rancho Electric<br>Rapid Mortgage Funding<br>Rasani Media, LLC<br>Rate Marketplace<br>RateMarketPlace<br>Rayah Power Integration<br>RB Developing Group<br>RBS Solar<br>RC Building Maintenance<br>RC Construction Solar<br>RCC Solar<br>RE Pierro Solar<br>Ready Construction & Electric<br>Real Earth Power<br>Real Goods Solar<br>ReallyGreatRate Inc.<br>Reanimate Remodeling<br>REC Solar<br>Red Solar<br>Redding Solar Solutions<br>Redline Electric Company<br>Reech Solar Enterprise<br>Referral Design<br>Regenesis Power<br>Regis Electric<br>Reisig Criminal Defense & DWI Law<br>Reknew Energy Systems<br>Remodeling<br>Remodelwell<br>Renewable Energy Alternatives<br>Renewable Energy Design Group<br>Renewable Energy for<br>Renewable Energy Holdings<br>Renewable Energy Resource Associates<br>Renewable Energy Systems<br>Renewable Resources<br>Renewable Rochester<br>Renewal By Andersen<br>Renewing Energy<br>Renova Energy Corp<br>Renova Solar<br>Renu<br>Renu Building & Energy Solutions<br>Renu Energy<br>Renu Energy Solutions<br>ReNu Solar & Roofing<br>Repower Solutions<br>RER Energy Group<br>Residents energy<br>Resolution Solar<br>Resource Energy<br>Responsible Solar<br>Revco Solar<br>ReVision<br>Revision Energy<br>RevoluSun<br>Revolutionary Solar<br>Revolve Solar<br>Rew Solar USA<br>Rex Direct<br>RGR<br>Richard Dill DBA Green Country Solar<br>Richart Builders<br>RISE power<br>Rising Sun Solar Electric<br>Rite Fast Construction<br>Rivercity Solar<br>Riverland Solar<br>Rivus Energy<br>RM Coating Supplies<br>RMK Solar<br>Roar Solar<br>Robco Electric<br>Rochester Solar Technologies a Division of O’Connell Electric<br>Rocket Solar<br>Rocky Mountain Solar & Wind<br>Rodda Electric and Solar<br>Roof Diagnostics<br>Rooftop Power<br>Rosenberry’s Electric<br>Ross Solar Group<br>Royal Aire Heating Air Conditioning & Solar<br>RPL Plumbing<br>RS Energy<br>Run on Sun<br>Running Electric<br>S & T Control Wiring<br>S-Energy America<br>S&H Solar<br>Sachs Electric<br>SafeTX Energy<br>Salvatore Contracting<br>San Diego Solar Install<br>San Francisco Solar Power<br>Santa Cruz Solar<br>Savant Solar<br>Save A Lot Solar<br>Saveco Solar<br>Sawmill Solar Electric<br>SBM Solar<br>SBS Solar<br>SC Clean Energy<br>Scudder Solar<br>Sdi Solar<br>Sea Bright Solar<br>Sears - Transform Home Pro<br>SEC<br>Secco<br>Second Generation Energy<br>Secure 24 Alarms<br>Security Force, INC.<br>See Real Goods Solar above /Alteris Renewables<br>See Systems<br>Select Solar<br>Selsco Solar<br>SEM Power LLC<br>Semper Solaris<br>Serenity Time<br>Service 1st Energy Solutions<br>SGEPower<br>Sharpens Solutions Group<br>Shaughnessy Contracting<br>Shekinah Solar<br>Shelter Insurance<br>Shine Solar<br>Shippe Solar & Construction<br>Shockoe Solar<br>Shor Construction<br>Shoreline Electric<br>Sicuranza Electric<br>Siemens Industry<br>Sierra Pacific Home and Comfort<br>Sierra Pacific Solar<br>Sierra Solar Systems<br>Sierra Solar Systems & Plan It Solar<br>Signature Solar<br>Sigora Solar<br>Silverline Solar<br>Silverwood Energy<br>Simba Enterprises<br>Simple Energy Works<br>Simple Solar<br>Simply Solar<br>Sirius Power<br>Sky Cell Solar<br>Sky Energy<br>Sky High Energy<br>Sky Power Solar<br>SKY Renewable Energy<br>Sky Solar Energy<br>Skyline Solar<br>Skypower Energy Corporation<br>Skytech Solar<br>Smart Energy<br>Smart Energy Hawaii<br>Smart Energy USA<br>Smart Solar<br>Smart Solar America<br>Smart Solar Energy<br>Smart Source Energy<br>SmartHome Solutions USA<br>Smith Sustainable Design<br>smuckers energy<br>SNK<br>SNK Media<br>Snowy Range Renewable Energy<br>Soenso Solar Energy<br>Sol 365, LLC<br>Sol Energy<br>Sol Power<br>Sol Reliable<br>Sol Systems<br>Sol Technologies<br>Sol-Arc<br>Sol-Up USA<br>Solagex America<br>Solar & Wind FX<br>Solar 2000<br>Solar Alliance of America<br>Solar Alternatives<br>Solar America<br>Solar Assist<br>Solar Ban<br>Solar Bear<br>Solar Bug<br>solar bums<br>Solar by Weller<br>Solar Center<br>Solar City<br>Solar Clean Service<br>Solar Community<br>Solar Concepts<br>Solar Connections<br>Solar Connexion<br>Solar Consultants<br>Solar Design<br>Solar Design Tech<br>Solar Direct<br>Solar Direct Marketing<br>Solar East Coast<br>Solar Electrical Corporation<br>Solar Electrical Systems<br>Solar Energy<br>Solar Energy Access<br>Solar Energy Advisors<br>Solar Energy Consulting, LLC<br>Solar Energy Environments<br>Solar Energy Exchange<br>Solar Energy For You<br>Solar Energy Group<br>Solar Energy Lease<br>Solar Energy Management<br>Solar Energy of Illinois<br>Solar Energy Services<br>Solar Energy Solutions<br>Solar Energy Solutions of America<br>Solar Energy Systems<br>Solar Energy Systems of Brevard<br>Solar Energy USA<br>Solar Energy Vets<br>Solar Energy World<br>Solar Epiphany<br>Solar Exclusive<br>Solar Express<br>Solar First<br>Solar Five<br>Solar Forward<br>Solar Fuel<br>Solar Gain<br>Solar Gaines<br>Solar Greenergy<br>Solar Grids<br>Solar Grids of Northwest Indiana<br>Solar Heating Specialists<br>Solar Horizons Construction<br>Solar Impact<br>Solar Innovations<br>Solar Installer Direct<br>Solar Integrations Ltd.<br>Solar Is Freedom<br>Solar Journey<br>Solar Liberty<br>Solar Lights & More<br>Solar Living<br>Solar Logic Systems<br>Solar Louisiana<br>Solar Mass<br>Solar Match<br>Solar Me<br>Solar Mike<br>Solar Mountain Energy<br>Solar Nation<br>Solar On<br>Solar Optimum<br>Solar Panel Installation Los Angeles<br>Solar Panels 4 Power<br>Solar Panels of America<br>Solar Path<br>Solar Planet<br>Solar Plexus<br>Solar Plus Energy Pros<br>Solar Point<br>Solar Power Pros<br>Solar Power Systems<br>Solar Powered Solutions L.L.C.<br>Solar Pro Solution<br>Solar Pro USA<br>Solar Pros Of Texas<br>Solar Provider Group<br>Solar Redi<br>Solar Remedy<br>Solar Research Group<br>Solar Reviews<br>Solar Revolution<br>Solar Sale USA<br>Solar Save America<br>Solar Savers<br>Solar Savings America<br>Solar Services<br>Solar Smart Living<br>Solar Solution<br>Solar Solutions<br>Solar Solutions AZ<br>Solar Source<br>Solar Source of Georgia<br>Solar Specialists<br>Solar Spectrum<br>Solar Sun Pro<br>Solar Sun World<br>Solar Systems Design<br>Solar Systems of Indiana<br>Solar Technologies<br>Solar Technology Builders<br>Solar Texas<br>Solar Today and Tomorrow<br>Solar Topps<br>Solar Touche<br>Solar United Network (Sunworks)<br>Solar Universe<br>Solar USA<br>Solar Water Heaters of Hudson<br>Solar Wave<br>Solar Wind & Rain<br>Solar Winds Northern Lights<br>Solar Wolf Energy<br>Solar Works<br>Solar XChange<br>Solar-Fit<br>Solar-Ray<br>Solar-Tec Systems<br>Solar4Less<br>Solarbilt<br>Solarcentric<br>SolarCity<br>Solarcraft<br>Solardelphia<br>Solardyne<br>SolareAmerica<br>Solaris Energy<br>Solarize<br>SolarJoy<br>SolarLouisiana<br>Solarm<br>Solarmarine<br>SolarMax<br>Solarology<br>Solarone Energy Group<br>Solaropoly<br>Solarperfect<br>Solarponics<br>SolarQuote<br>SolarShoppers<br>Solarsmith<br>SolarStar Energy (Charlotte)<br>Solartech Electric<br>SolarTEK Energy of Charlotte<br>Solartek Systems USA<br>Solartime USA<br>Solartronics<br>Solarugreen<br>SolarUnion<br>Solarview<br>Solarvolt<br>Solarwise<br>Solarworks<br>SolarWorld-USA<br>SolarXChange<br>Solaverde<br>Solcius<br>Solect Energy Development<br>Solectria Renewables<br>Solei Energy<br>Solera Energy<br>Solergy<br>Solora Solar<br>SolPower<br>Solratek<br>SolReliable<br>Solscient Energy<br>Soltec EPC<br>SolTerra Systems<br>Soltility<br>Solular<br>Soluxe Solar<br>Solve Lending and Realty<br>Son Solar Systems<br>Sonali Solar<br>Sonic Solar Energy<br>Sound Solar Systems<br>Source Power Company<br>Sourcemo USA<br>South Carolina Solar Power<br>South Coast Solar<br>South Sound Solar<br>Southard Solar<br>Southeast Geothermal<br>Southeast Power<br>Southeast Solar<br>Southeastern Energy Corp<br>Southern Energy Distributors<br>Southern Energy Management<br>Southern Solar<br>Southern Solar & Electric<br>Southern Solar Systems<br>Southern Solar TX<br>Southern Sunpower<br>Southern View Energy<br>SouthernLight Solar<br>Southface Solar Electric<br>Southland Solar<br>Spark Solar<br>Sparrow Electric<br>Speck Construction<br>Spectrum Solar<br>Spex Construction<br>SPM Wind Power<br>Springs Energy<br>Spruce Lending<br>Square1 Construction<br>SRA Leads Advertiser<br>SRC Solar<br>SRI Wind Solar<br>Srinergy<br>Stafford<br>Stamina Solar<br>Standard Renewable Energy<br>Standard Solar<br>Stanton Electric<br>Stapleton Electric & Solar<br>Star Power<br>Star Power Systems<br>Starfire Energy<br>Starlight Solar<br>State Energy<br>Stealth Solar<br>Stelco Energy<br>Stellar Roofing and Solar<br>Stellar Solar<br>Stellar Sun<br>Steve Basso Plumbing & Heating<br>Stewartstown Electrical Service<br>Stitt Energy Systems<br>Stoneacre Energy Solutions<br>Straight Up Energy<br>Straightup Solar<br>Strata Solar<br>Strategic Solar Solutions<br>Strawberry Solar<br>Streamline Solar<br>Strictly Solar Power<br>Stronghold Solar<br>Structure Green<br>Student Aid Institute<br>SU 21 Solar Tech.<br>Sugar Hollow Solar<br>Sullivan Solar Power<br>Summerlin Energy<br>Summerwind Solar<br>Summit Energy Group<br>Sun Blue Energy<br>Sun City Solar Energy<br>Sun Conure Solar<br>Sun Directed<br>Sun Doctor Solar<br>Sun Dollar Energy<br>Sun Downer Solar<br>Sun Edison<br>Sun First Solar<br>Sun Harvest Renewable Resources<br>Sun Market Solar<br>Sun Nerds<br>Sun Power<br>Sun Pro Solar<br>Sun Quest<br>Sun Ray Systems<br>Sun Run<br>Sun Solar Energy Solutions<br>Sun Solar Solutions<br>Sun Solutions<br>Sun Source Electrical Contractors<br>Sun Source Solar Brokers<br>Sun Up Zero Down<br>Sun Valley Solar Solutions<br>Sun Wind Solutions<br>Sun Wizard Solar<br>Sun-Tec Solar<br>Sun-Tec Solar Energy<br>Sun-Wind Solutions<br>Sun4light<br>SUNation Solar Systems<br>SunBadger Solar<br>Sunbank<br>SunBelt Electric<br>Sunbility<br>SunBlue Energy<br>Sunbright Solar<br>SunBrite Solar<br>Sunbug Solar<br>Sunburst Solar Energy<br>Suncal Solar Electricity<br>Suncatch Solar<br>Suncraft Solar<br>Suncrest Solar<br>Sundance Power Systems<br>Sundance Solar Designs<br>Sundancer Energy<br>Sundial Energy<br>Sundial Solar<br>Sundog Solar Store<br>Sundowner Solar<br>SunDrop Solar<br>Sundurance Solar<br>Sunenergy<br>SunEnergy1 - Bethel nc<br>Sunergy Systems<br>Sunetric<br>Sunfinity Renewable Energy<br>Sunfinity Solar<br>Sunfolding<br>Sunfreedom Solar<br>Sunfusion Solar<br>Sungate Energy Solutions<br>Sungevity<br>Sungrade Solar<br>SunGreen Systems<br>SunHarvest Solar<br>Sunlife Power<br>Sunlife Power<br>Sunlight Energy Texas<br>Sunlight Solar<br>Sunlight Solar Energy<br>Sunlight Solar Systems<br>Sunline Energy<br>Sunlink Energy<br>SunLux<br>Sunlux Solar<br>SunLynk<br>Sunmaxx Solar<br>Sunmoney Solar<br>Sunnova<br>Sunny Energy<br>Sunny Side Solar Energy<br>Sunology<br>SunOn Energy<br>Sunpower<br>Sunpower of Arizona<br>SunPro Solar<br>SunPro-WF<br>Sunpurity Solar<br>SunQuest Solar<br>SunRate Energy<br>SunRay Solar<br>Sunrey Solar Energy<br>SunRidge Solar<br>Sunrise Energy Concepts<br>Sunrise Solar<br>Sunrock Solar<br>SunRun<br>Sunrun (NW)<br>Sunrun Green Home Solar Program<br>SunRun Rep-ML<br>SunRun Solar Rep-JM<br>SunRun-Gordon<br>Suns Up Solar<br>Sunsaris<br>Sunsense<br>Sunsense Solar<br>Sunset Solar Power Repair & Setups<br>Sunshine Renewable Energy<br>SunSmart Technologies<br>SunSource Homes<br>Sunspot Comfort & Energy Solutions<br>Sunspot Solar Energy Systems<br>Sunstar Energy<br>SunStarter Home Solar<br>SunStarter Solar Installation<br>Sunstate Power & Solar Solutions<br>Sunstore Solar<br>Sunsystem Solar<br>Suntalk Solar<br>Sunteck Solar Screening<br>Sunterra Solar<br>SunTrek Industries<br>Suntricity<br>Suntuity<br>Suntuity Solar<br>Sunversity Corp<br>SunVest Solar<br>Sunvision Solar<br>Sunwater<br>Sunwork Renewable Energy Projects<br>Sunworks<br>Super Green Solutions<br>Super Solar<br>Superior Energy Solutions<br>Superior Home<br>Superior Home Improvement<br>Superior Home Loans<br>Supreme Electric & Solar<br>Supremeair Systems<br>Sur Energy<br>Surewave Solar<br>Sustainability Is Designed<br>Sustainable Clean Energy<br>Sustainable Contractors<br>Sustainable Energy Solutions<br>Sustainable Engineering & Environmental Designs PLLC<br>Sustainable Solutions of Virginia<br>Sustainable Solutions Partners<br>Sustainable Solutions Unlimited<br>Sustainable Technologies<br>Swan Solar<br>Synavax<br>Synchro Solar<br>Syndicated Solar<br>Synergy Energy Solar Miami<br>Synergy Power<br>Synergy Power-Exclusive<br>Syntrol a Bianchi Company<br>Syntrol Plumbing Heating & Air<br>T.A.G. Solar<br>T.A.K. Electric<br>Tablerock Technologies<br>Tac Solar and Ac<br>Taft Solar<br>Tahoe Blue<br>Tanner Creek Energy<br>TE Services<br>Teakwood Solar<br>techception.ai<br>Techladour<br>Technicians for Sustainability<br>Tenco Solar<br>Tennessee Solar Solutions<br>Teo Solar<br>Terra Green Energy<br>Terrasol Energies<br>Terrestrial Solar Survey<br>TES Home Solar<br>Tesla Electrical Solutions<br>Test for solar lead solic<br>Texas Green Energy<br>Texas Solar Brokers<br>Texas Solar Designs<br>Texas Solar Group<br>Texas Solar Juice<br>Texas Solar Outfitters<br>Texas Wind and Solar Power<br>TG Electric<br>Thames Solar Electric<br>That Solar Guy<br>The 850 Call Joe Law Firm<br>The Energy Mill.<br>The Energy Outlet<br>The Energy Pro<br>The Energy Specialist<br>The Energy Supermarket<br>The Federal Savings Bank<br>The Plumbing Service Company<br>The Pro Contractors<br>The Renewable Republic<br>The Rhyno Crash<br>The Solar Company<br>The Solar Exchange<br>The Solar Group<br>The Solar Guy<br>The Solar Pros<br>The Solar Solution<br>The Solar Store<br>The Son’s Power<br>The Southern Quarter<br>The Sovereigns Depot<br>The Sun Connection<br>The Sun Is Yours<br>The Sun Works<br>The-Solar-Project<br>The-Solar-Project.com<br>The-Solar-Project.com and its partners at www.localsolarclients.com<br>TheO Companies<br>Therma Breeze<br>Thesolarproject<br>Thesolarproject.com<br>Third Sun Solar<br>Thirsty Lake Solar<br>Thomas Shawn Lupella P.A<br>Threadpoint<br>Thunder Const. Solar Miami<br>Tick Tock Energy<br>Titan Solar & Remodeling<br>Titan Solar Company<br>Todays Energy Store<br>Tom Norrell Your Solar Solutions<br>Top Choice Solar<br>Topdot Solar<br>Topper Floating Solar PV Mounting Manufacturer Co.<br>TopSolar<br>Towles Electric<br>Town Square Energy (maybe)<br>Townsquare energy<br>Transformations<br>Travel Resorts of America<br>Travel Transparency<br>Treepublic Solar<br>Trent’s A/C & Heating<br>Triangle Electrical Systems<br>Trina Solar<br>Trinity<br>Trinity Solar<br>TriSMART Solar<br>True Power Solar<br>Trusource Energy<br>Trusted Consumer<br>Turnsol Energy<br>Turtle Leads<br>U-Design Home Improvements<br>Ultimate Best Buy<br>Ultimate Home Mortgage<br>Under the Sun Solar<br>Underwood Solar Future<br>Uni-T Energy<br>United Solar<br>United Solar Electric<br>Universal Solar Direct of Arizona<br>Universal Solar Energy<br>Universal Solar Solutions<br>Universolar<br>Unleash Solar<br>Unlimited Renewable Energies<br>UPA<br>Upshot Energy Corporation<br>Upstate Alternative Energy<br>Upstate Solar<br>Upton Solar<br>Urban Grid<br>US Solargy<br>Utility Partners of America<br>Valley Solar<br>Valley Unique Electric<br>Valverde Energy<br>Vanguard Energy<br>Vara NRG<br>Vara Solar<br>VB Engineering<br>Veeco Solar<br>Veerus Holdings<br>Veerus Leads<br>Veeturn LLC<br>Venture Solar<br>Verengo Solar<br>Verengo Solar Plus<br>Vibe Solar<br>Victory Solar<br>Village Solar<br>Vision Solar<br>Visionary Concepts<br>Visionary Homes & Solar<br>Visiqua<br>Vivint<br>Vivint Solar<br>Vivint Solar Rep<br>Vivint Solar-MA<br>VMR Solar<br>Volt Energy Solar<br>Volt Seed Tech, LLC<br>Voltage River<br>Voltaic<br>Voltaic Solaire<br>Vortex Electric<br>Vox Energy Solutions<br>Wasatch Solar<br>Wasatch Sun<br>Water Improvement Technologies<br>Watt Electric<br>Wayfare Energy<br>Wayne’s Solar<br>WDS<br>We Love to See It, LLC<br>Weeks Construction Service and Repair<br>WeKnow Technologies Wind & Solar<br>Welk Resorts<br>Wells Solar<br>West Coast Solar<br>West Los Angeles Solar Panels<br>Westhaven Power<br>Westwood Solar Panels<br>Whidbey Sun & Wind<br>Whole Sun Designs<br>Wilhite Solar Solutions<br>Willpower Electric<br>Windsun Energy Systems<br>Winona Renewable Energy<br>Winter Sun Design<br>Wired Into The Future Solar<br>WJB Energy<br>Woodstar Energy<br>Wray Electric<br>Wunder Mortgage<br>Xero Solar<br>Yaldo Group<br>Yellow Lite<br>Yes Solar Solutions<br>Yingli Solar<br>You Benefit Solar<br>Your Help HQ<br>Your Own Box Office<br>Youvee Solar<br>YSG Solar Installers - California<br>Yuma Solar<br>Zano Solar<br>Zen Electric<br>Zenernet<br>Zenernet Solar<br>Zenith Solar Power<br>Zero Down Solar<br>Zigg Electric and Solar<br>Zing Solar<br>Zip Electric<br>ZOI Solar<br>Zoom Solar </p>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script async>
        let startDate = new Date();
        let elapsedTime = 0;
        let bounceType = 'exit';

        function MeasureDuration(type) {
            return {
                tyope: type,
                startDateSinceLast: new Date(),
                capture: function(sub_type) {
                    const endDate = new Date();
                    const spentTime = endDate.getTime() - this.startDateSinceLast.getTime();
                    this.startDateSinceLast = new Date();
                    // elapsedTime contains the time spent on page in milliseconds
                    $.get("/papi/persist.php?op=" + type + "&sub_type=" + sub_type + "&duration=" + spentTime, function(data) {
                        /* do nothing */
                    });
                }
            }
        }

        function Application() {
            const lead_id = 'cf5d6f6e-a22e-4cea-92b6-12ae873dfb02';
            const timestamp = new Date().toLocaleString("en-US", {
                timeZone: "America/Chicago"
            }).toString();
            const a = '29928';
            const c = '47901';
            const r = 'aHR0cHM6Ly93d3cuc29sYXItbW9uZXktc2F2ZXIuY29tL3Y0Lw==';
            const rsitekey = '6Lchn2kaAAAAAKJJ6XJzD2QLfvHRxG8W8bs1JFyX';
            const skip_zip = false;;
            const version = 'v4';
            const measureStepDuration = MeasureDuration('step');
            const headline = $('#primary-headline');
            let default_headline = headline.html();

            function animateFormSubmission(callback) {
                $('#form-header').hide();
                $('.progress_box').hide();
                gtag('event', 'page_view', {
                    page_title: "Submit Animation",
                    page_location: '/' + version + '/submit_animation',
                    page_path: '/' + version + '/submit_animation',
                    send_to: window.measurement_id
                });
                gtag('event', 'survey_step', {
                    event_category: 'survey',
                    event_label: 'Animation',
                    label: 'Animation'
                });
                const messages = $('#loader p').toArray();
                messages.reduce(function(check, item) {
                    return check.then(function() {
                        const message = $(item);
                        message.show();
                        const timeout = message.data('timeout');
                        return new Promise(function(resolve, reject) {
                            setTimeout(function() {
                                message.removeClass('in-progress');
                                message.addClass('complete');
                                resolve(true);
                            }, timeout);
                        });
                    })
                }, Promise.resolve()).then(() => {
                    if (typeof callback == 'function')
                        callback();
                });
                // if (!messages.length) {
                //     console.log("no messages; completed");
                //     callback();
                // }
            }

            function toggleSubmitButtons(enable) {
                if (enable) {
                    $("#q10-next").show();
                    $("#q10-next-loading").hide();
                } else {
                    $("#q10-next").hide();
                    $("#q10-next-loading").show();
                }
            }

            // edit auto complete form
            $("#edit-customer-data").click(function(e) {
                $("#edit-customer-preview").hide();
                $("#edit-customer-form").show();
                $("#edit-customer-form input, #edit-customer-form select").removeAttr('disabled');
            })

            $("#btn-save").click(function(e) {
                e.preventDefault();
                const form = $("#msform")[0];
                const valid = form.checkValidity();
                if (!valid) {
                    return false;
                }

                /**
                 * Validate form
                 */
                var zip = $("#zip");
                var owner = $("#homeowner").val();
                var first = $("#first").val();
                var last = $("#last").val();
                var address = $("#address").val();
                var postal = zip.val();
                var provider = $("#provider-select").val();
                var utility_bill = $("#electric_bill").val();
                var roof_shade = $("#roof_shade").val();
                var email = $("#email").val();

                const state = getState(postal);
                if (!state || state == 'none') {
                    displayError(zip, "unable to verify prefix");
                    return false;
                }

                working.show();
                ajaxVerify("/papi/validate.php?op=location&version=v4&postal=" + postal, function(response) {
                    const details = response.body;
                    serverCity = details.city;
                    serverState = details.state;
                    serverZip = details.zip;
                    serverLong = details.longitude;
                    serverLat = details.latitude;
                    working.hide();
                    if (details.savings) {
                        exclusive_estimated_savings.text(details.savings.avg_lifetime_savings);
                        exclusive_state.text(details.savings.state);
                        exclusive_solar_system.text(details.savings.solar_system);
                        exclusive_monthly_bill.text(details.savings.typical_monthly_bill);
                    }

                    verifyAddress(true, address, address, "", serverCity, serverState, "USA", true);
                    /**
                     * Transition back to preview screen
                     */
                    $("#preview-homeowner").html(owner);
                    $("#preview-first-name").html(first);
                    $("#preview-last-name").html(last);
                    $("#preview-address").html(address);
                    $("#preview-zip").html(postal);
                    $("#postal_code").val(postal);
                    $("#preview-utility-provider").html(provider);
                    $("#preview-electric-bill").html('$' + utility_bill);
                    $("#preview-roof-shade").html(roof_shade);
                    $("#preview-email").html(email);
                    $("#edit-customer-form").hide();
                    $("#edit-customer-preview").show();
                    window.scrollTo(0, 0);

                }, function() {
                    working.hide();
                    displayError(zip, "unable to verify against DB");
                    window._loq.push(["tag", 'Zip Err', true]);
                });
            });


            // estimate savings content
            const exclusive = $('#exclusive');
            const exclusive_estimated_savings = $(".exclusive-estimate-savings");
            const exclusive_state = $(".exclusive-state");
            const exclusive_solar_system = $(".exclusive-solar-system");
            const exclusive_monthly_bill = $(".exclusive-monthly-bill");
            let ready_for_redirect = false;
            window._loq = window._loq || [];
            window._loq.push(["custom", {
                timestamp
            }]);
            window._loq.push(["tag", 'Q1', true]);
            window._loq.push(["tag", 'v4', true]);
            if (a.length > 0) {
                window._loq.push(["tag", 'Pub ' + a, true]);
            }
            window._loq.push(["tag", 'CF PK', true]);


            let emailAjaxClient;
            let fetchRequestId;
            let lastprogwidth;
            let serverCity, serverState, serverZip, serverLong, serverLat;
            let lastPage = false;
            let steps = 0;
            const domain_tlds = ["aaa", "aarp", "abarth", "abb", "abbott", "abbvie", "abc", "able", "abogado", "abudhabi", "ac", "academy", "accenture", "accountant", "accountants", "aco", "actor", "ad", "adac", "ads", "adult", "ae", "aeg", "aero", "aetna", "af", "afl", "africa", "ag", "agakhan", "agency", "ai", "aig", "airbus", "airforce", "airtel", "akdn", "al", "alfaromeo", "alibaba", "alipay", "allfinanz", "allstate", "ally", "alsace", "alstom", "am", "amazon", "americanexpress", "americanfamily", "amex", "amfam", "amica", "amsterdam", "analytics", "android", "anquan", "anz", "ao", "aol", "apartments", "app", "apple", "aq", "aquarelle", "ar", "arab", "aramco", "archi", "army", "arpa", "art", "arte", "as", "asda", "asia", "associates", "at", "athleta", "attorney", "au", "auction", "audi", "audible", "audio", "auspost", "author", "auto", "autos", "avianca", "aw", "aws", "ax", "axa", "az", "azure", "ba", "baby", "baidu", "banamex", "bananarepublic", "band", "bank", "bar", "barcelona", "barclaycard", "barclays", "barefoot", "bargains", "baseball", "basketball", "bauhaus", "bayern", "bb", "bbc", "bbt", "bbva", "bcg", "bcn", "bd", "be", "beats", "beauty", "beer", "bentley", "berlin", "best", "bestbuy", "bet", "bf", "bg", "bh", "bharti", "bi", "bible", "bid", "bike", "bing", "bingo", "bio", "biz", "bj", "black", "blackfriday", "blockbuster", "blog", "bloomberg", "blue", "bm", "bms", "bmw", "bn", "bnpparibas", "bo", "boats", "boehringer", "bofa", "bom", "bond", "boo", "book", "booking", "bosch", "bostik", "boston", "bot", "boutique", "box", "br", "bradesco", "bridgestone", "broadway", "broker", "brother", "brussels", "bs", "bt", "build", "builders", "business", "buy", "buzz", "bv", "bw", "by", "bz", "bzh", "ca", "cab", "cafe", "cal", "call", "calvinklein", "cam", "camera", "camp", "canon", "capetown", "capital", "capitalone", "car", "caravan", "cards", "care", "career", "careers", "cars", "casa", "case", "cash", "casino", "cat", "catering", "catholic", "cba", "cbn", "cbre", "cbs", "cc", "cd", "center", "ceo", "cern", "cf", "cfa", "cfd", "cg", "ch", "chanel", "channel", "charity", "chase", "chat", "cheap", "chintai", "christmas", "chrome", "church", "ci", "cipriani", "circle", "cisco", "citadel", "citi", "citic", "city", "cityeats", "ck", "cl", "claims", "cleaning", "click", "clinic", "clinique", "clothing", "cloud", "club", "clubmed", "cm", "cn", "co", "coach", "codes", "coffee", "college", "cologne", "com", "comcast", "commbank", "community", "company", "compare", "computer", "comsec", "condos", "construction", "consulting", "contact", "contractors", "cooking", "cookingchannel", "cool", "coop", "corsica", "country", "coupon", "coupons", "courses", "cpa", "cr", "credit", "creditcard", "creditunion", "cricket", "crown", "crs", "cruise", "cruises", "cu", "cuisinella", "cv", "cw", "cx", "cy", "cymru", "cyou", "cz", "dabur", "dad", "dance", "data", "date", "dating", "datsun", "day", "dclk", "dds", "de", "deal", "dealer", "deals", "degree", "delivery", "dell", "deloitte", "delta", "democrat", "dental", "dentist", "desi", "design", "dev", "dhl", "diamonds", "diet", "digital", "direct", "directory", "discount", "discover", "dish", "diy", "dj", "dk", "dm", "dnp", "do", "docs", "doctor", "dog", "domains", "dot", "download", "drive", "dtv", "dubai", "dunlop", "dupont", "durban", "dvag", "dvr", "dz", "earth", "eat", "ec", "eco", "edeka", "edu", "education", "ee", "eg", "email", "emerck", "energy", "engineer", "engineering", "enterprises", "epson", "equipment", "er", "ericsson", "erni", "es", "esq", "estate", "et", "etisalat", "eu", "eurovision", "eus", "events", "exchange", "expert", "exposed", "express", "extraspace", "fage", "fail", "fairwinds", "faith", "family", "fan", "fans", "farm", "farmers", "fashion", "fast", "fedex", "feedback", "ferrari", "ferrero", "fi", "fiat", "fidelity", "fido", "film", "final", "finance", "financial", "fire", "firestone", "firmdale", "fish", "fishing", "fit", "fitness", "fj", "fk", "flickr", "flights", "flir", "florist", "flowers", "fly", "fm", "fo", "foo", "food", "foodnetwork", "football", "ford", "forex", "forsale", "forum", "foundation", "fox", "fr", "free", "fresenius", "frl", "frogans", "frontdoor", "frontier", "ftr", "fujitsu", "fun", "fund", "furniture", "futbol", "fyi", "ga", "gal", "gallery", "gallo", "gallup", "game", "games", "gap", "garden", "gay", "gb", "gbiz", "gd", "gdn", "ge", "gea", "gent", "genting", "george", "gf", "gg", "ggee", "gh", "gi", "gift", "gifts", "gives", "giving", "gl", "glass", "gle", "global", "globo", "gm", "gmail", "gmbh", "gmo", "gmx", "gn", "godaddy", "gold", "goldpoint", "golf", "goo", "goodyear", "goog", "google", "gop", "got", "gov", "gp", "gq", "gr", "grainger", "graphics", "gratis", "green", "gripe", "grocery", "group", "gs", "gt", "gu", "guardian", "gucci", "guge", "guide", "guitars", "guru", "gw", "gy", "hair", "hamburg", "hangout", "haus", "hbo", "hdfc", "hdfcbank", "health", "healthcare", "help", "helsinki", "here", "hermes", "hgtv", "hiphop", "hisamitsu", "hitachi", "hiv", "hk", "hkt", "hm", "hn", "hockey", "holdings", "holiday", "homedepot", "homegoods", "homes", "homesense", "honda", "horse", "hospital", "host", "hosting", "hot", "hoteles", "hotels", "hotmail", "house", "how", "hr", "hsbc", "ht", "hu", "hughes", "hyatt", "hyundai", "ibm", "icbc", "ice", "icu", "id", "ie", "ieee", "ifm", "ikano", "il", "im", "imamat", "imdb", "immo", "immobilien", "in", "inc", "industries", "infiniti", "info", "ing", "ink", "institute", "insurance", "insure", "int", "international", "intuit", "investments", "io", "ipiranga", "iq", "ir", "irish", "is", "ismaili", "ist", "istanbul", "it", "itau", "itv", "jaguar", "java", "jcb", "je", "jeep", "jetzt", "jewelry", "jio", "jll", "jm", "jmp", "jnj", "jo", "jobs", "joburg", "jot", "joy", "jp", "jpmorgan", "jprs", "juegos", "juniper", "kaufen", "kddi", "ke", "kerryhotels", "kerrylogistics", "kerryproperties", "kfh", "kg", "kh", "ki", "kia", "kids", "kim", "kinder", "kindle", "kitchen", "kiwi", "km", "kn", "koeln", "komatsu", "kosher", "kp", "kpmg", "kpn", "kr", "krd", "kred", "kuokgroup", "kw", "ky", "kyoto", "kz", "la", "lacaixa", "lamborghini", "lamer", "lancaster", "lancia", "land", "landrover", "lanxess", "lasalle", "lat", "latino", "latrobe", "law", "lawyer", "lb", "lc", "lds", "lease", "leclerc", "lefrak", "legal", "lego", "lexus", "lgbt", "li", "lidl", "life", "lifeinsurance", "lifestyle", "lighting", "like", "lilly", "limited", "limo", "lincoln", "linde", "link", "lipsy", "live", "living", "lk", "llc", "llp", "loan", "loans", "locker", "locus", "loft", "lol", "london", "lotte", "lotto", "love", "lpl", "lplfinancial", "lr", "ls", "lt", "ltd", "ltda", "lu", "lundbeck", "luxe", "luxury", "lv", "ly", "ma", "macys", "madrid", "maif", "maison", "makeup", "man", "management", "mango", "map", "market", "marketing", "markets", "marriott", "marshalls", "maserati", "mattel", "mba", "mc", "mckinsey", "md", "me", "med", "media", "meet", "melbourne", "meme", "memorial", "men", "menu", "merckmsd", "mg", "mh", "miami", "microsoft", "mil", "mini", "mint", "mit", "mitsubishi", "mk", "ml", "mlb", "mls", "mm", "mma", "mn", "mo", "mobi", "mobile", "moda", "moe", "moi", "mom", "monash", "money", "monster", "mormon", "mortgage", "moscow", "moto", "motorcycles", "mov", "movie", "mp", "mq", "mr", "ms", "msd", "mt", "mtn", "mtr", "mu", "museum", "music", "mutual", "mv", "mw", "mx", "my", "mz", "na", "nab", "nagoya", "name", "natura", "navy", "nba", "nc", "ne", "nec", "net", "netbank", "netflix", "network", "neustar", "new", "news", "next", "nextdirect", "nexus", "nf", "nfl", "ng", "ngo", "nhk", "ni", "nico", "nike", "nikon", "ninja", "nissan", "nissay", "nl", "no", "nokia", "northwesternmutual", "norton", "now", "nowruz", "nowtv", "np", "nr", "nra", "nrw", "ntt", "nu", "nyc", "nz", "obi", "observer", "office", "okinawa", "olayan", "olayangroup", "oldnavy", "ollo", "om", "omega", "one", "ong", "onl", "online", "ooo", "open", "oracle", "orange", "org", "organic", "origins", "osaka", "otsuka", "ott", "ovh", "pa", "page", "panasonic", "paris", "pars", "partners", "parts", "party", "passagens", "pay", "pccw", "pe", "pet", "pf", "pfizer", "pg", "ph", "pharmacy", "phd", "philips", "phone", "photo", "photography", "photos", "physio", "pics", "pictet", "pictures", "pid", "pin", "ping", "pink", "pioneer", "pizza", "pk", "pl", "place", "play", "playstation", "plumbing", "plus", "pm", "pn", "pnc", "pohl", "poker", "politie", "porn", "post", "pr", "pramerica", "praxi", "press", "prime", "pro", "prod", "productions", "prof", "progressive", "promo", "properties", "property", "protection", "pru", "prudential", "ps", "pt", "pub", "pw", "pwc", "py", "qa", "qpon", "quebec", "quest", "racing", "radio", "re", "read", "realestate", "realtor", "realty", "recipes", "red", "redstone", "redumbrella", "rehab", "reise", "reisen", "reit", "reliance", "ren", "rent", "rentals", "repair", "report", "republican", "rest", "restaurant", "review", "reviews", "rexroth", "rich", "richardli", "ricoh", "ril", "rio", "rip", "ro", "rocher", "rocks", "rodeo", "rogers", "room", "rs", "rsvp", "ru", "rugby", "ruhr", "run", "rw", "rwe", "ryukyu", "sa", "saarland", "safe", "safety", "sakura", "sale", "salon", "samsclub", "samsung", "sandvik", "sandvikcoromant", "sanofi", "sap", "sarl", "sas", "save", "saxo", "sb", "sbi", "sbs", "sc", "sca", "scb", "schaeffler", "schmidt", "scholarships", "school", "schule", "schwarz", "science", "scot", "sd", "se", "search", "seat", "secure", "security", "seek", "select", "sener", "services", "ses", "seven", "sew", "sex", "sexy", "sfr", "sg", "sh", "shangrila", "sharp", "shaw", "shell", "shia", "shiksha", "shoes", "shop", "shopping", "shouji", "show", "showtime", "si", "silk", "sina", "singles", "site", "sj", "sk", "ski", "skin", "sky", "skype", "sl", "sling", "sm", "smart", "smile", "sn", "sncf", "so", "soccer", "social", "softbank", "software", "sohu", "solar", "solutions", "song", "sony", "soy", "spa", "space", "sport", "spot", "sr", "srl", "ss", "st", "stada", "staples", "star", "statebank", "statefarm", "stc", "stcgroup", "stockholm", "storage", "store", "stream", "studio", "study", "style", "su", "sucks", "supplies", "supply", "support", "surf", "surgery", "suzuki", "sv", "swatch", "swiss", "sx", "sy", "sydney", "systems", "sz", "tab", "taipei", "talk", "taobao", "target", "tatamotors", "tatar", "tattoo", "tax", "taxi", "tc", "tci", "td", "tdk", "team", "tech", "technology", "tel", "temasek", "tennis", "teva", "tf", "tg", "th", "thd", "theater", "theatre", "tiaa", "tickets", "tienda", "tiffany", "tips", "tires", "tirol", "tj", "tjmaxx", "tjx", "tk", "tkmaxx", "tl", "tm", "tmall", "tn", "to", "today", "tokyo", "tools", "top", "toray", "toshiba", "total", "tours", "town", "toyota", "toys", "tr", "trade", "trading", "training", "travel", "travelchannel", "travelers", "travelersinsurance", "trust", "trv", "tt", "tube", "tui", "tunes", "tushu", "tv", "tvs", "tw", "tz", "ua", "ubank", "ubs", "ug", "uk", "unicom", "university", "uno", "uol", "ups", "us", "uy", "uz", "va", "vacations", "vana", "vanguard", "vc", "ve", "vegas", "ventures", "verisign", "versicherung", "vet", "vg", "vi", "viajes", "video", "vig", "viking", "villas", "vin", "vip", "virgin", "visa", "vision", "viva", "vivo", "vlaanderen", "vn", "vodka", "volkswagen", "volvo", "vote", "voting", "voto", "voyage", "vu", "vuelos", "wales", "walmart", "walter", "wang", "wanggou", "watch", "watches", "weather", "weatherchannel", "webcam", "weber", "website", "wed", "wedding", "weibo", "weir", "wf", "whoswho", "wien", "wiki", "williamhill", "win", "windows", "wine", "winners", "wme", "wolterskluwer", "woodside", "work", "works", "world", "wow", "ws", "wtc", "wtf", "xbox", "xerox", "xfinity", "xihuan", "xin", "xn--11b4c3d", "xn--1ck2e1b", "xn--1qqw23a", "xn--2scrj9c", "xn--30rr7y", "xn--3bst00m", "xn--3ds443g", "xn--3e0b707e", "xn--3hcrj9c", "xn--3pxu8k", "xn--42c2d9a", "xn--45br5cyl", "xn--45brj9c", "xn--45q11c", "xn--4dbrk0ce", "xn--4gbrim", "xn--54b7fta0cc", "xn--55qw42g", "xn--55qx5d", "xn--5su34j936bgsg", "xn--5tzm5g", "xn--6frz82g", "xn--6qq986b3xl", "xn--80adxhks", "xn--80ao21a", "xn--80aqecdr1a", "xn--80asehdb", "xn--80aswg", "xn--8y0a063a", "xn--90a3ac", "xn--90ae", "xn--90ais", "xn--9dbq2a", "xn--9et52u", "xn--9krt00a", "xn--b4w605ferd", "xn--bck1b9a5dre4c", "xn--c1avg", "xn--c2br7g", "xn--cck2b3b", "xn--cckwcxetd", "xn--cg4bki", "xn--clchc0ea0b2g2a9gcd", "xn--czr694b", "xn--czrs0t", "xn--czru2d", "xn--d1acj3b", "xn--d1alf", "xn--e1a4c", "xn--eckvdtc9d", "xn--efvy88h", "xn--fct429k", "xn--fhbei", "xn--fiq228c5hs", "xn--fiq64b", "xn--fiqs8s", "xn--fiqz9s", "xn--fjq720a", "xn--flw351e", "xn--fpcrj9c3d", "xn--fzc2c9e2c", "xn--fzys8d69uvgm", "xn--g2xx48c", "xn--gckr3f0f", "xn--gecrj9c", "xn--gk3at1e", "xn--h2breg3eve", "xn--h2brj9c", "xn--h2brj9c8c", "xn--hxt814e", "xn--i1b6b1a6a2e", "xn--imr513n", "xn--io0a7i", "xn--j1aef", "xn--j1amh", "xn--j6w193g", "xn--jlq480n2rg", "xn--jlq61u9w7b", "xn--jvr189m", "xn--kcrx77d1x4a", "xn--kprw13d", "xn--kpry57d", "xn--kput3i", "xn--l1acc", "xn--lgbbat1ad8j", "xn--mgb9awbf", "xn--mgba3a3ejt", "xn--mgba3a4f16a", "xn--mgba7c0bbn0a", "xn--mgbaakc7dvf", "xn--mgbaam7a8h", "xn--mgbab2bd", "xn--mgbah1a3hjkrd", "xn--mgbai9azgqp6j", "xn--mgbayh7gpa", "xn--mgbbh1a", "xn--mgbbh1a71e", "xn--mgbc0a9azcg", "xn--mgbca7dzdo", "xn--mgbcpq6gpa1a", "xn--mgberp4a5d4ar", "xn--mgbgu82a", "xn--mgbi4ecexp", "xn--mgbpl2fh", "xn--mgbt3dhd", "xn--mgbtx2b", "xn--mgbx4cd0ab", "xn--mix891f", "xn--mk1bu44c", "xn--mxtq1m", "xn--ngbc5azd", "xn--ngbe9e0a", "xn--ngbrx", "xn--node", "xn--nqv7f", "xn--nqv7fs00ema", "xn--nyqy26a", "xn--o3cw4h", "xn--ogbpf8fl", "xn--otu796d", "xn--p1acf", "xn--p1ai", "xn--pgbs0dh", "xn--pssy2u", "xn--q7ce6a", "xn--q9jyb4c", "xn--qcka1pmc", "xn--qxa6a", "xn--qxam", "xn--rhqv96g", "xn--rovu88b", "xn--rvc1e0am3e", "xn--s9brj9c", "xn--ses554g", "xn--t60b56a", "xn--tckwe", "xn--tiq49xqyj", "xn--unup4y", "xn--vermgensberater-ctb", "xn--vermgensberatung-pwb", "xn--vhquv", "xn--vuq861b", "xn--w4r85el8fhu5dnra", "xn--w4rs40l", "xn--wgbh1c", "xn--wgbl6a", "xn--xhq521b", "xn--xkc2al3hye2a", "xn--xkc2dl3a5ee0h", "xn--y9a3aq", "xn--yfro4i67o", "xn--ygbi2ammx", "xn--zfr164b", "xxx", "xyz", "yachts", "yahoo", "yamaxun", "yandex", "ye", "yodobashi", "yoga", "yokohama", "you", "youtube", "yt", "yun", "za", "zappos", "zara", "zero", "zip", "zm", "zone", "zuerich", "zw", ""];
            const utilities = [{
                "id": "34",
                "company": "Anchorage Municipal Light and Power",
                "state": "AK",
                "priority": "1"
            }, {
                "id": "247",
                "company": "Chugach Electric",
                "state": "AK",
                "priority": "1"
            }, {
                "id": "1659",
                "company": "Golden Valley Electric",
                "state": "AK",
                "priority": "1"
            }, {
                "id": "1740",
                "company": "Homer Electric",
                "state": "AK",
                "priority": "1"
            }, {
                "id": "1909",
                "company": "Matanuska Electric",
                "state": "AK",
                "priority": "1"
            }, {
                "id": "17",
                "company": "Akiachak Native Community Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "20",
                "company": "Alaska Village Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "35",
                "company": "Aniak Light & Power Co Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "53",
                "company": "Atmautluak Tribal Utilities",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "65",
                "company": "Barrow Utils & Electric Coop",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "243",
                "company": "Chitina Electric Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "250",
                "company": "City & Borough of Sitka",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "260",
                "company": "City of Akutan",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "305",
                "company": "City of Atka",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "448",
                "company": "City of Chignik",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "537",
                "company": "City of Egegik",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "543",
                "company": "City of Elfin Cove",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "786",
                "company": "City of King Cove",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "822",
                "company": "City of Larsen Bay",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1054",
                "company": "City of Ouzinkie",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1169",
                "company": "City of Saint Paul",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1202",
                "company": "City of Seward",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1298",
                "company": "City of Tenakee Springs",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1328",
                "company": "City of Unalaska",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1392",
                "company": "City of White Mountain",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1416",
                "company": "City of Wrangell",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1491",
                "company": "Copper Valley Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1493",
                "company": "Cordova Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1647",
                "company": "Galena Electric Utility",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1645",
                "company": "G & K, Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1658",
                "company": "Gold Country Energy",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1694",
                "company": "Gwitchyaa Zhee Utility Co",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1750",
                "company": "Hughes Power & Light Co",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1760",
                "company": "Igiugig Electric Company",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1756",
                "company": "I-N-N Electric Coop, Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1767",
                "company": "Inside Passage Elec Coop, Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1773",
                "company": "Ipnatchiaq Electric Company",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1818",
                "company": "Ketchikan Public Utilities",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1824",
                "company": "Kodiak Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1825",
                "company": "Kokhanok Village Council",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1828",
                "company": "Kotzebue Electric",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1829",
                "company": "Kuiggluum Kallugvia",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1901",
                "company": "Manokotak Power Company",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1914",
                "company": "McGrath Light & Power Co",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1930",
                "company": "Metlakatla Power & Light",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1936",
                "company": "Middle Kuskokwim Elec Coop Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1977",
                "company": "Naknek Electric Assn, Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1978",
                "company": "Napakiak Ircinraq Power Co",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "1991",
                "company": "Nelson Lagoon Elec Coop Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2023",
                "company": "Nome Joint Utility Systems",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2037",
                "company": "North Slope Borough Power & Light",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2060",
                "company": "Nushagak Electric Coop, Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2117",
                "company": "Pedro Bay Village Council",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2120",
                "company": "Pelican Utility",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2129",
                "company": "Petersburg Borough",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2382",
                "company": "Tanana Power Co Inc",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2384",
                "company": "Tatitlek Electric Utility",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2388",
                "company": "TDX Manley Generating LLC",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2602",
                "company": "Tuntutuliak Comm Services Assn",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "2611",
                "company": "Unalakleet Valley Elec Coop",
                "state": "AK",
                "priority": "0"
            }, {
                "id": "18",
                "company": "Alabama Power",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "58",
                "company": "Baldwin County EMC",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "214",
                "company": "Central Alabama Electric",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "750",
                "company": "City of Huntsville",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "1536",
                "company": "Dixie Electric",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "1629",
                "company": "Foley Board of Utilities",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "2294",
                "company": "Singing River Electric",
                "state": "AL",
                "priority": "1"
            }, {
                "id": "23",
                "company": "Albertville Municipal Utilities Board",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "40",
                "company": "Arab Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "101",
                "company": "Black Warrior Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "235",
                "company": "Cherokee Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "268",
                "company": "City of Alexander City",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "286",
                "company": "City of Andalusia",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "304",
                "company": "City of Athens",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "348",
                "company": "City of Bessemer Utilities",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "386",
                "company": "City of Brundidge",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "485",
                "company": "City of Courtland",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "517",
                "company": "City of Dothan",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "570",
                "company": "City of Evergreen",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "576",
                "company": "City of Fairhope",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "593",
                "company": "City of Florence",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "692",
                "company": "City of Hartford",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "694",
                "company": "City of Hartselle",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "799",
                "company": "City of Lafayette",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "818",
                "company": "City of Lanett",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "873",
                "company": "City of Luverne",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "975",
                "company": "City of Muscle Shoals",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1038",
                "company": "City of Opelika",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1039",
                "company": "City of Opp",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1086",
                "company": "City of Piedmont",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1144",
                "company": "City of Robertsdale",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1163",
                "company": "City of Russellville",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1190",
                "company": "City of Scottsboro",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1294",
                "company": "City of Tarrant",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1315",
                "company": "City of Troy",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1322",
                "company": "City of Tuscumbia",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1323",
                "company": "City of Tuskegee",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1431",
                "company": "Clarke-Washington EMC",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1489",
                "company": "Coosa Valley Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1499",
                "company": "Covington Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1510",
                "company": "Cullman Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1511",
                "company": "Cullman Power Board",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1526",
                "company": "Decatur Utilities",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1535",
                "company": "Diverse Power Incorporated",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1633",
                "company": "Fort Payne Improvement Authority",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1638",
                "company": "Franklin Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1692",
                "company": "Guntersville Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1794",
                "company": "Joe Wheeler Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "1907",
                "company": "Marshall-De Kalb Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2026",
                "company": "North Alabama Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2113",
                "company": "Pea River Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2136",
                "company": "Pioneer Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2159",
                "company": "PowerSouth Energy Cooperative, Inc.",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2268",
                "company": "Sand Mountain Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2287",
                "company": "Sheffield Utilities",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2303",
                "company": "South Alabama Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2328",
                "company": "Southern Pine Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2376",
                "company": "Sylacauga Utilities Board",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2380",
                "company": "Tallapoosa River Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2391",
                "company": "Tennessee Valley Authority",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2406",
                "company": "Tombigbee Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "2865",
                "company": "Wiregrass Electric",
                "state": "AL",
                "priority": "0"
            }, {
                "id": "201",
                "company": "Carroll Electric",
                "state": "AR",
                "priority": "1"
            }, {
                "id": "2899",
                "company": "Entergy Arkansas",
                "state": "AR",
                "priority": "1"
            }, {
                "id": "1618",
                "company": "First Electric Cooperative",
                "state": "AR",
                "priority": "1"
            }, {
                "id": "2095",
                "company": "Ozarks Electric",
                "state": "AR",
                "priority": "1"
            }, {
                "id": "2892",
                "company": "Southwestern Electric Power Company (SWEPCO)",
                "state": "AR",
                "priority": "1"
            }, {
                "id": "43",
                "company": "Arkansas Valley Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "45",
                "company": "Ashley Chicot Elec Coop, Inc",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "343",
                "company": "City of Benton",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "345",
                "company": "City of Bentonville",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "736",
                "company": "City of Hope",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1017",
                "company": "City of North Little Rock",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1051",
                "company": "City of Osceola",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1065",
                "company": "City of Paris",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1090",
                "company": "City of Piggott",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1107",
                "company": "City of Prescott",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1222",
                "company": "City of Siloam Springs",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1379",
                "company": "City of West Memphis",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1425",
                "company": "City Water and Light Plant",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1433",
                "company": "Clarksville Light & Water",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1436",
                "company": "Clay County Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "186",
                "company": "C & L Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1485",
                "company": "Conway Corporation",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1504",
                "company": "Craighead Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1609",
                "company": "Farmers Electric Coop Corp",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "1951",
                "company": "Mississippi County Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2027",
                "company": "North Arkansas Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2088",
                "company": "Ouachita Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2103",
                "company": "Paragould Light & Water",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2130",
                "company": "Petit Jean Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2226",
                "company": "Rich Mountain Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2306",
                "company": "South Central Ark Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2333",
                "company": "Southwest Arkansas ECC",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2875",
                "company": "Woodruff Electric",
                "state": "AR",
                "priority": "0"
            }, {
                "id": "2917",
                "company": "Arizona Public Service",
                "state": "AZ",
                "priority": "1"
            }, {
                "id": "2261",
                "company": "Salt River Project",
                "state": "AZ",
                "priority": "1"
            }, {
                "id": "2593",
                "company": "Trico Electric",
                "state": "AZ",
                "priority": "1"
            }, {
                "id": "2918",
                "company": "Tucson Electric Power",
                "state": "AZ",
                "priority": "1"
            }, {
                "id": "2920",
                "company": "UNS Electric",
                "state": "AZ",
                "priority": "1"
            }, {
                "id": "13",
                "company": "Aguila Irrigation District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "16",
                "company": "Ak-Chin Electric Utility Authority",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "178",
                "company": "Buckeye Water C&D District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "616",
                "company": "City of Fredonia",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "923",
                "company": "City of Mesa",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1168",
                "company": "City of Safford",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1396",
                "company": "City of Williams - AZ",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1460",
                "company": "Colorado River Indian Irr Proj",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1468",
                "company": "Columbus Electric",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1539",
                "company": "Dixie Escalante REA",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1557",
                "company": "Duncan Valley Elec Coop, Inc",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1579",
                "company": "Electrical Dist No2 Pinal County",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1580",
                "company": "Electrical Dist No4 Pinal County",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1581",
                "company": "Electrical Dist No6 Pinal County",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1582",
                "company": "Electrical Dist No7 Maricopa",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1583",
                "company": "Electrical District No3 Pinal County",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1648",
                "company": "Garkane Energy",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1667",
                "company": "Graham County Electric",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1707",
                "company": "Harquahala Valley Pwr District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1736",
                "company": "Hohokam Irr & Drain Dist",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1904",
                "company": "Maricopa County M W C Dist #1",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1919",
                "company": "McMullen Valley Water C&D Dist",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1957",
                "company": "Mohave Electric",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1986",
                "company": "Navajo Tribal Utility Authority",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1989",
                "company": "Navopache Electric",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2068",
                "company": "Ocotillo Water Conserv. Dist.",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2099",
                "company": "Page Utility Enterprises",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2242",
                "company": "Roosevelt Irrigation District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2365",
                "company": "Sulphur Springs Valley EC",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2405",
                "company": "Tohono O'Odham Utility Authority",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2409",
                "company": "Tonopah Irrigation District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2559",
                "company": "Town of Thatcher- (AZ)",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2576",
                "company": "Town of Wickenburg",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2630",
                "company": "USBIA-San Carlos Project",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "2835",
                "company": "Wellton-Mohawk Irrigation & Drainage District",
                "state": "AZ",
                "priority": "0"
            }, {
                "id": "1878",
                "company": "Los Angeles Department of Water & Power",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "2923",
                "company": "Pacific Gas & Electric Co",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "2254",
                "company": "Sacramento Municipal Utilities District",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "2925",
                "company": "San Diego Gas & Electric Co",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "2922",
                "company": "Southern California Edison Co",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "2633",
                "company": "Valley Electric",
                "state": "CA",
                "priority": "1"
            }, {
                "id": "37",
                "company": "Anza Electric",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "38",
                "company": "Anza Electric Coop Inc",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "251",
                "company": "City & County of San Francisco",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "262",
                "company": "City of Alameda",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "285",
                "company": "City of Anaheim",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "316",
                "company": "City of Azusa",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "320",
                "company": "City of Banning",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "351",
                "company": "City of Biggs",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "394",
                "company": "City of Burbank Water and Power",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "470",
                "company": "City of Colton",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "483",
                "company": "City of Corona",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "651",
                "company": "City of Glendale",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "676",
                "company": "City of Gridley",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "698",
                "company": "City of Healdsburg",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "756",
                "company": "City of Industry",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "859",
                "company": "City of Lodi",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "863",
                "company": "City of Lompoc",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "955",
                "company": "City of Moreno Valley",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "981",
                "company": "City of Needles",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1063",
                "company": "City of Palo Alto",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1071",
                "company": "City of Pasadena",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1129",
                "company": "City of Redding",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1142",
                "company": "City of Riverside",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1156",
                "company": "City of Roseville",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1183",
                "company": "City of Santa Clara",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1208",
                "company": "City of Shasta Lake",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1327",
                "company": "City of Ukiah",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1338",
                "company": "City of Vernon",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1461",
                "company": "Colorado River Indian Irr Proj",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1762",
                "company": "Imperial Irrigation District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1850",
                "company": "Lassen Municipal Utility District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1851",
                "company": "Lathrop Irrigation District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1927",
                "company": "Merced Irrigation District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "1956",
                "company": "Modesto Irrigation District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2141",
                "company": "Pittsburg Power Company",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2147",
                "company": "Plumas-Sierra Rural Electric",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2153",
                "company": "Port of Oakland",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2154",
                "company": "Port of Stockton",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2206",
                "company": "Rancho Cucamonga Municipal Utility",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2371",
                "company": "Surprise Valley Electrification",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2596",
                "company": "Trinity Public Utilities Dist",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2599",
                "company": "Truckee Donner PUD",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2598",
                "company": "Truckee Donner P U D",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2603",
                "company": "Tuolumne County Pub Power Agny",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "2604",
                "company": "Turlock Irrigation District",
                "state": "CA",
                "priority": "0"
            }, {
                "id": "96",
                "company": "Black Hills",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "469",
                "company": "City of Colorado Springs",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "1240",
                "company": "City of Springfield",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "1770",
                "company": "Intermountain Rural Electric",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "2927",
                "company": "Public Service Co of Colorado",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "2622",
                "company": "United Power",
                "state": "CO",
                "priority": "1"
            }, {
                "id": "114",
                "company": "Boone Co REMC",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "303",
                "company": "City of Aspen",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "398",
                "company": "City of Burlington",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "430",
                "company": "City of Center",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "507",
                "company": "City of Delta",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "601",
                "company": "City of Fort Collins",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "603",
                "company": "City of Fort Morgan",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "606",
                "company": "City of Fountain",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "652",
                "company": "City of Glenwood Springs",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "680",
                "company": "City of Gunnison",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "730",
                "company": "City of Holyoke",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "774",
                "company": "City of Julesburg",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "797",
                "company": "City of La Junta",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "814",
                "company": "City of Lamar",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "823",
                "company": "City of Las Animas",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "865",
                "company": "City of Longmont",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "866",
                "company": "City of Loveland",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1314",
                "company": "City of Trinidad",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1417",
                "company": "City of Wray",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1422",
                "company": "City of Yuma",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1533",
                "company": "Delta Montrose Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1587",
                "company": "Empire Electric Association",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1671",
                "company": "Grand Valley Power",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1691",
                "company": "Gunnison County Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1732",
                "company": "Highline Electric Association",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1731",
                "company": "High West Energy",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1739",
                "company": "Holy Cross Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1809",
                "company": "KC Electric Association",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1831",
                "company": "La Plata Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1963",
                "company": "Moon Lake Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1969",
                "company": "Morgan County Rural Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1972",
                "company": "Mountain Parks Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1973",
                "company": "Mountain View Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2156",
                "company": "Poudre Valley REA",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2269",
                "company": "Sangre De Cristo Elec Assn Inc",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2270",
                "company": "Sangre De Cristo Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2264",
                "company": "San Isabel Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2265",
                "company": "San Luis Valley REC",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2266",
                "company": "San Miguel Power",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2317",
                "company": "Southeast Colorado Power Association",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2342",
                "company": "Southwestern Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2455",
                "company": "Town of Estes Park",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2459",
                "company": "Town of Fleming",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2465",
                "company": "Town of Frederick",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2469",
                "company": "Town of Granada",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2477",
                "company": "Town of Haxtun",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2500",
                "company": "Town of Lyons",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2521",
                "company": "Town of Oak Creek",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2849",
                "company": "Wheatland Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2854",
                "company": "White River Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2880",
                "company": "Xcel Energy",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2883",
                "company": "Yampa Valley Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "2882",
                "company": "Y-W Electric",
                "state": "CO",
                "priority": "0"
            }, {
                "id": "1023",
                "company": "City of Norwich",
                "state": "CT",
                "priority": "1"
            }, {
                "id": "2931",
                "company": "Connecticut Light & Power Co",
                "state": "CT",
                "priority": "1"
            }, {
                "id": "1682",
                "company": "Groton Dept of Utilities",
                "state": "CT",
                "priority": "1"
            }, {
                "id": "2567",
                "company": "Town of Wallingford",
                "state": "CT",
                "priority": "1"
            }, {
                "id": "2621",
                "company": "United Illuminating",
                "state": "CT",
                "priority": "1"
            }, {
                "id": "161",
                "company": "Bozrah Light & Power Company",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "771",
                "company": "City of Jewett City",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "1232",
                "company": "City of South Norwalk",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "1594",
                "company": "Eversource (Previously NSTAR)",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "1959",
                "company": "Mohegan Tribal Utility Authority",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "2058",
                "company": "Norwalk Third Taxing District",
                "state": "CT",
                "priority": "0"
            }, {
                "id": "2900",
                "company": "Potomac Edison Company",
                "state": "DC",
                "priority": "1"
            }, {
                "id": "2933",
                "company": "Potomac Electric Power Co",
                "state": "DC",
                "priority": "1"
            }, {
                "id": "2935",
                "company": "SolarCity",
                "state": "DC",
                "priority": "1"
            }, {
                "id": "519",
                "company": "City of Dover",
                "state": "DE",
                "priority": "1"
            }, {
                "id": "999",
                "company": "City of Newark",
                "state": "DE",
                "priority": "1"
            }, {
                "id": "1530",
                "company": "Delaware Electric",
                "state": "DE",
                "priority": "1"
            }, {
                "id": "839",
                "company": "City of Lewes",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "928",
                "company": "City of Milford",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "1194",
                "company": "City of Seaford",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "1995",
                "company": "New Castle Municipal",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "2438",
                "company": "Town of Clayton",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "2513",
                "company": "Town of Middletown",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "2545",
                "company": "Town of Smyrna",
                "state": "DE",
                "priority": "0"
            }, {
                "id": "1554",
                "company": "Duke Energy Florida",
                "state": "FL",
                "priority": "1"
            }, {
                "id": "1627",
                "company": "Florida Power and Light",
                "state": "FL",
                "priority": "1"
            }, {
                "id": "1690",
                "company": "Gulf Power",
                "state": "FL",
                "priority": "1"
            }, {
                "id": "1787",
                "company": "JEA",
                "state": "FL",
                "priority": "1"
            }, {
                "id": "2389",
                "company": "TECO",
                "state": "FL",
                "priority": "1"
            }, {
                "id": "74",
                "company": "Beaches Energy Services",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "220",
                "company": "Central Florida Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "245",
                "company": "Choctawhatche Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "261",
                "company": "City of Alachua",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "326",
                "company": "City of Bartow",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "360",
                "company": "City of Blountstown",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "405",
                "company": "City of Bushnell",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "456",
                "company": "City of Clewiston",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "455",
                "company": "City of Clewiston",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "602",
                "company": "City of Fort Meade",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "669",
                "company": "City of Green Cove Springs",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "733",
                "company": "City of Homestead",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "811",
                "company": "City of Lakeland",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "809",
                "company": "City of Lake Worth",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "835",
                "company": "City of Leesburg",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "950",
                "company": "City of Moore Haven",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "961",
                "company": "City of Mount Dora",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1001",
                "company": "City of Newberry",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "998",
                "company": "City of New Smyrna Beach",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1028",
                "company": "City of Ocala",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1119",
                "company": "City of Quincy",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1262",
                "company": "City of Starke",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1293",
                "company": "City of Tallahassee",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1339",
                "company": "City of Vero Beach",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1366",
                "company": "City of Wauchula",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1398",
                "company": "City of Williston",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1437",
                "company": "Clay Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1590",
                "company": "Escambia River Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1626",
                "company": "Florida Keys Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1634",
                "company": "Fort Pierce Utilities",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1646",
                "company": "Gainesville Regional Utilities",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1656",
                "company": "Glades Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1689",
                "company": "Gulf Coast Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1713",
                "company": "Havana Power & Light Company",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1821",
                "company": "Kissimmee Utility Authority",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "1856",
                "company": "Lee County Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2072",
                "company": "Okefenoke Rural Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2083",
                "company": "Orlando Utilities Commission",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2114",
                "company": "Peace River Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2220",
                "company": "Reedy Creek Improvement",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2279",
                "company": "SECO",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2367",
                "company": "Sumter Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2374",
                "company": "Suwannee Valley Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2381",
                "company": "Talquin Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2632",
                "company": "Utility Board of the City of Key West",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2838",
                "company": "West Florida Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "2870",
                "company": "Withlacoochee River Electric",
                "state": "FL",
                "priority": "0"
            }, {
                "id": "441",
                "company": "City of Chattanooga",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "1455",
                "company": "Cobb Electric",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "1653",
                "company": "Georgia Power",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "1681",
                "company": "GreyStone Power",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "1778",
                "company": "Jackson Electric",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "2274",
                "company": "Sawnee Electric",
                "state": "GA",
                "priority": "1"
            }, {
                "id": "21",
                "company": "Albany Utility Board",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "30",
                "company": "Altamaha Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "32",
                "company": "Amicalola Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "108",
                "company": "Blue Ridge Mountain EMC",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "195",
                "company": "Canoochee Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "202",
                "company": "Carroll Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "221",
                "company": "Central Georgia Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "255",
                "company": "City of Acworth",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "257",
                "company": "City of Adel",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "323",
                "company": "City of Barnesville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "356",
                "company": "City of Blakely",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "392",
                "company": "City of Buford",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "409",
                "company": "City of Cairo",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "412",
                "company": "City of Calhoun",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "418",
                "company": "City of Camilla",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "422",
                "company": "City of Cartersville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "446",
                "company": "City of Chickamauga",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "464",
                "company": "City of College Park",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "478",
                "company": "City of Commerce",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "486",
                "company": "City of Covington",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "516",
                "company": "City of Doerun",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "518",
                "company": "City of Douglas",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "533",
                "company": "City of East Point",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "539",
                "company": "City of Elberton",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "549",
                "company": "City of Ellaville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "572",
                "company": "City of Fairburn",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "600",
                "company": "City of Forsyth",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "668",
                "company": "City of Grantville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "677",
                "company": "City of Griffin",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "685",
                "company": "City of Hampton",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "724",
                "company": "City of Hogansville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "760",
                "company": "City of Jackson",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "800",
                "company": "City of LaFayette",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "794",
                "company": "City of La Grange",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "830",
                "company": "City of Lawrenceville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "890",
                "company": "City of Mansfield",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "898",
                "company": "City of Marietta",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "942",
                "company": "City of Monroe",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "943",
                "company": "City of Monroe",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "949",
                "company": "City of Monticello",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "959",
                "company": "City of Moultrie",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1016",
                "company": "City of Norcross",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1057",
                "company": "City of Oxford",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1120",
                "company": "City of Quitman",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1181",
                "company": "City of Sandersville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1289",
                "company": "City of Sylvania",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1290",
                "company": "City of Sylvester",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1301",
                "company": "City of Thomaston",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1302",
                "company": "City of Thomasville",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1355",
                "company": "City of Washington",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1381",
                "company": "City of West Point",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1390",
                "company": "City of Whigham",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1452",
                "company": "Coastal Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1462",
                "company": "Colquitt Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1500",
                "company": "Coweta-Fayette Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1507",
                "company": "Crisp County Power",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1519",
                "company": "Dalton Utilities",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1596",
                "company": "Excelsior Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1619",
                "company": "Fitzgerald Water Light & Bond",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1622",
                "company": "Flint Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1635",
                "company": "Fort Valley Utility",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1665",
                "company": "Grady Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1696",
                "company": "Habersham Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1711",
                "company": "Hart Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1715",
                "company": "Haywood Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1774",
                "company": "Irwin Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1789",
                "company": "Jefferson Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1869",
                "company": "Little Ocmulgee Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1868",
                "company": "Little Ocmulgee El Member Corp",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1935",
                "company": "Middle Georgia El Member Corp",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "1954",
                "company": "Mitchell Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2008",
                "company": "Newnan Water, Sewer & Light",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2033",
                "company": "North Georgia Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2063",
                "company": "Ocmulgee Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2064",
                "company": "Oconee Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2143",
                "company": "Planters Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2211",
                "company": "Rayle Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2273",
                "company": "Satilla Rural Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2296",
                "company": "Slash Pine Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2300",
                "company": "Snapping Shoals Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2331",
                "company": "Southern Rivers Energy",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2368",
                "company": "Sumter Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2394",
                "company": "Three Notch Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2432",
                "company": "Town of Brinson",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2589",
                "company": "Tri-County Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2592",
                "company": "Tri-State Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2628",
                "company": "Upson Elec Member Corp",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2814",
                "company": "Walton Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2819",
                "company": "Washington Electric",
                "state": "GA",
                "priority": "0"
            }, {
                "id": "2942",
                "company": "Hawaiian Electric Co",
                "state": "HI",
                "priority": "1"
            }, {
                "id": "2943",
                "company": "Hawaii Electric Light Co",
                "state": "HI",
                "priority": "1"
            }, {
                "id": "1804",
                "company": "Kauai Island Utility Cooperativeerative",
                "state": "HI",
                "priority": "1"
            }, {
                "id": "2944",
                "company": "Maui Electric Co",
                "state": "HI",
                "priority": "1"
            }, {
                "id": "2945",
                "company": "Sunrun",
                "state": "HI",
                "priority": "1"
            }, {
                "id": "282",
                "company": "City of Ames",
                "state": "IA",
                "priority": "1"
            }, {
                "id": "1569",
                "company": "Eastern Iowa Light & Power",
                "state": "IA",
                "priority": "1"
            }, {
                "id": "2950",
                "company": "Interstate Power and Light Co",
                "state": "IA",
                "priority": "1"
            }, {
                "id": "1866",
                "company": "Linn County REC",
                "state": "IA",
                "priority": "1"
            }, {
                "id": "2948",
                "company": "MidAmerican Energy Co",
                "state": "IA",
                "priority": "1"
            }, {
                "id": "4",
                "company": "Access Energy",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "29",
                "company": "Allamakee-Clayton Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "47",
                "company": "Atchison-Holt Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "48",
                "company": "Atchison-Holt Electric Coop",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "52",
                "company": "Atlantic Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "60",
                "company": "Bancroft Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "111",
                "company": "Board of Water Electric & Communications",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "118",
                "company": "Boone Valley Electric Coop",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "181",
                "company": "Butler County Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "188",
                "company": "Calhoun County Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "207",
                "company": "Cascade Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "209",
                "company": "Cass Electric Coop",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "211",
                "company": "Cedar Falls Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "232",
                "company": "Chariton Valley Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "258",
                "company": "City of Afton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "259",
                "company": "City of Akron",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "271",
                "company": "City of Algona",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "275",
                "company": "City of Alta",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "276",
                "company": "City of Alta Vista",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "288",
                "company": "City of Anita",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "291",
                "company": "City of Anthon",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "293",
                "company": "City of Aplington",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "307",
                "company": "City of Auburn",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "310",
                "company": "City of Aurelia",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "336",
                "company": "City of Bellevue",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "358",
                "company": "City of Bloomfield",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "373",
                "company": "City of Breda",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "383",
                "company": "City of Brooklyn",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "390",
                "company": "City of Buffalo",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "403",
                "company": "City of Burt",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "414",
                "company": "City of Callender",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "419",
                "company": "City of Carlisle",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "461",
                "company": "City of Coggon",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "482",
                "company": "City of Corning",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "484",
                "company": "City of Corwith",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "501",
                "company": "City of Danville",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "504",
                "company": "City of Dayton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "508",
                "company": "City of Denison",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "510",
                "company": "City of Denver",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "515",
                "company": "City of Dike",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "527",
                "company": "City of Durant",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "529",
                "company": "City of Dysart",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "531",
                "company": "City of Earlville",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "565",
                "company": "City of Estherville",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "564",
                "company": "City of Estherville",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "571",
                "company": "City of Fairbank",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "586",
                "company": "City of Farnhamville",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "596",
                "company": "City of Fonda",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "597",
                "company": "City of Fontanelle",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "598",
                "company": "City of Forest City",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "613",
                "company": "City of Fredericksburg",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "653",
                "company": "City of Glidden",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "658",
                "company": "City of Graettinger",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "663",
                "company": "City of Grand Junction",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "672",
                "company": "City of Greenfield",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "681",
                "company": "City of Guttenberg",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "693",
                "company": "City of Hartley",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "697",
                "company": "City of Hawarden",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "723",
                "company": "City of Hinton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "739",
                "company": "City of Hopkinton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "753",
                "company": "City of Independence",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "785",
                "company": "City of Kimballton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "805",
                "company": "City of Lake Mills",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "806",
                "company": "City of Lake Park",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "808",
                "company": "City of Lake View",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "816",
                "company": "City of Lamoni",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "820",
                "company": "City of Larchwood",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "825",
                "company": "City of Laurens",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "828",
                "company": "City of Lawler",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "838",
                "company": "City of Lenox",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "854",
                "company": "City of Livermore",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "864",
                "company": "City of Long Grove",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "889",
                "company": "City of Manning",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "893",
                "company": "City of Mapleton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "894",
                "company": "City of Maquoketa",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "895",
                "company": "City of Marathon",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "912",
                "company": "City of McGregor",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "929",
                "company": "City of Milford",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "947",
                "company": "City of Montezuma",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "967",
                "company": "City of Mt Pleasant",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "986",
                "company": "City of Neola",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "991",
                "company": "City of New Hampton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1030",
                "company": "City of Ogden",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1036",
                "company": "City of Onawa",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1040",
                "company": "City of Orange City",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1043",
                "company": "City of Orient",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1047",
                "company": "City of Osage",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1064",
                "company": "City of Panora",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1072",
                "company": "City of Paton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1073",
                "company": "City of Paullina",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1077",
                "company": "City of Pella",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1098",
                "company": "City of Pocahontas",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1109",
                "company": "City of Preston",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1110",
                "company": "City of Primghar",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1126",
                "company": "City of Readlyn",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1130",
                "company": "City of Remsen",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1132",
                "company": "City of Renwick",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1149",
                "company": "City of Rockford",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1167",
                "company": "City of Sabula",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1180",
                "company": "City of Sanborn",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1200",
                "company": "City of Sergeant Bluff",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1201",
                "company": "City of Sergeant Bluff",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1211",
                "company": "City of Shelby",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1219",
                "company": "City of Sibley",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1223",
                "company": "City of Sioux Center",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1236",
                "company": "City of Spencer",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1258",
                "company": "City of Stanhope",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1259",
                "company": "City of Stanton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1264",
                "company": "City of State Center",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1271",
                "company": "City of Story City",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1273",
                "company": "City of Stratford",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1275",
                "company": "City of Strawberry Point",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1278",
                "company": "City of Stuart",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1285",
                "company": "City of Sumner",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1306",
                "company": "City of Tipton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1310",
                "company": "City of Traer",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1340",
                "company": "City of Villisca",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1342",
                "company": "City of Vinton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1350",
                "company": "City of Wall Lake",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1371",
                "company": "City of Webster City",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1377",
                "company": "City of West Bend",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1378",
                "company": "City of West Liberty",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1394",
                "company": "City of Whittemore",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1401",
                "company": "City of Wilton",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1407",
                "company": "City of Winterset",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1412",
                "company": "City of Woodbine",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1414",
                "company": "City of Woolstock",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1430",
                "company": "Clarke Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1482",
                "company": "Consumers Energy",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1567",
                "company": "East-Central Iowa Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1578",
                "company": "Eldridge City Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1604",
                "company": "Farmers Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1613",
                "company": "Federated Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1639",
                "company": "Franklin Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1640",
                "company": "Freeborn-Mower Cooperative Services",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1664",
                "company": "Gowrie Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1666",
                "company": "Grafton Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1683",
                "company": "Grundy Center Muncipal Light & Power",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1684",
                "company": "Grundy County Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1685",
                "company": "Grundy Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1693",
                "company": "Guthrie County Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1701",
                "company": "Harlan Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1709",
                "company": "Harrison County Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1719",
                "company": "Heartland Power",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1749",
                "company": "Hudson Municipal Electric Utility",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1765",
                "company": "Indianola Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1771",
                "company": "Iowa Lakes Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1816",
                "company": "Keosauqua Municipal Light & Pwr",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1832",
                "company": "La Porte City Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1891",
                "company": "Lyon Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1892",
                "company": "Lyon Rural Electric Coop",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1902",
                "company": "Maquoketa Valley Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1938",
                "company": "Midland Power",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "1947",
                "company": "MiEnergy Cooperative",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2000",
                "company": "New London Municipal Utilities",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2017",
                "company": "Nishnabotna Valley REC",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2020",
                "company": "Nobles Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2039",
                "company": "North West Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2085",
                "company": "Osceola Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2121",
                "company": "Pella Cooperative Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2146",
                "company": "Pleasant Hill Community Line",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2162",
                "company": "Prairie Energy",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2202",
                "company": "Raccoon Valley Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2237",
                "company": "Rock Rapids Municipal Utility",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2326",
                "company": "Southern Iowa Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2335",
                "company": "Southwest Iowa Rural Electrict",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2377",
                "company": "T I P Rural Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2504",
                "company": "Town of Manilla",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2574",
                "company": "Town of Westfield",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2615",
                "company": "United Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2828",
                "company": "Waverly Municipal Electric",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2845",
                "company": "Western Iowa Power",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2840",
                "company": "West Point Utility System",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "2874",
                "company": "Woodbury County Rural ECA",
                "state": "IA",
                "priority": "0"
            }, {
                "id": "751",
                "company": "City of Idaho Falls",
                "state": "ID",
                "priority": "1"
            }, {
                "id": "1759",
                "company": "Idaho Power",
                "state": "ID",
                "priority": "1"
            }, {
                "id": "1826",
                "company": "Kootenai Electric",
                "state": "ID",
                "priority": "1"
            }, {
                "id": "1884",
                "company": "Lower Valley Energy",
                "state": "ID",
                "priority": "1"
            }, {
                "id": "266",
                "company": "City of Albion",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "365",
                "company": "City of Bonners Ferry",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "396",
                "company": "City of Burley",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "713",
                "company": "City of Heyburn",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "936",
                "company": "City of Minidoka",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1096",
                "company": "City of Plummer",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1158",
                "company": "City of Rupert",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1230",
                "company": "City of Soda Springs",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1373",
                "company": "City of Weiser",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1439",
                "company": "Clearwater Power Company",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1565",
                "company": "East End Mutual Elec Co Ltd",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1601",
                "company": "Fall River Power",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1602",
                "company": "Fall River Rural Electric",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1608",
                "company": "Farmers Electric Company, Ltd",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1757",
                "company": "Idaho County L&P Coop Assn, Inc",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1758",
                "company": "Idaho Falls Power",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1766",
                "company": "Inland Power & Light Company",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1879",
                "company": "Lost River Electric Coop Inc",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "1952",
                "company": "Missoula Electric",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2047",
                "company": "Northern Lights",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2204",
                "company": "Raft Rural Electric",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2231",
                "company": "Riverside Electric Cooperative",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2238",
                "company": "Rocky Mountain Power",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2259",
                "company": "Salmon River Electric",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2315",
                "company": "South Side Electric, Inc",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2618",
                "company": "United Electric Co-Op",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "2643",
                "company": "Vigilante Electric",
                "state": "ID",
                "priority": "0"
            }, {
                "id": "31",
                "company": "Ameren",
                "state": "IL",
                "priority": "1"
            }, {
                "id": "976",
                "company": "City of Naperville",
                "state": "IL",
                "priority": "1"
            }, {
                "id": "1241",
                "company": "City of Springfield",
                "state": "IL",
                "priority": "1"
            }, {
                "id": "2956",
                "company": "Commonwealth Edison Co (ComEd)",
                "state": "IL",
                "priority": "1"
            }, {
                "id": "2947",
                "company": "MidAmerican Energy Co",
                "state": "IL",
                "priority": "1"
            }, {
                "id": "5",
                "company": "Adams Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "187",
                "company": "Cairo Public Utility Company",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "263",
                "company": "City of Albany",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "272",
                "company": "City of Allendale",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "277",
                "company": "City of Altamont",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "328",
                "company": "City of Batavia",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "374",
                "company": "City of Breese",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "406",
                "company": "City of Bushnell",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "420",
                "company": "City of Carlyle",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "421",
                "company": "City of Carmi",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "425",
                "company": "City of Casey",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "575",
                "company": "City of Fairfield",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "582",
                "company": "City of Farmer City",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "592",
                "company": "City of Flora",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "636",
                "company": "City of Geneseo",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "637",
                "company": "City of Geneva",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "717",
                "company": "City of Highland",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "902",
                "company": "City of Marshall",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "908",
                "company": "City of Mascoutah",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "914",
                "company": "City of McLeansboro",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "924",
                "company": "City of Metropolis",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1007",
                "company": "City of Newton",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1031",
                "company": "City of Oglesby",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1081",
                "company": "City of Peru",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1111",
                "company": "City of Princeton",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1127",
                "company": "City of Red Bud",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1147",
                "company": "City of Rock Falls",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1154",
                "company": "City of Roodhouse",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1245",
                "company": "City of St Charles",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1282",
                "company": "City of Sullivan",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1362",
                "company": "City of Waterloo",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1444",
                "company": "Clinton County Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1459",
                "company": "Coles-Moultrie Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1471",
                "company": "ComEd",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1494",
                "company": "Corn Belt Energy",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1568",
                "company": "Eastern Illinois Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1577",
                "company": "Egyptian Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1589",
                "company": "Enerstar Power Corp",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1761",
                "company": "Illinois Rural Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1793",
                "company": "Jo-Carroll Energy",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1913",
                "company": "McDonough Power Coop",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1926",
                "company": "Menard Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1895",
                "company": "M J M Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1960",
                "company": "Monroe County Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "1979",
                "company": "Napperville Electric Utility",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2024",
                "company": "Norris Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2233",
                "company": "Rochelle Municipal Utilities",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2235",
                "company": "Rock Energy",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2248",
                "company": "Rural Electric Convenience",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2275",
                "company": "Scenic Rivers Energy",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2288",
                "company": "Shelby Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2322",
                "company": "Southeastern IL Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2324",
                "company": "Southern Illinois Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2343",
                "company": "Southwestern Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2894",
                "company": "Southwestern Electric Coop (SWECI)",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2346",
                "company": "Spoon River Electric Coop, Inc",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2658",
                "company": "Village of Bethany",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2673",
                "company": "Village of Chatham",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2693",
                "company": "Village of Freeburg",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2702",
                "company": "Village of Greenup",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2721",
                "company": "Village of Ladd",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2763",
                "company": "Village of Rantoul",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2768",
                "company": "Village of Riverton",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2803",
                "company": "Village of Winnetka",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2829",
                "company": "Wayne-White Counties Electric",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2843",
                "company": "Western Illinois Elec Coop",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "2862",
                "company": "Wilmet",
                "state": "IL",
                "priority": "0"
            }, {
                "id": "11",
                "company": "AES",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "1550",
                "company": "Duke",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "1764",
                "company": "Indiana Michigan Power",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "1945",
                "company": "Midwest Energy",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "2960",
                "company": "Northern Indiana Pub Serv Co (NIPSCO)",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "2964",
                "company": "Southern Indiana Gas & Electric Co",
                "state": "IN",
                "priority": "1"
            }, {
                "id": "67",
                "company": "Bartholomew County Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "115",
                "company": "Boone County",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "116",
                "company": "Boone County Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "163",
                "company": "Bremen Electric Light & Power Company",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "204",
                "company": "Carroll-White REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "287",
                "company": "City of Anderson",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "308",
                "company": "City of Auburn",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "363",
                "company": "City of Bluffton",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "472",
                "company": "City of Columbia City",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "488",
                "company": "City of Covington",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "607",
                "company": "City of Frankfort",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "632",
                "company": "City of Garrett",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "633",
                "company": "City of Gas City",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "670",
                "company": "City of Greendale",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "673",
                "company": "City of Greenfield",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "682",
                "company": "City of Hagerstown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "749",
                "company": "City of Huntingburg",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "766",
                "company": "City of Jasper",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "832",
                "company": "City of Lebanon",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "853",
                "company": "City of Linton",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "862",
                "company": "City of Logansport",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "938",
                "company": "City of Mishawaka",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "997",
                "company": "City of New Ross",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1082",
                "company": "City of Peru",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1131",
                "company": "City of Rensselaer",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1137",
                "company": "City of Richmond",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1139",
                "company": "City of Rising Sun",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1191",
                "company": "City of Scottsburg",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1297",
                "company": "City of Tell City",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1303",
                "company": "City of Thorntown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1318",
                "company": "City of Troy",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1356",
                "company": "City of Washington",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1369",
                "company": "City of Waynetown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1397",
                "company": "City of Williamsport",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1427",
                "company": "Clark County Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1506",
                "company": "Crawfordsville Electric Light & Power",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1521",
                "company": "Darlington Light & Power Co",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1522",
                "company": "Daviess Martin County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1525",
                "company": "Decatur County Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1547",
                "company": "Dublin Municipal Electric Util",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1548",
                "company": "Dubois Rural Electric",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1574",
                "company": "Edinburgh Municipal Utilities",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1624",
                "company": "Flora Utilities",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1644",
                "company": "Fulton County Rural E M C",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1708",
                "company": "Harrison County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1725",
                "company": "Hendricks Power",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1726",
                "company": "Henry County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1772",
                "company": "IPL",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1777",
                "company": "Jackson County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1784",
                "company": "Jasper County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1786",
                "company": "Jay County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1796",
                "company": "Johnson County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1801",
                "company": "Kankakee Valley REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1827",
                "company": "Kosciusko County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1836",
                "company": "Lagrange County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1837",
                "company": "Lagrange County Rural E M C",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1854",
                "company": "Lawrenceburg Municipal Utils",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1906",
                "company": "Marshall County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "1931",
                "company": "Miami-Cass County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2009",
                "company": "Newton County Rural E M C",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2011",
                "company": "Ninestar Connect",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2010",
                "company": "NineStar Connect",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2018",
                "company": "Noble County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2045",
                "company": "Northeastern Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2079",
                "company": "Orange County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2105",
                "company": "Parke County REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2109",
                "company": "Paulding-Putman Electric",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2222",
                "company": "REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2250",
                "company": "RushShelby Energy",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2308",
                "company": "South Central Indiana REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2323",
                "company": "Southeastern Indiana REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2325",
                "company": "Southern Indiana REC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2359",
                "company": "Steuben County Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2400",
                "company": "Tipmont Rural Electric",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2402",
                "company": "Tipton Municipal Electric",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2410",
                "company": "Town of Advance",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2412",
                "company": "Town of Argos",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2415",
                "company": "Town of Avilla",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2417",
                "company": "Town of Bainbridge",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2418",
                "company": "Town of Bargersville",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2433",
                "company": "Town of Brooklyn",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2434",
                "company": "Town of Brookston",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2435",
                "company": "Town of Centerville",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2436",
                "company": "Town of Chalmers",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2440",
                "company": "Town of Coatesville",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2443",
                "company": "Town of Crane",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2449",
                "company": "Town of Dunreith",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2456",
                "company": "Town of Etna Green",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2458",
                "company": "Town of Ferdinand",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2464",
                "company": "Town of Frankton",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2486",
                "company": "Town of Jamestown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2487",
                "company": "Town of Kingsford Heights",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2488",
                "company": "Town of Knightstown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2490",
                "company": "Town of Ladoga",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2514",
                "company": "Town of Middletown",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2515",
                "company": "Town of Montezuma",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2517",
                "company": "Town of New Carlisle",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2522",
                "company": "Town of Paoli",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2525",
                "company": "Town of Pendleton",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2530",
                "company": "Town of Pittsboro",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2536",
                "company": "Town of Rockville",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2548",
                "company": "Town of South Whitley",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2549",
                "company": "Town of Spiceland",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2556",
                "company": "Town of Straughn",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2560",
                "company": "Town of Veedersburg",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2566",
                "company": "Town of Walkerton",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2569",
                "company": "Town of Warren",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2578",
                "company": "Town of Winamac",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2631",
                "company": "Utilities Dist-Western IN REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2815",
                "company": "Warren County Rural E M C",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2844",
                "company": "Western Indiana Energy REMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "2857",
                "company": "Whitewater Valley Rural EMC",
                "state": "IN",
                "priority": "0"
            }, {
                "id": "776",
                "company": "City of Kansas City",
                "state": "KS",
                "priority": "1"
            }, {
                "id": "1593",
                "company": "Evergy (formerly Westar)",
                "state": "KS",
                "priority": "1"
            }, {
                "id": "1641",
                "company": "FreeState Electric",
                "state": "KS",
                "priority": "1"
            }, {
                "id": "1946",
                "company": "Midwest Energy",
                "state": "KS",
                "priority": "1"
            }, {
                "id": "2968",
                "company": "Wheatland Electric Coop (WECI)",
                "state": "KS",
                "priority": "1"
            }, {
                "id": "1",
                "company": "4 Rivers Electric Cooperative, Inc.",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "26",
                "company": "Alfalfa Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "42",
                "company": "Ark Valley Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "110",
                "company": "Bluestem Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "173",
                "company": "Brown Atchison Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "183",
                "company": "Butler Rural Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "194",
                "company": "Caney Valley Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "278",
                "company": "City of Altamont",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "292",
                "company": "City of Anthony",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "300",
                "company": "City of Arma",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "301",
                "company": "City of Ashland",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "306",
                "company": "City of Attica",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "309",
                "company": "City of Augusta",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "314",
                "company": "City of Axtell",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "318",
                "company": "City of Baldwin City",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "335",
                "company": "City of Belleville",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "338",
                "company": "City of Beloit",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "362",
                "company": "City of Blue Mound",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "381",
                "company": "City of Bronson",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "397",
                "company": "City of Burlingame",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "399",
                "company": "City of Burlington",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "428",
                "company": "City of Cawker City",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "432",
                "company": "City of Centralia",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "436",
                "company": "City of Chanute",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "437",
                "company": "City of Chapman",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "444",
                "company": "City of Chetopa",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "449",
                "company": "City of Cimarron",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "452",
                "company": "City of Clay Center",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "460",
                "company": "City of Coffeyville",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "462",
                "company": "City of Colby",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "514",
                "company": "City of Dighton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "551",
                "company": "City of Ellinwood",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "553",
                "company": "City of Elsmore",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "554",
                "company": "City of Elwood",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "557",
                "company": "City of Enterprise",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "561",
                "company": "City of Erie",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "567",
                "company": "City of Eudora",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "617",
                "company": "City of Fredonia",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "627",
                "company": "City of Galva",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "628",
                "company": "City of Garden City",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "629",
                "company": "City of Gardner",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "631",
                "company": "City of Garnett",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "646",
                "company": "City of Girard",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "648",
                "company": "City of Glasco",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "650",
                "company": "City of Glen Elder",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "656",
                "company": "City of Goodland",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "674",
                "company": "City of Greensburg",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "696",
                "company": "City of Haven",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "707",
                "company": "City of Herington",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "711",
                "company": "City of Herndon",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "719",
                "company": "City of Hill City",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "720",
                "company": "City of Hillsboro",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "725",
                "company": "City of Hoisington",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "729",
                "company": "City of Holton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "732",
                "company": "City of Holyrood",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "740",
                "company": "City of Horton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "746",
                "company": "City of Hugoton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "757",
                "company": "City of Iola",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "758",
                "company": "City of Isabel",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "759",
                "company": "City of Iuka",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "770",
                "company": "City of Jetmore",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "772",
                "company": "City of Johnson",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "788",
                "company": "City of Kingman",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "793",
                "company": "City of La Crosse",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "796",
                "company": "City of La Harpe",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "812",
                "company": "City of Lakin",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "821",
                "company": "City of Larned",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "848",
                "company": "City of Lincoln Center",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "851",
                "company": "City of Lindsborg",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "869",
                "company": "City of Lucas- (KS)",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "872",
                "company": "City of Luray",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "888",
                "company": "City of Mankato",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "899",
                "company": "City of Marion",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "916",
                "company": "City of McPherson",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "917",
                "company": "City of Meade",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "937",
                "company": "City of Minneapolis",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "948",
                "company": "City of Montezuma",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "954",
                "company": "City of Moran",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "957",
                "company": "City of Morrill",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "960",
                "company": "City of Moundridge",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "962",
                "company": "City of Mount Hope",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "970",
                "company": "City of Mulberry",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "971",
                "company": "City of Mulvane",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "985",
                "company": "City of Neodesha",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1021",
                "company": "City of Norton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1026",
                "company": "City of Oberlin",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1048",
                "company": "City of Osage City",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1049",
                "company": "City of Osawatomie",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1050",
                "company": "City of Osborne",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1053",
                "company": "City of Ottawa",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1058",
                "company": "City of Oxford",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1099",
                "company": "City of Pomona",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1106",
                "company": "City of Pratt",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1108",
                "company": "City of Prescott",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1122",
                "company": "City of Radium",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1145",
                "company": "City of Robinson",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1161",
                "company": "City of Russell",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1166",
                "company": "City of Sabetha",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1187",
                "company": "City of Savonburg",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1192",
                "company": "City of Scranton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1198",
                "company": "City of Seneca",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1207",
                "company": "City of Sharon Springs",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1256",
                "company": "City of Stafford",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1268",
                "company": "City of Sterling",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1247",
                "company": "City of St Francis",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1253",
                "company": "City of St Marys",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1270",
                "company": "City of Stockton",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1308",
                "company": "City of Toronto",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1316",
                "company": "City of Troy",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1326",
                "company": "City of Udall",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1336",
                "company": "City of Vermillion",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1351",
                "company": "City of Wamego",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1357",
                "company": "City of Washington",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1363",
                "company": "City of Waterville",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1364",
                "company": "City of Wathena",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1374",
                "company": "City of Wellington",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1404",
                "company": "City of Winfield",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1448",
                "company": "CMS Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1543",
                "company": "Doniphan Elec Coop Assn, Inc",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1546",
                "company": "DS&O Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1623",
                "company": "Flint Hills Rural Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1720",
                "company": "Heartland Rural Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1848",
                "company": "Lane-Scott Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1893",
                "company": "Lyon-Coffey Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "1992",
                "company": "Nemaha-Marshall ECA",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2012",
                "company": "Ninnescah RECA",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2137",
                "company": "Pioneer Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2163",
                "company": "Prairie Land Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2203",
                "company": "Radiant Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2240",
                "company": "Rolling Hills Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2280",
                "company": "Sedgwick County Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2366",
                "company": "Sumner-Cowley Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2606",
                "company": "Twin Valley Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2642",
                "company": "Victory Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2842",
                "company": "Western Cooperative Electric",
                "state": "KS",
                "priority": "0"
            }, {
                "id": "2970",
                "company": "Duke Energy Kentucky",
                "state": "KY",
                "priority": "1"
            }, {
                "id": "2889",
                "company": "Kentucky Power (AEP)",
                "state": "KY",
                "priority": "1"
            }, {
                "id": "2969",
                "company": "Louisville Gas & Electric Co",
                "state": "KY",
                "priority": "1"
            }, {
                "id": "2311",
                "company": "South Kentucky RECC",
                "state": "KY",
                "priority": "1"
            }, {
                "id": "62",
                "company": "Barbourville Utility Commission",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "94",
                "company": "Big Sandy Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "104",
                "company": "Blue Grass Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "321",
                "company": "City of Bardstown",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "322",
                "company": "City of Bardwell",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "339",
                "company": "City of Benham",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "344",
                "company": "City of Benton",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "346",
                "company": "City of Berea Municipal Utility",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "369",
                "company": "City of Bowling Green",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "581",
                "company": "City of Falmouth",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "608",
                "company": "City of Frankfort",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "609",
                "company": "City of Franklin",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "620",
                "company": "City of Fulton",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "649",
                "company": "City of Glasgow",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "714",
                "company": "City of Hickman",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "738",
                "company": "City of Hopkinsville",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "769",
                "company": "City of Jellico",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "910",
                "company": "City of Mayfield Plant Board",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "973",
                "company": "City of Murray",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1011",
                "company": "City of Nicholasville",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1033",
                "company": "City of Olive Hill",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1056",
                "company": "City of Owensboro",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1060",
                "company": "City of Paducah",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1066",
                "company": "City of Paris",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1112",
                "company": "City of Princeton",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1114",
                "company": "City of Providence",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1164",
                "company": "City of Russellville",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1334",
                "company": "City of Vanceburg",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1429",
                "company": "Clark Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1492",
                "company": "Corbin City Utilities Comm",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1513",
                "company": "Cumberland Valley Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1610",
                "company": "Farmers Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1621",
                "company": "Fleming-Mason Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1654",
                "company": "Gibson Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1672",
                "company": "Grayson Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1724",
                "company": "Henderson City Utility",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1728",
                "company": "Hickman-Fulton Counties RECC",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1768",
                "company": "Inter County Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1781",
                "company": "Jackson Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1782",
                "company": "Jackson Purchase Energy",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1812",
                "company": "Kenergy Corp",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1862",
                "company": "Licking Valley RECC",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1897",
                "company": "Madisonville Municipal Utilities",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "1920",
                "company": "Meade County RECC",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2022",
                "company": "Nolin Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2090",
                "company": "Owen Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2125",
                "company": "Pennyrile Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2260",
                "company": "Salt River Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2289",
                "company": "Shelby Energy Co-Op",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2385",
                "company": "Taylor County Rural ECC",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2817",
                "company": "Warren Rural Electric",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2839",
                "company": "West Kentucky Rural ECC",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2859",
                "company": "Williamstown Utility Comm",
                "state": "KY",
                "priority": "0"
            }, {
                "id": "2972",
                "company": "Cleco Power",
                "state": "LA",
                "priority": "1"
            }, {
                "id": "1537",
                "company": "Dixie Electric",
                "state": "LA",
                "priority": "1"
            }, {
                "id": "2903",
                "company": "Entergy Louisiana",
                "state": "LA",
                "priority": "1"
            }, {
                "id": "2907",
                "company": "Entergy New Orleans",
                "state": "LA",
                "priority": "1"
            }, {
                "id": "2891",
                "company": "Southwestern Electric Power Company (SWEPCO)",
                "state": "LA",
                "priority": "1"
            }, {
                "id": "46",
                "company": "Ashley Chicot Elec Coop, Inc",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "77",
                "company": "Beauregard Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "252",
                "company": "City of Abbeville",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "269",
                "company": "City of Alexandria",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "560",
                "company": "City of Erath",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "773",
                "company": "City of Jonesville",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "777",
                "company": "City of Kaplan",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "801",
                "company": "City of Lafayette",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "933",
                "company": "City of Minden",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "979",
                "company": "City of Natchitoches",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1094",
                "company": "City of Plaquemine",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1125",
                "company": "City of Rayne",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1165",
                "company": "City of Ruston",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1252",
                "company": "City of St Martinville",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1405",
                "company": "City of Winnfield",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1426",
                "company": "Claiborne Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1476",
                "company": "Concordia Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1788",
                "company": "Jefferson Davis Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1967",
                "company": "Morgan City",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2042",
                "company": "Northeast Louisiana Power",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2102",
                "company": "Panola-Harrison Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2149",
                "company": "Pointe Coupee Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2312",
                "company": "South Louisiana Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2336",
                "company": "Southwest Louisiana EMC",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2393",
                "company": "Terrebonne Parish",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2428",
                "company": "Town of Boyce",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2474",
                "company": "Town of Gueydan",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2561",
                "company": "Town of Vidalia",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2562",
                "company": "Town of Vinton",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2572",
                "company": "Town of Welsh",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "2823",
                "company": "Washington-St. Tammany Electric",
                "state": "LA",
                "priority": "0"
            }, {
                "id": "1076",
                "company": "City of Peabody",
                "state": "MA",
                "priority": "1"
            }, {
                "id": "1295",
                "company": "City of Taunton",
                "state": "MA",
                "priority": "1"
            }, {
                "id": "1595",
                "company": "Eversource (Previously NSTAR)",
                "state": "MA",
                "priority": "1"
            }, {
                "id": "2973",
                "company": "Massachusetts Electric Co",
                "state": "MA",
                "priority": "1"
            }, {
                "id": "2533",
                "company": "Town of Reading",
                "state": "MA",
                "priority": "1"
            }, {
                "id": "447",
                "company": "City of Chicopee",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "722",
                "company": "City of Hingham",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "731",
                "company": "City of Holyoke",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "896",
                "company": "City of Marblehead",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "1024",
                "company": "City of Norwood",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "1162",
                "company": "City of Russell",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "1387",
                "company": "City of Westfield",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "1751",
                "company": "Hull Municipal Light Plant",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "1982",
                "company": "National Grid",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2413",
                "company": "Town of Ashburnham",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2422",
                "company": "Town of Belmont",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2429",
                "company": "Town of Boylston",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2430",
                "company": "Town of Braintree",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2437",
                "company": "Town of Chester",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2441",
                "company": "Town of Concord",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2447",
                "company": "Town of Danvers",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2468",
                "company": "Town of Georgetown",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2471",
                "company": "Town of Groton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2472",
                "company": "Town of Groveland",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2480",
                "company": "Town of Holden",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2483",
                "company": "Town of Hudson",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2485",
                "company": "Town of Ipswich",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2495",
                "company": "Town of Littleton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2506",
                "company": "Town of Mansfield",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2507",
                "company": "Town of Marblehead",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2510",
                "company": "Town of Merrimac",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2511",
                "company": "Town of Middleborough",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2512",
                "company": "Town of Middleton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2518",
                "company": "Town of North Attleborough",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2524",
                "company": "Town of Paxton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2531",
                "company": "Town of Princeton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2537",
                "company": "Town of Rowley",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2543",
                "company": "Town of Shrewsbury",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2547",
                "company": "Town of South Hadley",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2554",
                "company": "Town of Sterling",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2558",
                "company": "Town of Templeton",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2564",
                "company": "Town of Wakefield",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2571",
                "company": "Town of Wellesley",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2573",
                "company": "Town of West Boylston",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2623",
                "company": "Unitil",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "2871",
                "company": "WMECO",
                "state": "MA",
                "priority": "0"
            }, {
                "id": "86",
                "company": "BG&E (Baltimore Gas & Electric)",
                "state": "MD",
                "priority": "1"
            }, {
                "id": "1531",
                "company": "Delmarva Power",
                "state": "MD",
                "priority": "1"
            }, {
                "id": "2901",
                "company": "Potomac Edison Company",
                "state": "MD",
                "priority": "1"
            }, {
                "id": "2932",
                "company": "Potomac Electric Power Co",
                "state": "MD",
                "priority": "1"
            }, {
                "id": "2327",
                "company": "Southern Maryland Electric (SMECO)",
                "state": "MD",
                "priority": "1"
            }, {
                "id": "3",
                "company": "A & N Electric",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "246",
                "company": "Choptank Electric",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "1480",
                "company": "Constellation (formerly PEPCO)",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "1571",
                "company": "Easton Utilities",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "1697",
                "company": "Hagerstown Light Department",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "2397",
                "company": "Thurmont Municipal Light Co",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "2424",
                "company": "Town of Berlin",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "2577",
                "company": "Town of Williamsport",
                "state": "MD",
                "priority": "0"
            }, {
                "id": "2974",
                "company": "Central Maine Power Co",
                "state": "ME",
                "priority": "1"
            }, {
                "id": "1570",
                "company": "Eastern Maine Electric",
                "state": "ME",
                "priority": "1"
            }, {
                "id": "1744",
                "company": "Houlton Water Company",
                "state": "ME",
                "priority": "1"
            }, {
                "id": "1813",
                "company": "Kennebunk Light & Power Dist",
                "state": "ME",
                "priority": "1"
            }, {
                "id": "2975",
                "company": "Versant Power",
                "state": "ME",
                "priority": "1"
            }, {
                "id": "1637",
                "company": "Fox Islands Electric",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "1814",
                "company": "Kennebunk Light & Power District",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "1910",
                "company": "Matinicus Plantation Elec Co",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "2502",
                "company": "Town of Madison",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "2624",
                "company": "Unitil",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "2635",
                "company": "Van Buren Light & Power Dist",
                "state": "ME",
                "priority": "0"
            }, {
                "id": "819",
                "company": "City of Lansing",
                "state": "MI",
                "priority": "1"
            }, {
                "id": "2979",
                "company": "Consumers Energy Co",
                "state": "MI",
                "priority": "1"
            }, {
                "id": "2977",
                "company": "DTE Electric Company",
                "state": "MI",
                "priority": "1"
            }, {
                "id": "1674",
                "company": "Great Lakes Energy",
                "state": "MI",
                "priority": "1"
            }, {
                "id": "2980",
                "company": "Indiana Michigan Power Co",
                "state": "MI",
                "priority": "1"
            }, {
                "id": "27",
                "company": "Alger-Delta Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "72",
                "company": "Bayfield Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "236",
                "company": "Cherryland Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "331",
                "company": "City of Bay City",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "439",
                "company": "City of Charlevoix",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "491",
                "company": "City of Croswell",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "492",
                "company": "City of Crystal Falls",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "521",
                "company": "City of Dowagiac",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "535",
                "company": "City of Eaton Rapids",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "562",
                "company": "City of Escanaba",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "647",
                "company": "City of Gladstone",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "661",
                "company": "City of Grand Haven",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "687",
                "company": "City of Harbor Springs",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "727",
                "company": "City of Holland",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "867",
                "company": "City of Lowell",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "901",
                "company": "City of Marquette",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "903",
                "company": "City of Marshall",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "982",
                "company": "City of Negaunee",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1013",
                "company": "City of Niles",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1022",
                "company": "City of Norway",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1084",
                "company": "City of Petoskey",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1104",
                "company": "City of Portland",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1196",
                "company": "City of Sebewaing",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1231",
                "company": "City of South Haven",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1267",
                "company": "City of Stephenson",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1251",
                "company": "City of St Louis",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1281",
                "company": "City of Sturgis",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1311",
                "company": "City of Traverse City",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1348",
                "company": "City of Wakefield",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1423",
                "company": "City of Zeeland",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1446",
                "company": "Cloverland Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1457",
                "company": "Coldwater Board of Public Utilities",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "1735",
                "company": "Hillsdale Board of Public Works",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2007",
                "company": "Newberry Water & Light Board",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2076",
                "company": "Ontonagon County R E A",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2166",
                "company": "Presque Isle Electric & Gas",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2396",
                "company": "Thumb Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2590",
                "company": "Tri-County Electric",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2652",
                "company": "Village of Baraga",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2674",
                "company": "Village of Chelsea",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2677",
                "company": "Village of Clinton",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2679",
                "company": "Village of Daggett",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2720",
                "company": "Village of L'Anse",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2754",
                "company": "Village of Paw Paw",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2790",
                "company": "Village of Union City",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2877",
                "company": "Wyandotte Municipal",
                "state": "MI",
                "priority": "0"
            }, {
                "id": "2982",
                "company": "ALLETE",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "1477",
                "company": "Connexus Energy",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "1516",
                "company": "Dakota Electric",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "2913",
                "company": "Northern States Power Co",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "2234",
                "company": "Rochester Public Utilities",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "2295",
                "company": "Sioux Valley SW Electric",
                "state": "MN",
                "priority": "1"
            }, {
                "id": "9",
                "company": "Adrian Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "12",
                "company": "Agralite Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "15",
                "company": "Aitkin Public Utilities Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "44",
                "company": "Arrowhead Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "56",
                "company": "Bagley Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "80",
                "company": "Beltrami Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "81",
                "company": "BENCO Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "103",
                "company": "Blue Earth Light & Water",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "162",
                "company": "Brainerd Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "174",
                "company": "Brown County Rural Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "256",
                "company": "City of Ada",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "270",
                "company": "City of Alexandria",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "274",
                "company": "City of Alpha",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "281",
                "company": "City of Alvarado",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "289",
                "company": "City of Anoka",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "298",
                "company": "City of Arlington",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "312",
                "company": "City of Austin",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "324",
                "company": "City of Barnesville",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "330",
                "company": "City of Baudette",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "342",
                "company": "City of Benson",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "352",
                "company": "City of Biwabik",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "359",
                "company": "City of Blooming Prairie",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "372",
                "company": "City of Breckenridge",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "376",
                "company": "City of Brewster",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "385",
                "company": "City of Brownton",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "391",
                "company": "City of Buffalo",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "393",
                "company": "City of Buhl",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "411",
                "company": "City of Caledonia",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "435",
                "company": "City of Ceylon",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "440",
                "company": "City of Chaska",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "512",
                "company": "City of Detroit Lakes",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "526",
                "company": "City of Dunnell",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "532",
                "company": "City of East Grand Forks",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "538",
                "company": "City of Eitzen",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "540",
                "company": "City of Elbow Lake",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "547",
                "company": "City of Elk River",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "555",
                "company": "City of Ely",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "574",
                "company": "City of Fairfax",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "605",
                "company": "City of Fosston",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "642",
                "company": "City of Gilbert",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "664",
                "company": "City of Grand Marais",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "666",
                "company": "City of Granite Falls",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "679",
                "company": "City of Grove City",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "683",
                "company": "City of Halstad",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "688",
                "company": "City of Harmony",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "706",
                "company": "City of Henning",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "761",
                "company": "City of Jackson",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "765",
                "company": "City of Janesville",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "778",
                "company": "City of Kasota",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "779",
                "company": "City of Kasson",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "803",
                "company": "City of Lake City",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "804",
                "company": "City of Lake Crystal",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "810",
                "company": "City of Lakefield",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "807",
                "company": "City of Lake Park",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "831",
                "company": "City of Le Sueur",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "874",
                "company": "City of Luverne",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "876",
                "company": "City of Mabel",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "880",
                "company": "City of Madelia",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "881",
                "company": "City of Madison",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "904",
                "company": "City of Marshall",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "952",
                "company": "City of Moorhead",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "953",
                "company": "City of Mora",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "964",
                "company": "City of Mountain Iron",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "965",
                "company": "City of Mountain Lake",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "978",
                "company": "City of Nashwauk",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1004",
                "company": "City of Newfolden",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1012",
                "company": "City of Nielsville",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1019",
                "company": "City of North St Paul",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1034",
                "company": "City of Olivia",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1046",
                "company": "City of Ortonville",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1055",
                "company": "City of Owatonna",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1083",
                "company": "City of Peterson",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1089",
                "company": "City of Pierz",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1123",
                "company": "City of Randall",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1155",
                "company": "City of Roseau",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1157",
                "company": "City of Round Lake",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1159",
                "company": "City of Rushford",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1160",
                "company": "City of Rushmore",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1170",
                "company": "City of Saint Peter",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1186",
                "company": "City of Sauk Centre",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1215",
                "company": "City of Shelly",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1239",
                "company": "City of Spring Grove",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1261",
                "company": "City of Staples",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1249",
                "company": "City of St James",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1300",
                "company": "City of Thief River Falls",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1324",
                "company": "City of Two Harbors",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1325",
                "company": "City of Tyler",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1343",
                "company": "City of Virginia",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1345",
                "company": "City of Wadena",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1353",
                "company": "City of Warroad",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1354",
                "company": "City of Waseca",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1375",
                "company": "City of Wells",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1384",
                "company": "City of Westbrook",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1403",
                "company": "City of Windom",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1409",
                "company": "City of Winthrop",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1415",
                "company": "City of Worthington",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1442",
                "company": "Clearwater-Polk Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1488",
                "company": "Cooperative Light & Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1508",
                "company": "Crow Wing Cooperative Power & Light Company",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1528",
                "company": "Delano Municipal Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1563",
                "company": "East Central Energy",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1599",
                "company": "Fairmont Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1657",
                "company": "Glencoe Light & Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1663",
                "company": "Goodhue County Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1670",
                "company": "Grand Rapids Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1714",
                "company": "Hawley Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1695",
                "company": "H-D Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1727",
                "company": "Hibbing Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1754",
                "company": "Hutchinson Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1775",
                "company": "Itasca-Mantrap Electrical",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1800",
                "company": "Kandiyohi Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1810",
                "company": "Keewatin Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1815",
                "company": "Kenyon Municipal Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1838",
                "company": "Lake Country Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1841",
                "company": "Lake Region Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1849",
                "company": "Lanesboro Public Utility Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1867",
                "company": "Litchfield Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1890",
                "company": "Lyon Electric Cooperative, Inc.",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1894",
                "company": "Lyon-Lincoln Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1917",
                "company": "McLeod Cooperative Power Association",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1924",
                "company": "Meeker Cooperative Light & Power Association",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1925",
                "company": "Melrose Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1948",
                "company": "Mille Lacs Energy",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1950",
                "company": "Minnesota Valley Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1949",
                "company": "Minn Valley Co-Op Light-Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "1964",
                "company": "Moose Lake Water & Light",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2001",
                "company": "New Prague Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2003",
                "company": "New Ulm Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2019",
                "company": "Nobles Cooperative Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2028",
                "company": "North Branch Water & Light Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2034",
                "company": "North Itasca Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2038",
                "company": "North Star Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2126",
                "company": "People's Cooperative Services",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2142",
                "company": "PKM Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2096",
                "company": "P K M Electric Coop, Inc",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2167",
                "company": "Preston Public Utilities Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2171",
                "company": "Princeton Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2172",
                "company": "Proctor Public Utilities Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2213",
                "company": "Red Lake Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2214",
                "company": "Red River Valley Coop Pwr Assn",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2215",
                "company": "Red River Valley Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2217",
                "company": "Redwood Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2218",
                "company": "Redwood Falls Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2223",
                "company": "Renville-Sibley Co-Op Power",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2244",
                "company": "Roseau Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2247",
                "company": "Runestone Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2285",
                "company": "Shakopee Public Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2297",
                "company": "Sleepy Eye Public Utility",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2307",
                "company": "South Central Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2350",
                "company": "Springfield Public Utils Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2348",
                "company": "Spring Valley Pub Utils Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2357",
                "company": "Stearns Cooperativeerative Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2358",
                "company": "Steele-Waseca Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2404",
                "company": "Todd-Wadena Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2582",
                "company": "Traverse Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2600",
                "company": "Truman Public Utilities Comm",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2858",
                "company": "Wild Rice Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2860",
                "company": "Willmar Municipal Utilities",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "2876",
                "company": "Wright-Hennepin Electric",
                "state": "MN",
                "priority": "0"
            }, {
                "id": "584",
                "company": "City of Farmington",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "1424",
                "company": "City Utilities of Springfield",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "1509",
                "company": "Cuivre River Electric",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "2986",
                "company": "Empire District Electric Co",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "2985",
                "company": "Evergy Metro",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "2984",
                "company": "Evergy Missouri West",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "2983",
                "company": "Union Electric Co",
                "state": "MO",
                "priority": "1"
            }, {
                "id": "49",
                "company": "Atchison-Holt Electric Coop",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "66",
                "company": "Barry Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "69",
                "company": "Barton County Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "99",
                "company": "Black River Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "117",
                "company": "Boone Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "189",
                "company": "Callaway Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "205",
                "company": "Carrollton Board of Public Wks",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "224",
                "company": "Central Missouri Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "240",
                "company": "Chillicothe Municipal Utilities",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "249",
                "company": "Citizens Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "264",
                "company": "City of Albany",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "313",
                "company": "City of Ava",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "349",
                "company": "City of Bethany",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "407",
                "company": "City of Butler",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "408",
                "company": "City of Cabool",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "413",
                "company": "City of California",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "417",
                "company": "City of Cameron",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "423",
                "company": "City of Carthage",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "433",
                "company": "City of Centralia",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "471",
                "company": "City of Columbia",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "489",
                "company": "City of Crane",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "493",
                "company": "City of Cuba",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "534",
                "company": "City of Easton",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "587",
                "company": "City of Fayette",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "615",
                "company": "City of Fredericktown",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "621",
                "company": "City of Fulton",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "624",
                "company": "City of Gallatin",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "644",
                "company": "City of Gilman City",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "686",
                "company": "City of Hannibal",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "691",
                "company": "City of Harrisonville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "708",
                "company": "City of Hermann",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "716",
                "company": "City of Higginsville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "741",
                "company": "City of Houston",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "748",
                "company": "City of Hunnewell",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "754",
                "company": "City of Independence",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "762",
                "company": "City of Jackson",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "775",
                "company": "City of Kahoka",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "781",
                "company": "City of Kennett",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "791",
                "company": "City of Kirkwood",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "815",
                "company": "City of Lamar",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "798",
                "company": "City of La Plata",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "833",
                "company": "City of Lebanon",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "846",
                "company": "City of Liberal",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "852",
                "company": "City of Linneus",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "877",
                "company": "City of Macon",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "884",
                "company": "City of Malden",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "891",
                "company": "City of Mansfield",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "897",
                "company": "City of Marceline",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "905",
                "company": "City of Marshall",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "918",
                "company": "City of Meadville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "926",
                "company": "City of Milan",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "935",
                "company": "City of Mindenmines",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "940",
                "company": "City of Monett",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "946",
                "company": "City of Monroe City",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "966",
                "company": "City of Mountain View",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "963",
                "company": "City of Mount Vernon",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1003",
                "company": "City of Newburg",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "994",
                "company": "City of New Madrid",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1015",
                "company": "City of Nixa",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1029",
                "company": "City of Odessa",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1052",
                "company": "City of Osceola",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1062",
                "company": "City of Palmyra",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1067",
                "company": "City of Paris",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1079",
                "company": "City of Perry",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1102",
                "company": "City of Poplar Bluff",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1133",
                "company": "City of Rich Hill",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1134",
                "company": "City of Richland",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1150",
                "company": "City of Rockport",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1153",
                "company": "City of Rolla",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1172",
                "company": "City of Salem",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1174",
                "company": "City of Salisbury",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1204",
                "company": "City of Seymour",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1210",
                "company": "City of Shelbina",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1221",
                "company": "City of Sikeston",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1226",
                "company": "City of Slater",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1257",
                "company": "City of Stanberry",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1266",
                "company": "City of Steelville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1250",
                "company": "City of St James",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1283",
                "company": "City of Sullivan",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1299",
                "company": "City of Thayer",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1331",
                "company": "City of Unionville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1335",
                "company": "City of Vandalia",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1368",
                "company": "City of Waynesville",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1380",
                "company": "City of West Plains",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1399",
                "company": "City of Willow Springs",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1406",
                "company": "City of Winona",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1449",
                "company": "Co-Mo Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1478",
                "company": "Consolidated Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1505",
                "company": "Crawford Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1592",
                "company": "Evergy",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1605",
                "company": "Farmers Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1652",
                "company": "Gascosage Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1686",
                "company": "Grundy Electric Coop, Inc",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1746",
                "company": "Howard Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1748",
                "company": "Howell-Oregon Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1769",
                "company": "Intercounty Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1833",
                "company": "Laclede Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1860",
                "company": "Lewis County RECA",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1872",
                "company": "Lockwood Water & Light Company",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1896",
                "company": "Macon Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1953",
                "company": "Missouri Rural Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2005",
                "company": "New-Mac Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2030",
                "company": "North Central MO Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2084",
                "company": "Osage Valley Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2093",
                "company": "Ozark Border Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2094",
                "company": "Ozark Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2122",
                "company": "Pemiscot-Dunklin Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2145",
                "company": "Platte-Clay Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2205",
                "company": "Ralls County Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2253",
                "company": "Sac-Osage Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2276",
                "company": "SE-MA-NO Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2281",
                "company": "SEMO Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2334",
                "company": "Southwest Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2395",
                "company": "Three Rivers Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2585",
                "company": "Trenton Municipal Utilities",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2591",
                "company": "Tri-County Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2619",
                "company": "United Electric Coop, Inc",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2833",
                "company": "Webster Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2836",
                "company": "West Central Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "2855",
                "company": "White River Valley Electric",
                "state": "MO",
                "priority": "0"
            }, {
                "id": "1451",
                "company": "Coast Electric",
                "state": "MS",
                "priority": "1"
            }, {
                "id": "2904",
                "company": "Entergy Mississippi",
                "state": "MS",
                "priority": "1"
            }, {
                "id": "2987",
                "company": "Mississippi Power",
                "state": "MS",
                "priority": "1"
            }, {
                "id": "2",
                "company": "4-County Electric Power Association",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "24",
                "company": "Alcorn County Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "196",
                "company": "Canton Municipal Utilities",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "215",
                "company": "Central Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "254",
                "company": "City of Aberdeen",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "284",
                "company": "City of Amory",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "466",
                "company": "City of Collins",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "474",
                "company": "City of Columbus",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "728",
                "company": "City of Holly Springs",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "792",
                "company": "City of Kosciusko",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "836",
                "company": "City of Leland",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "878",
                "company": "City of Macon",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "987",
                "company": "City of New Albany",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1032",
                "company": "City of Okolona",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1059",
                "company": "City of Oxford",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1085",
                "company": "City of Philadelphia",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1263",
                "company": "City of Starkville",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1321",
                "company": "City of Tupelo",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1361",
                "company": "City of Water Valley",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1382",
                "company": "City of West Point",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1432",
                "company": "Clarksdale Public Utilities",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1450",
                "company": "Coahoma Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1532",
                "company": "Delta Electric Power Association",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1538",
                "company": "Dixie Electric Power",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1566",
                "company": "East Mississippi Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1678",
                "company": "Greenwood Utilities",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1881",
                "company": "Louisville Electric System",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1899",
                "company": "Magnolia Electric Power Association",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1961",
                "company": "Monroe County Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1981",
                "company": "Natchez Trace Electric Power",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2041",
                "company": "Northcentral Mississippi EPA",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2032",
                "company": "North East Mississippi EPA",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2115",
                "company": "Pearl River Valley Electroc Power",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2152",
                "company": "Pontotoc Electric Power Association",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2165",
                "company": "Prentiss County Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2178",
                "company": "Public Service Commn of Yazoo",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2329",
                "company": "Southern Pine Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2337",
                "company": "Southwest Mississippi EPA",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2379",
                "company": "Tallahatchie Valley EPA",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2401",
                "company": "Tippah Electric Power Association",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2403",
                "company": "Tishomingo County EPA",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2407",
                "company": "Tombigbee Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2605",
                "company": "Twin County Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "2884",
                "company": "Yazoo Valley Electric",
                "state": "MS",
                "priority": "0"
            }, {
                "id": "1620",
                "company": "Flathead Electric",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "2895",
                "company": "Montana-Dakota Utilities Co",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "2930",
                "company": "NorthWestern Energy",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "2157",
                "company": "Powder River Energy",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "2629",
                "company": "USBIA-Mission Valley Power",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "2885",
                "company": "Yellowstone Valley Electric",
                "state": "MT",
                "priority": "1"
            }, {
                "id": "75",
                "company": "Beartooth Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "89",
                "company": "Big Flat Electric Coop Inc",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "91",
                "company": "Big Horn County Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "92",
                "company": "Big Horn Rural Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1317",
                "company": "City of Troy",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1615",
                "company": "Fergus Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1655",
                "company": "Glacier Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1660",
                "company": "Goldenwest Electric Coop, Inc",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1668",
                "company": "Grand Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1734",
                "company": "Hill County Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1864",
                "company": "Lincoln Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1886",
                "company": "Lower Yellowstone REA",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1903",
                "company": "Marias River Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1911",
                "company": "McCone Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1915",
                "company": "McKenzie Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "1933",
                "company": "Mid-Yellowstone Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2057",
                "company": "NorVal Electric Cooperative, Inc",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2104",
                "company": "Park Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2210",
                "company": "Ravalli County Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2291",
                "company": "Sheridan Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2318",
                "company": "Southeast Electric Coop, Inc",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2370",
                "company": "Sun River Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2408",
                "company": "Tongue River Electric",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "2644",
                "company": "Vigilante Electric Coop, Inc",
                "state": "MT",
                "priority": "0"
            }, {
                "id": "176",
                "company": "Brunswick Electric",
                "state": "NC",
                "priority": "1"
            }, {
                "id": "1552",
                "company": "Duke Energy Carolinas",
                "state": "NC",
                "priority": "1"
            }, {
                "id": "1555",
                "company": "Duke Energy Progress",
                "state": "NC",
                "priority": "1"
            }, {
                "id": "2981",
                "company": "United Energy Inc",
                "state": "NC",
                "priority": "1"
            }, {
                "id": "2924",
                "company": "Virginia Electric & Power Co",
                "state": "NC",
                "priority": "1"
            }, {
                "id": "22",
                "company": "Albemarle Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "105",
                "company": "Blue Ridge Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "171",
                "company": "Broad River Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "197",
                "company": "Cape Hatteras Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "206",
                "company": "Carteret-Craven Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "216",
                "company": "Central Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "265",
                "company": "City of Albemarle",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "443",
                "company": "City of Cherryville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "479",
                "company": "City of Concord",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "544",
                "company": "City of Elizabeth City",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "634",
                "company": "City of Gastonia",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "712",
                "company": "City of Hertford",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "718",
                "company": "City of Highlands",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "789",
                "company": "City of Kings Mountain",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "790",
                "company": "City of Kinston",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "827",
                "company": "City of Laurinburg",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "841",
                "company": "City of Lexington",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "849",
                "company": "City of Lincolnton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "871",
                "company": "City of Lumberton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "944",
                "company": "City of Monroe",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "956",
                "company": "City of Morganton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "988",
                "company": "City of New Bern",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1008",
                "company": "City of Newton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1143",
                "company": "City of Robersonville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1152",
                "company": "City of Rocky Mount",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1212",
                "company": "City of Shelby",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1234",
                "company": "City of Southport",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1265",
                "company": "City of Statesville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1358",
                "company": "City of Washington",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1400",
                "company": "City of Wilson",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1408",
                "company": "City of Winterville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1475",
                "company": "Concord Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1542",
                "company": "Dominion Energy",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1573",
                "company": "Edgecombe-Martin County EMC",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1588",
                "company": "Energy United",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1612",
                "company": "Fayetteville Public Works",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1636",
                "company": "Four County Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1642",
                "company": "French Broad Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1676",
                "company": "Greenville Utilities",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1698",
                "company": "Halifax Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1730",
                "company": "High Point",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1797",
                "company": "Jones-Onslow Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1887",
                "company": "Lumbee River Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1922",
                "company": "Mecklenburg Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "1971",
                "company": "Mountain Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2002",
                "company": "New River Light & Power Co",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2118",
                "company": "Pee Dee Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2134",
                "company": "Piedmont Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2139",
                "company": "Pitt & Greene Elec Member Corp",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2140",
                "company": "Pitt & Greene Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2207",
                "company": "Randolph Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2232",
                "company": "Roanoke Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2252",
                "company": "Rutherford Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2314",
                "company": "South River Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2372",
                "company": "Surry-Yadkin Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2398",
                "company": "Tideland Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2411",
                "company": "Town of Apex",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2416",
                "company": "Town of Ayden",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2421",
                "company": "Town of Belhaven",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2423",
                "company": "Town of Benson",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2425",
                "company": "Town of Black Creek",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2427",
                "company": "Town of Bostic",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2439",
                "company": "Town of Clayton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2442",
                "company": "Town of Cornelius",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2446",
                "company": "Town of Dallas",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2448",
                "company": "Town of Drexel",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2451",
                "company": "Town of Edenton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2453",
                "company": "Town of Enfield",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2457",
                "company": "Town of Farmville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2460",
                "company": "Town of Forest City",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2463",
                "company": "Town of Fountain",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2466",
                "company": "Town of Fremont",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2470",
                "company": "Town of Granite Falls",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2475",
                "company": "Town of Hamilton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2478",
                "company": "Town of High Point",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2479",
                "company": "Town of Hobgood",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2482",
                "company": "Town of Hookerton",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2484",
                "company": "Town of Huntersville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2489",
                "company": "Town of La Grange",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2491",
                "company": "Town of Landis",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2497",
                "company": "Town of Louisburg",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2498",
                "company": "Town of Lucama",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2501",
                "company": "Town of MacClesfield",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2503",
                "company": "Town of Maiden",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2516",
                "company": "Town of Murphy",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2519",
                "company": "Town of Oak City",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2527",
                "company": "Town of Pikeville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2528",
                "company": "Town of Pineville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2529",
                "company": "Town of Pineville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2534",
                "company": "Town of Red Springs",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2540",
                "company": "Town of Scotland Neck",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2541",
                "company": "Town of Selma",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2542",
                "company": "Town of Sharpsburg",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2544",
                "company": "Town of Smithfield",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2552",
                "company": "Town of Stantonsburg",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2557",
                "company": "Town of Tarboro",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2563",
                "company": "Town of Wake Forest",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2568",
                "company": "Town of Walstonburg",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2570",
                "company": "Town of Waynesville",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2579",
                "company": "Town of Windsor",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2586",
                "company": "Tri City Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2613",
                "company": "Union Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2620",
                "company": "United Energy",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2812",
                "company": "Wake Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2811",
                "company": "Wake Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2886",
                "company": "York Electric",
                "state": "NC",
                "priority": "0"
            }, {
                "id": "2896",
                "company": "Montana-Dakota Utilities Co",
                "state": "ND",
                "priority": "1"
            }, {
                "id": "2976",
                "company": "Nodak Electric Co-Op Inc",
                "state": "ND",
                "priority": "1"
            }, {
                "id": "2911",
                "company": "Northern States Power Co",
                "state": "ND",
                "priority": "1"
            }, {
                "id": "2978",
                "company": "Otter Tail Power Co",
                "state": "ND",
                "priority": "1"
            }, {
                "id": "179",
                "company": "BurkeDivide Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "198",
                "company": "Capital Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "210",
                "company": "Cavalier Rural Elec Coop, Inc",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "427",
                "company": "City of Cavalier",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "659",
                "company": "City of Grafton",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "721",
                "company": "City of Hillsboro",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "737",
                "company": "City of Hope",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "813",
                "company": "City of Lakota",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "879",
                "company": "City of Maddock",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1020",
                "company": "City of Northwood",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1069",
                "company": "City of Park River",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1141",
                "company": "City of Riverdale",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1206",
                "company": "City of Sharon",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1260",
                "company": "City of Stanton",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1333",
                "company": "City of Valley City",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1518",
                "company": "Dakota Valley Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1661",
                "company": "Goldenwest Electric Coop, Inc",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1811",
                "company": "KEM Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1916",
                "company": "McLean Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1970",
                "company": "MorGranSou Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "1974",
                "company": "MountrailWilliams Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2021",
                "company": "Nodak Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2049",
                "company": "Northern Plains Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2246",
                "company": "Roughrider Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2292",
                "company": "Sheridan Electric Coop, Inc",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2299",
                "company": "Slope Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2583",
                "company": "Traverse Electric Coop, Inc",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "2638",
                "company": "Verendrye Electric",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "208",
                "company": "x",
                "state": "ND",
                "priority": "0"
            }, {
                "id": "662",
                "company": "City of Grand Island",
                "state": "NE",
                "priority": "1"
            }, {
                "id": "1865",
                "company": "Lincoln Electric System",
                "state": "NE",
                "priority": "1"
            }, {
                "id": "1990",
                "company": "Nebraska Public Power District",
                "state": "NE",
                "priority": "1"
            }, {
                "id": "2025",
                "company": "Norris Public Power District",
                "state": "NE",
                "priority": "1"
            }, {
                "id": "2074",
                "company": "Omaha Public Power District",
                "state": "NE",
                "priority": "1"
            }, {
                "id": "54",
                "company": "Auburn Board of Public Works",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "180",
                "company": "Burt County Public Power",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "182",
                "company": "Butler Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "213",
                "company": "CedarKnox Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "237",
                "company": "CherryTodd Electric",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "241",
                "company": "Chimney Rock Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "273",
                "company": "City of Alliance",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "290",
                "company": "City of Ansley",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "294",
                "company": "City of Arapahoe",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "329",
                "company": "City of Battle Creek",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "332",
                "company": "City of Bayard",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "333",
                "company": "City of Beatrice",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "334",
                "company": "City of Beaver City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "340",
                "company": "City of Benkelman",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "361",
                "company": "City of Blue Hill",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "378",
                "company": "City of Bridgeport Utilities",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "380",
                "company": "City of Broken Bow",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "404",
                "company": "City of Burwell",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "415",
                "company": "City of Cambridge",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "431",
                "company": "City of Central City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "438",
                "company": "City of Chappell",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "490",
                "company": "City of Crete",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "497",
                "company": "City of Curtis",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "503",
                "company": "City of David City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "511",
                "company": "City of Deshler",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "556",
                "company": "City of Emerson",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "573",
                "company": "City of Fairbury",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "580",
                "company": "City of Falls City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "611",
                "company": "City of Franklin",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "618",
                "company": "City of Fremont",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "619",
                "company": "City of Friend",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "640",
                "company": "City of Gering",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "645",
                "company": "City of Giltner",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "657",
                "company": "City of Gothenburg",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "667",
                "company": "City of Grant",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "695",
                "company": "City of Hastings",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "701",
                "company": "City of Hebron",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "700",
                "company": "City of Hebron",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "715",
                "company": "City of Hickman",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "726",
                "company": "City of Holdrege",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "744",
                "company": "City of Hubbell",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "752",
                "company": "City of Imperial",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "755",
                "company": "City of Indianola",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "783",
                "company": "City of Kimball",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "784",
                "company": "City of Kimball",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "824",
                "company": "City of Laurel",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "842",
                "company": "City of Lexington",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "858",
                "company": "City of Lodgepole",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "875",
                "company": "City of Lyons",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "882",
                "company": "City of Madison",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "934",
                "company": "City of Minden",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "939",
                "company": "City of Mitchell",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "980",
                "company": "City of Nebraska City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "983",
                "company": "City of Neligh",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "984",
                "company": "City of Nelson",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1018",
                "company": "City of North Platte",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1042",
                "company": "City of Ord",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1078",
                "company": "City of Pender",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1087",
                "company": "City of Pierce",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1124",
                "company": "City of Randolph",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1128",
                "company": "City of Red Cloud",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1185",
                "company": "City of Sargent",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1189",
                "company": "City of Schuyler",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1193",
                "company": "City of Scribner",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1203",
                "company": "City of Seward",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1220",
                "company": "City of Sidney",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1229",
                "company": "City of Snyder",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1233",
                "company": "City of South Sioux City",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1237",
                "company": "City of Spencer",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1255",
                "company": "City of St Paul",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1274",
                "company": "City of Stratton",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1276",
                "company": "City of Stromsburg",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1279",
                "company": "City of Stuart",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1286",
                "company": "City of Superior",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1287",
                "company": "City of Sutton",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1291",
                "company": "City of Syracuse",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1296",
                "company": "City of Tecumseh",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1313",
                "company": "City of Trenton",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1332",
                "company": "City of Valentine",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1347",
                "company": "City of Wahoo",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1349",
                "company": "City of Wakefield",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1367",
                "company": "City of Wayne",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1383",
                "company": "City of West Point",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1395",
                "company": "City of Wilber",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1410",
                "company": "City of Wisner",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1411",
                "company": "City of Wood River",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1418",
                "company": "City of Wymore",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1495",
                "company": "Cornhusker Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1501",
                "company": "Cozad Board of Public Works",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1514",
                "company": "Cuming County Public Power",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1515",
                "company": "Custer Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1523",
                "company": "Dawson Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1584",
                "company": "Elkhorn Rural Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1747",
                "company": "Howard Greeley Rural Power",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1808",
                "company": "KBR Rural Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1834",
                "company": "LaCreek Electric",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1882",
                "company": "Loup River Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1883",
                "company": "Loup Valleys RPPD",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1912",
                "company": "McCook Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "1943",
                "company": "Midwest Electric",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2013",
                "company": "Niobrara Electric Assn, Inc",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2016",
                "company": "Niobrara Valley Electric",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2015",
                "company": "Niobrara Valley El Member Corp",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2031",
                "company": "North Central Public Power",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2044",
                "company": "Northeast Power",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2054",
                "company": "Northwest Rural Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2101",
                "company": "Panhandle Rural Electric",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2128",
                "company": "Perennial Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2150",
                "company": "Polk County Rural Pub Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2243",
                "company": "Roosevelt Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2310",
                "company": "South Central Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2330",
                "company": "Southern Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2338",
                "company": "Southwest Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2356",
                "company": "Stanton County Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2607",
                "company": "Twin Valleys Public Power District",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2650",
                "company": "Village of Arnold",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2653",
                "company": "Village of Bartley",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2664",
                "company": "Village of Bradshaw",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2665",
                "company": "Village of Brainard",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2668",
                "company": "Village of Callaway",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2669",
                "company": "Village of Campbell",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2675",
                "company": "Village of Chester",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2680",
                "company": "Village of Davenport",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2682",
                "company": "Village of Decatur",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2681",
                "company": "Village of De Witt",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2687",
                "company": "Village of Endicott",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2690",
                "company": "Village of Fairmont",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2704",
                "company": "Village of Greenwood",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2709",
                "company": "Village of Hampton",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2712",
                "company": "Village of Hemingford",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2713",
                "company": "Village of Hildreth",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2727",
                "company": "Village of Lyman",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2739",
                "company": "Village of Morrill",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2742",
                "company": "Village of Mullen",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2752",
                "company": "Village of Oxford",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2760",
                "company": "Village of Polk",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2761",
                "company": "Village of Prague",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2765",
                "company": "Village of Reynolds",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2773",
                "company": "Village of Shickley",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2778",
                "company": "Village of Spalding",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2785",
                "company": "Village of Talmage",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2793",
                "company": "Village of Walthill",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2796",
                "company": "Village of Wauneta",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2802",
                "company": "Village of Wilcox",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2804",
                "company": "Village of Winside",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2848",
                "company": "Wheat Belt Public Power Dist",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2878",
                "company": "Wyrulec Company",
                "state": "NE",
                "priority": "0"
            }, {
                "id": "2971",
                "company": "Eversource",
                "state": "NH",
                "priority": "1"
            }, {
                "id": "2967",
                "company": "Liberty Utilities (Granite State Electric)",
                "state": "NH",
                "priority": "1"
            }, {
                "id": "1997",
                "company": "New Hampshire Electric",
                "state": "NH",
                "priority": "1"
            }, {
                "id": "2581",
                "company": "Town of Wolfeboro",
                "state": "NH",
                "priority": "1"
            }, {
                "id": "2625",
                "company": "Unitil",
                "state": "NH",
                "priority": "1"
            }, {
                "id": "1998",
                "company": "New Hampton Village Precinct",
                "state": "NH",
                "priority": "0"
            }, {
                "id": "2164",
                "company": "Precinct of Woodsville",
                "state": "NH",
                "priority": "0"
            }, {
                "id": "2414",
                "company": "Town of Ashland",
                "state": "NH",
                "priority": "0"
            }, {
                "id": "2496",
                "company": "Town of Littleton",
                "state": "NH",
                "priority": "0"
            }, {
                "id": "1341",
                "company": "City of Vineland",
                "state": "NJ",
                "priority": "1"
            }, {
                "id": "1792",
                "company": "Jersey Central Power & Light CO (JCP&L)",
                "state": "NJ",
                "priority": "1"
            }, {
                "id": "2966",
                "company": "Public Service Electric & Gas Co",
                "state": "NJ",
                "priority": "1"
            }, {
                "id": "2965",
                "company": "Rockland Electric Co",
                "state": "NJ",
                "priority": "1"
            }, {
                "id": "51",
                "company": "Atlantic City Electric (ACE)",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "121",
                "company": "Borough of Butler",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "134",
                "company": "Borough of Lavallette",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "137",
                "company": "Borough of Madison",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "140",
                "company": "Borough of Milltown",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "143",
                "company": "Borough of Park Ridge",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "144",
                "company": "Borough of Pemberton",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "151",
                "company": "Borough of South River",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "2077",
                "company": "Orange and Rockland\u00a0(ConEdison)",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "2176",
                "company": "PSE&G",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "2277",
                "company": "Seaside Heights Municipal Utility",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "2373",
                "company": "Sussex Rural Electric",
                "state": "NJ",
                "priority": "0"
            }, {
                "id": "585",
                "company": "City of Farmington",
                "state": "NM",
                "priority": "1"
            }, {
                "id": "2961",
                "company": "El Paso Electric Co",
                "state": "NM",
                "priority": "1"
            }, {
                "id": "1791",
                "company": "Jemez Mountains Electric",
                "state": "NM",
                "priority": "1"
            }, {
                "id": "2963",
                "company": "Public Service Co",
                "state": "NM",
                "priority": "1"
            }, {
                "id": "2962",
                "company": "Southwestern Public Service Co",
                "state": "NM",
                "priority": "1"
            }, {
                "id": "225",
                "company": "Central New Mexico Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "228",
                "company": "Central Valley Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "315",
                "company": "City of Aztec",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "626",
                "company": "City of Gallup",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1319",
                "company": "City of Truth or Consequences",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1469",
                "company": "Columbus Electric Coop, Inc",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1484",
                "company": "Continental Divide Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1558",
                "company": "Duncan Valley Elec Coop, Inc",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1606",
                "company": "Farmers Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1822",
                "company": "Kit Carson Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1855",
                "company": "Lea County Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1877",
                "company": "Los Alamos County",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "1965",
                "company": "MoraSan Miguel Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2050",
                "company": "Northern Rio Arriba E Coop Inc",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2086",
                "company": "Otero County Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2209",
                "company": "Raton Public Service Company",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2228",
                "company": "Rio Grande Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2241",
                "company": "Roosevelt County Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2293",
                "company": "Sierra Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2301",
                "company": "Socorro Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2349",
                "company": "Springer Electric",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "2551",
                "company": "Town of Springer",
                "state": "NM",
                "priority": "0"
            }, {
                "id": "367",
                "company": "City of Boulder City",
                "state": "NV",
                "priority": "1"
            }, {
                "id": "2959",
                "company": "NV Energy",
                "state": "NV",
                "priority": "1"
            }, {
                "id": "2089",
                "company": "Overton Power District No 5",
                "state": "NV",
                "priority": "1"
            }, {
                "id": "19",
                "company": "Alamo Power District No 3",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "579",
                "company": "City of Fallon",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "1704",
                "company": "Harney Electric",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "1705",
                "company": "Harney Electric Coop, Inc",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "1975",
                "company": "Mt Wheeler Power",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "2148",
                "company": "PlumasSierra Rural Elec Coop",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "2834",
                "company": "Wells Rural Electric",
                "state": "NV",
                "priority": "0"
            }, {
                "id": "2958",
                "company": "Consolidated Edison Co",
                "state": "NY",
                "priority": "1"
            }, {
                "id": "1875",
                "company": "Long Island Power Authority",
                "state": "NY",
                "priority": "1"
            }, {
                "id": "2004",
                "company": "New York State Electric & Gas (NYSEG)",
                "state": "NY",
                "priority": "1"
            }, {
                "id": "2957",
                "company": "Niagara Mohawk Power Corporation",
                "state": "NY",
                "priority": "1"
            }, {
                "id": "2955",
                "company": "Rochester Gas & Electric",
                "state": "NY",
                "priority": "1"
            }, {
                "id": "71",
                "company": "Bath Electric Gas & Water",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "222",
                "company": "Central Hudson Gas & Electric Corp.",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1095",
                "company": "City of Plattsburgh",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1171",
                "company": "City of Salamanca",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1216",
                "company": "City of Sherrill",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1473",
                "company": "Con Edison",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1529",
                "company": "Delaware County Elec Coop Inc",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1783",
                "company": "Jamestown Board of Public Utilities",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1840",
                "company": "Lake Placid Village",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1958",
                "company": "Mohawk Municipal Comm",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "1983",
                "company": "National Grid",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2036",
                "company": "North Shore Towers Apts Inc",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2078",
                "company": "Orange and Rockland Utilities",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2087",
                "company": "Otsego Electric Coop, Inc",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2177",
                "company": "PSE&G (formerly LIPA)",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2360",
                "company": "Steuben Rural Elec Coop, Inc",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2361",
                "company": "Steuben Rural Electric",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2508",
                "company": "Town of Massena",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2645",
                "company": "Village of Akron",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2646",
                "company": "Village of Andover",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2647",
                "company": "Village of Angelica",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2648",
                "company": "Village of Arcade",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2657",
                "company": "Village of Bergen",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2662",
                "company": "Village of Boonville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2672",
                "company": "Village of Castile",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2676",
                "company": "Village of Churchville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2688",
                "company": "Village of Endicott",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2691",
                "company": "Village of Fairport",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2692",
                "company": "Village of Frankfort",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2694",
                "company": "Village of Freeport",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2700",
                "company": "Village of Greene",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2699",
                "company": "Village of Green Island",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2701",
                "company": "Village of Greenport",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2706",
                "company": "Village of Groton",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2708",
                "company": "Village of Hamilton",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2714",
                "company": "Village of Holley",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2716",
                "company": "Village of Ilion",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2723",
                "company": "Village of Little Valley",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2729",
                "company": "Village of Marathon",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2731",
                "company": "Village of Mayville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2756",
                "company": "Village of Penn Yan",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2757",
                "company": "Village of Philadelphia",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2766",
                "company": "Village of Richmondville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2769",
                "company": "Village of Rockville Centre",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2770",
                "company": "Village of Rouses Point",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2772",
                "company": "Village of Sherburne",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2775",
                "company": "Village of Silver Springs",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2776",
                "company": "Village of Skaneateles",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2777",
                "company": "Village of Solvay",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2779",
                "company": "Village of Spencerport",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2780",
                "company": "Village of Springville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2786",
                "company": "Village of Theresa",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2789",
                "company": "Village of Tupper Lake",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2794",
                "company": "Village of Watkins Glen",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2799",
                "company": "Village of Wellsville",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "2800",
                "company": "Village of Westfield",
                "state": "NY",
                "priority": "0"
            }, {
                "id": "520",
                "company": "City of Dover",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "2949",
                "company": "Cleveland Electric Illum Co",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "2951",
                "company": "Dayton Power & Light Co",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "2952",
                "company": "Duke Energy Ohio",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "2954",
                "company": "Ohio Edison",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "2953",
                "company": "Ohio Power Co",
                "state": "OH",
                "priority": "1"
            }, {
                "id": "7",
                "company": "Adams Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "10",
                "company": "AEP Ohio",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "177",
                "company": "Buckeye Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "184",
                "company": "Butler Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "203",
                "company": "Carroll Electric Cooperative",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "283",
                "company": "City of Amherst",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "296",
                "company": "City of Arcanum",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "370",
                "company": "City of Bowling Green",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "387",
                "company": "City of Bryan",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "429",
                "company": "City of Celina",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "453",
                "company": "City of Cleveland",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "473",
                "company": "City of Columbiana",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "475",
                "company": "City of Columbus",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "499",
                "company": "City of Custar",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "500",
                "company": "City of Cuyahoga Falls",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "623",
                "company": "City of Galion",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "684",
                "company": "City of Hamilton",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "743",
                "company": "City of Hubbard",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "745",
                "company": "City of Hudson",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "763",
                "company": "City of Jackson",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "834",
                "company": "City of Lebanon",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "922",
                "company": "City of Mendon",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "977",
                "company": "City of Napoleon",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1010",
                "company": "City of Newton Falls",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1014",
                "company": "City of Niles",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1027",
                "company": "City of Oberlin",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1045",
                "company": "City of Orrville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1061",
                "company": "City of Painesville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1092",
                "company": "City of Piqua",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1213",
                "company": "City of Shelby",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1246",
                "company": "City of St Clairsville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1254",
                "company": "City of St Marys",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1305",
                "company": "City of Tipp City",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1346",
                "company": "City of Wadsworth",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1352",
                "company": "City of Wapakoneta",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1386",
                "company": "City of Westerville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1413",
                "company": "City of Woodsfield",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1447",
                "company": "Clyde Light & Power",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1479",
                "company": "Consolidated Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1520",
                "company": "Darke Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1551",
                "company": "Duke",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1617",
                "company": "Firelands Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1643",
                "company": "Frontier Power Company",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1688",
                "company": "GuernseyMuskingum Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1700",
                "company": "HancockWood Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1737",
                "company": "HolmesWayne Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1861",
                "company": "Licking Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1874",
                "company": "Logan County Power & Light",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1876",
                "company": "LorainMedina REC",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1939",
                "company": "MidOhio Energy",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "1944",
                "company": "Midwest Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2029",
                "company": "North Central Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2040",
                "company": "North Western Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2091",
                "company": "Owen Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2092",
                "company": "Owens",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2138",
                "company": "Pioneer Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2173",
                "company": "Prospect Corporation",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2284",
                "company": "Seville Board of Public Affairs",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2309",
                "company": "South Central Power Company",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2316",
                "company": "South Vienna Corporation",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2594",
                "company": "Tricounty Rural Elec Coop, Inc",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2614",
                "company": "Union Rural Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2649",
                "company": "Village of Arcadia",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2654",
                "company": "Village of Beach City",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2659",
                "company": "Village of Bethel",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2661",
                "company": "Village of Bloomdale",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2663",
                "company": "Village of Bradner",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2666",
                "company": "Village of Brewster",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2670",
                "company": "Village of Carey",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2678",
                "company": "Village of Cygnet",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2683",
                "company": "Village of Deshler",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2684",
                "company": "Village of Edgerton",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2685",
                "company": "Village of Eldorado",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2686",
                "company": "Village of Elmore",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2695",
                "company": "Village of Genoa",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2696",
                "company": "Village of Georgetown",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2697",
                "company": "Village of Glouster",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2698",
                "company": "Village of Grafton",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2703",
                "company": "Village of Greenwich",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2707",
                "company": "Village of Hamersville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2710",
                "company": "Village of Haskins",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2717",
                "company": "Village of Jackson Center",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2722",
                "company": "Village of Lakeview",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2724",
                "company": "Village of Lodi",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2725",
                "company": "Village of Lucas",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2730",
                "company": "Village of Marshallville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2734",
                "company": "Village of Milan",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2735",
                "company": "Village of Minster",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2736",
                "company": "Village of Minster",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2737",
                "company": "Village of Monroeville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2738",
                "company": "Village of Montpelier",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2744",
                "company": "Village of New Bremen",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2746",
                "company": "Village of New Knoxville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2748",
                "company": "Village of Oak Harbor",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2749",
                "company": "Village of Obetz",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2750",
                "company": "Village of Ohio City",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2755",
                "company": "Village of Pemberville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2758",
                "company": "Village of Pioneer",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2759",
                "company": "Village of Plymouth",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2764",
                "company": "Village of Republic",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2767",
                "company": "Village of Ripley",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2774",
                "company": "Village of Shiloh",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2784",
                "company": "Village of Sycamore",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2787",
                "company": "Village of Tontogany",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2791",
                "company": "Village of Versailles",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2797",
                "company": "Village of Waynesfield",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2798",
                "company": "Village of Wellington",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2801",
                "company": "Village of Wharton",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2805",
                "company": "Village of Woodville",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2806",
                "company": "Village of Yellow Springs",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "2820",
                "company": "Washington Electric",
                "state": "OH",
                "priority": "0"
            }, {
                "id": "536",
                "company": "City of Edmond",
                "state": "OK",
                "priority": "1"
            }, {
                "id": "2043",
                "company": "Northeast Oklahoma Electric",
                "state": "OK",
                "priority": "1"
            }, {
                "id": "2946",
                "company": "Oklahoma Electric Coop",
                "state": "OK",
                "priority": "1"
            }, {
                "id": "2890",
                "company": "Public Service Company of Oklahoma",
                "state": "OK",
                "priority": "1"
            }, {
                "id": "2320",
                "company": "Southeastern Electric",
                "state": "OK",
                "priority": "1"
            }, {
                "id": "33",
                "company": "Anadarko Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "191",
                "company": "Canadian Valley Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "226",
                "company": "Central Rural Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "244",
                "company": "Choctaw Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "248",
                "company": "Cimarron Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "280",
                "company": "City of Altus",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "279",
                "company": "City of Altus",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "354",
                "company": "City of Blackwell",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "400",
                "company": "City of Burlington",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "450",
                "company": "City of Claremore",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "467",
                "company": "City of Collinsville",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "477",
                "company": "City of Comanche",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "498",
                "company": "City of Cushing",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "524",
                "company": "City of Duncan",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "525",
                "company": "City of Duncan",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "541",
                "company": "City of Eldorado",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "577",
                "company": "City of Fairview",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "612",
                "company": "City of Frederick",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "635",
                "company": "City of Geary",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "665",
                "company": "City of Granite",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "734",
                "company": "City of Hominy",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "787",
                "company": "City of Kingfisher",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "844",
                "company": "City of Lexington",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "850",
                "company": "City of Lindsay",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "886",
                "company": "City of Mangum",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "887",
                "company": "City of Manitou",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "900",
                "company": "City of Marlow",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "925",
                "company": "City of Miami",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "951",
                "company": "City of Mooreland",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "990",
                "company": "City of New Cordell",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1005",
                "company": "City of Newkirk",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1035",
                "company": "City of Olustee",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1044",
                "company": "City of Orlando",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1074",
                "company": "City of Pawhuska",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1075",
                "company": "City of Pawnee",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1080",
                "company": "City of Perry",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1100",
                "company": "City of Ponca City",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1101",
                "company": "City of Pond Creek",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1116",
                "company": "City of Pryor",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1115",
                "company": "City of Pryor",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1118",
                "company": "City of Purcell",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1175",
                "company": "City of Sallisaw",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1225",
                "company": "City of Skiatook",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1269",
                "company": "City of Stilwell",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1277",
                "company": "City of Stroud",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1307",
                "company": "City of Tonkawa",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1365",
                "company": "City of Watonga",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1370",
                "company": "City of Waynoka",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1389",
                "company": "City of Wetumka",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1419",
                "company": "City of Wynnewood",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1420",
                "company": "City of Yale",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1487",
                "company": "Cookson Hills Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1498",
                "company": "Cotton Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1564",
                "company": "East Central Oklahoma Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1662",
                "company": "Goltry Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1702",
                "company": "Harmon Electric Assn Inc",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1763",
                "company": "Indian Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1805",
                "company": "Kay Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1819",
                "company": "Kiamichi Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "1842",
                "company": "Lake Region Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2053",
                "company": "Northfork Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2055",
                "company": "Northwestern Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2071",
                "company": "Okeene Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "3004",
                "company": "Oklahoma Gas & Electric (O.G.& E.)",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2127",
                "company": "People's Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2161",
                "company": "Prague Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2216",
                "company": "Red River Valley Rural Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2225",
                "company": "Rich Mountain Elec Coop, Inc",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2249",
                "company": "Rural Electric Cooperative",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2339",
                "company": "Southwest Rural Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2362",
                "company": "Stillwater Utilities Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2378",
                "company": "Tahlequah Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2390",
                "company": "Tecumseh Utility Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2431",
                "company": "Town of Braman",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2462",
                "company": "Town of Fort Supply",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2493",
                "company": "Town of Laverne",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2505",
                "company": "Town of Mannford",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2539",
                "company": "Town of Ryan",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2546",
                "company": "Town of South Coffeyville",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2550",
                "company": "Town of Spiro",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2637",
                "company": "Verdigris Valley Electric",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2810",
                "company": "Wagoner Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "2813",
                "company": "Walters Public Works Authority",
                "state": "OK",
                "priority": "0"
            }, {
                "id": "217",
                "company": "Central Electric",
                "state": "OR",
                "priority": "1"
            }, {
                "id": "223",
                "company": "Central Lincoln Peoples Utility District",
                "state": "OR",
                "priority": "1"
            }, {
                "id": "568",
                "company": "City of Eugene",
                "state": "OR",
                "priority": "1"
            }, {
                "id": "1242",
                "company": "City of Springfield",
                "state": "OR",
                "priority": "1"
            }, {
                "id": "2155",
                "company": "Portland General Electric",
                "state": "OR",
                "priority": "1"
            }, {
                "id": "41",
                "company": "Arcadia Power",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "95",
                "company": "BlachlyLane County Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "192",
                "company": "Canby Utility Board",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "302",
                "company": "City of Ashland",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "319",
                "company": "City of Bandon",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "424",
                "company": "City of Cascade Locks",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "522",
                "company": "City of Drain",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "599",
                "company": "City of Forest Grove",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "709",
                "company": "City of Hermiston",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "710",
                "company": "City of Hermiston",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "915",
                "company": "City of McMinnville",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "932",
                "company": "City of MiltonFreewater",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "941",
                "company": "City of Monmouth",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1434",
                "company": "Clatskanie Peoples Utilities",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1440",
                "company": "Clearwater Power Company",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1463",
                "company": "Columbia Basin Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1464",
                "company": "Columbia Power",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1466",
                "company": "Columbia River PUD",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1467",
                "company": "Columbia Rural Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1481",
                "company": "Consumers",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1483",
                "company": "Consumers Power",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1490",
                "company": "CoosCurry Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1544",
                "company": "Douglas Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1586",
                "company": "Emerald People's Utility District",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1591",
                "company": "Eugene Water and Electric Board",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1706",
                "company": "Harney Electric Coop, Inc",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1741",
                "company": "Hood River Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1847",
                "company": "Lane Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1941",
                "company": "Midstate Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2052",
                "company": "Northern Wasco County",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2081",
                "company": "Oregon Idaho Power",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2082",
                "company": "Oregon Trail Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2097",
                "company": "Pacific Power",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2255",
                "company": "Salem",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2258",
                "company": "Salem Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2278",
                "company": "Seaside Oregon",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2351",
                "company": "Springfield Utility Board (SUB)",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2399",
                "company": "Tillamook Peoples Utility District",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2610",
                "company": "Umatilla Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2818",
                "company": "Wasco Electric",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "2846",
                "company": "Western Oregon Energy Coop",
                "state": "OR",
                "priority": "0"
            }, {
                "id": "1560",
                "company": "Duquesne Light",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "2939",
                "company": "Metropolitan Edison Co",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "2940",
                "company": "Pennsylvania Electric Co",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "2131",
                "company": "Philadelphia Electric Company (PECO)",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "2160",
                "company": "PPL Electric Utilities Corporation",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "2941",
                "company": "West Penn Power Co",
                "state": "PA",
                "priority": "1"
            }, {
                "id": "6",
                "company": "Adams Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "79",
                "company": "Bedford Rural Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "119",
                "company": "Borough of Berlin",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "120",
                "company": "Borough of Blakely",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "122",
                "company": "Borough of Catawissa",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "123",
                "company": "Borough of Chambersburg",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "124",
                "company": "Borough of Duncannon",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "125",
                "company": "Borough of East Conemaugh",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "126",
                "company": "Borough of Ellwood City",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "127",
                "company": "Borough of Ephrata",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "128",
                "company": "Borough of Girard",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "129",
                "company": "Borough of Goldsboro",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "130",
                "company": "Borough of Grove City",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "131",
                "company": "Borough of Hatfield",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "132",
                "company": "Borough of Kutztown",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "133",
                "company": "Borough of Lansdale",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "135",
                "company": "Borough of Lehighton",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "136",
                "company": "Borough of Lewisberry",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "138",
                "company": "Borough of Middletown",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "139",
                "company": "Borough of Mifflinburg",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "141",
                "company": "Borough of New Wilmington",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "142",
                "company": "Borough of Olyphant",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "145",
                "company": "Borough of Perkasie",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "146",
                "company": "Borough of Pitcairn",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "147",
                "company": "Borough of Quakertown",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "148",
                "company": "Borough of Royalton",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "149",
                "company": "Borough of Schuylkill Haven",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "150",
                "company": "Borough of Smethport",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "152",
                "company": "Borough of St Clair",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "153",
                "company": "Borough of Summerhill",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "154",
                "company": "Borough of Tarentum",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "155",
                "company": "Borough of Wampum",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "156",
                "company": "Borough of Watsontown",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "157",
                "company": "Borough of Weatherly",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "158",
                "company": "Borough of Zelienople",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "218",
                "company": "Central Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1435",
                "company": "Claverack Rural Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1742",
                "company": "Hooversville Boro Elec Lgt Co",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1929",
                "company": "MetEd",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1962",
                "company": "Mont Alto Borough",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1984",
                "company": "National Grid",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "1996",
                "company": "New Enterprise R E C, Inc",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2056",
                "company": "Northwestern Rural ECA",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2123",
                "company": "Penelec",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2212",
                "company": "REA Energy",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2302",
                "company": "Somerset Rural Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2364",
                "company": "Sullivan County R E C, Inc",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2595",
                "company": "TriCounty Rural Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2616",
                "company": "United Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2634",
                "company": "Valley Rural Electric",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2816",
                "company": "Warren Electric Coop Inc",
                "state": "PA",
                "priority": "0"
            }, {
                "id": "2937",
                "company": "Block Island Utility District",
                "state": "RI",
                "priority": "1"
            }, {
                "id": "2108",
                "company": "Pascoag Utility District",
                "state": "RI",
                "priority": "1"
            }, {
                "id": "2936",
                "company": "Sunnova",
                "state": "RI",
                "priority": "1"
            }, {
                "id": "2934",
                "company": "Sunrun Inc.",
                "state": "RI",
                "priority": "1"
            }, {
                "id": "2938",
                "company": "The Narragansett Electric Co",
                "state": "RI",
                "priority": "1"
            }, {
                "id": "1985",
                "company": "National Grid",
                "state": "RI",
                "priority": "0"
            }, {
                "id": "85",
                "company": "Berkeley Electric",
                "state": "SC",
                "priority": "1"
            }, {
                "id": "1553",
                "company": "Duke Energy Carolinas",
                "state": "SC",
                "priority": "1"
            }, {
                "id": "1556",
                "company": "Duke Energy Progress",
                "state": "SC",
                "priority": "1"
            }, {
                "id": "2271",
                "company": "Santee Cooper",
                "state": "SC",
                "priority": "1"
            }, {
                "id": "14",
                "company": "Aiken Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "59",
                "company": "Bamberg Board of Public Works",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "84",
                "company": "Berkeley Coop",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "98",
                "company": "Black River CoOp",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "100",
                "company": "Black River Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "106",
                "company": "Blue Ridge Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "107",
                "company": "Blue Ridge Electric Cooperative",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "253",
                "company": "City of Abbeville",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "341",
                "company": "City of Bennettsville",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "416",
                "company": "City of Camden",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "523",
                "company": "City of Due West",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "622",
                "company": "City of Gaffney",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "638",
                "company": "City of Georgetown",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "826",
                "company": "City of Laurens",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1002",
                "company": "City of Newberry",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1041",
                "company": "City of Orangeburg",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1148",
                "company": "City of Rock Hill",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1199",
                "company": "City of Seneca",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1329",
                "company": "City of Union",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1388",
                "company": "City of Westminster",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1443",
                "company": "Clinton Combined Utility Sys",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1445",
                "company": "Clinton Public Works & Utilities",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1453",
                "company": "Coastal Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1454",
                "company": "Coastal Electric Coop, Inc",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1540",
                "company": "Dominion",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1561",
                "company": "Easley Combined",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1562",
                "company": "Easley Combined Utility System",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1575",
                "company": "Edisto Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1576",
                "company": "Edisto Electric Cooperative",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1597",
                "company": "Fairfield Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1598",
                "company": "Fairfield Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1677",
                "company": "Greenwood CPW",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1679",
                "company": "Greer Commission of Public Works",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1680",
                "company": "Greer CPW",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1721",
                "company": "Heath Springs Light and Power",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1743",
                "company": "Horry Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1853",
                "company": "Laurens Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1852",
                "company": "Laurens Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1870",
                "company": "Little River Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1871",
                "company": "Lockhart Power Co.",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1888",
                "company": "Lynches River Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1905",
                "company": "Marlboro Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1934",
                "company": "MidCarolina Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "1932",
                "company": "Mid Carolina Electric Coop (MCEC)",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2006",
                "company": "Newberry Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2100",
                "company": "Palmetto Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2112",
                "company": "PDEC",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2119",
                "company": "Pee Dee Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2236",
                "company": "Rock Hill Utility",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2272",
                "company": "Santee Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2304",
                "company": "South Carolina Energy and Gas (SCE&G)",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2305",
                "company": "South Carolina Public Service Authority",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2509",
                "company": "Town of McCormick",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2532",
                "company": "Town of Prosperity",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2580",
                "company": "Town of Winnsboro",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2588",
                "company": "Tri County Electric",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "2887",
                "company": "York Electric Cooperative",
                "state": "SC",
                "priority": "0"
            }, {
                "id": "97",
                "company": "Black Hills Electric",
                "state": "SD",
                "priority": "1"
            }, {
                "id": "2912",
                "company": "Northern States Power Co",
                "state": "SD",
                "priority": "1"
            }, {
                "id": "2929",
                "company": "NorthWestern Energy",
                "state": "SD",
                "priority": "1"
            }, {
                "id": "113",
                "company": "Bon Homme Yankton Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "185",
                "company": "Butte Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "190",
                "company": "Cam Wal Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "219",
                "company": "Central Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "233",
                "company": "Charles Mix Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "238",
                "company": "CherryTodd Electric Coop, Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "299",
                "company": "City of Arlington",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "311",
                "company": "City of Aurora",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "317",
                "company": "City of Badger",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "347",
                "company": "City of Beresford",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "350",
                "company": "City of Big Stone City",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "382",
                "company": "City of Brookings",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "389",
                "company": "City of Bryant",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "395",
                "company": "City of Burke",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "468",
                "company": "City of Colman",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "546",
                "company": "City of Elk Point",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "563",
                "company": "City of Estelline",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "578",
                "company": "City of Faith",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "590",
                "company": "City of Flandreau",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "604",
                "company": "City of Fort Pierre",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "678",
                "company": "City of Groton",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "702",
                "company": "City of Hecla",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "742",
                "company": "City of Howard",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "883",
                "company": "City of Madison",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "913",
                "company": "City of McLaughlin",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "930",
                "company": "City of Miller",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1037",
                "company": "City of Onida",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1070",
                "company": "City of Parker",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1088",
                "company": "City of Pierre",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1093",
                "company": "City of Plankinton",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1224",
                "company": "City of Sioux Falls",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1337",
                "company": "City of Vermillion",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1344",
                "company": "City of Volga",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1376",
                "company": "City of Wessington Springs",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1391",
                "company": "City of White",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1438",
                "company": "ClayUnion Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1456",
                "company": "CodingtonClark Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1517",
                "company": "Dakota Energy",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1545",
                "company": "Douglas Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1614",
                "company": "FEM Electric Association",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1669",
                "company": "Grand Electric Coop, Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1716",
                "company": "HD Electric Coop Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1718",
                "company": "Heartland Consumers Power Dist",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1835",
                "company": "LaCreek Electric Assn, Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1843",
                "company": "Lake Region Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "1966",
                "company": "MoreauGrand Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2046",
                "company": "Northern Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2061",
                "company": "Oahe Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2245",
                "company": "Rosebud Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2321",
                "company": "Southeastern Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2492",
                "company": "Town of Langford",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2526",
                "company": "Town of Pickstown",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2584",
                "company": "Traverse Electric Coop, Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2612",
                "company": "Union County Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2826",
                "company": "Watertown Municipal Utilities",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2837",
                "company": "West Central Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2841",
                "company": "West River Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2852",
                "company": "Whetstone Valley Elec Coop Inc",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2853",
                "company": "Whetstone Valley Electric",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2864",
                "company": "Winner Municipal Utility",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "2863",
                "company": "Winner Municipal Utility",
                "state": "SD",
                "priority": "0"
            }, {
                "id": "920",
                "company": "City of Memphis",
                "state": "TN",
                "priority": "1"
            }, {
                "id": "1243",
                "company": "City of Springfield",
                "state": "TN",
                "priority": "1"
            }, {
                "id": "1823",
                "company": "Knoxville Utilities Board",
                "state": "TN",
                "priority": "1"
            }, {
                "id": "1937",
                "company": "Middle Tennessee EMC",
                "state": "TN",
                "priority": "1"
            }, {
                "id": "1980",
                "company": "Nashville Electric Service",
                "state": "TN",
                "priority": "1"
            }, {
                "id": "39",
                "company": "Appalachian Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "50",
                "company": "Athens Utility Board",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "82",
                "company": "Benton County",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "112",
                "company": "Bolivar Energy Authority",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "193",
                "company": "Caney Fork Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "200",
                "company": "Carroll County",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "239",
                "company": "Chickasaw Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "267",
                "company": "City of Alcoa Utilities",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "379",
                "company": "City of Bristol",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "384",
                "company": "City of Brownsville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "451",
                "company": "City of Clarksville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "454",
                "company": "City of Cleveland",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "457",
                "company": "City of Clinton",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "480",
                "company": "City of Cookeville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "487",
                "company": "City of Covington",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "505",
                "company": "City of Dayton",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "513",
                "company": "City of Dickson",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "528",
                "company": "City of Dyersburg",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "545",
                "company": "City of Elizabethton",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "566",
                "company": "City of Etowah",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "588",
                "company": "City of Fayetteville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "625",
                "company": "City of Gallatin",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "671",
                "company": "City of Greeneville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "689",
                "company": "City of Harriman",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "747",
                "company": "City of Humboldt",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "764",
                "company": "City of Jackson",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "802",
                "company": "City of LaFollette",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "829",
                "company": "City of Lawrenceburg",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "837",
                "company": "City of Lenoir",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "840",
                "company": "City of Lewisburg",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "843",
                "company": "City of Lexington",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "927",
                "company": "City of Milan",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "958",
                "company": "City of Morristown",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "968",
                "company": "City of Mt Pleasant",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "972",
                "company": "City of Murfreesboro",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1000",
                "company": "City of Newbern",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1006",
                "company": "City of Newport",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1025",
                "company": "City of Oak Ridge",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1068",
                "company": "City of Paris",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1117",
                "company": "City of Pulaski",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1138",
                "company": "City of Ripley",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1151",
                "company": "City of Rockwood",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1214",
                "company": "City of Shelbyville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1227",
                "company": "City of Smithville",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1235",
                "company": "City of Sparta",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1288",
                "company": "City of Sweetwater",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1312",
                "company": "City of Trenton",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1330",
                "company": "City of Union City",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1402",
                "company": "City of Winchester",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1465",
                "company": "Columbia Power System",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1512",
                "company": "Cumberland Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1549",
                "company": "Duck River Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1630",
                "company": "Forked Deer Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1632",
                "company": "Fort Loudoun Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1738",
                "company": "Holston Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1795",
                "company": "Johnson City",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1880",
                "company": "Loudon Utilities Board",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1908",
                "company": "Maryville Utilities",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1918",
                "company": "McMinnville Electric System",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "1928",
                "company": "Meriwether Lewis Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2133",
                "company": "Pickwick Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2144",
                "company": "Plateau Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2158",
                "company": "Powell Valley Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2282",
                "company": "Sequachee Valley Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2283",
                "company": "Sevier County Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2340",
                "company": "Southwest Tennessee EMC",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2392",
                "company": "Tennessee Valley Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2454",
                "company": "Town of Erwin",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2601",
                "company": "Tullahoma BoardPublic Utilities",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2626",
                "company": "Upper Cumberland EMC",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2809",
                "company": "Volunteer Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "2831",
                "company": "Weakley County Municipal Electric",
                "state": "TN",
                "priority": "0"
            }, {
                "id": "55",
                "company": "Austin Energy",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "1176",
                "company": "City of San Antonio",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "2928",
                "company": "Direct Energy Services",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "1779",
                "company": "Jackson Electric",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "2221",
                "company": "Reliant Energy Retail Services",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "2609",
                "company": "TXU Energy Retail Co, LLC",
                "state": "TX",
                "priority": "1"
            }, {
                "id": "2888",
                "company": "AEP Texas",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "36",
                "company": "Any Coop",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "57",
                "company": "Bailey County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "61",
                "company": "Bandera Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "68",
                "company": "Bartlett Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "88",
                "company": "Big Country Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "109",
                "company": "Bluebonnet Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "160",
                "company": "BowieCass Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "175",
                "company": "Brownsville Public Utilities Board",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "227",
                "company": "Central Texas Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "234",
                "company": "Cherokee County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "327",
                "company": "City of Bastrop",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "337",
                "company": "City of Bellville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "364",
                "company": "City of Boerne",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "371",
                "company": "City of Brady",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "375",
                "company": "City of Brenham",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "377",
                "company": "City of Bridgeport",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "388",
                "company": "City of Bryan",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "402",
                "company": "City of Burnet",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "410",
                "company": "City of Caldwell",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "426",
                "company": "City of Castroville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "463",
                "company": "City of Coleman",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "465",
                "company": "City of College Station",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "495",
                "company": "City of Cuero",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "509",
                "company": "City of Denton",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "542",
                "company": "City of Electra",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "583",
                "company": "City of Farmersville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "591",
                "company": "City of Flatonia",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "594",
                "company": "City of Floresville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "595",
                "company": "City of Floydada",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "614",
                "company": "City of Fredericksburg",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "630",
                "company": "City of Garland",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "639",
                "company": "City of Georgetown",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "641",
                "company": "City of Giddings",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "654",
                "company": "City of Goldthwaite",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "655",
                "company": "City of Gonzales",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "660",
                "company": "City of Granbury",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "675",
                "company": "City of Greenville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "699",
                "company": "City of Hearne",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "704",
                "company": "City of Hemphill",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "705",
                "company": "City of Hempstead",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "735",
                "company": "City of Hondo",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "768",
                "company": "City of Jasper",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "767",
                "company": "City of Jasper",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "795",
                "company": "City of La Grange",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "817",
                "company": "City of Lampasas",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "845",
                "company": "City of Lexington",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "847",
                "company": "City of Liberty",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "855",
                "company": "City of Livingston",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "856",
                "company": "City of Llano",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "857",
                "company": "City of Lockhart",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "868",
                "company": "City of Lubbock",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "870",
                "company": "City of Luling",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "909",
                "company": "City of Mason",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "989",
                "company": "City of New Braunfels",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1009",
                "company": "City of Newton",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1146",
                "company": "City of Robstown",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1177",
                "company": "City of San Augustine",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1182",
                "company": "City of Sanger",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1178",
                "company": "City of San Marcos",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1179",
                "company": "City of San Saba",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1188",
                "company": "City of Schulenburg",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1197",
                "company": "City of Seguin",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1205",
                "company": "City of Seymour",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1217",
                "company": "City of Shiner",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1228",
                "company": "City of Smithville",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1304",
                "company": "City of Timpson",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1320",
                "company": "City of Tulia",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1372",
                "company": "City of Weimar",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1393",
                "company": "City of Whitesboro",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1421",
                "company": "City of Yoakum",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1458",
                "company": "Coleman County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1470",
                "company": "Comanche County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1474",
                "company": "Concho Valley Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1486",
                "company": "Cooke County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1496",
                "company": "Coser Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1497",
                "company": "CoServ",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1524",
                "company": "Deaf Smith Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1527",
                "company": "Deep East Texas Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1534",
                "company": "Denton County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1603",
                "company": "Fannin County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1607",
                "company": "Farmers Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1611",
                "company": "Fayette Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1631",
                "company": "Fort Belknap Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1650",
                "company": "Garland City Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1673",
                "company": "GraysonCollin Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1675",
                "company": "Greenbelt Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1687",
                "company": "Guadalupe Valley Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1699",
                "company": "Hamilton County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1703",
                "company": "Harmon Electric Assn Inc",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1717",
                "company": "Heart of Texas Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1733",
                "company": "HILCO Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1745",
                "company": "Houston County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1776",
                "company": "JAC Electric Coop Inc",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1785",
                "company": "JasperNewton Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1803",
                "company": "Karnes Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1817",
                "company": "Kerrville Public Utility Board",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1820",
                "company": "Kirbyville Light & Power Co",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1845",
                "company": "Lamar County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1846",
                "company": "Lamb County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1863",
                "company": "Lighthouse Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1889",
                "company": "Lyntegar Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1898",
                "company": "Magic Valley Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1923",
                "company": "Medina Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1940",
                "company": "MidSouth Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1987",
                "company": "Navarro County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1988",
                "company": "Navasota Valley Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2035",
                "company": "North Plains Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2059",
                "company": "Nueces Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2075",
                "company": "Oncor",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2116",
                "company": "Pedernales Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2229",
                "company": "Rita Blanca Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2251",
                "company": "Rusk County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2262",
                "company": "Sam Houston Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2263",
                "company": "San Bernard Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2267",
                "company": "San Patricio Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2313",
                "company": "South Plains Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2893",
                "company": "Southwestern Electric Power Company (SWEPCO)",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2341",
                "company": "Southwest Texas Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2375",
                "company": "Swisher Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2386",
                "company": "Taylor Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2587",
                "company": "Tri County Coop",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2597",
                "company": "Trinity Valley Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2617",
                "company": "United Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2627",
                "company": "Upshur Rural Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2641",
                "company": "Victoria Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2832",
                "company": "Weatherford Municipal Utility System",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2847",
                "company": "Wharton County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2869",
                "company": "Wise Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "2873",
                "company": "Wood County Electric",
                "state": "TX",
                "priority": "0"
            }, {
                "id": "1248",
                "company": "City of St George",
                "state": "UT",
                "priority": "1"
            }, {
                "id": "2926",
                "company": "Dixie Power",
                "state": "UT",
                "priority": "1"
            }, {
                "id": "1857",
                "company": "Lehi City Corporation",
                "state": "UT",
                "priority": "1"
            }, {
                "id": "2174",
                "company": "Provo City",
                "state": "UT",
                "priority": "1"
            }, {
                "id": "2175",
                "company": "Provo City Power",
                "state": "UT",
                "priority": "1"
            }, {
                "id": "78",
                "company": "Beaver City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "159",
                "company": "Bountiful City Light and Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "164",
                "company": "Bridger Valley Elec Assn, Inc",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "166",
                "company": "Bridger Valley Electric",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "167",
                "company": "Brigham City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "168",
                "company": "Brigham City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "169",
                "company": "Brigham City Public Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "357",
                "company": "City of Blanding",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "368",
                "company": "City of Bountiful",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "558",
                "company": "City of Enterprise",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "559",
                "company": "City of Ephraim",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "703",
                "company": "City of Helper",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "861",
                "company": "City of Logan",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "892",
                "company": "City of Manti",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "945",
                "company": "City of Monroe",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "969",
                "company": "City of Mt Pleasant",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "974",
                "company": "City of Murray",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1184",
                "company": "City of Santa Clara",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1244",
                "company": "City of Springville",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1360",
                "company": "City of Washington",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1359",
                "company": "City of Washington",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1600",
                "company": "Fairview City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1616",
                "company": "Fillmore City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1628",
                "company": "Flowell Electric Assn, Inc",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1649",
                "company": "Garkane Energy",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1723",
                "company": "Heber Light and Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1722",
                "company": "Heber Light & Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1752",
                "company": "Hurricane City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1755",
                "company": "Hyrum City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1802",
                "company": "Kanosh Town Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1806",
                "company": "Kaysville City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1807",
                "company": "Kaysville City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1858",
                "company": "Lehi City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1859",
                "company": "Levan Town Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1873",
                "company": "Logan City Light and Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1921",
                "company": "Meadow Town Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1968",
                "company": "Morgan City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1976",
                "company": "Murray City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "1993",
                "company": "Nephi City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2107",
                "company": "Parowan City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2110",
                "company": "Payson City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2111",
                "company": "Payson City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2169",
                "company": "Price Municipal Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2239",
                "company": "Rocky Mountain Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2256",
                "company": "Salem City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2257",
                "company": "Salem City Power",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2344",
                "company": "Spanish Fork",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2345",
                "company": "Spanish Fork City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2347",
                "company": "Spring City Corporation",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2352",
                "company": "Springville City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2355",
                "company": "St. George (not sure what utility is)",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2363",
                "company": "Strawberry Electric",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2481",
                "company": "Town of Holden",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2520",
                "company": "Town of Oak City",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2523",
                "company": "Town of Paragonah",
                "state": "UT",
                "priority": "0"
            }, {
                "id": "2908",
                "company": "Appalachian Power Co",
                "state": "VA",
                "priority": "1"
            }, {
                "id": "2051",
                "company": "Northern Virginia Electric",
                "state": "VA",
                "priority": "1"
            }, {
                "id": "2807",
                "company": "Virginia Electricity and Power",
                "state": "VA",
                "priority": "1"
            }, {
                "id": "63",
                "company": "BARC Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "170",
                "company": "Bristol Virginia Utilities",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "229",
                "company": "Central Virginia Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "502",
                "company": "City of Danville",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "610",
                "company": "City of Franklin",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "690",
                "company": "City of Harrisonburg",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "885",
                "company": "City of Manassas",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "907",
                "company": "City of Martinsville",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "1121",
                "company": "City of Radford",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "1173",
                "company": "City of Salem",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "1472",
                "company": "Community Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "1502",
                "company": "CraigBotetourt Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "1541",
                "company": "Dominion",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2048",
                "company": "Northern Neck Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2170",
                "company": "Prince George Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2208",
                "company": "rename to Rappahannock Electric Coop",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2290",
                "company": "Shenandoah Valley Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2332",
                "company": "Southside Electric",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2420",
                "company": "Town of Bedford",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2426",
                "company": "Town of Blackstone",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2445",
                "company": "Town of Culpeper",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2444",
                "company": "Town of Culpeper",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2452",
                "company": "Town of Elkton",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2467",
                "company": "Town of Front Royal",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2535",
                "company": "Town of Richlands",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2565",
                "company": "Town of Wakefield",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "2808",
                "company": "Virginia Tech Electric Service",
                "state": "VA",
                "priority": "0"
            }, {
                "id": "401",
                "company": "City of Burlington Electric",
                "state": "VT",
                "priority": "1"
            }, {
                "id": "2921",
                "company": "Green Mountain Power Corp",
                "state": "VT",
                "priority": "1"
            }, {
                "id": "2728",
                "company": "Village of Lyndonville",
                "state": "VT",
                "priority": "1"
            }, {
                "id": "2821",
                "company": "Washington Electric",
                "state": "VT",
                "priority": "1"
            }, {
                "id": "70",
                "company": "Barton Village, Inc",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2476",
                "company": "Town of Hardwick",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2555",
                "company": "Town of Stowe",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2639",
                "company": "Vermont Electric",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2689",
                "company": "Village of Enosburg Falls",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2715",
                "company": "Village of Hyde Park",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2718",
                "company": "Village of Jacksonville",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2719",
                "company": "Village of Johnson",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2726",
                "company": "Village of Ludlow",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2740",
                "company": "Village of Morrisville",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2747",
                "company": "Village of Northfield",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2751",
                "company": "Village of Orleans",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2783",
                "company": "Village of Swanton",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2782",
                "company": "Village of Swanton",
                "state": "VT",
                "priority": "0"
            }, {
                "id": "2916",
                "company": "Avista Corp",
                "state": "WA",
                "priority": "1"
            }, {
                "id": "1195",
                "company": "City of Seattle",
                "state": "WA",
                "priority": "1"
            }, {
                "id": "2915",
                "company": "Clark County",
                "state": "WA",
                "priority": "1"
            }, {
                "id": "2179",
                "company": "PUD 1 of Snohomish County",
                "state": "WA",
                "priority": "1"
            }, {
                "id": "2919",
                "company": "Puget Sound Energy Inc",
                "state": "WA",
                "priority": "1"
            }, {
                "id": "25",
                "company": "Alder Mutual Light Co, Inc",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "83",
                "company": "Benton Rural Electric",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "87",
                "company": "Big Bend Electric",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "355",
                "company": "City of Blaine",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "434",
                "company": "City of Centralia",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "442",
                "company": "City of Cheney",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "445",
                "company": "City of Chewelah",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "550",
                "company": "City of Ellensburg",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "911",
                "company": "City of McCleary",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "931",
                "company": "City of Milton",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1103",
                "company": "City of Port Angeles",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1135",
                "company": "City of Richland",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1284",
                "company": "City of Sumas",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1292",
                "company": "City of Tacoma",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1441",
                "company": "Clearwater Power Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1585",
                "company": "Elmhurst Mutual Power & Light Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1844",
                "company": "Lakeview Light & Power",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1955",
                "company": "Modern Electric Water Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1994",
                "company": "Nespelem Valley Elec Coop, Inc",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2069",
                "company": "Ohop Mutual Light Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2070",
                "company": "Okanogan County Electric",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2080",
                "company": "Orcas Power & Light",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2106",
                "company": "Parkland Light & Water Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2124",
                "company": "Peninsula Light Company",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2180",
                "company": "PUD No 1 of Asotin County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2181",
                "company": "PUD No 1 of Benton County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2182",
                "company": "PUD No 1 of Chelan County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2183",
                "company": "PUD No 1 of Clallam County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2184",
                "company": "PUD No 1 of Clark County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2185",
                "company": "PUD No 1 of Cowlitz County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2186",
                "company": "PUD No 1 of Douglas County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2187",
                "company": "PUD No 1 of Ferry County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2188",
                "company": "PUD No 1 of Ferry County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2189",
                "company": "PUD No 1 of Franklin County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2190",
                "company": "PUD No 1 of Grays Harbor County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2191",
                "company": "PUD No 1 of Kittitas County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2192",
                "company": "PUD No 1 of Klickitat County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2193",
                "company": "PUD No 1 of Lewis County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2194",
                "company": "PUD No 1 of Mason County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2195",
                "company": "PUD No 1 of Okanogan County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2196",
                "company": "PUD No 1 of Pend Oreille County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2197",
                "company": "PUD No 1 of Skamania Co",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2198",
                "company": "PUD No 1 of Wahkiakum County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2199",
                "company": "PUD No 2 of Grant County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2200",
                "company": "PUD No 2 of Pacific County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2201",
                "company": "PUD No 3 of Mason County",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2383",
                "company": "Tanner Electric",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2450",
                "company": "Town of Eatonville",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2538",
                "company": "Town of Ruston",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2553",
                "company": "Town of Steilacoom",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "2636",
                "company": "Vera Irrigation District #15",
                "state": "WA",
                "priority": "0"
            }, {
                "id": "1780",
                "company": "Jackson Electric",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "2909",
                "company": "Madison Gas & Electric Co",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "2910",
                "company": "Northern States Power Co",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "2914",
                "company": "Wisconsin Electric Power Co",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "2867",
                "company": "Wisconsin Power & Light",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "2868",
                "company": "Wisconsin Public Service Corporation",
                "state": "WI",
                "priority": "1"
            }, {
                "id": "8",
                "company": "AdamsColumbia Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "28",
                "company": "Algoma Utility",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "64",
                "company": "Barron Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "73",
                "company": "Bayfield Electric Coop, Inc",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "102",
                "company": "Bloomer Electric & Water Co",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "172",
                "company": "Brodhead Water & Lighting",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "212",
                "company": "Cedarburg Light & Water",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "230",
                "company": "Central Wisconsin Elec Coop",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "231",
                "company": "Central Wisconsin Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "242",
                "company": "Chippewa Valley Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "295",
                "company": "City of Arcadia",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "297",
                "company": "City of Argyle",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "325",
                "company": "City of Barron",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "353",
                "company": "City of Black River Falls",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "366",
                "company": "City of Boscobel",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "458",
                "company": "City of Clintonville",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "476",
                "company": "City of Columbus",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "481",
                "company": "City of Cornell",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "494",
                "company": "City of Cuba City",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "496",
                "company": "City of Cumberland",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "530",
                "company": "City of Eagle River",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "548",
                "company": "City of Elkhorn",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "552",
                "company": "City of Elroy",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "569",
                "company": "City of Evansville",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "589",
                "company": "City of Fennimore",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "780",
                "company": "City of Kaukauna",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "782",
                "company": "City of Kiel",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "860",
                "company": "City of Lodi",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "906",
                "company": "City of Marshfield",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "919",
                "company": "City of Medford",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "921",
                "company": "City of Menasha",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "992",
                "company": "City of New Holstein",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "993",
                "company": "City of New Lisbon",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "996",
                "company": "City of New Richmond",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1097",
                "company": "City of Plymouth",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1113",
                "company": "City of Princeton",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1136",
                "company": "City of Richland Center",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1140",
                "company": "City of River Falls",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1209",
                "company": "City of Sheboygan Falls",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1218",
                "company": "City of Shullsburg",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1238",
                "company": "City of Spooner",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1272",
                "company": "City of Stoughton",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1280",
                "company": "City of Sturgeon Bay",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1385",
                "company": "City of Westby",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1428",
                "company": "Clark Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1559",
                "company": "Dunn County Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1572",
                "company": "Eau Claire Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1625",
                "company": "Florence Utility",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1712",
                "company": "Hartford Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1753",
                "company": "Hustisford Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1790",
                "company": "Jefferson Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1798",
                "company": "Jump River Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1799",
                "company": "Juneau Utility",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1830",
                "company": "La Farge Municipal Electric Co",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1839",
                "company": "Lake Mills Light & Water",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1900",
                "company": "Manitowoc Public Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "1999",
                "company": "New London Electric & Water",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2062",
                "company": "Oakdale Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2065",
                "company": "Oconomowoc Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2066",
                "company": "Oconto Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2067",
                "company": "Oconto Falls Water & Light",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2135",
                "company": "PiercePepin Cooperative Services",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2151",
                "company": "PolkBurnett Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2168",
                "company": "Price Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2219",
                "company": "Reedsburg Utility",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2224",
                "company": "Rice Lake Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2227",
                "company": "Richland Electric Coop",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2230",
                "company": "Riverland Energy",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2286",
                "company": "Shawano Municipal Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2298",
                "company": "Slinger Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2353",
                "company": "St Croix Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2354",
                "company": "St Croix Electric Coop",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2369",
                "company": "Sun Prairie Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2387",
                "company": "Taylor Electric Coop",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2608",
                "company": "Two Rivers Water & Light",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2640",
                "company": "Vernon Electric",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2651",
                "company": "Village of Bangor",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2655",
                "company": "Village of Belmont",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2656",
                "company": "Village of Benton",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2660",
                "company": "Village of Black Earth",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2667",
                "company": "Village of Cadott",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2671",
                "company": "Village of Cashton",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2705",
                "company": "Village of Gresham",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2711",
                "company": "Village of Hazel Green",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2732",
                "company": "Village of Mazomanie",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2733",
                "company": "Village of Merrillan",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2741",
                "company": "Village of Mt. Horeb",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2743",
                "company": "Village of Muscoda",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2745",
                "company": "Village of New Glarus",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2753",
                "company": "Village of Pardeeville",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2762",
                "company": "Village of Prairie Du Sac",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2771",
                "company": "Village of Sauk City",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2781",
                "company": "Village of Stratford",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2788",
                "company": "Village of Trempealeau",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2792",
                "company": "Village of Viola",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2795",
                "company": "Village of Waunakee",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2822",
                "company": "Washington Island El Coop, Inc",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2825",
                "company": "Waterloo Light & Water",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2824",
                "company": "Water Works & Lighting",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2827",
                "company": "Waupun Utilities",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2830",
                "company": "We Energies",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2856",
                "company": "Whitehall Electric Utility",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2866",
                "company": "Wisconsin Dells Electric Util",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2872",
                "company": "Wonewoc Electric & Water Util",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2881",
                "company": "Xcel Energy",
                "state": "WI",
                "priority": "0"
            }, {
                "id": "2906",
                "company": "Appalachian Power Co",
                "state": "WV",
                "priority": "1"
            }, {
                "id": "2905",
                "company": "Monongahela Power Co",
                "state": "WV",
                "priority": "1"
            }, {
                "id": "2902",
                "company": "Potomac Edison Company",
                "state": "WV",
                "priority": "1"
            }, {
                "id": "2851",
                "company": "Wheeling Electric Power (AEP Ohio)",
                "state": "WV",
                "priority": "1"
            }, {
                "id": "995",
                "company": "City of New Martinsville",
                "state": "WV",
                "priority": "0"
            }, {
                "id": "1503",
                "company": "CraigBotetourt Electric Coop",
                "state": "WV",
                "priority": "0"
            }, {
                "id": "1710",
                "company": "Harrison Rural Elec Assn, Inc",
                "state": "WV",
                "priority": "0"
            }, {
                "id": "2132",
                "company": "Philippi Municipal Electric",
                "state": "WV",
                "priority": "0"
            }, {
                "id": "2898",
                "company": "Cheyenne Light Fuel & Power",
                "state": "WY",
                "priority": "1"
            }, {
                "id": "1885",
                "company": "Lower Valley Energy",
                "state": "WY",
                "priority": "1"
            }, {
                "id": "2897",
                "company": "Montana-Dakota Utilities Co",
                "state": "WY",
                "priority": "1"
            }, {
                "id": "2098",
                "company": "PacifiCorp (Rocky Mountain Power)",
                "state": "WY",
                "priority": "1"
            }, {
                "id": "76",
                "company": "Beartooth Electric Coop, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "90",
                "company": "Big Horn County Elec Coop, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "93",
                "company": "Big Horn Rural Electric Co",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "165",
                "company": "Bridger Valley Elec Assn, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "199",
                "company": "Carbon Power & Light",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "459",
                "company": "City of Cody",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "506",
                "company": "City of Deaver",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "643",
                "company": "City of Gillette",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1091",
                "company": "City of Pine Bluffs",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1105",
                "company": "City of Powell",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1309",
                "company": "City of Torrington",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1651",
                "company": "Garland Light & Power Company",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1729",
                "company": "High Plains Power",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "1942",
                "company": "Midvale Irrigation District",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2014",
                "company": "Niobrara Electric Assn, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2319",
                "company": "Southeast Electric Coop, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2419",
                "company": "Town of Basin",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2461",
                "company": "Town of Fort Laramie",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2473",
                "company": "Town of Guernsey",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2494",
                "company": "Town of Lingle",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2499",
                "company": "Town of Lusk",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2575",
                "company": "Town of Wheatland",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2850",
                "company": "Wheatland Rural Elec Assn, Inc",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2861",
                "company": "Willwood Light & Power Company",
                "state": "WY",
                "priority": "0"
            }, {
                "id": "2879",
                "company": "Wyrulec Company",
                "state": "WY",
                "priority": "0"
            }];

            /**
             * Helper function disable hidden fields to validate only
             * items visible to the user.
             **/
            function toggleDisabledFields() {
                $("input:visible").removeAttr('disabled');
                $("input:hidden").attr('disabled', 'disabled');
                window.onbeforeunload = function() {
                    return true;
                };
            }

            function makeRequest(step) {
                ajaxVerify("/papi/validate.php?op=next&step=" + step + "&version=v4", function(response) {
                    // do nothing for now
                }, function() {
                    // do nothing for now
                });
            }

            /**
             * Move Progress Bar
             * Delayed .progress-circle animation to accomidate for animation swing
             **/
            function moveProgressBar(current_step, steps) {
                const progwidth = Math.round(current_step / steps * 100);
                $('.meter').animate({
                    width: '' + progwidth + '%'
                }, 825, 'swing');
                $('.progress-circle').css({
                    'right': '',
                    'left': '' + lastprogwidth + '%'
                }).animate({
                    'left': '' + (progwidth - 2) + '%'
                }, 925);
                lastprogwidth = progwidth;
                //parent_fieldset.fadeOut(400, function () {
                $("body").animate({
                    scrollTop: 0
                }, '500');
                window.top.scrollTo(0, 0);
                $(".progress-bar").width(progwidth + '%');
                //});

            }

            /**
             * Populate utility provider drop down (based on zip)
             **/
            function populateProviderDropdown(selected_provider) {
                const zipField = $('#zip');
                let zip = zipField.val();
                if (zip.length > 0) {
                    const state = getState(zip);
                    const utility_control = $('#provider-select');
                    let current_value = selected_provider || utility_control.val();
                    utility_control.empty();
                    utilities.filter(row => row.state === state).map((row, i) => {
                        const option = $('<option />').attr("value", row.company).text(row.company);
                        utility_control.append(option);
                        if (i == 4) {
                            const seperator = $('<option />').attr("value", "").attr("disabled", true).text("---");
                            utility_control.append(seperator)
                        }
                    });
                    const option = $('<option />').attr("value", "OTHER PROVIDER").text("OTHER PROVIDER");
                    utility_control.append(option);
                    if (current_value && current_value !== '' && utilities.length) {
                        const exists = $('#provider-select option').filter(function() {
                            return $(this).val() == current_value;
                        }).length;
                        if (exists) {
                            utility_control.val(current_value);
                        }
                    }
                }
            }

            if (skip_zip) {
                populateProviderDropdown();
            }



            function validateZipValue(zip_code) {
                var state = getState(zip_code)
                serverCity = null;
                serverState = state;
                serverZip = zip_code;
                serverLong = null;
                serverLat = null;
            }

            /**
             * Check if there's data in localStorage to fill the form inputs
             **/
            const formStorage = JSON.parse(localStorage.getItem('customerData')) || null;
            const formStep = localStorage.getItem('formStep') || null;

            // Check if there's a back button
            const btnBack = $('.btn-back');

            if (formStep && formStorage && true) {
                let utilityProvider;
                Object.entries(formStorage).forEach(row => {
                    if (row[0] === 'utility_provider') {
                        utilityProvider = row[1];
                        return;
                    }

                    if (row[0] === 'zip_code') {
                        const zipValue = row[1];
                        validateZipValue(zipValue);
                    }

                    if (row[0] === 'electric_bill') {
                        var output = $('output');
                        let value = row[1];
                        if (output.length) {
                            if (!Number.isInteger(value)) {
                                // check if it's a string and if it ends with a number
                                const matches = value.match(/([0-9]+)$/);
                                value = matches[0] || 455;
                                value = parseInt(value);
                            }
                            if (Number.isInteger(value)) {
                                $('#electric_bill').val(value);
                                output[0].value = value;
                            }
                        } else {
                            const exists = $('#electric_bill option').filter(function() {
                                return $(this).val() == value;
                            }).length;
                            if (exists) {
                                $('#electric_bill').val(value);
                            }
                        }
                    }

                    const input = $(`input[name="${row[0]}"]`)[0];
                    if (input && input.type === 'radio') {
                        // Clean option checked by default if exists
                        const checkedInput = $(`input[name="${row[0]}"]:checked`)[0];
                        if (checkedInput) {
                            checkedInput.checked = false
                        }

                        const options = Array.from($(`input[name="${row[0]}"]`))
                        // Loop the options and check the one that match
                        for (let i = 0; i < options.length; i++) {
                            if (options[i].value === row[1]) {
                                options[i].checked = true;
                            }
                        }
                    } else {
                        $(`input[name="${row[0]}"]`).val(row[1]);
                    }
                });
                populateProviderDropdown(utilityProvider);
                if (btnBack.length) {
                    const moveTo = parseInt(formStep) + 1;
                    progressFieldsetSteps((moveTo < 10) ? moveTo : 9, true, true);
                }
            }

            /**
             * Track step in 3rd party analytics
             **/
            function trackQuestion(step) {
                let qstep = 'Q' + step;
                dataLayer.push({
                    'event': qstep
                });
                window._loq.push(["tag", qstep, true]);
                gtag('event', 'page_view', {
                    page_title: qstep,
                    page_location: '/' + version + '/' + qstep,
                    page_path: '/' + version + '/' + qstep,
                    send_to: window.measurement_id
                })
                gtag('event', 'survey_step', {
                    event_category: 'survey',
                    event_label: qstep,
                    label: qstep
                })
                makeRequest(qstep);
            }

            /**
             * Helper function determine if there's a next screen
             */
            function hasNext() {
                const count = 1;
                const current_fieldset = $(".form-steps:visible");
                const step = current_fieldset.data("step")
                const next_step = step + count;
                const next_fieldset = $("#form-step" + next_step);
                return next_fieldset.length;
            }

            /**
             * Helper function move steps forward or back
             * Use -1 to move it backwards
             **/
            function progressFieldsetSteps(count, backToField, fromLocal) {
                $('.btn-next').removeAttr('disabled');
                const formStorage = JSON.parse(localStorage.getItem('customerData')) || {};
                const form = $('#msform')
                    .serializeArray()
                    .reduce((accumulator, current) => {
                        accumulator[current.name] = current.value;
                        return accumulator;
                    }, {});

                const mergedForm = {
                    ...formStorage,
                    ...form
                };

                localStorage.setItem('customerData', JSON.stringify(mergedForm));

                /**
                 * Determine current and next step
                 **/
                const current_fieldset = $(".form-steps:visible");
                const step = current_fieldset.data("step")
                const next_step = backToField ? count : step + count;
                const next_fieldset = $("#form-step" + next_step);
                if (!fromLocal) {
                    localStorage.setItem('formStep', (count > 0) ? step : next_step);
                }

                const tag = current_fieldset.data('tag') || step;
                const next_tag = next_fieldset.data('tag') || step;
                $('.' + tag).hide();
                $('.' + next_tag).show();
                if (count > 0) {
                    /**
                     * Capture Time Spent
                     */
                    measureStepDuration.capture(tag);
                }

                if (next_fieldset.length) {
                    $('#slidenum').html('' + next_step + ' of ' + steps + '');
                    $('#footer-slidenum').html(next_step);
                    if ($("#zip").is(":visible")) {
                        populateProviderDropdown();
                    }
                    current_fieldset.hide();
                    next_fieldset.fadeIn(function() {
                        trackQuestion(next_step);
                        $(this).find('input').first().focus();
                        /**
                         * Consider removing this?
                         */
                        if ($('#phoneContainer').is(':visible')) {
                            $('#tcpa_cont').show();
                        }
                    });
                    if (fromLocal) {
                        moveProgressBar(next_step, 10);
                    } else {
                        moveProgressBar(next_step, steps);
                    }

                    toggleDisabledFields();
                    $("body").animate({
                        scrollTop: 0
                    }, '500');
                    if (typeof backToField === 'object') {
                        displayError(backToField, "navigate back to field");
                    }
                    return true;
                }
                return false;
            }

            /**
             * Short cut to JQuery's AJAX feature to simplify
             * code in form verifications
             **/
            function ajaxVerify(path, success, error) {
                $.get(path, function(data) {
                    if (data.code == 200) {
                        success(data);
                    } else {
                        error(data)
                    }
                }).catch(function() {
                    error({});
                });
            }

            /**
             * Function for auto filling address, if user circumvents the drop down,
             * we'll present options to make sure we attempt to verify the address.
             **/
            function displaySuggestions(predictions, status) {
                if (status != google.maps.places.PlacesServiceStatus.OK) {
                    predictions = [];
                }

                /**
                 * Reduce USA only address
                 */
                predictions = predictions.filter((prediction) => {
                    if (!prediction.terms) {
                        return false;
                    }
                    const [street_number, route, locality, administrative_area_1, country] = prediction.terms.map(i => i.value);
                    return (country == 'USA');
                });

                /**
                 * If Google found any predictions, suggest them to the
                 * user to correct
                 **/
                const full_address = $("#full_address").val();
                if (predictions.length > 0) {
                    window._loq.push(["tag", 'User Verify Address', true]);
                    $("#street-address-verify").show();
                    const results = $("#street_address_predictions");
                    results.html(""); // clear results before writing new ones
                    predictions.forEach((prediction) => {
                        const [street_number, route, locality, administrative_area_1, country] = prediction.terms.map(i => i.value);

                        const li = $("<button>")
                            .addClass("address-autocomplete")
                            .html(prediction.description)
                            .attr('type', 'button')
                            .attr('full', prediction.description)
                            .attr('street_number', street_number)
                            .attr('route', route)
                            .attr('locality', locality)
                            .attr('administrative_area_1', administrative_area_1)
                            .attr('country', country)
                            .attr('onClick', 'verifyAddressOnClick(this)');

                        results.append(li);
                    });
                    results.append($("<button>")
                        .addClass("address-autocomplete")
                        .attr('type', 'button')
                        .html("No, I typed the correct address")
                        .attr('reject', 'true')
                        .attr('full', full_address)
                        .attr('street_number', full_address)
                        .attr('route', "")
                        .attr('locality', serverCity)
                        .attr('administrative_area_1', serverState)
                        .attr('country', "USA")
                        .attr('onClick', 'verifyAddressOnClick(this)'));
                }

                // Fall back is to rely on the zip code database to submit
                else {
                    verifyAddress(true, full_address, full_address, "", serverCity, serverState, "USA");
                }
            }

            /**
             * Reset the address verification
             **/
            function resetAddressVerification() {
                $('#street_number').val("");
                $('#route').val("");
                $('#locality').val("");
                $('#administrative_area_level_1').val("");
                $('#country').val("");
                $("#postal_code").val("");
                $("#street-address-verify").hide();
            }

            /**
             * Verify Address (helper function)
             **/
            function verifyAddress(reject, full, street_number, route, locality, administrative_area_1, country, skip) {
                const skip_click = skip || false;
                const zip = $("#zip").val();
                $('#full_address').val(full);
                $('#street_number').val(street_number);
                $('#route').val(route);
                $('#locality').val(locality);
                $('#administrative_area_level_1').val(administrative_area_1);
                $('#country').val(country);
                $("#postal_code").val(zip);
                $("#street-address-verify").hide();
                $(".btn-next:visible, .quick-next:visible").removeAttr('disabled').attr("address-user-verified", true);
                if (reject) {
                    window._loq.push(["tag", 'Unverified Address', true]);
                }
                if (hasNext() && !skip_click) {
                    setTimeout(function() {
                        $(".btn-next:visible, .quick-next:visible").click();
                    }, 200);
                }
            }


            /**
             * Function to capture address provided by customer
             * They're either rejecting or verifying the address.
             **/
            function verifyAddressOnClick(e) {
                const item = $(e);
                const reject = item.attr('reject');
                const full = item.attr('full');
                const street_number = item.attr('street_number');
                const route = item.attr('route');
                const locality = item.attr('locality');
                const administrative_area_1 = item.attr('administrative_area_1');
                const country = item.attr('country');
                verifyAddress(reject, full, street_number, route, locality, administrative_area_1, country);
            }


            /**
             * Verify Request received
             **/
            let queries = 0;
            let running_verification = false;

            function verifyRequest(path, timeout) {
                if (!running_verification) {
                    running_verification = true;
                    setTimeout(function() {
                        $.get(path, function(response) {
                            running_verification = false;
                            queries++;
                            if (queries >= 50) {
                                return false;
                            }
                            if (!response.body.click_id || !response.body.request_id) {
                                verifyRequest(path, 3000);
                            } else {
                                $('#click_id').attr('value', response.body.click_id)
                                $('#request_id').attr('value', response.body.request_id)
                            }
                        });
                    }, timeout);
                }
            }

            /**
             * Assess risk with email address
             **/
            let iwVerified = false;

            function iwVerify(em, zip) {
                if (!iwVerified) {
                    ajaxVerify("/papi/validate.php?op=iw&version=v4&address=" + em + "&zip=" + zip,
                        function() {
                            window._loq.push(["tag", 'IW Queried', true]);
                        },
                        function() {
                            window._loq.push(["tag", 'IW Error', true]);
                        });
                }
            }

            /**
             * Function for disabling submit button to avoid double
             * submits
             */
            let enableButton;

            function toggleNextButtons(enabled) {
                if (enabled) {
                    clearTimeout(enableButton);
                    enableButton = setTimeout(function() {
                        $(".btn-next, .quick-next").removeAttr('disabled');
                    }, 1500);
                } else {
                    $(".btn-next, .quick-next").attr('disabled', 'disabled');
                }
            }

            /**
             * Capture all form submits and send it to the next button click
             */
            $("#msform").submit(function(e) {
                const ok = $(this).attr("okay");
                if (!ok) {
                    e.preventDefault();
                    $(".btn-next:visible, .quick-next:visible").click();
                }
                // disable buttons
                else {
                    toggleNextButtons(false);
                }
            });

            /**
             * On document ready
             */

            //$(document).ready(function () {
            /**
             * Helper function to trigger error and indicate to the user they
             * need to fix a field.
             **/
            function displayError(field, error) {
                field.addClass("error");
                const field_id = field.attr("id");
                $("#" + field_id + "_error").show();
                $.get("/papi/persist.php?op=form_error&sub_type=" + field_id + "&error=" + encodeURIComponent(error), function(data) {
                    /* do nothing */
                });
                toggleNextButtons(true);
                toggleSubmitButtons(true);
            }

            dataLayer.push({
                'nonce': '1131593b4af57bc8bbb90be0b76d652d'
            });
            dataLayer.push({
                'event': 'Q1'
            });
            gtag('event', 'page_view', {
                page_title: 'Q1',
                page_location: '/' + version + '/' + 'Q1',
                page_path: '/' + version + '/' + 'Q1',
                send_to: window.measurement_id
            });
            gtag('event', 'survey_step', {
                event_category: 'survey',
                event_label: 'Q1',
                label: 'Q1'
            });
            const first_name = $("#first");
            const last_name = $("#last");
            const working = $("#work-in-progress");
            const address = $('#address');
            const email = $('#email');
            const phone = $('#phone');
            const zip = $('#zip');
            const fieldsIndex = [{
                idx: 2,
                field: zip
            }, {
                idx: 6,
                field: email
            }, {
                idx: 7,
                field: first_name
            }, {
                idx: 8,
                field: last_name
            }, {
                idx: 9,
                field: address
            }, {
                idx: 10,
                field: phone
            }]
            let pushedname = false;
            steps = $(".form-steps").length;

            // Function that returns the field name using the step index
            function getFieldName(index) {
                const fieldStep = fieldsIndex.find(field => field.idx === index);
                return fieldStep ? fieldStep.field : " ";
            }

            // $('#provider-select').on("change", function(e) {
            //   const value = $(this).val();
            //   $("option[value='" + value + "']")
            //     .attr("selected", "selected").siblings().removeAttr("selected");
            // });

            $("#zip").on("keyup", function(e) {
                this.value = this.value.replace(/[^\d]/, '')
            });

            $("#phone").on("keyup", function(e) {
                this.value = phoneFormat(this.value);
            });

            let persistClickEngagement = () => {
                $.get("/papi/persist.php?op=click", function(data) {
                    /* do nothing */
                });
                persistClickEngagement = () => {
                    return false;
                }
            }
            let debounce;
            $(".btn-next, .quick-next").click(function(e) {
                if ($(this).hasClass('btn-final')) {
                    toggleSubmitButtons(false);
                }
                clearTimeout(debounce);
                debounce = setTimeout(() => {
                    handleNextClick(e);
                    persistClickEngagement();
                }, 250);
            });

            /**
             * Validate fields on the screen and transition between
             * steps if valid
             **/
            function handleNextClick(e) {
                // alert('netx btn 1');

                let error;
                toggleDisabledFields();
                const addressUserVerified = $(this).attr('address-user-verified');
                const form = $("#msform")[0];
                const valid = form.checkValidity();
                if (!valid) {
                    // console.log(valid);
                    // console.log(form.reportValidity());
                    return false;
                }

                // Check for empty values
                const first = (first_name.val()) ? first_name.val().trim() : '';
                const last = (last_name.val()) ? last_name.val().trim() : '';
                if (first_name.is(":visible") && first.length < 3) {
                    error = true;
                    displayError(first_name, "less than 3 characters");
                }
                if (last_name.is(":visible") && last.length < 3) {
                    error = true;
                    displayError(last_name, "less than 3 characters");
                }
                if (error) {
                    return false;
                }

                // Send name to LO
                if (first.length > 0 && last.length > 0 && !pushedname) {
                    window._loq.push(['custom', {
                        'first_name': first,
                        'last_name': last
                    }]);
                    pushedname = true;
                }

                // Confirm complete address was provided by customer
                const full_address = address.val();
                if (address.is(":visible")) {
                    if (address.is(":visible") && full_address.length < 3) {
                        displayError(address, "less than 3 characters");
                        return false;
                    }
                    if (!window.ADDRESS_VALIDATION_SKIP) {
                        const street = $('#street_number').val().trim();
                        const route = $('#route').val().trim();
                        const locality = $('#locality').val().trim();
                        const postal_code = $('#postal_code').val().trim();
                        const country = $('#country').val().trim();
                        const state = $("#administrative_area_level_1").val().trim();
                        /**
                         * In case someone has an autocomplete setup,
                         * try to parse address with Google Once more
                         * to format it.
                         */
                        // if (!addressUserVerified && full_address.length > 0 && (!street.length || !route.length || !locality.length || !postal_code.length || !country.length)) {
                        //   $(".btn-next:visible, .quick-next:visible").attr('disabled', 'disabled');
                        //   const service = new google.maps.places.AutocompleteService();
                        //   service.getQueryPredictions({
                        //     input: full_address,
                        //     types: ["address"],
                        //     location: new google.maps.LatLng(serverLat, serverLong),
                        //     radius: 25,
                        //     offset: 0,
                        //     componentRestrictions: {country: 'us'}
                        //   }, displaySuggestions);
                        //   return false;
                        // }

                        if (!street.length && !route.length) {
                            window._loq.push(["tag", 'No Street', true]);
                        }
                        if (!locality.length) {
                            window._loq.push(["tag", 'No City', true]);
                        }
                        if (!postal_code.length) {
                            window._loq.push(["tag", 'No Postal', true]);
                        }
                        if (!country.length) {
                            window._loq.push(["tag", 'No Country', true]);
                        }
                        if (!state.length) {
                            window._loq.push(["tag", 'No State', true]);
                        }
                        if (!street.length || !locality.length || !postal_code.length || !country.length || !state.length) {
                            displayError(address, "could not parse address");
                            return false;
                        }
                    } else {
                        const customer_postal = zip.val();
                        $('#street_number').val(full_address);
                        $('#route').val("");
                        $('#locality').val(serverCity);
                        $('#administrative_area_level_1').val(serverState);
                        $('#country').val("USA");
                        $("#postal_code").val(customer_postal);
                    }
                }

                let timesSubmitted = 0;

                function submitForm() {
                    timesSubmitted++;
                    if (timesSubmitted >= 1) {
                        const form = $("#msform");

                        try {
                            let localStorageJson = {};
                            Object.entries({
                                    ...localStorage
                                })
                                .filter(row => !['formStep', 'customerData'].includes(row[0]))
                                .forEach(row => {
                                    try {
                                        let value = JSON.parse(row[1]);
                                        localStorageJson[row[0]] = value;
                                    } catch (e) {
                                        localStorageJson[row[0]] = row[1];
                                    }
                                });
                            $('#local_storage').val(JSON.stringify(localStorageJson));
                        } catch (err) {
                            // do nothing
                        }

                        try {
                            let sessionStorageJson = {};
                            Object.entries({
                                    ...sessionStorage
                                })
                                .forEach(row => {
                                    try {
                                        let value = JSON.parse(row[1]);
                                        sessionStorageJson[row[0]] = value;
                                    } catch (e) {
                                        sessionStorageJson[row[0]] = row[1];
                                    }
                                    Î
                                });
                            $('#session_storage').val(JSON.stringify(sessionStorageJson));
                        } catch (err) {
                            // do nothing
                        }

                        let data = $("#msform").serialize();
                        data += '&version=v4';
                        console.log({
                            data
                        });

                        /* Replace the data parameter with the line below to simulate a fake submission from Chrome
                        "property_ownership=own&zip_code=94001&utility_provider=a&electric_bill=a&roof_shade=a"
                        */
                        function success() {
                            window.onbeforeunload = null;
                            window.localStorage.removeItem('customerData');
                            window.localStorage.removeItem('formStep');
                            // set interval to to redirect
                            // we're waiting for progress status to finish cycling through
                            // before redirecting.
                            let redirect = setInterval(() => {
                                if (ready_for_redirect == true) {
                                    clearInterval(redirect);
                                    bounceType = 'submit';
                                    form.attr("okay", true);
                                    form.submit();
                                    // const action_url = form.attr('action');
                                    // const form_data = form.serialize();
                                    // $.ajax({
                                    //   url: action_url,
                                    //   type: "GET",
                                    //   data: form_data,
                                    //   success: function(body){
                                    //     const pageBody = $('body');
                                    //     window.history.pushState({}, '', action_url);
                                    //     pageBody.empty();
                                    //     document
                                    //       .querySelectorAll('style,link[rel="stylesheet"]')
                                    //       .forEach(item => item.remove());
                                    //     pageBody.html(body);
                                    //   }
                                    // });
                                }
                            }, 250);
                        }

                        let timesPolled = 0;

                        function pollForSuccess(conversion_id, success) {
                            timesPolled++;
                            if (timesPolled > 15) {
                                success();
                                return;
                            }
                            $.get("/papi/validate.php?op=posted&version=v4&id=" + conversion_id, function(res) {
                                    if (res.message === "posted") {
                                        if (typeof success == 'function') {
                                            measureSubmissionDuration.capture('complete');
                                            success();
                                        }
                                    } else {
                                        setTimeout(function() {
                                            pollForSuccess(conversion_id, success);
                                        }, 2000);
                                    }
                                })
                                .fail(function() {
                                    setTimeout(function() {
                                        pollForSuccess(conversion_id, success);
                                    }, 2000);
                                });
                        }

                        const measureAnimationDuration = MeasureDuration('animation');
                        const measureSubmissionDuration = MeasureDuration('submission');
                        [
                            () => {
                                animateFormSubmission(() => {
                                    if (exclusive.length) {
                                        $("#loader").hide();
                                        if (exclusive.hasClass('exclusive-overlay')) {
                                            $("body").addClass("no-scroll");
                                        }
                                        exclusive.show();
                                        $('#exclusive-submit').click(function(e) {
                                            $("body").removeClass("no-scroll");
                                            // exclusive.hide();
                                            ready_for_redirect = true;
                                            measureAnimationDuration.capture('complete');
                                        });
                                    } else {
                                        ready_for_redirect = true;
                                        measureAnimationDuration.capture('complete');
                                    }
                                });
                            },
                            () => {
                                $.ajax({
                                        type: "POST",
                                        url: "/papi/submit.php?",
                                        data: data,
                                        timeout: 30000,
                                        error: function() {
                                            pollForSuccess(0, success);
                                        }
                                    })
                                    .done(function(res) {
                                        const property_ownership = $('#pc01').val()
                                        const electric_bill = $('#electric_bill').val()
                                        const roof_shade = $('#rf2').val()
                                        const first_name = $('#first').val()
                                        const last_name = $('#last').val()
                                        const phone_home = $('#phone').val()
                                        const street = $('#street_number').val()
                                        const email = $('#email').val()
                                        const city = $('#locality').val()
                                        const state = $('#state').val()
                                        const zip = $("#zip").val()
                                        const ipadr = null
                                        const data = `campid=C414B2A5CABC8B7B&property_ownership=${property_ownership}&electric_bill=${electric_bill}&roof_shade=${roof_shade}&first_name=${first_name}&last_name=${last_name}&phone_home=${phone_home}&street=${street}&email=${email}&city=${city}&state=${state}&zip=${zip}&solar_electric=true&ip_address=${ipadr}&xxTrustedFormCertUrl=${document.querySelector("#xxTrustedFormCertUrl_0").value}&s1=${affiliate}&s2=${transaction}`;
                                        console.log('tf data')
                                        console.log(data)
                                        if (state == "AZ") {
                                            payout = 20
                                        } else if (state == "CA") {
                                            payout = 40
                                        } else if (state == "CO") {
                                            payout = 20
                                        } else if (state == "CT") {
                                            payout = 15
                                        } else if (state == "FL") {
                                            payout = 20
                                        } else if (state == "HI") {
                                            payout = 40
                                        } else if (state == "ID") {
                                            payout = 10
                                        } else if (state == "IL") {
                                            payout = 20
                                        } else if (state == "MA") {
                                            payout = 20
                                        } else if (state == "MD") {
                                            payout = 25
                                        } else if (state == "MO") {
                                            payout = 10
                                        } else if (state == "NC") {
                                            payout = 10
                                        } else if (state == "NE") {
                                            payout = 10
                                        } else if (state == "NH") {
                                            payout = 15
                                        } else if (state == "NJ") {
                                            payout = 40
                                        } else if (state == "NM") {
                                            payout = 15
                                        } else if (state == "NV") {
                                            payout = 20
                                        } else if (state == "NY") {
                                            payout = 25
                                        } else if (state == "OH") {
                                            payout = 10
                                        } else if (state == "OK") {
                                            payout = 10
                                        } else if (state == "OR") {
                                            payout = 15
                                        } else if (state == "PA") {
                                            payout = 15
                                        } else if (state == "RI") {
                                            payout = 15
                                        } else if (state == "SC") {
                                            payout = 10
                                        } else if (state == "TX") {
                                            payout = 20
                                        } else if (state == "UT") {
                                            payout = 20
                                        } else if (state == "VA") {
                                            payout = 10
                                        }
                                        postCall("https://receiver.ceeleads.info/leads/post2", data).then(x => x.json()).then(x => {
                                            console.log(x);
                                            if (
                                                x.status === "POST_VALID"
                                            ) {
                                                fetch(`https://www.ecl2trk.com/?nid=1006&transaction_id=${transaction}&amount=${payout}`).then(

                                                    () => {
                                                        if (res.code === 200) {
                                                            const posted = res?.body?.posted || false;
                                                            if (posted) {
                                                                pollForSuccess(res.body.conversion_id, success);
                                                            } else {
                                                                measureSubmissionDuration.capture('complete');
                                                                success();
                                                            }
                                                        } else {

                                                            $("#loader").hide();
                                                            $('#form_box').show();
                                                            const question = res?.body?.question || 10;
                                                            const fieldName = getFieldName(question);
                                                            $('.btn-next').removeAttr('disabled');
                                                            progressFieldsetSteps(question, fieldName);
                                                            $("input, select").removeAttr('disabled', 'disabled');
                                                        }
                                                    }

                                                );
                                            } else {
                                                if (res.code === 200) {
                                                    const posted = res?.body?.posted || false;
                                                    if (posted) {
                                                        pollForSuccess(res.body.conversion_id, success);
                                                    } else {
                                                        measureSubmissionDuration.capture('complete');
                                                        success();
                                                    }
                                                } else {

                                                    $("#loader").hide();
                                                    $('#form_box').show();
                                                    const question = res?.body?.question || 10;
                                                    const fieldName = getFieldName(question);
                                                    $('.btn-next').removeAttr('disabled');
                                                    progressFieldsetSteps(question, fieldName);
                                                    $("input, select").removeAttr('disabled', 'disabled');
                                                }
                                            }
                                        });

                                    })
                            }
                        ].forEach(task => {
                            task();
                        });

                    }
                    return false;
                }

                // Help function to help with async calls, which need a callback
                function go_next() {
                    // Transition to the next step
                    let hasNext = progressFieldsetSteps(1);

                    if (hasNext && zip.is(":visible") && skip_zip) {
                        $(".btn-next, .quick-next").click();
                    }

                    // We're at the final step, submit data
                    if (!hasNext) {
                        $("#loader").show();
                        $('#form_box').hide();
                        window.top.scrollTo(0, 0);
                        dataLayer.push({
                            'event': 'Submit'
                        });
                        window._loq.push(["tag", 'Submit', true]);
                        gtag('event', 'page_view', {
                            page_title: "Submit (Loader)",
                            page_location: '/' + version + '/Submit',
                            page_path: '/' + version + '/Submit',
                            send_to: window.measurement_id
                        });
                        gtag('event', 'survey_step', {
                            event_category: 'survey',
                            event_label: 'Submit',
                            label: 'Submit'
                        });
                        $("input, select").removeAttr('disabled', 'disabled');
                        try {
                            grecaptcha.ready(function() {
                                grecaptcha.execute(rsitekey, {
                                    action: 'submit'
                                }).then(function(token) {
                                    // prepop the token in the hidden form field
                                    $('#recaptcha_token').val(token);
                                    submitForm();

                                }).catch(function(error) {
                                    // do nothing for now, not sure what to do with errors
                                    $('#recaptcha_err').val(error.toString());
                                    window._loq.push(["tag", 'Recaptcha Err', true]);
                                    submitForm();
                                });
                            });
                        } catch (error) {
                            window._loq.push(["tag", 'No Recaptcha', true]);
                            submitForm();
                        }
                    }
                }

                // if zip is visible, server side validation
                if (zip.is(":visible")) {
                    const postal = zip.val();
                    const state = getState(postal);
                    if (!state || state == 'none') {
                        displayError(zip, "unable to verify prefix");
                        return false;
                    }


                    working.show();
                    ajaxVerify("/papi/validate.php?op=location&version=v4&postal=" + postal, function(response) {

                        let details = response.body;
                        details = JSON.parse(details)
                        serverCity = details["place name"];
                        serverState = details.state;
                        serverZip = postal;
                        serverLong = details.longitude;
                        serverLat = details.latitude;
                        $('#locality').val(serverCity)
                        $('#zip').val(serverZip)
                        $('#state').val(serverState)


                        working.hide();
                        if (details.savings) {
                            exclusive_estimated_savings.text(details.savings.avg_lifetime_savings);
                            exclusive_state.text(details.savings.state);
                            exclusive_solar_system.text(details.savings.solar_system);
                            exclusive_monthly_bill.text(details.savings.typical_monthly_bill);
                        }
                        go_next();
                    }, function() {
                        working.hide();
                        displayError(zip, "unable to verify against DB");
                        window._loq.push(["tag", 'Zip Err', true]);
                    });
                }

                // if email is visible, server side validation
                if (email.is(":visible")) {
                    const value = email.val().toLowerCase();
                    const parts = value.split(".");
                    if (!parts.length) {
                        displayError(email, "unable to verify format");
                        return false;
                    }
                    if (!domain_tlds.includes(parts[parts.length - 1])) {
                        window._loq.push(["tag", 'TLD Error', true]);
                        displayError(email, "TLD could not be verified");
                        return false;
                    }

                    working.show();
                    const path = "/papi/validate.php?op=email&version=v4&address=" + value + "&zip=" + zip.val();
                    ajaxVerify(path,
                        function(data) {
                            working.hide();
                            window._loq.push(['custom', {
                                'email': value
                            }])
                            iwVerify(value, zip.val());
                            go_next();
                        },
                        function(data) {
                            working.hide();
                            displayError(email, "dns failure");
                            window._loq.push(["tag", 'MX Error', true]);
                            if (data.message) {
                                window._loq.push(["tag", data.message, true]);
                            }
                        });
                }

                // if phone is visible, server side validation
                if (phone.is(":visible")) {
                    const lookupValue = phone.val().replace(/\D/g, '');
                    if (lookupValue.length !== 10 && lookupValue.length !== 11) {
                        displayError(phone, "unable to match regex");
                        return false;
                    }
                    working.show();
                    const path = "/papi/validate.php?op=phone&number=" + lookupValue + "&version=v4";
                    ajaxVerify(path,
                        function() {
                            working.hide();
                            window._loq.push(['custom', {
                                'phone': lookupValue
                            }])
                            go_next();
                        },
                        function() {
                            working.hide();
                            phone.val('');
                            displayError(phone, "unable to verify server side");
                            window._loq.push(["tag", 'TWL Err', true]);
                        });
                }

                // proceed to next step as normal
                if (!email.is(":visible") && !phone.is(":visible") && !zip.is(":visible")) {
                    go_next();
                }
            };

            /**
             * Transition to previous step
             **/
            $(".btn-back").click(function(e) {
                progressFieldsetSteps(-1);
            });

            /**
             * Remove error class onkeyup
             **/
            $("input").keyup(function() {
                $(this).removeClass('error');
                const field_name = $(this).attr("name");
                $("#" + field_name + "_error").hide();
                $(".btn-next, .quick-next").removeAttr('disabled').removeAttr('address-user-verified');
                if (field_name == 'full_address') {
                    resetAddressVerification();
                }
            });

            /**
             * Capture character return keypress
             */
            $(document).keypress(function(e) {
                if (e.which == 13 || e.which == 39) {
                    $(".btn-next:visible, .quick-next:visible").click();
                }
            });
            //});

            /**
             * TCPA
             */
            $("#tcpa_label a").click(function(e) {
                e.preventDefault();
                $("#terms-php").hide();
                $("#privacy-php").hide();
                $("#companylist-php").hide();
                $('#tcpa-modal').show();
                var href = $(this).attr('href').replace(".", "-");
                $("#" + href).show();
                var scrollTo = $(this).data('scroll-to');
                var position = 0;
                if (scrollTo) {
                    //$("#" + href).scrollTo('#' + scrollTo);
                    document.getElementById(scrollTo).scrollIntoView();
                } else {
                    document.getElementById(href + "-top").scrollIntoView();
                }
            });

            $(".tcpa-close").click(function(e) {
                $('#tcpa-modal').hide();
            });

            /**
             * Listen for HTML5 validation issues and add an error class
             * to the element if one is found.
             */
            const inputs = document.querySelectorAll("input, select, textarea");
            inputs.forEach(input => {
                input.addEventListener("invalid", (e) => {
                        const name = e.target.id;
                        input.classList.add("error");
                        const err = document.getElementById(name + "_error");
                        if (err) {
                            err.style.display = 'block';
                        }
                        $.get("/papi/persist.php?op=error&sub_type=" + input.id + "&error=failed+html5+rule", function(data) {
                            /* do nothing */
                        });
                        toggleSubmitButtons(true);
                    },
                    false
                );
            });

            window.onload = function() {
                const input = document.getElementById("zip").focus();
            }
        }

        const focus = function() {
            startDate = new Date();
        };
        const blur = function() {
            const endDate = new Date();
            const spentTime = endDate.getTime() - startDate.getTime();
            elapsedTime += spentTime;
        };
        const beforeunload = function() {
            const endDate = new Date();
            const spentTime = endDate.getTime() - startDate.getTime();
            elapsedTime += spentTime;
            // elapsedTime contains the time spent on page in milliseconds
            $.get("/papi/persist.php?op=" + bounceType + "&duration=" + elapsedTime, function(data) {
                /* do nothing */
            });
        };
        window.addEventListener('focus', focus);
        window.addEventListener('blur', blur);
        window.addEventListener('beforeunload', beforeunload);

        document.addEventListener('DOMContentLoaded', function() {
            var dependencies = ["\/assets\/js\/jquery.min.js"];
            var dependencyChain = dependencies.reduce(function(p, href) {
                return p.then(function() {
                    return new Promise(function(resolve, reject) {
                        var script = document.createElement('script');
                        script.onload = function() {
                            resolve(true);
                        };
                        script.src = href;
                        document.body.appendChild(script);
                    });
                })
            }, Promise.resolve());
            dependencyChain.then(function() {
                Application();

                // persit view
                setTimeout(function() {
                    const tags = [];
                    $('.form-steps, .form-steps:hidden').each(function() {
                        tags.push($(this).data('tag'));
                    });
                    $.get("/papi/persist.php?op=pageview&sub_type=form&tags=" + encodeURIComponent(tags.join(',')), function(data) {
                        /* do nothing */
                    });
                }, 1500);

                function scrollEgngaged(event) {
                    $.get("/papi/persist.php?op=scrolled", function(data) {
                        /* do nothing */
                    });
                    document.removeEventListener('scroll', scrollEgngaged, true);
                }
                // persist engagement
                document.addEventListener('scroll', scrollEgngaged, true);


            });
        });
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F5GV70RRG0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-F5GV70RRG0');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5SLK4FV');
    </script>
    <!-- End Google Tag Manager -->


    <script type="text/javascript">
        (function() {
            var field = "xxTrustedFormCertUrl";
            var provideReferrer = false;
            var tf = document.createElement("script");
            tf.type = "text/javascript";
            tf.async = true;
            tf.src =
                "http" +
                ("https:" == document.location.protocol ? "s" : "") +
                "://api.trustedform.com/trustedform.js?provide_referrer=" +
                escape(provideReferrer) +
                "&field=" +
                escape(field) +
                "&l=" +
                new Date().getTime() +
                Math.random();
            var s = document.getElementsByTagName("script")[0];
            ``
            s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <script>
        const postCall = async (url, data) => {
            return await fetch(url, {
                method: "POST",
                body: new URLSearchParams(data),
            });
        }
    </script>



    <script>
        function aaa() {
            gtag('event', 'conversion', {
                'send_to': 'AW-11110630683/ z8FVCPiG748YEJuK-7Ep'
            });
        }

        document.querySelector("#q2-next").addEventListener("click", aaa)
    </script>

</body>

</html>