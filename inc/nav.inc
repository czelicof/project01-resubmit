   <nav class="horizontal-nav">
     <ul>
        <li<?php if($thisPage=="Home") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="index.php">Home</a></li>
        <li<?php if($thisPage=="Chinese") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="chinese-foods.php">Chinese Food</a></li>
        <li<?php if($thisPage=="Italian") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="italian-foods.php">Italian Food</a></li>
        <li<?php if($thisPage=="North America") echo " class=\"currentpage\""; ?>> 
        	<a class="button" href="north-american-foods.php">North American Food</a></li>
		<li<?php if($thisPage=="Colophon") echo " class=\"currentpage\""; ?>> 
			<a class="button" href="colophon.php">Colophon</a></li>
      </ul>
    </nav>