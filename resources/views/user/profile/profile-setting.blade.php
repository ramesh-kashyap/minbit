<div class="dashboard_content">
    <div class="title__row d-flex align-items-center justify-content-between mb_50">
        <h2>Profile</h2>

        <div class="search__block">
            <input class="currency__search" type="text" placeholder="Search  for a coins...">
        </div>

        <script>
            jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function (arg) {
                return function (elem) {
                    return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
                };
            });

            $('.currency__search').on('keyup', function () {
                var searchVal = $(this).val();
                var filterItems = $('.deposit__item');

                if (searchVal != '') {

                    filterItems.parent().hide();
                    $('.deposit__name span:Contains("' + searchVal + '")').parent().parent().parent().parent()
                        .show();

                    if ($(".deposit__item").is(":visible")) {
                        $(".search__none").hide();
                    } else {
                        $(".search__none").show();
                    }

                } else {
                    filterItems.parent().show();
                    $(".search__none").hide();
                }
            });
        </script>


    </div>

    <div class="dashboard_head search__none" style="display:none;">
        <div class="suuport__line">
            <p>
                <img src="./images/support_icon1.svg" alt="">
                Where are no coins or tokens matching your search request!
            </p>
        </div>
    </div>

    <form action="{{ route('user.update-profile') }}" method="post">
                                
                                {{ csrf_field() }}
    <div class="deposit__list row">
        

        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span>Your Login</span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  id="lastname"value="{{ $profile_data ? $profile_data->username : '' }}" readonly disabled class="form-control" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> Name </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button" id="username" value="{{ $profile_data ? $profile_data->name : '' }}" name="name" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> Email </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input class="btn__generate btc_deposit_button"  type="email" id="email" value="{{ $profile_data ? $profile_data->email : '' }}" readonly disabled >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> Phone </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input id="phone" name="phone" type="text" class="btn__generate btc_deposit_button"  value="{{ $profile_data ? $profile_data->phone : '' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> Country</span>
                    </div>
                </div>
                <div class="deposit__generate" style="overflow:unset">                    
                    <select type="text" class="btn__generate btc_deposit_button"  name="country" id="language_id"  style="max-width:200px !important;">
                    <option selected>
                                                {{ $profile_data ? $profile_data->country : '' }}
                                            </option>
                                            <option value="AFGHANISTAN">
                                                AFGHANISTAN</option>
                                            <option value="ALBANIA">ALBANIA
                                            </option>
                                            <option value="ALGERIA">ALGERIA
                                            </option>
                                            <option value="AMERICAN SAMOA">
                                                AMERICAN SAMOA</option>
                                            <option value="ANDORRA">ANDORRA
                                            </option>
                                            <option value="ANGOLA">ANGOLA
                                            </option>
                                            <option value="ANGUILLA">ANGUILLA
                                            </option>
                                            <option value="ANTARCTICA">
                                                ANTARCTICA</option>
                                            <option value="ANTIGUA AND BARBUDA">
                                                ANTIGUA AND BARBUDA</option>
                                            <option value="ARGENTINA">
                                                ARGENTINA</option>
                                            <option value="ARMENIA">ARMENIA
                                            </option>
                                            <option value="ARUBA">ARUBA
                                            </option>
                                            <option value="AUSTRALIA">
                                                AUSTRALIA</option>
                                            <option value="AUSTRIA">AUSTRIA
                                            </option>
                                            <option value="AZERBAIJAN">
                                                AZERBAIJAN</option>
                                            <option value="BAHAMAS">BAHAMAS
                                            </option>
                                            <option value="BAHRAIN">BAHRAIN
                                            </option>
                                            <option value="BANGLADESH">
                                                BANGLADESH</option>
                                            <option value="BARBADOS">
                                                BARBADOS</option>
                                            <option value="BELARUS">BELARUS
                                            </option>
                                            <option value="BELGIUM">BELGIUM
                                            </option>
                                            <option value="BELIZE">BELIZE
                                            </option>
                                            <option value="BENIN">BENIN
                                            </option>
                                            <option value="BERMUDA">BERMUDA
                                            </option>
                                            <option value="BHUTAN">BHUTAN
                                            </option>
                                            <option value="BOLIVIA">BOLIVIA
                                            </option>
                                            <option value="BOSNIA AND HERZEGOVINA">
                                                BOSNIA AND HERZEGOVINA
                                            </option>
                                            <option value="BOTSWANA">
                                                BOTSWANA</option>
                                            <option value="BOUVET ISLAND">
                                                BOUVET ISLAND</option>
                                            <option value="BRAZIL">BRAZIL
                                            </option>
                                            <option value="BRITISH INDIAN OCEAN TERRITORY">
                                                BRITISH INDIAN OCEAN
                                                TERRITORY</option>
                                            <option value="BRUNEI DARUSSALAM">
                                                BRUNEI DARUSSALAM</option>
                                            <option value="BULGARIA">
                                                BULGARIA</option>
                                            <option value="BURKINA FASO">
                                                BURKINA FASO</option>
                                            <option value="BURUNDI">BURUNDI
                                            </option>
                                            <option value="CAMBODIA">
                                                CAMBODIA</option>
                                            <option value="CAMEROON">
                                                CAMEROON</option>
                                            <option value="CANADA">CANADA
                                            </option>
                                            <option value="CAPE VERDE">CAPE
                                                VERDE</option>
                                            <option value="CAYMAN ISLANDS">
                                                CAYMAN ISLANDS</option>
                                            <option value="CENTRAL AFRICAN REPUBLIC">
                                                CENTRAL AFRICAN REPUBLIC
                                            </option>
                                            <option value="CHAD">CHAD
                                            </option>
                                            <option value="CHILE">CHILE
                                            </option>
                                            <option value="CHINA">CHINA
                                            </option>
                                            <option value="CHRISTMAS ISLAND">
                                                CHRISTMAS ISLAND</option>
                                            <option value="COCOS (KEELING) ISLANDS">
                                                COCOS (KEELING) ISLANDS
                                            </option>
                                            <option value="COLOMBIA">
                                                COLOMBIA</option>
                                            <option value="COMOROS">COMOROS
                                            </option>
                                            <option value="CONGO">CONGO
                                            </option>
                                            <option value="CONGO, THE DEMOCRATIC REPUBLIC OF THE">
                                                CONGO, THE DEMOCRATIC
                                                REPUBLIC OF THE</option>
                                            <option value="COOK ISLANDS">
                                                COOK ISLANDS</option>
                                            <option value="COSTA RICA">COSTA
                                                RICA</option>
                                            <option value="COTE D'IVOIRE">
                                                COTE D'IVOIRE</option>
                                            <option value="CROATIA">CROATIA
                                            </option>
                                            <option value="CUBA">CUBA
                                            </option>
                                            <option value="CYPRUS">CYPRUS
                                            </option>
                                            <option value="CZECH REPUBLIC">
                                                CZECH REPUBLIC</option>
                                            <option value="DENMARK">DENMARK
                                            </option>
                                            <option value="DJIBOUTI">
                                                DJIBOUTI</option>
                                            <option value="DOMINICA">
                                                DOMINICA</option>
                                            <option value="DOMINICAN REPUBLIC">
                                                DOMINICAN REPUBLIC</option>
                                            <option value="ECUADOR">ECUADOR
                                            </option>
                                            <option value="EGYPT">EGYPT
                                            </option>
                                            <option value="EL SALVADOR">EL
                                                SALVADOR</option>
                                            <option value="EQUATORIAL GUINEA">
                                                EQUATORIAL GUINEA</option>
                                            <option value="ERITREA">ERITREA
                                            </option>
                                            <option value="ESTONIA">ESTONIA
                                            </option>
                                            <option value="ETHIOPIA">
                                                ETHIOPIA</option>
                                            <option value="FALKLAND ISLANDS (MALVINAS)">
                                                FALKLAND ISLANDS (MALVINAS)
                                            </option>
                                            <option value="FAROE ISLANDS">
                                                FAROE ISLANDS</option>
                                            <option value="FIJI">FIJI
                                            </option>
                                            <option value="FINLAND">FINLAND
                                            </option>
                                            <option value="FRANCE">FRANCE
                                            </option>
                                            <option value="FRENCH GUIANA">
                                                FRENCH GUIANA</option>
                                            <option value="FRENCH POLYNESIA">
                                                FRENCH POLYNESIA</option>
                                            <option value="FRENCH SOUTHERN TERRITORIES">
                                                FRENCH SOUTHERN TERRITORIES
                                            </option>
                                            <option value="GABON">GABON
                                            </option>
                                            <option value="GAMBIA">GAMBIA
                                            </option>
                                            <option value="GEORGIA">GEORGIA
                                            </option>
                                            <option value="GERMANY">GERMANY
                                            </option>
                                            <option value="GHANA">GHANA
                                            </option>
                                            <option value="GIBRALTAR">
                                                GIBRALTAR</option>
                                            <option value="GREECE">GREECE
                                            </option>
                                            <option value="GREENLAND">
                                                GREENLAND</option>
                                            <option value="GRENADA">GRENADA
                                            </option>
                                            <option value="GUADELOUPE">
                                                GUADELOUPE</option>
                                            <option value="GUAM">GUAM
                                            </option>
                                            <option value="GUATEMALA">
                                                GUATEMALA</option>
                                            <option value="GUINEA">GUINEA
                                            </option>
                                            <option value="GUINEA-BISSAU">
                                                GUINEA-BISSAU</option>
                                            <option value="GUYANA">GUYANA
                                            </option>
                                            <option value="HAITI">HAITI
                                            </option>
                                            <option value="HEARD ISLAND AND MCDONALD ISLANDS">
                                                HEARD ISLAND AND MCDONALD
                                                ISLANDS</option>
                                            <option value="HOLY SEE (VATICAN CITY STATE)">
                                                HOLY SEE (VATICAN CITY STATE)
                                            </option>
                                            <option value="HONDURAS">
                                                HONDURAS</option>
                                            <option value="HONG KONG">HONG
                                                KONG</option>
                                            <option value="HUNGARY">HUNGARY
                                            </option>
                                            <option value="ICELAND">ICELAND
                                            </option>
                                            <option value="INDIA">INDIA
                                            </option>
                                            <option value="INDONESIA">
                                                INDONESIA</option>
                                            <option value="IRAN, ISLAMIC REPUBLIC OF">
                                                IRAN, ISLAMIC REPUBLIC OF
                                            </option>
                                            <option value="IRAQ">IRAQ
                                            </option>
                                            <option value="IRELAND">IRELAND
                                            </option>
                                            <option value="ISRAEL">ISRAEL
                                            </option>
                                            <option value="ITALY">ITALY
                                            </option>
                                            <option value="JAMAICA">JAMAICA
                                            </option>
                                            <option value="JAPAN">JAPAN
                                            </option>
                                            <option value="JORDAN">JORDAN
                                            </option>
                                            <option value="KAZAKHSTAN">
                                                KAZAKHSTAN</option>
                                            <option value="KENYA">KENYA
                                            </option>
                                            <option value="KIRIBATI">
                                                KIRIBATI</option>
                                            <option value="KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF">
                                                KOREA, DEMOCRATIC PEOPLE'S
                                                REPUBLIC OF</option>
                                            <option value="KOREA, REPUBLIC OF">
                                                KOREA, REPUBLIC OF</option>
                                            <option value="KUWAIT">KUWAIT
                                            </option>
                                            <option value="KYRGYZSTAN">
                                                KYRGYZSTAN</option>
                                            <option value="LAO PEOPLE'S DEMOCRATIC REPUBLIC">
                                                LAO PEOPLE'S DEMOCRATIC
                                                REPUBLIC</option>
                                            <option value="LATVIA">LATVIA
                                            </option>
                                            <option value="LEBANON">LEBANON
                                            </option>
                                            <option value="LESOTHO">LESOTHO
                                            </option>
                                            <option value="LIBERIA">LIBERIA
                                            </option>
                                            <option value="LIBYAN ARAB JAMAHIRIYA">
                                                LIBYAN ARAB JAMAHIRIYA
                                            </option>
                                            <option value="LIECHTENSTEIN">
                                                LIECHTENSTEIN</option>
                                            <option value="LITHUANIA">
                                                LITHUANIA</option>
                                            <option value="LUXEMBOURG">
                                                LUXEMBOURG</option>
                                            <option value="MACAO">MACAO
                                            </option>
                                            <option value="MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF">
                                                MACEDONIA, THE FORMER
                                                YUGOSLAV REPUBLIC OF</option>
                                            <option value="MADAGASCAR">
                                                MADAGASCAR</option>
                                            <option value="MALAWI">MALAWI
                                            </option>
                                            <option value="MALAYSIA">
                                                MALAYSIA</option>
                                            <option value="MALDIVES">
                                                MALDIVES</option>
                                            <option value="MALI">MALI
                                            </option>
                                            <option value="MALTA">MALTA
                                            </option>
                                            <option value="MARSHALL ISLANDS">
                                                MARSHALL ISLANDS</option>
                                            <option value="MARTINIQUE">
                                                MARTINIQUE</option>
                                            <option value="MAURITANIA">
                                                MAURITANIA</option>
                                            <option value="MAURITIUS">
                                                MAURITIUS</option>
                                            <option value="MAYOTTE">MAYOTTE
                                            </option>
                                            <option value="MEXICO">MEXICO
                                            </option>
                                            <option value="MICRONESIA, FEDERATED STATES OF">
                                                MICRONESIA, FEDERATED STATES
                                                OF</option>
                                            <option value="MOLDOVA, REPUBLIC OF">
                                                MOLDOVA, REPUBLIC OF</option>
                                            <option value="MONACO">MONACO
                                            </option>
                                            <option value="MONGOLIA">
                                                MONGOLIA</option>
                                            <option value="MONTSERRAT">
                                                MONTSERRAT</option>
                                            <option value="MOROCCO">MOROCCO
                                            </option>
                                            <option value="MOZAMBIQUE">
                                                MOZAMBIQUE</option>
                                            <option value="MYANMAR">MYANMAR
                                            </option>
                                            <option value="NAMIBIA">NAMIBIA
                                            </option>
                                            <option value="NAURU">NAURU
                                            </option>
                                            <option value="NEPAL">NEPAL
                                            </option>
                                            <option value="NETHERLANDS">
                                                NETHERLANDS</option>
                                            <option value="NETHERLANDS ANTILLES">
                                                NETHERLANDS ANTILLES</option>
                                            <option value="NEW CALEDONIA">
                                                NEW CALEDONIA</option>
                                            <option value="NEW ZEALAND">NEW
                                                ZEALAND</option>
                                            <option value="NICARAGUA">
                                                NICARAGUA</option>
                                        </select>
                </select>
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                        <!-- <img src="./images/calc_icons/eth.png" alt=""> -->
                    </div>
                    <div class="deposit__name">
                        <span> ETH </span>
                    </div>
                </div>
                <div class="deposit__generate">
                    <div class="deposit__address eth_deposit_curr">
                        <p class="address copy_text">
                        </p>
                        <button class="btn__copy button_open_dep" data-currency="ETH" data-wallet="" data-tag=""
                            data-full="Ethereum">
                            <img src="./images/icon_copy.svg" alt="">
                        </button>
                    </div>
                    <button class="btn__generate eth_deposit_button" data-currency="ETH" data-full="Ethereum">
                        <img src="./images/icon_generate.svg" alt="">
                        Generate address
                    </button>
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>


        
        <div class="col-lg-4 col-xl-3 col-md-4 col-sm-6 mb_30">
            <div class="deposit__item">
                <div class="deposit__info d-flex align-items-end mb_10">
                    <div class="icon ">
                    </div>
                    <div class="deposit__name">
                        <span> BTC </span>
                    </div>
                </div>
                <div class="deposit__generate">                    
                    <input type="text" class="btn__generate btc_deposit_button"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}" >
                     
                </div>
            </div>
        </div>

</div>
</form>
    </div>


</div>
</div>

</div>
</div>