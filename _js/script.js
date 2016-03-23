import React from 'react';
import ReactDOM from 'react-dom';
import Router from './routers/';

let active = 0;
let intoSwipe = "into-swipe 0.6s forwards";
let outSwipe = "out-swipe 0.6s forwards";

const init = () =>{
  // ReactDOM.render(
  //   <Router />,
  //   document.querySelector('.cms-container')
  // );
  getBurgerMenu();
};

const getBurgerMenu = () =>{
  let $burgerMenu, $cross;
  $burgerMenu = document.querySelector('.burger-img');
  $cross = document.querySelector('.cross');
  console.log(active);
  $burgerMenu.addEventListener("click", flipBurger);
  $cross.addEventListener("click", flipBurger);
}

const flipBurger = () =>{
  let $burgerNav = document.querySelector('.burger-nav');
  if (active == 0){
    $burgerNav.style.animation = intoSwipe;
    active++;
  }else if (active == 1){
    $burgerNav.style.animation = outSwipe;
    active--;
  }

  console.log(active);

}

init();
