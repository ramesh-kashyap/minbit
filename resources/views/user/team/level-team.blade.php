<div class="referal">
					<div class="d-flex align-items-md-center justify-content-between mb_10 flex-wrap flex-md-nowrap">
						<h3 class="referal__title mb-2 mb-md-0 col-12 col-md-auto">
							Your referral link
						</h3>
					</div>
					<div class="referal__setting d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-lg-center">
						<p class="referal__link col-12 col-lg-auto copy_text urls__copylink" id="sponsorURL">{{ asset('') }}register?ref={{ Auth::user()->username }}</p>
						<div class="referal__btns d-flex col-12 col-lg-auto flex-wrap flex-lg-nowrap">
							<button class="referal__btn" type="button" id="copyBtn" onclick="copyFunction()">							
                                Copy link
							</button>
							<!-- <button class="referal__btn referal__btn_promo open__popup" data-popup="promo_popup">
								<img src="/images/icon_promo_btn.svg" alt="">
								Promo material
							</button> -->
													    
						    							
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
						
					<div class="coins__list coins__list_dashboard active coins">
            <div class="coins__row coins__row_title">
                <p class="coins__item">S.No</p>
                <p class="coins__item">Name</p>
                <p class="coins__item coins__item_color">Username</p>
                <p class="coins__item">Created At</p>
                <p class="coins__item">Remark:</p>
            </div>
            <!-- rfr-->
            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

<?php
	 date_default_timezone_set('UTC');
	 $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
@foreach($direct_team as $key=>$value)
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
                        <span>{{ $value->name }}</span>
                    </p>
                    <p class="coins__item fw_bold">
                        <span class="coins__item_name">Username</span>
                        <span>{{ $value->username}}</span>
                    </p>
                    <p class="coins__item coins__item_income">
                        <span class="coins__item_name">Created At</span>
                        <span class="portfolio_visible" style="">{{ $value->created_at}}<span></span></span>
                        <span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
                    </p>
                    <p class="coins__item coins__item_income">
                        <span class="coins__item_name">Remark </span>
                        <span class="portfolio_visible" style="">{{ $value->active_status }}<span></span></span>
                        <span class="portfolio_hidden" style="display: none;"> $●●●.<span>●● </span></span>
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
    function copyFunction() {
        var copyText = document.getElementById("sponsorURL");
        var range = document.createRange();
        range.selectNode(copyText);
        window.getSelection().removeAllRanges(); // Clear previous selections
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges(); // Clear the selection after copying
        Notiflix.Notify.Success(`Copied: ${copyText.textContent}`);
    }
</script>





















	<body>
