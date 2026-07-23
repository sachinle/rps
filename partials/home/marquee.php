<?php
    // MARQUEE — infinite scrolling achievement/announcement ticker.
    // JS clones each .marquee__track for a seamless loop.
    $items = [
        ['★', 'CBSE Affiliated Senior Secondary School'],
        ['●', '#HappySchooling — Positive Psychology in Learning'],
        ['★', 'The First School in Coimbatore with AI & Robotics'],
        ['●', '15+ Exciting Extra-Curricular Activities'],
        ['★', 'Nurturing Minds from Nursery to Grade 12'],
        ['●', 'Modern Facilities · Safe & Engaging Campus'],
    ];
?>
<section aria-label="School highlights" class="relative border-y border-white/10 bg-white/[0.02] py-4">
    <div class="marquee" style="--mq-speed:38s">
        <div class="marquee__track">
            <?php foreach ($items as $it): ?>
                <span class="flex items-center gap-3 text-sm font-medium text-slate-300">
                    <span class="text-rps-amber"><?= $it[0] ?></span>
                    <?= $it[1] ?>
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</section>
