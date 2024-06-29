<style>
    .custom-input,
    .custom-select {
        width: 100%;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #7E7EE2;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .alert {
        display: none;
        margin-top: 20px;
        padding: 10px;
        color: #fff;
        background-color: #f44336; /* Red */
        border-radius: 4px;
    }

    .hidden {
            display: none;
        }
        .message {
            display: none;
            font-size: 18px;
            color: red;
        }
</style>

<div class="dashboard_content">
    <div class="alert" id="error-alert"></div>
    <div class="deposit__list row">
        <div class="modal__body modal__deposit address col-12 col-lg-6 mb_20" style="visibility: visible; display: flex; width:100%; max-width: 500px;">
            <div class="modal__inner">
                <form class="contact__form" action="{{route('user.reinvest')}}" method="POST" id="invest-form">
                      @csrf
                <div class="modal__header">
                        <h2 class="modal__title">
                            Re-invest
                            <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
                        </h2>
                        <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}
                                    </p>
                        <span class="modal__close"></span>
                    </div>
                    <!-- <input type="hidden" name="minimum_amount" id="minimum_amount">
                    <input type="hidden" name="maximum_amount" id="maximum_amount">
                    <input type="hidden" name="plan" id="plan-name"> -->
                    <br>
                    
                    <div class="search__block_input">
                        <div class="modal__input-title">Amount:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search" name="amount" id="amount" placeholder="Enter Amount">
                        </div>
                    </div>
                    <div id="dep_address" class="search__block_input">
                        <div class="modal__input-title">Payment address:</div>
                        <div class="search__block">
                            <select id="deposit_address" name="paymentMode" class="custom-select">
                                <!-- <option value="INR">INR</option> -->
                                <option value="USDT">USDT</option>
                            </select>
                        </div>
                    </div>
                    <div id="dep_address" class="search__block_input">
                        <div class="modal__input-title">Transaction Password</div>
                        <div class="search__block">
                            <input id="deposit_address" name="transaction_id" class="custom-select" placeholder="Transaction Password">
                        </div>
                    </div>
                    <!-- <div class="modal__item-input" style="visibility:hidden; height:0px;">
                        <div class="modal__input-title">T-Password:</div>
                        <div class="modal__deposit-cover-row">
                            <input type="text" class="currency__search">
                        </div>
                    </div> -->
                    <!-- <input type="hidden" name="plan_id" class="plan-id"> -->       
                    <div id="dep_tag" class="search__block_input" style="display: none;">
                        <div class="modal__input-title">Payment tag (memo):</div>
                        <div class="search__block">
                            <span class="modal__copy-btn copy__payment"></span>
                        </div>
                    </div>
                    <!-- <input id="deposit_cur" type="hidden" name="currency" value="usdt.trc20">
                    <input id="deposit_id" type="hidden" name="deposit_id">
                    <input id="_token" type="hidden" name="_token" value="65d9c7945ac2e153d72230e388744c1d41">
                    <input id="post_ajax" type="hidden" name="_token" value="/data/deposit/depositKassa.php"> -->
                    <div class="modal__button modal__form-bottom">
                        <button id="make_deposit" class="submit-btn" type="submit">Deposit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <div class="dashboard_content">
					<!-- <div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2>Referral levels</h2>
					</div> -->
					
					
										
					<div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2> Deposit History </h2>
					</div>
					
					
					
					<div class="list__hisory">
						
					<div class="coins__list coins__list_dashboard active coins">
            <div class="coins__row coins__row_title">
                <p class="coins__item">S.No</p>
                <p class="coins__item">User Id FK</p>
                <p class="coins__item coins__item_color">Amount</p>
                <p class="coins__item">Payment Mode</p>
                <p class="coins__item">Date</p>
                <p class="coins__item">Status</p>
            </div>
            @foreach($data as $key=>$value)
                <div class="coins__row coins__row_main" data-prc="nan">
                    <p class="coins__item coins__item_first">
                        <span class="coins__item_name">S No</span>
                        <span>
                            <!-- <img src="./images/dashboard_icons/dash.png" class="icon" alt=""> -->
                            <span class="content">
                                <span>{{ $key+1 }}</span>
                            </span>
                        </span>
                    </p>
                    <p class="coins__item fw_medium">
                        <span class="coins__item_name">Name</span>
                        <span>{{ $value->user_id_fk }}</span>
                    </p>
                    <p class="coins__item fw_bold">
                        <span class="coins__item_name">Amount:</span>
                        <span>${{ $value->amount }}</span>
                    </p>
                    <p class="coins__item coins__item_income">
                        <span class="coins__item_name">Payment Mode</span>
                        <span class="portfolio_visible" style="">{{$value->payment_mode}}<span></span></span>
                        <span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
                    </p>
                    <p class="coins__item coins__item_income">
                        <span class="coins__item_name">Date </span>
                        <span class="portfolio_visible" style="">{{ $value->sdate }}<span></span></span>
                        <span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
                    </p>
                    <p class="coins__item coins__item_income">
                        <span class="coins__item_name">Status</span>
                        <span class="portfolio_visible" style="">{{ $value->status }}<span></span></span>
                        <span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
                    </p>
                </div>
                @endforeach
        </div>

					</div>
				</div>
</div>

<script>
    document.getElementById('make_deposit').addEventListener('click', function () {
        var form = document.getElementById('invest-form');
        var errorAlert = document.getElementById('error-alert');

        // Perform your validation or AJAX request here
        // Example validation:
        var amount = document.getElementById('amount').value;
        if (!amount) {
            errorAlert.style.display = 'block';
            errorAlert.innerText = 'Amount is required.';
            return;
        }

        // Hide the alert if no error
        errorAlert.style.display = 'none';

        // If using AJAX, handle the form submission here, otherwise:
        form.submit();
    });
</script>
<!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentTime = new Date();
            var currentHour = currentTime.getHours();

            if (currentHour >= 12) {
                document.getElementById('invest-form').classList.add('hidden');
                document.getElementById('no-invest-message').style.display = 'block';
            } else {
                document.getElementById('invest-form').classList.remove('hidden');
                document.getElementById('no-invest-message').style.display = 'none';
            }
        });
    </script> -->