
<div class="profile"><img id="coverPhoto" src="{{body.article.coverPhoto}}" class="img-responsive"/>
  <div class="mark">
    <div class="author-title"><img src="{{body.article.lecturer.photo}}" class="author-img"/><span>{{body.article.title}}</span>
    </div>
    <div class="tagSection"><span ng-repeat="(key, tag) in body.article.tags" class="tags">{{tag}}</span></div>
  </div>
</div>
<div class="XDD"></div>
<div class="film">
  <div id="player2" ng-show="body.article.video" ng-bind-html="body.article.video" class="video-container"></div>
</div>
<div class="section">
  <div>
    <div id="player1" ng-show="!!body.article.video" ng-bind-html="body.article.video" class="video-container"></div>
  </div>
  <tabset id="myTab" class="nav nav-tabs">
    <tab heading="中文稿" ng-show="body.article.speech.chinese" ng-style="body.tabWidth">
      <div ng-bind-html="body.article.speech.chinese" class="content"></div>
    </tab>
    <tab heading="中英文對照" ng-show="body.article.speech.mix" ng-style="body.tabWidth">
      <div ng-bind-html="body.article.speech.mix" class="content"></div>
    </tab>
    <tab heading="英文稿" ng-show="body.article.speech.english" ng-style="body.tabWidth">
      <div ng-bind-html="body.article.speech.english" class="content"></div>
    </tab>
  </tabset>
  <div class="social-plugin"><!-- JiaThis Button BEGIN -->
    <div class="jiathis_style_32x32"><a class="jiathis_button_qzone"></a><a class="jiathis_button_tsina"></a><a class="jiathis_button_tqq"></a><a class="jiathis_button_weixin"></a><a class="jiathis_button_renren"></a><a class="jiathis_button_fb"></a><a href="http://www.jiathis.com/share" target="_blank" class="jiathis jiathis_txt jtico jtico_jiathis"></a><a class="jiathis_counter_style"></a></div>
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1394000889809100" charset="utf-8"></script><!-- JiaThis Button END -->
    <div data-app-id="582221601854005" data-href="https://www.facebook.com/Speaker.tw" data-max-rows="1" data-colorscheme="light" data-size="medium" data-show-count="true" class="fb-facepile"></div>
  </div>
  <div style="padding: 15px;background: #fff;">
    <div id="disqus_thread" class="disqus_thread"></div>
  </div>
  <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'httpispeechnet'; // required: replace example with your forum shortname
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>Please enable JavaScript to view the<a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<div class="section">
  <div class="similar">
    <div class="similar-title">= 你可能有興趣的其他演講 =</div>
    <div class="archive-container">
      <div ng-repeat="(key, relation) in body.relations" class="thumb">
        <div class="ribbon-wrapper">
          <div class="ribbon">精選演講</div>
        </div>
        <div class="thumb-image"><a href="/#/article/{{relation.id}}" title="title"><img src="{{relation.image}}"/></a>
          <div class="thumb-pre">
            <p>目前已有 {{relation.readNum}} 人瀏覽</p>
          </div>
        </div>
        <div class="thumb-info">
          <div class="thumb-title">
            <div class="thumb-name">
              <h2><a href="/#/article/{{relation.id}}">{{relation.title}}</a>
                <p style="color: #9B9B9B;line-height: 16px;">{{relation.description}}</p>
              </h2>
            </div>
            <div class="thumb-cat"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
</div>