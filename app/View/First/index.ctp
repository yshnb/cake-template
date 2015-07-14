First Application.

<div class="main">
    <h1>Title</h1>
    <div class="description">
<?php foreach($first as $record) : ?>
        <div class="record">
        <span><?php echo $record["First"]["id"]; ?></span>
        <span><?php echo $record["First"]["name"]; ?></span>
        </div>
<?php endforeach; ?>
    </div>
    <div class="redis">
        PV(redis); <?php echo $pv; ?>
    </div>
</div>
