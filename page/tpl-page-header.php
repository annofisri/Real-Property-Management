<?php

function navbar($home_active = '', $service_active = '', $patient_active = '', $about_active = '', $doctor_active = '', $blogs_ative = '', $gallery_active = '', $contact_active = '')
{

  return '
    <header id="header" class="header">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo me-auto">
        <img src="/static/image/realproperty-logo.png" alt="logo" class="w-100" />
      </a>
  
      <nav id="navbar" class="navbar">
        <ul id="navbar-ul">
          <li>
            <a class="nav-link scrollto ' . $home_active . '
            " href="/">Home</a>
          </li>
          <li>
            <a class="nav-link scrollto ' . $about_active . '
            " href="/about">About Us</a>
          </li>
          <li>
            <a class="' . $service_active . '
            " href="/about">Services </a>
            
          </li>
         
          <li>
            <a class="nav-link scrollto ' . $doctor_active . '
            " href="/properties">Properties</a>
         
          <li>
            <a class="nav-link scrollto ' . $contact_active . '
            " href="/contact">Contact Us</a>
          </li>
          <li>
            <a class="nav-link scrollto ' . $contact_active . '
            " href="/faqs">FAQ\'s</a>

          </li>

          
          <li>
            <a class="nav-link scrollto login-button ' . $contact_active . '
            " href="/login">Sign in</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle dark-icon"></i>
      </nav>
    </div>
  </header>
    ';
}
