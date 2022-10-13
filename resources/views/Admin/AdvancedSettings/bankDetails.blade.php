@extends('partials.layoutAdmin')
@section('title', '- Bank Details')
    
@section('content')

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="dash" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">My Coin Auction</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(100vh - 70px);">
                    <ul class="nav pcoded-inner-navbar">
                        <li class="nav-item pcoded-menu-caption">
                            <label>Navigation</label>
                        </li>
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                            <a href="https://mca-official.live/dash" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Auction</label>
                        </li>
                        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Auction Menu</span></a>
                            <ul class="pcoded-submenu">
                                <li class=""><a href="https://mca-official.live/view_auction" class="">View Auction</a></li>
                                <li class=""><a href="https://mca-official.live/payment" class="">Pay Bids</a></li>
                                <li class=""><a href="https://mca-official.live/receive" class="">Receive Payments</a></li>
                                <li class=""><a href="https://mca-official.live/chat" class="">BID Messages</a></li>
                                <li class=""><a href="https://mca-official.live/sales" class="">Sale On Auction</a></li>
                                <li class=""><a href="https://mca-official.live/bonus" class="">Bonuses</a>
                                </li> <li class=""><a href="https://mca-official.live/affiliates" class="">Affiliates</a></li>
                                <li class=""><a href="https://mca-official.live/track" class="">Auction History</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Advanced Settings</label>
                        </li>
                        <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                                <a href="https://mca-official.live/banking" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Banking Details</span></a>
                            </li>
                            <li data-username="Table bootstrap datatable footable" class="nav-item">
                                <a href="https://mca-official.live/security" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Account Password</span></a>
                            </li>
                            <li class="nav-item pcoded-menu-caption">
                                <label>Authentication</label>
                            </li>
                            <li data-username="Sample Page" class="nav-item"><a href="https://mca-official.live/Login/logout" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Sign Out</span></a></li>
                        </ul>
                    </div>
                    <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 595.2px;"></div>
                    <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
            </div>
    </nav>


    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="dash" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                <span class="b-title">My Coin Auction</span>
            </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
        </div>
    </header>

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="page-header"></div>
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="mb-3">Banking Details</h5>
                                    <hr>
                                    <div class="accordion" id="accordionExample">
                                        <form method="post" action="https://mca-official.live/member/update_profile">
                                            <div class="card mb-4 py-3 border-left-primary">
                                                <div class="card-body">
                                                    <p></p>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Mobile Number</label>
                                                        <input type="text" class="custom-select" name="banking_status" value="disabled" hidden>
                                                        <input type="text" class="custom-select" placeholder="WhatsApp Number" name="phone" value="0636165353"  >
                                                        <small id="emailHelp" class="form-text text-muted">We'll never share this, its ony for all communications to you.</small>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Country Of Residence</label>
                                                        <select name="country" class="form-control form-control-alternative"required  >
                                                            <option selected hidden value="">  </option>
                                                            <option  value="South Africa" >South Africa </option>
                                                            <option value="Afganistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bonaire">Bonaire</option>
                                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Canary Islands">Canary Islands</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Channel Islands">Channel Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Island">Cocos Island</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaco">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="India">India</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea North">Korea North</option>
                                                            <option value="Korea Sout">Korea South</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Midway Islands">Midway Islands</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                            <option value="Nevis">Nevis</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau Island">Palau Island</option>
                                                            <option value="Palestine">Palestine</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Phillipines">Philippines</option>
                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                            <option value="St Eustatius">St Eustatius</option>
                                                            <option value="St Helena">St Helena</option>
                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                            <option value="St Lucia">St Lucia</option>
                                                            <option value="St Maarten">St Maarten</option>
                                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                            <option value="Saipan">Saipan</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="Samoa American">Samoa American</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Tahiti">Tahiti</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                            <option value="United States of America">United States of America</option>
                                                            <option value="Uraguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City State">Vatican City State</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                            <option value="Wake Island">Wake Island</option>
                                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                        <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                    </div>
                                                    <hr>
                                                    <p>
                                                        <label for="exampleInputEmail1">Select Banking Option</label>
                                                        <select name="banking_option" class="form-control form-control-alternative" required=""  >
                                                            <option selected hidden value=></option>
                                                            <option  disabled="">Select Banking Options</option>
                                                            <option value="Local Currency">Local Currency</option>
                                                            <!-- <option value="">Crypto Currency</option> -->
                                                        </select>
                                                    </p>
                                                    <div id="cont" style="display: block;">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bank To Receive Funds</label>
                                                            <select  name="bank" class="form-control form-control-alternative" required=""  >
                                                                <option  value="" selected="" hidden="">Your Bank Is  </option>
                                                                <optgroup label="South Africa Banks">
                                                                    <option value="Absa South Africa">Absa South Africa</option>
                                                                    <option value="African Bank South Africa">African Bank South Africa</option>
                                                                    <option value="Bidvest South Africa">Bidvest South Africa</option>
                                                                    <option value="Capitec South Africa">Capitec South Africa</option>
                                                                    <option value="Discovery South Africa">Discovery South Africa</option>
                                                                    <option value="FNB South Africa">FNB South Africa</option>
                                                                    <option value="Grindrod South Africa">Grindrod South Africa</option>
                                                                    <option value="Access (GroBank) South Africa">Access (GroBank) South Africa</option>
                                                                    <option value="Imperial South Africa">Imperial South Africa</option>
                                                                    <option value="Investec South Africa">Investec South Africa</option>
                                                                    <option value="Nedbank South Africa">Nedbank South Africa</option>
                                                                    <option value="Sasfin South Africa">Sasfin South Africa</option>
                                                                    <option value="Standard South Africa">Standard South Africa</option>
                                                                    <option value="TymeBank South Africa">TymeBank South Africa</option>
                                                                </optgroup>
                                                                <optgroup label="Botswana Banks">
                                                                    <option value="Absa Botswana">Absa Botswana</option>
                                                                    <option value="BancABC Botswana">BancABC Botswana</option>
                                                                    <option value="First Capital Botswana">First Capital Botswana</option>
                                                                    <option value="FNB Botswana">FNB Botswana</option>
                                                                    <option value="Stanbic Botswana">Stanbic Botswana</option>
                                                                    <option value="Standard Botswana">Standard Botswana</option>
                                                                </optgroup>
                                                                <optgroup label="Namibia Banks">
                                                                    <option value="Bank Windhoek Namibia">Bank Windhoek Namibia</option>
                                                                    <option value="FNB Namibia">FNB Namibia</option>
                                                                    <option value="Nedbank Namibia">Nedbank Namibia</option>
                                                                    <option value="Standard Namibia">Standard Namibia</option>
                                                                    <option value="Trustco Namibia">Trustco Namibia</option>
                                                                    <option value="Banco Atlantico Namibia">Banco Atlantico Namibia</option>
                                                                    <option value="Bank BIC Namibia">Bank BIC Namibia</option>
                                                                    <option value="Letshego Namibia">Letshego Namibia</option>
                                                                </optgroup>
                                                                <optgroup label="Swaziland Banks">
                                                                    <option value="Nedbank Swaziland">Nedbank Swaziland</option>
                                                                    <option value="Standard Swaziland">Standard Swaziland</option>
                                                                    <option value="FNB Swaziland">FNB Swaziland</option>
                                                                </optgroup>
                                                                <optgroup label="Lesotho Banks">
                                                                    <option value="Standard Lesotho">Standard Lesotho</option>
                                                                    <option value="Nedbank Lesotho">Nedbank Lesotho</option>
                                                                    <option value="FNB Lesotho">FNB Lesotho</option>
                                                                    <option value="Mpesa (Vodacom) Lesotho">Mpesa (Vodacom) Lesotho</option>
                                                                </optgroup>
                                                                <optgroup label="Zambia Banks">
                                                                    <option value="Absa Zambia">Absa Zambia</option>
                                                                    <option value="Access Zambia">Access Zambia</option>
                                                                    <option value="Ecobank Zambia">Ecobank Zambia</option>
                                                                    <option value="First Alliance Zambia">First Alliance Zambia</option>
                                                                    <option value="First Capital Zambia">First Capital Zambia</option>
                                                                    <option value="FNB Zambia">FNB Zambia</option>
                                                                    <option value="Investrust Zambia">Investrust Zambia</option>
                                                                    <option value="Stanbic Zambia">Stanbic Zambia</option>
                                                                    <option value="Standard Chartered Zambia">Standard Chartered Zambia</option>
                                                                    <option value="ZANACO Zambia">ZANACO Zambia</option>
                                                                </optgroup>
                                                                <optgroup label="Mpesa Payments">
                                                                    <option value="Mpesa Kenya">Mpesa Kenya</option>
                                                                    <option value="Mpesa Mozambique">Mpesa Mozambique</option>
                                                                    <option value="Mpesa DRC">Mpesa DRC</option>
                                                                    <option value="Mpesa Tanzania">Mpesa Tanzania</option>
                                                                    <option value="Vodafone Cash Egypt">Vodafone Cash Egypt</option>
                                                                    <option value="Vodafone Cash Ghana">Vodafone Cash Ghana</option>
                                                                </optgroup>
                                                            </select>
                                                            <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Account Holder Name</label>
                                                            <input type="text" class="custom-select" placeholder="Account Name" name="ah_name" value=""  >
                                                            <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Account Number</label>
                                                            <input type="text" class="custom-select" placeholder="Account Number" name="account_no" value=""  >
                                                            <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Account Type</label>
                                                            <select id="acc_type" name="bank_type" class="form-control form-control-alternative" required  >
                                                                <option selected hidden value="">  </option>
                                                                <option   value="Savings">Its A Savings Account</option>
                                                                <option value="Cheque">Cheque</option>
                                                                <option value="Savings">Savings</option>
                                                                <option value="Current">Current</option>
                                                                <option value="Investment">Investment</option>
                                                            </select>
                                                            <small  class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Branch Code</label>
                                                            <input type="text" class="custom-select" placeholder="Branch" name="bank_branch" value="" required  >
                                                            <small  class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <!--
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">Notes To Display To The Buyer </label>
                                                    <textarea cols="30" rows="10" class="form-control" name="notes"  ></textarea>
                                                    <small id="emailHelp" class="form-text text-muted">We'll show this to buyers making payments to you.</small>
                                                    </div>
                                                    <hr>
                                                    -->

                                                    <button type="submit" class="btn btn-primary btn-icon-split"  >
                                                        <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                        </span>
                                                        <span class="text">Save</span>
                                                    </button>
    

                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.twakJS')

@endsection



