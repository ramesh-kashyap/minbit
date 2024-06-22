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
            height: 300px; /* Increase height */
            margin-right: 20px; /* Horizontal gap */
            background-color: #f5f5f5;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
            text-align: center;
        }

        .mining__item:last-child {
            margin-right: 0; /* Remove margin from the last item */
        }

        .mining__percent, .content {
            margin-bottom: 10px;
        }

		@media (max-width: 767px) {
    .swiper-slide {
        width: 100% !important;
        flex: 0 0 100% !important;
        max-width: 100% !important;
    }

    .mining__row_mobile .swiper-wrapper {
        display: block;
    }

    .mining__item {
        margin-bottom: 20px; /* Add some space between the items */
    }
}

    </style>
</head>
<body>
    <div class="mining__row mining__row_mobile swiper-container d-flex align-items-center swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-f51babf5465af225" aria-live="polite">
    
        <div class="mining__item swiper-slide ">
            <div class="mining__percent">
                <div class="pie"
                    data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }"
                    data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200"
                        height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100">
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none"
                            stroke="#DFDFFF" stroke-width="15"></circle>
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4"
                            fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264"
                            stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;"
                            stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%"
                            fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400">
                            <tspan class="pie-percent-4">100</tspan>
                            <tspan class="pie-unit-4">%</tspan>
                        </text>
                    </svg></div>
                <img src="{{ asset('') }}slip/images/mining_item_icon2.svg" alt="">
            </div>
            <div class="content">
                <p class="mining__value">
                    <g id="hs_sha256">0</g> <span>MH/s</span>
                </p>
                <p class="mining__name">GPU balance</p>
            </div>
            <div class="line"></div>
        </div>

        <div class="mining__item swiper-slide  ">
            <div class="mining__percent">
                <div class="pie"
                    data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }"
                    data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200"
                        height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100">
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none"
                            stroke="#DFDFFF" stroke-width="15"></circle>
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4"
                            fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264"
                            stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;"
                            stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%"
                            fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400">
                            <tspan class="pie-percent-4">100</tspan>
                            <tspan class="pie-unit-4">%</tspan>
                        </text>
                    </svg></div>
                <img src="{{ asset('') }}slip/images/mining_item_icon2.svg" alt="">
            </div>
            <div class="content">
                <p class="mining__value">
                    <g class="" id="hs_used_sha256">0</g>,<span>00%</span>
                </p>
                <p class="mining__name">Capacities used</p>
            </div>
            <div class="line"></div>
        </div>

        <div class="mining__item swiper-slide ">
            <div class="mining__percent">
                <div class="pie"
                    data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }"
                    data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200"
                        height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100">
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none"
                            stroke="#DFDFFF" stroke-width="15"></circle>
                        <circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4"
                            fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264"
                            stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;"
                            stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%"
                            fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400">
                            <tspan class="pie-percent-4">100</tspan>
                            <tspan class="pie-unit-4">%</tspan>
                        </text>
                    </svg></div>
                <img src="{{ asset('') }}slip/images/mining_item_icon2.svg" alt="">
            </div>


            <div class="content">
                <p class="mining__value">
                    <g class="" id="hs_stock_sha256">100</g>,<span>00%</span>
                </p>
                <p class="mining__name">Capacity available</p>
            </div>
            <div class="line"></div>
        </div>
   
        
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>

	<div class="mining__row mining__row_mobile swiper-container d-flex align-items-center swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-f51babf5465af225" aria-live="polite">
            
            <div class="mining__item swiper-slide">
			<div class="mining__percent">
								<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4" fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-4">100</tspan><tspan class="pie-unit-4">%</tspan></text></svg></div>
								<img src="{{asset('')}}slip/images/mining_item_icon2.svg" alt="">
								</div>
                <div class="content">
                    <p class="mining__value"> <g id="hs_sha256">0</g> <span>MH/s</span></p>
                    <p class="mining__name">GPU balance</p>
                </div>
                <div class="line"></div>
            </div>

            <div class="mining__item swiper-slide used__block">
			<div class="mining__percent">
								<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4" fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-4">100</tspan><tspan class="pie-unit-4">%</tspan></text></svg></div>
								<img src="{{asset('')}}slip/images/mining_item_icon2.svg" alt="">
								</div>
                <div class="content">
                    <p class="mining__value"><g class="" id="hs_used_sha256">0</g>,<span>00%</span></p>
                    <p class="mining__name">Capacities used</p>
                </div>
                <div class="line"></div>
            </div>

            <div class="mining__item swiper-slide available__block">
			<div class="mining__percent">
								<div class="pie" data-pie="{ &quot;strokeBottom&quot;: 15, &quot;percent&quot;: 100, &quot;colorSlice&quot;: &quot;#9393E8&quot;, &quot;colorCircle&quot;: &quot;#DFDFFF&quot;, &quot;round&quot;: true }" data-pie-index="4" style="width:200px;height:200px;"><svg role="progressbar" width="200" height="200" viewBox="0 0 100 100" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100"><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" fill="none" stroke="#DFDFFF" stroke-width="15"></circle><circle cx="50%" cy="50%" r="42" shape-rendering="geometricPrecision" class="pie-circle-4" fill="none" stroke-width="10" stroke-dashoffset="0" stroke-dasharray="264" stroke-linecap="round" style="transform:rotate(-90deg);transform-origin: 50% 50%;" stroke="#9393E8" data-angel="100"></circle><text class="pie-text-4" x="50%" y="50%" fill="#000" text-anchor="middle" dy="0.35em" font-size="1.6rem" font-weight="400"><tspan class="pie-percent-4">100</tspan><tspan class="pie-unit-4">%</tspan></text></svg></div>
								<img src="{{asset('')}}slip/images/mining_item_icon2.svg" alt="">
								</div>
                <div class="content">
                    <p class="mining__value"><g class="" id="hs_stock_sha256">100</g>,<span>00%</span></p>
                    <p class="mining__name">Capacity available</p>
                </div>
                <div class="line"></div>
            </div>
        
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</body>
</html>
