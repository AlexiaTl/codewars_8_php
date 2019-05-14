<?php

/*
Kids drink toddy.
Teens drink coke.
Young adults drink beer.
Adults drink whisky.

Make a function that receive age, and return what they drink.

Rules:
Children under 14 old.
Teens under 18 old.
Young under 21 old.
Adults have 21 or more.
*/

function people_with_age_drink(int $old): string {
  if (0<=$old && $old<14){
    return "drink toddy";
  } elseif (14<=$old && $old<18){
    return "drink coke";
  } elseif (18<=$old && $old<21){
    return "drink beer";
  } elseif (21<=$old){
    return "drink whisky";
  }
}