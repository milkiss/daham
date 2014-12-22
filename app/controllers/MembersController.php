<?php

class MembersController extends BaseController {
  public function view($name) {
    switch ($name) {
      case "kyeounsoo" :
        return View::make('pages.member')->with('name', $name);
      default :
        App::abort(404);
    }
  }
}