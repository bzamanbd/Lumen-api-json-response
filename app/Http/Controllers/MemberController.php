<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class MemberController extends Controller{

  function index(){
   $details = [
   'name' => 'bulbul',
   'age' => '16',
   'city' => 'Jessor',
   ];
   return response()
   ->json($details);
  }

}