


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
          New MintBit Аffiliate Program: Profit Levels Turning Connections into Monetary Opportunities
        </p>
</section>

<section class="about about__page" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-6">
				<div class="text__content mb_30">
                    <p>
                        We are excited to introduce our new and innovative Аffiliate program that opens unique opportunities for all our users. Our program consists of three levels, providing generous rewards for inviting new users and creating long-term relationships.
                    </p>
                    <p>
                        Level 1: First-Level Аffiliate
                    </p>
                    <p>
                        At this level, you invite new users who become your first-level referrals. By inviting a new participant and ensuring they are active (making a minimum deposit), you will receive a guaranteed $3 bonus and an additional 5% of their deposit amount. This means your profit grows proportionally with each active first-level referral.
                    </p>
                    <p>
                        Level 2: Second-Level Аffiliate
                    </p>
                    <p>
                        At the second level, you earn a reward of +3% of the deposit amount of second-level referrals invited by your first-level referrals. This is an additional opportunity to increase your profit and expand your referral network.
                    </p>
                    <p>
                        Level 3: Third-Level Аffiliate
                    </p>
                    <p>
                        At the third level, you receive 1% of the deposit amount of third-level referrals invited by your second-level referrals. Even at this level, you continue to earn additional profit without extra effort.
                    </p>
                    <p>
                        Don't miss the chance to turn your connections into a source of additional income with the new MintBit referral program. Join us today and start earning even more together with us!
                    </p>
				</div>
			</div>
			<div class="col-lg-5 col-xl-6 pos_rel order-1 order-lg-0">

				<div class="row about_slider_height" style="top: 0;display: flex;max-height: 450px;margin: auto;position: sticky;">
					<div class="col-4 col-sm-4 col-md-4 about_slider_height level_height">
                        <div class="level_text_head">
                            <div class="level_name">
                                Level 1
                            </div>
                            <div class="level_prc">
                                5%
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
                                3%
                            </div>
						</div>
						<div class="level_color" id="column3"style="height: 225px;">
						</div>
					</div>

					<div class="col-4 col-sm-4 col-md-4 about_slider_height level_height">
                        <div class="level_text_head">
                            <div class="level_name">
                                Level 3
                            </div>
                            <div class="level_prc">
                                1%
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