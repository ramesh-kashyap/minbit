

				
			

				<div class="referal">
					<div class="d-flex align-items-md-center justify-content-between mb_10 flex-wrap flex-md-nowrap">
						<h3 class="referal__title mb-2 mb-md-0 col-12 col-md-auto">
							Your referral link
						</h3>
					</div>
					<div class="referal__setting d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-lg-center">
						<p class="referal__link col-12 col-lg-auto copy_text urls__copylink" id="sponsorURL">{{ asset('') }}register?ref={{ Auth::user()->username }}</p>
						<div class="referal__btns d-flex col-12 col-lg-auto flex-wrap flex-lg-nowrap">
							<button class="referal__btn" type="button" id="copyBtn" onclick="copyText('sponsorURL')">							
                                Copy link
							</button>
							<button class="referal__btn referal__btn_promo open__popup" data-popup="promo_popup">
								<img src="/images/icon_promo_btn.svg" alt="">
								Promo material
							</button>
													    
						    							
						</div>
					</div>
				</div>

				<div class="dashboard_content">
					<div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2>Referral levels</h2>
					</div>
					<div class="levels row mb_40">					
                        
						
						<div class="col-12 col-lg-6 mb_20">
							<div class="levels__item levels__item_statistick d-flex flex-column">
								<p class="statistick__title">Overall statistics</p>
								<div class="statistick__items d-flex justify-content-center align-items-center">
									<div class="statistick__item">
										<p>Total referrals</p>
										<p>1</p>
									</div>
									<div class="statistick__item">
										<p>All money earned</p>
										<p>≈ $0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
										
					<div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2>Referral contest</h2>
					</div>
					
					
					
					<div class="list__hisory">
						<div class="d-flex mb_40">
							<div class="list__btns">
								<button class="list__btn check" data-list="list">
								    Deposit list
								</button>
								<button class="list__btn" data-list="links">
									Referral list
								</button>
							</div>
						</div>
						<div class="coins__list coins__list_affilate active list">
							<div class="coins__row coins__row_title">
								<p class="coins__item">Nmae:</p>
								<p class="coins__item">Userregistration:</p>
								<p class="coins__item coins__item_color">
									eailsss
								</p>
								<p class="coins__item">Email:</p>
								<p class="coins__item coins__item_color">Package:</p>
							</div>
                            <!-- rfr-->
                            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                            <?php
                                 date_default_timezone_set('UTC');
                                 $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                            @foreach($direct_team as $value)
                                <div class="coins__row coins__row_main" data-prc="nan">

                                    <p class="coins__item fw_medium">
                                        <span>{{ $value->name }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->username }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->email }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{currency()}} {{ $value->investment->sum('amount') }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->active_status }}</span>
                                    </p>
                                </div>
                            @endforeach

                            <?php }?>
                            {{ $direct_team->withQueryString()->links() }}
						</div>

					</div>
				</div>



				</div>
		</div>
	</div>
</section>

    
    </div>
    
  


	<script>
		$(".get__bonus-button, .bonus_page_href").click(function() {
			window.location.href = '/bonus';
		});
	</script>


<script>
        "use strict";

        function copyFunction() {
            var copyText = document.getElementById("sponsorURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>





















	<body>
