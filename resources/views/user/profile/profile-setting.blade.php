
				<div class="dashboard_content">
					

					<div class="deposit__list row">

					    <div class="modal__body modal__deposit address" style="visibility: visible; display: flex; width:49%;">
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
					                        Profile Update
					                        <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
					                    </h2>
					                    <span class="modal__close"></span>
					                </div>
					               

					                <br>

					                <div class="search__block_input">
					                    <div class="modal__input-title">Name</div>
					                    <div class="search__block">
					                        <input type="text" class="currency__search" value="{{ $profile_data ? $profile_data->name : '' }}" name="name" placeholder="Enter Name"  >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                    <div class="search__block_input">
					                    <div class="modal__input-title">Email</div>
					                    <div class="search__block">
					                        <input class="currency__search" type="email" name="email" type="email" id="email" value="{{ $profile_data ? $profile_data->email : '' }}" placeholder="email" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
					               
					               
					                
					                <div class="search__block_input">
					                    <div class="modal__input-title">Phone</div>
					                    <div class="search__block">
					                        <input type="number" class="currency__search" value="{{ $profile_data ? $profile_data->phone : '' }}" name="phone" placeholder="Enter Phone No"  >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                   

									<div class="search__block_input">
					                    <div class="modal__input-title">Your Upline</div>
					                    <div class="search__block">
					                        <input type="text" class="currency__search"  readonly value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}">
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>

									<div class="search__block_input">
					                    <div class="modal__input-title">Your Upline</div>
					                    <div class="search__block">
					                        <input type="text" class="currency__search"  readonly value="{{ $profile_data ? $profile_data->username : '' }}">
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>

								

									<div class="search__block_input">
					                    <div class="modal__input-title">Registration Date</div>
					                    <div class="search__block">
					                        <input type="text" class="currency__search"  id="username" value="{{ date("D, d M Y", strtotime($profile_data->created_at))}}">
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>

									<div class="search__block_input" >
					                    <div class="modal__input-title">USDT - BEP20</div>
					                    <div class="search__block">
					                        <input type="text" class="currency__search"  name="usdtBep20" value="{{ $profile_data ? $profile_data->usdtBep20 : '' }}" placeholder="USDT BEP20 wallet">
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
									<div class="modal__item-input"style="visibility:hidden;height:0px">
					                    <div class="modal__input-title">USDT - BEP20</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="text" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>


					                <div class="modal__button modal__form-bottom">
					                    <button id="make_deposit" class="submit-btn" type="submit" >Update</button>
					                </div>

					               

					            </form>
					        </div>
					    </div>
                        <div class="modal__body modal__deposit address" style="visibility: visible;height:510px; display: flex; width:49% ;margin-left:10px">
					        <div class="modal__inner">
							<form id="deposit_form" class="contact__form" action="{{ route('user.edit-password') }}" method="post">
                                
                                {{ csrf_field() }}
								@if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
					                <div class="modal__header">
					                    <h2 class="modal__title" style="">
                                            Change Password
					                        <g style="font-family: 'sansationbold'; display: none;" id="deposit_short">Bitcoin</g>
					                    </h2>
					                    <span class="modal__close"></span>
					                </div>
					               

					                <br>

					                <div class="search__block_input">
					                    <div class="modal__input-title">Old Password</div>
					                    <div class="search__block">
					                        <input type="password" class="currency__search" value="" name="old_password" placeholder="Enter Old Password"  >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
                                    <div class="search__block_input">
					                    <div class="modal__input-title">New Password</div>
					                    <div class="search__block">
					                        <input type="password" class="currency__search" name="password" type="password" id="password" value="" placeholder="Enter New Password" >
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
					               
					               
					                
					                <div class="search__block_input" >
					                    <div class="modal__input-title">Confirm new password</div>
					                    <div class="search__block">
					                        <input type="password" class="currency__search" value="" name="password_confirmation" placeholder="Enter confirm_Password">
					                        <!-- <span class="modal__copy-btn copy__deposit-amount"></span> -->
					                    </div>
					                </div>
									<div class="modal__item-input" style="visibility:hidden; height:0px">
					                    <div class="modal__input-title">Confirm new password</div>
					                    <div class="modal__deposit-cover-row">
					                        <input type="password"   placeholder="Enter confirm_Password">
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










