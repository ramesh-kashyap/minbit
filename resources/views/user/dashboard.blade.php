<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mining Boxes</title>
    <style>
        .mining__row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .mining__item {
            height: 300px;
            /* Increase height */
            margin-right: 20px;
            /* Horizontal gap */
            background-color: #f5f5f5;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            text-align: center;
        }

        .mining__item:last-child {
            margin-right: 0;
            /* Remove margin from the last item */
        }

        .mining__percent,
        .content {
            margin-bottom: 10px;
        }

        <blade media|%20(max-width%3A%20767px)%20%7B%0D>.swiper-slide {
            width: 100% !important;
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }

        .mining__row_mobile .swiper-wrapper {
            display: block;
        }

        .mining__item {
            margin-bottom: 20px;
            /* Add some space between the items */
        }

    </style>
</head>

<body>
<div class="levels row mb_40">


<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Roi Income</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>Investment</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Level Income</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>Direct Income</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->direct_bonus->sum('amount'), 2) }}</p>
            </div>
        </div>
    </div>
</div>
</div>


<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Withdraw</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->withdrawal->sum('comm'), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>Direct User</p>
                <p> {{(Auth::user()->user_direct)->sum('sponsor') }}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Total referrals</p>
                <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>All money earned</p>
                <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="levels row mb_40">


<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Total Deposit</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->investment->sum('amount'), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>Direct Income</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</p>
            </div>
        </div>
    </div>
</div>
<div class="col-12 col-lg-6 mb_20">
    <div class="levels__item levels__item_statistick d-flex flex-column">

        <div class="statistick__items d-flex justify-content-center align-items-center">
            <div class="statistick__item">
                <p>Main Balance</p>
                <p>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</p>
            </div>
            <div class="statistick__item">
                <p>Roi Income</p>
                <p>{{ currency() }}
                {{ number_format(Auth::user()->dailyIncentive->sum('comm'), 2) }}</p>
            </div>
        </div>
    </div>
</div>
</div>

</body>

</html>
