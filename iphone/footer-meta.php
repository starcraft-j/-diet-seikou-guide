


      <div id="menu">

        <div class="menubox">
          <ul id="menu1">
          <li>
              <a href="./">TOPへ</a>
            </li>
            <li>
              <a href="./unei.php">運営者情報</a>
            </li>
            <li>
              <a href="./entry4.php">ランキング調査概要</a>
            </li>
            <li>
              <a href="./privacy.php">プライバシーポリシー</a>
            </li>
          </ul>
        </div>

      </div>


      <footer>

           Copyright (C) 2019 <br>ダイエット成功ガイド All Rights Reserved.
       </footer>
          <script type="text/javascript">
            window._pt_lt = new Date().getTime();
            window._pt_sp_2 = [];
            _pt_sp_2.push('setAccount,4387eec7');
            var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            (function() {
                var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
                atag.src = _protocol + 'js.ptengine.jp/pta.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(atag, s);
            })();
          </script>
            <script>
              (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                  (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date(); a = s.createElement(o),
                  m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
              })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

              ga('create', 'UA-98179377-1', 'auto');
              ga('send', 'pageview');

            </script>

    <!--19/12/11 mira 追加 スマホのみ-->

    <script>
      var itemHeights = []; //
      $(function(){
        $(".grad-item").each(function(){ 
          var thisHeight = $(this).height(); 
          itemHeights.push(thisHeight); 
          $(this).addClass("is-hide"); 
          returnHeight = $(this).height(); 
        });
      });

      $(".grad-trigger").click(function(){
        if(!$(this).hasClass("is-show")) {
          var index = $(this).index(".grad-trigger"); 
          var addHeight = itemHeights[index]; 
          $(this).addClass("is-show").next().animate({height: addHeight},200).removeClass("is-hide"); 
        } else {
          $(this).removeClass("is-show").next().animate({height: returnHeight},200).addClass("is-hide"); 
        }
      });
    </script>



<script>
    $(".ham-btn").click(function() {
       $("#ham-menu").addClass("open"); 
       $('.ham-btn').hide();
       }); 
       $(".close").click(function() { 
         $("#ham-menu").removeClass("open");
         $('.ham-btn').fadeIn(2000);
       });
    </script>

<script>
$(function() {
		var Accordion1 = function(el, multiple) {
				this.el = el || {};
				this.multiple = multiple || false;

				var links = this.el.find('.accordion-title');
				links.on('click', {
						el: this.el,
						multiple: this.multiple
				}, this.dropdown)
		}

		Accordion1.prototype.dropdown = function(e) {
				var $el = e.data.el;
				$this = $(this),
						$next = $this.next();

				$next.slideToggle();
				$this.parent().toggleClass('open');

				if (!e.data.multiple) {
						$el.find('.accordion-contents').not($next).slideUp().parent().removeClass('open');
				};
		}
		var accordion1 = new Accordion1($('.menu-list-wrap'), false);
});
</script>

<script src="new.js"></script>


</body>

</html>