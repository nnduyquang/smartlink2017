<div class="containerAnalysis">
    <div class="svgWrap">
        {{ Html::image('images/temps/rocket.png','',array('class'=>'iconRocket wow slideInUp')) }}
        <svg id="cms-svg" class="cms-svg" xmlns="http://www.w3.org/2000/svg" version="1.1"
             width="100%" height="100"
             viewBox="0 0 85 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
M0 100 Q 5 0 10 100
M5 100 Q 10 30 15 100
M10 100 Q 15 10 20 100
M15 100 Q 20 30 25 100
M20 100 Q 25 -10 30 100
M25 100 Q 30 10 35 100
M30 100 Q 35 30 40 100
M35 100 Q 40 10 45 100
M40 100 Q 45 50 50 100
M45 100 Q 50 20 55 100
M50 100 Q 55 40 60 100
M55 100 Q 60 60 65 100
M60 100 Q 65 50 70 100
M65 100 Q 70 20 75 100
M70 100 Q 75 45 80 100
M75 100 Q 80 30 85 100
M80 100 Q 85 20 90 100
M85 100 Q 90 50 95 100
M90 100 Q 95 25 100 100
M95 100 Q 100 15 105 100 Z" fill="#59b3c5" stroke="#59b3c5">
            </path>
        </svg>
    </div>
    <div class="containSwap col-lg-12">
        <div class="col-lg-12">
            <div class="emptySpace"></div>
            <div class="headingText">
                <h5 class="subHeading in">Phân Tích Website 100% Miễn Phí</h5>
                <h3 class="heading in">Phân Tích Website Của Bạn</h3>
                <hr class="headingLine in">
            </div>
        </div>
        <div class="container">
            <div class="wpInputAnalysis col-lg-12">
                <div class="col-lg-3 col-xs-12">
                        {{Form::text('username','',array('class'=>'form-control inputNoBorder','placeholder'=>'http://'))}}
                </div>
                <div class="col-lg-3 col-xs-12">
                        {{Form::text('username','',array('class'=>'form-control inputNoBorder','placeholder'=>'số điện thoại'))}}
                </div>
                <div class="col-lg-4 col-xs-12">
                        {{Form::text('username','',array('class'=>'form-control inputNoBorder','placeholder'=>'email'))}}
                </div>
                <div class="col-lg-2 col-xs-12">
                        <button type="button" class="btn btnAnalysis">PHÂN TÍCH</button>
                </div>
            </div>
        </div>

    </div>
</div>