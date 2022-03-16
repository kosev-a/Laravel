<?php foreach($categoriesList as $category): ?>

    <div class="category">
        <h3>
            <a href="<?=route('categories.show', ['id' => $category['id']])?>">
                <?=$category['title']?>
            </a>
        </h3>
        <br>
        <p>ID: <em><?=$category['id']?></em></p>
        <p>Название: <em><?=$category['title']?></em></p>
    </div>
    <hr>
<?php endforeach; ?>