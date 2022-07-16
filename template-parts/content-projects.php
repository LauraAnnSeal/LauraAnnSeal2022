<section id="projects">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Latest projects</h1>
                </div>
            </div>
            <div class="row project-row d-flex justify-content-center align-items-middle">

            <?php 

            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'post'
            ));

            if( $posts ): ?>
                    
                <?php foreach( $posts as $post ): 
                    
                    setup_postdata( $post );
                    
                    ?>
                    <!-- begin: project -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <a class="project-link" href="<?php the_permalink() ?>">
                            <div class="project-box h-100">
                                <div class="video">
                                    <video class="lazy" autoplay muted loop playsinline width="100%" height="auto" poster="<?php echo get_field('poster') ?>">
                                        <source data-src="<?php echo get_field('primary_video')['url'] ?>" type="video/mp4">
                                    </video>
                                    <div class="project-content">
                                        <h3><?php echo get_field('project_name') ?></h3>
                                        <div class="row details">
                                            <div class="col-6"><?php echo get_field('client') ?></div>
                                            <div class="col-6 text-right"><?php echo get_field('year') ?></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end: project -->
                
                <?php endforeach; ?>
                
                
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
  var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

  if ("IntersectionObserver" in window) {
    var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(video) {
        if (video.isIntersecting) {
          for (var source in video.target.children) {
            var videoSource = video.target.children[source];
            if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
              videoSource.src = videoSource.dataset.src;
            }
          }

          video.target.load();
          video.target.classList.remove("lazy");
          lazyVideoObserver.unobserve(video.target);
        }
      });
    });

    lazyVideos.forEach(function(lazyVideo) {
      lazyVideoObserver.observe(lazyVideo);
    });
  }
});
    </script>