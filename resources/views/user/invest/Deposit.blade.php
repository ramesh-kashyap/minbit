<style>
    .custom-input,
    .custom-select {
        width: 100%;
        /* Adjust width as needed */
        height: 40px;
        /* Adjust height as needed */
        padding: 10px;
        font-size: 16px;
        border: 2px solid #7E7EE2;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>




<div class="dashboard_content">


    <div class="deposit__list row">

        <div class="modal__body modal__deposit address" style="visibility: visible; display: flex; width:50%">
            <div class="modal__inner">
                <form id="deposit_form" class="contact__form"
                    action="{{ route('user.fundActivation') }}" method="post" id="invest-form">
                    {{ csrf_field() }}
                    <div class="modal__header">
                        <h2 class="modal__title" style="">
                            Deposit
                            <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
                        </h2>
                        <span class="modal__close"></span>
                    </div>
                    <input type="hidden" name="minimum_amount" id="minimum_amount">
                    <input type="hidden" name="maximum_amount" id="maximum_amount">
                    <input type="hidden" name="plan" id="plan-name">

                    <!-- <ul class="deposit_milist">
                        <li>Payment coin:</li>
                        <li id="deposit_coin_name">Tether TRC20</li>
                    </ul> -->

                    <br>
                    <div id="dep_address" class="search__block_input" style="">
                        <div class="modal__input-title">Payment address:</div>
                        <div class="search__block">
                            <select id="deposit_address" name="paymentMode" class="custom-select">
                                <option value="INR">INR</option>
                                <option value="USDT">USDT</option>
                            </select>
                            <!-- <span class="modal__copy-btn copy__payment"></span> -->
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Amount:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search"  name="amount" id="amount" id="deposit_amount" value=""
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">

                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Member Id:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search"  name="user_id" id="amount" id="deposit_amount" value=""
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">

                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">T-Password:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search"  name="transaction_id" id="amount" id="deposit_amount" value=""
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">

                        </div>
                    </div>

					<div class="modal__item-input" style="visibility:hidden; height:0px;">
                        <div class="modal__input-title">T-Password:</div>
                        <div class="modal__deposit-cover-row">
                            <input type="text" class="currency__search"  name="transaction_id" id="amount" id="deposit_amount" value=""
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">

                        </div>
                    </div>

                    <input type="hidden" name="plan_id" class="plan-id">
                    <div id="dep_tag" class="search__block_input" style="display: none;">
                        <div class="modal__input-title">Payment tag (memo):</div>
                        <div class="search__block">
                            <!-- <input id="deposit_tag" name="tag" type="text" value="" placeholder="" disabled=""> -->
                            <span class="modal__copy-btn copy__payment"></span>
                        </div>
                    </div>


                    <input id="deposit_cur" type="hidden" name="currency" value="usdt.trc20" placeholder="">
                    <input id="deposit_id" type="hidden" name="deposit_id" value="">
                    <input id="_token" type="hidden" name="_token" value="65d9c7945ac2e153d72230e388744c1d41">
                    <input id="post_ajax" type="hidden" name="_token" value="/data/deposit/depositKassa.php">

                    <div class="modal__button modal__form-bottom">
                        <button id="make_deposit" class="submit-btn" type="button">Deposit</button>
                    </div>



                </form>
            </div>
        </div>




    </div>
    <div class="title__row d-flex align-items-center justify-content-between mb_30">
        <h2 style="padding-top:20px">History</h2>
    </div>
    <div class="list__hisory mb_40">
        <div class="d-flex mb_40">
            <div class="list__btns">
                <button class="list__btn check">Transactions</button>
            </div>
        </div>
        <div class="coins__list active transactions" id="depsoits_history">
            <div class="coins__row coins__row_title">
                <p class="coins__item">Coin:</p>
                <p class="coins__item">Power:</p>
                <p class="coins__item">Deposit:</p>
                <p class="coins__item coins__item_color">Expires:</p>
                <p class="coins__item">Status:</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>





<div class="cabinet__page inner__page deposit" style="display: none">
    <div class="cabinet__table inner__page-conteiner">


        <div class="cabinet__cotainer article__coteiner">

            <div class="cabinet__article-conteiner">
                <div class="cabinet__fixed-conteiner">
                    <div class="cabinetHeader-title">
                        <h1>Deposit</h1>
                    </div>

                    <div class="cabinetDescriptin">
                        <div class="cD__text">
                            <p>In this section, you will be able to familiarize yourself with various payment systems
                                offered for your convenience in order to make a deposit in a format that is convenient
                                for you.</p>
                        </div>
                    </div>

                    <div class="calcuator__section calcPage calcBody" style="display: none">
                        <div class="calculator__article calcInner">
                            <div class="profit__calc-body calculatorTable">
                                <div class="pcb__top-row">
                                    <div class="calc__maintitle aos-init aos-animate" data-aos="animation">New deposit
                                    </div>
                                    <div class="calc__choose__text aos-init aos-animate" data-aos="animation">Choose a
                                        deposit coin:
                                        <strong id="fullNameDep">Bitcoin</strong></div>
                                    <div class="calc__select-list">
                                        <ul class="csl__list">

                                        </ul>
                                    </div>
                                    <div class="profit__action-table">
                                        <div class="pat__column aos-init aos-animate" data-aos="animation">
                                            <div class="calc__action-cover">
                                                <div class="calc__action-label">Coins amount to invest:</div>
                                                <div class="calc__action-input calc__amount">
                                                    <input type="text" value="" placeholder="Enter Coin"
                                                        id="crypto_ammount"></div>
                                            </div>
                                        </div>
                                        <div class="pat__column aos-init aos-animate" data-aos="animation">
                                            <div class="calc__action-cover">
                                                <div class="calc__action-label">USD amount to invest:</div>
                                                <div class="calc__action-input calc__usd">
                                                    <input type="text" value="10" placeholder="Enter USD"
                                                        id="usd_ammount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pat__column aos-init aos-animate" data-aos="animation">
                                            <div class="calc__action-cover">
                                                <div class="calc__action-label">&nbsp;</div>
                                                <button
                                                    class="calDepost depositNow-action calc__deposit-btn calc__reload-result"
                                                    id="make_deposit" data-full="Bitcoin" data-currency="btc"
                                                    data-ammount="1">
                                                    Deposit Now
                                                    <svg>
                                                        <use href="images/packIcons.svg#arrowRightTop"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                        <span style="display: none;" id="invest_curr" class="short-name">btc</span>
                                        <span style="display: none;" id="mining_curr" class="short-name">usdt</span>
                                    </div>
                                </div>
                                <div class="pcb__bottom-row">
                                    <div class="calc__profit-table">
                                        <div class="cpt__item aos-init aos-animate" data-aos="animation">
                                            <div class="cpti__icon"></div>
                                            <div class="cpti__details">
                                                <div class="cptid__label">POWER</div>
                                                <div class="cptid__data">
                                                    <f class="cptid__data" id="buy_power">450</f> VH/s
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cpt__item aos-init aos-animate" data-aos="animation">
                                            <div class="cpti__icon"></div>
                                            <div class="cpti__details">
                                                <div class="cptid__label">plan</div>
                                                <div class="cptid__data">
                                                    <f class="cptid__data" id="buy_percent">2%</f> per day
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cpt__item aos-init aos-animate" data-aos="animation">
                                            <div class="cpti__icon"></div>
                                            <div class="cpti__details">
                                                <div class="cptid__label">profit</div>
                                                <div class="cptid__data">
                                                    <f class="cptid__data" id="buy_profit">$ 16.00</f>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p style="color: #fff;text-align: center;padding: 10px 50px;font-size: 14px;">
                                        This calculator computes the amount of profit you will receive in 100 days from
                                        now.

                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="dashboardStats">
                        <h2 data-aos="animation" class="aos-init aos-animate">Active deposits</h2>
                        <ul class="transaction__list-info recent__table aos-init aos-animate" data-aos="animation">
                            <li class="transaction__table-header">
                                <ul class="transaction__table-row">
                                    <li class="transaction__item-row row-size6"><span>Power</span></li>
                                    <li class="transaction__item-row row-size5"><span>Deposit</span></li>
                                    <li class="transaction__item-row row-size5"><span>Expires</span></li>
                                    <li class="transaction__item-row row-size6"><span>Status</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>


            <div class="exchange__rates-section">
                <ul class="exchange__run__curs" style="height: 62px">


                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="BTC__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">BTC</div>
                                <div class="crypt__data climb">65220.10585018</div>
                                <div style="display: none" id="BTC_price">65220.10585018</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="ADA__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">ADA</div>
                                <div class="crypt__data climb">0.39006236</div>
                                <div style="display: none" id="ADA_price">0.39006236</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="BCH__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">BCH</div>
                                <div class="crypt__data climb">391.44826950</div>
                                <div style="display: none" id="BCH_price">391.44826950</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="TRX__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">TRX</div>
                                <div class="crypt__data climb">0.11610613</div>
                                <div style="display: none" id="TRX_price">0.11610613</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="DOGE__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">DOGE</div>
                                <div class="crypt__data climb">0.12329940</div>
                                <div style="display: none" id="DOGE_price">0.12329940</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="LTC__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">LTC</div>
                                <div class="crypt__data climb">74.21508842</div>
                                <div style="display: none" id="LTC_price">74.21508842</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="BNB__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">BNB</div>
                                <div class="crypt__data climb">600.56144908</div>
                                <div style="display: none" id="BNB_price">600.56144908</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="SHIB__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">SHIB</div>
                                <div class="crypt__data climb">0.00001838</div>
                                <div style="display: none" id="SHIB_price">0.00001838</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="LINK__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">LINK</div>
                                <div class="crypt__data climb">14.48175291</div>
                                <div style="display: none" id="LINK_price">14.48175291</div>
                            </div>
                        </div>
                    </li>




                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="ETH__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">ETH</div>
                                <div class="crypt__data climb">3567.96902293</div>
                                <div style="display: none" id="ETH_price">3567.96902293</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="ETC__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">ETC</div>
                                <div class="crypt__data climb">24.15545482</div>
                                <div style="display: none" id="ETC_price">24.15545482</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="XRP__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">XRP</div>
                                <div class="crypt__data climb">0.49397312</div>
                                <div style="display: none" id="XRP_price">0.49397312</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="DOT__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">DOT</div>
                                <div class="crypt__data climb">5.85831140</div>
                                <div style="display: none" id="DOT_price">5.85831140</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="USDT__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">USDT</div>
                                <div class="crypt__data climb">0.99973663</div>
                                <div style="display: none" id="USDT_price">0.99973663</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="ZEC__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">ZEC</div>
                                <div class="crypt__data climb">20.27109036</div>
                                <div style="display: none" id="ZEC_price">20.27109036</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="MATIC__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">MATIC</div>
                                <div class="crypt__data climb">0.57869085</div>
                                <div style="display: none" id="MATIC_price">0.57869085</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="SOL__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">SOL</div>
                                <div class="crypt__data climb">133.84326584</div>
                                <div style="display: none" id="SOL_price">133.84326584</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="DASH__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">DASH</div>
                                <div class="crypt__data climb">23.88956535</div>
                                <div style="display: none" id="DASH_price">23.88956535</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="XMR__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">XMR</div>
                                <div class="crypt__data climb">170.88777507</div>
                                <div style="display: none" id="XMR_price">170.88777507</div>
                            </div>
                        </div>
                    </li>
                    <li class="crypt__courses-item ">
                        <div class="crypt__courses-body">
                            <div class="crypt__logotype"><i class="BNB__logo"></i></div>
                            <div class="crypt__curse-info">
                                <div class="crypt__name">BNB</div>
                                <div class="crypt__data climb">600.56144908</div>
                                <div style="display: none" id="BNB_price">600.56144908</div>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>

        </div>


    </div>


    <script>
        $(".get__bonus-button, .bonus_page_href").click(function () {
            window.location.href = '/bonus';
        });
    </script>
