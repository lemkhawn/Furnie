<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
{{-- <script src="../js/404page.js"></script> --}}
{{-- require('../js/404page.js'); --}}

<div class="container">
    <div class="copy-container center-xy">
      <p>
        404, page not found.
      </p>
      <span class="handle"></span>
      <p>&#8595;</p>
      <p>Click it</p>
      <p>&#8595;</p>
      <a href="{{route('index')}} " style="text-decoration-color: #FFE500; font-weight: 500" >Try again</a>
    </div>
  </div>
  
  


  {{-- style css --}}
<style>
      @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');

/* // helper */
.center-xy {
    position: absolute !important;; 
    /* width: inherit; */
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%,-50%) !important;
}

html, body {
    font-family: 'Roboto Mono', monospace;
    font-size: 16px;
}

html {
    box-sizing: border-box;
    user-select: none;
}

body {
    background-color: #000; 
}

*, *:before, *:after {
    box-sizing: inherit;
}

.container {
    width: 100%;
}

.copy-container {
    text-align: center;
}


p, a {
    color: #fff;
    font-size: 24px;
    letter-spacing: .2px;
    margin: 0;
}

.handle {
    background: #ffe500;
    width: 14px;
    height: 30px;
    top: 0;
    left: -16px;
    margin-top: 1px;
    position: absolute;
}

#cb-replay {
    fill: #666;
    width: 20px;
    margin: 15px;
    right: 0;
    bottom: 0;
    position: absolute;
    overflow: inherit;
    cursor: pointer;

    &:hover {
        fill: #888;
    }
}   
a:hover {
    color: #ffe500;
}
</style>


    {{-- script js --}}
{{-- <script type="text/javascript">
        var $copyContainer = $(".copy-container"),
            $replayIcon = $('#cb-replay'),
            $copyWidth = $('.copy-container').find('p').width();

        var mySplitText = new SplitText($copyContainer, {type:"words"}),
            splitTextTimeline = new TimelineMax();
        var handleTL = new TimelineMax();

        var tl = new TimelineMax();

        tl.add(function(){
        animateCopy();
        blinkHandle();
        }, 0.2)

        function animateCopy() {
        mySplitText.split({type:"chars, words"}) 
        splitTextTimeline.staggerFrom(mySplitText.chars, 0.001, {autoAlpha:0, ease:Back.easeInOut.config(1.7), onComplete: function(){
            animateHandle()
        }}, 0.05);
        }

        function blinkHandle() {
        handleTL.fromTo('.handle', 0.4, {autoAlpha:0},{autoAlpha:1, repeat:-1, yoyo:true}, 0);
        }

        function animateHandle() {
        handleTL.to('.handle', 0.7, {x:$copyWidth, ease:SteppedEase.config(12)}, 0.05);
        }

        $('#cb-replay').on('click', function(){
        splitTextTimeline.restart()
        handleTL.restart()
        })
</script> --}}