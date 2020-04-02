
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 111 css*/
        .jssorb111 .i {position:absolute;color:#fff;font-family:"Helvetica neue",Helvetica,Arial,sans-serif;text-align:center;cursor:pointer;z-index:0;}
        .jssorb111 .i .n {display:none;}
        .jssorb111 .i .b {fill:#fff;stroke:#000;stroke-width:500;stroke-miterlimit:10;stroke-opacity:.5;}
        .jssorb111 .i:hover .b {fill:#fea900;stroke:#fea900;stroke-width:6000;stroke-opacity:1;}
        .jssorb111 .iav .b {fill:#000;stroke-width:6000;stroke-opacity:1;}
        .jssorb111 .i.idn {opacity:.3;}
        .jssorb111 .iav .n, .jssorb111 .i:hover .n {display:block;}

        /*jssor slider thumbnail skin 121 css*/
        .jssort121 .p {position:absolute;top:0;left:0;border-bottom:1px solid rgba(255,255,255,.2);box-sizing:border-box;color:#fff;background:rgba(0,0,0,.1);opacity:.7;}
        .jssort121 .p .t {position:absolute;padding:10px;box-sizing:border-box;top:0;left:0;width:100%;height:100%;line-height:24px;overflow:hidden;}
        .jssort121 .p .i {margin-right:10px;position:relative;top:0;left:0;width:96px;height:48px;border:none;float:left;}
        .jssort121 .pav, .jssort121 .p:hover {color:#000;background:rgba(255,255,255,.7);}
        .jssort121 .p:hover {opacity:.75;}
        .jssort121 .pav, .jssort121 .p:hover.pdn {opacity:1;}
        .jssort121 .ti {position:relative;font-size:14px;font-weight:bold;}
        .jssort121 .d {position:relative;font-size:12px;}
        /*.jssort121 .d:before {content:'\a';white-space:pre;}*/
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="img/022.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/022-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Fantastic</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/023.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/023-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">School Admin</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/024.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/024-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Admit Students</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/025.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/025-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Collect Fees</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/026.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/026-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Assign Classes</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/027.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/027-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Assign Hostels</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/021.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/021-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Exam results</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/028.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/028-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Notices</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/029.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/029-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Events</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/030.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/030-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Teachers</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/031.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/031-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Subjects</span>
                </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/032.jpg" />
                <div data-u="thumb">
                    <img data-u="thumb" class="i" src="img/032-s96x48.jpg" />
                    <span class="ti">FSA</span><br />
                    <span class="d">Fees Structure</span>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort121" style="position:absolute;left:0px;top:0px;width:268px;height:380px;overflow:hidden;cursor:default;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:268px;height:68px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb111" style="position:absolute;bottom:12px;right:12px;" data-scale="0.5">
            <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                    <circle class="b" cx="8000" cy="8000" r="3000"></circle>
                </svg>
                <div data-u="numbertemplate" class="n"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->