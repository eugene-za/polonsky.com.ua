<div class="section-title">
    <?php global $section_headers; ?>
    <?php if ('' !== $section_headers[$args]['title']) : ?>
        <h2><?= $section_headers[$args]['title'] ?></h2>
    <? endif; ?>
    <?php if ('' !== $section_headers[$args]['description']) : ?>
        <p><?= $section_headers[$args]['description'] ?></p>
    <? endif; ?>
</div>