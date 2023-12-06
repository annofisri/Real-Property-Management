<?php
 if(in_array('id', $requireds) AND ($objPost->id == null OR $objPost->id == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
 if(in_array('name', $requireds) AND ($objPost->name == null OR $objPost->name == "")){
    $alerts["error"][] = 'Name is required!';
  }
  if(in_array('parent_id', $requireds) AND ($objPost->parent_id == null OR $objPost->parent_id == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('short_description', $requireds) AND ($objPost->short_description == null OR $objPost->short_description == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('long_description', $requireds) AND ($objPost->long_description == null OR $objPost->long_description == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('link', $requireds) AND ($objPost->link == null OR $objPost->link == null)){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('src', $requireds) AND ($objPost->src == null OR $objPost->src == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('reorder', $requireds) AND ($objPost->reorder == null OR $objPost->reorder == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('active', $requireds) AND ($objPost->active == null OR $objPost->active == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('is_featured', $requireds) AND ($objPost->is_featured == null OR $objPost->is_featured == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('is_new', $requireds) AND ($objPost->is_new == null OR $objPost->is_new == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
  if(in_array('classes', $requireds) AND ($objPost->classes == null OR $objPost->classes == "")){
    $alerts["error"][] = 'DEFAULT ERROR '.__LINE__;
  }
?>