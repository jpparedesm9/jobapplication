<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use \DateTime;

class DefaultController extends Controller
{
    private function getLastDigit($plate)
    {
        return (int)substr($plate, -1);
    }
    private function getWeekDay($date)
    {
       return $date->format('w');
    }
    private function getTime($date)
    {
      $result=strtotime($date->format('H').":".$date->format('i').":00");
      return $result;
    }
    private function validateDigitAgainstDate($day,$lastDigitPlate)
    {
      $temp=$day*2==10?0:$day*2;
      if(($temp==0)&&(($lastDigitPlate==9)||($lastDigitPlate==0)))return false;
      if(($lastDigitPlate==$temp-1)||($lastDigitPlate==$temp)) return false;
      return true;
    }
    public function isPlateAvailableAction(Request $request)
    {
      $validDate=true;
      $plate=$request->get('plate');
      $lastDigitPlate=$this->getLastDigit($plate);
      $dateAndTime=new DateTime($request->get('date'));
      $formattedTime=$this->getTime($dateAndTime);
      if((($formattedTime>=strtotime("07:00:00"))&&($formattedTime<=strtotime("09:30:00")))||(($formattedTime>=strtotime("16:00:00"))&&($formattedTime<=strtotime("19:30:00"))))
      {
        $weekDay=$this->getWeekDay($dateAndTime);
        if (($weekDay>=1)&&($weekDay<=5))$validDate=$this->validateDigitAgainstDate($weekDay,$lastDigitPlate);
      }
      $response=array("event"=>"","message"=>"");
      if($validDate)
        {
          $response["event"]="success";
          $response["message"]="Your are able to drive";
        }
        else{
          $response["event"]="fail";
          $response["message"]="Your are not able to drive";
        }
      return new JsonResponse($response);
    }
    public function verifyPlateAction(Request $request)
    {
        return $this->render('AppBundle:Plate:plateverificator.html.twig');
    }
}
