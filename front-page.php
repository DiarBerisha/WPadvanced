<?php get_header(); ?>

<main>
    <section class="hero">
        <img class="hero-banner"
        src="<?php echo esc_url(get_theme_file_uri('images/img.png')); ?>" alt="Alt Banner">
    </section >
    <section class="features">
    <h2 id="heading">Why Choose Us?</h2>
    <ul>
        <li>
            <img src="<?php echo esc_url(get_theme_file_uri('images/project.png')); ?>" alt="">
            <span>Project-Based Learning</span>
        </li>
        <li>
            <img src="<?php echo esc_url(get_theme_file_uri('images/ins.png')); ?>" alt="">
            <span>Instructors Who Inspire</span>
        </li>
        <li>
            <img src="<?php echo esc_url(get_theme_file_uri('images/online.png')); ?>" alt="">
            <span>Online And In Person</span>
        </li>
        <li>
            <img src="<?php echo esc_url(get_theme_file_uri('images/digital.png')); ?>" alt="">
            <span>Future-Ready Digital Skills</span>
        </li>
    </ul>
    </section>

    <section class="section-pad">
        <h2 id="heading">Curriculum By Age</h2>
        <ul class="curricula-grid">
            <li class="card">
                <h3 class="card-title">
                    <span class="label">CURRICULUM FOR THE GROUP AGE</span>
                    <span class="age">8-11 YEARS</span>
                </h3>
                <ul class="card-points">
                    <li>Content: Learning the logic and basic concepts of programming</li>
                    <li>Period: September - July (10 months / academic year)</li>
                    <li>Intensity: 3 academic hours per week</li>
                    <li>Group: 8-16 students</li>
                    <li>Method: Online or Physically</li>
                </ul>
            </li>
            <li class="card">
                <h3 class="card-title">
                    <span class="label">CURRICULUM FOR THE GROUP AGE</span>
                    <span class="age">12-15 YEARS</span>
                </h3>
                <ul class="card-points">
                    <li>Content: Learning the logic and basic concepts of programming</li>
                    <li>Period: September - July (10 months / academic year)</li>
                    <li>Intensity: 3 academic hours per week</li>
                    <li>Group: 8-16 students</li>
                    <li>Method: Online or Physically</li>
                </ul>
            </li>
            <li class="card">
                <h3 class="card-title">
                    <span class="label">CURRICULUM FOR THE GROUP AGE</span>
                    <span class="age">16-18 YEARS</span>
                </h3>
                <ul class="card-points">
                    <li>Content: Learning the logic and basic concepts of programming</li>
                    <li>Period: September - July (10 months / academic year)</li>
                    <li>Intensity: 3 academic hours per week</li>
                    <li>Group: 8-16 students</li>
                    <li>Method: Online or Physically</li>
                </ul>
            </li>
            
        </ul>
    </section>
</main>

<?php get_footer(); ?>
