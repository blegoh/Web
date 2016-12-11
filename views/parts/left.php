<div id="column-left">
    <div class="category">
        <ul>
            <?php
            foreach ($categories as $category) {
                echo "<li><a href=\"".base."/Book/category/".$category->CategoryID."\"><i class=\"fa fa-book\"></i> $category->CategoryName</a></li>";
            }
            ?>
        </ul>
    </div>
</div>