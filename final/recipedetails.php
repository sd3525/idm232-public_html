<?php
include_once __DIR__ . '/app.php';
$page_title = 'Recipe Details';
include_once __DIR__ . '/_components/header.php'; ?>
<!DOCTYPE html>



    

    <div class="center">
      <div class="title"><b>Breakfast Quesadilla</b></div>
      <div class="recipeflexbox">
        <img
          src="images/quesadilla-2.png"
          alt="quesadillasmall"
          class="quesadillasmall"
        />

        <div class="flexbox-item-cs">
          <div class="category1"><b>Total Time:</b> 40 minutes</div>
          <div class="category2"><b>Level:</b> easy</div>
          <div class="category3"><b>Yield: </b>4-6 servings</div>
          <img src="images/4star.png" alt="star" class="star" />
        </div>
      </div>
      <div class="subheading"><b>Ingredients:</b></div>
      <ul class="component_list">
      </ul>

      <div class="subheading"><b>Instructions:</b></div>
      <ol class="component_list">
        <li>
          To prepare the eggs: In a bowl, whisk the eggs with the hot sauce and
          salt until they are well blended. Add the beans and set aside.
        </li>
        <li class="paragraph">
          To cook the eggs: Melt the butter in a medium-sized skillet (either
          well-seasoned cast iron or nonstick) over medium heat until it’s
          bubbling. Pour in the egg mixture and cook, stirring often, until the
          eggs are just set, about 1 to 3 minutes. Transfer the mixture to a
          bowl to pause the cooking process (the eggs will finish cooking in the
          quesadilla). Stir in the green onion, cilantro and jalapeño.
        </li>
        <li class="paragraph">
          To cook the quesadilla: In a separate, large skillet, warm the
          tortilla over medium heat, flipping occasionally. Once the pan and
          tortilla are warm, sprinkle one-half of the cheese over one-half of
          the tortilla. Top the cheese with scrambled eggs, then top the
          scrambled eggs with the remaining cheese.
        </li>
        <li class="paragraph">
          Press the empty tortilla halve over the toppings. Let the quesadilla
          cook until golden and crispy on the bottom (don’t stop cooking too
          soon!), about 1 to 2 minutes, reducing the heat if necessary to
          prevent burning the tortilla. Flip it and cook until the second side
          is golden and crispy.
        </li>
        <li class="paragraph">
          Immediately remove the skillet from the heat and transfer the
          quesadilla to a cutting board. Let it cool for a few minutes to give
          it time to set, then slice each quesadilla into 2 slices with a very
          sharp knife. Serve immediately, with your favorite salsa and/or hot
          sauce on the side.
        </li>
      </ol>
      <div class="subheading"><b>Notes:</b></div>
      <div class="subheading2"><b>MAKE IT DAIRY FREE:</b></div>
      <div class="notes2">
        Use olive oil instead of butter and omit the cheese.
      </div>
      <div class="subheading2"><b>MAKE IT GLUTEN FREE:</b></div>
      <div class="notes2">Use gluten-free tortillas.</div>
      <div class="subheading2"><b>TORTILLA RECOMMENDATION:</b></div>
      <div class="notes3">
        My favorite brand is Stacey’s Organic, which is available at Whole
        Foods, Natural Grocer’s and my local health food store (I store them in
        the refrigerator or freeze them if I know I won’t be able to eat them
        within a couple of weeks).
      </div>
    </div>
  </body>
</html>

<?php include_once __DIR__ . '/_components/footer.php';

