import React from 'react';
import ReactDOM from 'react-dom';
import Router from './routers/';

let active = 0;

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
    $burgerNav.style.display="inline";
    active++;
  }else if (active == 1){
    $burgerNav.style.display="none";
    active--;
  }

  console.log(active);

}

init();
