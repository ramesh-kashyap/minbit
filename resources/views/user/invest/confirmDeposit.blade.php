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
                        <div class="search__block"><input type="text" class="currency__search"value="{{$paymentMode}}" placeholder="Secret Password">
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
					<img id="qrimage" class="referral-info__item1" style="display: flex; border-radius: 20px; width: 100%; box-shadow: rgba(255, 255, 255, 0.48) 0px 0px 28px 0px;" src="data:image/PNG;base64,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">
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
