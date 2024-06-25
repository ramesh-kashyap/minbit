

				<!-- <div class="referal">
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
				</div> -->

				<div class="dashboard_content">			
					<div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2>Referral contest</h2>
					</div>
			
					<div class="list__hisory">
						<!-- <div class="d-flex mb_40">
							<div class="list__btns">
								<button class="list__btn check" data-list="list">
								    Deposit list
								</button>
								<button class="list__btn" data-list="links">
									Referral list
								</button>
							</div>
						</div> -->
						<div class="coins__list coins__list_affilate active list">
							<div class="coins__row coins__row_title">
								<p class="coins__item">S.No</p>
								<p class="coins__item">User Id</p>
								<p class="coins__item coins__item_color">
								Amount:
								</p>
								<p class="coins__item">Created At</p>
								<p class="coins__item coins__item_color">Remark:</p>
							</div>
                            <!-- rfr-->
                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                            <?php
                                 date_default_timezone_set('UTC');
                                 $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                            @foreach($level_income as $key=>$value)
                                <div class="coins__row coins__row_main" data-prc="nan">

                                    <p class="coins__item fw_medium">
                                        <span>{{ $key+1}}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->user_id_fk }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->comm }}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{$value->created_at}}</span>
                                    </p>
                                    <p class="coins__item fw_bold">
                                        <span>{{ $value->remarks }}</span>
                                    </p>
                                </div>
                            @endforeach

                            <?php }?>
                            {{ $level_income->withQueryString()->links() }}
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
