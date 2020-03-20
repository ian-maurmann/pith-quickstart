<?php


declare(strict_types=1);


namespace Pith\Quickstart;


class QuickstartConfig
{
    private $config_profile;



    function __construct()
    {
        $this->yourConfigSettingsGoHere();
    }




    private function yourConfigSettingsGoHere(){
        $profile = (object)[];

        // Profile:
        $profile->name          = 'Example Config Profile';
        $profile->error_401_url = '/';
        $profile->error_403_url = '/';
        $profile->error_404_url = '/404';
        $profile->error_501_url = '/501';

        $this->config_profile = $profile;
    }



    public function getConfigProfile(){
        return $this->config_profile;
    }


}
