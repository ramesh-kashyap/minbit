


@include('layouts.mainsite.header')


<link rel="stylesheet" href="{{asset('')}}main/css/additive.css" />

<script>
	$('.partners_page').addClass('current_menu');
</script>

<section class="video_page">
      <div class="container-fluid">

        <div class="video_page__bg">
          <img src="{{asset('')}}main/images/calc_left.svg" alt="">
        </div>

        <div class="video_page__bg video_page__bg_right">
          <img src="{{asset('')}}main/images/calc_right.svg" alt="">
        </div>

		<div class="about__image">
        	<img src="{{asset('')}}main\images\icon_profit_dashboard.svg" alt="" class="video_page__logo">
		</div>

        <h1 class="video_page__title text_center">Affiliate Program</h1>
        <p class="mx-auto video_page__subtitle text_center">
          New Vantguard Аffiliate Program: Profit Levels Turning Connections into Monetary Opportunities
        </p>
</section>

<section class="about about__page" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-6">
				<div class="text__content mb_30">
                    <p>
                    At Vanguard Elite, our structured, multi-tiered system is designed to maximize your earning potential and reward your dedication at every level.
                    </p>
                    <p>
                        Level 1: First-Level Аffiliate
                    </p>
                    <p>
                     Starting with the Direct Referral Bonus, you earn a substantial 30% bonus on the daily returns of your direct referrals, providing an immediate and significant income stream. As your network grows, so do your earnings. When your direct referrals bring in their own network, you receive a 10% bonus on the daily returns of these second-level referrals, promoting a collaborative effort to expand your network.
                    </p>
                    <p>
                        Level 2: Second-Level Аffiliate
                    </p>
                    <p>
                    Our compensation plan extends further, offering a 2.5% bonus on the daily returns of your third, fourth, and fifth-level referrals. This deep network bonus ensures continuous income growth as your network deepens. Beyond the fifth level, an additional $2 bonus from the daily returns of further referrals highlights our commitment to unlimited earning potential. Our unlimited width policy allows you to have as many direct referrals as you wish, significantly enhancing your income opportunities
                    </p>
                    <p>
                        Level 3: Third-Level Аffiliate
                    </p>
                    <p>
                    By advancing through these levels, you unlock a world of financial possibilities. Vanguard Elite's multi-tiered system is designed to reward your leadership, foster network growth, and provide you with sustainable, long-term income. Join us today and start climbing the levels of success!
                    </p>
                    <!-- <p>
                        Don't miss the chance to turn your connections into a source of additional income with the new VANGUARD ELITE referral program. Join us today and start earning even more together with us!
                    </p> -->
				</div>
			</div>
			<div class="col-lg-5 col-xl-6 pos_rel order-1 order-lg-0">

				<div class="row about_slider_height" style="top: 0;display: flex;max-height: 450px;margin: auto;position: sticky;">
					<div class="col-4 col-sm-4 col-md-4 about_slider_height level_height">
                        <div class="level_text_head">
                            <div class="level_name">
                                Level 3+
                            </div>
                            <div class="level_prc">
                                2.5%
                            </div>
						</div>
						<div class="level_color" id="column3"style="height: 185px;">
						</div>
					</div>

					<div class="col-4 col-sm-4 col-md-4 about_slider_height level_height">
                        <div class="level_text_head">
                            <div class="level_name">
                                Level 2
                            </div>
                            <div class="level_prc">
                                10%
                            </div>
						</div>
						<div class="level_color" id="column3"style="height: 225px;">
						</div>
					</div>

					<div class="col-4 col-sm-4 col-md-4 about_slider_height level_height">
                        <div class="level_text_head">
                            <div class="level_name">
                                Level 1
                            </div>
                            <div class="level_prc">
                                30%
                            </div>
						</div>
						<div  class="level_color" id="column3"style="height: 265px;">
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</section>


	<script>
		$(".get__bonus__button").click(function() {
			$('.modal__overflow-layer').toggleClass('visible');
  			$('.modal__sign-up').addClass('visible');
		});
	</script>
@include('layouts.mainsite.footer')