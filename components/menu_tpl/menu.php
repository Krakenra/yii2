<li>
    <a href="">
        <?= $category['name']?>
    <?php if( isset($category['childs'])): ?>
        <span class="badge pull-right">
    <i class="fa fa-plus"</i>
</span>
    </a>
    <?php endif;?>
    <ul>
        <?= $this->getMenuHtml($category['childs'])?>
    </ul>
</li>

