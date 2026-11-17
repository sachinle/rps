<?php
    $testimonials = [
        [
            'name' => 'Parent of Alfreda Grace',
            'role' => 'Sr. KG A',
            'image' => './assets/image/testimonials/alfreda-grace.png',
            'text' => 'We are truly happy and proud to be part of the RPS family. Since Pre-KG, our daughter Alfreda Grace has experienced a warm, caring and positive learning environment. We are especially happy to see her growing in confidence, communication and interest in learning, thanks to the constant care and encouragement from her teachers. The activities, celebrations and competitions have also helped her become more confident and expressive. Choosing RPS for her has been a decision we are truly proud of. ❤️',
        ],
        [
            'name' => 'Parent of Shivali',
            'role' => 'Nursery',
            'image' => './assets/image/testimonials/shivali.png',
            'text' => 'We are extremely happy with the remarkable progress our daughter Shivali has made at RPS since joining Nursery. In just a few months, we have seen significant improvement in her communication, learning and confidence, especially in speaking English and identifying colours and animals. She also happily practises her rhymes at home and follows good habits taught by her teacher, such as brushing her teeth twice a day. We sincerely appreciate the dedication, patience and care of her teachers and the school management, which have created a positive environment for her growth.',
        ],
        [
            'name' => 'Parent of Owais Seifeldeen Mohamed Hamed',
            'role' => 'Nursery',
            'image' => './assets/image/testimonials/owais-seifeldeen-mohamed-hamed.png',
            'text' => 'We are very happy with our child’s experience at Rathinam International Public School. The caring and supportive teachers create a happy, friendly environment where our child enjoys learning every day. We truly appreciate the love, care, and encouragement given, and are proud to be part of the RPS family.',
        ],
        [
            'name' => 'Parent of Naanilan A',
            'role' => 'Nursery',
            'image' => './assets/image/testimonials/naanilan.png',
            'text' => 'Our son, A. Naanilan, has been at RPS for just four months, yet we have already seen remarkable changes in his confidence, communication, curiosity, discipline, social interaction, and participation. It gives us immense happiness to see him enjoying school, expressing himself confidently, and becoming more enthusiastic about learning and exploring new things. What we appreciate most about RPS is its balanced approach to education, focusing not only on academics but also on creativity, communication, physical abilities, independence, and social development. The Smart Learning System and child-friendly teaching make learning engaging and enjoyable. We are especially grateful to his teachers for their patience, dedication, individual attention, and genuine care. We were also proud to see Naanilan secure second place in the Ball Balancing Game at the RPS Annual Sports Meet 2026—a moment that reflected his growing confidence and willingness to participate. We are truly happy that we chose RPS for his early education and look forward to watching him continue to learn, grow, explore, and shine.',
        ],
        [
            'name' => 'Parent of Vaishnavi',
            'role' => 'Jr. KG C',
            'image' => '',
            'text' => 'We are delighted with our experience at RPS. The Principal’s constant encouragement and positive approach help children participate boldly without fear of making mistakes. The teachers provide excellent individual care while nurturing discipline, communication, and confidence. We especially appreciate opportunities like Culmination Day, which help children understand what they learn, enjoy presenting before parents, and overcome stage fear. The effective curriculum makes children eager to come to school, while equal importance given to sports helps identify and nurture each child’s talents from an early age. We are wholeheartedly happy with RPS and grateful to the entire RPS family for creating such a positive and enriching environment for our children.',
        ],
        [
            'name' => 'Deepa Angel',
            'role' => 'Kindergarten Co-ordinator',
            'image' => './assets/image/testimonials/deepa-angel.png',
            'text' => 'Being a part of RPS has been a truly wonderful experience. The warmth, teamwork, and support we share make this more than just a workplace. It feels like being part of a family, and I’m happy to grow along with RPS.',
        ],
        [
            'name' => 'Swathiha',
            'role' => 'Mother Teacher',
            'image' => './assets/image/testimonials/swathiha.png',
            'text' => 'What I love most about being an RPS teacher is the connection I share with my students. Their curiosity, little achievements, and happy smiles make every day meaningful. Watching them grow gives me a sense of happiness and purpose.',
        ],
        [
            'name' => 'Shanmuga Priya',
            'role' => 'ICT Teacher',
            'image' => '',
            'text' => 'RPS has given me so many opportunities to learn, explore, and grow as an educator. Every challenge has helped me become better, and every new experience has added something valuable to my journey. I’m truly grateful to be a part of this institution.',
        ],
        [
            'name' => 'Uma',
            'role' => 'Science Teacher',
            'image' => './assets/image/testimonials/uma-science-teacher.png',
            'text' => 'Some of my happiest memories at RPS have been created during school celebrations, projects, STREAM activities, and even simple moments in the classroom. Working together as a team and seeing our students enjoy these experiences makes every effort worthwhile.',
        ],
        [
            'name' => 'William Ebenezar',
            'role' => 'AO',
            'image' => './assets/image/testimonials/william-ebenezar.png',
            'text' => 'Being an Administrative Officer at RPS is a rewarding experience. The collaborative work culture, supportive leadership, and shared commitment to excellence make every day meaningful. I am proud to contribute to a school that puts children and their overall growth at the heart of everything we do.',
        ],
    ];
