<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

    <div class="divider">
            <div class="divider_line"></div>
        </div>

	<footer id="colophon" class="site-footer" role="contentinfo">
        
		<div class="col-full">
            <div class="contact">
                <h4>Kontakt</h4>
                <h6>kaensert@outlook.dk</h6>
                <h6>CVR: 33923716</h6>
            </div>
            <div class="socials">
                <h4>Sociale medier</h4>
                <div class="socials_icon">
                <?php
                    echo ' <a target = "blank" href="https://www.facebook.com/owenluft/"<i class="bi bi-facebook"></i></a>';
                    echo ' <a target = "blank" href="https://www.instagram.com/owenluftkaensert/?hl=da"<i class="bi bi-instagram"></i></a>';
                    echo ' <a target = "blank" href=""<i class="bi bi-spotify"></i></a>';
                ?>
               

               </div>
                </div>

            <div class="pages">
                <h4>Information</h4>

                <?php
                echo ' <a href="refund_returns">Forsendelse og returnering</a>';
                echo '<a href="handelsbetingelser">Handelsbetingelser</a>';
                ?>
                
            </div>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
