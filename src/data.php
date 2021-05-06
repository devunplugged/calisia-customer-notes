<?php
namespace calisia_customer_notes;

class data{
    public static function get_customer_notes($user_id){
        global $wpdb;

        return $wpdb->get_results(
            $wpdb->prepare(
            "SELECT * FROM wp_calisia_customer_notes WHERE user_id = %d",
            array(
                $user_id
               )
            )
        );
    }

    public static function get_trait_name($trait){
        switch($trait){
            case 'negative': return array('name'=>__( 'Bad', 'calisia-customer-notes' ), 'color'=>'red'); break;
            case 'positive': return array('name'=>__( 'Good', 'calisia-customer-notes' ), 'color'=>'green'); break;
            default: return array('name'=>__( 'Neutral', 'calisia-customer-notes' ), 'color'=>'darkgray');
        }
    }
}