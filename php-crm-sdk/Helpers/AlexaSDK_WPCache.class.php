<?php

class AlexaSDK_WPCache{
        
        public function __construct() {
            
        }
        
        public function set($name, $value, $time_in_second = 600, $skip_if_existing = false){
            
                if (false === ($cache = get_transient($name))){
                    
                        return set_transient( $name, $value, $time_in_second );
                        
                }elseif($skip_if_existing == false){
                    
                        return set_transient( $name, $value, $time_in_second );
                        
                }
        }
        
        public function get($name){
            
                $value = get_transient($name);
                
                if (false === $value){
                        return NULL;
                }else{
                        return $value;
                }
        }
        
        public function cleanup($option = ""){
            
                if ($option != ""){
                        return delete_transient($option);
                }else{
                        return wp_cache_flush();
                }
        }
}
