<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function izodiac($type) {
  if ($type == 'gemini') {
    echo '<p>Gemini is the third astrological sign in the zodiac, originating from the constellation of Gemini. Under the tropical zodiac, the sun transits this sign between May 21 and June 21. Gemini is represented by The Twins Castor and Pollux.</p>';
  } else if ($type == 'cancer') {
    echo '<p>is the fourth astrological sign in the Zodiac, originating from the constellation of Cancer. The Sun transits this area on average between June 22 and July 22. The sign is most often represented by the crab, based on the Karkinos, a giant crab that harassed Heracles during his fight with the Hydra.</p>';
  } else {
    echo '<p>That&rsquo;s lost in space.</p>';
  }
}