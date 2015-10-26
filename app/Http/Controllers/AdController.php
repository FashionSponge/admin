<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    /******************************************************************************************************************
     ******************************************************************************************************************
     *********** FUNCTIONS ARE TO BE CHANGE WITH THE CORRECT NAME *****************************************************
     *********** FUNCTIONS ARE CAN BE TRANSFERRED TO THE CORRECT LOCATION OF CONTROLLER *******************************
     ******************************************************************************************************************
     ******************************************************************************************************************
     */

    /**
     * This is for the ad status
     * @param string $filter - will be handling for hourly, daily, weekly, monthly and yearly
     * @return string
     */
   public function getStat($filter='monthly') {
       $array = array(
           'plot1' => array(
               array(1262304000000, rand(100,2000)),
               array(1264982400000, rand(100,2000)),
               array(1267401600000, rand(100,2000)),
               array(1270080000000, rand(100,2000)),
               array(1272672000000, rand(100,2000)),
               array(1275350400000, rand(100,2000)),
               array(1277942400000, rand(100,2000)),
               array(1280620800000, rand(100,2000)),
               array(1283299200000, rand(100,2000)),
               array(1285891200000, rand(100,2000)),
               array(1288569600000, rand(100,2000)),
               array(1291161600000, rand(100,2000)),
           ),
           'plot2' =>  array(
               array(1262304000000, rand(100,2000)),
               array(1264982400000, rand(100,2000)),
               array(1267401600000, rand(100,2000)),
               array(1270080000000, rand(100,2000)),
               array(1272672000000, rand(100,2000)),
               array(1275350400000, rand(100,2000)),
               array(1277942400000, rand(100,2000)),
               array(1280620800000, rand(100,2000)),
               array(1283299200000, rand(100,2000)),
               array(1285891200000, rand(100,2000)),
               array(1288569600000, rand(100,2000)),
               array(1291161600000, rand(100,2000)),
           ),
           'plot3' =>  array(
               array(1262304000000, rand(100,2000)),
               array(1264982400000, rand(100,2000)),
               array(1267401600000, rand(100,2000)),
               array(1270080000000, rand(100,2000)),
               array(1272672000000, rand(100,2000)),
               array(1275350400000, rand(100,2000)),
               array(1277942400000, rand(100,2000)),
               array(1280620800000, rand(100,2000)),
               array(1283299200000, rand(100,2000)),
               array(1285891200000, rand(100,2000)),
               array(1288569600000, rand(100,2000)),
               array(1291161600000, rand(100,2000)),
           )
       );
       return json_encode($array, true);
   }

    /**
     * This will be handling the status of each location of the products.
     * More information will come later.
     * @param string $filter
     * @return string
     */
   public function breakDown($filter='') {
       $data = array(
           array(
               'label' => 'United State1', 'data' => rand(100,200)
           ),
           array(
               'label' => 'Australlia1', 'data' => rand(100,200)
           ),
           array(
               'label' => 'Canada1', 'data' => rand(100,200)
           ),
           array(
               'label' => 'United Kingdom1', 'data' => rand(100,200)
           ),
           array(
               'label' => 'Netherlands1', 'data' => rand(100,200)
           )
       );
       return json_encode($data, true);
   }

    /**
     * (ECPM) Effective Cost Per Mile by country
     * More information will come later.
     * @param string $filter
     * @return string
     */
   public function effectiveCostPerMile($filter='') {
        $data = array(
            array(
                array(rand(200,2000),1),
                array(rand(200,2000),2),
                array(rand(200,2000),3),
                array(rand(200,2000),4),
            ),
            array(
                array(rand(200,2000),1),
                array(rand(200,2000),2),
                array(rand(200,2000),3),
                array(rand(200,2000),4),
            ),
            array(
                array(rand(200,2000),1),
                array(rand(200,2000),2),
                array(rand(200,2000),3),
                array(rand(200,2000),4),
            )
        );
        return json_encode($data, true);
   }

    /**
     * Top performing pages
     * @return string
     */
   public function topPerformingPages() {

       $data = array(
           array(
               'CSS1 hat ' . rand(100,1000),
               '2364' . rand(100,1000),
               '$36,200' . rand(100,1000)
           ),
           array(
               'CSS2 hat' . rand(100,1000),
               '2334' . rand(100,1000),
               '$546,200' . rand(100,1000)
           ),
           array(
               'CSS3 hat' . rand(100,1000),
               '2364' . rand(100,1000),
               '$1,200' . rand(100,1000)
           ),
           array(
               'CSS4 hat' . rand(100,1000),
               '734' . rand(100,1000),
               '$54,200' . rand(100,1000)
           ),
           array(
               'CSS3 hat' . rand(100,1000),
               '2364' . rand(100,1000),
               '$1,200' . rand(100,1000)
           ),
           array(
               'CSS4 hat' . rand(100,1000),
               '734' . rand(100,1000),
               '$54,200' . rand(100,1000)
           )
       );
       return json_encode($data, true);
   }

    /**
     * pagination
     * @return string
     */
    public function pagination() {
        header('Content-Type: application/json');
        $data = array();
        for($i=0; $i<200; $i++) {
            $data['data'][$i] = array(
                "$i Tiger Nixon " . rand(100,1000),
                "$i System Architect" . rand(100,1000),
                "$i Edinburgh" . rand(100,1000),
                "$i 5421" . rand(100,1000),
                "$i 2011/04/25" . rand(100,1000),
                "$i $320,800" . rand(100,1000)
            );
        }
        return json_encode($data, true);
    }

    /**
     * This will show on dashboard header
     * @return string
     */
    public function headerStatus() {
        $data = array(
            array(
                'revenue today'=> '$' .number_format(rand(100,10000)),
                'revenue this month'=> '$' . number_format(rand(100,10000)),
                'total users'=> '$' . number_format(rand(100,10000)),
                'currently active uses'=> '$' . number_format(rand(100,10000)),
            )
        ); 
        return json_encode($data, true);
    }
}