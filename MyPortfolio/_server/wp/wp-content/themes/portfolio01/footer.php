<?php
global $template_url;
global $home_url;
?>



<footer>
  <div id="footer" class="outer-block">
    <div class="inner-block">
      <div class="c-footer-logo sp">
        <a href="<?php echo $home_url; ?>/">
          <img src="<?php echo $template_url; ?>/img/common/logo/footer-logo.png" alt="logo">
        </a>
      </div>
      <div class="c-footer-nav">
        <div class="c-footer-logo">
          <a href="<?php echo $home_url; ?>/">
            <img src="<?php echo $template_url; ?>/img/common/logo/footer-logo.png" alt="logo">
          </a>
        </div>
        <div class="c-footer-nav-ttl">
          <a href="<?php echo $home_url; ?>/" class="title">TOP</a>
        </div>

        <div class="c-footer-nav-recipes">
          <a href="<?php echo $home_url; ?>/recipes/" class="title">レシピ一覧</a>
          <div class="c-footer-nav-recipes__cat">
            <a href="<?php echo $home_url; ?>//recipes/" class="text-b">お酒の種類から探す</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">ビールに合うレシピ</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">ハイボールに合うレシピ</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">ワインに合うレシピ</a>
          </div>
          <div class="c-footer-nav-recipes__cat">
            <a href="<?php echo $home_url; ?>/recipes/" class="text-b">料理の種類から探す</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">簡単おつまみ</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">主菜のおつまみ</a>
            <a href="<?php echo $home_url; ?>/category/" class="text">〆の逸品</a>
          </div>
        </div>
        <div class="c-footer-nav-tech">
          <a href="<?php echo $home_url; ?>/technique/" class="title">料理のコツ</a>
          <a href="<?php echo $home_url; ?>/technique/cat/" class="text">包丁の持ち方</a>
          <a href="<?php echo $home_url; ?>/technique/cat/" class="text">下処理・下準備</a>
          <a href="<?php echo $home_url; ?>/technique/cat/" class="text">皮活用</a>
        </div>
        <!-- <div class="footer-nav-health">
          <a href="<?php echo $home_url; ?>#" class="title">休肝日応援</a>
        </div> -->

      </div>
    </div><!-- /inner-block -->
  </div><!-- /footer -->
  <div class="c-footer-copy">
    <small>
      <p class="c-footer-copy__text">©2024 xxxxxxxx.All rights reserved.</p>
    </small>
  </div>


</footer>
</div><!-- /wrapper -->
  <script src="<?php echo $template_url; ?>/js/hambeurger.js"></script>
  <script src="<?php echo $template_url; ?>/js/tab.js"></script>
  <script src="<?php echo $template_url; ?>/js/lib/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo $template_url; ?>/js/common.js"></script>
  <?php wp_footer(); ?>
</body>

</html>