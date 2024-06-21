

				

				<div class="dashboard_content">
					

					<div class="deposit__list row">

					    <div class="modal__body modal__deposit address" style="visibility: visible; display: flex; width:50%">
					        <div class="modal__inner">
					            <form id="deposit_form" class="contact__form" action="{{ route('user.Withdraw-Request') }}" method="post">
                                {{ csrf_field() }}
								@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
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
					                    <li id="deposit_coin_name">{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</li>
					                </ul>

					                <br>

					                <div class="modal__item-input">
					                    <div class="modal__input-title">Minimal payment amount:</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="text" name="amount" value="" placeholder="Enter Amount" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                    <div class="modal__item-input">
					                    <div class="modal__input-title">Transaction Password</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="password" id="transaction_password"  name="transaction_password" value="" placeholder="Transaction Pin" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
					                <div id="dep_address" class="modal__item-input" style="">
					                    <div class="modal__input-title">Payment Type:</div>
					                    <div class="modal__deposit-cover-row">                                        
					                        <select id="deposit_address"  name="PSys"  id="wallet_type">
                                            <option data-icon="INR" value="INR">INR</option>
                                            <option data-icon="USDT" value="USDT"> USDT</option>
                                            </select>
					                        <!-- <span class="modal__copy-btn copy__payment"></span> -->
					                    </div>
					                </div>
					                <div id="dep_tag" class="modal__item-input" style="display: none;">
					                    <div class="modal__input-title">Payment tag (memo):</div>
					                    <div class="modal__deposit-cover-row">
					                        <!-- <input id="deposit_tag" name="tag" type="text" value="" placeholder="" disabled=""> -->
					                        <span class="modal__copy-btn copy__payment"></span>
					                    </div>
					                </div>
					                


					                <div class="modal__button modal__form-bottom">
					                    <button id="make_deposit" class="submit-btn" type="submit" >Withdraw</button>
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
						<div class="coins__list active transactions"  id="depsoits_history">
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







	<script>
		$(".get__bonus-button, .bonus_page_href").click(function() {
			window.location.href = '/bonus';
		});
	</script>



