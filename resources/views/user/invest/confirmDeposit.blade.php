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
</style>

<div class="dashboard_content">
    <div class="alert" id="error-alert"></div>
    <div class="deposit__list row">
        <div class="modal__body modal__deposit address" style="visibility: visible; display: flex; width:100%; max-width: 500px;">
            <div class="modal__inner">
                <form class="contact__form" action="{{ route('user.fundActivation') }}" method="POST" id="invest-form">
                      @csrf
                <div class="modal__header">
                        <h2 class="modal__title">
                            Deposit
                            <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
                        </h2>
                        <span class="modal__close"></span>
                    </div>
                    <!-- <input type="hidden" name="minimum_amount" id="minimum_amount">
                    <input type="hidden" name="maximum_amount" id="maximum_amount">
                    <input type="hidden" name="plan" id="plan-name"> -->
                    <br>
                    
                    <div class="search__block_input">
                        <div class="modal__input-title">Amount:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search"value="{{$amount}}"
                            placeholder="Enter Amount" name="amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                        </div>
                    </div>
                    <div id="dep_address" class="search__block_input" style="display:none">
                        <div class="modal__input-title">Payment address:</div>
                        <div class="search__block"><input type="text" class="currency__search"value="{{$paymentMode}}" name="PSys" placeholder="Secret Password">
                        </div>
                    </div>

                    <div id="dep_address" class="search__block_input">
                        <div class="modal__input-title">Payment Mode:</div>
                        <div class="search__block">
                            <select id="deposit_address" name="paymentMode" class="custom-select">
                                <!-- <option value="INR">INR</option> -->
                                <option value="USDT">USDT</option>
                            </select>
                        </div>
                    </div>


                    <div class="modal__qr-code" style="padding: 0 0 0px 0;max-width: 190px;margin: auto;">
					<img id="qrimage" class="referral-info__item1" style="display: flex; border-radius: 20px; width: 100%; box-shadow: rgba(255, 255, 255, 0.48) 0px 0px 28px 0px;" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=0xEd5921a2a248DeF8016Ee5046256303B5c94bA2b&format=png">
				</div>
                    <!-- <div class="modal__item-input" style="visibility:hidden; height:0px;">
                        <div class="modal__input-title">T-Password:</div>
                        <div class="modal__deposit-cover-row">
                            <input type="text" class="currency__search">
                        </div>
                    </div> -->
                    <div id="dep_address" class="search__block_input">
                        <div class="modal__input-title">Payment address:</div>
                        <div class="search__block"><input class="currency__search"value="{{generalDetail()->usdtBep20}}" readonly>
                        </div>
                    </div>
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
