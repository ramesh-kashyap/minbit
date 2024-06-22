<div class="dashboard_content">
    <div class="deposit__list row">
        <div class="modal__body modal__deposit address"
            style="visibility: visible; display: flex; width:100%;max-width:500px">
            <div class="modal__inner">
                <form id="deposit_form" class="contact__form" action="{{ route('user.Withdraw-Request') }}"
                    method="POST">
                    {{ csrf_field() }}
                    @if (session('success'))
                    <script>
                        alert('{{ session('
                            success ') }}');

                    </script>
                    @endif

                    <div class="modal__header">
                        <h2 class="modal__title" style="">
                            Withdraw
                            <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
                        </h2>
                        <span class="modal__close"></span>
                    </div>
                    <ul class="deposit_milist">
                        <li>Available Balance:</li>
                        <li id="deposit_coin_name">{{ currency() }}
                            {{ number_format(Auth::user()->available_balance(), 2) }}</li>
                    </ul>

                    <br>

                    <div class="search__block_input">
                        <div class="modal__input-title">Minimal payment amount:</div>
                        <div class="search__block">
                            <input type="text" class="currency__search" name="amount" value="{{ old('amount') }}"
                                placeholder="Enter Amount"
                                onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')">
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Transaction Password</div>
                        <div class="search__block">
                            <input type="password" class="currency__search" id="transaction_password"
                                name="transaction_password" value="" placeholder="Transaction Pin">
                        </div>
                    </div>
                    <div id="dep_address" class="search__block_input" style="">
                        <div class="modal__input-title">Payment Type:</div>
                        <div class="search__block">
                            <select id="deposit_address" name="PSys">
                                <option data-icon="INR" value="INR">INR</option>
                                <option data-icon="USDT" value="USDT"> USDT</option>
                            </select>
                        </div>
                    </div>
                    <div id="dep_tag" class="modal__item-input" style="display: none;">
                        <div class="modal__input-title">Payment tag (memo):</div>
                        <div class="modal__deposit-cover-row">
                            <span class="modal__copy-btn copy__payment"></span>
                        </div>
                    </div>

                    <div class="modal__button modal__form-bottom">
                        <button id="make_deposit" class="submit-btn" type="submit"
                            onclick="validateForm()">Withdraw</button>
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
						<h2>Referral Team</h2>
					</div>
					
					
					
					<div class="list__hisory">
						
						<div class="coins__list coins__list_affilate active list">
							<div class="coins__row coins__row_title">
								<p class="coins__item">S no:</p>
								<p class="coins__item">User Id:</p>
								<p class="coins__item coins__item_color">
									Amount
								</p>
								<p class="coins__item">date:</p>
								<p class="coins__item coins__item_color">Status:</p>
							</div>
                            <!-- rfr-->
                            <?php if(is_array($withdraw_report) || is_object($withdraw_report)){ ?>

                            <?php
                                 date_default_timezone_set('UTC');
                                 $cnt = $withdraw_report->perPage() * ($withdraw_report->currentPage() - 1); ?>
                            @foreach($withdraw_report as $key=>$value)
                                <div class="coins__row coins__row_main" data-prc="nan">

                                    <p class="coins__item fw_medium">
                                        <span>{{ $key+1 }}</span>
                                    </p>
                                      <p class="coins__item fw_medium">
                                        <span>{{ $value->user_id }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{currency()}} {{ $value->withdraw->sum('amount') }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{$value->payment_mode}}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->wdate }}</span>
                                    </p>
                                 
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->status }}</span>
                                    </p>
                                </div>
                            @endforeach

                            <?php }?>
                            {{ $withdraw_report->withQueryString()->links() }}
						</div>

					</div>
				</div>
</div>


<script>
    function validateForm() {
        let amount = document.getElementsByName('amount')[0].value;
        let password = document.getElementsByName('transaction_password')[0].value;

        if (amount.trim() === '' || isNaN(amount) || parseFloat(amount) < 5) {
            alert('Please enter a valid amount (minimum 5)');
            return;
        }

        if (password.trim() === '') {
            alert('Please enter your transaction password');
            return;
        }

        document.getElementById('deposit_form').submit();
    }

</script>
