<?php
if (!isset($_SESSION)) {
    session_start();
}
$games = Games::getGames('all', 0, 5, '-all-', -1);
$i = 0; ?>
<!-- Carousel Section -->
<div id="mainCarousel" class="carousel slide d-none d-md-block mt-4" data-ride="carousel">
    <div class="carousel-inner col-lg-8 mx-auto"><?php
        foreach ($games as $game) {
            ++$i;
            $link = Core::getLinkGame($game['id']);
            if ($i === 1) {
                echo '<div class="carousel-item active">';
            } else {
                echo '<div class="carousel-item">';
            } ?>
            <div class="card">
                <div class="card-header">
                    <h2>
                        <?php echo $game['name']; ?>
                    </h2>
                </div>
                <div class="card-body alert-dark text-center">
                    <div class="row">
                        <div class="col-1">&nbsp;</div>
                        <div class="col">
                            <a href="<?php echo $link;?>">
                                <img class="rounded"
                                     src="<?php echo IMG_URL . $game['nameid'] . EXT_IMG;?>"
                                     alt="<?php $game['name'];?>"
                                     width="<?php echo $dbconfig['twidth']; ?>"
                                     height="<?php echo $dbconfig['theight']; ?>"
                                />
                            </a>
                        </div>
                        <div class="col-1">&nbsp;</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">&nbsp;</div>
                        <div class="col">
                            <p class="text-justify text-black">
                                <?php echo $game['desc'];?>
                            </p>
                        </div>
                        <div class="col">&nbsp;</div>
                    </div>
                </div>
            </div>
            </div><?php
        } ?>
    </div>
</div>