?>
<section id="testimonials" class="relative py-24">
    <div class="rps-container">
        <div class="mx-auto max-w-2xl text-center">
            <div class="eyebrow reveal-up mx-auto"><span class="dot"></span> Voices about RPS</div>
            <h2 class="sec-title reveal-up mt-5 text-3xl md:text-5xl">
                <span class="brand-text">Testimonials</span>
            </h2>
            <p class="reveal-up mt-5 text-slate-400">Real stories from the RPS family.</p>
        </div>
    </div>

    <!-- Continuous auto-scroll marquee (full-bleed). Cards glide right→left forever. -->
    <div class="reveal-up relative mt-12 overflow-hidden">
        <div class="testimonial-swiper swiper">
            <div class="swiper-wrapper">
                <?php foreach ($testimonials as $index => $t):
                    $parts = preg_split('/\s+/', trim($t['name']));
                    $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
                ?>
                    <div class="swiper-slide">
                        <figure class="tcard">
                            <blockquote class="tcard__text" id="testimonial-text-<?= $index ?>"><?= htmlspecialchars($t['text'], ENT_QUOTES, 'UTF-8') ?></blockquote>
                            <button
                                class="tcard__read-more"
                                type="button"
                                hidden
                                data-testimonial-name="<?= htmlspecialchars($t['name'], ENT_QUOTES, 'UTF-8') ?>"
                                data-testimonial-role="<?= htmlspecialchars($t['role'], ENT_QUOTES, 'UTF-8') ?>"
                                data-testimonial-text="<?= htmlspecialchars($t['text'], ENT_QUOTES, 'UTF-8') ?>"
                                data-testimonial-image="<?= htmlspecialchars($t['image'], ENT_QUOTES, 'UTF-8') ?>"
                                data-testimonial-initials="<?= htmlspecialchars($initials, ENT_QUOTES, 'UTF-8') ?>"
                                aria-haspopup="dialog"
                                aria-controls="testimonial-dialog"
                                aria-label="Read the full testimonial from <?= htmlspecialchars($t['name'], ENT_QUOTES, 'UTF-8') ?>"
                            >Read more</button>
                            <figcaption class="tcard__foot">
                                <span class="tcard__avatar">
                                    <span class="tcard__initials"><?= $initials ?></span>
                                    <?php if (!empty($t['image'])): ?>
                                        <img width="128" height="128" src="<?= htmlspecialchars($t['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($t['name'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" onerror="this.remove()">
                                    <?php endif; ?>
                                </span>
                                <span class="tcard__who">
                                    <span class="tcard__name"><?= htmlspecialchars($t['name'], ENT_QUOTES, 'UTF-8') ?></span>
                                    <span class="tcard__role"><?= htmlspecialchars($t['role'], ENT_QUOTES, 'UTF-8') ?></span>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <dialog id="testimonial-dialog" class="testimonial-dialog" aria-labelledby="testimonial-dialog-name">
        <button class="testimonial-dialog__close" type="button" aria-label="Close testimonial">&times;</button>
        <div class="testimonial-dialog__avatar">
            <span class="testimonial-dialog__initials" hidden></span>
            <img class="testimonial-dialog__image" alt="" hidden>
        </div>
        <div class="testimonial-dialog__header">
            <div>
                <h3 id="testimonial-dialog-name" class="testimonial-dialog__name"></h3>
                <p class="testimonial-dialog__role"></p>
            </div>
        </div>
        <p class="testimonial-dialog__text"></p>
    </dialog>
</section>
