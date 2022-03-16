<?php foreach($newsList as $news): ?>

        <div class="news">
                <a href="<?=route('news.show', ['id' => $news['id']])?>">
                        <?=$news['title']?>
                </a>
                <br>
                <img src="<?=$news['image']?>">
                <br>
                <p>Статус: <em><?=$news['status']?></em></p>
                <p>Автор: <em><?=$news['author']?></em></p>
                <p><?=$news['description']?></p>
                <p>Категория новостей: <?=$news['categoryId']?></p>
        </div>

<?php endforeach; ?>