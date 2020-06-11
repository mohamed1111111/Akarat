<?php
use App\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Requests;


 function getSetting($settingname='Sitename')
{
 return App\SiteSetting::where('namesetting',$settingname)->first()->value('value');
}
function bu_type(){
$array=[
  'flat',
  'challet',
  'vella'
];
  return $array;
}
function bu_rent(){
$array=[
  'owning',
  'rent ',

];
  return $array;
}
function bu_status(){
$array=[
  'Active',
  'Deactive ',

];
  return $array;
}
 ?>
