<article class="trainingCard">
    <div class="mainImage">
        <img src="assets/images/<?php echo $card['image'] ?>" alt="Une image de l'académie">
    </div>
    <div class="mainContent">
        <div>
            <header>
                <span class="promotionDate">
                    <?php echo $card['date']; ?>
                </span>
                <h2><?php echo $card['title']; ?></h2>
            </header>
            <p><?php echo $card['description']; ?></p>
        </div>
        <a href="#<?php echo $title.$key ?>">More</a>
        <footer><?php echo $card['location']; ?></footer>
    </div>
    <dialog id="<?php echo $title.$key ?>">
        <?php echo $card['title']; ?>
    </dialog>
</article>