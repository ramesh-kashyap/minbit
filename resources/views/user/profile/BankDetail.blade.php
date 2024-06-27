


				

				<div class="dashboard_content">
					<div class="title__row d-flex align-items-center justify-content-between mb_50">
						<h2>Bank Details</h2>

						<div class="search__block">
							<input class="currency__search" type="text" placeholder="Search  for a coins...">
						</div>

						<script>
							jQuery.expr[":"].Contains = jQuery.expr.createPseudo(function (arg) {
								return function (elem) {
									return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
								};
							});

							$('.currency__search').on('keyup', function () {
								var searchVal = $(this).val();
								var filterItems = $('.deposit__item');

								if (searchVal != '') {

									filterItems.parent().hide();
									$('.deposit__name span:Contains("' + searchVal + '")').parent().parent().parent().parent()
								.show();

									if ($(".deposit__item").is(":visible")) {
										$(".search__none").hide();
									} else {
										$(".search__none").show();
									}

								} else {
									filterItems.parent().show();
									$(".search__none").hide();
								}
							});
						</script>


					</div>

					<div class="dashboard_head search__none" style="display:none;">
						<div class="suuport__line">
							<p>
								<img src="./images/support_icon1.svg" alt="">
								Where are no coins or tokens matching your search request!
							</p>
						</div>
					</div>

					<div class="deposit__list row">

					    <div class="modal__body modal__deposit address" style="visibility: visible; display: flex; width:50%">
					        <div class="modal__inner">
					            <form id="deposit_form" class="contact__form" action="{{ route('user.update-profile') }}" method="post">
                                
                                {{ csrf_field() }}
								@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
					                <div class="modal__header">
					                    <h2 class="modal__title" style="">
					                        Bank Details
					                        <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
					                    </h2>
					                    <span class="modal__close"></span>
					                </div>
					               

					                <br>

					                <div class="modal__item-input">
					                    <div class="modal__input-title">Name</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="text" id="deposit_address" class="currency__search" name="name" placeholder="Enter Name"  >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                    <div class="modal__item-input">
					                    <div class="modal__input-title">Email</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="email" name="email" class="currency__search"  placeholder="email" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
					               
					               
					                
					                <div class="modal__item-input">
					                    <div class="modal__input-title">Phone</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="number" class="currency__search"   name="phone" placeholder="Enter Phone No"  >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                   


					                <div class="modal__button modal__form-bottom">
					                    <button id="make_deposit" class="submit-btn" type="submit" >Update</button>
					                </div>

					               

					            </form>
					        </div>
					    </div>




					</div>
				
				</div>
			</div>
		</div>
	</div>
</section>










