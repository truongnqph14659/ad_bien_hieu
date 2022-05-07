<div class="aside_seen_products">
    <?php foreach ($data_aside as $values) : ?>
        <section class="aside_seen_product">
            <div class="aside_picture">
                <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                    <img src="<?= $values['images_sp'] ?>">
                </a>
            </div>
            <div class="aside_text">
                <a href="details?id_sp=<?= $values['ma_san_pham'] ?>">
                    <h4>
                        <?php
                        $string_ten = (strlen($values["ten_sp"]) > 40) ? substr($values["ten_sp"], 0, 30) . '...' : $values["ten_sp"];
                        echo $string_ten;
                        ?>
                    </h4>
                </a>
                <span>Gía: Liên hệ</span>
            </div>
        </section>
    <?php endforeach; ?>
</div>