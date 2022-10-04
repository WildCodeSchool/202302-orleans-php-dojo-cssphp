<figure>
    <img src="assets/images/<?php echo $item['image']; ?>" alt="<?php echo $item['location']; ?>">
    <figcaption>
        <div>
            <div> <?php echo $item['date']; ?></div>
            <h2><?php echo $item['title']; ?></h2>
            <p> <?php echo $item['description']; ?></p>
        </div>
        <div> <?php echo $item['location']; ?></div>
    </figcaption>
</figure>