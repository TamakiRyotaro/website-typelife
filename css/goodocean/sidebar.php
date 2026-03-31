<aside class="sidebar">
    <div class="box-white">
        <div class="item">
            <h2 class="news-title">Archives</h2>
            <ul class="sidebar-list">
                <!-- 年別アーカイブリストを出力
              <li><a href="./date.html">2025</a></li>
              <li><a href="./date.html">2024</a></li>
              <li><a href="./date.html">2023</a></li>
              <li><a href="./date.html">2022</a></li> -->
                <?php wp_get_archives("type=yearly"); ?>
            </ul>
        </div>
        <div class="item">
            <h2 class="news-title">Categories</h2>
            <ul class="sidebar-list">
                <!-- カテゴリアーカイブを出力
              <li><a href="./category.html">重要</a></li>
              <li><a href="./category.html">Topics</a></li>
              <li><a href="./category.html">Media</a></li> -->
                <?php wp_list_categories("title_li="); ?>
            </ul>
        </div>
    </div>
</aside>