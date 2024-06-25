<div class="dashboard_content">
    <div class="deposit__list row">

        <div class="modal__body modal__deposit address col-12 col-lg-6 mb_20" style="visibility: visible; display: flex; width:100%; max-width: 500px;">
            <div class="modal__inner">
                <form id="profile_update_form" class="contact__form" action="{{ route('user.update-profile') }}" method="post">
                    {{ csrf_field() }}
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="modal__header">
                        <h2 class="modal__title">Profile Update</h2>
                        <span class="modal__close"></span>
                    </div>
                    <br>
                    <div class="search__block_input">
                        <div class="modal__input-title">Name</div>
                        <div class="search__block">
                            <input type="text" class="currency__search" value="{{ $profile_data ? $profile_data->name : '' }}" name="name" placeholder="Enter Name">
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Email</div>
                        <div class="search__block">
                            <input class="currency__search" type="email" name="email" id="email" value="{{ $profile_data ? $profile_data->email : '' }}" placeholder="email">
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Phone</div>
                        <div class="search__block">
                            <input type="number" class="currency__search" value="{{ $profile_data ? $profile_data->phone : '' }}" name="phone" placeholder="Enter Phone No">
                        </div>
                    </div>
                    
                    
                    <div class="search__block_input">
                        <div class="modal__input-title">Registration Date</div>
                        <div class="search__block">
                            <input name="created_at"type="text" nclass="currency__search" id="username" value="{{ $profile_data->created_at->format('Y-m-d H:i:s') }}">
                        </div>
                    </div>
                   
                    <div class="modal__item-input" style="visibility:hidden;height:0px">
                        <div class="modal__input-title">USDT - BEP20</div>
                        <div class="modal__deposit-cover-row">
                            <input type="text">
                        </div>
                    </div>
                    <div class="modal__button modal__form-bottom">
                        <button id="make_deposit" class="submit-btn" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal__body modal__deposit address col-12 col-lg-6 mb_20" style="visibility: visible;height:510px; display: flex; width:100% ;max-width: 500px;">
            <div class="modal__inner">
                <form id="password_change_form" class="contact__form" action="{{ route('user.edit-password') }}" method="post">
                    {{ csrf_field() }}
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    @endif
                    <div class="modal__header">
                        <h2 class="modal__title">Change Password</h2>
                        <span class="modal__close"></span>
                    </div>
                    <br>
                    <div class="search__block_input">
                        <div class="modal__input-title">Old Password</div>
                        <div class="search__block">
                            <input type="password" class="currency__search" value="" name="old_password" placeholder="Enter Old Password">
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">New Password</div>
                        <div class="search__block">
                            <input type="password" class="currency__search" name="password" id="password" value="" placeholder="Enter New Password">
                        </div>
                    </div>
                    <div class="search__block_input">
                        <div class="modal__input-title">Confirm new password</div>
                        <div class="search__block">
                            <input type="password" class="currency__search" value="" name="password_confirmation" placeholder="Enter confirm_Password">
                        </div>
                    </div>
                    <div class="modal__item-input" style="visibility:hidden; height:0px">
                        <div class="modal__input-title">Confirm new password</div>
                        <div class="modal__deposit-cover-row">
                            <input type="password" placeholder="Enter confirm_Password">
                        </div>
                    </div>
                    <div class="modal__button modal__form-bottom">
                        <button id="make_deposit" class="submit-btn" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

<script>
    document.getElementById('profile_update_form').addEventListener('submit', function(event) {
        alert('Profile updated successfully!');
    });

    document.getElementById('password_change_form').addEventListener('submit', function(event) {
        alert('Password changed successfully!');
    });
</script>
