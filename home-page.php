<?php /* Template Name: home page*/
get_header();
?>
    <section class="why-us-section">
        <div class="container d-flex align-items-center justify-content-end">
            <div class="why-us col-md-6">
                <h2>WHY US?</h2>
                <p class="who-we-are">We are Professional</p>
                <p>1000+ Clients, Live Support</p>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever
                    since the 1500s,</p>
            </div>
        </div>
    </section>
    <section class="welcome-here">
        <div class="container d-flex align-items-center justify-content-end">
            <div class="hello-section col-md-6">
                <h2>Welcome Here.</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, <a href="">when an unknown printer took a galley</a> of type and scrambled it
                    to make a type specimen book. It has survived not only five centuries, but
                    also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised <a href="">in the 1960s with the release</a> of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.</p>
    </section>
    <section class="offers">
            <h2 class="text-center">We are Offering....</h2>
            <p class="text-center description-section-offers">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, </p>
        <div class="container">
            <ul class="row">
                <?php
                $args = array(
                    'post_type'     => 'service'
                );
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) :?>
                    <?php while ( $the_query->have_posts() ) : ?>
                        <li class="offers-list col-md-4 d-flex flex-column align-items-center justify-content-center">
                        <?php $the_query->the_post(); ?>

                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('post-thumbnail', ['class' => 'img-service']);
                            }
                            ?>
                            <h2 class="text-center"><?php the_title();?></h2>
                            <p class="text-center"><?php the_content();?></p>

                         <?php endwhile; ?>
                    </li>
                <?php endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php
get_footer();