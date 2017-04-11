<?php
namespace AWB\GraphFacebook;

class GraphFacebook {

    /**
    * Method to get user data
    *
    * @param string $token
    * @return response JSON 
    */
    public function get($token)
    {
        $user_details = "https://graph.facebook.com/me?fields=name,email&access_token=" .$token;
        $response = file_get_contents($user_details);
        return json_decode($response);
    }
}