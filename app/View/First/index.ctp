First Application.

<div class="main">
    <h1>Title</h1>
    <div class="description">
<?php foreach($data as $record) : ?>
        <div class="record">
        <span><?php echo $record["First"]["id"]; ?></span>
        <span><?php echo $record["First"]["name"]; ?></span>
        </div>
<?php endforeach; ?>
    </div>
</div>
