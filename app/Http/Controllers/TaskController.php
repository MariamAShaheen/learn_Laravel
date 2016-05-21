<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TaskController extends Controller
{
   public function  getIndex(){
      $tasks=array ('Meeting my family', 'Remember nour', 'do tasks'); 
      return view('tasks',array('tasks'=> $tasks));
      
    }
 public function  getShow($id){
      $tasks=array ('Meeting my family', 'Remember nour', 'do tasks');
      return $tasks[$id];
   }
     
   public function  getWelcome(){
      $text='Hello My Team We Can Do It!';
      return view('welcome',array('text'=>$text));
   }
      }
