<?php

function navbar()
{

  return '
    <header id="header" class="header">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo me-auto">
        <img src="./assets/images/realproperty-logo.png" alt="logo" class="w-100" />
      </a>
  
      <nav id="navbar" class="navbar">
        <ul id="navbar-ul">
          <li>
            <a class="nav-link scrollto 
            " href="/">Home</a>
          </li>
          <li>
            <a class="nav-link scrollto
            " href="/about">About Us</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="/services">Services </a>            
          </li>
         
          <li>
            <a class="nav-link scrollto 
            " href="/properties">Properties</a>
         
          <li>
            <a class="nav-link scrollto
            " href="/contact">Contact Us</a>
          </li>
          <li>
            <a class="nav-link scrollto
            " href="/faqs">FAQ\'s</a>

          </li>

          
          <li>
            <a class="nav-link scrollto login-button 
            " href="/login">Sign in</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle dark-icon"></i>
      </nav>
    </div>
  </header>
    ';
}
