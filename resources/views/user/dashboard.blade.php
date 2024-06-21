<script>
					$('#dashboard_page').addClass("current");
					$('#dashboard_text').addClass("current");
				</script>

				<div class="dashboard_head">
					<div class="row align-items-center">
						<div class="col-lg-5 offer mb-4 mb-lg-0">
							<p class="head__subtitle">Total Withdrawal</p>
							<div class="d-flex align-items-center value__wrap">
								<p class="head__value portfolio_visible" style="">{{ currency() }}
                                {{ number_format(Auth::user()->withdrawal->sum('amount'), 2) }}<span></span></p>
								<p class="head__value portfolio_hidden" style="display: none;">$●●●●●.<span>●●</span></p>
								<button class="offer_btn portfolio_btn"></button>
							</div>
						</div>
						<div class="col-lg-7 pos_rel">
							<div class="dashboard_head_img">
								<img src="{{asset('')}}main/images/dashboard_head_img.png" alt="">
							</div>
						</div>
								
						<script>

							// Function to toggle block visibility
							function togglePortfolioBlock() {
								var PortfolioBlockVisible 	= $(".portfolio_visible");
								var PortfolioBlockHidden 	= $(".portfolio_hidden");
								var PortfolioToggleImg 		= $(".portfolio_btn");

								
								var blockVisible = PortfolioBlockVisible.is(":visible");
								
								if(blockVisible){
									PortfolioBlockVisible.hide();
									PortfolioBlockHidden.show();
									PortfolioToggleImg.addClass("show");
									setCookie("PortfolioVisibility", "hidden", 100);
								}
								else{
									PortfolioBlockVisible.show();
									PortfolioBlockHidden.hide();
									PortfolioToggleImg.removeClass("show");
									setCookie("PortfolioVisibility", "visible", 100);
								}
							}

							// Initial setup
							$(document).ready(function () {
								// Check the cookie and set block visibility accordingly
								var PortfolioVisibility = getCookie("PortfolioVisibility");

								if (PortfolioVisibility === "visible" || PortfolioVisibility === null) {
									$(".portfolio_visible").show();
									$(".portfolio_btn").removeClass("show");
								}
								else{
									$(".portfolio_hidden").show();
									$(".portfolio_btn").addClass("show");
								}

								// Attach the toggle function to the button click event
								$(".portfolio_btn").on("click", togglePortfolioBlock);
							});
						</script>

					</div>
				</div>

				<div class="dashboard_content">
					<div class="list__hisory">
						<div class="d-flex mb_40 flex-column flex-sm-row">
							<div class="list__btns mb-3 mb-sm-0">
								<button class="list__btn check" data-list="coins">
									Coins
								</button>
								<button class="list__btn" data-list="transactions">
									Transactions
								</button>
							</div>
							<div class="select_wrap coins_select_wrap">
								<button class="select__check">
									<div class="select__icons" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
										<div class="scroll-content">
											<div class="icons__wrap">

												
											</div>
										</div>
									</div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 115px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-y"></div></div></div>
									<span>0</span>&nbsp;Coins
								</button>
								<div class="select__popup">
									<div class="search__block">
            							<input class="currency__search" type="text" placeholder="Search  for a coins...">
            						</div>
            						
            						<script>
            
            							jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function(arg) {
            								return function( elem ) {
            									return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
            								};
            							});
            
            							$('.currency__search').on('keyup', function() {
            								var searchVal = $(this).val();
            								var filterItems = $('.coins__row');
            
            								if ( searchVal != '' ) {
            
            									filterItems.hide();
            									$('.coins__row .content span:Contains("' + searchVal + '")').parent().parent().parent().parent().show();
            
            									if($(".minings__row").is( ":visible" )){
            										$(".search__none").hide();
            									}
            									else{
            										$(".search__none").show();
            									}
            									
            								} else {
            									filterItems.show();
            									$(".search__none").hide();
            								}
            							});
            
            						</script>

            						
            						
            						
									<div class="select__list" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
										<div class="scroll-content">

											
											
										</div>
										<div class="scrollbar-track scrollbar-track-x" style="display: none;">
											<div class="scrollbar-thumb scrollbar-thumb-x" style="width: 248px; transform: translate3d(0px, 0px, 0px);"></div>
										</div>
										<div class="scrollbar-track scrollbar-track-y" style="display: block;">
											<div class="scrollbar-thumb scrollbar-thumb-y" style="height: 245px; transform: translate3d(0px, 0px, 0px);"></div>
										</div>
									</div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 248px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 20px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
								</div>
							</div>
						</div>

						<div class="coins_list coinslist_dashboard active coins"><div class="coinsrow coins_row_title">
								<p class="coins__item">Coin:</p>
								<p class="coins__item">Start date:</p>
								<p class="coins_item coins_item_color">Portfolio %</p>
								<p class="coins__item">On account:</p>
								<p class="coins__item">All-time income:</p>
							</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/dash.png" class="icon" alt="">
					<span class="content">
						<span> Dash </span>
						<span> DASH </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/xmr.png" class="icon" alt="">
					<span class="content">
						<span> Monero </span>
						<span> XMR </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/sol.png" class="icon" alt="">
					<span class="content">
						<span> Solana </span>
						<span> SOL </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/zec.png" class="icon" alt="">
					<span class="content">
						<span> ZCash </span>
						<span> ZEC </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/usdt.png" class="icon" alt="">
					<span class="content">
						<span> Tether </span>
						<span> USDT </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/dot.png" class="icon" alt="">
					<span class="content">
						<span> Polkadot </span>
						<span> DOT </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/xrp.png" class="icon" alt="">
					<span class="content">
						<span> Ripple </span>
						<span> XRP </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/etc.png" class="icon" alt="">
					<span class="content">
						<span> Ethereum Classic </span>
						<span> ETC </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/eth.png" class="icon" alt="">
					<span class="content">
						<span> Ethereum </span>
						<span> ETH </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/link.png" class="icon" alt="">
					<span class="content">
						<span> Chainlink </span>
						<span> LINK </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/shib.png" class="icon" alt="">
					<span class="content">
						<span> Shiba </span>
						<span> SHIB </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/ltc.png" class="icon" alt="">
					<span class="content">
						<span> Litecoin </span>
						<span> LTC </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/doge.png" class="icon" alt="">
					<span class="content">
						<span> Doge </span>
						<span> DOGE </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/trx.png" class="icon" alt="">
					<span class="content">
						<span> Tron </span>
						<span> TRX </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/bch.png" class="icon" alt="">
					<span class="content">
						<span> BitCash </span>
						<span> BCH </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/ada.png" class="icon" alt="">
					<span class="content">
						<span> Cardano </span>
						<span> ADA </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/matic.png" class="icon" alt="">
					<span class="content">
						<span> Matic </span>
						<span> MATIC </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div><div class="coins_row coins_row_main" data-prc="nan">
			<p class="coins_item coins_item_first">
				<span class="coins__item_name">Coin: </span>
				<span>
					<img src="{{asset('')}}main/images/dashboard_icons/btc.png" class="icon" alt="">
					<span class="content">
						<span> Bitcoin </span>
						<span> BTC </span>
					</span>
				</span>
			</p>
			<p class="coins__item fw_medium">
				<span class="coins__item_name">Date: </span>
				<span>Never Mined</span>
			</p>
			<p class="coins__item fw_bold">
				<span class="coins__item_name">Portfolio %: </span>
				<span>0%</span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">On account: </span>
				<span class="portfolio_visible" style=""> $0.<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
			<p class="coins_item coins_item_income">
				<span class="coins__item_name">All-time income: </span>
				<span class="portfolio_visible" style=""> $0<span>00 </span></span>
				<span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
			</p>
		</div></div>
						
						<script>
								//$(".coins__list_withdraw").attr("data-inusd");

								$(".coins__list_dashboard").each(function(){
									//if($(this).hasClass("coins__row_withdraw")){
										var head = $(this).children('.coins__row_title');

										$(this).html($(this).children('.coins__row_main').sort(function(a, b){
											return (parseFloat($(b).attr('data-prc'))) > parseFloat(($(a).attr('data-prc'))) ? 1 : -1;
										}));

										$(this).prepend(head);
										
									//}
									//alert($(this).html());
								});

							</script>


						<div class="coins__list transactions" id="depsoits_history">
							<div class="coins_row coins_row_title">
								<p class="coins__item">Coin:</p>
								<p class="coins_item coins_item_color">Type:</p>
								<p class="coins__item">Amount:</p>
								<p class="coins__item">Date:</p>
								<p class="coins__item">Status:</p>
							</div>

						<div class="history__not d-flex align-items-center justify-content-center flex-column">
                            <p class="no__title">No transactions</p>
                            <p class="no__subtitle mb_20">Don't see a transactions?</p>
                            <a href="/deposit" class="btn">Deposit</a>
                        </div></div>
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