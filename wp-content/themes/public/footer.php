<div class="footer">
  <h3>Start your free trial today.</h3>
  <?php echo $response; ?>
  <form class="email" action="<?php the_permalink(); ?>" method="post">
    <input type="text" name="email" value="<?php echo esc_attr($_POST['email']); ?>">
    <input type="text" name="company" value="<?php echo esc_attr($_POST['company_name']); ?>">
    <button type="submit" name="button">GET STARTED FREE</button>
  </form>
  <p>No credit card. No committment</p>
</div>



      <script type="text/javascript" src="https://use.typekit.net/jlf6rqe.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_footer(); ?>
  </body>
</html>
