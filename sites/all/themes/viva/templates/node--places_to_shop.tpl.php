<?php
//dpm($content); 


	  
	  	if (empty($content['field_online_shop_only'])) {
	  	unset($content['field_online_shop_only']);
		}
		
		if ($content['field_online_shop_only'] == ' ') {
	  	unset($content['field_online_shop_only']);
		}
		
		if (empty($content['field_location'])) {
		  unset($content['field_location']);
		}
		
		
		if ($content['field_clear_labelling'] == ' ') {
	  	unset($content['field_online_shop_only']);
		}
		
		if ($content['field_clear_labelling'] == '') {
	  	unset($content['field_online_shop_only']);
		}
		
		if ($content['field_clear_labelling'] == '&nbsp;') {
	  	unset($content['field_online_shop_only']);
		}
		
		
		if (empty($content['field_clear_labelling'])) {
		  unset($content['field_clear_labelling']);
		}
		
		
		if (empty($content['field_drinks_licensed_to_sell_al'])) {
		  unset($content['field_drinks_licensed_to_sell_al']);
		}
	  
	  		if (empty($content['field_facilities_toilets'])) {
		  unset($content['field_facilities_toilets']);
		}
	  
	 // if (($content['field_facilities_toilets']) != ("Toilets")) {
		//  unset($content['field_facilities_toilets']);
		//}
	  
	   
	  
   
    ?>
    <h1>
    <?php // print render($content['field_facilities_toilets']);
	 //print $node->field_facilities_toilets['und']['0']['filename']; 
	  print $content['field_facilities_toilets']['und'][0]['Toilets'];
	 ?>
	
	
    </h1>

<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	  
	  	if (empty($content['field_online_shop_only'])) {
	  	unset($content['field_online_shop_only']);
		}
		if (empty($content['field_location'])) {
		  unset($content['field_location']);
		}
		
		if (empty($content['field_clear_labelling'])) {
		  unset($content['field_clear_labelling']);
		}
		if (empty($content['field_drinks_licensed_to_sell_al'])) {
		  unset($content['field_drinks_licensed_to_sell_al']);
		}
	  
		

	  
	  
	  
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>