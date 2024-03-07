<div class="main-hits__body">
    <div class="main-hits__row">
        <div class="main-hits__block big-block" style="background: url(<?= get_field('izobrazhenie') ?>);">
            <a href="<?= get_field('proekt') ?>" class="main-hits__link">
                <?= get_field('nazvanie') ?>
            </a>
            <? if (get_field('czena_1')) : ?>
                <span class="main-hits_price">
                    <?= get_field('czena_1') ?>
                </span>
            <? endif ?>
        </div>
        <div class="main-hits__block small-block" style="background: url(<?= get_field('izobrazhenie2') ?>);">
            <a href="<?= get_field('proekt2') ?>" class="main-hits__link">
                <?= get_field('nazvanie2') ?>
            </a>
            <? if (get_field('czena_2')) : ?>
                <span class="main-hits_price">
                    <?= get_field('czena_2') ?>
                </span>
            <? endif ?>
        </div>
    </div>
    <div class="main-hits__row">
        <div class="main-hits__block small-block" style="background: url(<?= get_field('izobrazhenie3') ?>);">
            <a href="<?= get_field('proekt3') ?>" class="main-hits__link">
                <?= get_field('nazvanie3') ?>
            </a>
            <? if (get_field('czena_3')) : ?>
                <span class="main-hits_price">
                    <?= get_field('czena_3') ?>
                </span>
            <? endif ?>
        </div>
        <div class="main-hits__block big-block" style="background: url(<?= get_field('izobrazhenie4') ?>);">
            <a href="<?= get_field('proekt4') ?>" class="main-hits__link">
                <?= get_field('nazvanie4') ?>
            </a>
            <? if (get_field('czena_4')) : ?>
                <span class="main-hits_price">
                    <?= get_field('czena_4') ?>
                </span>
            <? endif ?>
        </div>
    </div>
</div>